@extends('layouts.admin')
@section('main-page')

<div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Data Tables</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">BangoDash</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
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
    <!-- End Breadcrumb-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Data Table Example</div>
            <div class="card-body">
             <h6>Total show this page:{{ $alluser->count() }}</h6>
             <h5 class="text-right">now Date:{{ date("F Y") }}</h5>
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                      <th>name</th>
                      <th>photo</th>
                      <th>advanced month</th>
                      <th>salary</th>
                      <th>year</th>
                      <th>salary month</th>
                      <th>advanced_salary</th>
                      <th>manage</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($alluser as $data)
                        <tr>
                          <td>{{$data->name}}</td>
                          <td>
                            <img src="{{asset('public/uploads')}}/{{ $data->employee_img }}" alt="">
                          </td>
                          <td>@isset($data->getsalary){{$data->getsalary->month}}@endisset</td>
                          <td>{{$data->salary}}</td>
                           <td>@isset($data->getsalary){{$data->getsalary->year}}@endisset</td>
                           <td>{{date("F", strtotime('-1 months'))}}</td>
                          <td>@isset($data->getsalary){{$data->getsalary->advanced_salary}}@endisset</td>
                          <td>
                              <a href="{{ url('admin/edit-salary/') }}/{{ $data->salary_id }}"> <button type="button"type="button" class="btn btn-primary">pay now</button> </a>
                              <a href="{{ url('admin/edit-salary/') }}/{{ $data->salary_id }}"><button type="button"type="button" class="btn btn-warning">edit</button></a>
                              <a href="{{ url('admin/hidden-salary/') }}/{{ $data->salary_id }}"><button type="button"type="button" class="btn btn-danger">delete</button></a>
                            </td>
                        </tr>
                </tbody>
                @empty
                <p>no more data</p>
                @endforelse
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
    </div>
    <!-- End container-fluid-->

    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
@endsection
