<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="{{url('/css/app.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app"  class="wrapper">
        <header class="main-header">
		</header>
		
		 <!-- Left side column. contains the sidebar -->
		<aside class="main-sidebar">
		  <!-- sidebar: style can be found in sidebar.less -->
		  <section class="sidebar">
			<!-- Sidebar user panel -->
			<div class="user-panel">
			  <div class="pull-left image">
				<img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr('admin', 0, 1) }}" class="img-circle" alt="User Image">
			  </div>
			  <div class="pull-left info">
				<p>Admin</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			  </div>
			</div>
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu">
			  <li class="header">Administarator</li>
			 
			</ul>
		  </section>
		  <!-- /.sidebar -->
		</aside>
		
		<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <section class="content">
          @yield('content')
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
