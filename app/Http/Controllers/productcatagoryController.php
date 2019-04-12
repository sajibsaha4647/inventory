<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productcatagory;
use Carbon\Carbon;
class productcatagoryController extends Controller{

  public function __construct(){
  $this->middleware('auth');
  }

  public function addcatagory(){
    return view('admin.product-catagory.add-product-catagory');
  }
  public function allcatagory(){
    $alluser=productcatagory::where('catagory_status',1)->orderBy('catagory_id','desc')->get();
    return view('admin.product-catagory.all-product-catagory',compact('alluser'));
  }
  public function editcatagory($id){
    $edit = productcatagory::where('catagory_id',$id)->firstOrFail();
    return view('admin.product-catagory.edit-product-catagory',compact('edit'));
  }
  public function hiddencatagory($id){
    $hidden=productcatagory::where('catagory_id',$id)->update([
          'catagory_status'=>2
        ]);
        if ($hidden) {
           $notification=array(
           'messege'=>'softdelete update Successfully!',
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
  public function Updatecatagory(Request $request,$id){
    $edit=productcatagory::where('catagory_id',$id)->update([
          'catagory_name'=>e($request->catagory_name),
        ]);
        if ($edit) {
           $notification=array(
           'messege'=>'catagory update Successfully!',
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
  public function Submitcatagory(Request $request){
    $this->validate($request,[
      'catagory_name'=>'required',
    ],[
      'catagory_name.required'=>'please enter your catagory name!',
    ]);

    $alluser=productcatagory::insert([
      'catagory_name'=>$_POST['catagory_name'],
      'created_at'=>Carbon::now(),
    ]);

    if ($alluser) {
       $notification=array(
       'messege'=>'catagory insert Successfully!',
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
