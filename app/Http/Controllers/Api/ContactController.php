<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function all(Request $request)
    {
        $id=$request->user_id;
        $contacts=Contact::where('user_id','=',$id)->get();
        return response()->json([
            'message'=>'all contacts for you',
            'id'=>$id,
            'data'=>$contacts
        ]);

    }

    public function show($id,Request $request)
    {
        $contact=Contact::where('id','=',$id)->where("user_id",'=',$request->user_id)->first();
        if($contact){
            return response()->json([
                'message'=>'',
                'data'=>$contact
            ]);
    
        }
        return response()->json([
            'message'=>'Contact not found',
            
        ]);

    }

    public function create(Request $request)
    {   
        $id=$request->user_id;
        $validator=Validator::make($request->all(),[
            'name'=>"required",
            'phone'=>"required",
            'c_message'=>'required',
           // 'image'=>"required|image|mimes:png,jpg,jpeg"
        ]);
        if($validator->fails())
        {
            return response()->json([
                'message'=>"Validation failed. Please check your input.",
                'errors'=>$validator->errors()
            ]);
        }

       // $image=Storage::putFile("users",$request->image);
        $contact=Contact::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'c_message'=>$request->c_message,
            //'image'=>$image,
            'user_id'=>$id
        ]);

        return response()->json([
            'message'=>"Contact created successfully",
            'data'=>$contact
        ],200);
    }


    public function update(Request $request,$id)
    {
        $validator=Validator::make($request->all(),[
            'name'=>"required",
            'phone'=>"required",
            'c_message'=>'required',
           // 'image'=>"required|image|mimes:png,jpg,jpeg"
        ]);
        if($validator->fails())
        {
            return response()->json([
                'message'=>"Validation failed. Please check your input.",
                'errors'=>$validator->errors()
            ]);
        }

        $contact=Contact::where('id','=',$id)->where("user_id",'=',$request->user_id)->first();
        if($contact ==null)
        {
            return response()->json([
                'messsage'=>'Contact not found'
            ],400);
        }
        // if($request->has('image'))
        // {
        //    Storage::delete($contact->image);
        //   $image= Storage::putFile("users",$request->image);
        // }
        $contact->update([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'c_message'=>$request->c_message,
            'user_id'=>$request->user_id

        ]);

        return response()->json([
            'message'=>"Contact updated successfully",
            'data'=>$contact
        ]);

    }


    public function delete($id,Request $request)
    {
        $contact=Contact::where('id','=',$id)->where("user_id",'=',$request->user_id)->first();
        if($contact ==null)
        {
            return response()->json([
                'messsage'=>'Contact not found'
            ],400);
            
        }
        Storage::delete($contact->image);
        $contact->delete();
        return response()->json([
            'messsage'=>'Contact deleted successfully.'
        ],200);

    }
}
