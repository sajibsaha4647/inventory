<?php

namespace App\Http\Controllers;
use App\customer;
use Carbon\Carbon;
use Image;
use Illuminate\Http\Request;

class customerController extends Controller{
  public function __construct(){
  $this->middleware('auth');
  }
  public function addcustomer(){
    return view('admin.customer.add-customer');
  }
  public function allcustomer(){
    $alluser=customer::where('customer_status',1)->orderBy('customer_id','desc')->get();
    return view('admin.customer.all-customer',compact('alluser'));
  }
  public function editcustomer($id){
    $edit = customer::where('customer_id',$id)->firstOrFail();
    return view('admin.customer.edit-customer',compact('edit'));
  }
  public function deletecustomer($id){
    customer::where('customer_id',$id)->delete();
    return back();
  }
  public function updatecustomer(Request $request,$id){
    $edit=customer::where('customer_id',$id)->update([
          'name'=>e($request->name),
          'email'=>e($request->email),
          'phone'=>e($request->phone),
          'address'=>e($request->address),
          'shopname'=>e($request->shopname),
          'bank_name'=>e($request->bank_name),
          'bank_branch'=>e($request->bank_branch),
          'bank_account_no'=>e($request->bank_account_no),
          'bank_account_name'=>e($request->bank_account_name),
          'city'=>e($request->city),
        ]);
        return back();
  }
  public function hiddencustomer($id){
    customer::where('customer_id',$id)->update([
          'customer_status'=>2
        ]);
      return back();
  }
  public function searchuser(Request $request){
    $alluser = customer::where('name','like','%'.$request->search.'%')->get();
     return view ('admin.customer.search',compact('alluser'));
  }
  public function submitcustomer(Request $request){
    $this->validate($request,[
      'name'=>'required|min:3',
      'email'=>'required|unique:customers',
      'phone'=>'required',
      'address'=>'required',
      'shopname'=>'required',
      'bank_name'=>'required',
      'bank_branch'=>'required',
      'bank_account_no'=>'required',
      'bank_account_name'=>'required',
      'photos'=>'required',
      'city'=>'required',
    ],[
      'name.required'=>'please enter your name!',
      'email.required'=>'please enter your email!',
      'email.unique'=>'please provide an unique email!',
      'phone.required'=>'please enter your phone number!',
      'address.required'=>'please enter your address!',
      'shopname.required'=>'please enter your shop name!',
      'photos.required'=>'please enter your photos!',
      'bank_name.required'=>'please enter bank name!',
      'bank_branch.required'=>'please enter branch name!',
      'bank_account_no.required'=>'please enter bank account no!',
      'bank_account_name.required'=>'please enter account name!',
      'city.required'=>'please enter your city!',
    ]);

    $alluser=customer::insertGetId([
      'name'=>$_POST['name'],
      'email'=>$_POST['email'],
      'phone'=>$_POST['phone'],
      'address'=>$_POST['address'],
      'shopname'=>$_POST['shopname'],
      'bank_name'=>$_POST['bank_name'],
      'bank_branch'=>$_POST['bank_branch'],
      'bank_account_no'=>$_POST['bank_account_no'],
      'bank_account_name'=>$_POST['bank_account_name'],
      'city'=>$_POST['city'],
      'customer_img'=>'',
      'created_at'=>Carbon::now(),
    ]);

    if($request->hasFile('photos')){
      $image = $request->file('photos');
      $ImageName='customer'.'-'.time().'.'.$image->getClientOriginalExtension();
      Image::make($image)->resize(100, 100)->save('uploads/'.$ImageName);
      customer::where('customer_id',$alluser)->update([
        'customer_img'=>$ImageName,
      ]);
    }else{
      echo "hoi nai!!!";
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
