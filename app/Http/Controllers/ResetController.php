<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
class ResetController extends Controller{

    public function __construct(){
        $this->middleware(['auth']);
      }

      public function reset(){
        return view('admin.users.password-change');
      }
      public function updatepass(Request $request){
        $this->validate($request,[
          'oldpass'=>'required',
          'password'=>'required|min:5|confirmed',
          'password_confirmation'=>'required',
        ],[
          'oldpass.required'=>'please enter your password!',
          'password_confirmation.required'=>'please enter your password!',
        ]);

        $password = Auth::user()->password;
        $oldpass=$request->oldpass;
        
        if(Hash::check($password, $oldpass)) {
            $user=user::find(Auth::id());
            $user->password=Hash::make($request->password);
            $user->save();
            Auth::logout();

        }else{
          return back()->withErrors('Old password is incorrect');
        }




      }
}
