<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\attendance;
use App\employee;
use Carbon\Carbon;
use Image;
class attendanceController extends Controller{
  public function __construct(){
  $this->middleware('auth');
  }
  public function addemployeeattandence(){
    $alluser=employee::where('employee_status',1)->orderBy('employee_id','desc')->get();
    return view('admin.attendance.add-attendance',compact('alluser'));
  }
  public function allemployeeattandence(){

    return view('admin.attendance.all-attendance');
  }
  public function editattandence(){
    return view('admin.attendance.edit-attendance');
  }
  public function updateattandence(){

  }

  public function submitattandence(Request $request){
    foreach ($request->employee_ids as $id=>$attendace) {
      if($attendace === 'present'){
        $alluser=attendance::insert([
          'employee_id' => $id,
          'attendance_date' => Carbon::now()->toDateString(),
          'attendance_year' => Carbon::now()->format('Y'),
          'attendance_time' => Carbon::now()->format('h:i:s'),
          'attendance' => $attendace,
          'created_at' => Carbon::now()
        ]);
      }else{
        $alluser=attendance::insert([
          'employee_id' => $id,
          'attendance_date' => Carbon::now()->toDateString(),
          'attendance_year' => Carbon::now()->format('Y'),
          'attendance' => $attendace,
          'created_at' => Carbon::now()
        ]);
      }
    }
    if ($alluser) {
       $notification=array(
       'messege'=>'customer registration Successfully!',
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
