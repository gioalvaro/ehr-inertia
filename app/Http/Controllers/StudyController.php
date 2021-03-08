<?php

namespace App\Http\Controllers;

use App\Models\Study;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Log;

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
        $laboratory = Study::with('encounter', 'encounter.department', 'encounter.provider')->whereHas('encounter', function (Builder $query) use ($encounter_id) {
            $query->where('test', '=', true)->orWhere('id', '=', $encounter_id);
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

        if (strcmp($obj['type'], 'orthostatic') == 0) {
            $problem->result = 'Supine:  HR 88, BP 140/89 Sitting: HR 90, BP 120/88 Standing: HR 100, BP 90/60, reports feeling dizzy';
        }
        if (strcmp($obj['type'], 'visual') == 0) {
            $problem->result = 'without correction: OS: 20/200, OD: 20/200, OU: 20/200 With correction: OS 20/100, OD: 20/100; OU: 20/100';
        }
        if (strcmp($obj['type'], 'ecg') == 0) {
            $problem->result = 'EKG Report: “Normal sinus rhythm with heart rate in the 60s. Normal axis. No LVH. No significant ST/T abnormalities are apparent. No significant change compared with the patient’s June 2015 EKG, as interpreted by me.”
';
        }

        $problem->save();
        $problem_new = Study::with('encounter', 'encounter.department', 'encounter.provider')->where('id', '=', $problem->id)->first();
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
        $problem_new = Study::with('encounter', 'encounter.department', 'encounter.provider')->where('id', '=', $problem->id)->first();
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
