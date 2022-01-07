<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function ProfileView(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('backend.user.profile.view_profile', compact('user'));
    }//end profileview

    public function ProfileEdit($id){
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('backend.user.profile.edit_profile',compact('editData'));
    }//end profileedit

    public function ProfileStore(Request $request){
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->telefoon = $request->telefoon;
        $data->adres = $request->adres;
        $data->gender = $request->gender;
        if ($request->file('afbeelding')) {
            $file = $request->file('afbeelding');
            @unlink(public_path('upload/user_images/'.$data->afbeelding));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images/'),$filename);
            $data['afbeelding'] = $filename;
        }
        $data->save();

        $notification = array(
            'message'=> 'Profiel aangepast',
            'alert-type' => 'success'
        );
        return redirect()->route('profile.view')->with($notification);
    }//end profileStore

    /* Wachtwoord Sectie */

    public function PasswordView(){
       
        return view('backend.user.profile.edit_password');
    }

    public function PasswordUpdate(Request $request){
        $validatedData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login');
        }else{
            return redirect()->back();
        }

    } //end passwordupdate

}
