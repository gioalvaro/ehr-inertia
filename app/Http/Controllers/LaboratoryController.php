<?php

namespace App\Http\Controllers;

use App\Models\Laboratory;
use App\Models\LaboratoryType;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class LaboratoryController extends AppBaseController
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
        $laboratory = Laboratory::with('laboratory_type','encounter.provider')->whereHas('encounter', function (Builder $query) use ($provider) {
            $query->where('test', '=', true)->orWhere('provider_id','=',$provider->id);
        })->get();
        return $this->sendResponse($laboratory->toArray(), 'Laboratory retrieve successfully');
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
        
        $labsTypeIds = $request->all()['labsType'];
        $encounter_id = $request->all()['encounter_id'];        
        $laboratories_types = LaboratoryType::whereIn('id',$labsTypeIds)->get();
        foreach($laboratories_types as $row=>$valor){
            
            if($valor['verification'] == 1){                
                switch ($valor->id) {
                    case 2:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "13.500",                            
                            'min' => "4.500",
                            'max' => "11.000",
                            'units' => "cmm"
                        ]);
                    break;
                    case 3:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "1",                            
                            'min' => "0.9",
                            'max' => "1.1",
                            'units' => ""
                        ]);
                    break;
                    case 4:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "28",                            
                            'min' => "25",
                            'max' => "40",
                            'units' => "sec"
                        ]);
                    break;
                    case 5:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "12",                            
                            'min' => "11",
                            'max' => "15",
                            'units' => "sec"
                        ]);
                    break;
                    case 14:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "46",                            
                            'min' => "0",
                            'max' => "15",
                            'units' => "mm/hr"
                        ]);
                    break;
                    case 17:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "145",                            
                            'min' => "136",
                            'max' => "145",
                            'units' => "mmol/L"
                        ]);
                    break;
                    case 18:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "5",
                            'min' => "3.5",
                            'max' => "5",
                            'units' => "mmol/L"
                        ]);
                    break;
                    case 19:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "102",
                            'min' => "95",
                            'max' => "105",
                            'units' => "mmol/L"
                        ]);
                    break;
                    case 20:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "24",
                            'min' => "22",
                            'max' => "28",
                            'units' => "mmol/L"
                        ]);
                    break;
                    case 22:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "0.8",
                            'min' => "0.6",
                            'max' => "1.2",
                            'units' => "mg/dL"
                        ]);
                    break;
                    case 24:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "47",
                            'min' => "8",
                            'max' => "20",
                            'units' => "U/L"
                        ]);
                    break;
                    case 25:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "62",
                            'min' => "8",
                            'max' => "20",
                            'units' => "U/L"
                        ]);
                    break;
                    case 26:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "145",
                            'min' => "37",
                            'max' => "107",
                            'units' => "U/L"
                        ]);
                    break;
                    case 27:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "100",
                            'min' => "0",
                            'max' => "160",
                            'units' => "U/L"
                        ]);
                    break;
                    case 28:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "110",
                            'min' => "25",
                            'max' => "125",
                            'units' => "U/L"
                        ]);
                    break;
                    case 30:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "1",
                            'min' => "0.3",
                            'max' => "1.2",
                            'units' => "mg/dL"
                        ]);
                    break;
                    case 32:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "9.6",
                            'min' => "8.4",
                            'max' => "10.2",
                            'units' => "mg/dL"
                        ]);
                    break;
                    case 35:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "4.4",
                            'min' => "3.5",
                            'max' => "5.5",
                            'units' => "g/dL"
                        ]);
                    break;
                    case 36:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "46",
                            'min' => "25",
                            'max' => "90",
                            'units' => "U/L"
                        ]);
                    break;
                    case 37:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "3",
                            'min' => "0",
                            'max' => "10",
                            'units' => "ng/mL"
                        ]);
                    break;
                    case 38:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "0.03",
                            'min' => "0",
                            'max' => "0.03",
                            'units' => "ng/mL"
                        ]);
                    break;
                    case 90:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "Positive for gram negative rods",
                            'min' => "",
                            'max' => "Negative",
                            'units' => "observation"
                        ]);
                    break;
                    case 120:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "28",
                            'min' => "10",
                            'max' => "20",
                            'units' => "mg/dL"
                        ]);
                    break;
                    case 121:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "420.000",
                            'min' => "150.000",
                            'max' => "400.000",
                            'units' => "cmm"
                        ]);
                    break;
                    case 122:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "10",
                            'min' => "0",
                            'max' => "5",
                            'units' => "%"
                        ]);
                    break;
                    case 123:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "74",
                            'min' => "45",
                            'max' => "75",
                            'units' => "%"
                        ]);
                    break;
                    case 124:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "14",
                            'min' => "14",
                            'max' => "18",
                            'units' => "g/dL"
                        ]);
                    break;
                    case 125:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "42",
                            'min' => "36",
                            'max' => "53",
                            'units' => "%"
                        ]);
                    break;
                    
                }
            }
            else{                
                $laboratory = Laboratory::create([
                    'encounter_id' => $encounter_id,
                    'laboratory_type_id' => $valor->id,
                    'current_value' => "Need Validation",                            
                    'min' => "",
                    'max' => "",
                    'units' => ""
                ]);
            }
        }
        
        return $this->sendSuccess('Laboratory save Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laboratory  $laboratory
     * @return \Illuminate\Http\Response
     */
    public function show(Laboratory $laboratory)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laboratory  $laboratory
     * @return \Illuminate\Http\Response
     */
    public function edit(Laboratory $laboratory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laboratory  $laboratory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laboratory $laboratory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laboratory  $laboratory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lab = Laboratory::find($id);                        
        $lab->delete();
        return $this->sendSuccess('Laboratory delete Successfuly');
    }
}
