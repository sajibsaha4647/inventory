<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>BangoDash Bootstrap  Admin Template</title>
  <!--favicon-->
  <link rel="icon" href="{{asset('public/contents/admin/images/favicon.ico')}}" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="{{asset('public/contents/admin/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
  <!-- simplebar CSS-->
  <link href="{{asset('public/contents/admin/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('public/contents/admin/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('public/contents/admin/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('public/contents/admin/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{asset('public/contents/admin/css/sidebar-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{asset('public/contents/admin/css/app-style.css')}}" rel="stylesheet"/>

  <!-- table search -->
  <link href="{{asset('public/contents/admin/css/table-search.css')}}" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>


</head>

<body>

<!-- Start wrapper-->
 <div id="wrapper">

  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="{{asset('contents/admin')}}/images/logo-icon.png" class="logo-icon" alt="Bangodash">
       <h5 class="logo-text"> Eurosia IT</h5>
     </a>
	 </div>
	 <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="index.html" class="waves-effect">
          <i class="#"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{url('/')}}"><i class="fa fa-circle-o"></i> Dashboard</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-layers"></i>
          <span>user</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{url('admin/all-user')}}"><i class="fa fa-circle-o"></i>all user</a></li>
          <li><a href="{{url('admin/add-user')}}"><i class="fa fa-circle-o"></i>add user</a></li>
        </ul>
      </li>
        <li class="sidebar-header">PAGE CONTROL</li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-layers"></i>
          <span>manage employee</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{ url('admin/add-employee') }}"><i class="fa fa-circle-o"></i>add employee</a></li>
    		  <li><a href="{{ url('admin/all-employee') }}"><i class="fa fa-circle-o"></i> all employee</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-layers"></i>
          <span>Manage customer</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{ url('admin/add-customer') }}"><i class="fa fa-circle-o"></i> add customer</a></li>
          <li><a href="{{ url('admin/all-customer') }}"><i class="fa fa-circle-o"></i> all customer</a></li>
        </ul>
      </li>
       <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-event"></i> <span>manage suppliers</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
            <li><a href="{{ url('admin/all-suppliers') }}"><i class="fa fa-circle-o"></i> all suppliers</a></li>
		        <li><a href="{{ url('admin/add-suppliers') }}"><i class="fa fa-circle-o"></i> add suppliers</a></li>
        </ul>
       </li>
       <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-event"></i> <span>manage catagory</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
            <li><a href="{{ url('admin/all-product-catagory') }}"><i class="fa fa-circle-o"></i> all catagory</a></li>
		        <li><a href="{{ url('admin/add-product-catagory') }}"><i class="fa fa-circle-o"></i> add catagory</a></li>
        </ul>
       </li>
       <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-event"></i> <span>manage product</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
            <li><a href="{{ url('admin/all-product') }}"><i class="fa fa-circle-o"></i> all product</a></li>
		        <li><a href="{{ url('admin/add-product') }}"><i class="fa fa-circle-o"></i> add product</a></li>
        </ul>
       </li>
       <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-event"></i> <span>manage expence</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
            <li><a href="{{ url('admin/all-expence') }}"><i class="fa fa-circle-o"></i> all expence</a></li>
		        <li><a href="{{ url('admin/add-expence') }}"><i class="fa fa-circle-o"></i> add expence</a></li>
            <li><a href="{{ url('admin/all-today-expence') }}"><i class="fa fa-circle-o"></i> today expence</a></li>
            <li><a href="{{ url('admin/all-monthly-expence') }}"><i class="fa fa-circle-o"></i> monthly expence</a></li>
            <li><a href="{{ url('admin/all-yearly-expence') }}"><i class="fa fa-circle-o"></i> yearly expence</a></li>
        </ul>
       </li>
       <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-event"></i> <span>manage salary</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
            <li><a href="{{ url('admin/all-salary') }}"><i class="fa fa-circle-o"></i> all advanced salary</a></li>
		        <li><a href="{{ url('admin/add-salary') }}"><i class="fa fa-circle-o"></i> add advanced salary</a></li>
		        <li><a href="{{ url('admin/all-pay-salary') }}"><i class="fa fa-circle-o"></i> Pay salary</a></li>
		        <li><a href="{{ url('') }}"><i class="fa fa-circle-o"></i> last month salary</a></li>
        </ul>
       </li>
       <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-event"></i> <span>salse report</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
            <li><a href="{{ url('admin/all-salary') }}"><i class="fa fa-circle-o"></i> first</a></li>
		        <li><a href="{{ url('admin/add-salary') }}"><i class="fa fa-circle-o"></i> second</a></li>
        </ul>
       </li>
       <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-event"></i> <span>attendance</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
            <li><a href="{{ url('admin/add-attendence') }}"><i class="fa fa-circle-o"></i> add attendance</a></li>
		        <li><a href="{{ url('admin/all-attendence') }}"><i class="fa fa-circle-o"></i> all attendance</a></li>
        </ul>
       </li>
       <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-event"></i> <span>settings</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
            <li><a href="{{ url('admin/all-salary') }}"><i class="fa fa-circle-o"></i> add settings</a></li>
		        <li><a href="{{ url('admin/add-salary') }}"><i class="fa fa-circle-o"></i> all settings</a></li>
        </ul>
       </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-share"></i> <span>event</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="javaScript:void();"><i class="fa fa-circle-o"></i> Level One</a></li>
          <li>
            <a href="javaScript:void();"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="javaScript:void();"><i class="fa fa-circle-o"></i> Level Two</a></li>
              <li>
                <a href="javaScript:void();"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="javaScript:void();"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  <li><a href="javaScript:void();"><i class="fa fa-circle-o"></i> Level Three</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li>
          <a href="{{url('/')}}"><i class="fa fa-share"></i> <span>live site</span></a>
          <i class="fa fa-angle-left pull-right"></i>
      </li>
      <li>
          <a href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();"><i class="fa fa-share"></i> <span>Logout</span></a>
          <i class="fa fa-angle-left pull-right"></i>
      </li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
    </ul>
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top bg-danger">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>

  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
	    <i class="icon-envelope-open"></i></a>
      <div class="dropdown-menu dropdown-menu-right animated fadeIn">
        <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 4 new messages
          <span class="badge badge-danger">4</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="{{URL::to('public/contents/admin/images/avatars/avatar-1.png')}}" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Jhon Deo</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Today, 4:10 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="{{URL::to('public/contents/admin/images/avatars/avatar-3.png')}}" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Sara Jen</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Yesterday, 8:30 AM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="{{URL::to('public/contents/admin/images/avatars/avatar-3.png')}}" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Dannish Josh</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
             <small>5/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="{{URL::to('public/contents/admin/images/avatars/avatar-3.png')}}" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet.</p>
            <small>1/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item"><a href="javaScript:void();">See All Messages</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
	  <i class="icon-bell"></i><span class="badge badge-primary badge-up">10</span></a>
      <div class="dropdown-menu dropdown-menu-right animated fadeIn">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 10 Notifications
          <span class="badge badge-primary">10</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="icon-people fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Registered Users</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="icon-cup fa-2x mr-3 text-warning"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Received Orders</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="icon-bell fa-2x mr-3 text-danger"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Updates</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item"><a href="javaScript:void();">See All Notifications</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="#"><i class="flag-icon flag-icon-gb"></i></a>
      <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="{{URL::to('public/uploads')}}/{{ auth::user()->user_img }}" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self" src="{{URL::to('public/uploads')}}/{{ auth::user()->user_img }}" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">{{auth::user()->name}}</h6>
            <p class="user-subtitle">{{auth::user()->email}}</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><a href="#"><i class="icon-settings mr-2"></i> Setting</li></a>
        <li class="dropdown-item"><a href="{{url('admin/resetpassword')}}"><i class="icon-settings mr-2"></i> Reset Password</li></a>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><a href="{{ route('logout') }}"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="icon-power mr-2"></i> Logout</li></a>
      </ul>
    </li>
  </ul>
</nav>
</header>


  @yield('main-page')



   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 BangoDash Admin
        </div>
      </div>
    </footer>
	<!--End footer-->

  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('public/contents/admin/js/jquery.min.js')}}"></script>
  <script src="{{('public/contents/admin/js/popper.min.js')}}"></script>
  <script src="{{asset('public/contents/admin/js/bootstrap.min.js')}}"></script>
   <!-- simplebar js -->
  <script src="{{asset('public/contents/admin/plugins/simplebar/js/simplebar.js')}}"></script>
  <!-- waves effect js -->
  <script src="{{asset('public/contents/admin/js/waves.js')}}"></script>
  <!-- sidebar-menu js -->
  <script src="{{asset('public/contents/admin/js/sidebar-menu.js')}}"></script>
  <!-- Custom scripts -->
  <script src="{{asset('public/contents/admin/js/app-script.js')}}"></script>
  <!-- Vector map JavaScript -->
  <script src="{{asset('public/contents/admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
  <script src="{{asset('public/contents/admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- Sparkline JS -->
  <script src="{{asset('public/contents/admin/plugins/sparkline-charts/jquery.sparkline.min.js')}}"></script>
  <!-- Chart js -->
  <script src="{{asset('public/contents/admin/plugins/Chart.js/Chart.min.js')}}"></script>
  <!-- Index js -->
  <script src="{{asset('public/contents/admin/js/index2.js')}}"></script>
  <script src="{{asset('public/contents/admin/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('public/contents/admin/js/custom.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
  <script>
     @if(Session::has('messege'))
       var type="{{Session::get('alert-type','info')}}"
       switch(type){
           case 'info':
                toastr.info("{{ Session::get('messege') }}");
                break;
           case 'success':
               toastr.success("{{ Session::get('messege') }}");
               break;
           case 'warning':
               toastr.warning("{{ Session::get('messege') }}");
               break;
           case 'error':
               toastr.error("{{ Session::get('messege') }}");
               break;
       }
     @endif
   </script>
</body>

<!-- Mirrored from kvthemes.com/bangodash/color-version/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Aug 2018 11:28:52 GMT -->
</html>
