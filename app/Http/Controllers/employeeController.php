<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
use Carbon\Carbon;
use Image;
class employeeController extends Controller{
  public function __construct(){
  $this->middleware('auth');
  }
  public function allemployee(){
    $alluser=employee::where('employee_status',1)->orderBy('employee_id','desc')->get();
    return view('admin.employee.all-employee',compact('alluser'));
  }
  public function addemployee(){
    return view('admin.employee.add-employee');
  }
  public function editemployee($id){
    $edit = employee::where('employee_id',$id)->firstOrFail();
    return view('admin.employee.edit-employee',compact('edit'));
  }
  public function updateemployee(Request $request,$id){
    $edit=employee::where('employee_id',$id)->update([
          'name'=>e($request->name),
          'email'=>e($request->email),
          'phone'=>e($request->phone),
          'address'=>e($request->address),
          'experience'=>e($request->experience),
          'salary'=>e($request->salary),
          'vacation'=>e($request->vacation),
          'city'=>e($request->city),
        ]);
        return back();
  }
  public function deleteemployee($id){
    employee::where('employee_id',$id)->delete();
    return back();
  }
  public function hiddenemployee($id){
    employee::where('employee_id',$id)->update([
          'employee_status'=>2
        ]);
      return back();
  }
  public function searchuser(Request $request){
    $alluser = employee::where('name','like','%'.$request->search.'%')->get();
     return view ('admin.employee.search',compact('alluser'));
  }
  public function submitemployee(Request $request){
    $this->validate($request,[
      'name'=>'required|min:3',
      'email'=>'required|unique:users',
      'phone'=>'required',
      'address'=>'required',
      'experience'=>'required',
      'photos'=>'required',
      'salary'=>'required',
      'vacation'=>'required',
      'city'=>'required',
    ],[
      'name.required'=>'please enter your name!',
      'email.required'=>'please enter your email!',
      'email.unique'=>'please provide an unique email!',
      'phone.required'=>'please enter your phone number!',
      'address.required'=>'please enter your address!',
      'experience.required'=>'please enter your experience!',
      'photos.required'=>'please enter your photos!',
      'salary.required'=>'please enter your salary!',
      'vacation.required'=>'please enter your vacation!',
      'city.required'=>'please enter your city!',
    ]);

    $alluser=employee::insertGetId([
      'name'=>$_POST['name'],
      'email'=>$_POST['email'],
      'phone'=>$_POST['phone'],
      'address'=>$_POST['address'],
      'experience'=>$_POST['experience'],
      'salary'=>$_POST['salary'],
      'vacation'=>$_POST['vacation'],
      'city'=>$_POST['city'],
      'employee_img'=>'',
      'created_at'=>Carbon::now(),
    ]);

    if($request->hasFile('photos')){
      $image = $request->file('photos');
      $ImageName='employee'.'-'.time().'.'.$image->getClientOriginalExtension();
      Image::make($image)->resize(100, 100)->save('uploads/'.$ImageName);
      employee::where('employee_id',$alluser)->update([
        'employee_img'=>$ImageName,
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
