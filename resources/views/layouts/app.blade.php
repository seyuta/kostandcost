<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Campus663</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/plugins/font-awesome/css/all.min.css" rel="stylesheet" />
	<link href="/css/animate.min.css" rel="stylesheet" />
	<link href="/css/style.css" rel="stylesheet" />
	<link href="/css/style-responsive.css" rel="stylesheet" />
	<link href="/css/default.css" rel="stylesheet" />
	<link href="/css/print.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<link href="/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="/plugins/DataTables/extensions/Select/css/select.dataTables.min.css" rel="stylesheet" />
	<link href="/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />

	<link href="/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
	<link href="/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
	<link href="/plugins/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet" />
	<link href="/plugins/password-indicator/css/password-indicator.css" rel="stylesheet" />
	<link href="/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />

	<link href="/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet" />

	<link href="/plugins/parsley/src/parsley.css" rel="stylesheet" />
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>CAMPUS663</b> Livin</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header -->
			
			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				{{-- <li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle f-s-14">
						<i class="fa fa-bell"></i>
						<span class="label">0</span>
					</a>
					<ul class="dropdown-menu media-list dropdown-menu-right">
						<li class="dropdown-header">NOTIFICATIONS (0)</li>
						<li class="text-center width-300 p-b-10">
							No notification found
						</li>
					</ul>
				</li> --}}
				<li class="dropdown navbar-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<div class="image image-icon bg-black text-grey-darker">
                            {{-- <img src="" alt="" /> --}}
							<i class="fa fa-user"></i>
						</div>
						<span class="d-none d-md-inline">{{Auth::user()->username}}</span> <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						{{-- <a href="javascript:;" class="dropdown-item">Edit Profile</a>
						<a href="javascript:;" class="dropdown-item"><span class="badge badge-danger pull-right">2</span> Inbox</a>
						<a href="javascript:;" class="dropdown-item">Calendar</a>
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div> --}}
                        <a href="{{ url('/logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST"style="display: none;">
                            {{ csrf_field() }}
                        </form>
					</div>
				</li>
			</ul>
			<!-- end header navigation right -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		@section('sidebar')
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover with-shadow"></div>
							{{-- <div class="image image-icon bg-black text-grey-darker">
								<i class="fa fa-user"></i>
							</div> --}}
							<div class="info">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
								{{-- <b class="caret pull-right"></b>
								{{Auth::user()->username}}
								<small>&nbsp;</small> --}}
							</div>
						</a>
					</li>
					<li>
						<ul class="nav nav-profile">
							{{-- <li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
							<li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li> --}}
                            <li>
                                <a href="{{ url('/logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out-alt"></i> Logout </a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
						</ul>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Menu</li>
					{{-- <li class="{{ Request::path() == '/' ? 'active' : '' }}">
						<a href="/">
							<i class="fa fa-th-large"></i>
							<span>Home</span>
						</a>
					</li> --}}
					<li class="{{ Request::path() == 'customer' || Request::path() == 'customer/create' ? 'active' : '' }}">
						<a href="{{ url('/customer') }}">
							<i class="fa fa-address-book"></i>
							<span>Data Pelanggan</span>
						</a>
					</li>
					<li class="{{ Request::path() == 'occupants' ? 'active' : '' }}">
						<a href="{{ url('/occupants') }}">
							<i class="fa fa-id-card"></i>
							<span>Data Penghuni</span>
						</a>
					</li>
					<li class="has-sub {{ Request::path() == 'room' || Request::path() == 'room-type' || Request::path() == 'additional-facilities' ? 'active' : '' }}">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-bed"></i> 
							<span>Menu Kamar</span>
						</a>
						<ul class="sub-menu">
							<li class="{{ Request::path() == 'room' ? 'active' : '' }}"><a href="{{ url('/room') }}">Data Kamar</a></li>
							<li class="{{ Request::path() == 'room-type' ? 'active' : '' }}"><a href="/room-type">Tipe Kamar</a></li>
							{{-- <li class="{{ Request::path() == 'additional-facilities' ? 'active' : '' }}"><a href="/additional-facilities">Fasilitas Tambahan</a></li> --}}
						</ul>
					</li>
					<li class="{{ Request::path() == 'payments' ? 'active' : '' }}">
						<a href="{{ url('/payments') }}">
							<i class="fa fa-money-bill-alt"></i>
							<span>Pembayaran</span>
						</a>
					</li>
					<!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
					<!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
			@show
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			@yield('content')
		</div>
		<!-- end #content -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	@include('layouts.footer')
	@section('scripts')
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/js/jquery-3.3.1.min.js"></script>
	<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="/crossbrowserjs/html5shiv.js"></script>
		<script src="/crossbrowserjs/respond.min.js"></script>
		<script src="/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/js/js.cookie.js"></script>
	<script src="/js/default.min.js"></script>
	<script src="/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script src="/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="/plugins/DataTables/extensions/Select/js/dataTables.select.min.js"></script>
	<script src="/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	
	<script src="/plugins/select2/dist/js/select2.min.js"></script>
	<script src="/plugins/password-indicator/js/password-indicator.js"></script>
	<script src="/plugins/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
	
	<script src="/js/demo/form-plugins.demo.js"></script>
	<script src="/js/demo/table-manage-responsive.demo.min.js"></script>
	<script src="/js/demo/ui-modal-notification.demo.min.js"></script>

	<script src="/plugins/parsley/dist/parsley.js"></script>
	<script src="/plugins/highlight/highlight.common.js"></script>
	<script src="/js/demo/render.highlight.js"></script>
	<script>
		$(document).ready(function() {
			App.init({
				disableDraggablePanel: true
			});
			Notification.init();
			FormPlugins.init();
			TableManageResponsive.init();
			Highlight.init();
		});
	</script>
	@show
</body>
</html>