<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paysalary;
use App\employee;
use Carbon\Carbon;
use Image;
class paysalaryController extends Controller{
  public function __construct(){
    $this->middleware(['auth']);
  }

  public function addpaysalary(){

    return view('admin.pay-salary.add-pay-salary');
  }
  public function allpaysalary(){
    $alluser=employee::where('employee_status',1)->orderBy('employee_id','desc')->get();
    return view('admin.pay-salary.all-pay-salary',compact('alluser'));
  }
  public function editpaysalary(){
    return view('admin.pay-salary.edit-pay-salary');
  }
  public function updatepaysalary(){

  }
  public function hiddenpaysalary(){

  }
  public function  submitpaysalary(){

  }


}
