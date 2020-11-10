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
                    case 35:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "4.2",                            
                            'min' => "3.5",
                            'max' => "5.5",
                            'units' => "g/dL"
                        ]);
                    break;
                    case 36:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "33",                            
                            'min' => "22",
                            'max' => "198",
                            'units' => "U/L"
                        ]);
                    break;
                    case 37:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "18",                            
                            'min' => "5",
                            'max' => "25",
                            'units' => "IU/L"
                        ]);
                    break;
                    case 38:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "0.05",                            
                            'min' => "0.04",
                            'max' => "0.39",
                            'units' => "mg/mL"
                        ]);
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
