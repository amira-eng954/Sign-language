<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function all(Request $request)
    {
        $userId = $request->firebase_uid;
        $contacts = Contact::where('user_id', $userId)->get();

        return response()->json([
            'message' => 'All contacts for this user',
            'data' => $contacts
        ]);
    }

    public function show($id, Request $request)
    {
        $userId = $request->firebase_uid;
        $contact = Contact::where('id', $id)->where('user_id', $userId)->first();

        if ($contact) {
            return response()->json([
                'message' => '',
                'data' => $contact
            ]);
        }

        return response()->json([
            'message' => 'Contact not found',
        ], 404);
    }

    public function create(Request $request)
    {
        $userId = $request->firebase_uid;

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'c_message' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => "Validation failed. Please check your input.",
                'errors' => $validator->errors()
            ], 422);
        }

        $contact = Contact::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'c_message' => $request->c_message,
            'user_id' => $userId
        ]);

        return response()->json([
            'message' => "Contact created successfully",
            'data' => $contact
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $userId = $request->firebase_uid;

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'c_message' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => "Validation failed. Please check your input.",
                'errors' => $validator->errors()
            ], 422);
        }

        $contact = Contact::where('id', $id)->where('user_id', $userId)->first();

        if (!$contact) {
            return response()->json([
                'message' => 'Contact not found'
            ], 404);
        }

        $contact->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'c_message' => $request->c_message,
        ]);

        return response()->json([
            'message' => "Contact updated successfully",
            'data' => $contact
        ]);
    }

    public function delete($id, Request $request)
    {
        $userId = $request->firebase_uid;

        $contact = Contact::where('id', $id)->where('user_id', $userId)->first();

        if (!$contact) {
            return response()->json([
                'message' => 'Contact not found'
            ], 404);
        }

        if ($contact->image) {
            Storage::delete($contact->image);
        }

        $contact->delete();

        return response()->json([
            'message' => 'Contact deleted successfully.'
        ], 200);
    }
}
