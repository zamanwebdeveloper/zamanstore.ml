<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | ZamanStore</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="{{URL::to('/')}}"><i class="fa fa-phone"></i> +8801740301579</a></li>
                                <li><a href="{{URL::to('/')}}"><i class="fa fa-envelope"></i> zamanwebdeveloper@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com/ZamanFullStackWebDeveloper" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/MostafizZaman" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/syed-zaman-mostafiz-4aba6414b/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://dribbble.com/SyedZaman" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="https://plus.google.com/u/0/107456764220614665826"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{URL::to('/')}}"><img src="{{('frontend/images/home/logo.png')}}" alt="" /></a>
                        </div>
                        {{--<div class="btn-group pull-right">--}}
                            {{--<div class="btn-group">--}}
                                {{--<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">--}}
                                    {{--USA--}}
                                    {{--<span class="caret"></span>--}}
                                {{--</button>--}}
                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li><a href="#">Canada</a></li>--}}
                                    {{--<li><a href="#">UK</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{----}}
                            {{--<div class="btn-group">--}}
                                {{--<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">--}}
                                    {{--DOLLAR--}}
                                    {{--<span class="caret"></span>--}}
                                {{--</button>--}}
                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li><a href="#">Canadian Dollar</a></li>--}}
                                    {{--<li><a href="#">Pound</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
<!--                                 <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
 -->                                <?php
                                    $customer_id=Session::get('customer_id');
                                    $shippintg_id=Session::get('shipping_id');
//                                    echo $customer_id;
//                                    echo $shippintg_id;
                                ?>
                                <?php
                                if ($customer_id != NULL && $shippintg_id == NULL)
                                {
                                ?>
                                <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                <?php
                                }
                                if ($customer_id != NULL && $shippintg_id != NULL)
                                {
                                ?>
                                <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Payment</a></li>
                                <?php
                                }else{
                                ?>
                                <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                <?php
                                }
                                ?>
                                {{--login-check--}}

                                <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Cart(${{Cart::total()}})</a></li>
                                <?php
                                    if ($customer_id != NULL)
                                        {
                                ?>
                                            <li><a href="{{URL::to('/customer-logout')}}"><i class="fa fa-lock"></i> Logout</a></li>
                                <?php
                                        }
                                        else
                                            {
                                ?>
                                <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-lock"></i> Login</a></li>
                                <?php
                                            }
                                ?>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/')}}" class="active">Home</a></li>
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{url('/')}}">Products</a></li>
                                        <?php $customer_id=Session::get('customer_id'); ?>
                                        <?php
                                        if ($customer_id != NULL)
                                        {
                                        ?>
                                        <li><a href="{{URL::to('/checkout')}}"> Checkout</a></li>
                                        <?php
                                        }
                                        else
                                        {
                                        ?>
                                        <li><a href="{{URL::to('/login-check')}}"> Checkout</a></li>
                                        <?php
                                        }
                                        ?>

                                        <li><a href="{{URL::to('/show-cart')}}">Cart</a></li>
                                        {{--<li><a href="login.html">Login</a></li> --}}
                                    </ul>
                                </li>
                                <li><a href="{{url('/contact-us')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
        