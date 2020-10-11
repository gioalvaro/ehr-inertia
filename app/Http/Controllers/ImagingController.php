<?php

namespace App\Http\Controllers;

use App\Models\Imaging;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class ImagingController extends AppBaseController
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
        $laboratory = Imaging::with('imaging_items')->whereHas('encounter', function (Builder $query) use ($provider) {
            $query->where('test', '=', true)->orWhere('provider_id','=',$provider->id);
        })->get();
        return $this->sendResponse($laboratory->toArray(), 'Imaging retrieve successfully');
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
     * @param  \App\Models\Imaging  $imaging
     * @return \Illuminate\Http\Response
     */
    public function show(Imaging $imaging)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imaging  $imaging
     * @return \Illuminate\Http\Response
     */
    public function edit(Imaging $imaging)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Imaging  $imaging
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imaging $imaging)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imaging  $imaging
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imaging $imaging)
    {
        //
    }
}
