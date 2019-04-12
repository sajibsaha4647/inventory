<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use Carbon\Carbon;
use Hash;
use Image;
use Auth;
class productControler extends Controller{

  public function __construct(){
    $this->middleware('auth');
  }
 
  public function  addproduct(){
    return view('admin.product.add-product');
  }
  public function allproduct(){
    $alluser=product::where('product_status',1)->orderBy('product_id','desc')->get();
    return view('admin.product.all-product',compact('alluser'));
  }
  public function searchuser(Request $request){
   $alluser = product::where('product_name','like','%'.$request->search.'%')->get();
    return view ('admin.product.search',compact('alluser'));
 }
  public function editproduct($id){
    $edit = product::where('product_id',$id)->firstOrFail();
    return view('admin.product.edit-product',compact('edit'));
  }
  public function updateproduct(Request $request,$id){
    $edit=product::where('product_id',$id)->update([
          'catagory_id'=>e($request->catagory_id),
          'supplier_id'=>e($request->supplier_id),
          'product_name'=>e($request->product_name),
          'product_code'=>e($request->product_code),
          'product_godown'=>e($request->product_godown),
          'product_rout'=>e($request->product_rout),
          'product_buy_date'=>e($request->product_buy_date),
          'product_expaire_date'=>e($request->product_expaire_date),
          'product_buting_price'=>e($request->product_buting_price),
          'product_selling_price'=>e($request->product_selling_price),
        ]);
        return back();
  }
  public function deleteproduct($id){
    product::where('product_id',$id)->delete();
    return back();
  }
  public function hiddenproduct($id){
    product::where('product_id',$id)->update([
          'product_status'=>2
        ]);
      return back();
  }
  public function submitproduct(Request $request){
    $this->validate($request,[
      'product_name'=>'required',
      'product_code'=>'required|unique:products',
      'catagory_id'=>'required',
      'supplier_id'=>'required',
      'product_godown'=>'required',
      'product_rout'=>'required',
      'product_buy_date'=>'required',
      'product_expaire_date'=>'required',
      'product_buting_price'=>'required',
      'product_selling_price'=>'required',
    ],[
      'product_name.required'=>'please enter your product name!',
      'product_code.required'=>'please enter your product code!',
      'catagory_id.required'=>'please enter your catagory id!',
      'supplier_id.required'=>'please enter your supplier id!',
      'product_code.unique'=>'please provide an unique product code!',
      'product_godown.required'=>'please enter your godown name!',
      'product_rout.required'=>'please enter your rout!',
      'product_buy_date.required'=>'please enter your buying date!',
      'product_expaire_date.required'=>'please enter your expire date!',
      'product_buting_price.required'=>'please enter your buyning price!',
      'product_selling_price.required'=>'please enter your selling price!',
    ]);

    $alluser=product::insertGetId([
      'product_name'=>$_POST['product_name'],
      'catagory_id'=>$_POST['catagory_id'],
      'supplier_id'=>$_POST['supplier_id'],
      'product_code'=>$_POST['product_code'],
      'product_godown'=>$_POST['product_godown'],
      'product_rout'=>$_POST['product_rout'],
      'product_buy_date'=>$_POST['product_buy_date'],
      'product_expaire_date'=>$_POST['product_expaire_date'],
      'product_buting_price'=>$_POST['product_buting_price'],
      'product_selling_price'=>$_POST['product_selling_price'],
      'product_img'=>'',
      'created_at'=>Carbon::now(),
    ]);

    if($request->hasFile('pic')){
      $image = $request->file('pic');
      $ImageName='product'.'-'.time().'.'.$image->getClientOriginalExtension();
      Image::make($image)->resize(50, 50)->save('public/uploads/product/'.$ImageName);
      product::where('product_id',$alluser)->update([
        'product_img'=>$ImageName,
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

}
