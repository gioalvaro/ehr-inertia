<?php

namespace App\Http\Controllers;

use App\Models\Imaging;
use App\Models\ImagingItem;
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
        $encounter_id = $request->all()['encounter_id'];
        $laboratory = Imaging::with('imaging_items', 'encounter', 'encounter.provider', 'encounter.department')->whereHas('encounter', function (Builder $query) use ($encounter_id) {
            $query->where('test', '=', true)->orWhere('id','=',$encounter_id);
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
        $obj = $request->all();
        $repeated = Imaging::where('encounter_id','=',$obj['encounter_id'])->where('type','=',$obj['type'])->first();
        
        if (!empty($repeated)){
            return $this->sendError("Cannot save cause already send the same type of order");
        }
        $problem = new Imaging();
        $problem->encounter_id = $obj['encounter_id'];
        $problem->type = $obj['type'];
        $problem->summary = $obj['summary'];
        $problem->save();
        $problem_new = Imaging::with('encounter', 'encounter.department','encounter.provider')->where('id', '=', $problem->id)->first();
        $user = $request->user();
        $provider = $user->provider()->first();        
        /*      
        if(strcmp($obj['type'], 'Ultrasound') == 0){
            $item = new ImagingItem();
            $item->imaging_id = $problem->id;
            $item->image_url = '/storage/imaging-dx/Imaging_2.jpg';
            $item->observation = 'Gallbladder wall showing thickening, a large gallstone, and abundant heterogeneous sludge and air within the gallbladder, represented by a bright echogenic stripe with “dirty shadowing” beneath, consistent with emphysematous cholecystitis.  
            Clinical correlation advised.';
            $item->save();
            $item2 = new ImagingItem();
            $item2->imaging_id = $problem->id;
            $item2->image_url = '/storage/imaging-dx/Imaging_3.jpg';
            $item2->observation = 'Gallbladder wall showing thickening, a large gallstone, and abundant heterogeneous sludge and air within the gallbladder, represented by a bright echogenic stripe with “dirty shadowing” beneath, consistent with emphysematous cholecystitis.  
            Clinical correlation advised.';
            $item2->save();
        }*/
        if(strcmp($obj['type'], 'MRI') == 0){
            $item = new ImagingItem();
            $item->imaging_id = $problem->id;
            $item->image_url = '/storage/imaging-dx/Imaging_4.jpg';
            $item->observation = 'Coronal and sagittal postcontrast T1-weighted spin-echo images show an enlarged pituitary with rim enhancement and no internal enhancement (arrows). Findings are suggestive of pituitary infarct,';
            $item->save();            
        }
        return $this->sendResponse($problem_new, "Problem stored");
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
    public function destroy($id)
    {
        $problem = Imaging::find($id);        
        $problem->delete();
        return $this->sendResponse($problem, "Imging deleted");
    }
}
