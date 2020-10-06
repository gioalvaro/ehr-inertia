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
        $physician_note = PhysicianNote::whereHas('encounter', function (Builder $query) use ($provider) {
            $query->where('test', '=', true)->orWhere('provider_id','=',$provider->id);
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhysicianNote  $physicianNote
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhysicianNote $physicianNote)
    {
        //
    }
}
