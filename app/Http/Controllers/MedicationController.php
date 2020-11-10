<?php

namespace App\Http\Controllers;

use App\Models\Medication;
use App\Models\MedicationVerification;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;
use DateTime;

class MedicationController extends AppBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $provider = $user->provider()->first();
        $encounter_id = $request->all()['encounter_id'];
        $medications = Medication::with('medication_type')
        ->with(['medication_verifications' => function($query) use ($encounter_id){
            $query->where('encounter_id','=',$encounter_id);
        }])->with('encounter.provider', 'encounter.department')
        ->whereHas('encounter', function (Builder $query) use ($encounter_id) {
                $query->where('test', '=', true)->orWhere('id', '=', $encounter_id);
        })->get();
        return $this->sendResponse($medications->toArray(), 'Medications retrieve successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if (array_key_exists('verified', $request->all())) {            
            $encounter_id = $request->all()['encounter_id'];
            $medication_verifications = MedicationVerification::where('encounter_id','=',$encounter_id)->get();
            foreach($medication_verifications as $row){
                $row->update([
                    'verified' => intval($request->all()['verified'])
                ]);
            }

        } 
        else {
            $obj = $request->all();
            $medication = Medication::create([
                'encounter_id' => $obj['encounter_id'],
                'medication_type_id' => $obj['medication_type']['id'],
                'name' => $obj['name'],
                'dose' => $obj['dose'],
                'frequency' => $obj['frequency'],
                'units' => $obj['units'],
                'route' => $obj['route'],
                'start_date' => new Carbon(new DateTime($obj['start_date'])),
                'end_date' => new Carbon(new DateTime($obj['end_date']))
            ]);            
            $medication_verification = MedicationVerification::create([
                'encounter_id' => $obj['encounter_id'],
                'medication_id' => $medication['id'],
                'discontinued' => intval($obj['discontinued'])
            ]);
        }        
        return $this->sendSuccess('Medication save Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medication  $medication
     * @return \Illuminate\Http\Response
     */
    public function show(Medication $medication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medication  $medication
     * @return \Illuminate\Http\Response
     */
    public function edit(Medication $medication)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medication  $medication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medication $medication)
    {

        if (array_key_exists('verified', $request->all())) {
            $encounter_id = $request->all()['encounter_id'];
            $medication_verifications = MedicationVerification::where('encounter_id','=',$encounter_id)->get();
            foreach($medication_verifications as $row){
                $row->update([
                    'verified' => intval($request->all()['verified'])
                ]);
            }
        } else {
            $medication = Medication::find($request->all()['id']);
            $medication->name = $request->all()['name'];
            $medication->dose = $request->all()['dose'];
            $medication->frequency = $request->all()['frequency'];
            $medication->route = $request->all()['route'];
            $medication->units = $request->all()['units'];
            $medication->start_date = new Carbon(new DateTime($request->all()['start_date']));
            $medication->end_date = new Carbon(new DateTime($request->all()['end_date']));            
            $medication->save();
            $medication_verification = MedicationVerification::where('medication_id', '=', $request->all()['id'])
                ->where('encounter_id', '=', $request->all()['encounter_id'])->first();            
            $medication_verification['discontinued'] = intval($request->all()['discontinued']);
            $medication_verification->save();
        }
        return $this->sendSuccess('Medication update Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medication  $medication
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medication = Medication::find($id);
        $medication_verification = MedicationVerification::where('medication_id', '=', $medication['id'])->delete();
        $medication->delete();
        return $this->sendSuccess('Medication delete Successfuly');
    }
}
