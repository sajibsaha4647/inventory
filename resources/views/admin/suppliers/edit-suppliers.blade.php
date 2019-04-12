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
                   suppliers Info
                </h4>
                <th>Name</th>
                <th>email</th>
                <th>phone</th>
                <th>address</th>
                <th>supplier type</th>
                <th>shop</th>
                <th>bank_name</th>
                <th>bank_branch</th>
                <th>bank_account_numer</th>
                <th>bank_account_name</th>
                <th>city</th>
                <form method="post" action="{{url('admin/update-suppliers/' . $edit->supplier_id)}}"  class="form-bordered" enctype="multipart/form-data">
                    @csrf
                <div class="form-group row">
                  <label for="input-18" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" name="name" value="{{ $edit->name}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-20" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control form-control-square" name="email"value="{{ $edit->email}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-21" class="col-sm-2 col-form-label">phone</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" value="{{ $edit->phone}}" name="phone" >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-21" class="col-sm-2 col-form-label">address</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" value="{{ $edit->address}}" name="address" >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-21" class="col-sm-2 col-form-label">type</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" value="{{ $edit->type}}" name="type" >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-21" class="col-sm-2 col-form-label">shop</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" value="{{ $edit->shop}}" name="shop" >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-21" class="col-sm-2 col-form-label">bank name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" value="{{ $edit->bank_name}}" name="bank_name" >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-21" class="col-sm-2 col-form-label">bank_branch</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" value="{{ $edit->bank_branch}}" name="bank_branch" >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-21" class="col-sm-2 col-form-label">bank_account_numer</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" value="{{ $edit->bank_account_numer}}" name="bank_account_numer" >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-21" class="col-sm-2 col-form-label">bank_account_name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" value="{{ $edit->bank_account_name}}" name="bank_account_name" >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-21" class="col-sm-2 col-form-label">city</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" value="{{ $edit->city}}" name="city" >
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-25" class="col-sm-2 col-form-label">Select File</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control form-control-square" name="pic">
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
