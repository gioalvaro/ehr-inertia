<?php

namespace App\Http\Controllers;

use App\Models\MedicationType;
use Illuminate\Http\Request;

class MedicationTypeController extends AppBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medications = MedicationType::all();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicationType  $medicationType
     * @return \Illuminate\Http\Response
     */
    public function show(MedicationType $medicationType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicationType  $medicationType
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicationType $medicationType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MedicationType  $medicationType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicationType $medicationType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicationType  $medicationType
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicationType $medicationType)
    {
        //
    }
}
