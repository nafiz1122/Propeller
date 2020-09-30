@extends('layouts.client_master')

@section('content')
    <main>
    <!-- slider Area Start-->
    @foreach ($sliders as $slider)
    <div class="slider-area" style="height:100vh;background-image:linear-gradient( rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(Admin_images/Slider_images/{{ $slider->slider_image }});" >
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center" style="height:100vh;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".6s">{{ $slider->slider_title }}.</h1>
                                <P data-animation="fadeInUp" data-delay=".8s" >{{ $slider->slider_details}}.</P>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="industries.html" class="btn hero-btn mb-10"  data-animation="fadeInLeft" data-delay=".8s">Donate</a>
                                    <a href="industries.html" class="cal-btn ml-15" data-animation="fadeInRight" data-delay="1.0s">
                                        <i class="flaticon-null"></i>
                                        <p>+12 1325 41</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- slider Area End-->
        <!--? About Law Start-->
        <section class="about-low-area section-padding2">
            <div class="container">
                @foreach ($abouts as $about)
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <h1>About our foundetion</h1>
                                {{-- <h2>{{ $about->about_title }}</h2> --}}
                            </div>
                            <p>{!! $about->about_details !!}</p>
                        </div>
                        <a href="about.html" class="btn">About US</a>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img "  >
                            {{-- <div class="about-font-img d-none d-lg-block">
                                <img src="/client_assets/img/gallery/about2.png" alt="">
                            </div> --}}
                            <div class="about-back-img" >
                            <img style="width: 580px;height:350px;margin-top:50px;
                                        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" src="Admin_images/About_images/{{ $about->about_image }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <!-- About Law End-->
    <!--? Services Area Start -->
    <div class="service-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>What we are doing</span>
                        <h2>We Are In A Mission To Help The Helpless</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $service)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            
                            <span class="flaticpon-null-1">{!! $service->service_icon !!}</span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">{{ $service->service_name }}</a></h5>
                            <p>{!! $service->service_short_details!!}.</p>
                        </div>
                        <a style="border: 1px solid black;background:#fff;color:black" href="{{ url('/viewService/'.$service->id) }}" class="btn btn-success" >Read More</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Services Area End -->
<!--? Team Ara Start -->
<div class="team-area pt-160 pb-160">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                <!-- Section Tittle -->
                <div class="section-tittle section-tittle2 text-center mb-70">
                    <span>What we are doing</span>
                    <h2>Our Expert Volunteer Alwyes ready</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                @foreach ($teams as $team) 
                <div class="single-team mb-30">
                    <div class="team-img">
                        <img src="Admin_images/Team_images/{{ $team->team_image }}" alt="">
                        <!-- Blog Social -->
                        <ul class="team-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fas fa-globe"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-caption">
                        <h3><a href="instructor.html">{{ $team->team_name }}</a></h3>
                        <p>{{ $team->team_position }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Team Ara End -->
    <!-- Want To work -->
    <section class="wantToWork-area ">
        <div class="container">
            <div class="wants-wrapper w-padding2  section-bg" data-background="/client_assets/img/gallery/section_bg01.png">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-9 col-md-8">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Lets Chenge The World With Humanity</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <a href="#" class="btn white-btn f-right sm-left">Become A Volunteer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Want To work End -->
<!--? Testimonial Start -->
<div class="testimonial-area testimonial-padding">
    <div class="container">
        <!-- Testimonial contents -->
        <div class="row d-flex justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                <!-- Section Tittle -->
                <div class="section-tittle section-tittle2 text-center mb-70">
                    <h2>Our Advisor Body</h2>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-10">
                <div class="h1-testimonial-active dot-style">
                    <!-- Single Testimonial -->
                    <div class="single-testimonial text-center">
                        <div class="testimonial-caption ">
                            <!-- founder -->
                            <div class="testimonial-founder">
                                <div class="founder-img mb-40">
                                    <img src="/client_assets/img/gallery/testimonial.png" alt="">
                                    <span>Margaret Lawson</span>
                                    <p>Creative Director</p>
                                </div>
                            </div>
                            <div class="testimonial-top-cap">
                                <p>“I am at an age where I just want to be fit and healthy our bodies are our
                                    responsibility! So start caring for your body and it will care for you. Eat clean it
                                    will care for you and workout hard.”</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Testimonial -->
                    <div class="single-testimonial text-center">
                        <div class="testimonial-caption ">
                            <!-- founder -->
                            <div class="testimonial-founder">
                                <div class="founder-img mb-40">
                                    <img src="/client_assets/img/gallery/testimonial.png" alt="">
                                    <span>Margaret Lawson</span>
                                    <p>Creative Director</p>
                                </div>
                            </div>
                            <div class="testimonial-top-cap">
                                <p>“I am at an age where I just want to be fit and healthy our bodies are our
                                    responsibility! So start caring for your body and it will care for you. Eat clean it
                                    will care for you and workout hard.”</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Testimonial -->
                    <div class="single-testimonial text-center">
                        <div class="testimonial-caption ">
                            <!-- founder -->
                            <div class="testimonial-founder">
                                <div class="founder-img mb-40">
                                    <img src="/client_assets/img/gallery/testimonial.png" alt="">
                                    <span>Margaret Lawson</span>
                                    <p>Creative Director</p>
                                </div>
                            </div>
                            <div class="testimonial-top-cap">
                                <p>“I am at an age where I just want to be fit and healthy our bodies are our
                                    responsibility! So start caring for your body and it will care for you. Eat clean it
                                    will care for you and workout hard.”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
    <!-- Our Cases Start -->
    <div class="our-cases-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>Our Cases you can see</span>
                        <h2>Explore our latest blog </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="/client_assets/img/gallery/case1.png" alt="">
                        </div>
                        <div class="cases-caption">
                            <h3><a href="#">Ensure Education For Every Poor Children</a></h3>
                            <!-- Progress Bar -->
                            <div class="single-skill mb-15">
                                <div class="bar-progress">
                                    <div id="bar1" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="70"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- / progress -->
                            <!-- <div class="prices d-flex justify-content-between">
                                <p>Raised:<span> $20,000</span></p>
                                <p>Goal:<span> $35,000</span></p>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="/client_assets/img/gallery/case2.png" alt="">
                        </div>
                        <div class="cases-caption">
                            <h3><a href="#">Providing Healthy Food For The Children</a></h3>
                            <!-- Progress Bar -->
                            <div class="single-skill mb-15">
                                <div class="bar-progress">
                                    <div id="bar2" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="25"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- / progress -->
                            <!-- <div class="prices d-flex justify-content-between">
                                <p>Raised:<span> $20,000</span></p>
                                <p>Goal:<span> $35,000</span></p>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="/client_assets/img/gallery/case3.png" alt="">
                        </div>
                        <div class="cases-caption">
                            <h3><a href="#">Supply Drinking Water For  The People</a></h3>
                            <!-- Progress Bar -->
                            <div class="single-skill mb-15">
                                <div class="bar-progress">
                                    <div id="bar3" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="50"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- / progress -->
                            <!-- <div class="prices d-flex justify-content-between">
                                <p>Raised:<span> $20,000</span></p>
                                <p>Goal:<span> $35,000</span></p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Cases End -->
    <!-- Featured_job_start -->
   
                        
    <!-- Featured_job_end -->
   

    
    <!--? Blog Area Start -->
    
    <!-- Blog Area End -->
    <!--? Count Down Start -->
    <div class="count-down-area pt-25 section-bg" data-background="/client_assets/img/gallery/section_bg02.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="count-down-wrapper" >
                        <div class="row justify-content-between">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter color-green">6,200</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">Donation</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter color-green">80</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">Fund Raised</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter color-green">256</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">Donation</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <!-- Counter Up -->
                                <div class="single-counter text-center">
                                    <span class="counter color-green">256</span>
                                    <span class="plus">+</span>
                                    <p class="color-green">Donation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Count Down End -->
    </main>
@endsection