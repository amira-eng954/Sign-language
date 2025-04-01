<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class ProfileController extends Controller
{
    public function edit(Request $request)
    {
        // الحصول على ID المستخدم
        $id = $request->user_id;
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'message' => 'User not found',
            ], 404);
        }

        // التحقق من صحة البيانات
        $data = Validator::make($request->all(), [
            'name' => 'required|max:50|unique:users,name,' . $user->id,
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required',
            'password' => 'nullable|min:8',
            'image' => 'image|mimes:png,jpg,jpeg,gif|max:2048',
            'location' => 'required|string'
        ]);

        if ($data->fails()) {
            return response()->json([
                'message' => '',
                'error' => $data->errors()
            ], 422);
        }

        // تحديث الصورة إذا كانت موجودة
       // $image = $user->image; // الاحتفاظ بالصورة القديمة في حالة عدم إرسال صورة جديدة
        if ($request->has('image')) {
            // حذف الصورة القديمة
            Storage::delete($user->image);
            // تخزين الصورة الجديدة
            $user->image = Storage::putFile('users', $request->image);
        }

       
        // تشفير كلمة المرور
        if($request->filled('password')){
            $user->password = bcrypt($request->password);
        }
       

        // تحديث بيانات المستخدم
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
        ]);

        // إرجاع استجابة بنجاح التحديث
        return response()->json([
            'message' => 'Profile updated successfully',
            'data' => $user
        ]);
    }
}
