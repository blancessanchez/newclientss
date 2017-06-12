@extends('layouts.nav')

        <!--========== END HEADER V2 ==========-->

        <!--========== SWIPER SLIDER ==========-->
@section('content')
        <div class="s-swiper js__swiper-one-item">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                @foreach($products as $product)
                <div class="g-fullheight--xs g-bg-position--center swiper-slide"><br><br><br>
                    <center><img src="data:image/jpeg;base64,<?php echo base64_encode($product->image); ?>" height="1080" width="1920" align="middle"/></center>
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">{{$product->prodDesc}}</h1>
                            <p class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">{{$product->prodInfo}}</p>
                        </div>
                        <a class="js__popup__youtube" href="https://www.youtube.com/watch?v=lcFYdgZKZxY" title="Play Audio Video Presentation">
                            <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                        </a> <br><br><br><br>
                      <!--   <a href="{{action('productController@showProd', $product->prodId)}}" class="moreLink btn btn-default btn-sm">More Info</a> -->
                    </div>
                </div>
               @endforeach                 
            </div>
            <!-- End Swiper Wrapper -->

            <!-- Arrows -->
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
            <!-- End Arrows -->
            
            <a href="#js__scroll-to-section" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
                <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
                <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">Learn More</p>
            </a>
        </div>
        <!--========== END SWIPER SLIDER ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Features -->
        <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-100--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">We are a software solutions company.</p>
                <h2 class="g-font-size-32--xs g-font-size-36--md">Endless Opportunities from Clever Imaginations.</h2>
            </div>
            <div class="row g-margin-b-60--xs g-margin-b-70--md">
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
                                <i class="g-font-size-28--xs g-color--primary ti-face-smile"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Start-up Friendly</h3>
                            <p class="g-margin-b-0--xs">Perfect for start-ups and SME's! Practical for Corporations!</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".2s">
                                <i class="g-font-size-28--xs g-color--primary ti-desktop"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Portable</h3>
                            <p class="g-margin-b-0--xs">Space consuming server towers are not needed, everything is in cloud!</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".3s">
                                <i class="g-font-size-28--xs g-color--primary ti-lock"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Totally Secured</h3>
                            <p class="g-margin-b-0--xs">There is no room for hacking confidential data. Everything is encrypted!</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // end row  -->
            <div class="row">
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
                                <i class="g-font-size-28--xs g-color--primary ti-bolt"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Powerful Performance</h3>
                            <p class="g-margin-b-0--xs">24-hour servers, made from the latest programming languages. </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".5s">
                                <i class="g-font-size-28--xs g-color--primary ti-medall"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Reliable Support</h3>
                            <p class="g-margin-b-0--xs">We are everywhere in the web. 24 Hours.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".6s">
                                <i class="g-font-size-28--xs g-color--primary ti-thumb-up"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Endless Possibilities</h3>
                            <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // end row  -->
        </div>
        <!-- End Features -->

        <!-- Parallax -->
        <div class="js__parallax-window" style="background: url(img/1920x1080/03.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-margin-b-80--xs">
                    <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">Interested? <br> Let's grab a coffee! Our treat!</h2>
                </div>
                <a href="#js__scroll-to-contact" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50">Contact Us</a>
            </div>
        </div>
        <!-- End Parallax -->

        <!-- Culture -->
        <div class="g-promo-section">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="row">
                    <div class="col-md-4 g-margin-t-15--xs g-margin-b-60--xs g-margin-b-0--lg">
                        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">About</p>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                           <!--  <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">About</h2> -->
                        </div>
                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                            <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md">Symbol Solutions</h2>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-1">
                        <p class="g-font-size-18--xs">Symbol Solutions is built with a geeky brain on its left and a colorful mind on its right.</p>
                        <p class="g-font-size-18--xs">We are collected by dreams and will rise by our burning passion to become the best provider of Management Information Systems in the world.</p>
                        <p class="g-font-size-18--xs"> Excellence in leadership, proficiency in software development, clever design imaginations, and endless opportunities will move us forward, just forward!</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 g-promo-section__img-right--lg g-bg-position--center g-height-100-percent--md js__fullwidth-img">
                <img class="img-responsive" src="img/970x970/loho.png" alt="Image">
            </div>
        </div>
        <!-- End Culture -->

        <!-- Subscribe -->
        <div class="js__parallax-window" style="background: url(img/1920x1080/07.jpg) 50% 0 no-repeat fixed;">
            <div class="g-container--sm g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Subscribe</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Join Over 1000+ People</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <form class="input-group" action="{{action('productController@addEmail')}}" method="POST">
                        {{ csrf_field() }}
                            <input type="email" class="form-control s-form-v1__input g-radius--left-50" name="email" placeholder="Enter your email">
                            <span class="input-group-btn">
                                <button type="submit" class="s-btn s-btn-icon--md s-btn-icon--white-brd s-btn--white-brd g-radius--right-50"><i class="ti-arrow-right"></i></button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe -->


        <!-- News -->
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-80--xs">
              <!--   <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Blog</p> -->
                <h2 class="g-font-size-32--xs g-font-size-36--md">Our Products</h2>
                 <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">We do a lot of things, we put them inside squared boxes</p>
            </div>
            <div class="row">
                @foreach($products as $product)

                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- News -->
                    <a href="{{action('productController@showProd', $product->prodId)}}">
                    <article>
                        <img class="img-responsive" src="data:image/jpeg;base64,<?php echo base64_encode($product->image); ?>"/>
                        <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                            <!-- <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p> -->
                            <h3 class="g-font-size-22--xs g-letter-spacing--1">{{$product->prodDesc}}</h3>
                            <p>{{$product->prodInfo}}</p>
                        </div>
                    </article>
                    </a>
                    <!-- End News -->
                </div>
                @endforeach
                
            </div>
        </div>
        <!-- End News -->



        <!-- Testimonials -->
        <div class="js__parallax-window" style="background: url(img/1920x1080/04.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-50--xs">Testimonials</p>
                <div class="s-swiper js__swiper-testimonials">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper g-margin-b-50--xs">
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>"They will surely guide you from the start up to the delivery date of your website. Very nice!!!"</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Ms. Apple Bacay, Councilor, Alaminos, Pangasinan</h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>"LogMaster is one of a kind, such a breath of fresh air for my meat processing business"</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Ms. Mena Marasigan, Owner, Chito and Neneng Foods, Inc.</h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>"Sleek and modern with such a good customer service"</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs"> Ms. Cherryl Ilem, Al Kareem Medical Services</h4>
                            </div>
                        </div>
                    </div>
                    <!-- End Swipper Wrapper -->

                    <!-- Arrows -->
                    <div class="g-font-size-22--xs g-color--white-opacity js__swiper-fraction"></div>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
                    <!-- End Arrows -->
                </div>
            </div>
        </div>
        <!-- End Testimonials -->

                <!-- Portfolio Filter -->
        <div class="container g-padding-y-80--xs">
            <div class="g-text-center--xs g-margin-b-40--xs">
                <h2 class="g-font-size-32--xs g-font-size-36--md">Our Services</h2>
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">We are doing a couple of things that you might be interested in</p>
            </div>
            <!-- <div class="s-portfolio">
                <div id="js__filters-portfolio-gallery" class="s-portfolio__filter-v1 cbp-l-filters-text cbp-l-filters-center">
                    <div data-filter="*" class="s-portfolio__filter-v1-item cbp-filter-item cbp-filter-item-active">Show All</div>
                    <div data-filter=".graphic" class="s-portfolio__filter-v1-item cbp-filter-item">Graphic</div>
                    <div data-filter=".logos" class="s-portfolio__filter-v1-item cbp-filter-item">Logo</div>
                    <div data-filter=".motion" class="s-portfolio__filter-v1-item cbp-filter-item">Motion</div>
                </div>
            </div> -->
        </div>
        <!-- End Portfolio Filter -->

        <!-- Portfolio Gallery -->
        <div class="container g-margin-b-100--xs">
            <div class="row">
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="img/970x970/01.jpg" alt="Image">
                        <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                            <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="#">Big Ideas</a></h3>
                            <p>The time has come to bring those ideas and plans to life.</p>
                        </div>
                    </article>
                    <!-- End News -->
                </div>
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="img/970x970/02.jpg" alt="Image">
                        <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                            <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="#">De Leon Consulting</a></h3>
                            <p>The time has come to bring those ideas and plans to life.</p>
                        </div>
                    </article>
                    <!-- End News -->
                </div>
                <div class="col-sm-4">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="img/970x970/03.jpg" alt="Image">
                        <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                            <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="#">Yummy</a></h3>
                            <p>The time has come to bring those ideas and plans to life.</p>
                        </div>
                    </article>
                    <!-- End News -->
                </div>
                
            </div>
            <div class="col-sm-4">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="img/970x970/04.jpg" alt="Image">
                        <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                            <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="#">OneLab</a></h3>
                            <p>The time has come to bring those ideas and plans to life.</p>
                        </div>
                    </article>
                    <!-- End News -->
                </div>
                <div class="col-sm-4">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="img/970x970/05.jpg" alt="Image">
                        <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                            <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="#">OverKnight Studios</a></h3>
                            <p>The time has come to bring those ideas and plans to life.</p>
                        </div>
                    </article>
                    <!-- End News -->
                </div>
                <div class="col-sm-4">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="img/970x970/06.jpg" alt="Image">
                        <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                            <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="#">WebDesigner</a></h3>
                            <p>The time has come to bring those ideas and plans to life.</p>
                        </div>
                    </article>
                    <!-- End News -->
                </div>
            </div>
            <!-- End Portfolio Gallery -->
        </div>
        <!-- End Portfolio -->

        <!-- Clients -->
        <div class="g-bg-color--sky-light">
            <div class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
             <div class="g-text-center--xs g-margin-b-40--xs">
                <h2 class="g-font-size-32--xs g-font-size-36--md">Technologies Used</h2>
            </div>
                <!-- Swiper Clients -->
                <div class="s-swiper js__swiper-clients">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="s-clients-v1" src="img/tech/tech5.png" alt="Clients Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".2s">
                                <img class="s-clients-v1" src="img/tech/tech1.png" alt="Clients Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".3s">
                                <img class="s-clients-v1" src="img/tech/tech2.png" alt="Clients Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".4s">
                                <img class="s-clients-v1" src="img/tech/tech3.png" alt="Clients Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".5s">
                                <img class="s-clients-v1" src="img/tech/tech4.png" alt="Clients Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".5s">
                                <img class="s-clients-v1" src="img/tech/tech5.png" alt="Clients Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".5s">
                                <img class="s-clients-v1" src="img/tech/tech6.png" alt="Clients Logo">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Swiper Clients -->
            </div>
        </div>
        <!-- End Clients -->

        <!-- Form -->
        <div id="js__scroll-to-appointment" class="g-bg-color--sky-light g-padding-y-80--xs g-padding-y-125--sm">
            <div class="container g-bg-color--white g-box-shadow__dark-lightest-v3">
                <div class="row">
                    <!-- Form -->
                    <div class="col-md-8 js__form-eqaul-height-v1">
                        <div class="g-padding-x-40--xs g-padding-y-50--xs">
                            <h2 class="g-font-size-24--xs g-color--primary g-margin-b-50--xs">Send us a message</h2>
                            <form>
                                <div class="row g-margin-b-30--xs g-margin-b-50--md">
                                    <div class="col-sm-12 g-margin-b-30--xs g-margin-b-0--md">
                                        <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="* Full Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="* Phone Number">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="* Email">
                                    </div>
                                </div>
                                
                                <div class="g-margin-b-50--xs">
                                    <textarea class="form-control s-form-v4__input g-padding-l-0--xs" rows="5" placeholder="* Your message"></textarea>
                                </div>
                                <div class="g-text-center--xs">
                                    <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Form -->

                    <!-- Contacts -->
                    <div class="col-md-4 g-bg-color--primary-ltr js__form-eqaul-height-v1">
                        <div class="g-overflow--hidden g-padding-x-40--xs g-padding-y-50--xs">
                            <h2 class="g-font-size-24--xs g-color--white g-margin-b-50--xs">Contact Us</h2>
                            <ul class="list-unstyled g-margin-b-70--xs">
                                <li class="clearfix g-color--white g-margin-b-40--xs">
                                    <div class="g-media g-width-40--xs g-margin-t-5--xs">
                                        <i class="g-font-size-20--xs g-color--white-opacity-light ti-location-pin"></i>
                                    </div>
                                    <div class="g-media__body">
                                        123 Holy Family, <br> Bagumbayan, Taguig City, Philippines
                                    </div>
                                </li>
                                <li class="clearfix g-color--white g-margin-b-40--xs">
                                    <div class="g-media g-width-40--xs g-margin-t-5--xs">
                                        <i class="g-font-size-20--xs g-color--white-opacity-light ti-mobile"></i>
                                    </div>
                                    <div class="g-media__body">
                                        +971509962345
                                    </div>
                                </li>
                                <li class="clearfix g-color--white g-margin-b-40--xs">
                                    <div class="g-media g-width-40--xs g-margin-t-5--xs">
                                        <i class="g-font-size-20--xs g-color--white-opacity-light ti-email"></i>
                                    </div>
                                    <div class="g-media__body">
                                        hello@symbol-solutions.com
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-inline g-ul-li-lr-15--xs">
                                <li><a href="http://www.facebook.com/symbolsolutions"><i class="g-font-size-20--xs g-color--white-opacity ti-facebook"></i></a></li>
                                <li><a href="http://www.twitter.com/SymbolSolutions"><i class="g-font-size-20--xs g-color--white-opacity ti-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/SymbolSolutions/"><i class="g-font-size-20--xs g-color--white-opacity ti-instagram"></i></a></li>
                                <li><a href="https://www.pinterest.com/symbolsolutions/"><i class="g-font-size-20--xs g-color--white-opacity ti-pinterest"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/symbol-solutions"><i class="g-font-size-20--xs g-color--white-opacity ti-linkedin"></i></a></li>
                            </ul>
                            <i class="g-font-size-150--xs g-color--white-opacity-lightest ti-comments" style="position: absolute; bottom: -1.25rem; right: -1.25rem;"></i>
                        </div>
                    </div>
                    <!-- End Contacts -->
                </div>
            </div>
        </div>
        <!-- End Form -->

        <!-- Google Map -->
        <section class="s-google-map">
        
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.0705931254133!2d121.05841251432473!3d14.480635789878955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cf7392f11b3d%3A0xea7b4fc4bd5fbb7d!2s123+Holy+Family+St%2C+Taguig%2C+Metro+Manila!5e0!3m2!1sfil!2sph!4v1496995075633" width="1400" height="420" frameborder="0" style="border:0" allowfullscreen class="s-google-container g-height-400--xs"></iframe>
      
        </section>
        <!-- End Google Map -->
        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
       
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

 @endsection
