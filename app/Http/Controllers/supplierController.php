<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supplier;
use Carbon\Carbon;
use Image;
class supplierController extends Controller{

  public function __construct(){
  $this->middleware('auth');
  }
  public function addsuppliers(){
    return view('admin.suppliers.add-suppliers');
  }
  public function allsuppliers(){
    $alluser=supplier::where('supplier_status',1)->orderBy('supplier_id','desc')->get();
    return view('admin.suppliers.all-suppliers',compact('alluser'));
  }
  public function editsuppliers($id){
    $edit = supplier::where('supplier_id',$id)->firstOrFail();
    return view('admin.suppliers.edit-suppliers',compact('edit'));
  }
  public function deletesuppliers($id){
    supplier::where('supplier_id',$id)->delete();
    return back();
  }
  public function updatesuppliers(Request $request,$id){
    $edit=supplier::where('supplier_id',$id)->update([
          'name'=>e($request->name),
          'email'=>e($request->email),
          'phone'=>e($request->phone),
          'address'=>e($request->address),
          'type'=>e($request->type),
          'shop'=>e($request->shop),
          'bank_name'=>e($request->bank_name),
          'bank_branch'=>e($request->bank_branch),
          'bank_account_numer'=>e($request->bank_account_numer),
          'bank_account_name'=>e($request->bank_account_name),
          'city'=>e($request->city),
        ]);
        return back();
  }
  public function hiddensuppliers($id){
    supplier::where('supplier_id',$id)->update([
          'supplier_status'=>2
        ]);
      return back();
  }
  public function searchuser(Request $request){
    $alluser = supplier::where('name','like','%'.$request->search.'%')->get();
     return view ('admin.suppliers.search',compact('alluser'));
  }
  public function submitsuppliers(Request $request){

    $this->validate($request,[
      'name'=>'required|min:3',
      'email'=>'required|unique:suppliers',
      'phone'=>'required',
      'address'=>'required',
      'type'=>'required',
      'shop'=>'required',
      'bank_name'=>'required',
      'bank_branch'=>'required',
      'bank_account_numer'=>'required',
      'bank_account_name'=>'required',
      'photos'=>'required',
      'city'=>'required',
    ],[
      'name.required'=>'please enter your name!',
      'email.required'=>'please enter your email!',
      'email.unique'=>'please provide an unique email!',
      'phone.required'=>'please enter your phone number!',
      'address.required'=>'please enter your address!',
      'type.required'=>'please enter your type!',
      'shop.required'=>'please enter your shop name!',
      'photos.required'=>'please enter your photos!',
      'bank_name.required'=>'please enter bank name!',
      'bank_branch.required'=>'please enter branch name!',
      'bank_account_numer.required'=>'please enter bank account no!',
      'bank_account_name.required'=>'please enter account name!',
      'city.required'=>'please enter your city!',
    ]);

    $alluser=supplier::insertGetId([
      'name'=>$_POST['name'],
      'email'=>$_POST['email'],
      'phone'=>$_POST['phone'],
      'address'=>$_POST['address'],
      'type'=>$_POST['type'],
      'shop'=>$_POST['shop'],
      'bank_name'=>$_POST['bank_name'],
      'bank_branch'=>$_POST['bank_branch'],
      'bank_account_numer'=>$_POST['bank_account_numer'],
      'bank_account_name'=>$_POST['bank_account_name'],
      'city'=>$_POST['city'],
      'supplier_img'=>'',
      'created_at'=>Carbon::now(),
    ]);

    if($request->hasFile('photos')){
      $image = $request->file('photos');
      $ImageName='supplier'.'-'.time().'.'.$image->getClientOriginalExtension();
      Image::make($image)->resize(100, 100)->save('uploads/'.$ImageName);
      supplier::where('supplier_id',$alluser)->update([
        'supplier_img'=>$ImageName,
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
