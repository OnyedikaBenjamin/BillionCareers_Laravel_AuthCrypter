<!doctype html>
<html lang="en">

<head>
  <title>JobBoard &mdash; Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{'assets/css-post/style.css'}}">
</head>



<body id="top">

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
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="index.html">BILLION-JOBS</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index.html" class="nav-link active">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li class="has-children">
                <a href="job-listings.html" class="active">Job Listings</a>
                <ul class="dropdown">
                  <li><a href="job-single.html">Job Single</a></li>
                  <li><a href="post-job.html" class="active">Post a Job</a></li>
                </ul>
              </li>
              <li class="has-children">
                <a href="services.html">Pages</a>
                <ul class="dropdown">
                  <li><a href="services.html">Services</a></li>
                  <li><a href="service-single.html">Service Single</a></li>
                  <li><a href="blog-single.html">Blog Single</a></li>
                  <li><a href="portfolio.html">Portfolio</a></li>
                  <li><a href="portfolio-single.html">Portfolio Single</a></li>
                  <li><a href="testimonials.html">Testimonials</a></li>
                  <li><a href="faq.html">Frequently Ask Questions</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                </ul>
              </li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li class="d-lg-none"><a href="post-job.html"><span class="mr-2">+</span> Post a Job</a></li>
              <li class="d-lg-none"><a href="login.html">Log In</a></li>
            </ul>
          </nav>

          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="post-job.html" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span
                  class="mr-2 icon-add"></span>Post a Job</a>
              <a href="login.html" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span
                  class="mr-2 icon-lock_outline"></span>Log In</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span
                class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image"
      style="background-image: url('assets/img/hero/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Post A Job</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <a href="#">Job</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Post a Job</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="site-section">
      <div class="container">

        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div>
                <h2>Post A Job</h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            {{-- <div class="row">
              <div class="col-6">
                <a href="#" class="btn btn-block btn-light btn-md"><span
                    class="icon-open_in_new mr-2"></span></a>
              </div>
              <div class="col-6">
                <a href="#" class="btn btn-block btn-primary btn-md">Save Job</a>
              </div>
            </div> --}}
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-12">

            {{-- Form Starts --}}
            <form class="p-4 p-md-5 border rounded" method="POST" action="/listings" enctype="multipart/form-data">
              @csrf
              <h3 class="text-black mb-5 border-bottom pb-2">Job Details</h3>

              <div class="form-group">
                <label for="job-title">Job Title</label>
                <input type="text" name="role" class="form-control" id="job-title" placeholder="Software Engineer" 
                value="{{old('role')}}">
                @error('role')
                <p class="text-red-500">{{$message}}</p>
                @enderror
              </div>

              <div class="form-group">
                <label for="job-location">Location</label>
                <input type="text" name="location" class="form-control" id="job-location" placeholder="e.g. New York" 
                value="{{old('location')}}">
                @error('location')
                <p class="text-red-500">{{$message}}</p>
                @enderror
              </div>

              <div class="form-group">
                <label for="job-type">Job Type</label>
                <select class="selectpicker border rounded" name="job_type" id="job-type" data-style="btn-black"
                  data-width="100%" data-live-search="true" title="Select Job Type" 
                  value="{{old('job_type')}}">
                  <option>Full-Time</option>
                  <option>Hybrid</option>
                  <option>Remote</option>
                </select>
                @error('job_type')
                <p class="text-red-500">{{$message}}</p>
                @enderror
              </div>

              <div class="form-group">
                <label for="job-description">Job Description</label>
                <textarea name="description" class="form-control" id="job-description" rows="5"
                  placeholder="Write Job Description!" 
                  value="{{old('description')}}"></textarea>
                  @error('description')
                <p class="text-red-500">{{$message}}</p>
                @enderror
              </div>

              <div class="form-group">
                <label for="job-title">Salary Range</label>
                <input type="text" name="salary_range" class="form-control" id="job-title" placeholder="$2500 - $4000" 
                value="{{old('salary_range')}}">
                @error('salary_range')
                <p class="text-red-500">{{$message}}</p>
                @enderror
              </div>

              <div class="form-group">
                <label for="job-title">Salary Per-Year</label>
                <input type="text" name="yearly_salary" class="form-control" id="job-title" placeholder="$78,000"
                value="{{old('yearly_salary')}}">
                @error('yearly_salary')
                <p class="text-red-500">{{$message}}</p>
                @enderror
              </div>

              <div class="form-group">
                <label for="job-title">No of vacancy</label>
                <input type="number" name="no_vacancy" class="form-control" id="job-title" placeholder="1"
                value="{{old('no_vacancy')}}">
                @error('no_vacancy')
                <p class="text-red-500">{{$message}}</p>
                @enderror
              </div>

              <h3 class="text-black my-5 border-bottom pb-2">Company Details</h3>

              <div class="form-group">
                <label for="company-name">Company Name</label>
                <input type="text" name="company" class="form-control" id="company-name" placeholder="e.g. Billion PLC"
                value="{{old('company')}}">
                @error('company')
                <p class="text-red-500">{{$message}}</p>
                @enderror
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="you@yourdomain.com"
                value="{{old('email')}}">
                @error('email')
                <p class="text-red-500">{{$message}}</p>
                @enderror
              </div>

              <div class="form-group">
                <label for="company-description">Company Description (Optional)</label>
                <textarea name="company_description" class="form-control" id="company-description" rows="5"
                  placeholder="Description"  value="{{old('company_description')}}"></textarea>
              </div>

              <div class="form-group">
                <label for="company-website">Website (Optional)</label>
                <input type="text" name="website" class="form-control" id="company-website" placeholder="https://"
                value="{{old('website')}}">
              </div>

              <div class="form-group">
                <label for="company-website-tw d-block">Upload Logo</label> <br>
                <label class="btn btn-primary btn-md btn-file">
                  Browse File<input name="logo" type="file">
                </label>              
              </div>


              <div class="row align-items-center mb-5">

                <div class="col-lg-4 ml-auto">
                  <div class="row">
                    <div class="col-6">
                      <a href="#" class="btn btn-block btn-light btn-md"><span
                          class="icon-open_in_new mr-2"></span>Preview</a>
                    </div>
                    <div class="col-6">
                      <input type="submit" class="btn btn-block btn-primary btn-md" value="Save Job">
                    </div>
                  </div>
                </div>
              </div>

            </form>

          </div>


        </div>

      </div>
    </section>
  </div>
  <!-- SCRIPTS -->
  <script src="{{ asset('assets/js-post/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/js-post/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/js-post/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('assets/js-post/stickyfill.min.js')}}"></script>
  <script src="{{ asset('assets/js-post/jquery.fancybox.min.js')}}"></script>
  <script src="{{ asset('assets/js-post/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('assets/js-post/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('assets/js-post/query.animateNumber.min.js')}}"></script>
  <script src="{{ asset('assets/js-post/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('assets/js-post/quill.min.js')}}"></script>
  <script src="{{ asset('assets/js-post/bootstrap-select.min.js')}}"></script>
  <script src="{{ asset('assets/js-post/custom.js')}}"></script>

</body>
@extends('footer')

</html>