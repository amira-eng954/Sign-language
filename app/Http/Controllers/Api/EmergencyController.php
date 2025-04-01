<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Emergency;
use Illuminate\Http\Request;

class EmergencyController extends Controller
{
    //
    public function all()
    {
        $Emergencies=Emergency::all();
        return response()->json([
            'message'=>"Fetched all emergencies successfully",
            "data"=>$Emergencies
        ]);
    }
    public function show($id)
    {
        $Emergency=Emergency::find($id);
        if($Emergency){
        return response()->json([
            'message'=>"Emergency details fetched successfully.",
            "data"=>$Emergency
        ],200);
    }
    return response()->json([
        'message' => "Emergency not found."
    ], 404);
    }
}
