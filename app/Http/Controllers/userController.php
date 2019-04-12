<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Hash;
use Image;
use Auth;
class userController extends Controller{

  public function __construct(){
  $this->middleware('auth');
  }

  public function index(){
    $alluser=user::where('user_status',1)->orderBy('id','desc')->get();
    return view('admin.users.all-user',compact('alluser'));
  }
  public function adduser(){
    return view('admin.users.add-user');
  }
  public function viewuser($id){
    $viewview = user::where('id',$id)->firstOrFail();
    return view('admin.users.view-user',compact('viewview'));
  }
  public function edituser($id){
    $edit = user::where('id',$id)->firstOrFail();
    return view('admin.users.edit-user',compact('edit'));
  }
  public function deleteuser($id){
    $user = user::where('id',$id)->first();
    $delete = unlink(public_path("uploads/{$user->user_img}"));
    if($delete) {
      $user->delete();
      return back();
    }
  }
  public function updateuser(Request $request, $id){
    $edit=user::where('id',$id)->update([
          'name'=>e($request->name),
          'email'=>e($request->email),
          'password'=>Hash::make($request->password),
        ]);
        return back();
  }
  public function searchuser(Request $request){
   $alluser = User::where('name','like','%'.$request->search.'%')->get();
    return view ('admin.users.search',compact('alluser'));
 }

  public function hidden($id){
    user::where('id',$id)->update([
          'user_status'=>2
        ]);
      return back();
}

  public function submituser(Request $request){
    $this->validate($request,[
      'name'=>'required|min:3',
      'email'=>'required|unique:users',
      'password'=>'required|min:5',
    ],[
      'name.required'=>'please enter your name!',
      'email.required'=>'please enter your email!',
      'email.unique'=>'please provide an unique email!',
      'password.required'=>'please enter your password!',
    ]);

    if($request->password !== $request->repassword){
      return back()->withErrors('Password and confirm password did not match');
    }

    $alluser=User::insertGetId([
      'name'=>$_POST['name'],
      'email'=>$_POST['email'],
      'password'=>Hash::make($_POST['password']),
      'user_img'=>'',
      'created_at'=>Carbon::now(),
    ]);

    if($request->hasFile('pic')){
      $image = $request->file('pic');
      $ImageName='user'.'-'.time().'.'.$image->getClientOriginalExtension();
      Image::make($image)->resize(50, 50)->save('public/uploads/'.$ImageName);
      User::where('id',$alluser)->update([
        'user_img'=>$ImageName,
      ]);
    }else{
      echo "hoi nai!!!";
    }

    if ($alluser) {
       $notification=array(
       'messege'=>'user registration Successfully!',
       'alert-type'=>'success'
        );
      return Redirect()->back()->with($notification);
   }else{
       $notification=array(
       'messege'=>'something something!',
       'alert-type'=>'success'
        );
      return Redirect()->back()->with($notification);
   }
  }
}
