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
        $laboratory = Laboratory::with('laboratory_type', 'encounter.provider')->whereHas('encounter', function (Builder $query) use ($encounter_id) {
            $query->where('test', '=', true)->orWhere('id', '=', $encounter_id);
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
        $laboratories_types = LaboratoryType::whereIn('id', $labsTypeIds)->get();
        foreach ($laboratories_types as $row => $valor) {
            if ($valor['verification'] == 1) {
                switch ($valor->id) {
                    case 3:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "1",
                            'min' => "0.8",
                            'max' => "1.1",
                            'units' => ""
                        ]);
                        Log::info(3);
                        break;
                    case 5:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "12",
                            'min' => "11",
                            'max' => "13.5",
                            'units' => ""
                        ]);
                        Log::info(5);
                        break;
                    case 15:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "50",
                            'min' => "20",
                            'max' => "250",
                            'units' => "ng/mL"
                        ]);
                        Log::info(5);
                        break;
                    case 16:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "100",
                            'min' => "60",
                            'max' => "170",
                            'units' => "mcg/dL"
                        ]);
                        Log::info(5);
                        break;
                    case 17:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "138",
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
                            'current_value' => "3.5",
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
                            'current_value' => "98",
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
                            'current_value' => "24",
                            'min' => "22",
                            'max' => "28",
                            'units' => "mmol/L"
                        ]);
                        Log::info(20);
                        break;
                    case 22:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "0.9",
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
                            'current_value' => "100",
                            'min' => "70",
                            'max' => "110",
                            'units' => "mg/dL"
                        ]);
                        Log::info(23);
                        break;
                    case 35:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "3.2",
                            'min' => "",
                            'max' => "",
                            'units' => ""
                        ]);
                        Log::info(35);
                        break;
                    case 38:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "0.2",
                            'min' => "",
                            'max' => "",
                            'units' => ""
                        ]);
                        Log::info(38);
                        break;
                    case 70:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "1.038",
                            'min' => "",
                            'max' => "",
                            'units' => ""
                        ]);
                        Log::info(38);
                        break;
                    case 118:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "7.5",
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
                            'current_value' => "152",
                            'min' => "150",
                            'max' => "400",
                            'units' => "10^9/L"
                        ]);
                        Log::info(121);
                        break;
                    case 124:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "16",
                            'min' => "",
                            'max' => "",
                            'units' => ""
                        ]);
                        Log::info(124);
                        break;
                    case 125:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "48",
                            'min' => "36",
                            'max' => "53",
                            'units' => "%"
                        ]);
                        Log::info(125);
                        break;
                    case 130:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "90",
                            'min' => "80",
                            'max' => "96",
                            'units' => "fL"
                        ]);
                        Log::info(125);
                        break;
                    case 139:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "300",
                            'min' => "250",
                            'max' => "450",
                            'units' => "mcg/dL"
                        ]);
                        Log::info(139);
                        break;
                    case 140:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "300",
                            'min' => "160",
                            'max' => "950",
                            'units' => "pg/mL"
                        ]);
                        Log::info(140);
                        break;
                    case 141:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "20",
                            'min' => "16",
                            'max' => "40",
                            'units' => "mg/dL"
                        ]);
                        Log::info(141);
                        break;
                    case 142:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "negative",
                            'min' => "",
                            'max' => "",
                            'units' => ""
                        ]);
                        Log::info(142);
                        break;
                    case 143:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "no growth",
                            'min' => "",
                            'max' => "",
                            'units' => ""
                        ]);
                        Log::info(143);
                        break;
                    case 144:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "100",
                            'min' => "60",
                            'max' => "170",
                            'units' => "mcg/dL"
                        ]);
                        break;
                    case 145:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "none",
                            'min' => "",
                            'max' => "",
                            'units' => ""
                        ]);
                        break;
                    case 146:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "none",
                            'min' => "",
                            'max' => "",
                            'units' => ""
                        ]);
                        break;
                    case 147:
                        $laboratory = Laboratory::create([
                            'encounter_id' => $encounter_id,
                            'laboratory_type_id' => $valor->id,
                            'current_value' => "none",
                            'min' => "",
                            'max' => "",
                            'units' => ""
                        ]);
                        break;
                }
            } else {
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
