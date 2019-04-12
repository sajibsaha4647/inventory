@extends('layouts.admin')
@section('main-page')

<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Form Bordered</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">BangoDash</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Bordered</li>
         </ol>
	   </div>
     <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
        <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
        <span class="caret"></span>
        </button>
        <div class="dropdown-menu">
          <a href="javaScript:void();" class="dropdown-item">Action</a>
          <a href="javaScript:void();" class="dropdown-item">Another action</a>
          <a href="javaScript:void();" class="dropdown-item">Something else here</a>
          <div class="dropdown-divider"></div>
          <a href="javaScript:void();" class="dropdown-item">Separated link</a>
        </div>
      </div>
     </div>
     </div>

      <div class="row">
        <div class="col-lg-12">
    <h6 class="text-uppercase">Bordered Form with square input</h6>
        <hr>
          <div class="card">
            <div class="card-body">
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                   user Info
                </h4>
                <form method="post" action="{{url('admin/update-product/' . $edit->product_id)}}"  class="form-bordered" enctype="multipart/form-data">
                    @csrf
                <div class="form-group row">
                  <label for="input-18" class="col-sm-2 col-form-label">product name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" name="product_name" value="{{ $edit->product_name}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-20" class="col-sm-2 col-form-label">product code</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" name="product_code"value="{{ $edit->product_code}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-23" class="col-sm-2 col-form-label">product catagory</label>
                  <div class="col-sm-10">
                    @php
                      $catagory=DB::table('productcatagories')->where('catagory_status',1)->orderBy('catagory_id','desc')->get()
                    @endphp
                    <select class="form-control form-control-square" name="catagory_id" value="{{ $edit->catagory_id}}>
                      @foreach ($catagory as  $value)
                      <option value="{{ $value->catagory_id }}">{{ $value->catagory_name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-23" class="col-sm-2 col-form-label">supplier</label>
                  <div class="col-sm-10">
                    @php
                      $suplliers=DB::table('suppliers')->where('supplier_status',1)->orderBy('supplier_id','desc')->get()
                    @endphp
                    <select class="form-control form-control-square" name="supplier_id" value="{{ $edit->supplier_id}}">
                      @foreach ($suplliers as  $value)
                      <option value="{{ $value->supplier_id }}">{{ $value->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-18" class="col-sm-2 col-form-label">product godown</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" name="product_godown" value="{{ $edit->product_godown}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-18" class="col-sm-2 col-form-label">product rout</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" name="product_rout" value="{{ $edit->product_rout}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-18" class="col-sm-2 col-form-label">product buying date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control form-control-square" name="product_buy_date" value="{{ $edit->product_buy_date}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-18" class="col-sm-2 col-form-label">product expaire date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control form-control-square" name="product_expaire_date" value="{{ $edit->product_expaire_date}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-18" class="col-sm-2 col-form-label">product buying price</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" name="product_buting_price" value="{{ $edit->product_buting_price}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-18" class="col-sm-2 col-form-label">product selling price</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" name="product_selling_price" value="{{ $edit->product_selling_price}}">
                  </div>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-success shadow-success m-1"><i class="fa fa-check-square-o"></i> Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->



    </div>
    <!-- End container-fluid-->

   </div><!--End content-wrapper-->
  @endsection
