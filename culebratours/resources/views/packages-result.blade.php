<!DOCTYPE html>
<html lang="en">
<head><title>Exploore | Tour Result</title>
    @extends('layouts/metas')
</head>
<body>
<div class="body-wrapper"><!-- MENU MOBILE-->
    @include('layouts/mobile-header')
    <!-- WRAPPER CONTENT-->
    <div class="wrapper-content"><!-- HEADER-->
        @include('layouts/header')
        <!-- WRAPPER-->
        <div id="wrapper-content"><!-- MAIN CONTENT-->
            <div class="main-content">
                <section class="page-banner packages-result">
                    <div class="container">
                        <div class="page-title-wrapper">
                            <div class="page-title-content">
                                <ol class="breadcrumb">
                                    <li><a href="index.html" class="link home">Home</a></li>
                                    <li class="active"><a href="#" class="link">Holiday Adventures</a></li>
                                </ol>
                                <div class="clearfix"></div>
                                <h2 class="captions">Vacation Packages</h2></div>
                        </div>
                    </div>
                </section>
                <div class="page-main">
                    
                    <div class="tour-result-main padding-top padding-bottom">
                        <div class="container">
                           <!-- <div class="list-continents">
                                <div class="list-continent-wrapper"><a href="#" class="continent"><i class="icons fa fa-map-marker"></i><span class="text">europe</span></a></div>
                                <div class="list-continent-wrapper"><a href="#" class="continent"><i class="icons fa fa-map-marker"></i><span class="text">america</span></a></div>
                                <div class="list-continent-wrapper"><a href="#" class="continent"><i class="icons fa fa-map-marker"></i><span class="text">asian</span></a></div>
                                <div class="list-continent-wrapper"><a href="#" class="continent"><i class="icons fa fa-map-marker"></i><span class="text">africa</span></a></div>
                                <div class="list-continent-wrapper"><a href="#" class="continent"><i class="icons fa fa-map-marker"></i><span class="text">middle east</span></a></div>
                            </div> -->
                            
                            <div class="result-body">
                                <div class="row">
                                    <div class="col-md-8 main-right">
                                        <div class="tours-list">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="tours-layout">
                                                        <div class="image-wrapper"><a href="tour-view.html" class="link"><img src="assets/images/tours/tour-1.jpg" alt="" class="img-responsive"></a>

                                                            <div class="title-wrapper"><a href="#" class="title">Newyork city</a><i class="icons flaticon-circle"></i></div>
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
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="tours-layout">
                                                        <div class="image-wrapper"><a href="tour-view.html" class="link"><img src="assets/images/tours/tour-2.jpg" alt="" class="img-responsive"></a>

                                                            <div class="title-wrapper"><a href="#" class="title">paris city</a><i class="icons flaticon-circle"></i></div>
                                                        </div>
                                                        <div class="content-wrapper">
                                                            <ul class="list-info list-inline list-unstyle">
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
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="tours-layout">
                                                        <div class="image-wrapper"><a href="tour-view.html" class="link"><img src="assets/images/tours/tour-3.jpg" alt="" class="img-responsive"></a>

                                                            <div class="title-wrapper"><a href="#" class="title">tokyo city</a><i class="icons flaticon-circle"></i></div>
                                                        </div>
                                                        <div class="content-wrapper">
                                                            <ul class="list-info list-inline list-unstyle">
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
                                                <div class="col-sm-6">
                                                    <div class="tours-layout">
                                                        <div class="image-wrapper"><a href="tour-view.html" class="link"><img src="assets/images/tours/tour-4.jpg" alt="" class="img-responsive"></a>

                                                            <div class="title-wrapper"><a href="#" class="title">shanghai city</a><i class="icons flaticon-circle"></i></div>
                                                        </div>
                                                        <div class="content-wrapper">
                                                            <ul class="list-info list-inline list-unstyle">
                                                                <li><a href="#" class="link"><i class="icons fa fa-eye"></i><span class="text number">234</span></a></li>
                                                                <li><a href="#" class="link"><i class="icons fa fa-heart"></i><span class="text number">234</span></a></li>
                                                                <li><a href="#" class="link"><i class="icons fa fa-comment"></i><span class="text number">234</span></a></li>
                                                            </ul>
                                                            <div class="content">
                                                                <div class="title">
                                                                    <div class="price"><sup>$</sup><span class="number">200</span></div>
                                                                    <p class="for-price">3 days 3 nights</p></div>
                                                                <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus ultrices purus, volutpat.</p>

                                                                <div class="group-btn-tours"><a href="tour-view.html" class="left-btn">book now</a><a href="blog.html" class="right-btn">add to list</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="tours-layout">
                                                        <div class="image-wrapper"><a href="tour-view.html" class="link"><img src="assets/images/tours/tour-5.jpg" alt="" class="img-responsive"></a>

                                                            <div class="title-wrapper"><a href="#" class="title">Roma city</a><i class="icons flaticon-circle"></i></div>
                                                        </div>
                                                        <div class="content-wrapper">
                                                            <ul class="list-info list-inline list-unstyle">
                                                                <li><a href="#" class="link"><i class="icons fa fa-eye"></i><span class="text number">234</span></a></li>
                                                                <li><a href="#" class="link"><i class="icons fa fa-heart"></i><span class="text number">234</span></a></li>
                                                                <li><a href="#" class="link"><i class="icons fa fa-comment"></i><span class="text number">234</span></a></li>
                                                            </ul>
                                                            <div class="content">
                                                                <div class="title">
                                                                    <div class="price"><sup>$</sup><span class="number">425</span></div>
                                                                    <p class="for-price">3 days 2 nights</p></div>
                                                                <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus ultrices purus, volutpat.</p>

                                                                <div class="group-btn-tours"><a href="tour-view.html" class="left-btn">book now</a><a href="blog.html" class="right-btn">add to list</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="tours-layout">
                                                        <div class="image-wrapper"><a href="tour-view.html" class="link"><img src="assets/images/tours/tour-6.jpg" alt="" class="img-responsive"></a>

                                                            <div class="title-wrapper"><a href="#" class="title">Stockholm city</a><i class="icons flaticon-circle"></i></div>
                                                        </div>
                                                        <div class="content-wrapper">
                                                            <ul class="list-info list-inline list-unstyle">
                                                                <li><a href="#" class="link"><i class="icons fa fa-eye"></i><span class="text number">234</span></a></li>
                                                                <li><a href="#" class="link"><i class="icons fa fa-heart"></i><span class="text number">234</span></a></li>
                                                                <li><a href="#" class="link"><i class="icons fa fa-comment"></i><span class="text number">234</span></a></li>
                                                            </ul>
                                                            <div class="content">
                                                                <div class="title">
                                                                    <div class="price"><sup>$</sup><span class="number">380</span></div>
                                                                    <p class="for-price">2 days 2 nights</p></div>
                                                                <p class="text">Lorem ipsum dolor sit amet, consectetur elit. Nulla rhoncus ultrices purus, volutpat.</p>

                                                                <div class="group-btn-tours"><a href="tour-view.html" class="left-btn">book now</a><a href="blog.html" class="right-btn">add to list</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <nav class="pagination-list margin-top70">
                                            <ul class="pagination">
                                                <li><a href="#" aria-label="Previous" class="btn-pagination previous"><span aria-hidden="true" class="fa fa-angle-left"></span></a></li>
                                                <li><a href="#" class="btn-pagination active">01</a></li>
                                                <li><a href="#" class="btn-pagination">02</a></li>
                                                <li><a href="#" class="btn-pagination">03</a></li>
                                                <li><a href="#" class="btn-pagination">...</a></li>
                                                <li><a href="#" aria-label="Next" class="btn-pagination next"><span aria-hidden="true" class="fa fa-angle-right"></span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-md-4 sidebar-widget">
                                        <div class="col-2">
                                            <div class="find-widget find-flight-widget widget"><h4 class="title-widgets">find your tours</h4>

                                                <form class="content-widget">
                                                    <div class="ffw-radio-selection"><span class="ffw-radio-btn-wrapper"><input type="radio" name="flight type" value="one way" id="flight-type-1" checked="checked" class="ffw-radio-btn"><label for="flight-type-1" class="ffw-radio-label">One Way</label></span> <span class="ffw-radio-btn-wrapper"><input type="radio" name="flight type" value="round trip" id="flight-type-2" class="ffw-radio-btn"><label for="flight-type-2" class="ffw-radio-label">Round Trip</label></span> <span class="ffw-radio-btn-wrapper"><input type="radio" name="flight type" value="multiple cities" id="flight-type-3" class="ffw-radio-btn"><label for="flight-type-3" class="ffw-radio-label">Multiple Cities</label></span>

                                                        <div class="stretch">&nbsp;</div>
                                                    </div>
                                                    <div class="text-input small-margin-top">
                                                        <div class="text-box-wrapper"><label class="tb-label">Where do you want to go?</label>

                                                            <div class="input-group"><input type="text" placeholder="Write the place" class="tb-input"></div>
                                                        </div>
                                                        <div class="input-daterange">
                                                            <div class="text-box-wrapper half left"><label class="tb-label">Check in</label>

                                                                <div class="input-group"><input type="text" placeholder="MM/DD/YY" class="tb-input"><i class="tb-icon fa fa-calendar input-group-addon"></i></div>
                                                            </div>
                                                            <div class="text-box-wrapper half right"><label class="tb-label">Check out</label>

                                                                <div class="input-group"><input type="text" placeholder="MM/DD/YY" class="tb-input"><i class="tb-icon fa fa-calendar input-group-addon"></i></div>
                                                            </div>
                                                        </div>
                                                        <div class="text-box-wrapper half left"><label class="tb-label">Number of Adult</label>

                                                            <div class="input-group">
                                                                <button disabled="disabled" data-type="minus" data-field="quant[1]" class="input-group-btn btn-minus"><span class="tb-icon fa fa-minus"></span></button>
                                                                <input type="number" name="quant[1]" min="1" max="9" value="1" class="tb-input count">
                                                                <button data-type="plus" data-field="quant[1]" class="input-group-btn btn-plus"><span class="tb-icon fa fa-plus"></span></button>
                                                            </div>
                                                        </div>
                                                        <div class="text-box-wrapper half right"><label class="tb-label">Number of Child</label>

                                                            <div class="input-group">
                                                                <button disabled="disabled" data-type="minus" data-field="quant[2]" class="input-group-btn btn-minus"><span class="tb-icon fa fa-minus"></span></button>
                                                                <input type="number" name="quant[2]" min="0" max="9" value="0" class="tb-input count">
                                                                <button data-type="plus" data-field="quant[2]" class="input-group-btn btn-plus"><span class="tb-icon fa fa-plus"></span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" data-hover="SEND NOW" class="btn btn-slide small-margin-top"><span class="text">search now</span><span class="icons fa fa-long-arrow-right"></span></button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="col-1">
                                                <div class="price-widget widget">
                                                    <div class="title-widget">
                                                        <div class="title">price</div>
                                                    </div>
                                                    <div class="content-widget">
                                                        <div class="price-wrapper">
                                                            <div data-range_min="0" data-range_max="3000" data-cur_min="450" data-cur_max="1800" class="nstSlider">
                                                                <div class="leftGrip indicator">
                                                                    <div class="number"></div>
                                                                </div>
                                                                <div class="rightGrip indicator">
                                                                    <div class="number"></div>
                                                                </div>
                                                            </div>
                                                            <div class="leftLabel">0</div>
                                                            <div class="rightLabel">3000</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="turkey-cities-widget widget">
                                                    <div class="title-widget">
                                                        <div class="title">rating</div>
                                                    </div>
                                                    <div class="content-widget">
                                                        <form class="radio-selection">
                                                            <div class="radio-btn-wrapper"><input type="radio" name="rating" value="1stars" id="1stars" class="radio-btn"><label for="1stars" class="radio-label stars stars5">1stars</label><span class="count">27</span></div>
                                                            <div class="radio-btn-wrapper"><input type="radio" name="rating" value="2stars" id="2stars" class="radio-btn"><label for="2stars" class="radio-label stars stars4">2stars</label><span class="count">75</span></div>
                                                            <div class="radio-btn-wrapper"><input type="radio" name="rating" value="3stars" id="3stars" class="radio-btn"><label for="3stars" class="radio-label stars stars3">3stars</label><span class="count">35</span></div>
                                                            <div class="radio-btn-wrapper"><input type="radio" name="rating" value="4stars" id="4stars" class="radio-btn"><label for="4stars" class="radio-label stars stars2">4stars</label><span class="count">34</span></div>
                                                            <div class="radio-btn-wrapper"><input type="radio" name="rating" value="5stars" id="5stars" class="radio-btn"><label for="5stars" class="radio-label stars stars1">5stars</label><span class="count">65</span></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="turkey-cities-widget widget">
                                                    <div class="title-widget">
                                                        <div class="title">turkey cities</div>
                                                    </div>
                                                    <div class="content-widget">
                                                        <form class="radio-selection">
                                                            <div class="radio-btn-wrapper"><input type="radio" name="turkey" value="ankara" id="ankara" class="radio-btn"><label for="ankara" class="radio-label">ankara</label><span class="count">27</span></div>
                                                            <div class="radio-btn-wrapper"><input type="radio" name="turkey" value="istanbul" id="istanbul" class="radio-btn"><label for="istanbul" class="radio-label">istanbul</label><span class="count">75</span></div>
                                                            <div class="radio-btn-wrapper"><input type="radio" name="turkey" value="anatolian" id="anatolian" class="radio-btn"><label for="anatolian" class="radio-label">anatolian tiger</label><span class="count">35</span></div>
                                                            <div class="radio-btn-wrapper"><input type="radio" name="turkey" value="eastern" id="eastern" class="radio-btn"><label for="eastern" class="radio-label">eastern anatolia region</label><span class="count">34</span></div>
                                                            <div class="radio-btn-wrapper"><input type="radio" name="turkey" value="Selimiye" id="Selimiye" class="radio-btn"><label for="Selimiye" class="radio-label">Selimiye Mosque</label><span class="count">65</span></div>
                                                            <div class="radio-btn-wrapper"><input type="radio" name="turkey" value="Mediterranean" id="Mediterranean" class="radio-btn"><label for="Mediterranean" class="radio-label">Mediterranean Region</label><span class="count">65</span></div>
                                                            <div class="radio-btn-wrapper"><input type="radio" name="turkey" value="Osmaniye" id="Osmaniye" class="radio-btn"><label for="Osmaniye" class="radio-label">Osmaniye</label><span class="count">65</span></div>
                                                            <div class="radio-btn-wrapper"><input type="radio" name="turkey" value="Mustafakemalpa" id="Mustafakemalpa" class="radio-btn"><label for="Mustafakemalpa" class="radio-label">Mustafakemalpa</label><span class="count">65</span></div>
                                                            <div class="radio-btn-wrapper"><input type="radio" name="turkey" value="Orhangazi" id="Orhangazi" class="radio-btn"><label for="Orhangazi" class="radio-label">Orhangazi</label><span class="count">65</span></div>
                                                            <div class="radio-btn-wrapper"><input type="radio" name="turkey" value="black-sea" id="black-sea" class="radio-btn"><label for="black-sea" class="radio-label">Black Sea Region</label><span class="count">65</span></div>
                                                            <div class="radio-btn-wrapper"><input type="radio" name="turkey" value="Southeastern" id="Southeastern" class="radio-btn"><label for="Southeastern" class="radio-label">Southeastern</label><span class="count">65</span></div>
                                                            <div class="radio-btn-wrapper"><input type="radio" name="turkey" value="Adapazarı" id="Adapazarı" class="radio-btn"><label for="Adapazarı" class="radio-label">Adapazarı</label><span class="count">65</span></div>
                                                            <div class="radio-btn-wrapper"><input type="radio" name="turkey" value="Turgutlu" id="Turgutlu" class="radio-btn"><label for="Turgutlu" class="radio-label">Turgutlu</label><span class="count">65</span></div>
                                                            <div class="radio-btn-wrapper"><input type="radio" name="turkey" value="Kastamonu" id="Kastamonu" class="radio-btn"><label for="Kastamonu" class="radio-label">Kastamonu</label><span class="count">65</span></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="special-offer margin-top70"><h3 class="title-style-2">special offer</h3>

                                <div class="special-offer-list">
                                    <div class="special-offer-layout">
                                        <div class="image-wrapper"><a href="tour-view.html" class="link"><img src="assets/images/footer/offer-1.jpg" alt="" class="img-responsive"></a>

                                            <div class="title-wrapper"><a href="tour-view.html" class="title">alpha</a><i class="icons flaticon-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="special-offer-layout">
                                        <div class="image-wrapper"><a href="tour-view.html" class="link"><img src="assets/images/footer/offer-2.jpg" alt="" class="img-responsive"></a>

                                            <div class="title-wrapper"><a href="tour-view.html" class="title">otipus</a><i class="icons flaticon-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="special-offer-layout">
                                        <div class="image-wrapper"><a href="tour-view.html" class="link"><img src="assets/images/footer/offer-3.jpg" alt="" class="img-responsive"></a>

                                            <div class="title-wrapper"><a href="tour-view.html" class="title">sunrise</a><i class="icons flaticon-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="special-offer-layout">
                                        <div class="image-wrapper"><a href="tour-view.html" class="link"><img src="assets/images/footer/offer-4.jpg" alt="" class="img-responsive"></a>

                                            <div class="title-wrapper"><a href="tour-view.html" class="title">carisbean</a><i class="icons flaticon-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="special-offer-layout">
                                        <div class="image-wrapper"><a href="tour-view.html" class="link"><img src="assets/images/footer/offer-1.jpg" alt="" class="img-responsive"></a>

                                            <div class="title-wrapper"><a href="tour-view.html" class="title">alpha</a><i class="icons flaticon-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="special-offer-layout">
                                        <div class="image-wrapper"><a href="tour-view.html" class="link"><img src="assets/images/footer/offer-2.jpg" alt="" class="img-responsive"></a>

                                            <div class="title-wrapper"><a href="tour-view.html" class="title">otipus</a><i class="icons flaticon-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="special-offer-layout">
                                        <div class="image-wrapper"><a href="tour-view.html" class="link"><img src="assets/images/footer/offer-3.jpg" alt="" class="img-responsive"></a>

                                            <div class="title-wrapper"><a href="tour-view.html" class="title">sunrise</a><i class="icons flaticon-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="special-offer-layout">
                                        <div class="image-wrapper"><a href="tour-view.html" class="link"><img src="assets/images/footer/offer-4.jpg" alt="" class="img-responsive"></a>

                                            <div class="title-wrapper"><a href="tour-view.html" class="title">carisbean</a><i class="icons flaticon-circle"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BUTTON BACK TO TOP-->
            <div id="back-top"><a href="#top" class="link"><i class="fa fa-angle-double-up"></i></a></div>
        </div>
        <!-- FOOTER-->
        <footer>
            <div class="subscribe-email">
                <div class="container">
                    <div class="subscribe-email-wrapper">
                        <div class="subscribe-email-left"><p class="subscribe-email-title">Subscribe <span class="logo-text">Exploore</span>&nbsp;to get latest offers and deals to day</p>

                            <p class="subscribe-email-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p></div>
                        <div class="subscribe-email-right">
                            <form action="index.html">
                                <div class="input-group form-subscribe-email"><input type="text" placeholder="Write your email" class="form-control"/><span class="input-group-btn"><button type="submit" class="btn-email">&#8594;</button></span></div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
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
<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/libs/nst-slider/js/jquery.nstSlider.min.js"></script>
<script src="assets/libs/plus-minus-input/plus-minus-input.js"></script>
<script src="assets/js/pages/sidebar.js"></script>
<script src="assets/js/pages/result.js"></script>
</body>
</html>