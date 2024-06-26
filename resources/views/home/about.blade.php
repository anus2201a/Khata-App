@extends('home.layouts.app')
@section('content')



   <div id="smooth-wrapper">
      <div id="smooth-content">

         <main>

            <!-- tp-breadcrumb-area-start -->
            <div class="about-banner-area p-relative">
               <div class="about-shape-1 z-index-3">
                  <img src="home/assets/img/breadcrumb/breadcrumb-shape-1.png" alt="">
               </div>
               <div class="about-shape-2 z-index-3">
                  <img src="home/assets/img/breadcrumb/breadcrumb-shape-2.png" alt="">
               </div>
               <div class="about-banner p-relative z-index fix">
                  <div class="container">
                     <div class="row">
                        <div class="col-xl-12">
                           <div class="about-banner-content z-index-5">
                              <h4 class="about-banner-title" data-parallax='{"y": 1000, "smoothness": 10}'>
                                 {{-- <span>About</span> <br>
                                 <span>Softec</span> --}}
                                 {!! get_cms('section_1_main_tittle','about','value')  !!}
                              </h4>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- tp-breadcrumb-area-end -->

            <!-- tp-breadcrumb-header-area-start -->
            <div class="about-img-area mb-100 z-index-3">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <div class="about-img about-img-height p-relative" data-background="{{asset( get_cms('section_1_main_image','about','value'))}}">
                           <div class="about-img-content">
                              <h4 class="about-img-title" data-parallax='{"y": 1000, "smoothness": 10}'>
                                 <span>About</span> <br>
                                 <span>Softec</span>
                              </h4>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- tp-breadcrumb-header-area-end -->


            <!--ab-brand-area-start -->
            <div class="ab-brand-area">
               <div class="container">
                  <div class="ab-brand-border-bottom pb-90">
                     <div class="row">
                        <div class="col-12">
                           <div class="ab-brand-section-box text-center mb-50">
                              <h4 class="ab-brand-title"> {{ get_cms('section_1_tittle_2','about','value') }}</h4>
                              <p>{{ get_cms('section_1_desc','about','value') }}</p>
                           </div>
                        </div>
                     </div>
                     <div class="row justify-content-center">
                        <div class="col-xl-10">
                           <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 justify-content-center">
                              <div class="col wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".2s">
                                 <div class="ab-brand-item mb-25">
                                    <img src="home/assets/img/brand/brand-inner-1.png" alt="">
                                 </div>
                              </div>
                              <div class="col wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".4s">
                                 <div class="ab-brand-item mb-25">
                                    <img src="home/assets/img/brand/brand-inner-2.png" alt="">
                                 </div>
                              </div>
                              <div class="col wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".6s">
                                 <div class="ab-brand-item mb-25">
                                    <img src="home/assets/img/brand/brand-inner-3.png" alt="">
                                 </div>
                              </div>
                              <div class="col wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".8s">
                                 <div class="ab-brand-item mb-25">
                                    <img src="home/assets/img/brand/brand-inner-4.png" alt="">
                                 </div>
                              </div>
                              <div class="col wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                                 <div class="ab-brand-item mb-25">
                                    <img src="home/assets/img/brand/brand-inner-5.png" alt="">
                                 </div>
                              </div>
                              <div class="col wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1s">
                                 <div class="ab-brand-item mb-25">
                                    <img src="home/assets/img/brand/brand-inner-6.png" alt="">
                                 </div>
                              </div>
                              <div class="col wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.1s">
                                 <div class="ab-brand-item mb-25">
                                    <img src="home/assets/img/brand/brand-inner-7.png" alt="">
                                 </div>
                              </div>
                              <div class="col wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.2s">
                                 <div class="ab-brand-item mb-25">
                                    <img src="home/assets/img/brand/brand-inner-8.png" alt="">
                                 </div>
                              </div>
                              <div class="col wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.3s">
                                 <div class="ab-brand-item mb-25">
                                    <img src="home/assets/img/brand/brand-inner-9.png" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--ab-brand-area-end -->

            <!--ab-company-area-start -->
            <div class="ab-company-area pt-105 pb-100">
               <div class="container">
                  <div class="row ab-company-section-space">
                     <div class="col-xl-6">
                        <div class="ab-company-section-box">
                           <h4 class="inner-section-subtitle">ABOUT THE COMPANY</h4>
                           <h3 class="tp-section-title">{!! get_cms('section_2_main_tittle','about','value') !!}</h3>
                        </div>
                     </div>
                     <div class="col-xl-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".5s">
                        <div class="ab-company-right">
                           <div class="ab-company-section-text">
                              <p class="pb-10">{{ get_cms('section_2_desc_1','about','value') }}</p>
                              <p class="pb-10">{{ get_cms('section_2_desc_2','about','value') }}</p>
                              <p><span>{{ get_cms('section_2_desc_3','about','value') }}</span></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-xl-4">
                        <div class="ab-company-video">
                           <a class="popup-video" href="https://www.youtube.com/watch?v=EW4ZYb3mCZk"><i class="fas fa-play"></i></a>
                           <span>Watch Demo</span>
                        </div>
                     </div>
                     <div class="col-xl-8">
                        <div class="row">
                           <div class="col-md-4 col-sm-4 mb-40">
                              <div class="ab-company-fun-fact-wrap d-flex justify-content-start">
                                 <div class="ab-company-fun-fact">
                                    <span>USED BY</span>
                                    <h4>{!! get_cms('counter_1_value','about','value') !!}</h4>
                                    <p>{{ get_cms('counter_1_tittle','about','value') }}</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-4 mb-40">
                              <div class="ab-company-fun-fact-wrap d-flex justify-content-md-center justify-content-left">
                                 <div class="ab-company-fun-fact">
                                    <span>VALUE</span>
                                    <h4>{!! get_cms('counter_2_value','about','value')  !!}</h4>
                                    <p>{{ get_cms('counter_2_tittle','about','value') }}</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-4 mb-40">
                              <div class="ab-company-fun-fact-wrap ab-company-border-none d-flex justify-content-md-center justify-content-left">
                                 <div class="ab-company-fun-fact">
                                    <span>IN</span>
                                    <h4>{!! get_cms('counter_3_value','about','value')  !!}</h4>
                                    <p>{{ get_cms('counter_3_tittle','about','value') }}</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--ab-company-area-end -->

            <!-- tp-about-area-start -->
            <div class="tp-about__area tp-about__pt-pb pb-160">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xl-6 col-lg-6 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".2s">
                        <div class="tp-about__img-wrapper text-center text-lg-end p-relative">
                           <div class="tp-about__bg-shape">
                              <img src="home/assets/img/about/about-bg-shape.png" alt="">
                           </div>
                           <div class="tp-about__main-img z-index">
                              <img src="home/assets/img/about/about-2.jpg" alt="">
                           </div>
                           <div class="tp-about__sub-img-1 d-none d-sm-block z-index-3">
                              <img src="home/assets/img/about/about-1.jpg" alt="">
                           </div>
                           <div class="tp-about__sub-img-2 d-none d-sm-block">
                              <img src="home/assets/img/about/about-3.jpg" alt="">
                           </div>
                           <div class="tp-about__sub-img-3 d-none d-sm-block z-index-3">
                              <img src="{{asset(get_cms('section_3_image_1','about','value'))}}" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".6s">
                        <div class="tp-about__right">
                           <div class="tp-about__section-box">
                              <h4 class="tp-section-subtitle">OVER 150K+ CLIENT</h4>
                              <h3 class="tp-section-title mb-15">{{ get_cms('section_3_main_tittle','about','value') }}
                              </h3>
                              <p>{!! get_cms('section_3_main_desc','about','value') !!}</p>
                           </div>
                           <div class="tp-about__list">
                              <ul>
                                 <li><i class="fal fa-check"></i>{{ get_cms('section_3_desc_1','about','value') }}</li>
                                 <li><i class="fal fa-check"></i>{{ get_cms('section_3_desc_2','about','value')  }}</li>
                                 <li><i class="fal fa-check"></i>{{ get_cms('section_3_desc_3','about','value') }}</li>
                              </ul>
                           </div>
                           <div class="tp-about__btn">
                              <a class="tp-btn tp-btn-inner tp-btn-hover alt-color-black" href="about.html">
                                 <span>About Us</span>
                                 <b></b>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- tp-about-area-end -->

            <!-- tp-team-area-start -->
            <div class="tp-team-area grey-bg pt-120 pb-95">
               <div class="container">
                  <div class="tp-team-section-wrapper tp-team-inner-section mb-70">
                     <div class="row align-items-end">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                           <div class="tp-team-section-box text-center text-sm-start">
                              <h5 class="inner-section-subtitle pb-10">THE TEAM</h5>
                              <h3 class="tp-section-title mb-0 text-black">Our Leaders</h3>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                           <div class="tp-team-top-content text-center text-md-end">
                              <a class="tp-btn-inner tp-btn-hover alt-color-orange" href="team-details.html">
                                 <span>View All</span>
                                 <b></b>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                    @foreach ($team as $data)

                     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50 tp-team-border-right tp-border-after-1 team-inner-border-right">
                        <div class="tp-team-item text-center tp-team-inner-title-color z-index">
                           <div class="tp-team-img">
                              <img src="{{asset($data->img)}}" alt="">
                           </div>
                           <div class="tp-team-content">
                              <h4 class="tp-team-title-sm"><a href="team-details.html">{{$data->name}}</a></h4>
                              <span>{{$data->profession}}</span>
                           </div>
                           <div class="tp-team-social">
                              <a class="icon-color-1" href="#">
                                 <i class="fab fa-facebook-f"></i>
                                 <span></span>
                              </a>
                              <a class="icon-color-2" href="#">
                                 <i class="fab fa-instagram"></i>
                                 <span></span>
                              </a>
                              <a class="icon-color-3" href="#">
                                 <i class="fab fa-twitter"></i>
                                 <span></span>
                              </a>
                              <a class="icon-color-4" href="#">
                                 <i class="fab fa-linkedin-in"></i>
                                 <span></span>
                              </a>
                           </div>
                        </div>
                     </div>
                     @endforeach

                  </div>
               </div>
            </div>
            <!-- tp-team-area-end -->

            <!-- tp-journey-area-start -->
            <div class="journey-area p-relative fix">
               <div class="journey-grey-bg grey-bg"></div>
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <div class="journey-section-box">
                           <h5 class="inner-section-subtitle pb-10">TIMELINE</h5>
                           <h3 class="ab-brand-title pb-0 mb-0">Journey Was Started</h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container-fluid g-0">
                  <div class="row g-0">
                     <div class="col-xl-12">
                        <div class="journey-slider-wrapper">
                           <div class="swiper-container journey-slider-active">
                              <div class="swiper-wrapper">
                                 <div class="swiper-slide">
                                    <div class="journey-slider-item p-relative">
                                       <div class="journey-stroke-text">
                                          <h2>01</h2>
                                       </div>
                                       <div class="journey-slider-meta">
                                       <span>OCT 2019</span>
                                       </div>
                                       <div class="journey-slider-content">
                                          <h4 class="journey-slider-title">Our Vision <br>
                                             Of a better Way</h4>
                                          <p>We envision sales teams having the tools <br>
                                             and talent they need to make remote <br> work.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="journey-slider-item p-relative">
                                       <div class="journey-stroke-text">
                                          <h2>02</h2>
                                       </div>
                                       <div class="journey-slider-meta">
                                       <span>OCT 2020</span>
                                       </div>
                                       <div class="journey-slider-content">
                                          <h4 class="journey-slider-title">Official <br>
                                          Beta Launch</h4>
                                          <p>We envision sales teams having the tools <br>
                                             and talent they need to make remote <br> work.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="journey-slider-item p-relative">
                                       <div class="journey-stroke-text">
                                          <h2>03</h2>
                                       </div>
                                       <div class="journey-slider-meta">
                                       <span>OCT 2021</span>
                                       </div>
                                       <div class="journey-slider-content">
                                          <h4 class="journey-slider-title">Rolling <br> Up
                                             Sleeves</h4>
                                          <p>We envision sales teams having the tools <br>
                                             and talent they need to make remote <br> work.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="journey-slider-item p-relative">
                                       <div class="journey-stroke-text">
                                          <h2>04</h2>
                                       </div>
                                       <div class="journey-slider-meta">
                                       <span>OCT 2022</span>
                                       </div>
                                       <div class="journey-slider-content">
                                          <h4 class="journey-slider-title">Design <br>
                                             Rewards In NYC</h4>
                                          <p>We envision sales teams having the tools <br>
                                             and talent they need to make remote <br> work.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="journey-slider-item p-relative">
                                       <div class="journey-stroke-text">
                                          <h2>05</h2>
                                       </div>
                                       <div class="journey-slider-meta">
                                       <span>Present</span>
                                       </div>
                                       <div class="journey-slider-content">
                                          <h4 class="journey-slider-title">Featured On <br>
                                             Envato</h4>
                                          <p>We envision sales teams having the tools <br>
                                             and talent they need to make remote <br> work.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="journey-slider-item p-relative">
                                       <div class="journey-stroke-text">
                                          <h2>06</h2>
                                       </div>
                                       <div class="journey-slider-meta">
                                       <span>OCT 2020</span>
                                       </div>
                                       <div class="journey-slider-content">
                                          <h4 class="journey-slider-title">Official <br>
                                          Beta Launch</h4>
                                          <p>We envision sales teams having the tools <br>
                                             and talent they need to make remote <br> work.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-scrollbar"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- tp-journey-area-end -->

            <!-- tp-job-area-start -->
            <div class="job-area pt-120 pb-120">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="job-section-box text-center mb-40">
                           <h4 class="inner-section-subtitle">Current Positions</h4>
                           <h3 class="tp-section-title">Join our Growing Team <br>
                              of Doers.</h3>
                        </div>
                     </div>
                  </div>
                  <div class="job-post-box">
                     <div class="row align-items-center">
                        <div class="col-lg-5 col-md-4">
                           <div class="job-post-info d-flex justify-content-start align-items-center">
                              <div class="job-post-category">
                                 <span>Product Designer</span>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                           <div class="job-post-wrapper d-flex align-items-center">
                              <div class="job-post-time d-flex align-items-center">
                                 <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 16.75C13.2802 16.75 16.75 13.2802 16.75 9C16.75 4.71979 13.2802 1.25 9 1.25C4.71979 1.25 1.25 4.71979 1.25 9C1.25 13.2802 4.71979 16.75 9 16.75Z" stroke="#5F6168" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9 5.7998V9.9998L11.8 11.3998" stroke="#5F6168" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                                 <span>Full-time</span>
                              </div>
                              <div class="job-post-location d-flex align-items-center">
                                 <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7.51463C1 3.9167 4.13401 1 8 1C11.866 1 15 3.9167 15 7.51463C15 11.0844 12.7658 15.2499 9.28007 16.7396C8.46748 17.0868 7.53252 17.0868 6.71993 16.7396C3.23416 15.2499 1 11.0844 1 7.51463Z" stroke="#5F6168" stroke-width="1.5"/>
                                    <path d="M10 8C10 9.10457 9.10457 10 8 10C6.89543 10 6 9.10457 6 8C6 6.89543 6.89543 6 8 6C9.10457 6 10 6.89543 10 8Z" stroke="#5F6168" stroke-width="1.5"/>
                                 </svg>
                                 <span>Newark, NJ</span>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                           <div class="job-post-apply-btn text-start text-md-end">
                              <a class="tp-btn-inner tp-btn-hover alt-color-orange" href="career-details.html"><span>Apply</span> <b></b></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="job-post-box">
                     <div class="row align-items-center">
                        <div class=" col-lg-5 col-md-4">
                           <div class="job-post-info d-flex justify-content-start align-items-center">
                              <div class="job-post-category">
                                 <span>Software Engineer</span>
                              </div>
                           </div>
                        </div>
                        <div class=" col-lg-4 col-md-5">
                           <div class="job-post-wrapper d-flex align-items-center">
                              <div class="job-post-time d-flex align-items-center">
                                 <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 16.75C13.2802 16.75 16.75 13.2802 16.75 9C16.75 4.71979 13.2802 1.25 9 1.25C4.71979 1.25 1.25 4.71979 1.25 9C1.25 13.2802 4.71979 16.75 9 16.75Z" stroke="#5F6168" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9 5.7998V9.9998L11.8 11.3998" stroke="#5F6168" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                                 <span>Full-time</span>
                              </div>
                              <div class="job-post-location d-flex align-items-center">
                                 <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7.51463C1 3.9167 4.13401 1 8 1C11.866 1 15 3.9167 15 7.51463C15 11.0844 12.7658 15.2499 9.28007 16.7396C8.46748 17.0868 7.53252 17.0868 6.71993 16.7396C3.23416 15.2499 1 11.0844 1 7.51463Z" stroke="#5F6168" stroke-width="1.5"/>
                                    <path d="M10 8C10 9.10457 9.10457 10 8 10C6.89543 10 6 9.10457 6 8C6 6.89543 6.89543 6 8 6C9.10457 6 10 6.89543 10 8Z" stroke="#5F6168" stroke-width="1.5"/>
                                 </svg>
                                 <span>London, UK</span>
                              </div>
                           </div>
                        </div>
                        <div class=" col-lg-3 col-md-3">
                           <div class="job-post-apply-btn text-start text-md-end">
                              <a class="tp-btn-inner tp-btn-hover alt-color-orange" href="career-details.html"><span>Apply</span> <b></b></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="job-post-box">
                     <div class="row align-items-center">
                        <div class=" col-lg-5 col-md-4">
                           <div class="job-post-info d-flex justify-content-start align-items-center">
                              <div class="job-post-category">
                                 <span>Junior Frontend Developer</span>
                              </div>
                           </div>
                        </div>
                        <div class=" col-lg-4 col-md-5">
                           <div class="job-post-wrapper d-flex align-items-center">
                              <div class="job-post-time d-flex align-items-center">
                                 <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 16.75C13.2802 16.75 16.75 13.2802 16.75 9C16.75 4.71979 13.2802 1.25 9 1.25C4.71979 1.25 1.25 4.71979 1.25 9C1.25 13.2802 4.71979 16.75 9 16.75Z" stroke="#5F6168" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9 5.7998V9.9998L11.8 11.3998" stroke="#5F6168" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                                 <span>Full-time</span>
                              </div>
                              <div class="job-post-location d-flex align-items-center">
                                 <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7.51463C1 3.9167 4.13401 1 8 1C11.866 1 15 3.9167 15 7.51463C15 11.0844 12.7658 15.2499 9.28007 16.7396C8.46748 17.0868 7.53252 17.0868 6.71993 16.7396C3.23416 15.2499 1 11.0844 1 7.51463Z" stroke="#5F6168" stroke-width="1.5"/>
                                    <path d="M10 8C10 9.10457 9.10457 10 8 10C6.89543 10 6 9.10457 6 8C6 6.89543 6.89543 6 8 6C9.10457 6 10 6.89543 10 8Z" stroke="#5F6168" stroke-width="1.5"/>
                                 </svg>
                                 <span>Brooklyn, NY</span>
                              </div>
                           </div>
                        </div>
                        <div class=" col-lg-3 col-md-3">
                           <div class="job-post-apply-btn text-start text-md-end">
                              <a class="tp-btn-inner tp-btn-hover alt-color-orange" href="career-details.html"><span>Apply</span> <b></b></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="job-post-box">
                     <div class="row align-items-center">
                        <div class=" col-lg-5 col-md-4">
                           <div class="job-post-info d-flex justify-content-start align-items-center">
                              <div class="job-post-category">
                                 <span>Finance Executive</span>
                              </div>
                           </div>
                        </div>
                        <div class=" col-lg-4 col-md-5">
                           <div class="job-post-wrapper d-flex align-items-center">
                              <div class="job-post-time d-flex align-items-center">
                                 <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 16.75C13.2802 16.75 16.75 13.2802 16.75 9C16.75 4.71979 13.2802 1.25 9 1.25C4.71979 1.25 1.25 4.71979 1.25 9C1.25 13.2802 4.71979 16.75 9 16.75Z" stroke="#5F6168" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9 5.7998V9.9998L11.8 11.3998" stroke="#5F6168" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                                 <span>Full-time</span>
                              </div>
                              <div class="job-post-location d-flex align-items-center">
                                 <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7.51463C1 3.9167 4.13401 1 8 1C11.866 1 15 3.9167 15 7.51463C15 11.0844 12.7658 15.2499 9.28007 16.7396C8.46748 17.0868 7.53252 17.0868 6.71993 16.7396C3.23416 15.2499 1 11.0844 1 7.51463Z" stroke="#5F6168" stroke-width="1.5"/>
                                    <path d="M10 8C10 9.10457 9.10457 10 8 10C6.89543 10 6 9.10457 6 8C6 6.89543 6.89543 6 8 6C9.10457 6 10 6.89543 10 8Z" stroke="#5F6168" stroke-width="1.5"/>
                                 </svg>
                                 <span>Newark, NJ</span>
                              </div>
                           </div>
                        </div>
                        <div class=" col-lg-3 col-md-3">
                           <div class="job-post-apply-btn text-start text-md-end">
                              <a class="tp-btn-inner tp-btn-hover alt-color-orange" href="career-details.html"><span>Apply</span> <b></b></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="job-post-box">
                     <div class="row align-items-center">
                        <div class=" col-lg-5 col-md-4">
                           <div class="job-post-info d-flex justify-content-start align-items-center">
                              <div class="job-post-category">
                                 <span>Junior Copywriter</span>
                              </div>
                           </div>
                        </div>
                        <div class=" col-lg-4 col-md-5">
                           <div class="job-post-wrapper d-flex align-items-center">
                              <div class="job-post-time d-flex align-items-center">
                                 <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 16.75C13.2802 16.75 16.75 13.2802 16.75 9C16.75 4.71979 13.2802 1.25 9 1.25C4.71979 1.25 1.25 4.71979 1.25 9C1.25 13.2802 4.71979 16.75 9 16.75Z" stroke="#5F6168" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9 5.7998V9.9998L11.8 11.3998" stroke="#5F6168" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                                 <span>Full-time</span>
                              </div>
                              <div class="job-post-location d-flex align-items-center">
                                 <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 7.51463C1 3.9167 4.13401 1 8 1C11.866 1 15 3.9167 15 7.51463C15 11.0844 12.7658 15.2499 9.28007 16.7396C8.46748 17.0868 7.53252 17.0868 6.71993 16.7396C3.23416 15.2499 1 11.0844 1 7.51463Z" stroke="#5F6168" stroke-width="1.5"/>
                                    <path d="M10 8C10 9.10457 9.10457 10 8 10C6.89543 10 6 9.10457 6 8C6 6.89543 6.89543 6 8 6C9.10457 6 10 6.89543 10 8Z" stroke="#5F6168" stroke-width="1.5"/>
                                 </svg>
                                 <span>London, UK</span>
                              </div>
                           </div>
                        </div>
                        <div class=" col-lg-3 col-md-3">
                           <div class="job-post-apply-btn text-start text-md-end">
                              <a class="tp-btn-inner tp-btn-hover alt-color-orange" href="career-details.html"><span>Apply</span> <b></b></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- tp-job-area-end -->

            <!-- tp-cta-area-start -->
            <div class="tp-cta-area p-relative">
               <div class="tp-cta-grey-bg grey-bg-2"></div>
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <div class="tp-cta-bg" data-background="home/assets/img/cta/cta-bg.jpg">
                           <div class="tp-cta-content tp-inner-font text-center">
                              <h3 class="tp-section-title text-white">{{get_cms('section_7_main_tittle','home','value')}}</h3>
                              <p>{!! get_cms('section_7_main_desc','home','value') !!}</p>
                                 <a class="tp-btn-inner white-bg text-black" href="service-details.html">Get Started Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- tp-cta-area-end -->

         </main>

         @endsection
