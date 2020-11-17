<?php

namespace App\Http\Controllers;

use App\Models\Laboratory;
use App\Models\LaboratoryType;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Log;

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
        $encounter_id = $request->all()['encounter_id'];
        $laboratory = Laboratory::with('laboratory_type','encounter.provider')->whereHas('encounter', function (Builder $query) use ($encounter_id) {
            $query->where('test', '=', true)->orWhere('id','=',$encounter_id);
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
                    case 17:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "130",                            
                            'min' => "136",
                            'max' => "145",
                            'units' => "mmol/L"
                        ]);
                        Log::info(17);
                    break;
                    case 18:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "4.5",                            
                            'min' => "3.5",
                            'max' => "5.0",
                            'units' => "mmol/L"
                        ]);
                        Log::info(18);
                    break;
                    case 19:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "90",                            
                            'min' => "95",
                            'max' => "105",
                            'units' => "mmol/L"
                        ]);
                        Log::info(19);
                    break;
                    case 20:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "22",                            
                            'min' => "22",
                            'max' => "28",
                            'units' => "mmol/L"
                        ]);
                        Log::info(20);
                    break;
                    case 21:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "25",                            
                            'min' => "7",
                            'max' => "18",
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
                        Log::info(22);
                    break;
                    case 23:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "55",                            
                            'min' => "70",
                            'max' => "110",
                            'units' => "mg/dL"
                        ]);
                        Log::info(23);
                    break; 
                    case 45:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "1",                            
                            'min' => "",
                            'max' => "3",
                            'units' => "nIU/mL"
                        ]);
                        Log::info(45);
                    break;                    
                    case 59:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "35",                            
                            'min' => "30",
                            'max' => "350",
                            'units' => "ng/mL"
                        ]);
                        Log::info(59);
                    break;
                    case 60:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "0.66",                            
                            'min' => "4",
                            'max' => "25",
                            'units' => "u IU/mL"
                        ]);
                        Log::info(60);
                    break;
                    case 61:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "0.26",
                            'min' => "1.24",
                            'max' => "7.8",
                            'units' => "IU/L"
                        ]);
                        Log::info(61);
                    break;
                    case 62:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "0.44",
                            'min' => "0.5",
                            'max' => "5.0",
                            'units' => "ml U/L"
                        ]);
                        Log::info(62);
                    break;                   
                    case 64:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "0.2",
                            'min' => "4.6",
                            'max' => "12",
                            'units' => "ug/dL"
                        ]);
                        Log::info(64);
                    break;
                    case 65:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "1",
                            'min' => "5",
                            'max' => "-",
                            'units' => "ng/mL"
                        ]);
                        Log::info(65);
                    break;
                    case 66:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "4",
                            'min' => "5",
                            'max' => "40",
                            'units' => "ng/mL"
                        ]);
                        Log::info(66);
                    break;
                    case 67:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "5",
                            'min' => "10",
                            'max' => "20",
                            'units' => "ug/dL"
                        ]);
                        Log::info(67);
                    break;
                    case 68:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "41",
                            'min' => "50",
                            'max' => "250",
                            'units' => "mg/dL"
                        ]);
                        Log::info(68);
                    break;
                    case 69:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "3",
                            'min' => "10",
                            'max' => "-",
                            'units' => "ng/mL"
                        ]);
                        Log::info(69);
                    break;
                    case 113:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "10",
                            'min' => "6",
                            'max' => "76",
                            'units' => "pg/mL"
                        ]);
                        Log::info(113);
                    break; 
                    case 118:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "10",
                            'min' => "4.5",
                            'max' => "11",
                            'units' => "10^3/mm3"
                        ]);
                        Log::info(118);
                    break; 
                    case 121:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "250",
                            'min' => "150",
                            'max' => "400",
                            'units' => "10^9/L"
                        ]);
                        Log::info(122);
                    break;
                    case 122:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "2",
                            'min' => "3",
                            'max' => "5",
                            'units' => "%"
                        ]);
                    break;
                    case 125:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "34",
                            'min' => "36",
                            'max' => "53",
                            'units' => "%"
                        ]);
                        Log::info(125);
                    break;
                    case 128:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "4.5",
                            'min' => "3.5",
                            'max' => "6",
                            'units' => "10^6/mm3"
                        ]);
                        Log::info(128);
                    break;
                    case 129:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "12.7",
                            'min' => "13.5",
                            'max' => "17.5",
                            'units' => "g/dL"
                        ]);
                        Log::info(129);
                    break;                    
                    case 130:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "90",
                            'min' => "80",
                            'max' => "100",
                            'units' => "um3"
                        ]);
                        Log::info(130);
                    break;
                    case 131:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "12",
                            'min' => "11.5",
                            'max' => "14.5",
                            'units' => "%"
                        ]);
                        Log::info(131);
                    break;
                    case 132:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "Not Present",
                            'min' => "Not Present",
                            'max' => "",
                            'units' => ""
                        ]);
                        Log::info(132);
                    break;
                    case 133:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "10",
                            'min' => "4.5",
                            'max' => "11",
                            'units' => "10^9/mm3"
                        ]);
                        Log::info(133);
                    break;
                    case 134:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "55",
                            'min' => "54",
                            'max' => "62",
                            'units' => "%"
                        ]);
                        Log::info(134);
                    break;
                    case 135:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "1.5",
                            'min' => "1",
                            'max' => "3",
                            'units' => "%"
                        ]);
                        Log::info(135);
                    break;
                    case 136:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "0.6",
                            'min' => "0",
                            'max' => "0.75",
                            'units' => "%"
                        ]);
                        Log::info(136);
                    break;
                    case 137:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "30",
                            'min' => "25",
                            'max' => "33",
                            'units' => "%"
                        ]);
                        Log::info(137);
                    break;
                    case 138:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "4",
                            'min' => "3",
                            'max' => "7",
                            'units' => "%"
                        ]);
                        Log::info(138);
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
