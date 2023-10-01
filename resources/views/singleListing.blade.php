<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Job board HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
           <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/price_rangs.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   
   </head>

   <body>
    <!-- Preloader Start -->
    {{-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="job_listing.html">Find a Jobs </a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="#">Page</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-blog.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Elements</a></li>
                                                    <li><a href="job_details.html">job Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="#" class="btn head-btn1">Register</a>
                                    <a href="#" class="btn head-btn2">Login</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>
    <main>

        <!-- Hero Area Start-->
        {{-- <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>{{$singleListing['title']}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div> --}}
        <!-- Hero Area End -->
        <!-- job post company Start -->
        <div class="job-post-company pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Left Content -->
                    <div class="col-xl-7 col-lg-8">
                        <!-- job single -->
                        <div class="single-job-items mb-50">
                            <div class="job-items">
                                <div class="job-tittle">
                                    <a href="#">
                                        <h4>{{$singleListing['role']}}</h4>
                                    </a>
                                    <ul>
                                        <li>{{$singleListing->company}}</li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{$singleListing->location}}</li>
                                        <li>{{$singleListing->salary_range}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                          <!-- job single End -->
                       
                        <div class="job-post-details">
                            <div class="post-details1 mb-50">
                                <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Job Description</h4>
                                </div>
                                <p>{{$singleListing->description}}</p>
                            </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Required Knowledge, Skills, and Abilities</h4>
                                </div>
                               <ul>
                                   <li>System Software Development</li>
                                   <li>Mobile Applicationin iOS/Android/Tizen or other platform</li>
                                   <li>Research and code , libraries, APIs and frameworks</li>
                                   <li>Strong knowledge on software development life cycle</li>
                                   <li>Strong problem solving and debugging skills</li>
                               </ul>
                            </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Education + Experience</h4>
                                </div>
                               <ul>
                                   <li>3 or more years of professional design experience</li>
                                   <li>Direct response email experience</li>
                                   <li>Ecommerce website design experience</li>
                                   <li>Familiarity with mobile and web apps preferred</li>
                                   <li>Experience using Invision a plus</li>
                               </ul>
                            </div>
                        </div>
                        <a href="/listings/{{$singleListing->id}}/edit" class="btn">Edit Job</a>
                        <div>.</div>
                        <form method="POST" action="/listings/{{$singleListing->id}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn" value="Delete Job">
                        </form>
                        
                    </div>
                  
                    <div class="col-xl-4 col-lg-4">
                        <div class="post-details3  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Job Overview</h4>
                           </div>
                          <ul>
                              <li>Posted date : <span>12 Aug 2019</span></li>
                              <li>Location : <span>{{$singleListing->location}}</span></li>
                              <li>Vacancy : <span>{{$singleListing->no_vacancy}}</span></li>
                              <li>Job nature : <span>{{$singleListing->job_type}}</span></li>
                              <li>Salary :  <span>{{$singleListing->yearly_salary}}</span></li>
                              <li>Application expires : <span>12 Sep 2020</span></li>
                          </ul>
                         <div class="apply-btn2">
                            <a href="#" class="btn">Apply Now</a>
                         </div>
                       </div>
                        <div class="post-details4  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Company Information</h4>
                           </div>
                              <span>{{$singleListing->company}}</span>
                              <p>{{$singleListing->company_description}}</p>
                            <ul>
                                <li>Web : <span>{{$singleListing->website}}</span></li>
                                <li>Email: <span>{{$singleListing->email}}</span></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- job post company End -->
        <div class="single-listing">
            <!-- Range Slider Start -->
            <aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow">
                <div class="small-section-tittle2">
                    <h4>Filter Jobs</h4>
                </div>
                <div class="widgets_inner">
                    <div class="range_item">
                        <!-- <div id="slider-range"></div> -->
                        <input type="text" class="js-range-slider" value="" />
                        <div class="d-flex align-items-center">
                            <div class="price_text">
                                <p>Price :</p>
                            </div>
                            <div class="price_value d-flex justify-content-center">
                                <input type="text" class="js-input-from" id="amount" readonly />
                                <span>to</span>
                                <input type="text" class="js-input-to" id="amount" readonly />
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- Range Slider End -->
        </div>
    </div>
    <!-- Job Category Listing End -->
</div>
<!-- Right content -->
<div class="col-xl-9 col-lg-9 col-md-8">
    <!-- Featured_job_start -->
    <section class="featured-job-area">
        <div class="container">
            <!-- Count of Job list Start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="count-job mb-35">
                        {{-- @if ($total_listings < 2)
                        <span>{{$total_listings}} Job found</span>
                        @else --}}
                          <span>15 Jobs found</span>  
                        {{-- @endif --}}
                        
                        <!-- Select job items start -->
                    
                        <!--  Select job items End-->
                    </div>
                </div>
            </div>

    </main>
    @extends('footer')

	<!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<!-- Jquery, Popper, Bootstrap -->
        <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{ asset('assets/js/popper.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset('assets/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets/js/slick.min.js')}}"></script>
        <script src="{{ asset('assets/js/price_rangs.js')}}"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('assets/js/wow.min.js')}}"></script>
        <script src="{{ asset('assets/js/animated.headline.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.js')}}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset('assets/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>
        
        <!-- contact js -->
        <script src="{{ asset('assets/js/contact.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.form.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{ asset('assets/js/mail-script.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{ asset('assets/js/plugins.js')}}"></script>
        <script src="{{ asset('assets/js/main.js')}}"></script>
    </body>
    
</html>