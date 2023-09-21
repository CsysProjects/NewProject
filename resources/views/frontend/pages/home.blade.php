@extends('app')

@section('title', 'Home')


@section('content')
<div class="home-slider section">
    <!-- Slider Loader -->
    <div id="loader" class="hom-slie">
        <div class="tp-loader spinner0"> <span class="dot1"></span> <span class="dot2"></span> <span
                class="bounce1"></span> <span class="bounce2"></span> <span class="bounce3"></span> </div>
    </div>

    <!-- SLIDE Start -->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>

                <!-- SLIDE  -->
                <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off"
                    data-thumb="asset/images/1.png">
                    <!-- div IMAGE -->
                    <img src="asset/images/1.png" alt="slider" data-bgposition="center top" data-bgfit="cover"
                        data-bgrepeat="no-repeat">

                </li>

                <!-- SLIDE  -->
                <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off"
                    data-thumb="asset/images/2.png">
                    <!-- div IMAGE -->
                    <img src="asset/images/2.png" alt="slider" data-bgposition="center top" data-bgfit="cover"
                        data-bgrepeat="no-repeat">

                </li>

                <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off"
                    data-thumb="asset/images/3.png">
                    <!-- div IMAGE -->
                    <img src="asset/images/3.png" alt="slider" data-bgposition="center top" data-bgfit="cover"
                        data-bgrepeat="no-repeat">

                </li>

                <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off"
                    data-thumb="asset/images/4.png">
                    <!-- div IMAGE -->
                    <img src="asset/images/4.png" alt="slider" data-bgposition="center top" data-bgfit="cover"
                        data-bgrepeat="no-repeat">

                </li>
            </ul>
        </div>
    </div>
</div>
   <div class="form-data">
    <div class="card">
        <div class="col-lg-4">
            <form class="">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
        
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
        
                <input type="submit" value="Log In">
            </form>
        </div>
    </div>
   </div>
    

    <div id="content">

        <div class="padding-top-100 padding-bottom-80">
            <div class="container">

                <!-- Heading -->
                <div class="heading text-center">
                    <h5>Our Services</h5>
                    <hr>
                    <p>Get mechanic services, anywhere! anytime! </p>
                </div>

                <!-- SERVICES -->
                <div class="services">
                    <ul class="row">

                        <!-- Wheel Alignments -->
                        <li class="col-md-4 col-sm-6 col-xs-6">
                            <article>
                                <div class="ser-img"> <img class="img-responsive" src="asset/images/a.png" alt="">

                                    <!-- Head -->
                                    <div class="ser-head">
                                        <div class="icon"> <img src="asset/images/ser-icon-1.png" alt="">
                                        </div>
                                        <h6>Car Mechanics</h6>
                                    </div>
                                </div>
                                <!-- Detail -->
                                <div class="detail-in">
                                    <p> Get mechanic services, anywhere! anytime! </p>
                                    <a href="#." class="go-btn"><i class="ion-ios-arrow-thin-right"></i></a>
                                </div>
                            </article>
                        </li>

                        <!-- Suspension Repair -->
                        <li class="col-md-4 col-sm-6 col-xs-6">
                            <article>
                                <div class="ser-img"> <img class="img-responsive" src="asset/images/b.png" alt="">

                                    <!-- Head -->
                                    <div class="ser-head">
                                        <div class="icon"> <img src="asset/images/ser-icon-2.png" alt="">
                                        </div>
                                        <h6>Bike Mechanic</h6>
                                    </div>
                                </div>
                                <!-- Detail -->
                                <div class="detail-in">
                                    <p>Get mechanic services, anywhere! anytime! </p>
                                    <a href="#." class="go-btn"><i class="ion-ios-arrow-thin-right"></i></a>
                                </div>
                            </article>
                        </li>

                        <!-- Engine Overhaul -->
                        <li class="col-md-4 col-sm-6 col-xs-6">
                            <article>
                                <div class="ser-img"> <img class="img-responsive" src="asset/images/c.png" alt="">

                                    <!-- Head -->
                                    <div class="ser-head">
                                        <div class="icon"> <img src="asset/images/ser-icon-3.png" alt="">
                                        </div>
                                        <h6>Truck Mechanic</h6>
                                    </div>
                                </div>
                                <!-- Detail -->
                                <div class="detail-in">
                                    <p>Get mechanic services, anywhere! anytime! </p>
                                    <a href="#." class="go-btn"><i class="ion-ios-arrow-thin-right"></i></a>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="wheels-handle padding-bottom-100">
            <div class="container">
                <!-- Heading -->
                <div class="heading text-center">
                    <h5>Services We Handle</h5>
                    <hr>
                    <p>Get mechanic services, anywhere! anytime! </p>
                </div>
            </div>
            <div class="offers-tabs">
                <div class="row no-margin">
                    <div class="col-md-6 no-padding"> <img class="img-responsive" src="asset/images/service.png"
                            alt="">
                        <div class="position-center-center col-xs-12 no-padding">
                            <ul class="nav nav-pills nav-stacked" role="tablist">
                                <li role="presentation" class="active"><a href="#luxury" role="tab"
                                        data-toggle="tab"> <img src="asset/images/offer-icon-1.png" alt=""><span>
                                            Car
                                            Mechanic</span></a></li>
                                <li role="presentation"><a href="#trucks" role="tab" data-toggle="tab"><img
                                            src="asset/images/offer-icon-2.png" alt=""><span> Motorcycle Mechanic
                                        </span></a></li>
                                <li role="presentation"><a href="#sports" role="tab" data-toggle="tab"><img
                                            src="asset/images/offer-icon-3.png" alt=""><span>Truck
                                            Mechanic</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <!-- Tab panes -->
                        <div class="tab-content">

                            <!-- Luxury Cars -->
                            <div role="tabpanel" class="tab-pane animated-3s fadeInRight active" id="luxury">
                                <h4><small>What We Offer</small> Best Services We Can Provide</h4>
                                <p>Get mechanic services, anywhere! anytime! </p>
                                <!--<ul class="row">-->
                                <!--  <li class="col-sm-6">-->
                                <!--    <p><span><img src="asset/images/offer-icon-1-1.png" alt="" ></span> Complete Computer  Diagnostics</p>-->
                                <!--  </li>-->
                                <!--  <li class="col-sm-6">-->
                                <!--    <p><span><img src="asset/images/offer-icon-1-2.png" alt="" ></span> Complete Safety Analysis</p>-->
                                <!--  </li>-->
                                <!--  <li class="col-sm-6">-->
                                <!--    <p><span><img src="asset/images/offer-icon-1-3.png" alt="" ></span> Fuel System Services</p>-->
                                <!--  </li>-->
                                <!--  <li class="col-sm-6">-->
                                <!--    <p><span><img src="asset/images/offer-icon-1-4.png" alt="" ></span> Steering and Suspensions</p>-->
                                <!--  </li>-->
                                <!--  <li class="col-sm-6">-->
                                <!--    <p><span><img src="asset/images/offer-icon-1-5.png" alt="" > </span> Brake Repair Specialists</p>-->
                                <!--  </li>-->
                                <!--  <li class="col-sm-6">-->
                                <!--    <p><span><img src="asset/images/offer-icon-1-6.png" alt="" ></span> Mufflers and Exhaust Systems</p>-->
                                <!--  </li>-->
                                <!--</ul>-->
                                <a href="#." class="btn margin-top-20">Read More <span><i
                                            class="ion-ios-arrow-thin-right"></i></span></a>
                            </div>

                            <!-- Trucks -->
                            <div role="tabpanel" class="tab-pane animated-3s fadeInRight" id="trucks">
                                <h4><small>What We Offer</small> Best Services We Can Provide For Trucks</h4>
                                <p>Get mechanic services, anywhere! anytime! </p>
                                <!--<ul class="row">-->
                                <!--  <li class="col-sm-6">-->
                                <!--	<p><span><img src="asset/images/offer-icon-1-1.png" alt="" ></span> Complete Computer  Diagnostics</p>-->
                                <!--  </li>-->
                                <!--  <li class="col-sm-6">-->
                                <!--	<p><span><img src="asset/images/offer-icon-1-2.png" alt="" ></span> Complete Safety Analysis</p>-->
                                <!--  </li>-->
                                <!--  <li class="col-sm-6">-->
                                <!--	<p><span><img src="asset/images/offer-icon-1-3.png" alt="" ></span> Fuel System Services</p>-->
                                <!--  </li>-->
                                <!--  <li class="col-sm-6">-->
                                <!--	<p><span><img src="asset/images/offer-icon-1-4.png" alt="" ></span> Steering and Suspensions</p>-->
                                <!--  </li>-->
                                <!--  <li class="col-sm-6">-->
                                <!--	<p><span><img src="asset/images/offer-icon-1-5.png" alt="" > </span> Brake Repair Specialists</p>-->
                                <!--  </li>-->
                                <!--  <li class="col-sm-6">-->
                                <!--	<p><span><img src="asset/images/offer-icon-1-6.png" alt="" ></span> Mufflers and Exhaust Systems</p>-->
                                <!--  </li>-->
                                <!--</ul>-->
                                <a href="#." class="btn margin-top-20">Read More <span><i
                                            class="ion-ios-arrow-thin-right"></i></span></a>
                            </div>

                            <!-- Sports Cars -->
                            <div role="tabpanel" class="tab-pane animated-3s fadeInRight" id="sports">
                                <h4><small>What We Offer</small> Best Services We Can Provide For Sports Cars</h4>
                                <p>Get mechanic services, anywhere! anytime! </p>
                                <!--<ul class="row">-->
                                <!--  <li class="col-sm-6">-->
                                <!--    <p><span><img src="asset/images/offer-icon-1-1.png" alt="" ></span> Complete Computer  Diagnostics</p>-->
                                <!--  </li>-->
                                <!--  <li class="col-sm-6">-->
                                <!--    <p><span><img src="asset/images/offer-icon-1-2.png" alt="" ></span> Complete Safety Analysis</p>-->
                                <!--  </li>-->
                                <!--  <li class="col-sm-6">-->
                                <!--    <p><span><img src="asset/images/offer-icon-1-3.png" alt="" ></span> Fuel System Services</p>-->
                                <!--  </li>-->
                                <!--  <li class="col-sm-6">-->
                                <!--    <p><span><img src="asset/images/offer-icon-1-4.png" alt="" ></span> Steering and Suspensions</p>-->
                                <!--  </li>-->
                                <!--  <li class="col-sm-6">-->
                                <!--    <p><span><img src="asset/images/offer-icon-1-5.png" alt="" > </span> Brake Repair Specialists</p>-->
                                <!--  </li>-->
                                <!--  <li class="col-sm-6">-->
                                <!--    <p><span><img src="asset/images/offer-icon-1-6.png" alt="" ></span> Mufflers and Exhaust Systems</p>-->
                                <!--  </li>-->
                                <!--</ul>-->
                                <a href="#." class="btn margin-top-20">Read More <span><i
                                            class="ion-ios-arrow-thin-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="testimonial padding-top-100 padding-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Heading -->
                        <div class="heading text-left">
                            <h5>Testimonial</h5>
                            <p>Get mechanic services, anywhere! anytime! </p>
                        </div>

                        <!-- Avatars -->
                        <ul class="avatars">
                            <li><img src="asset/images/avatar-1.jpg" alt=""></li>
                            <li><img src="asset/images/avatar-2.jpg" alt=""></li>
                            <li><img src="asset/images/avatar-3.jpg" alt=""></li>
                            <li><img src="asset/images/avatar-4.jpg" alt=""></li>
                            <li><img src="asset/images/avatar-5.jpg" alt=""></li>
                        </ul>

                        <!-- Test Slider -->
                        <div class="testi">
                            <div class="single-slide">

                                <!-- Slider 1 -->
                                <div class="media">
                                    <div class="in-testi"> <i class="fa fa-quote-left"></i>
                                        <div class="testi-name">
                                            <h5>James Bond</h5>
                                            <span>Happy Client</span>
                                        </div>
                                        <p>You wanna be where you can see our troubles are all the same. You wanna be where
                                            everybody knows Your name. Just two good ol'
                                            boys Wouldn't change if they could. </p>
                                    </div>
                                </div>

                                <!-- Slider 1 -->
                                <div class="media">
                                    <div class="in-testi"> <i class="fa fa-quote-left"></i>
                                        <div class="testi-name">
                                            <h5>James Bond</h5>
                                            <span>Happy Client</span>
                                        </div>
                                        <p>You wanna be where you can see our troubles are all the same. You wanna be where
                                            everybody knows Your name. Just two good ol'
                                            boys Wouldn't change if they could. </p>
                                    </div>
                                </div>

                                <!-- Slider 1 -->
                                <div class="media">
                                    <div class="in-testi"> <i class="fa fa-quote-left"></i>
                                        <div class="testi-name">
                                            <h5>James Bond</h5>
                                            <span>Happy Client</span>
                                        </div>
                                        <p>You wanna be where you can see our troubles are all the same. You wanna be where
                                            everybody knows Your name. Just two good ol'
                                            boys Wouldn't change if they could. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Our Happy Clients -->
                    <div class="col-md-6">
                        <!-- Heading -->
                        <div class="heading text-left">
                            <h5>Our Happy Clients</h5>
                            <p>Get mechanic services, anywhere! anytime! </p>
                        </div>

                        <!-- CLIENTS -->
                        <div class="clients-img">
                            <ul>
                                <li> <a href="#."> <img src="asset/images/c-img-1.png" class="img-responsive"
                                            alt=""> </a></li>
                                <li> <a href="#."> <img src="asset/images/c-img-2.png" class="img-responsive"
                                            alt=""> </a> </li>
                                <li> <a href="#."> <img src="asset/images/c-img-3.png" class="img-responsive"
                                            alt=""> </a></li>
                                <li> <a href="#."> <img src="asset/images/c-img-4.png" class="img-responsive"
                                            alt=""> </a> </li>
                                <li> <a href="#."> <img src="asset/images/c-img-5.png" class="img-responsive"
                                            alt=""> </a></li>
                                <li> <a href="#."> <img src="asset/images/c-img-6.png" class="img-responsive"
                                            alt=""> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</div>
