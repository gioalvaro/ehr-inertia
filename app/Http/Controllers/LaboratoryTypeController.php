<?php

namespace App\Http\Controllers;

use App\Models\LaboratoryType;
use Illuminate\Http\Request;

class LaboratoryTypeController extends AppBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratory_types = LaboratoryType::all();
        return $this->sendResponse($laboratory_types, "Laboratory Types Retrieve Successfuly");
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
     * @param  \App\Models\LaboratoryType  $laboratoryType
     * @return \Illuminate\Http\Response
     */
    public function show(LaboratoryType $laboratoryType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaboratoryType  $laboratoryType
     * @return \Illuminate\Http\Response
     */
    public function edit(LaboratoryType $laboratoryType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LaboratoryType  $laboratoryType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LaboratoryType $laboratoryType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaboratoryType  $laboratoryType
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaboratoryType $laboratoryType)
    {
        //
    }
}
