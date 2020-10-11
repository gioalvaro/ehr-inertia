<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class ProblemController extends AppBaseController
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
        $problem = Problem::with('problem_type', 'encounter', 'encounter.department','encounter.provider')->whereHas('encounter', function (Builder $query) use ($provider) {
            $query->where('test', '=', true)->orWhere('provider_id','=',$provider->id);
        })->get();
        return $this->sendResponse($problem->toArray(), 'problem retrieve successfully');
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
        $problem = new Problem();
        $problem->encounter_id = $obj['encounter_id'];
        $problem->problem_type_id = $obj['problem_type_id'];
        $problem->save();
        $problem_new = Problem::with('problem_type', 'encounter', 'encounter.department','encounter.provider')->where('id', '=', $problem->id)->first();
        return $this->sendResponse($problem_new, "Problem stored");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function show(Problem $problem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function edit(Problem $problem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = $request->all();
        $problem = Problem::find($id);
        $problem->encounter_id = $obj['encounter_id'];
        $problem->problem_type_id = $obj['problem_type_id'];
        $problem->save();
        $problem_new = Problem::with('problem_type', 'encounter', 'encounter.department','encounter.provider')->where('id', '=', $problem->id)->first();
        return $this->sendResponse($problem_new, "Problem edited");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        $problem = Problem::find($id);        
        $problem->delete();
        return $this->sendResponse($problem, "Problem deleted");
    }
}
