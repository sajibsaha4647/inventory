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
                   salary Info 
                </h4>
                <form method="post" action="{{url('admin/submit-salary')}}"  class="form-bordered" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group row">
                    <label for="input-23" class="col-sm-2 col-form-label">employee</label>
                    @php
                      $employee=DB::table('employees')->where('employee_status',1)->orderBy('employee_id','desc')->get()
                    @endphp
                    <div class="col-sm-10">
                      <select class="form-control form-control-square" name="emp_id" value="{{old('emp_id')}}">
                        <option disabled="">select</option>
                        @foreach ($employee as  $value)
                        <option value="{{ $value->employee_id }}">{{ $value->name }}</option>
                        @endforeach
                          <option>admin</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="input-23" class="col-sm-2 col-form-label">month</label>
                    <div class="col-sm-10">
                      <select class="form-control form-control-square" name="month" value="{{old('month')}}">
                        <option disabled=""selected="">select</option>
                          <option value="january">january</option>
                          <option value="fevruary">fevruary</option>
                          <option value="margin">margin</option>
                          <option value="april">april</option>
                          <option value="may">may</option>
                          <option value="june">june</option>
                          <option value="july">july</option>
                          <option value="august">august</option>
                          <option value="september">september</option>
                          <option value="octbor">octbor</option>
                          <option value="november">november</option>
                          <option value="december">december</option>
                      </select>
                    </div>
                  </div>
                <div class="form-group row">
                  <label for="input-23" class="col-sm-2 col-form-label">year</label>
                  <div class="col-sm-10">
                    <select class="form-control form-control-square" name="year" value="{{old('year')}}">
                      <option disabled=""selected="">select year</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="input-20" class="col-sm-2 col-form-label">advanced_salary</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-square" name="advanced_salary" value="{{old('advanced_salary')}}">
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
