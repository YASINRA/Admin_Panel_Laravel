<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Mockery\CountValidator\AtMost;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function edit_profile()
    {
        return view('admin.profile');
    }

    public function update_profile(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if($request->password != '' || $request->password_confirmation != ''){
            $request->validate([
                'password' => ['required', 'min:8'],
                'password_confirmation' => ['required', 'same:password'],
            ]);
            $user->password = bcrypt('password');
        }

        if($request->hasFile('photo')){
            $request->validate([
                'photo' => ['required', 'image', 'mimes:jpeg,png,gif'],
            ]);
              
            if(Auth::user()->photo != '') {
                unlink(public_path('uploads/'.Auth::user()->photo));
            }
            $final_name = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('uploads'), $final_name);
            $user->photo = $final_name;
        }  

        $user->save();
        return redirect()->back()->with('success', 'Profile is updated successfully!');
    }
}
