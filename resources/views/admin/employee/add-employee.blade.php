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
            @if($errors->any())
               <div class="alert alert-danger">
                 <ul class="list-group list-flush" style="background:red;color: #000;">
                   @foreach($errors->all() as $error)
                   <li class="list-group-item">{{ $error }}</li>
                   @endforeach
                 </ul>
               </div>
             @endif
            <div class="card-body">
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                   employee Info
                </h4>
                <form method="post" action="{{url('admin/submit-employee')}}"  class="form-bordered" enctype="multipart/form-data">
                    @csrf
                <div class="form-group row">
                  <label for="input-18" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" name="name" value="{{old('name')}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-20" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control form-control-square" name="email" value="{{old('email')}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-20" class="col-sm-2 col-form-label">phone</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" name="phone" value="{{old('phone')}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-20" class="col-sm-2 col-form-label">address</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" name="address" value="{{old('address')}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-20" class="col-sm-2 col-form-label">experience</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" name="experience" value="{{old('experience')}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-20" class="col-sm-2 col-form-label">salary</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" name="salary" value="{{old('salary')}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-20" class="col-sm-2 col-form-label">vacation</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" name="vacation" value="{{old('vacation')}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-20" class="col-sm-2 col-form-label">city</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" name="city" value="{{old('city')}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-25" class="col-sm-2 col-form-label">photos</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control form-control-square" name="photos" value="{{old('photos')}}">
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
