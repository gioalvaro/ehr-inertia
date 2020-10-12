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
        $laboratory = Study::with('encounter', 'encounter.department','encounter.provider')->whereHas('encounter', function (Builder $query) use ($provider) {
            $query->where('test', '=', true)->orWhere('provider_id','=',$provider->id);
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
        $problem = new Study();
        $problem->encounter_id = $obj['encounter_id'];
        $problem->type = $obj['type'];
        $problem->observation = $obj['observation'];
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
