
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
                         <div class="about-banner-content">
                            <h4 class="about-banner-title" data-parallax='{"y": 1000, "smoothness": 10}'>
                              {!!get_cms('section_1_main_tttle','service','value') !!}
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
                      <div class="about-img about-img-height p-relative" data-background="{{asset(get_cms('section_1_main_image','service','value'))}}">
                         <div class="about-img-content">
                            <h4 class="about-img-title" data-parallax='{"y": 1000, "smoothness": 10}'>
                                {!!get_cms('section_1_main_tttle','service','value')!!}
                            </h4>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- tp-breadcrumb-header-area-end -->

          <!-- tp-service-area-strat -->
          <div class="tp-service-area pb-120 z-index">
             <div class="container">
                <div class="row">
                   <div class="col-xl-12">
                      <div class="tp-service-section-wrapper mb-60 d-flex justify-content-between align-items-end">
                         <h3 class="tp-section-title tp-title-anim">{!!get_cms('section_2_main_tittle','service','value')!!}</h3>
                            <a class="tp-btn-inner tp-btn-hover alt-color-black wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".3s" href="service-details.html">
                               <span>See All Features</span>
                               <b></b>
                            </a>
                      </div>
                   </div>
                </div>
                <div class="row">
                   <div class="col-xl-8 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                      <div class="tp-service-3-item mb-30 p-relative z-index" data-background="{{asset(get_cms('section_2_bg_image','service','value'))}}">
                         <div class="tp-service-3-icon">
                            <img src="" alt="">
                         </div>
                         <div class="tp-service-3-content">
                            <span>CRM Management</span>
                            <h4 class="tp-service-3-title-sm"><a href="service-details.html">{!!get_cms('section_2_tittle_1','service','value')!!}</a></h4>
                         </div>
                         <div class="tp-service-3-btn">
                            <a class="tp-btn-white-solid" href="service-details.html">Learn More</a>
                         </div>
                         <div class="tp-service-3-shape">
                            <img src="home/assets/img/service/service-shape-3-1.png" alt="">
                         </div>
                      </div>
                   </div>
                   @foreach($service as $service)
                   <div class="col-xl-4 col-lg-6 col-md-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                      <div class="tp-service-sm-item mb-30 d-flex flex-column justify-content-between">
                         <div class="tp-service-sm-icon">
                            <svg width="66" height="53" viewBox="0 0 66 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path d="M10.5323 8.40774C4.17742 10.9497 1 12.2206 1 13.8C1 15.3794 4.17742 16.6503 10.5323 19.1923L19.5194 22.7871C25.8742 25.329 29.0516 26.6 33 26.6C36.9484 26.6 40.1258 25.329 46.4806 22.7871L55.4677 19.1923C61.8226 16.6503 65 15.3794 65 13.8C65 12.2206 61.8226 10.9497 55.4677 8.40774L46.4806 4.8129C40.1258 2.27097 36.9484 1 33 1C29.9474 1 27.3556 1.7597 23.4 3.27909" stroke="CurrentColor" stroke-width="1.5" stroke-linecap="round"/>
                               <path d="M13.0516 20.2002L10.5323 21.2079C4.17742 23.7499 1 25.0208 1 26.6002C1 28.1795 4.17742 29.4505 10.5323 31.9925L19.5194 35.5873C25.8742 38.1292 29.0516 39.4002 33 39.4002C36.9484 39.4002 40.1258 38.1292 46.4806 35.5873L55.4677 31.9925C61.8226 29.4505 65 28.1795 65 26.6002C65 25.0208 61.8226 23.7499 55.4677 21.2079L52.9484 20.2002" stroke="CurrentColor" stroke-width="1.5"/>
                               <path d="M55.4677 44.7923C61.8226 42.2503 65 40.9794 65 39.4C65 37.8206 61.8226 36.5497 55.4677 34.0077L52.9484 33M13.0516 33L10.5323 34.0077C4.17742 36.5497 1 37.8206 1 39.4C1 40.9794 4.17742 42.2503 10.5323 44.7923L19.5194 48.3871C25.8742 50.929 29.0516 52.2 33 52.2C36.0526 52.2 38.6444 51.4403 42.6 49.9209" stroke="CurrentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                         </div>
                         <div class="tp-service-sm-content">
                            <span>{{$service->get_category->name ?? 'Project management'}}</span>
                            <h3 class="tp-service-sm-title"><a href="{{ route('service.details', $service->id)}}">{{$service->name ?? 'Automate Workflows <br> and Monitor your Sales.'}} </a></h3>
                            <div class="tp-service-sm-link">
                               <a href="{{route ('service.details' , $service->id)}}">Learn More <i class="far fa-arrow-right"></i></a>
                            </div>
                         </div>
                      </div>
                   </div>
                   @endforeach
                </div>
             </div>
          </div>
          <!-- tp-service-area-end -->

          <!-- tp-card-area-start -->
          <div class="tp-card-area tp-card-space pt-100 pb-175">
             <div class="container">
                <div class="row">
                   <div class="col-xl-6 col-lg-6 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".3s">
                      <div class="tp-card-thumb-wrapper p-relative">
                         <div class="tp-card-main-img">
                            <img src="home/assets/img/card/card-bg.png" alt="">
                         </div>
                         <div class="tp-card-img-1">
                            <img src="home/assets/img/card/card-shape-1.png" alt="">
                         </div>
                         <div class="tp-card-img-2 d-none d-sm-block">
                            <img src="home/assets/img/card/card-img-1.png" alt="">
                         </div>
                         <div class="tp-card-img-3 d-none d-sm-block">
                            <img src="home/assets/img/card/card-img-2.png" alt="">
                         </div>
                         <div class="tp-card-img-4 d-none d-sm-block">
                            <img src="home/assets/img/card/card-img-3.png" alt="">
                         </div>
                         <div class="tp-card-img-5">
                            <img src="home/assets/img/card/card-img-4.png" alt="">
                         </div>
                      </div>
                   </div>
                   <div class="col-xl-6 col-lg-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".5s">
                      <div class="tp-card-title-box">
                         <h3 class="tp-section-title pb-15">{!!get_cms('section_3_main_tittle','service','value')!!}</h3>
                         <p>{!!get_cms('section_3_main_desc','service','value')!!}</p>
                            <a class="tp-btn-inner tp-btn-hover alt-color-black" href="service-details.html">
                               <span>Get Started Free</span>
                               <b></b>
                            </a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- tp-card-area-end -->

          <!-- tp-sales-area-start -->
          <div class="tp-sales-area tp-sales-space">
             <div class="container">
                <div class="row align-items-center">
                   <div class="col-xl-6 col-lg-6 order-1 order-md-1 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".3s">
                      <div class="tp-sales-section-box pb-20">
                         <h3 class="tp-section-title pb-15">{!!get_cms('section_4_main_tittle','service','value')!!}</h3>
                         <p>{!!get_cms('section_4_main_desc','service','value')!!} </p>
                      </div>
                      <div class="tp-sales-feature">
                         <ul>
                            <li class="yellow-1"><span><i class="far fa-check"></i> <em>{{get_cms('section_4_sub_tittle_1','service','value')}}</em></span></li>
                            <li class="purple-2"><span><i class="far fa-check"></i> <em>{{get_cms('section_4_sub_tittle_2','service','value')}}</em></span></li>
                            <li class="green-3"><span><i class="far fa-check"></i> <em>{{get_cms('section_4_sub_tittle_3','service','value')}}</em></span></li>
                         </ul>
                      </div>
                   </div>
                   <div class="col-xl-6 col-lg-6 order-0 order-md-2 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".5s">
                      <div class="tp-sales-img-wrapper p-relative text-end">
                         <div class="tp-sales-main-thumb">
                            <img src="home/assets/img/card/sale-1.png" alt="">
                         </div>
                         <div class="tp-sales-sub-img-1">
                            <img src="home/assets/img/card/sale-2.png" alt="">
                         </div>
                         <div class="tp-sales-sub-img-2 d-none d-sm-block">
                            <img src="home/assets/img/card/sale-3.png" alt="">
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- tp-sales-area-end -->

          <!-- tp-testimonial-area-start -->
          <div class="tp-testimonial-area pt-130 pb-130 fix" data-background="home/assets/img/testimonial/testi-bg-5-1.jpg">
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
                                              <img src="home/assets/img/testimonial/testi-icon-5-4.png" alt="">
                                           </div>
                                           <div class="tp-testimonial-five-author-info">
                                              <h4>Joann J.</h4>
                                              <span>Community Organiser</span>
                                           </div>
                                        </div>
                                        <div class="tp-testimonial-five-brand d-none d-sm-block">
                                           <img src="home/assets/img/testimonial/testi-logo-5-2.png" alt="">
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
                                              <img src="home/assets/img/testimonial/testi-icon-5-2.png" alt="">
                                           </div>
                                           <div class="tp-testimonial-five-author-info">
                                              <h4>Steven G.</h4>
                                              <span>Community Organiser</span>
                                           </div>
                                        </div>
                                        <div class="tp-testimonial-five-brand d-none d-sm-block">
                                           <img src="home/assets/img/testimonial/testi-logo-5-1.png" alt="">
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
                                              <img src="home/assets/img/testimonial/testi-icon-5-3.png" alt="">
                                           </div>
                                           <div class="tp-testimonial-five-author-info">
                                              <h4>Gary M. Adams</h4>
                                              <span>Community Organiser</span>
                                           </div>
                                        </div>
                                        <div class="tp-testimonial-five-brand d-none d-sm-block">
                                           <img src="home/assets/img/testimonial/testi-logo-5-3.png" alt="">
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
                                              <img src="home/assets/img/testimonial/testi-icon-5-4.png" alt="">
                                           </div>
                                           <div class="tp-testimonial-five-author-info">
                                              <h4>Edward G. Hall</h4>
                                              <span>Community Organiser</span>
                                           </div>
                                        </div>
                                        <div class="tp-testimonial-five-brand d-none d-sm-block">
                                           <img src="home/assets/img/testimonial/testi-logo-5-3.png" alt="">
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
                                              <img src="home/assets/img/testimonial/testi-icon-5-1.png" alt="">
                                           </div>
                                           <div class="tp-testimonial-five-author-info">
                                              <h4>Erma P. Brown</h4>
                                              <span>Community Organiser</span>
                                           </div>
                                        </div>
                                        <div class="tp-testimonial-five-brand d-none d-sm-block">
                                           <img src="home/assets/img/testimonial/testi-logo-5-2.png" alt="">
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

          <!-- tp-faq-area-start -->
          <div class="tp-faq-area pt-140 pb-120">
             <div class="container">
                <div class="row">
                   <div class="col-xl-6 col-lg-6 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".3s">
                      <div class="tp-faq-left-wrapper p-relative">
                         <div class="tp-faq-section-box tp-inner-font tp-inner-faq-box pb-20">
                            <h4 class="inner-section-subtitle">Support</h4>
                            <h3 class="tp-section-title">{!! get_cms('section_6_main_tittle','home','value') !!}</h3>
                            <p>{!! get_cms('section_6_main_decs','home','value')!!}</p>
                         </div>
                         <div class="tp-faq-btn">
                            <a class="tp-btn-inner tp-btn-hover alt-color-black" href="contact.html">
                               <span>Get in Touch</span>
                               <b></b>
                            </a>
                         </div>
                         <div class="tp-faq-img">
                            <img src="home/assets/img/faq/faq-1.png" alt="">
                         </div>
                         <div class="tp-faq-border-shape d-none">
                            <img src="home/assets/img/faq/faq-border-shape.png" alt="">
                         </div>
                      </div>
                   </div>
                   <div class="col-xl-6 col-lg-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".5s">
                      <div class="tp-custom-accordion">
                         <div class="accordion tp-inner-font" id="accordionExample">
                            <div class="accordion-items">
                               <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                     {{ get_cms('section_6_sub_tittle_1','home','value')}}
                                     <span class="accordion-btn"></span>
                                  </button>
                               </h2>
                               <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                  data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    {!! get_cms('section_6_sub_desc_1','home','value')!!}
                                  </div>
                               </div>
                            </div>
                            <div class="accordion-items tp-faq-active">
                               <h2 class="accordion-header" id="headingTwo">
                                  <button class="accordion-buttons" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                     {{ get_cms('section_6_sub_tittle_2','home','value')}}
                                     <span class="accordion-btn"></span>
                                  </button>
                               </h2>
                               <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                                  data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    {!! get_cms('section_6_sub_desc_2','home','value')!!}
                                  </div>
                               </div>
                            </div>
                            <div class="accordion-items">
                               <h2 class="accordion-header" id="headingThree">
                                  <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                     {{ get_cms('section_6_sub_tittle_3','home','value')}}
                                     <span class="accordion-btn"></span>
                                  </button>
                               </h2>
                               <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                  data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    {!! get_cms('section_6_sub_desc_3','home','value')!!}
                                  </div>
                               </div>
                            </div>
                            <div class="accordion-items">
                               <h2 class="accordion-header" id="headingFour">
                                  <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                     {{ get_cms('section_6_sub_tittle_4','home','value')}}
                                     <span class="accordion-btn"></span>
                                  </button>
                               </h2>
                               <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                  data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    {!! get_cms('section_6_sub_desc_4','home','value')!!}
                                  </div>
                               </div>
                            </div>
                            <div class="accordion-items">
                               <h2 class="accordion-header" id="headingFive">
                                  <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                     {{ get_cms('section_6_sub_tittle_5','home','value')}}
                                     <span class="accordion-btn"></span>
                                  </button>
                               </h2>
                               <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                  data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    {!! get_cms('section_6_sub_desc_5','home','value')!!}
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- tp-faq-area-end -->

          <!-- tp-cta-area-start -->
          <div class="tp-cta-area p-relative">
             <div class="tp-cta-grey-bg grey-bg-2"></div>
             <div class="container">
                <div class="row">
                   <div class="col-12">
                      <div class="tp-cta-bg" data-background="home/assets/img/cta/cta-bg.jpg">
                         <div class="tp-cta-content tp-inner-font text-center">
                            <h3 class="tp-section-title text-white">{{ get_cms('section_7_main_tittle','home','value')}}</h3>
                            <p>{!! get_cms('section_1_main_tttle','home','value') !!}</p>
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
