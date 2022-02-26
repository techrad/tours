<!DOCTYPE html>
<html lang="en">
<head><title>Exploore | Home Default</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT CSS-->
    <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900">
    <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700">
    <link type="text/css" rel="stylesheet" href="./assets/font/font-icon/font-awesome/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="./assets/font/font-icon/font-flaticon/flaticon.css">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="./assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="./assets/libs/slick-slider/slick.css">
    <link type="text/css" rel="stylesheet" href="./assets/libs/slick-slider/slick-theme.css">
    <link type="text/css" rel="stylesheet" href="./assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="./assets/libs/please-wait/please-wait.css">
    <!-- STYLE CSS-->
    <link type="text/css" rel="stylesheet" href="./assets/css/layout.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/components.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/responsive.css">
    <link type="text/css" rel="stylesheet" href="./assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
</head>
<body>
<div class="body-wrapper"><!-- MENU MOBILE-->
    <div class="wrapper-mobile-nav">
        <div class="header-topbar">
            <div class="topbar-search search-mobile">
                <form class="search-form">
                    <div class="input-icon"><i class="btn-search fa fa-search"></i><input type="text" placeholder="Search here..." class="form-control"/></div>
                </form>lstat
            </div>
        </div>
        <div class="header-main">
            <div class="menu-mobile">
                <ul class="nav-links nav navbar-nav">
                    <li class="dropdown"><a href="index.html" class="main-menu"><span class="text">Home</span></a>
                        
                    </li>
                    
                    
                    <li class="dropdown"><a href="tour-result.html" class="main-menu"><span class="text">Tour</span></a>
                        
                    </li>
                    <li><a href="about-us.html" class="main-menu"><span class="text">about</span></a></li>
                    <li class="dropdown"><a href="hotel-result.html" class="main-menu"><span class="text">packages</span></a><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span>
                        <ul class="dropdown-menu dropdown-menu-1">
                            <li><a href="hotel-result.html" class="link-page">hotel result</a></li>
                            <li><a href="hotel-view.html" class="link-page">hotel view</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="blog.html" class="main-menu"><span class="text">blog</span></a><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span>
                        <ul class="dropdown-menu dropdown-menu-1">
                            <li><a href="blog.html" class="link-page">blog list</a></li>
                            <li><a href="blog-detail.html" class="link-page">blog detail</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="car-rent-result.html" class="main-menu"><span class="text">page</span></a><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span>
                        <ul class="dropdown-menu dropdown-menu-1">
                            <li><a href="car-rent-result.html" class="link-page">car rent result</a></li>
                            <li><a href="cruises-result.html" class="link-page">cruises result</a></li>
                            <li><a href="404.html" class="link-page">page 404</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html" class="main-menu"><span class="text">contact</span></a></li>
                </ul>
                <ul class="list-unstyled list-inline login-widget">
                    <li><a href="#" class="item">login</a></li>
                    <li><a href="#" class="item">register</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- WRAPPER CONTENT-->
    <div class="wrapper-content"><!-- HEADER-->
      @include('layouts/header')
        <!-- WRAPPER-->
        <div id="wrapper-content"><!-- MAIN CONTENT-->
            <div class="main-content">
                <section class="page-banner homepage-default">
                    <div class="container">
                        <div class="homepage-banner-warpper">
                            <div class="homepage-banner-content">
                                <div class="group-title"><h1 class="title">culebra</h1>

                                    <p class="text">Discover the Caribbeans' Best Kept Secret<span class="boder"></span></p></div>
                                <div class="group-btn"><a href="#searchpanels" data-hover="CLICK ME" class="btn-click"><span class="text">go explore now</span><span class="icons fa fa-long-arrow-right"></span></a></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section >
                    <div class="tab-search tab-search-long tab-search-default">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <ul role="tablist" class="nav nav-tabs">
                                        <li role="presentation" class="tab-btn-wrapper"><a href="#flight" aria-controls="flight" role="tab" data-toggle="tab" class="tab-btn"><i class="flaticon-transport-1"></i><span class="text">FLIGHTS</span><span class="xs">FIND YOUR PACKAGE<br>Flights to Culebra Operated by Cape Air&reg;. Prices subject to change.</span></a></li>
                                        <li role="presentation" class="tab-btn-wrapper"><a href="#transfer" aria-controls="transfer" role="tab" data-toggle="tab" class="tab-btn"><i class="flaticon-transport-3"></i><span class="text">ACCOMODATIONS</span><span class="xs">FIND a TOUR</span></a></li>
                                        <li role="presentation" class="tab-btn-wrapper"><a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab" class="tab-btn"><i class="flaticon-three"></i><span class="text">TRANSPORTATION</span><span class="xs">FIND HOTEL</span></a></li>
                                        <li role="presentation" class="tab-btn-wrapper ACTIVE"><a href="#tours" aria-controls="tours" role="tab" data-toggle="tab" class="tab-btn"><i class="flaticon-people"></i><span class="text">PACKAGES</span><span class="xs">find a package</span></a></li>
                                        <li role="presentation" class="tab-btn-wrapper"><a href="#car-rent" aria-controls="car-rent" role="tab" data-toggle="tab" class="tab-btn"><i class="flaticon-transport-7"></i><span class="text">TOURS/span><span class="xs">FIND CAR RENT</span></a></li>
                                        <li role="presentation" class="tab-btn-wrapper"><a href="#cruises" aria-controls="cruises" role="tab" data-toggle="tab" class="tab-btn"><i class="flaticon-transport-4"></i><span class="text">CRUISES</span><span class="xs">FIND CRUISES</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content-bg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tab-content">
                                            <div role="tabpanel" id="flight" class="tab-pane fade in">
                                                <div class="find-widget find-flight-widget widget"><h4 class="title-widgets">FIND YOUR FLIGHT</h4>

                                                    <form class="content-widget">
                                                        <div class="ffw-radio-selection"><span class="ffw-radio-btn-wrapper"><input type="radio" name="flight type" value="one way" id="flight-type-1" checked="checked" class="ffw-radio-btn"><label for="flight-type-1" class="ffw-radio-label">One Way</label></span> <span class="ffw-radio-btn-wrapper"><input type="radio" name="flight type" value="round trip" id="flight-type-2" class="ffw-radio-btn"><label for="flight-type-2" class="ffw-radio-label">Round Trip</label></span> <span class="ffw-radio-btn-wrapper"><input type="radio" name="flight type" value="multiple cities" id="flight-type-3" class="ffw-radio-btn"><label for="flight-type-3" class="ffw-radio-label">Multiple Cities</label></span>

                                                            <div class="stretch">&nbsp;</div>
                                                        </div>
                                                        <div class="text-input small-margin-top">
                                                            <div class="place text-box-wrapper"><label class="tb-label">Where do you want to go?</label>

                                                                <div class="input-group"><input type="text" placeholder="Write the place" class="tb-input"></div>
                                                            </div>
                                                            <div class="input-daterange">
                                                                <div class="text-box-wrapper half"><label class="tb-label">Check in</label>

                                                                    <div class="input-group"><input type="text" placeholder="MM/DD/YY" class="tb-input"><i class="tb-icon fa fa-calendar input-group-addon"></i></div>
                                                                </div>
                                                                <div class="text-box-wrapper half"><label class="tb-label">Check out</label>

                                                                    <div class="input-group"><input type="text" placeholder="MM/DD/YY" class="tb-input"><i class="tb-icon fa fa-calendar input-group-addon"></i></div>
                                                                </div>
                                                            </div>
                                                            <div class="count adult-count text-box-wrapper"><label class="tb-label">Adult</label>

                                                                <div class="select-wrapper"><!--i.fa.fa-chevron-down--><select class="form-control custom-select selectbox">
                                                                    <option selected="selected">1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                </select></div>
                                                            </div>
                                                            <div class="count child-count text-box-wrapper"><label class="tb-label">Child</label>

                                                                <div class="select-wrapper"><!--i.fa.fa-chevron-down--><select class="form-control custom-select selectbox">
                                                                    <option selected="selected">0</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                </select></div>
                                                            </div>
                                                            <button type="submit" data-hover="SEARCH NOW" class="btn btn-slide"><span class="text">SEARCH NOW</span><span class="icons fa fa-long-arrow-right"></span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div role="tabpanel" id="transfer" class="tab-pane fade">
                                                <div class="find-widget find-transfer-widget widget"><h4 class="title-widgets">FIND TRANSFER</h4>

                                                    <form class="content-widget">
                                                        <div class="ffw-radio-selection"><span class="ffw-radio-btn-wrapper"><input type="radio" name="flight type" value="one way" id="transfer-type-1" checked="checked" class="ffw-radio-btn"><label for="transfer-type-1" class="ffw-radio-label">One Way</label></span> <span class="ffw-radio-btn-wrapper"><input type="radio" name="flight type" value="round trip" id="transfer-type-2" class="ffw-radio-btn"><label for="transfer-type-2" class="ffw-radio-label">Round Trip</label></span> <span class="ffw-radio-btn-wrapper"><input type="radio" name="flight type" value="multiple cities" id="transfer-type-3" class="ffw-radio-btn"><label for="transfer-type-3" class="ffw-radio-label">Multiple Places</label></span>

                                                            <div class="stretch">&nbsp;</div>
                                                        </div>
                                                        <div class="text-input small-margin-top">
                                                            <div class="place text-box-wrapper"><label class="tb-label">Where do you want to go?</label>

                                                                <div class="input-group"><input type="text" placeholder="Write the place" class="tb-input"></div>
                                                            </div>
                                                            <div class="date text-box-wrapper"><label class="tb-label">When do you want to go?</label>

                                                                <div class="input-group"><input type="text" placeholder="MM/DD/YY" class="tb-input"><i class="tb-icon fa fa-calendar input-group-addon"></i></div>
                                                            </div>
                                                            <div class="count adult-count text-box-wrapper"><label class="tb-label">Adult</label>

                                                                <div class="select-wrapper"><!--i.fa.fa-chevron-down--><select class="form-control custom-select selectbox">
                                                                    <option selected="selected">1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                </select></div>
                                                            </div>
                                                            <div class="count child-count text-box-wrapper"><label class="tb-label">Child</label>

                                                                <div class="select-wrapper"><!--i.fa.fa-chevron-down--><select class="form-control custom-select selectbox">
                                                                    <option selected="selected">0</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                </select></div>
                                                            </div>
                                                            <button type="submit" data-hover="SEARCH NOW" class="btn btn-slide"><span class="text">SEARCH NOW</span><span class="icons fa fa-long-arrow-right"></span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div role="tabpanel" id="hotel" class="tab-pane fade">
                                                <div class="find-widget find-hotel-widget widget"><h4 class="title-widgets">FIND HOTEL</h4>

                                                    <form class="content-widget">
                                                        <div class="text-input small-margin-top">
                                                            <div class="place text-box-wrapper"><label class="tb-label">Where do you want to go?</label>

                                                                <div class="input-group"><input type="text" placeholder="Write the place" class="tb-input"></div>
                                                            </div>
                                                            <div class="input-daterange">
                                                                <div class="text-box-wrapper half"><label class="tb-label">Check in</label>

                                                                    <div class="input-group"><input type="text" placeholder="MM/DD/YY" class="tb-input"><i class="tb-icon fa fa-calendar input-group-addon"></i></div>
                                                                </div>
                                                                <div class="text-box-wrapper half"><label class="tb-label">Check out</label>

                                                                    <div class="input-group"><input type="text" placeholder="MM/DD/YY" class="tb-input"><i class="tb-icon fa fa-calendar input-group-addon"></i></div>
                                                                </div>
                                                            </div>
                                                            <div class="count adult-count text-box-wrapper"><label class="tb-label">Adult</label>

                                                                <div class="select-wrapper"><!--i.fa.fa-chevron-down--><select class="form-control custom-select selectbox">
                                                                    <option selected="selected">1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                </select></div>
                                                            </div>
                                                            <div class="count child-count text-box-wrapper"><label class="tb-label">Child</label>

                                                                <div class="select-wrapper"><!--i.fa.fa-chevron-down--><select class="form-control custom-select selectbox">
                                                                    <option selected="selected">0</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                </select></div>
                                                            </div>
                                                            <button type="submit" data-hover="SEARCH NOW" class="btn btn-slide"><span class="text">SEARCH NOW</span><span class="icons fa fa-long-arrow-right"></span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div role="tabpanel" id="tours" class="tab-pane fade-in active">
                                                <div class="find-widget find-tours-widget widget"><h4 class="title-widgets">FIND PACKAGES</h4>

                                                    <form class="content-widget">
                                                        <div class="text-input small-margin-top">
                                                            <div class="place text-box-wrapper"><label class="tb-label">Where do you want to go?</label>

                                                                <div class="input-group"><input type="text" placeholder="Write the place" class="tb-input"></div>
                                                            </div>
                                                            <div class="date text-box-wrapper"><label class="tb-label">When do you want to go?</label>

                                                                <div class="input-group"><input type="text" placeholder="MM/DD/YY" class="tb-input"><i class="tb-icon fa fa-calendar input-group-addon"></i></div>
                                                            </div>
                                                            <div class="count adult-count text-box-wrapper"><label class="tb-label">Adult</label>

                                                                <div class="select-wrapper"><!--i.fa.fa-chevron-down--><select class="form-control custom-select selectbox">
                                                                    <option selected="selected">1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                </select></div>
                                                            </div>
                                                            <div class="count child-count text-box-wrapper"><label class="tb-label">Child</label>

                                                                <div class="select-wrapper"><!--i.fa.fa-chevron-down--><select class="form-control custom-select selectbox">
                                                                    <option selected="selected">0</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                </select></div>
                                                            </div>
                                                            <button type="submit" data-hover="SEARCH NOW" class="btn btn-slide"><span class="text">SEARCH NOW</span><span class="icons fa fa-long-arrow-right"></span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div role="tabpanel" id="car-rent" class="tab-pane fade">
                                                <div class="find-widget find-car-widget widget"><h4 class="title-widgets">FIND CAR</h4>

                                                    <form class="content-widget">
                                                        <div class="text-input small-margin-top">
                                                            <div class="place text-box-wrapper"><label class="tb-label">Where do you want to go?</label>

                                                                <div class="input-group"><input type="text" placeholder="Write the place" class="tb-input"></div>
                                                            </div>
                                                            <div class="input-daterange">
                                                                <div class="text-box-wrapper half"><label class="tb-label">Start date</label>

                                                                    <div class="input-group"><input type="text" placeholder="MM/DD/YY" class="tb-input"><i class="tb-icon fa fa-calendar input-group-addon"></i></div>
                                                                </div>
                                                                <div class="text-box-wrapper half"><label class="tb-label">Return date</label>

                                                                    <div class="input-group"><input type="text" placeholder="MM/DD/YY" class="tb-input"><i class="tb-icon fa fa-calendar input-group-addon"></i></div>
                                                                </div>
                                                            </div>
                                                            <div class="count car-count text-box-wrapper"><label class="tb-label">No. of Car</label>

                                                                <div class="select-wrapper"><!--i.fa.fa-chevron-down--><select class="form-control custom-select selectbox">
                                                                    <option selected="selected">1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                </select></div>
                                                            </div>
                                                            <button type="submit" data-hover="SEARCH NOW" class="btn btn-slide"><span class="text">SEARCH NOW</span><span class="icons fa fa-long-arrow-right"></span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div role="tabpanel" id="cruises" class="tab-pane fade">
                                                <div class="find-widget find-cruises-widget widget"><h4 class="title-widgets">FIND CRUISES</h4>

                                                    <form class="content-widget">
                                                        <div class="ffw-radio-selection"><span class="ffw-radio-btn-wrapper"><input type="radio" name="flight type" value="one way" id="cruises-type-1" checked="checked" class="ffw-radio-btn"><label for="cruises-type-1" class="ffw-radio-label">One Way</label></span> <span class="ffw-radio-btn-wrapper"><input type="radio" name="flight type" value="round trip" id="cruises-type-2" class="ffw-radio-btn"><label for="cruises-type-2" class="ffw-radio-label">Round Trip</label></span> <span class="ffw-radio-btn-wrapper"><input type="radio" name="flight type" value="multiple cities" id="cruises-type-3" class="ffw-radio-btn"><label for="cruises-type-3" class="ffw-radio-label">Multiple Places</label></span>

                                                            <div class="stretch">&nbsp;</div>
                                                        </div>
                                                        <div class="text-input small-margin-top">
                                                            <div class="place text-box-wrapper"><label class="tb-label">Where do you want to go?</label>

                                                                <div class="input-group"><input type="text" placeholder="Write the place" class="tb-input"></div>
                                                            </div>
                                                            <div class="count time-count text-box-wrapper"><label class="tb-label">Time</label>

                                                                <div class="select-wrapper"><!--i.fa.fa-chevron-down--><select class="form-control custom-select selectbox">
                                                                    <option selected="selected">08:00</option>
                                                                    <option>10:00</option>
                                                                    <option>12:00</option>
                                                                    <option>14:00</option>
                                                                    <option>16:00</option>
                                                                    <option>18:00</option>
                                                                </select></div>
                                                            </div>
                                                            <div class="count adult-count text-box-wrapper"><label class="tb-label">Adult</label>

                                                                <div class="select-wrapper"><!--i.fa.fa-chevron-down--><select class="form-control custom-select selectbox">
                                                                    <option selected="selected">1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                </select></div>
                                                            </div>
                                                            <div class="count child-count text-box-wrapper"><label class="tb-label">Child</label>

                                                                <div class="select-wrapper"><!--i.fa.fa-chevron-down--><select class="form-control custom-select selectbox">
                                                                    <option selected="selected">0</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                    <option>6</option>
                                                                    <option>7</option>
                                                                    <option>8</option>
                                                                    <option>9</option>
                                                                </select></div>
                                                            </div>
                                                            <button type="submit" data-hover="SEARCH NOW" class="btn btn-slide"><span class="text">SEARCH NOW</span><span class="icons fa fa-long-arrow-right"></span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="about-us layout-1 padding-top padding-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="group-title">
                                    <div class="sub-title"><p class="text">be born agian</p><i class="icons flaticon-people"></i></div>
                                    <h2 class="main-title">we are exploore</h2></div>
                                <div class="about-us-wrapper"><p class="text">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut eim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat uisas aute irure dolor ullamco laboris nisi in reprehenderit.</p>

                                    <div class="group-list">
                                        <ul class="list-unstyled about-us-list">
                                            <li><p class="text">First Class Flights</p></li>
                                            <li><p class="text">5 Star Accommodations</p></li>
                                            <li><p class="text">Inclusive Packages</p></li>
                                            <li><p class="text">Latest Model Vehicles</p></li>
                                        </ul>
                                        <ul class="list-unstyled about-us-list">
                                            <li><p class="text">Handpicked Hotels</p></li>
                                            <li><p class="text">Accesibility managment</p></li>
                                            <li><p class="text">10 Languages available</p></li>
                                            <li><p class="text">+120 Premium city tours</p></li>
                                        </ul>
                                    </div>
                                    <div class="group-button"><a href="tour-result.html" class="btn btn-maincolor">purchase now</a><a href="about-us.html" class="btn">read more</a></div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div data-wow-delay="0.5s" class="about-us-image wow zoomIn"><img src="assets/images/homepage/about-us-1.jpg" alt="" class="img-responsive"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="tours padding-top padding-bottom">
                    <div class="container">
                        <div class="tours-wrapper">
                            <div class="group-title">
                                <div class="sub-title"><p class="text">PACK AND GO</p><i class="icons flaticon-people"></i></div>
                                <h2 class="main-title">awesome tours</h2></div>
                            <div class="tours-content margin-top70">
                                <div class="tours-list">
                                    <div class="tours-layout">
                                        <div class="image-wrapper"><a href="tour-view.html" class="link"><img src="assets/images/tours/tour-1.jpg" alt="" class="img-responsive"></a>

                                            <div class="title-wrapper"><a href="tour-view.html" class="title">Newyork city</a><i class="icons flaticon-circle"></i></div>
                                            <div class="label-sale"><p class="text">sale</p>

                                                <p class="number">35%</p></div>
                                        </div>
                                        <div class="content-wrapper">
                                            <ul class="list-info list-inline list-unstyle">
                                                <li><a href="#" class="link"><i class="icons fa fa-eye"></i><span class="text number">234</span></a></li>
                                                <li><a href="#" class="link"><i class="icons fa fa-heart"></i><span class="text number">234</span></a></li>
                                                <li><a href="#" class="link"><i class="icons fa fa-comment"></i><span class="text number">234</span></a></li>
                                            </ul>
                                            <div class="content">
                                                <div class="title">
                                                    <div class="price"><sup>$</sup><span class="number">350</span></div>
                                                    <p class="for-price">3 days 2 nights</p></div>
                                                <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus ultrices purus, volutpat.</p>

                                                <div class="group-btn-tours"><a href="tour-view.html" class="left-btn">book now</a><a href="blog.html" class="right-btn">add to list</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tours-layout">
                                        <div class="image-wrapper"><a href="tour-view.html" class="link"><img src="assets/images/tours/tour-2.jpg" alt="" class="img-responsive"></a>

                                            <div class="title-wrapper"><a href="tour-view.html" class="title">paris city</a><i class="icons flaticon-circle"></i></div>
                                        </div>
                                        <div class="content-wrapper">
                                            <ul class="list-info list-inline list-unstyled">
                                                <li><a href="#" class="link"><i class="icons fa fa-eye"></i><span class="text number">234</span></a></li>
                                                <li><a href="#" class="link"><i class="icons fa fa-heart"></i><span class="text number">234</span></a></li>
                                                <li><a href="#" class="link"><i class="icons fa fa-comment"></i><span class="text number">234</span></a></li>
                                            </ul>
                                            <div class="content">
                                                <div class="title">
                                                    <div class="price"><sup>$</sup><span class="number">250</span></div>
                                                    <p class="for-price">3 days 2 nights</p></div>
                                                <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus ultrices purus, volutpat.</p>

                                                <div class="group-btn-tours"><a href="tour-view.html" class="left-btn">book now</a><a href="blog.html" class="right-btn">add to list</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tours-layout">
                                        <div class="image-wrapper"><a href="tour-view.html" class="link"><img src="assets/images/tours/tour-3.jpg" alt="" class="img-responsive"></a>

                                            <div class="title-wrapper"><a href="tour-view.html" class="title">tokyo city</a><i class="icons flaticon-circle"></i></div>
                                        </div>
                                        <div class="content-wrapper">
                                            <ul class="list-info list-inline list-unstyled">
                                                <li><a href="#" class="link"><i class="icons fa fa-eye"></i><span class="text number">234</span></a></li>
                                                <li><a href="#" class="link"><i class="icons fa fa-heart"></i><span class="text number">234</span></a></li>
                                                <li><a href="#" class="link"><i class="icons fa fa-comment"></i><span class="text number">234</span></a></li>
                                            </ul>
                                            <div class="content">
                                                <div class="title">
                                                    <div class="price"><sup>$</sup><span class="number">375</span></div>
                                                    <p class="for-price">3 days 2 nights</p></div>
                                                <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus ultrices purus, volutpat.</p>

                                                <div class="group-btn-tours"><a href="tour-view.html" class="left-btn">book now</a><a href="blog.html" class="right-btn">add to list</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="about-us.html" class="btn btn-transparent margin-top70">more tours</a></div>
                        </div>
                    </div>
                </section>
                <section class="videos layout-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="video-wrapper padding-top padding-bottom"><h5 class="sub-title">it’s a <strong>big world</strong> out there</h5>

                                    <h2 class="title">go explore</h2>

                                    <div class="text">There are many variations of passages of. Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look.</div>
                                    <a href="tour-result.html" class="btn btn-maincolor">read more</a></div>
                            </div>
                            <div class="col-md-7">
                                <div class="video-thumbnail">
                                    <div class="video-bg"><img src="assets/images/homepage/video-bg.jpg" alt="" class="img-responsive"></div>
                                    <div class="video-button-play"><i class="icons fa fa-play"></i></div>
                                    <div class="video-button-close"></div>
                                    <iframe src="https://www.youtube.com/embed/moOosWuoDyA?rel=0" allowfullscreen="allowfullscreen" class="video-embed"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="hotels padding-top padding-bottom">
                    <div class="container">
                        <div class="hotels-wrapper">
                            <div class="group-title">
                                <div class="sub-title"><p class="text">GUARANTEED QUALITY</p><i class="icons flaticon-people"></i></div>
                                <h2 class="main-title">Recommended hotels</h2></div>
                            <div class="hotels-content margin-top70">
                                <div class="row hotels-list">
                                    <div class="col-sm-6">
                                        <div class="hotels-layout">
                                            <div class="image-wrapper"><a href="hotel-view.html" class="link"><img src="assets/images/hotels/hotel-1.jpg" alt="" class="img-responsive"></a>

                                                <div class="title-wrapper"><a href="hotel-view.html" class="title">sarina hotel</a>

                                                    <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-80"><strong class="rating">5.00</strong> out of 5</span></div>
                                                </div>
                                                <div class="label-sale"><p class="text">sale</p>

                                                    <p class="number">35%</p></div>
                                            </div>
                                            <div class="content-wrapper">
                                                <div class="content">
                                                    <div class="title">
                                                        <div class="price"><sup>$</sup><span class="number">30</span></div>
                                                        <p class="for-price">for person per night</p></div>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus lorem ipsum dolor consectete.</p>

                                                    <div class="group-btn-tours"><a href="hotel-view.html" class="left-btn">book now</a></div>
                                                </div>
                                                <ul class="list-info list-unstyled">
                                                    <li><a href="#" class="link"><i class="icons hidden-icon fa fa-eye"></i><span class="number">234</span></a></li>
                                                    <li><a href="#" class="link"><i class="icons hidden-icon fa fa-heart"></i><span class="number">156</span></a></li>
                                                    <li><a href="#" class="link"><i class="icons hidden-icon fa fa-comment"></i><span class="number">19</span></a></li>
                                                    <li><a href="javascript:void(0)" class="link"><i class="icons fa fa-share-alt"></i></a>
                                                        <ul class="share-social-list">
                                                            <li><a href="#" class="link-social"><i class="icons fa fa-facebook"></i></a></li>
                                                            <li><a href="#" class="link-social"><i class="icons fa fa-google-plus"></i></a></li>
                                                            <li><a href="#" class="link-social"><i class="icons fa fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#" class="link"><i class="icons fa fa-map-marker"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="hotels-layout">
                                            <div class="image-wrapper"><a href="hotel-view.html" class="link"><img src="assets/images/hotels/hotel-2.jpg" alt="" class="img-responsive"></a>

                                                <div class="title-wrapper"><a href="hotel-view.html" class="title">sarina hotel</a>

                                                    <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-100"><strong class="rating">5.00</strong> out of 5</span></div>
                                                </div>
                                            </div>
                                            <div class="content-wrapper">
                                                <div class="content">
                                                    <div class="title">
                                                        <div class="price"><sup>$</sup><span class="number">30</span></div>
                                                        <p class="for-price">for person per night</p></div>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus lorem ipsum dolor consectete.</p>

                                                    <div class="group-btn-tours"><a href="hotel-view.html" class="left-btn">book now</a></div>
                                                </div>
                                                <ul class="list-info list-unstyled">
                                                    <li><a href="#" class="link"><i class="icons hidden-icon fa fa-eye"></i><span class="number">234</span></a></li>
                                                    <li><a href="#" class="link"><i class="icons hidden-icon fa fa-heart"></i><span class="number">156</span></a></li>
                                                    <li><a href="#" class="link"><i class="icons hidden-icon fa fa-comment"></i><span class="number">19</span></a></li>
                                                    <li><a href="javascript:void(0)" class="link"><i class="icons fa fa-share-alt"></i></a>
                                                        <ul class="share-social-list">
                                                            <li><a href="#" class="link-social"><i class="icons fa fa-facebook"></i></a></li>
                                                            <li><a href="#" class="link-social"><i class="icons fa fa-google-plus"></i></a></li>
                                                            <li><a href="#" class="link-social"><i class="icons fa fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#" class="link"><i class="icons fa fa-map-marker"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="hotels-layout">
                                            <div class="image-wrapper"><a href="hotel-view.html" class="link"><img src="assets/images/hotels/hotel-3.jpg" alt="" class="img-responsive"></a>

                                                <div class="title-wrapper"><a href="hotel-view.html" class="title">sarina hotel</a>

                                                    <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-90"><strong class="rating">5.00</strong> out of 5</span></div>
                                                </div>
                                            </div>
                                            <div class="content-wrapper">
                                                <div class="content">
                                                    <div class="title">
                                                        <div class="price"><sup>$</sup><span class="number">30</span></div>
                                                        <p class="for-price">for person per night</p></div>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus lorem ipsum dolor consectete.</p>

                                                    <div class="group-btn-tours"><a href="hotel-view.html" class="left-btn">book now</a></div>
                                                </div>
                                                <ul class="list-info list-unstyled">
                                                    <li><a href="#" class="link"><i class="icons hidden-icon fa fa-eye"></i><span class="number">234</span></a></li>
                                                    <li><a href="#" class="link"><i class="icons hidden-icon fa fa-heart"></i><span class="number">156</span></a></li>
                                                    <li><a href="#" class="link"><i class="icons hidden-icon fa fa-comment"></i><span class="number">19</span></a></li>
                                                    <li><a href="javascript:void(0)" class="link"><i class="icons fa fa-share-alt"></i></a>
                                                        <ul class="share-social-list">
                                                            <li><a href="#" class="link-social"><i class="icons fa fa-facebook"></i></a></li>
                                                            <li><a href="#" class="link-social"><i class="icons fa fa-google-plus"></i></a></li>
                                                            <li><a href="#" class="link-social"><i class="icons fa fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#" class="link"><i class="icons fa fa-map-marker"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="hotels-layout">
                                            <div class="image-wrapper"><a href="hotel-view.html" class="link"><img src="assets/images/hotels/hotel-4.jpg" alt="" class="img-responsive"></a>

                                                <div class="title-wrapper"><a href="hotel-view.html" class="title">sarina hotel</a>

                                                    <div title="Rated 5.00 out of 5" class="star-rating"><span class="width-100"><strong class="rating">5.00</strong> out of 5</span></div>
                                                </div>
                                            </div>
                                            <div class="content-wrapper">
                                                <div class="content">
                                                    <div class="title">
                                                        <div class="price"><sup>$</sup><span class="number">30</span></div>
                                                        <p class="for-price">for person per night</p></div>
                                                    <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus lorem ipsum dolor consectete.</p>

                                                    <div class="group-btn-tours"><a href="hotel-view.html" class="left-btn">book now</a></div>
                                                </div>
                                                <ul class="list-info list-unstyled">
                                                    <li><a href="#" class="link"><i class="icons hidden-icon fa fa-eye"></i><span class="number">234</span></a></li>
                                                    <li><a href="#" class="link"><i class="icons hidden-icon fa fa-heart"></i><span class="number">156</span></a></li>
                                                    <li><a href="#" class="link"><i class="icons hidden-icon fa fa-comment"></i><span class="number">19</span></a></li>
                                                    <li><a href="javascript:void(0)" class="link"><i class="icons fa fa-share-alt"></i></a>
                                                        <ul class="share-social-list">
                                                            <li><a href="#" class="link-social"><i class="icons fa fa-facebook"></i></a></li>
                                                            <li><a href="#" class="link-social"><i class="icons fa fa-google-plus"></i></a></li>
                                                            <li><a href="#" class="link-social"><i class="icons fa fa-twitter"></i></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#" class="link"><i class="icons fa fa-map-marker"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="about-us.html" class="btn btn-transparent margin-top70">more hotel</a></div>
                        </div>
                    </div>
                </section>
                <section class="travelers">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="traveler-wrapper padding-top padding-bottom">
                                    <div class="group-title white">
                                        <div class="sub-title"><p class="text">RELAX AND ENJOY</p><i class="icons flaticon-people"></i></div>
                                        <h2 class="main-title">happy traveler</h2></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="traveler-list">
                                    <div class="traveler">
                                        <div class="cover-image"><img src="assets/images/homepage/cover-image-1.jpg" alt=""></div>
                                        <div class="wrapper-content">
                                            <div class="avatar"><img src="assets/images/homepage/avatar-1.jpg" alt="" class="img-responsive"></div>
                                            <p class="name">Sandara park</p>

                                            <p class="address">roma, italy</p>

                                            <p class="description">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."</p></div>
                                    </div>
                                    <div class="traveler">
                                        <div class="cover-image"><img src="assets/images/homepage/cover-image-2.jpg" alt=""></div>
                                        <div class="wrapper-content">
                                            <div class="avatar"><img src="assets/images/homepage/avatar-2.jpg" alt="" class="img-responsive"></div>
                                            <p class="name">Kown Jiyong</p>

                                            <p class="address">london, England</p>

                                            <p class="description">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."</p></div>
                                    </div>
                                    <div class="traveler">
                                        <div class="cover-image"><img src="assets/images/homepage/cover-image-3.jpg" alt=""></div>
                                        <div class="wrapper-content">
                                            <div class="avatar"><img src="assets/images/homepage/avatar-3.jpg" alt="" class="img-responsive"></div>
                                            <p class="name">taylor rose</p>

                                            <p class="address">pari, France</p>

                                            <p class="description">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."</p></div>
                                    </div>
                                    <div class="traveler">
                                        <div class="cover-image"><img src="assets/images/homepage/cover-image-4.jpg" alt=""></div>
                                        <div class="wrapper-content">
                                            <div class="avatar"><img src="assets/images/homepage/avatar-4.jpg" alt="" class="img-responsive"></div>
                                            <p class="name">john smith</p>

                                            <p class="address">new york, USA</p>

                                            <p class="description">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="news padding-top padding-bottom">
                    <div class="container">
                        <div class="news-wrapper">
                            <div class="group-title">
                                <div class="sub-title"><p class="text">EXPLORATIONAL STORIES</p><i class="icons flaticon-people"></i></div>
                                <h2 class="main-title">news and updates</h2></div>
                            <div class="news-content margin-top70">
                                <div class="news-list">
                                    <div class="new-layout">
                                        <div class="image-wrapper"><a href="#" class="link"><img src="assets/images/homepage/new-1.jpg" alt="" class="img-responsive"></a>

                                            <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ...</div>
                                        </div>
                                        <div class="content-wrapper"><a href="#" class="title">DON’T GIVE IN TO FEAR OR HOW TO TRAVEL TO A PLACE YOU KNOW.</a>
                                            <ul class="info list-inline list-unstyled">
                                                <li><a href="#" class="link">September 17, 2015 </a></li>
                                                <li><a href="#" class="link">admin</a></li>
                                            </ul>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                                            <p class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa. Ut enim ad minim veniam, quis trud tionco laboris nisi ut aliquip.</p><a href="blog.html" class="btn btn-maincolor">read know</a>

                                            <div class="tags">
                                                <div class="title-tag">tags:</div>
                                                <ul class="list-inline list-unstyled list-tags">
                                                    <li><a href="blog-detail.html" class="tag">explore</a></li>
                                                    <li><a href="blog-detail.html" class="tag">adventure</a></li>
                                                    <li><a href="blog-detail.html" class="tag">traveler</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="new-layout">
                                        <div class="image-wrapper"><a href="#" class="link"><img src="assets/images/homepage/new-2.jpg" alt="" class="img-responsive"></a>

                                            <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ...</div>
                                        </div>
                                        <div class="content-wrapper"><a href="#" class="title">365 Days: 20 things I Learned from Traveling Around the World</a>
                                            <ul class="info list-inline list-unstyled">
                                                <li><a href="#" class="link">november 29, 2015 </a></li>
                                                <li><a href="#" class="link">admin</a></li>
                                            </ul>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                                            <p class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p><a href="blog.html" class="btn btn-maincolor">read know</a>

                                            <div class="tags">
                                                <div class="title-tag">tags:</div>
                                                <ul class="list-inline list-unstyled list-tags">
                                                    <li><a href="blog-detail.html" class="tag">explore</a></li>
                                                    <li><a href="blog-detail.html" class="tag">adventure</a></li>
                                                    <li><a href="blog-detail.html" class="tag">traveler</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="new-layout">
                                        <div class="image-wrapper"><a href="#" class="link"><img src="assets/images/homepage/new-3.jpg" alt="" class="img-responsive"></a>

                                            <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ...</div>
                                        </div>
                                        <div class="content-wrapper"><a href="#" class="title">My 30 Best Travel Tips After 4 Years Traveling The World</a>
                                            <ul class="info list-inline list-unstyled">
                                                <li><a href="#" class="link">april 1, 2016</a></li>
                                                <li><a href="#" class="link">admin</a></li>
                                            </ul>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                                            <p class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa. Ut enim ad minim veniam, quis trud tionco laboris nisi ut aliquip.</p><a href="blog.html" class="btn btn-maincolor">read know</a>

                                            <div class="tags">
                                                <div class="title-tag">tags:</div>
                                                <ul class="list-inline list-unstyled list-tags">
                                                    <li><a href="blog-detail.html" class="tag">explore</a></li>
                                                    <li><a href="blog-detail.html" class="tag">adventure</a></li>
                                                    <li><a href="blog-detail.html" class="tag">traveler</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="banner-sale-1">
                    <div class="banner-left">
                        <div class="title-box"><h1 class="title-overlay title-1 padding-top">Explore</h1>

                            <h2 class="title-overlay title-2">Dream</h2>

                            <h3 class="title-overlay title-3 padding-bottom">Discover </h3></div>
                    </div>
                    <div class="banner-right">
                        <div class="text-salebox">
                            <div class="text-left">
                                <div class="sale-box">
                                    <div class="sale-box-top"><h2 class="number">50</h2><span class="sup-1">%</span><span class="sup-2">off</span></div>
                                    <h2 class="text-sale">sale</h2></div>
                            </div>
                            <div class="text-right"><h5 class="title">Epic Journeys From The Explooer</h5>

                                <p class="text">cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>

                                <div class="group-button"><a href="tour-view.html" class="btn btn-maincolor">book now</a><a href="tour-view.html" class="btn btn-transparent">read more</a></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="a-fact padding-top padding-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="group-title">
                                    <div class="sub-title"><p class="text">PROUD NUMBERS</p><i class="icons flaticon-people"></i></div>
                                    <h2 class="main-title">a fact of explooer</h2></div>
                                <div class="a-fact-wrapper"><p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, by injected humour. </p>

                                    <div class="a-fact-list">
                                        <ul class="list-unstyled">
                                            <li><p class="text">1456 flight in the world.</p></li>
                                            <li><p class="text">2385 happy customer enjoy jouneys with Explooer.</p></li>
                                            <li><p class="text">356 best destinational we explore.</p></li>
                                            <li><p class="text">2345 package tours every year.</p></li>
                                            <li><p class="text">top 10 best tourism services.</p></li>
                                        </ul>
                                    </div>
                                    <a href="#" class="btn btn-maincolor">read more</a></div>
                            </div>
                            <div class="col-md-7">
                                <div class="a-fact-image-wrapper">
                                    <div class="a-fact-image"><a href="#" class="icons icons-1"><i class="fa fa-plane"></i></a><img src="assets/images/homepage/area-1.png" alt="" class="img-responsive"></div>
                                    <div class="a-fact-image"><a href="#" class="icons icons-2"><i class="fa fa-map-marker"></i></a><img src="assets/images/homepage/area-2.png" alt="" class="img-responsive"></div>
                                    <div class="a-fact-image"><a href="#" class="icons icons-3"><i class="fa fa-users"></i></a><img src="assets/images/homepage/area-3.png" alt="" class="img-responsive"></div>
                                    <div class="a-fact-image"><a href="#" class="icons icons-4"><i class="fa fa-suitcase"></i></a><img src="assets/images/homepage/area-4.png" alt="" class="img-responsive"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="contact style-1">
                    <div class="container">
                        <div class="row">
                            <div class="wrapper-contact-style">
                                <div data-wow-delay="0.5s" class="contact-wrapper-images wow fadeInLeft"><img src="assets/images/homepage/contact-people.png" alt="" class="img-responsive"></div>
                                <div class="col-lg-6 col-sm-7 col-lg-offset-4 col-sm-offset-5">
                                    <div data-wow-delay="0.4s" class="contact-wrapper padding-top padding-bottom wow fadeInRight">
                                        <div class="contact-box"><h5 class="title">contact us</h5>

                                            <p class="text">Just pack and go! Let leave your travel plan to travel experts!</p>

                                            <form class="contact-form"><input type="text" placeholder="Your Name" class="form-control form-input"><!--label.control-label.form-label.warning-label(for="") Warning for the above !--><input type="email" placeholder="Your Email" class="form-control form-input"><!--label.control-label.form-label.warning-label(for="") Warning for the above !--><textarea placeholder="Your Message" class="form-control form-input"></textarea>

                                                <div class="contact-submit">
                                                    <button type="submit" data-hover="SEND NOW" class="btn btn-slide"><span class="text">send message</span><span class="icons fa fa-long-arrow-right"></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- BUTTON BACK TO TOP-->
            <div id="back-top"><a href="#top" class="link"><i class="fa fa-angle-double-up"></i></a></div>
        </div>
        <!-- FOOTER-->
        <footer>
            <div class="footer-main padding-top padding-bottom">
                <div class="container">
                    <div class="footer-main-wrapper"><a href="index.html" class="logo-footer"><img src="assets/images/logo/logo.png" alt="" class="img-responsive"/></a>

                        <div class="row">
                            <div class="col-2">
                                <div class="col-md-3 col-xs-5">
                                    <div class="contact-us-widget widget">
                                        <div class="title-widget">contact us</div>
                                        <div class="content-widget">
                                            <div class="info-list">
                                                <ul class="list-unstyled">
                                                    <li><i class="icons fa fa-map-marker"></i><a href="#" class="link">132, My Street, Kingston, New York 12401</a></li>
                                                    <li><i class="icons fa fa-phone"></i><a href="#" class="link">270 - 188 - 6026</a></li>
                                                    <li><i class="icons fa fa-envelope-o"></i><a href="#" class="link">domain@expooler.com</a></li>
                                                </ul>
                                            </div>
                                            <div class="form-email"><p class="text">Sign up for our mailing list to get latest updates and offers.</p>

                                                <form action="index.html">
                                                    <div class="input-group"><input type="text" placeholder="Email address" class="form-control form-email-widget"/><span class="input-group-btn"><button type="submit" class="btn-email">&#10004;</button></span></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-3">
                                    <div class="booking-widget widget text-center">
                                        <div class="title-widget">book now</div>
                                        <div class="content-widget">
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="link">Flights</a></li>
                                                <li><a href="#" class="link">Tours</a></li>
                                                <li><a href="#" class="link">Packages</a></li>
                                                <li><a href="#" class="link">Transfer</a></li>
                                                <li><a href="#" class="link">Car Rent</a></li>
                                                <li><a href="#" class="link">Cruises</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-xs-4">
                                    <div class="explore-widget widget">
                                        <div class="title-widget">explore</div>
                                        <div class="content-widget">
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="link">Tour Singapore City</a></li>
                                                <li><a href="#" class="link">Tour Manila City</a></li>
                                                <li><a href="#" class="link">Tour New York City</a></li>
                                                <li><a href="#" class="link">Tour Sanghai City</a></li>
                                                <li><a href="#" class="link">Tour Hongkong City</a></li>
                                                <li><a href="#" class="link">Tour Tokyo City</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="col-md-2 col-xs-6">
                                    <div class="top-deals-widget widget">
                                        <div class="title-widget">top deals</div>
                                        <div class="content-widget">
                                            <ul class="list-unstyled">
                                                <li><a href="#" class="link">Tour Packages Singapore</a></li>
                                                <li><a href="#" class="link">Tour Packages Manila</a></li>
                                                <li><a href="#" class="link">Tour Packages New York</a></li>
                                                <li><a href="#" class="link">Tour Packages Sanghai</a></li>
                                                <li><a href="#" class="link">Tour Packages Hongkong</a></li>
                                                <li><a href="#" class="link">Tour Packages Tokyo</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <div class="destination-widget widget">
                                        <div class="title-widget">Destination</div>
                                        <div class="content-widget">
                                            <ul class="list-unstyled list-inline">
                                                <li><a href="#" class="thumb"><img src="assets/images/footer/gallery-01.jpg" alt="" class="img-responsive"/></a></li>
                                                <li><a href="#" class="thumb"><img src="assets/images/footer/gallery-02.jpg" alt="" class="img-responsive"/></a></li>
                                                <li><a href="#" class="thumb"><img src="assets/images/footer/gallery-03.jpg" alt="" class="img-responsive"/></a></li>
                                                <li><a href="#" class="thumb"><img src="assets/images/footer/gallery-04.jpg" alt="" class="img-responsive"/></a></li>
                                                <li><a href="#" class="thumb"><img src="assets/images/footer/gallery-05.jpg" alt="" class="img-responsive"/></a></li>
                                                <li><a href="#" class="thumb"><img src="assets/images/footer/gallery-06.jpg" alt="" class="img-responsive"/></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hyperlink">
                <div class="container">
                    <div class="slide-logo-wrapper">
                        <div class="logo-item"><a href="#" class="link"><img src="assets/images/footer/logo-01.png" alt="" class="img-responsive"/></a></div>
                        <div class="logo-item"><a href="#" class="link"><img src="assets/images/footer/logo-02.png" alt="" class="img-responsive"/></a></div>
                        <div class="logo-item"><a href="#" class="link"><img src="assets/images/footer/logo-03.png" alt="" class="img-responsive"/></a></div>
                        <div class="logo-item"><a href="#" class="link"><img src="assets/images/footer/logo-04.png" alt="" class="img-responsive"/></a></div>
                        <div class="logo-item"><a href="#" class="link"><img src="assets/images/footer/logo-05.png" alt="" class="img-responsive"/></a></div>
                        <div class="logo-item"><a href="#" class="link"><img src="assets/images/footer/logo-06.png" alt="" class="img-responsive"/></a></div>
                        <div class="logo-item"><a href="#" class="link"><img src="assets/images/footer/logo-01.png" alt="" class="img-responsive"/></a></div>
                        <div class="logo-item"><a href="#" class="link"><img src="assets/images/footer/logo-02.png" alt="" class="img-responsive"/></a></div>
                        <div class="logo-item"><a href="#" class="link"><img src="assets/images/footer/logo-03.png" alt="" class="img-responsive"/></a></div>
                        <div class="logo-item"><a href="#" class="link"><img src="assets/images/footer/logo-04.png" alt="" class="img-responsive"/></a></div>
                        <div class="logo-item"><a href="#" class="link"><img src="assets/images/footer/logo-05.png" alt="" class="img-responsive"/></a></div>
                        <div class="logo-item"><a href="#" class="link"><img src="assets/images/footer/logo-06.png" alt="" class="img-responsive"/></a></div>
                    </div>
                    <div class="social-footer">
                        <ul class="list-inline list-unstyled">
                            <li><a href="#" class="link facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="link twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="link pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#" class="link google"><i class="fa fa-google"></i></a></li>
                        </ul>
                    </div>
                    <div class="name-company">&copy; Designed by SWLABS.</div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- LIBRARY JS-->
<script src="assets/libs/jquery/jquery-2.2.3.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/libs/detect-browser/browser.js"></script>
<script src="assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
<script src="assets/libs/wow-js/wow.min.js"></script>
<script src="assets/libs/slick-slider/slick.min.js"></script>
<script src="assets/libs/selectbox/js/jquery.selectbox-0.2.js"></script>
<script src="assets/libs/please-wait/please-wait.min.js"></script>
<!--script(src="assets/libs/parallax/jquery.data-parallax.min.js")--><!-- MAIN JS-->
<script src="assets/js/main.js"></script>
<!-- LOADING JS FOR PAGE-->
<script src="assets/js/pages/home-page.js"></script>
<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
</body>
</html>