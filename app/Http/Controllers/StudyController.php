<?php

namespace App\Http\Controllers;

use App\Models\Study;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class StudyController extends AppBaseController
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
        $laboratory = Study::with('encounter', 'encounter.department','encounter.provider')->whereHas('encounter', function (Builder $query) use ($encounter_id) {
            $query->where('test', '=', true)->orWhere('id','=',$encounter_id);
        })->get();
        return $this->sendResponse($laboratory->toArray(), 'Study retrieve successfully');
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
        $user = $request->user();
        $problem = new Study();
        $provider = $user->provider()->first();
        $problem->encounter_id = $obj['encounter']['id'];
        $problem->type = $obj['type'];
        $problem->observation = $obj['observation'];
        if($obj['type'] == 'orthostatic' && $obj['encounter']['patient_id'] == 2){
            $problem->result = 'Orthostatic vital signs:

            Sitting: BP90/70, pulse 92/min; Lying/Supine BP 100/60; Three minutes after standing BP 70/52 , HR 110
        
            SK, RN ';
        }
        else{
            $problem->result = '';
        }
        
        $problem->save();
        $problem_new = Study::with('encounter', 'encounter.department','encounter.provider')->where('id', '=', $problem->id)->first();
        return $this->sendResponse($problem_new, "Problem stored");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function show(Study $study)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function edit(Study $study)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = $request->all();
        $problem = Study::find($id);
        $problem->encounter_id = $obj['encounter_id'];
        $problem->type = $obj['type'];
        $problem->observation = $obj['observation'];
        $problem->save();
        $problem_new = Study::with('encounter', 'encounter.department','encounter.provider')->where('id', '=', $problem->id)->first();
        return $this->sendResponse($problem_new, "Problem edited");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $problem = Study::find($id);        
        $problem->delete();
        return $this->sendResponse($problem, "Problem deleted");
    }
}
