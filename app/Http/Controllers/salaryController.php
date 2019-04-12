<?php

namespace App\Http\Controllers;
use App\salari;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class salaryController extends Controller{
  public function __construct(){
  $this->middleware('auth');
  }
  public function addsalary(){
    return view('admin.salary.add-salary');
  }
  public function allsalary(){
    $alluser=salari::where('salary_status',1)->orderBy('salary_id','desc')->get();
    return view('admin.salary.all-salary',compact('alluser'));
  }
  public function editsalary($id){
    $edit = salari::where('salary_id',$id)->firstOrFail();
    return view('admin.salary.edit-salary',compact('edit'));
  }
  public function updatesalary(Request $request,$id){
    $edit=salari::where('salary_id',$id)->update([
          'month'=>e($request->month),
          'year'=>e($request->year),
          'advanced_salary'=>e($request->advanced_salary),
        ]);
        return back();
  }
  public function deletesalary($id){
    salari::where('salary_id',$id)->delete();
    return back();
  }
  public function hiddensalary($id){
    salari::where('salary_id',$id)->update([
          'salary_status'=>2
        ]);
      return back();
  }

  public function submitsalary(Request $request){
    $month=$request->month;
    $emp_id=$request->emp_id;
    $year=$request->year;
    $salari=salari::where('month',$month)->where('year',$year)->where('employee_id',$emp_id)->first();
    if ($salari === null ) {
      $this->validate($request,[
        'emp_id'=>'required',
        'month'=>'required',
        'year'=>'required',
        'advanced_salary'=>'required',
      ],[
        'emp_id.required'=>'please enter your employee!',
        'month.required'=>'please enter your month!',
        'year.required'=>'please enter year!',
        'advanced_salary.required'=>'please enter advance salary!',
      ]);

      $alluser=salari::insert([
        'employee_id'=>$_POST['emp_id'],
        'month'=>$_POST['month'],
        'year'=>$_POST['year'],
        'advanced_salary'=>$_POST['advanced_salary'],
        'created_at'=>Carbon::now(),
      ]);

      $notification=array(
      'messege'=>'salary registration Successfully!',
      'alert-type'=>'success'
       );
     return Redirect()->back()->with($notification);
    }else{
      $notification=array(
      'messege'=>'something something!',
      'alert-type'=>'error'
       );
     return Redirect()->back()->with($notification);
    }
  }







  

}
