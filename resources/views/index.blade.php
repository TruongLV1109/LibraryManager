<!DOCTYPE html>
<html lang="en">
<head>
	<title>Quản lý thư viện</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	{{-- <link rel="stylesheet" href="{{asset('vendor/fade/bootstrap.css')}}"> --}}
	<link rel="stylesheet" href="{{asset('vendor/3.css')}}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	@yield("datepicker")
	@yield("highcharts")
	<script src="{{asset('vendor/3.js')}}"></script>
	<!------ Include the above in your HEAD tag ---------->
</head>
<body class="hm-gradient">
	<div id="wrapper" class="animate">
		<nav class="mb-4 navbar fixed-top navbar-expand-lg navbar-dark cyan">
			<a class="navbar-brand font-bold" href="#"><i class="fas fa-book-open"></i></a>
			<span class="navbar-toggler-icon leftmenutrigger"></span>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
				<ul class="navbar-nav animate side-nav page-sider-menu">
					<li class="nav-item @yield("menu-manager")">
						<a class="nav-link" href="{{route('get.manager')}}"><i class="fa fa-home"></i><span>Trang chủ</span></a>
					</li>
					<li class="nav-item @yield("menu-manager-book")">
						<a class="nav-link" href="{{route('get.manager.book')}}">
							<i class="fas fa-money-check"></i>
							<span class="hidden-sm-down">Quản lý sách</span>
						</a>
					</li>
					<li class="nav-item @yield("menu-manager-readers")">
						<a class="nav-link" href="{{route('get.manager.readers')}}"><i class="fa fa-object-group"></i><span>Quản lý độc giả</span></a>
					</li>
					<li class="nav-item @yield("menu-manager-publisher")">
						<a class="nav-link" href="{{route('get.manager.publisher')}}"><i class="fa fa-object-group"></i><span>Quản lý nhà xuất bản</span></a>
					</li>
					<li class="nav-item @yield("menu-borrowBook")">
						<a class="nav-link" href="{{route('get.borrowBook')}}"><i class="fa fa-object-group"></i><span>Tạo phiếu mượn</span></a>
					</li>
					<li class="nav-item @yield("menu-payBook")">
						<a class="nav-link" href="{{route('get.payBook')}}"><i class="fa fa-object-group"></i><span>Duyệt phiếu trả</span></a>
					</li>
					<li class="nav-item @yield("menu-manager-borrowGiveBack")">
						<a href="#menu1" class="nav-link collapsed" data-toggle="collapse" aria-expanded=@section('booleanAria')"false"@show>
						<i class="far fa-calendar-alt"></i>
						<span>Quản lý mượn trả</span>
					</a>
				</li>
				<div class="collapse @yield("collapseBorrowGiveBack")" id="menu1">
					<li class="nav-item @yield("menu-manager-borrowBook")">
						<a class="nav-link" href="{{route('get.manager.borrowBook')}}" data-parent="#menu1"><i class="fa fa-tasks"></i><span>Mượn sách</span></a>
					</li>
					<li class="nav-item @yield("menu-manager-giveBack")">
						<a class="nav-link" href="{{route('get.manager.giveBack')}}" data-parent="#menu1"><i class="fa fa-tasks"></i><span>Trả sách</span></a>
					</li>
				</div>
				<li class="nav-item @yield("menu-manager-statistical")">
					<a class="nav-link" href="{{route('get.manager.statistical')}}"><i class="fa fa-object-group"></i><span>Thống kê</span></a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown @yield("menu-admin")">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe"></i> Admin </a>
					<div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-3">
						<a class="dropdown-item" href="{{route('get.manager.employees')}}">Quản lý nhân viên</a>
						<a class="dropdown-item" href="#">Quản lý người dùng</a>
					</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"><i class="fa fa-envelope"></i> Contact <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item dropdown">
				@can('edit-profile')
				<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Profile </a>
				<div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
					<a class="dropdown-item" href="user.html">My account</a>
					<a class="dropdown-item" href="{{ route('logout') }}"
					onclick="event.preventDefault();
					document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>

			</div>
			@endcan
			@cannot('edit-profile')
			<a class="nav-link" href="{{route('login')}}"><i class="fa fa-user"></i> Login </a>
			@endcannot
		</li>
	</ul>
</div>
</nav>
<!--/.Navbar -->
<div class="master-right">
	@yield('breadcrumb')
	@yield('content')
</div>
</div>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
@yield("scriptBottom")
</body>
</html>






