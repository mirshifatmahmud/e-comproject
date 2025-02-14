<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(){
        return view('user.home');
    }

    public function updateProfile(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ],[
            'name.required' => 'Name must be input!',
        ]);

        User::findOrFail(Auth::id())->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('success', 'User Profile Updated successfully!');
    }

    public function imageForm(){
        return view('user.avatar');
    }

    // Handle Image Upload
    public function imageUpload(Request $request)
    {

        if(Auth::user()->image == null){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);
    
            // Store image in "public/uploads"
            $imagePath = $request->file('image')->store('uploads', 'public');
    
            echo $imagePath;
    
            // // Save to database
            User::findOrFail(Auth::id())->update([
                'image' => $imagePath,
                'updated_at' => Carbon::now(),
            ]);
    
            return redirect()->back()->with('success', 'Image uploaded successfully!');
        }else{
            $image = User::findOrFail(Auth::id());

            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            // Delete from storage
            Storage::disk('public')->delete($image->image);
    
            // Store image in "public/uploads"
            $imagePath = $request->file('image')->store('uploads', 'public');
    
            echo $imagePath;
    
            // // Save to database
            User::findOrFail(Auth::id())->update([
                'image' => $imagePath,
                'updated_at' => Carbon::now(),
            ]);
    
            return redirect()->back()->with('success', 'Image uploaded successfully!');
        }
        
    }
}
