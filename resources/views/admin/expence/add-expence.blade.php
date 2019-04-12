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
                   expence Info
                </h4>
                <form method="post" action="{{url('admin/submit-expence')}}"  class="form-bordered" enctype="multipart/form-data">
                    @csrf
                <div class="form-group row">
                  <label for="input-18" class="col-sm-2 col-form-label">expence details</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" name="expence_details" value="{{old('expence_details')}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-20" class="col-sm-2 col-form-label">expence amount</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" name="expence_amount" value="{{old('expence_amount')}}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control form-control-square" name="expence_date" value="{{date('m/d/Y')}}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control form-control-square" name="expence_month" value="{{date('F')}}">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control form-control-square" name="expence_year" value="{{date('Y')}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-25" class="col-sm-2 col-form-label">photos</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control form-control-square" name="pic" value="{{old('pic')}}">
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
