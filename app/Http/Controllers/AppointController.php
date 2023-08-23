<?php

namespace App\Http\Controllers;

use App\Models\Appoint;
use App\Models\Patient;
use Illuminate\Http\Request;

class AppointController extends Controller
{
    //
    public function index(){
        $appoints = Appoint::all();
        return $appoints;
    }

    public function store(Request $request){
        $appoint = Appoint::create($request->all());
        return response()->json($appoint,201);
    }

    public function update(Request $request, string $id){
        $appoint = Appoint::findOrFail($id);
        $appoint->update($request->all());
        return response()->json($appoint,200);
    }

    public function showAll(){
        $appoints = Patient::with('Appoint')->get();
        return $appoints;
    }
}
