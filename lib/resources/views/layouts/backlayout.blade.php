<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Back') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Mobile -->
    <link rel="stylesheet" href="{{asset('mobile/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('mobile/css/lightbox.css')}}">
	<link rel="stylesheet" href="{{asset('mobile/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('mobile/css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('mobile/css/animsition.css')}}">
    <link rel="stylesheet" href="{{asset('mobile/css/style.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
	
	<style>
		input,
		textarea {
		border: 1px solid #eeeeee;
		box-sizing: border-box;
		margin: 0;
		outline: none;
		padding: 10px;
		}

		input[type="button"] {
		-webkit-appearance: button;
		cursor: pointer;
		}

		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		}

		.input-group {
		clear: both;
		margin: 15px 0;
		position: relative;
		}

		.input-group input[type='button'] {
		background-color: #eeeeee;
		min-width: 38px;
		width: auto;
		transition: all 300ms ease;
		}

		.input-group .button-minus,
		.input-group .button-plus {
		font-weight: bold;
		height: 38px;
		padding: 0;
		width: 38px;
		position: relative;
		}

		.input-group .quantity-field {
		position: relative;
		height: 38px;
		left: -6px;
		text-align: center;
		width: 62px;
		display: inline-block;
		font-size: 13px;
		margin: 0 0 5px;
		resize: vertical;
		}

		.button-plus {
		left: -13px;
		}

		input[type="number"] {
		-moz-appearance: textfield;
		-webkit-appearance: none;
		}
	</style>

</head>

<body class="animsition">

	<!-- navbar -->
	<div class="navbar navbar-home">
		<div class="container">
			<div class="content-left">
				<a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
			</div>
			<div class="content-center">
				<a href="{{url('/admin')}}"><h1>????????????</h1></a>
			</div>
			<div class="content-right">
				<a class="nav-link" href="{{url('/admin/shop/cart')}}">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="badge badge-warning navbar-badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                </a>
            </div>
		</div>
	</div>
	<!-- end navbar -->

	<!-- sidebar -->
	<div class="side-overlay"></div>
	<div id="menu" class="panel sidebar" role="navigation">
		<div class="sidebar-header">
			<img src="{{url('/storage/images/avatar/'.Auth::user()->image.'')}}" alt="">
			<span>{{Auth::user()->name}}</span>
		</div>
		<ul>
			<li>
				<a href="{{url('/admin')}}"><i class="fa fa-home"></i>??????</a>
			</li>
			<li>
				<a href="{{url('/admin/members')}}"><i class="fa fa-users"></i>????????????</a>
			</li>
			<li>
				<a href="{{url('/admin/shop/index')}}"><i class="fa fa-shopping-cart"></i>??????</a>
			</li>
            <li>
				<a href="{{url('/admin/order-history')}}"><i class="fa fa-mobile"></i>????????????</a>
            </li>
            <li>
				<a href="{{url('/admin/order-history-member')}}"><i class="fa fa-rocket"></i>????????????</a>
			</li>
			<li>
				<a href="{{url('/admin/contract')}}"><i class="fas fa-book"></i>????????????</a>
			</li>
			
			@if (Auth::user()->role == '?????????' || Auth::user()->role == '?????????????????????')
			<li>
				<a href="{{url('/admin/post')}}"><i class="fa fa-list"></i>????????????</a>
			</li>
			<li>
				<a href="{{url('/admin/post/create')}}"><i class="far fa-clipboard"></i>????????????</a>
			</li>
			<li>
				<a href="{{url('/admin/allmembers')}}"><i class="fas fa-users"></i>??????????????????</a>
			</li>
			<li>
				<a href="{{url('/register')}}"><i class="fa fa-user-plus"></i>????????????</a>
			</li>
			<li>
				<a href="{{url('/admin/product/index')}}"><i class="fas fa-gift"></i>????????????</a>
			</li>
			<li>
				<a href="{{url('/admin/product/category')}}"><i class="fas fa-atom"></i>????????????</a>
            </li>
			@endif

            <li>
				<a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>
                    ????????????
                    
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
		</ul>
	</div>
	<!-- end sidebar -->
	
    @yield('content')



	<!-- mobile -->
    <script src="{{asset('mobile/js/jquery.min.js')}}"></script>
    <script src="{{asset('mobile/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('mobile/js/lightbox.js')}}"></script>
    <script src="{{asset('mobile/js/animsition.min.js')}}"></script>
    <script src="{{asset('mobile/js/animsition-custom.js')}}"></script>
    <script src="{{asset('mobile/js/jquery.big-slide.js')}}"></script>
    <script src="{{asset('mobile/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('mobile/js/main.js')}}"></script>
    <!-- Select2 -->
	<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
	

    <script>
        $(document).ready(function(){
            function incrementValue(e) {
                e.preventDefault();
                var fieldName = $(e.target).data('field');
                var parent = $(e.target).closest('div');
                var currentVal = parseInt(parent.find('input[class="quantity-field"]').val(), 10);

                if (!isNaN(currentVal)) {
                    parent.find('input[class="quantity-field"]').val(currentVal + 1);
                } else {
                    parent.find('input[class="quantity-field"]').val(0);
                }
            }

            function decrementValue(e) {
            e.preventDefault();
                var fieldName = $(e.target).data('field');
                var parent = $(e.target).closest('div');
                var currentVal = parseInt(parent.find('input[class="quantity-field"]').val(), 10);

                if (!isNaN(currentVal) && currentVal > 0) {
                    parent.find('input[class="quantity-field"]').val(currentVal - 1);
                } else {
                    parent.find('input[class="quantity-field"]').val(0);
                }
            }

            $('.input-group').on('click', '.button-plus', function(e) {
                incrementValue(e);
            });

            $('.input-group').on('click', '.button-minus', function(e) {
                decrementValue(e);
            });
        });
    </script>

</body>
</html>
