<?php

namespace App\Http\Controllers;

use App\Models\ProblemType;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class ProblemTypeController extends AppBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $problems = ProblemType::all();
        return $this->sendResponse($problems->toArray(), 'Problem Types retrieve successfully');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProblemType  $problemType
     * @return \Illuminate\Http\Response
     */
    public function show(ProblemType $problemType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProblemType  $problemType
     * @return \Illuminate\Http\Response
     */
    public function edit(ProblemType $problemType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProblemType  $problemType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProblemType $problemType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProblemType  $problemType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProblemType $problemType)
    {
        //
    }
}
