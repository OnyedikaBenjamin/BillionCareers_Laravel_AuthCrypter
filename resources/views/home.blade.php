
<!doctype html>
<html lang="en">
  <head>
    <title>JobBoard &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    
    <link rel="shortcut icon" href="{{ asset('assets/typicons/B-X.png')}}">

    <link rel="shortcut icon" href="ftco-32x32.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
  
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
  
  
    <!-- CSS here -->
  
    <link rel="stylesheet" href="{{ asset('assets/css-post/custom-bs.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css-post/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css-post/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css-post/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css-post/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css-post/quill.snow.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css-post/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/line-icons/style.css')}}">
    <link rel="stylesheet" href="{{'assets/css-post/style.css'}}">
  </head>
  <body id="top">

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

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <!-- NAVBAR -->
    @extends('header')

    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image" style="background-image: url('assets/typicons/interviewer.jpg');" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">Navigate Your Career Path with Us</h1>
              <p>....job discovery made easy so fuel your career growth today, unlock opportunities, unleash potential.</p>
            </div>
            <form method="post" class="search-jobs-form">
              <div class="row mb-5">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <input type="text" class="form-control form-control-lg" placeholder="Job title, Company...">
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <div class="dropdown bootstrap-select dropup" >
                    <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Region" tabindex="-98">
                    <option>Anywhere</option>
                    <option>San Francisco</option>
                    <option>Palo Alto</option>
                    <option>New York</option>
                    <option>Manhattan</option>
                    <option>Ontario</option>
                    <option>Toronto</option>
                    <option>Kansas</option>
                    <option>Mountain View</option>
                  </select><button type="button" class="btn dropdown-toggle btn-white btn-lg bs-placeholder" data-toggle="dropdown" role="button" title="Select Region" aria-expanded="false"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Select Region</div></div> </div></button><div class="dropdown-menu" role="combobox" style="max-height: 372.922px; overflow: hidden; min-height: 169px; position: absolute; will-change: transform; min-width: 255px; top: 0px; left: 0px; transform: translate3d(0px, 50px, 0px);" x-placement="bottom-start"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1" style="max-height: 310.922px; overflow-y: auto; min-height: 107px;"><ul class="dropdown-menu inner show"><li class=""><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="text">Anywhere</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="text">San Francisco</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="text">Palo Alto</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="text">New York</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="text">Manhattan</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="text">Ontario</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="text">Toronto</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="text">Kansas</span></a></li><li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class="text">Mountain View</span></a></li></ul></div></div></div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <div class="dropdown bootstrap-select" style="width: 100%;"><select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Type" tabindex="-98"><option class="bs-title-option" value=""></option>
                    <option>Part Time</option>
                    <option>Full Time</option>
                  </select><button type="button" class="btn dropdown-toggle btn-white btn-lg bs-placeholder" data-toggle="dropdown" role="button" title="Select Job Type" aria-expanded="false"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Select Job Type</div></div> </div></button><div class="dropdown-menu" role="combobox" style="max-height: 205.078px; overflow: hidden; min-height: 46px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -2px, 0px);" x-placement="top-start"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1" style="max-height: 143.078px; overflow-y: auto; min-height: 0px;"><ul class="dropdown-menu inner show"><li class="no-results">No results matched "hybrid"</li></ul></div></div></div>
                </div>
                {{-- <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Type">
                    <option>Part Time</option>
                    <option>Full Time</option>
                  </select>
                </div> --}}
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search Job</button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 popular-keywords">
                  <h3>Trending Keywords:</h3>
                  <ul class="keywords list-unstyled m-0 p-0">
                    <li><a href="#" class="">UI Designer</a></li>
                    <li><a href="#" class="">Python</a></li>
                    <li><a href="#" class="">Developer</a></li>
                  </ul>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <a href="#next" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
      </a>

    </section
    

    <section class="py-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row align-items-center">
        </div>
      </div>



    <div class="our-services section-pad-t30">
      <div class="container">
          <!-- Section Tittle -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-tittle text-center">
                      <span>FEATURED TOURS Packages</span>
                      <h2>Browse Top Categories </h2>
                  </div>
              </div>
          </div>
          <div class="row d-flex justify-contnet-center">
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                  <div class="single-services text-center mb-30">
                      <div class="services-ion">
                          <span class="flaticon-tour"></span>
                      </div>
                      <div class="services-cap">
                         <h5><a href="job_listing.html">Design & Creative</a></h5>
                          <span>(653)</span>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                  <div class="single-services text-center mb-30">
                      <div class="services-ion">
                          <span class="flaticon-cms"></span>
                      </div>
                      <div class="services-cap">
                         <h5><a href="job_listing.html">Design & Development</a></h5>
                          <span>(658)</span>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                  <div class="single-services text-center mb-30">
                      <div class="services-ion">
                          <span class="flaticon-report"></span>
                      </div>
                      <div class="services-cap">
                         <h5><a href="job_listing.html">Sales & Marketing</a></h5>
                          <span>(658)</span>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                  <div class="single-services text-center mb-30">
                      <div class="services-ion">
                          <span class="flaticon-app"></span>
                      </div>
                      <div class="services-cap">
                         <h5><a href="job_listing.html">Mobile Application</a></h5>
                          <span>(658)</span>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                  <div class="single-services text-center mb-30">
                      <div class="services-ion">
                          <span class="flaticon-helmet"></span>
                      </div>
                      <div class="services-cap">
                         <h5><a href="job_listing.html">Construction</a></h5>
                          <span>(658)</span>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                  <div class="single-services text-center mb-30">
                      <div class="services-ion">
                          <span class="flaticon-high-tech"></span>
                      </div>
                      <div class="services-cap">
                         <h5><a href="job_listing.html">Information Technology</a></h5>
                          <span>(658)</span>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                  <div class="single-services text-center mb-30">
                      <div class="services-ion">
                          <span class="flaticon-real-estate"></span>
                      </div>
                      <div class="services-cap">
                         <h5><a href="job_listing.html">Real Estate</a></h5>
                          <span>(658)</span>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                  <div class="single-services text-center mb-30">
                      <div class="services-ion">
                          <span class="flaticon-content"></span>
                      </div>
                      <div class="services-cap">
                         <h5><a href="job_listing.html">Content Writer</a></h5>
                          <span>(658)</span>
                      </div>
                  </div>
              </div>
          </div>
          <!-- More Btn -->
          <!-- Section Button -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="browse-btn2 text-center mt-50">
                      <a href="job_listing.html" class="border-btn2">Browse All Sectors</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Our Services End -->
  <!-- Online CV Area Start -->
   <div class="online-cv cv-bg section-overly pt-90 pb-120"  data-background="assets/img/gallery/cv_bg.jpg">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-10">
                  <div class="cv-caption text-center">
                      <p class="pera1">FEATURED TOURS Packages</p>
                      <p class="pera2"> Make a Difference with Your Online Resume!</p>
                      <a href="#" class="border-btn2 border-btn4">Upload your cv</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Online CV Area End-->
  <!-- Featured_job_start -->
  <section class="featured-job-area feature-padding">
      <div class="container">
          <!-- Section Tittle -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-tittle text-center">
                      <span>Recent Job</span>
                      <h2>Featured Jobs</h2>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-xl-10">
                  <!-- single-job-content -->
                  <div class="single-job-items mb-30">
                      <div class="job-items">
                          <div class="company-img">
                              <a href="job_details.html"><img src="assets/img/icon/job-list1.png" alt=""></a>
                          </div>
                          <div class="job-tittle">
                              <a href="job_details.html"><h4>Digital Marketer</h4></a>
                              <ul>
                                  <li>Creative Agency</li>
                                  <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                  <li>$3500 - $4000</li>
                              </ul>
                          </div>
                      </div>
                      <div class="items-link f-right">
                          <a href="job_details.html">Full Time</a>
                          <span>7 hours ago</span>
                      </div>
                  </div>
                  <!-- single-job-content -->
                  <div class="single-job-items mb-30">
                      <div class="job-items">
                          <div class="company-img">
                              <a href="job_details.html"><img src="assets/img/icon/job-list2.png" alt=""></a>
                          </div>
                          <div class="job-tittle">
                              <a href="job_details.html"><h4>Digital Marketer</h4></a>
                              <ul>
                                  <li>Creative Agency</li>
                                  <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                  <li>$3500 - $4000</li>
                              </ul>
                          </div>
                      </div>
                      <div class="items-link f-right">
                          <a href="job_details.html">Full Time</a>
                          <span>7 hours ago</span>
                      </div>
                  </div>
                   <!-- single-job-content -->
                  <div class="single-job-items mb-30">
                      <div class="job-items">
                          <div class="company-img">
                              <a href="job_details.html"><img src="assets/img/icon/job-list3.png" alt=""></a>
                          </div>
                          <div class="job-tittle">
                              <a href="job_details.html"><h4>Digital Marketer</h4></a>
                              <ul>
                                  <li>Creative Agency</li>
                                  <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                  <li>$3500 - $4000</li>
                              </ul>
                          </div>
                      </div>
                      <div class="items-link f-right">
                          <a href="job_details.html">Full Time</a>
                          <span>7 hours ago</span>
                      </div>
                  </div>
                   <!-- single-job-content -->
                  <div class="single-job-items mb-30">
                      <div class="job-items">
                          <div class="company-img">
                              <a href="job_details.html"><img src="assets/img/icon/job-list4.png" alt=""></a>
                          </div>
                          <div class="job-tittle">
                              <a href="job_details.html"><h4>Digital Marketer</h4></a>
                              <ul>
                                  <li>Creative Agency</li>
                                  <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                  <li>$3500 - $4000</li>
                              </ul>
                          </div>
                      </div>
                      <div class="items-link f-right">
                          <a href="job_details.html">Full Time</a>
                          <span>7 hours ago</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Featured_job_end -->
  <!-- How  Apply Process Start-->
  <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
      <div class="container">
          <!-- Section Tittle -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-tittle white-text text-center">
                      <span>Apply process</span>
                      <h2> How it works</h2>
                  </div>
              </div>
          </div>
          <!-- Apply Process Caption -->
          <div class="row">
              <div class="col-lg-4 col-md-6">
                  <div class="single-process text-center mb-30">
                      <div class="process-ion">
                          <span class="flaticon-search"></span>
                      </div>
                      <div class="process-cap">
                         <h5>1. Search a job</h5>
                         <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="single-process text-center mb-30">
                      <div class="process-ion">
                          <span class="flaticon-curriculum-vitae"></span>
                      </div>
                      <div class="process-cap">
                         <h5>2. Apply for job</h5>
                         <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="single-process text-center mb-30">
                      <div class="process-ion">
                          <span class="flaticon-tour"></span>
                      </div>
                      <div class="process-cap">
                         <h5>3. Get your job</h5>
                         <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                      </div>
                  </div>
              </div>
          </div>
       </div>
  </div>
  <!-- How  Apply Process End-->
  <!-- Testimonial Start -->
  <div class="testimonial-area testimonial-padding">
      <div class="container">
          <!-- Testimonial contents -->
          <div class="row d-flex justify-content-center">
              <div class="col-xl-8 col-lg-8 col-md-10">
                  <div class="h1-testimonial-active dot-style">
                      <!-- Single Testimonial -->
                      <div class="single-testimonial text-center">
                          <!-- Testimonial Content -->
                          <div class="testimonial-caption ">
                              <!-- founder -->
                              <div class="testimonial-founder  ">
                                  <div class="founder-img mb-30">
                                      <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                      <span>Margaret Lawson</span>
                                      <p>Creative Director</p>
                                  </div>
                              </div>
                              <div class="testimonial-top-cap">
                                  <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                              </div>
                          </div>
                      </div>
                      <!-- Single Testimonial -->
                      <div class="single-testimonial text-center">
                          <!-- Testimonial Content -->
                          <div class="testimonial-caption ">
                              <!-- founder -->
                              <div class="testimonial-founder  ">
                                  <div class="founder-img mb-30">
                                      <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                      <span>Margaret Lawson</span>
                                      <p>Creative Director</p>
                                  </div>
                              </div>
                              <div class="testimonial-top-cap">
                                  <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                              </div>
                          </div>
                      </div>
                      <!-- Single Testimonial -->
                      <div class="single-testimonial text-center">
                          <!-- Testimonial Content -->
                          <div class="testimonial-caption ">
                              <!-- founder -->
                              <div class="testimonial-founder  ">
                                  <div class="founder-img mb-30">
                                      <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                      <span>Margaret Lawson</span>
                                      <p>Creative Director</p>
                                  </div>
                              </div>
                              <div class="testimonial-top-cap">
                                  <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Testimonial End -->
   <!-- Support Company Start-->
   <div class="support-company-area support-padding fix">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-xl-6 col-lg-6">
                  <div class="right-caption">
                      <!-- Section Tittle -->
                      <div class="section-tittle section-tittle2">
                          <span>What we are doing</span>
                          <h2>24k Talented people are getting Jobs</h2>
                      </div>
                      <div class="support-caption">
                          <p class="pera-top">Mollit anim laborum duis au dolor in voluptate velit ess cillum dolore eu lore dsu quality mollit anim laborumuis au dolor in voluptate velit cillum.</p>
                          <p>Mollit anim laborum.Duis aute irufg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur signjnt occa cupidatat non inulpadeserunt mollit aboru. temnthp incididbnt ut labore mollit anim laborum suis aute.</p>
                          <a href="about.html" class="btn post-btn">Post a job</a>
                      </div>
                  </div>
              </div>
              <div class="col-xl-6 col-lg-6">
                  <div class="support-location-img">
                      <img src="assets/img/service/support-img.jpg" alt="">
                      <div class="support-img-cap text-center">
                          <p>Since</p>
                          <span>1994</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Support Company End-->
  <!-- Blog Area Start -->
  <div class="home-blog-area blog-h-padding">
      <div class="container">
          <!-- Section Tittle -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-tittle text-center">
                      <span>Our latest blog</span>
                      <h2>Our recent news</h2>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6">
                  <div class="home-blog-single mb-30">
                      <div class="blog-img-cap">
                          <div class="blog-img">
                              <img src="assets/img/blog/home-blog1.jpg" alt="">
                              <!-- Blog date -->
                              <div class="blog-date text-center">
                                  <span>24</span>
                                  <p>Now</p>
                              </div>
                          </div>
                          <div class="blog-cap">
                              <p>|   Properties</p>
                              <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                              <a href="#" class="more-btn">Read more »</a>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6">
                  <div class="home-blog-single mb-30">
                      <div class="blog-img-cap">
                          <div class="blog-img">
                              <img src="assets/img/blog/home-blog2.jpg" alt="">
                              <!-- Blog date -->
                              <div class="blog-date text-center">
                                  <span>24</span>
                                  <p>Now</p>
                              </div>
                          </div>
                          <div class="blog-cap">
                              <p>|   Properties</p>
                              <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                              <a href="#" class="more-btn">Read more »</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Blog Area End -->

</main>

    
    <section class="site-section py-4">
      <div class="container">
  
        <div class="row align-items-center">
          <div class="col-12 text-center mt-4 mb-5">
            <div class="row justify-content-center">
              <div class="col-md-7">
                <h2 class="section-title mb-2">Company We've Helped</h2>
                <p class="lead">Porro error reiciendis commodi beatae omnis similique voluptate rerum ipsam fugit mollitia ipsum facilis expedita tempora suscipit iste</p>
              </div>
            </div>
            
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_mailchimp.svg" alt="Image" class="img-fluid logo-1">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_paypal.svg" alt="Image" class="img-fluid logo-2">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_stripe.svg" alt="Image" class="img-fluid logo-3">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_visa.svg" alt="Image" class="img-fluid logo-4">
          </div>

          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_apple.svg" alt="Image" class="img-fluid logo-5">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_tinder.svg" alt="Image" class="img-fluid logo-6">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_sony.svg" alt="Image" class="img-fluid logo-7">
          </div>
          <div class="col-6 col-lg-3 col-md-6 text-center">
            <img src="images/logo_airbnb.svg" alt="Image" class="img-fluid logo-8">
          </div>
        </div>
      </div>
    </section>


    <section class="bg-light pt-5 testimony-full">
        
        <div class="owl-carousel single-carousel">

        
          <div class="container">
            <div class="row">
              <div class="col-lg-6 align-self-center text-center text-lg-left">
                <blockquote>
                  <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;</p>
                  <p><cite> &mdash; Corey Woods, @Dribbble</cite></p>
                </blockquote>
              </div>
              <div class="col-lg-6 align-self-end text-center text-lg-right">
                <img src="images/person_transparent_2.png" alt="Image" class="img-fluid mb-0">
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-6 align-self-center text-center text-lg-left">
                <blockquote>
                  <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;</p>
                  <p><cite> &mdash; Chris Peters, @Google</cite></p>
                </blockquote>
              </div>
              <div class="col-lg-6 align-self-end text-center text-lg-right">
                <img src="images/person_transparent.png" alt="Image" class="img-fluid mb-0">
              </div>
            </div>
          </div>

      </div>

    </section>

    <section class="pt-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center text-center text-md-left mb-5 mb-md-0">
            <h2 class="text-white">Get The Mobile Apps</h2>
            <p class="mb-5 lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci impedit.</p>
            <p class="mb-0">
              <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-apple mr-3"></span>App Store</a>
              <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-android mr-3"></span>Play Store</a>
            </p>
          </div>
          <div class="col-md-6 ml-auto align-self-end">
            <img src="images/apps.png" alt="Free Website Template by Free-Template.co" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    
    @extends('footer')
  
  </div>

    <script src="{{ asset('js/js-post/jquery.min.js') }}"></script>
<script src="{{ asset('js/js-post/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/js-post/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/js-post/stickyfill.min.js') }}"></script>
<script src="{{ asset('js/js-post/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/js-post/jquery.easing.1.3.js') }}"></script>

<script src="{{ asset('js/js-post/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/js-post/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/js-post/owl.carousel.min.js') }}"></script>

<script src="{{ asset('js/js-post/bootstrap-select.min.js') }}"></script>

<script src="{{ asset('js/js-post/custom.js') }}"></script>


     
  </body>
</html>