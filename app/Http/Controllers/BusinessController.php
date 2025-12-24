<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Department;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index() {
        $business       = Business::find(1);
        $departments    = Department::get();
        return view('business.index', compact(
            'business',
            'departments'
        ));
    }

    public function load_ubigeo() {
        $ubigeo         = Business::find(1)->ubigeo;
        $departments    = Department::get();
        $provinces      = Province::get();
        $districts      = District::get();
        $department     = NULL;
        $province       = NULL;
        $district       = NULL;

        if(!empty($ubigeo)) {
            $district       = District::where('codigo', $ubigeo)->first();
            $province       = Province::where('provincia', $district->provincia)->first();
            $department     = Department::where('departamento', $district->departamento)->first();
        } 
        else {
            $district   = NULL;
            $province   = NULL;
            $department = NULL;
        }

        return response()->json([
            'ubigeo'        => $ubigeo,
            'departments'   => $departments,
            'provinces'     => $provinces,
            'districts'     => $districts,
            'department'    => $department,
            'province'      => $province,
            'district'      => $district
        ]);
    }

    public function load_provinces(Request $request) {
        $codigo         = $request->input('codigo');
        $provinces      = Province::where('departamento_codigo', $codigo)->get();
        return response()->json([
            'provinces' => $provinces
        ]);
    }

    public function load_districts(Request $request) {
        $codigo                 = $request->input('codigo');
        $codigo_departamento    = $request->input('codigo_departamento');
        $districts              = District::where('departamento_codigo', $codigo_departamento)
                                            ->where('provincia_codigo', $codigo)->get();
        return response()->json([
            'districts' => $districts
        ]);
    }
}
