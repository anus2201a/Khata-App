
@extends('home.layouts.app')
@section('content')


<div id="smooth-wrapper">
    <div id="smooth-content">

       <main>

       <!-- breadcrumb-area-start -->
       <div class="breadcrumb__area breadcrumb-height p-relative blue-bg-2">
          <div class="breadcrumb__shape-1">
             <img src="{{asset('home/assets/img/breadcrumb/breadcrumb-shape-1.png')}}" alt="">
          </div>
          <div class="breadcrumb__shape-2">
             <img src="{{asset('home/assets/img/breadcrumb/breadcrumb-shape-2.png')}}" alt="">
          </div>
          <div class="container">
             <div class="row">
                <div class="col-xl-8 col-lg-7">
                   <div class="breadcrumb__content">
                      <h3 class="breadcrumb__title tp-char-animation">Web Design</h3>
                      <div class="breadcrumb__list tp-title-anim">
                         <span class="child-one"><a href="#">Home</a></span>
                         <span class="dvdr"><i class="fal fa-angle-right"></i></span>
                         <span >Help Desk Service Details</span>
                      </div>
                   </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-lg-4 text-center text-md-end">
                   <div class="breadcrumb__img p-relative text-start z-index">
                      <img class="z-index-3" src="{{asset($data->image ?? 'home/assets/img/breadcrumb/breadcrumb-3.png')}}" alt="">
                      <div class="breadcrumb__sub-img wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".4s">
                         <img src="{{asset($data->image ?? 'home/assets/img/breadcrumb/breadcrumb-sub-1.png')}}" alt="">
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!-- breadcrumb-area-end -->

       <!-- service-details-area-start -->
       <div class="sv-details-area sv-details-space pt-100 pb-100">
          <div class="container">
             <div class="row">
                <div class="col-xl-4 col-lg-4">
                   <div class="sv-details-widget">
                      <div class="sv-details-category mb-30">
                         <div class="sv-details-category-title">
                            <h4 class="sv-details-title-sm">Service Category</h4>
                         </div>
                         <div class="sv-details-category-list">
                            <ul>
                                @foreach($category as $data)
                               <li class="{{$data->id == $service_detail->category ? 'active' : ''}}">
                                  <a href="#"><span>{{$data->name ?? 'Web Design'}}</span><i class="fal fa-angle-right"></i></a>
                               </li>
                               {{-- <li class="active">
                                  <a href="#"><span>Web Design</span><i class="fal fa-angle-right"></i></a>
                               </li>
                               <li>
                                  <a href="#"><span>Mobile Application</span><i class="fal fa-angle-right"></i></a>
                               </li>
                               <li>
                                  <a href="#"><span>Development</span><i class="fal fa-angle-right"></i></a>
                               </li>
                               <li>
                                  <a href="#"><span>Illusutration</span><i class="fal fa-angle-right"></i></a>
                               </li> --}}
                               @endforeach
                            </ul>
                         </div>
                      </div>
                      <div class="tp-service__dashboard mb-30" data-background="{{asset('home/assets/img/service/sv-bg.jpg')}}">
                         <div class="tp-service__top-content">
                            <h3 class="tp-service__title-white">Data Analysis <br> Tools & Methods</h3>
                            <p>Lorem Ipsum is simply dummy text <br> of the printing</p>
                            <a class="tp-btn-orange tp-btn-hover alt-color-white" href="#">
                               <span>Work with Us</span>
                               <b></b>
                            </a>
                         </div>
                         <div class="tp-service__dashdboard-sm-img">
                            <img class="wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".3s" src="{{asset('home/assets/img/service/sv-dashbord.png')}}" alt="">
                         </div>
                      </div>
                      <div class="sv-details-social-box mb-30">
                         <h4 class="sv-details-title-sm">Share it.</h4>
                         <div class="sv-details-social-link">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                         </div>
                      </div>
                   </div>
                </div>
                

                <div class="col-xl-8 col-lg-8">
                   <div class="sv-details-wrapper">
                      <div class="sv-details-thumb mb-45">
                         <img class="w-100" src="{{asset($service_detail->image ?? 'home/assets/img/service/sv-details-1.jpg')}}" alt="">
                      </div>
                      <div class="sv-details-title-box mb-55">
                         <h4 class="sv-details-title">{{$service_detail->name ?? 'Automate Workflows and Monitor your Sales.'}}</h4>
                         <p>{{$service_detail->description ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum, orci at
                            dapibus, massa ante pharetra tellus. Maecenas interdum, orci at euismod dapibus.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.'}}</p>
                      </div>
                      <div class="sv-details-text mb-35">
                         <h4 class="sv-details-text-title pb-10">Going Beyond the Usual</h4>
                         <ul>
                            <li>
                               <i class="fal fa-check"></i>
                               <p>
                                  Product Quality: <br>
                                  <span>Automatically syncs across all your devices. You can also access....</span>
                               </p>
                            </li>
                            <li>
                               <i class="fal fa-check"></i>
                               <p>
                                  On Demand Design: <br>
                                  <span>Images, videos, PDFs and audio files are supported.</span>
                               </p>
                            </li>
                            <li>
                               <i class="fal fa-check"></i>
                               <p>
                                  Choice of Service:
                                  <span>Whatever your business needs, you can choose a service.</span>
                               </p>
                            </li>
                         </ul>
                      </div>
                      <div class="sv-details-text-2">
                         <h4 class="sv-details-text-title">Overview</h4>
                         <p>{{$service_detail->overview ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum,
                            orci at dapibus, massa ante pharetra tellus. Maecenas interdum, orci at euismod
                            dapibus. Lorem ipsum dolor sit amet.!'}}</p>
                      </div>
                      <div class="tp-faq-area pt-50">
                         <div class="container p-0">
                            <div class="row g-0">
                               <div class="col-xl-12">
                                   <h4 class="sv-details-title">Any Questions find here.</h4>
                                   <div class="tp-custom-accordion">
                                       <div class="accordion tp-inner-font" id="accordionExample">
                                           @foreach($service_faqs as $service_faq)
                                           <div class="accordion-items">
                                               <h2 class="accordion-header" id="headingOne">
                                               <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                  data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  {{$service_faq->question ?? 'Do I need to change banks?'}}
                                                  <span class="accordion-btn"></span>
                                               </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                               data-bs-parent="#accordionExample">
                                               <div class="accordion-body">
                                                {{$service_faq->answer ?? 'The Softec Shop is built right into your account dashboard, and is accessible
                                                immediately after signing up.'}}
                                               </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!-- service-details-area-end -->

       <!-- tp-testimonial-area-start -->
       <div class="tp-testimonial-area pt-130 pb-130 fix" data-background="{{asset('home/assets/img/testimonial/testi-bg-5-1.jpg')}}">
          <div class="container">
             <div class="row align-items-end tp-testimonial-five-section-space">
                <div class="col-md-8">
                   <div class="tp-testimonial-five-section-box">
                      <span class="tp-section-subtitle-5">CLIENTS & PROJECTS</span>
                      <h3 class="tp-section-title-5">About Customer <span>Stories</span></h3>
                </div>
                </div>
                <div class="col-md-4">
                   <div class="tp-testimonial-five-arrow d-flex align-items-center justify-content-start justify-content-md-end">
                      <div class="test-next">
                         <button><i class="far fa-arrow-left"></i></button>
                      </div>
                      <div class="test-prev">
                         <button><i class="far fa-arrow-right"></i></button>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="container-fluid p-0">
             <div class="row g-0">
                <div class="col-12">
                   <div class="tp-testimonial-five-slider-section">
                      <div class=" swiper-container testimonial-five-slider-active">
                         <div class="swiper-wrapper">
                            <div class="swiper-slide">
                               <div class="tp-testimonial-five-item">
                                  <div class="tp-testimonial-five-wrapper d-flex justify-content-between align-items-center">
                                     <div class="tp-testimonial-five-top-info d-flex align-items-center">
                                        <div class="tp-testimonial-five-avata">
                                           <img src="{{asset('home/assets/img/testimonial/testi-icon-5-4.png')}}" alt="">
                                        </div>
                                        <div class="tp-testimonial-five-author-info">
                                           <h4>Joann J.</h4>
                                           <span>Community Organiser</span>
                                        </div>
                                     </div>
                                     <div class="tp-testimonial-five-brand d-none d-sm-block">
                                        <img src="{{asset('home/assets/img/testimonial/testi-logo-5-2.png')}}" alt="">
                                     </div>
                                  </div>
                                  <div class="tp-testimonial-five-content">
                                     <p>“ This is really awesome. many small businessmen are
                                        suffering from this service in different platform and the
                                        lovers are always looking this kind of feature on
                                        their own website. ”
                                     </p>
                                  </div>
                               </div>
                            </div>
                            <div class="swiper-slide">
                               <div class="tp-testimonial-five-item">
                                  <div class="tp-testimonial-five-wrapper d-flex justify-content-between align-items-center">
                                     <div class="tp-testimonial-five-top-info d-flex align-items-center">
                                        <div class="tp-testimonial-five-avata">
                                           <img src="{{asset('home/assets/img/testimonial/testi-icon-5-2.png')}}" alt="">
                                        </div>
                                        <div class="tp-testimonial-five-author-info">
                                           <h4>Steven G.</h4>
                                           <span>Community Organiser</span>
                                        </div>
                                     </div>
                                     <div class="tp-testimonial-five-brand d-none d-sm-block">
                                        <img src="{{asset('home/assets/img/testimonial/testi-logo-5-1.png')}}" alt="">
                                     </div>
                                  </div>
                                  <div class="tp-testimonial-five-content">
                                     <p>“ This is really awesome. many small businessmen are
                                        suffering from this service in different platform and the
                                        lovers are always looking this kind of feature on
                                        their own website. ”
                                     </p>
                                  </div>
                               </div>
                            </div>
                            <div class="swiper-slide">
                               <div class="tp-testimonial-five-item">
                                  <div class="tp-testimonial-five-wrapper d-flex justify-content-between align-items-center">
                                     <div class="tp-testimonial-five-top-info d-flex align-items-center">
                                        <div class="tp-testimonial-five-avata">
                                           <img src="{{asset('home/assets/img/testimonial/testi-icon-5-3.png')}}" alt="">
                                        </div>
                                        <div class="tp-testimonial-five-author-info">
                                           <h4>Gary M. Adams</h4>
                                           <span>Community Organiser</span>
                                        </div>
                                     </div>
                                     <div class="tp-testimonial-five-brand d-none d-sm-block">
                                        <img src="{{asset('home/assets/img/testimonial/testi-logo-5-3.png')}}" alt="">
                                     </div>
                                  </div>
                                  <div class="tp-testimonial-five-content">
                                     <p>“ This is really awesome. many small businessmen are
                                        suffering from this service in different platform and the
                                        lovers are always looking this kind of feature on
                                        their own website. ”
                                     </p>
                                  </div>
                               </div>
                            </div>
                            <div class="swiper-slide">
                               <div class="tp-testimonial-five-item">
                                  <div class="tp-testimonial-five-wrapper d-flex justify-content-between align-items-center">
                                     <div class="tp-testimonial-five-top-info d-flex align-items-center">
                                        <div class="tp-testimonial-five-avata">
                                           <img src="{{asset('home/assets/img/testimonial/testi-icon-5-4.png')}}" alt="">
                                        </div>
                                        <div class="tp-testimonial-five-author-info">
                                           <h4>Edward G. Hall</h4>
                                           <span>Community Organiser</span>
                                        </div>
                                     </div>
                                     <div class="tp-testimonial-five-brand d-none d-sm-block">
                                        <img src="{{asset('home/assets/img/testimonial/testi-logo-5-3.png')}}" alt="">
                                     </div>
                                  </div>
                                  <div class="tp-testimonial-five-content">
                                     <p>“ This is really awesome. many small businessmen are
                                        suffering from this service in different platform and the
                                        lovers are always looking this kind of feature on
                                        their own website. ”
                                     </p>
                                  </div>
                               </div>
                            </div>
                            <div class="swiper-slide">
                               <div class="tp-testimonial-five-item">
                                  <div class="tp-testimonial-five-wrapper d-flex justify-content-between align-items-center">
                                     <div class="tp-testimonial-five-top-info d-flex align-items-center">
                                        <div class="tp-testimonial-five-avata">
                                           <img src="{{asset('home/assets/img/testimonial/testi-icon-5-1.png')}}" alt="">
                                        </div>
                                        <div class="tp-testimonial-five-author-info">
                                           <h4>Erma P. Brown</h4>
                                           <span>Community Organiser</span>
                                        </div>
                                     </div>
                                     <div class="tp-testimonial-five-brand d-none d-sm-block">
                                        <img src="{{asset('home/assets/img/testimonial/testi-logo-5-2.png')}}" alt="">
                                     </div>
                                  </div>
                                  <div class="tp-testimonial-five-content">
                                     <p>“ This is really awesome. many small businessmen are
                                        suffering from this service in different platform and the
                                        lovers are always looking this kind of feature on
                                        their own website. ”
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
       <!-- tp-testimonial-area-end -->

       </main>
         @endsection
