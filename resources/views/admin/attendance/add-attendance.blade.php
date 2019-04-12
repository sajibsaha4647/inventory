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
              <div class="table-responsive">
            <form method="get" action="{{url('admin/users/search')}}" class="form-inline" style="margin-bottom:20px;">
              <div class="form-group pull-right">
                <label class="sr-only" for=""></label>
                <input type="text" class="form-control search-box" id="search" name="search" value="{{ request()->input('search')  }}">
              </div>
              <button type="submit" class="btn btn-default">Search</button>
           </form>
           <form class="" action="{{ route('attendance.submit') }}" method="POST">
             @csrf
             <table id="default-datatable" class="table table-bordered">
               <thead>
                   <tr>
                       <th>Name</th>
                       <th>month</th>
                       <th>date</th>
                       <th>time</th>
                       <th>status</th>
                       <th>photos</th>
                       <th>present & absent</th>
                   </tr>
               </thead>
               <tbody>
                   @forelse($alluser as $data)
                       <tr>
                           <td>{{$data->name}}</td>
                           <td>{{ date("F") }}</td>
                           <td>{{ date('d/y/m') }}</td>

                           @if($data->getattendance !== null && $data->getattendance->attendance_date === Carbon\Carbon::now()->toDateString())
                              @if($data->getattendance->attendance !== 'present')
                              <td>absent/vacation</td>
                              @else
                              <td>{{ $data->getattendance->attendance_time }}</td>
                              @endif
                              <td>Attendance has been taken {{ $data->getattendance->created_at->diffForHumans() }}</td>

                           @else
                           <td>- - -</td>
                            <td>Attendance is not taken yet</td>
                           @endif

                           <td>
                             <img src="{{asset('public/uploads')}}/{{ $data->employee_img }}" alt="">
                           </td>
                           <td>
                             @if($data->getattendance == null || $data->getattendance->attendance_date !== Carbon\Carbon::now()->toDateString())
                             <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary active">
                                  <input type="radio" name="employee_ids[{{ $data->employee_id }}]" id="option{{ $data->employee_id }}" autocomplete="off"  value="present"> present
                                </label>
                                <label class="btn btn-secondary">
                                  <input type="radio" name="employee_ids[{{ $data->employee_id }}]" id="option{{ $data->employee_id }}" autocomplete="off" value="absent"> absent
                                </label>
                                <label class="btn btn-secondary">
                                  <input type="radio" name="employee_ids[{{ $data->employee_id }}]" id="option{{ $data->employee_id }}" autocomplete="off" value="vacation"> vacation
                                </label>
                              </div>
                              @else
                                <a href="{{ url('admin/edit-employee/') }}/{{ $data->employee_id }}"><i class="fa fa-pencil-square"></i></a>
                              @endif
                           </td>
                       </tr>
                 @empty
                 <tr>
                   <td colspan="7">no more data</td>
                 </tr>
                 @endforelse
               </tbody>
           </table>
            <button type="submit" class="btn btn-primary">submit attendance</button>
          </form>
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
