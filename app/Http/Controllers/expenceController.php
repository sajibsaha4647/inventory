<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\expence;
use Carbon\Carbon;
use Hash;
use Image;
use Auth;
class expenceController extends Controller{

  public function __construct(){
    $this->middleware('auth');
  }

  public function addexpence(){
    return view('admin.expence.add-expence');
  }
  public function allexpence(){
    $alluser=expence::where('expence_status',1)->orderBy('expence_id','desc')->get();
    return view('admin.expence.all-expence',compact('alluser'));
  }
  public function editexpence($id){
    $edit = expence::where('expence_id',$id)->firstOrFail();
    return view('admin.expence.edit-expence',compact('edit'));
  }
  public function deleteexpence($id){
    $delete=expence::where('expence_id',$id)->delete();

    if ($delete) {
       $notification=array(
       'messege'=>'delete Successfully!',
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
  public function updateexpence(Request $request,$id){
    $edit=expence::where('expence_id',$id)->update([
          'expence_details'=>e($request->expence_details),
          'expence_amount'=>e($request->expence_amount),
        ]);

        if ($edit) {
           $notification=array(
           'messege'=>'update Successfully!',
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
  public function submitexpence(Request $request){
    $this->validate($request,[
      'expence_details'=>'required',
      'expence_amount'=>'required',
      'expence_date'=>'required',
      'expence_month'=>'required',
      'expence_year'=>'required',
    ],[
      'expence_details.required'=>'please enter your expence details!',
      'expence_amount.required'=>'please enter your expence amount!',
      'expence_date.required'=>'please enter your expence date!',
      'expence_month.required'=>'please enter your expence month!',
      'expence_year.required'=>'please enter your expence year!',
    ]);

    $alluser=expence::insertGetId([
      'expence_details'=>$_POST['expence_details'],
      'expence_amount'=>$_POST['expence_amount'],
      'expence_month'=>$_POST['expence_month'],
      'expence_date'=>$_POST['expence_date'],
      'expence_year'=>$_POST['expence_year'],
      'expence_img'=>'',
      'created_at'=>Carbon::now(),
    ]);

    if($request->hasFile('pic')){
      $image = $request->file('pic');
      $ImageName='expence'.'-'.time().'.'.$image->getClientOriginalExtension();
      Image::make($image)->resize(50, 50)->save('public/uploads/expence/'.$ImageName);
      expence::where('expence_id',$alluser)->update([
        'expence_img'=>$ImageName,
      ]);
    }else{
      echo "problem here!!!";
    }

    if ($alluser) {
       $notification=array(
       'messege'=>'insert Successfully!',
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

//today expence
  public function alltodayexpence(){
    $alluser=expence::where('expence_status',1)->where('expence_date',date('m/d/Y'))->orderBy('expence_id','desc')->get();
    $total_amout_for_today = $alluser->sum(function($user)  {
      return $user->expence_amount;
    });

    return view('admin.expence.today-expence.all-todayexpence',compact('alluser', 'total_amout_for_today'));
  }
  public function deletetodayexpence($id){
    expence::where('expence_id',$id)->delete();
    return back();
  }
//monthly expence
  public function allmonthlyexpence(){
    $alluser=expence::where('expence_status',1)->where('expence_month',date('F'))->orderBy('expence_id','desc')->get();
    $total_amout_for_month=$alluser->sum(function($user){
      return $user->expence_amount;
    });
    return view('admin.expence.monthly-expence.all-monthexpence',compact('alluser','total_amout_for_month'));
  }
  public function deletemonthlyexpence($id){
    expence::where('expence_id',$id)->delete();
    return back();

  }

//yearly expence

 public function allyearlyexpence(){
  $alluser=expence::where('expence_status',1)->where('expence_month',date('F'))->orderBy('expence_id','desc')->get();
  $total_amout_for_yearly=$alluser->sum(function($user){
    return $user->expence_amount;
  });
  return view('admin.expence.yearly-expence.all-yearlyexpence',compact('alluser','total_amout_for_yearly'));
 }
 public function deleteyearlyexpence($id){

 }









}
