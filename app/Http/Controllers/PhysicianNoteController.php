<?php

namespace App\Http\Controllers;

use App\Models\Encounter;
use App\Models\PhysicianNote;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class PhysicianNoteController extends AppBaseController
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
        $physician_note = PhysicianNote::whereHas('encounter', function (Builder $query) use ($encounter_id) {
            $query->where('test', '=', true)->orWhere('id','=',$encounter_id);
        })->with('physician_type')->with('encounter.department','encounter.provider')->get();
        return $this->sendResponse($physician_note->toArray(), 'Physician Notes retrieve successfully');
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
        $physician = PhysicianNote::create([
            'encounter_id' => $obj['encounter_id'],
            'physician_type_id' => 1,
            'note' => $obj['note']
        ]);
        $this->sendSuccess('Physician Note save Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PhysicianNote  $physicianNote
     * @return \Illuminate\Http\Response
     */
    public function show(PhysicianNote $physicianNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhysicianNote  $physicianNote
     * @return \Illuminate\Http\Response
     */
    public function edit(PhysicianNote $physicianNote)
    {
        dd($physicianNote);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PhysicianNote  $physicianNote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PhysicianNote $physicianNote)
    {
        $physician = PhysicianNote::find($request->all()['id']);        
        $physician->note = $request->all()['note'];
        $physician->save();
        return $this->sendSuccess('Physician Note update Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhysicianNote  $physicianNote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {   
        $physician = PhysicianNote::find($id);                        
        $physician->delete();
        return $this->sendSuccess('Physician Note delete Successfuly');
    }
}
