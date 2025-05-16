<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Dictionary;
use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    //

    public function all($category)
    {
        $dictionary=Dictionary::where('category','=',$category)->get();
        $dictionary=$dictionary->map(function($item)

        {
            $item->media_path="https://sign-anguage-dmf5fvf9d6ffg9b6.scm.uaenorth-01.azurewebsites.net/wwwroot/public/{$item->media_path}";
            return $item;

        });
        return response()->json([
            'message'=>"Fetched all  successfully",
            "data"=>$dictionary
        ]);
    }
    public function show($id)
    {
        $one=Dictionary::find($id);
      
        if($one){
           $one->media_path = "https://sign-anguage-dmf5fvf9d6ffg9b6.scm.uaenorth-01.azurewebsites.net/wwwroot/public/{$one->media_path}";
           
        return response()->json([
           
            "data"=>$one
        ],200);
    }
    return response()->json([
        'message' => " not found."
    ], 404);
    }
}



















