@extends('front/base_template')
@section('mains')
<div class="main_slider container-fluid">
    <section><div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide_div">
                <img src="{{asset('front/images/slider/s1.jpg')}}" alt="slider">
            </div>
            <div class="swiper-slide slide_div">
                <img src="{{asset('front/images/slider/s2.jpg')}}" alt="slider">
            </div>
            <div class="swiper-slide slide_div">
                <img src="{{asset('front/images/slider/s3.jpg')}}" alt="slider">
            </div>
            <div class="swiper-slide slide_div">
                <img src="{{asset('front/images/slider/s4.jpg')}}" alt="slider">
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>

    </div></section>
</div>


     

     


<!--====== HOME HOTELS ==========-->
<section class="tourb2-ab-p-2 com-colo-abou">
          <div class="container">
                    <!-- TITLE & DESCRIPTION -->
                    <div class="spe-title">
                              <h2 class="animate__animated animate__bounce"> <span>About</span> Us</h2>
                              <div class="title-line">
                                        <div class="tl-1"></div>
                                        <div class="tl-2"></div>
                                        <div class="tl-3"></div>
                              </div>
                              <p>
                                        We are one of the oldest Tour & Travels company in india. In that time we've built up a reputation for honesty, reliability and a focus on customer satisfaction. </p>
                    </div>
                    <div class="row tourb2-ab-p1">
                              <div class="col-md-6 col-sm-6">
                                        <div class="tourb2-ab-p1-left">
                                                  <h3>Welcome to The India Rides</h3> <span></span>
                                                  <p>Our company has been in the business of Travel Agency for the past 10 years and has a recognized name in Tours and Travel Industry in Jaipur, Rajasthan. We have never compromised on the quality and the services provided to our guest. We believe in keeping our customers/guests happy and providing them with products at a very competent price.</p>
                                                  <p> We have an excellent staff that will eager to guide you for your Itinerary. We are providing cars, cabs and taxis for outstation tours, sightseeing tours, Rajasthan tour packages and best hotel booking services. We also offer wide range of vehicles such as Sedan (Etios, DZire), SUVs (Innova, Crysta), Buses, Coaches and Tempo Travellers.</p>
                                                  <p>We are ready to give you warm and friendly welcome to make every travel memorable and unforgettable</p>
                                                  <a href="tel:9828133321" class="link-btn">Call to us: +91-9828133321</a>
                                        </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                        <div class="tourb2-ab-p1-right"> <img src="{{asset('front/images/about-img.jpg')}}" alt=""> </div>
                              </div>
                    </div>
          </div>
</section>
<!--====== HOME HOTELS ==========-->
<section class="home-tour">
          <div class="rows tb-space pad-top-o pad-bot-redu">
                    <div class="container">
                              <!-- TITLE & DESCRIPTION -->
                              <div class="spe-title">
                                        <h2>BEST <span>TOUR PACKAGES</span> </h2>
                                        <div class="title-line">
                                                  <div class="tl-1"></div>
                                                  <div class="tl-2"></div>
                                                  <div class="tl-3"></div>
                                        </div>

                              </div>
                              <!-- HOTEL GRID -->
                              <div class="to-ho-hotel">
                                        <!-- HOTEL GRID -->
                                        <div class="col-md-4">
                                                  <div class="to-ho-hotel-con">
                                                            <div class="to-ho-hotel-con-1">
                                                                      <a href="javascript:void(0)" data-toggle="modal" data-target="#popup-form" class="book-now-pac">Book Now</a>
                                                                      <div class="hot-page2-hli-3"> </div>
                                                                      <div class="hom-hot-av-tic"> ₹ 1899/- </div> <img src="images/homepac/jp1.jpg" alt="">
                                                            </div>
                                                            <div class="to-ho-hotel-con-23">
                                                                      <div class="to-ho-hotel-con-2">
                                                                                <a href="jaipur-sightseeing-tour.html">
                                                                                          <h4>Jaipur sightseeing Tour</h4>
                                                                                </a>
                                                                      </div>
                                                                      <div class="to-ho-hotel-con-3">
                                                                                <ul>
                                                                                          <li>
                                                                                                    Jaipur sightseeing tour takes you on a ride to visit the most amazing and beautiful monuments, landmarks and places of the Pink city.
                                                                                          </li>
                                                                                          <li>
                                                                                                    <a href="jaipur-sightseeing-tour.html">View More</a>
                                                                                          </li>
                                                                                </ul>
                                                                      </div>
                                                            </div>
                                                  </div>
                                        </div>
                                        <!-- HOTEL GRID -->
                                        <div class="col-md-4">
                                                  <div class="to-ho-hotel-con">
                                                            <div class="to-ho-hotel-con-1">
                                                                      <a href="javascript:void(0)" data-toggle="modal" data-target="#popup-form" class="book-now-pac">Book Now</a>
                                                                      <div class="hot-page2-hli-3"> </div>
                                                                      <div class="hom-hot-av-tic"> ₹ 4599/- </div> <img src="images/homepac/pushkar.jpg" alt="">
                                                            </div>
                                                            <div class="to-ho-hotel-con-23">
                                                                      <div class="to-ho-hotel-con-2">
                                                                                <a href="jaipur-ajmer-pushkar-tour.html">
                                                                                          <h4>Jaipur Ajmer Pushkar Tour</h4>
                                                                                </a>
                                                                      </div>
                                                                      <div class="to-ho-hotel-con-3">
                                                                                <ul>
                                                                                          <li>
                                                                                                    We offer a 1 day Jaipur, Ajmer and Pushkar City Tour Package in a fine cab. This is a 1 Day city sightseeing tour package of Jaipur, Ajmer, Pushkar and then back to Jaipur.
                                                                                          </li>
                                                                                          <li>
                                                                                                    <a href="jaipur-ajmer-pushkar-tour.html">View More</a>
                                                                                          </li>
                                                                                </ul>
                                                                      </div>
                                                            </div>
                                                  </div>
                                        </div>
                                        <!-- HOTEL GRID -->
                                        <div class="col-md-4">
                                                  <div class="to-ho-hotel-con">
                                                            <div class="to-ho-hotel-con-1">
                                                                      <a href="javascript:void(0)" data-toggle="modal" data-target="#popup-form" class="book-now-pac">Book Now</a>
                                                                      <div class="hot-page2-hli-3"> </div>
                                                                      <!--<div class="hom-hot-av-tic"> ₹ 999/- </div> -->
                                                                      <img src="images/homepac/raj1.jpg" alt="">
                                                            </div>
                                                            <div class="to-ho-hotel-con-23">
                                                                      <div class="to-ho-hotel-con-2">
                                                                                <a href="rajasthan-tour.html">
                                                                                          <h4>Rajasthan Tour Package</h4>
                                                                                </a>
                                                                      </div>
                                                                      <div class="to-ho-hotel-con-3">
                                                                                <ul>
                                                                                          <li>
                                                                                                    Looking for budget rajasthan tour packages? Get the right affordable and budget rajasthan tour packages on our website in just few steps. ...............................................
                                                                                          </li>
                                                                                          <li>
                                                                                                    <a href="rajasthan-tour.html">View More</a>
                                                                                          </li>
                                                                                </ul>
                                                                      </div>
                                                            </div>
                                                  </div>
                                        </div>


                                        <!-- HOTEL GRID -->
                                        <div class="col-md-4">
                                                  <div class="to-ho-hotel-con">
                                                            <div class="to-ho-hotel-con-1">
                                                                      <a href="javascript:void(0)" data-toggle="modal" data-target="#popup-form" class="book-now-pac">Book Now</a>
                                                                      <div class="hot-page2-hli-3"> </div>
                                                                      <!--<div class="hom-hot-av-tic"> ₹ 999/- </div> -->
                                                                      <img src="images/homepac/desert.jpg" alt="">
                                                            </div>
                                                            <div class="to-ho-hotel-con-23">
                                                                      <div class="to-ho-hotel-con-2">
                                                                                <a href="desert-tour.html">
                                                                                          <h4>Desert Tour Package</h4>
                                                                                </a>
                                                                      </div>
                                                                      <div class="to-ho-hotel-con-3">
                                                                                <ul>
                                                                                          <li>
                                                                                                    Looking for budget rajasthan tour packages? Get the right affordable and budget rajasthan tour packages on our website in just few steps.
                                                                                          </li>
                                                                                          <li>
                                                                                                    <a href="desert-tour.html">View More</a>
                                                                                          </li>
                                                                                </ul>
                                                                      </div>
                                                            </div>
                                                  </div>
                                        </div>
                                        <div class="col-md-4">
                                                  <div class="to-ho-hotel-con">
                                                            <div class="to-ho-hotel-con-1">
                                                                      <a href="javascript:void(0)" data-toggle="modal" data-target="#popup-form" class="book-now-pac">Book Now</a>
                                                                      <div class="hot-page2-hli-3"> </div>
                                                                      <!--<div class="hom-hot-av-tic"> ₹ 999/- </div> -->
                                                                      <img src="images/homepac/golden.jpg" alt="">
                                                            </div>
                                                            <div class="to-ho-hotel-con-23">
                                                                      <div class="to-ho-hotel-con-2">
                                                                                <a href="golden-triangle-tour.html">
                                                                                          <h4>Golden Triangle Tour</h4>
                                                                                </a>
                                                                      </div>
                                                                      <div class="to-ho-hotel-con-3">
                                                                                <ul>
                                                                                          <li>
                                                                                                    Looking for budget rajasthan tour packages? Get the right affordable and budget rajasthan tour packages on our website in just few steps.
                                                                                          </li>
                                                                                          <li>
                                                                                                    <a href="golden-triangle-tour.html">View More</a>
                                                                                          </li>
                                                                                </ul>
                                                                      </div>
                                                            </div>
                                                  </div>
                                        </div>

                                        <div class="col-md-4">
                                                  <div class="to-ho-hotel-con">
                                                            <div class="to-ho-hotel-con-1">
                                                                      <a href="javascript:void(0)" data-toggle="modal" data-target="#popup-form" class="book-now-pac">Book Now</a>
                                                                      <div class="hot-page2-hli-3"> </div>
                                                                      <!--<div class="hom-hot-av-tic"> ₹ 999/- </div> -->
                                                                      <img src="images/homepac/ran.jpg" alt="">
                                                            </div>
                                                            <div class="to-ho-hotel-con-23">
                                                                      <div class="to-ho-hotel-con-2">
                                                                                <a href="ranthambore-tour.html">
                                                                                          <h4>Ranthambore Tour </h4>
                                                                                </a>
                                                                      </div>
                                                                      <div class="to-ho-hotel-con-3">
                                                                                <ul>
                                                                                          <li>
                                                                                                    Looking for budget rajasthan tour packages? Get the right affordable and budget rajasthan tour packages on our website in just few steps.
                                                                                          </li>
                                                                                          <li>
                                                                                                    <a href="ranthambore-tour.html">View More</a>
                                                                                          </li>
                                                                                </ul>
                                                                      </div>
                                                            </div>
                                                  </div>
                                        </div>

                                        <div class="col-md-4">
                                                  <div class="to-ho-hotel-con">
                                                            <div class="to-ho-hotel-con-1">
                                                                      <a href="javascript:void(0)" data-toggle="modal" data-target="#popup-form" class="book-now-pac">Book Now</a>
                                                                      <div class="hot-page2-hli-3"> </div>
                                                                      <!--<div class="hom-hot-av-tic"> ₹ 999/- </div> -->
                                                                      <img src="images/packages/v1.jpg" alt="">
                                                            </div>
                                                            <div class="to-ho-hotel-con-23">
                                                                      <div class="to-ho-hotel-con-2">
                                                                                <a href="rajasthan-best-tour.html">
                                                                                          <h4>Rajasthan Best Tour</h4>
                                                                                </a>
                                                                      </div>
                                                                      <div class="to-ho-hotel-con-3">
                                                                                <ul>
                                                                                          <li>
                                                                                                    Looking for budget rajasthan tour packages? Get the right affordable and budget rajasthan tour packages on our website in just few steps.
                                                                                          </li>
                                                                                          <li>
                                                                                                    <a href="rajasthan-best-tour.html">View More</a>
                                                                                          </li>
                                                                                </ul>
                                                                      </div>
                                                            </div>
                                                  </div>
                                        </div>

                                        <div class="col-md-4">
                                                  <div class="to-ho-hotel-con">
                                                            <div class="to-ho-hotel-con-1">
                                                                      <a href="javascript:void(0)" data-toggle="modal" data-target="#popup-form" class="book-now-pac">Book Now</a>
                                                                      <div class="hot-page2-hli-3"> </div>
                                                                      <!--<div class="hom-hot-av-tic"> ₹ 999/- </div> -->
                                                                      <img src="images/packages/v2.jpg" alt="">
                                                            </div>
                                                            <div class="to-ho-hotel-con-23">
                                                                      <div class="to-ho-hotel-con-2">
                                                                                <a href="summer-special-tour.html">
                                                                                          <h4>Rajasthan Summer Tour</h4>
                                                                                </a>
                                                                      </div>
                                                                      <div class="to-ho-hotel-con-3">
                                                                                <ul>
                                                                                          <li>
                                                                                                    Looking for budget rajasthan tour packages? Get the right affordable and budget rajasthan tour packages on our website in just few steps.
                                                                                          </li>
                                                                                          <li>
                                                                                                    <a href="summer-special-tour.html">View More</a>
                                                                                          </li>
                                                                                </ul>
                                                                      </div>
                                                            </div>
                                                  </div>
                                        </div>
                                        <div class="col-md-4">
                                                  <div class="to-ho-hotel-con">
                                                            <div class="to-ho-hotel-con-1">
                                                                      <a href="javascript:void(0)" data-toggle="modal" data-target="#popup-form" class="book-now-pac">Book Now</a>
                                                                      <div class="hot-page2-hli-3"> </div>
                                                                      <!--<div class="hom-hot-av-tic"> ₹ 999/- </div> -->
                                                                      <img src="images/packages/v4.jpg" alt="">
                                                            </div>
                                                            <div class="to-ho-hotel-con-23">
                                                                      <div class="to-ho-hotel-con-2">
                                                                                <a href="fort-tour.html">
                                                                                          <h4>Rajasthan Fort Tour</h4>
                                                                                </a>
                                                                      </div>
                                                                      <div class="to-ho-hotel-con-3">
                                                                                <ul>
                                                                                          <li>
                                                                                                    Looking for budget rajasthan tour packages? Get the right affordable and budget rajasthan tour packages on our website in just few steps.
                                                                                          </li>
                                                                                          <li>
                                                                                                    <a href="fort-tour.html">View More</a>
                                                                                          </li>
                                                                                </ul>
                                                                      </div>
                                                            </div>
                                                  </div>
                                        </div>

                                        <div class="col-md-4">
                                                  <div class="to-ho-hotel-con">
                                                            <div class="to-ho-hotel-con-1">
                                                                      <a href="javascript:void(0)" data-toggle="modal" data-target="#popup-form" class="book-now-pac">Book Now</a>
                                                                      <div class="hot-page2-hli-3"> </div>
                                                                      <!--<div class="hom-hot-av-tic"> ₹ 999/- </div> -->
                                                                      <img src="images/packages/v3.jpg" alt="">
                                                            </div>
                                                            <div class="to-ho-hotel-con-23">
                                                                      <div class="to-ho-hotel-con-2">
                                                                                <a href="jodhpur-jaisalmer-tour.html">
                                                                                          <h4>Jodhpur Jaisalmer Tour</h4>
                                                                                </a>
                                                                      </div>
                                                                      <div class="to-ho-hotel-con-3">
                                                                                <ul>
                                                                                          <li>
                                                                                                    Looking for budget rajasthan tour packages? Get the right affordable and budget rajasthan tour packages on our website in just few steps.
                                                                                          </li>
                                                                                          <li>
                                                                                                    <a href="jodhpur-jaisalmer-tour.html">View More</a>
                                                                                          </li>
                                                                                </ul>
                                                                      </div>
                                                            </div>
                                                  </div>
                                        </div>

                                        <div class="col-md-4">
                                                  <div class="to-ho-hotel-con">
                                                            <div class="to-ho-hotel-con-1">
                                                                      <a href="javascript:void(0)" data-toggle="modal" data-target="#popup-form" class="book-now-pac">Book Now</a>
                                                                      <div class="hot-page2-hli-3"> </div>
                                                                      <!--<div class="hom-hot-av-tic"> ₹ 999/- </div> -->
                                                                      <img src="images/packages/v5.jpg" alt="">
                                                            </div>
                                                            <div class="to-ho-hotel-con-23">
                                                                      <div class="to-ho-hotel-con-2">
                                                                                <a href="complete-rajasthan-tour.html">
                                                                                          <h4>Complete Rajasthan Tour</h4>
                                                                                </a>
                                                                      </div>
                                                                      <div class="to-ho-hotel-con-3">
                                                                                <ul>
                                                                                          <li>
                                                                                                    Looking for budget rajasthan tour packages? Get the right affordable and budget rajasthan tour packages on our website in just few steps.
                                                                                          </li>
                                                                                          <li>
                                                                                                    <a href="complete-rajasthan-tour.html">View More</a>
                                                                                          </li>
                                                                                </ul>
                                                                      </div>
                                                            </div>
                                                  </div>
                                        </div>
                              </div>
                    </div>
          </div>
</section>
<!--====== SECTION: FREE CONSULTANT ==========-->


<section>
          <div class="rows pla pad-bot-redu tb-space">
                    <div class="pla1 p-home container">
                              <!-- TITLE & DESCRIPTION -->
                              <div class="spe-title">
                                        <h2>Car <span>Rental</span> </h2>
                                        <div class="title-line">
                                                  <div class="tl-1"></div>
                                                  <div class="tl-2"></div>
                                                  <div class="tl-3"></div>
                                        </div>

                              </div>
                              <div class="row">

                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                                  <div class="car-price">
                                                            <img src="images/car/etioss.jpg" class="img-responsive" alt="image">
                                                            <h5>TOYOTA ETIOS</h5>
                                                            <h6>Starts from र 11.00 / km</h6>

                                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#popup-form">Enquiry Now</a>
                                                  </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                                  <div class="car-price">
                                                            <img src="images/car/swiftt.jpg" class="img-responsive" alt="image">
                                                            <h5>MARUTI SUZUKI SWIFT DZIRE</h5>
                                                            <h6>Starts from र 11.00 / km</h6>

                                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#popup-form">Enquiry Now</a>
                                                  </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                                  <div class="car-price">
                                                            <img src="images/car/indigo.jpg" class="img-responsive" alt="image">
                                                            <h5>TATA INDIGO</h5>
                                                            <h6>Starts from र 10.00 / km</h6>

                                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#popup-form">Enquiry Now</a>
                                                  </div>
                                        </div>
                                        <!---------------->
                                        <div class="clearfix"></div>
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                                  <div class="car-price">
                                                            <img src="images/car/innovaa.png" class="img-responsive" alt="image">
                                                            <h5>INNOVA</h5>
                                                            <h6>Starts from र 16.00 / km</h6>

                                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#popup-form">Enquiry Now</a>
                                                  </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                                  <div class="car-price">
                                                            <img src="images/car/innovaw3.jpg" class="img-responsive" alt="image">
                                                            <h5>INNOVA CRYSTA</h5>
                                                            <h6>Starts from र 18.00 / km</h6>

                                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#popup-form">Enquiry Now</a>
                                                  </div>
                                        </div>

                                        <div class="clearfix"></div>

                                        <!--------------->
                              </div>
                    </div>
          </div>
</section>

@endsection