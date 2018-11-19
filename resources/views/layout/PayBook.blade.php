@extends('index')

@section("datepicker")
<link href="{{asset('vendor/dist/css/datepicker.min.css')}}" rel="stylesheet" type="text/css">
<script src="{{asset('vendor/dist/js/datepicker.min.js')}}"></script>
<script src="{{asset('vendor/dist/js/i18n/datepicker.en.js')}}"></script>
@endsection

@section("menu-payBook")
sl-active
@endsection

@section('breadcrumb')
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="{{route('get.manager')}}">Trang chủ</a>
	</li>
	<li class="breadcrumb-item active">
		Duyệt phiếu trả
	</li> 
</ol>
@endsection

@section('content')
<div id="content" class="container-fluid">
	<div class="card">
		<div class="card-body">
			<h2 class="text-center">Duyệt Phiếu Trả</h2>
			<br/>  
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div><br />
						@endif
						@if (Session::has('success'))
						<div class="alert alert-success">
							<p>{{ Session::get('success') }}</p>
						</div><br />
						@endif
					</div>
				</div>
			</div>
			@yield('form-content')
		</div>
	</div>
</div>
@endsection



