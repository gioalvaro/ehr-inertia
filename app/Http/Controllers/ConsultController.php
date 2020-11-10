<?php

namespace App\Http\Controllers;

use App\Models\Consult;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class ConsultController extends AppBaseController
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
        $laboratory = Consult::whereHas('encounter', function (Builder $query) use ($encounter_id) {
            $query->where('test', '=', true)->orWhere('id','=',$encounter_id);
        })->get();
        return $this->sendResponse($laboratory->toArray(), 'Consults retrieve successfully');
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
        
        $consult = Consult::where('encounter_id','=',$obj['encounter_id'])->first();
        
        if (!empty($consult)){
            $consult->delete();
        }
        $consult = new Consult();
        $consult->observation = $obj['observation'];
        $consult->encounter_id = $obj['encounter_id'];
        $consult->save();
        return $this->sendResponse($consult,'consult was save successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function show(Consult $consult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function edit(Consult $consult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consult $consult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consult $consult)
    {
        //
    }
}
