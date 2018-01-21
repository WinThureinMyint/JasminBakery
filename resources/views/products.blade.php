<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/products.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
<div class="container">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->firstName }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="col-xs-12 col-md-6">
        <div class="prod-info-main prod-wrap clearfix">
            <div class="row">

                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="product-image">
                        <img src="{{ asset('image/cinnamonRaisinBread.jpg') }}" class="img-responsive">
                        <span class="tag2 hot">
							HOT
						</span>
                    </div>
                </div>

                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="product-deatil">
                        <h5 class="name">
                            <a href="#">
                                Cinnamon Raisin Bread
                            </a>
                           {{-- <a href="#">
                                <span>Bread</span>
                            </a>--}}

                        </h5>
                        <p class="price-container">
                            <span>$100.20</span>
                        </p>
                        <span class="tag1"></span>
                    </div>

                    <div class="description">
                        <p>Raisin bread is a type of bread made with raisins and flavored with cinnamon. It is "usually a white flour or egg dough bread". Aside from white flour, raisin bread is also made with other flours,
                            such as all-purpose flour{{--, oat flour, or whole wheat flour. Some recipes include honey, brown sugar, eggs, or butter.--}}</p>
                    </div>

                    <div class="product-info smart-form">

                        <div class="row">
                            <div class="col-md-12">
                                <a href="javascript:void(0);" class="btn btn-danger">Add to cart</a>
                          {{--      <a href="javascript:void(0);" class="btn btn-info">More info</a>--}}
                            </div>

                            <div class="col-md-12">
                                <div class="rating">Rating:
                                    <label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-2"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end product -->
    </div>
    <div class="col-xs-12 col-md-6">
        <!-- First product box start here-->
        <div class="prod-info-main prod-wrap clearfix">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="product-image">
                        <img src="{{ asset('image/bourbonHoneyCake.jpg') }}" alt="194x228" class="img-responsive">
                        <span class="tag3 special">
							Special
						</span>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="product-deatil">
                        <h5 class="name">
                            <a href="#">
                                <span> Bourbon Honey Cake </span>
                            </a>
                            {{--<a href="#">
                                <span>Bread</span>
                            </a>--}}
                        </h5>
                        <p class="price-container">
                            <span>$29</span>
                        </p>
                        <span class="tag1"></span>
                    </div>
                    <div class="description">
                        <p> Bourbon Honey cake is a classic Jewish holiday dessert; like it moist, spicy, and topped with toasted almonds. Mine has layers and layers of subtle flavor from honey, brown sugar, orange zest, coffee, and spices like cinnamon, cloves, allspice, and ginger. </p>
                    </div>
                    <div class="product-info smart-form">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="javascript:void(0);" class="btn btn-danger">Add to cart</a>
                               {{-- <a href="javascript:void(0);" class="btn btn-info">More info</a>--}}
                            </div>
                            <div class="col-md-12">
                                <div class="rating">Rating:
                                    <label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
                                    <label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product -->
    </div>
    <div class="col-xs-12 col-md-6">
        <!-- First product box start here-->
        <div class="prod-info-main prod-wrap clearfix">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="product-image">
                        <img src="{{ asset('image/pumpkinYeastBread.jpg') }}" alt="194x228" class="img-responsive">
                        <span class="tag2 sale">
							SALE
						</span>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="product-deatil">
                        <h5 class="name">
                            <a href="#">
                                Pumpkin Yeast Bread
                            </a>
                        </h5>
                        <p class="price-container">
                            <span>$80</span>
                        </p>
                        <span class="tag1"></span>
                    </div>
                    <div class="description">
                        <p>Pumpkin Yeast bread is a type of moist quick bread made with pumpkin. The pumpkin can be cooked and softened before being used or simply baked with the bread (using canned pumpkin renders it a simpler dish to prepare). </p>
                    </div>
                    <div class="product-info smart-form">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="javascript:void(0);" class="btn btn-danger">Add to cart</a>

                            </div>
                            <div class="col-md-12">
                                <div class="rating">Rating:
                                    <label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
                                    <label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product -->



    </div>


    <div class="col-xs-12 col-md-6">
        <!-- First product box start here-->
        <div class="prod-info-main prod-wrap clearfix">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="product-image">
                        <img src="{{ asset('image/walnutBread.jpg') }}" alt="194x228" class="img-responsive">
                        <span class="tag2 sale">
							SALE
						</span>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="product-deatil">
                        <h5 class="name">
                            <a href="#">
                                Walnut Bread
                            </a>
                        </h5>
                        <p class="price-container">
                            <span>$56</span>
                        </p>
                        <span class="tag1"></span>
                    </div>
                    <div class="description">
                        <p>Date and walnut loaf is a traditional cake eaten in Britain, made using dates and walnuts. It is often made with treacle or tea to give it a dark brown colour. </p>
                    </div>
                    <div class="product-info smart-form">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="javascript:void(0);" class="btn btn-danger">Add to cart</a>

                            </div>
                            <div class="col-md-12">
                                <div class="rating">Rating:
                                    <label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
                                    <label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
                                    <label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end product -->



    </div>

</div>
</body>
</html>

