<?php

namespace App\Http\Controllers;

use App\Models\Medication;
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
        $medications = Medication::with('medication_type')->with('encounter.provider','encounter.department')->whereHas('encounter', function (Builder $query) use ($provider) {
            $query->where('test', '=', true)->orWhere('provider_id','=',$provider->id);
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
        $obj = $request->all();
        $medication = Medication::create([
            'encounter_id' => $obj['encounter_id'],
            'medication_type_id' => $obj['medication_type']['id'],
            'name' => $obj['name'],
            'dose' => $obj['dose'],
            'frequency' => $obj['frequency'],
            'units' => $obj['units'],
            'route' => $obj['route'],
            'verified' => $obj['verified'],
            'start_date' => new Carbon(new DateTime($obj['start_date']))//,
            //'end_date' => new Carbon(new DateTime($obj['end_date']))
        ]);
        $this->sendSuccess('Medication save Successfuly');
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
        dd($obj);
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
        $medication = Medication::find($request->all()['id']);        
        $medication->name = $request->all()['name'];
        $medication->dose = $request->all()['dose'];
        $medication->frequency = $request->all()['frequency'];
        $medication->route = $request->all()['route'];
        $medication->units = $request->all()['units'];
        $medication->start_date = new Carbon(new DateTime($request->all()['start_date']));
        $medication->end_date = new Carbon(new DateTime($request->all()['end_date']));
        $medication->verified = $request->all()['verified'];
        $medication->save();
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
        $medication->delete();
        return $this->sendSuccess('Medication delete Successfuly');
    }
}
