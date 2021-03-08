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
            $query->where('test', '=', true)->orWhere('id', '=', $encounter_id);
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
        $repeated = Imaging::where('encounter_id', '=', $obj['encounter_id'])->where('type', '=', $obj['type'])->first();

        if (!empty($repeated)) {
            return $this->sendError("Cannot save cause already send the same type of order");
        }
        $img = new Imaging();
        $img->encounter_id = $obj['encounter_id'];
        $img->type = $obj['type'];
        $img->summary = $obj['summary'];
        $img->save();
        $img_new = Imaging::with('encounter', 'encounter.department', 'encounter.provider')->where('id', '=', $img->id)->first();
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
        if (strcmp($obj['type'], 'CT Scan') == 0) {
            $item = new ImagingItem();
            $item->imaging_id = $img->id;
            $item->image_url = '/storage/imaging-dx/ct_molina.png';
            $item->observation = 'Head CT: Report: “Technique: CT head without contrast.”

Findings:  No mass, hemorrhage or hydrocephalus. Basal ganglia and posterior fossa structures are normal. No established major vessel vascular territory infarct. No intra or extra axial collection. The basal cisterns and foramen magnum are patent. The air cells of the petrous temporal bone are non-opacified. No fracture demonstrated. Mild cerebral atrophy noted.

Conclusion: Mild cerebral atrophy consistent with age, otherwise normal study.
';
            $item->save();
        }
        if (strcmp($obj['type'], 'Radiology') == 0) {
            $item = new ImagingItem();
            $item->imaging_id = $img->id;
            $item->image_url = '/storage/imaging-dx/molina_x_ray_1.png';
            $item->observation = 'Chest XR Report: “Both lungs are clear and expanded with no infiltrates.  Heart size is within normal limits.  No atelectasis or calcifications are seen.”';
            $item->save();
            $item2 = new ImagingItem();
            $item2->imaging_id = $img->id;
            $item2->image_url = '/storage/imaging-dx/molina_x_ray_2.png';
            $item2->observation = 'Chest XR Report: “Both lungs are clear and expanded with no infiltrates.  Heart size is within normal limits.  No atelectasis or calcifications are seen.”';
            $item2->save();
        }
        if (strcmp($obj['type'], 'EKG') == 0) {
            $item = new ImagingItem();
            $item->imaging_id = $img->id;
            $item->image_url = '/storage/imaging-dx/molina_ekg.png';
            $item->observation = 'Normal sinus rhythm with heart rate in the 60s. Normal axis. No LVH. No significant ST/T abnormalities are apparent.”';
            $item->save();
        }
        return $this->sendResponse($img_new, "Problem stored");
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
