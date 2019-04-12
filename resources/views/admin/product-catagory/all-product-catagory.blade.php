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
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>catagory name</th>
                        <th>manage</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($alluser as $data)
                        <tr>
                            <td>{{$data->catagory_name}}</td>
                            <td>
                              <a href="{{ url('admin/edit-product-catagory/') }}/{{ $data->catagory_id }}"><i class="fa fa-pencil-square"></i></a>
                              <a href="{{ url('admin/hidden-product-catagory/') }}/{{ $data->catagory_id }}"><i class="fa fa-eye-slash"></i></a>
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
