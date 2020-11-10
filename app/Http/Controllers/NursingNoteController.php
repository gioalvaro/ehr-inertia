<?php

namespace App\Http\Controllers;

use App\Models\NursingNote;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class NursingNoteController extends AppBaseController
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
        $physician_note = NursingNote::whereHas('encounter', function (Builder $query) use ($encounter_id) {
            $query->where('test', '=', true)->orWhere('id','=',$encounter_id);
        })->with('nursing_type')->with('encounter.department','encounter.provider')->get();
        return $this->sendResponse($physician_note->toArray(), 'Nursing Notes retrieve successfully');
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
     * @param  \App\Models\NursingNote  $nursingNote
     * @return \Illuminate\Http\Response
     */
    public function show(NursingNote $nursingNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NursingNote  $nursingNote
     * @return \Illuminate\Http\Response
     */
    public function edit(NursingNote $nursingNote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NursingNote  $nursingNote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NursingNote $nursingNote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NursingNote  $nursingNote
     * @return \Illuminate\Http\Response
     */
    public function destroy(NursingNote $nursingNote)
    {
        //
    }
}
