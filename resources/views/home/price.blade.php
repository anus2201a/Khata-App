
@extends('home.layouts.app')
@section('content')


   <div id="smooth-wrapper">
      <div id="smooth-content">

      <main>

         <!-- breadcrumb-area-start -->
         <div class="breadcrumb__area breadcrumb-ptb-5 p-relative blue-bg-2">
            <div class="breadcrumb__shape-1">
               <img src="home/assets/img/breadcrumb/breadcrumb-shape-1.png" alt="">
            </div>
            <div class="breadcrumb__shape-2">
               <img src="home/assets/img/breadcrumb/breadcrumb-shape-2.png" alt="">
            </div>
            <div class="container">
               <div class="row align-items-end">
                  <div class="col-xl-9 col-lg-7 col-md-7">
                     <div class="price-banner z-index-3">
                        <div class="price-banner-title-box">
                           <h3 class="price-banner-title tp-char-animation">Pricing plans</h3>
                           <p>Clear, affordable plans for every team and requirement.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-5 col-md-5">
                     <div class="tp-price__btn-box tp-price__btn-inner">
                        <div class="tp-price__btn-line d-none d-md-block">
                           <svg width="56" height="58" viewBox="0 0 56 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.164835 56.549C40.9814 63.3663 32.9699 -14.7417 50.2037 30.0803C67.4374 74.9024 -21.1494 2.27453 55.6761 0.848635" stroke="white" stroke-dasharray="3 3"/>
                           </svg>
                        </div>
                        <div class="tp-price__btn-offer-tag d-none d-md-block">
                           <span>SAVE <br> 35%</span>
                        </div>
                        <nav>
                           <div class="nav nav-tab tp-price__btn-bg" id="nav-tab" role="tablist">
                           <button class="nav-link active monthly" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Monthly</button>
                           <button class="nav-link yearly" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Yearly</button>
                           <span class="test"></span>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- breadcrumb-area-end -->

         <!-- tp-price-area-start -->
         <div class="tp-price-area mb-120">
            <div class="container">
               <div class="price-tab-content">
                  <div class="tab-content" id="nav-tabContent">
                     <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                        <div class="tp-price-table price-inner-white-bg z-index-3">
                           <div class="tp-price-table-wrapper">
                              <div class="row g-0 align-items-center">
                                 <div class="col-4">
                                    <div class="tp-price-header">
                                       <div class="tp-price-header-img">
                                          <img src="home/assets/img/price/price-4.1.png" alt="">
                                       </div>
                                       <div class="tp-price-header-content">
                                          <p>You pay <span>$59.00/mo</span> today Renews <br>
                                             April  2024 For <span>$69.00/mo</span></p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-8">
                                    <div class="tp-price-top-wrapper">
                                       <div class="tp-price-top-item text-center">
                                          <div class="tp-price-top-tag-wrapper">
                                             <span>STARTER</span>
                                             <p>Collect more submissions, <br> access most of the features</p>
                                          </div>
                                          <div class="tp-price-top-title-wrapper">
                                             <h4>$18 <span>/mo</span></h4>
                                             <p>Billed monthly</p>
                                             <a class="tp-btn-service" href="#">Get Started</a>
                                          </div>
                                       </div>
                                       <div class="tp-price-top-item text-center active">
                                          <div class="tp-price-top-tag-wrapper">
                                             <span>Advance</span>
                                             <p>Collect more submissions, <br> access most of the features</p>
                                          </div>
                                          <div class="tp-price-top-title-wrapper">
                                             <h4>$19 <span>/mo</span></h4>
                                             <p>Billed monthly</p>
                                             <a class="tp-btn-service" href="#">Get Started</a>
                                          </div>
                                       </div>
                                       <div class="tp-price-top-item text-center">
                                          <div class="tp-price-top-tag-wrapper">
                                             <span>Team Plan</span>
                                             <p>Collect more submissions, <br> access most of the features</p>
                                          </div>
                                          <div class="tp-price-top-title-wrapper">
                                             <h4>$14 <span>/mo</span></h4>
                                             <p>Billed monthly</p>
                                             <a class="tp-btn-service" href="#">Get Started</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tp-price-feature-wrapper">
                                 <div class="row g-0">
                                    <div class="col-4">
                                       <div class="tp-price-feature-box">
                                          <div class="tp-price-feature-item p-relative">
                                             <div class="d-flex align-items-center">
                                                <span>Team</span>
                                                <div class="tp-price-feature-tooltip-box p-relative">
                                                   <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <circle opacity="0.5" cx="8" cy="8" r="7" stroke="#5F6168" stroke-width="1.5"/>
                                                      <path d="M8 11.5V7.3" stroke="#5F6168" stroke-width="1.5" stroke-linecap="round"/>
                                                      <circle r="0.7" transform="matrix(1 0 0 -1 7.99883 5.19941)" fill="#5F6168"/>
                                                   </svg>
                                                   <div class="tp-price-feature-tooltip">
                                                      <p>Add gradient heading, button, pricing table testimonial etc.</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="tp-price-feature-item p-relative">
                                             <div class="d-flex align-items-center">
                                                <span>Installed Agent</span>
                                                <div class="tp-price-feature-tooltip-box p-relative">
                                                   <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <circle opacity="0.5" cx="8" cy="8" r="7" stroke="#5F6168" stroke-width="1.5"/>
                                                      <path d="M8 11.5V7.3" stroke="#5F6168" stroke-width="1.5" stroke-linecap="round"/>
                                                      <circle r="0.7" transform="matrix(1 0 0 -1 7.99883 5.19941)" fill="#5F6168"/>
                                                   </svg>
                                                   <div class="tp-price-feature-tooltip">
                                                      <p>Add gradient heading, button, pricing table testimonial etc.</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="tp-price-feature-item p-relative">
                                             <div class="d-flex align-items-center">
                                                <span>Real-Time Feedback</span>
                                                <div class="tp-price-feature-tooltip-box p-relative">
                                                   <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <circle opacity="0.5" cx="8" cy="8" r="7" stroke="#5F6168" stroke-width="1.5"/>
                                                      <path d="M8 11.5V7.3" stroke="#5F6168" stroke-width="1.5" stroke-linecap="round"/>
                                                      <circle r="0.7" transform="matrix(1 0 0 -1 7.99883 5.19941)" fill="#5F6168"/>
                                                   </svg>
                                                   <div class="tp-price-feature-tooltip">
                                                      <p>Add gradient heading, button, pricing table testimonial etc.</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="tp-price-feature-item p-relative">
                                             <div class="d-flex align-items-center">
                                                <span>Adding Time Manually</span>
                                                <div class="tp-price-feature-tooltip-box p-relative">
                                                   <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <circle opacity="0.5" cx="8" cy="8" r="7" stroke="#5F6168" stroke-width="1.5"/>
                                                      <path d="M8 11.5V7.3" stroke="#5F6168" stroke-width="1.5" stroke-linecap="round"/>
                                                      <circle r="0.7" transform="matrix(1 0 0 -1 7.99883 5.19941)" fill="#5F6168"/>
                                                   </svg>
                                                   <div class="tp-price-feature-tooltip">
                                                      <p>Add gradient heading, button, pricing table testimonial etc.</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="tp-price-feature-item p-relative">
                                             <div class="d-flex align-items-center">
                                                <span>Video Dedicated Support</span>
                                                <div class="tp-price-feature-tooltip-box p-relative">
                                                   <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <circle opacity="0.5" cx="8" cy="8" r="7" stroke="#5F6168" stroke-width="1.5"/>
                                                      <path d="M8 11.5V7.3" stroke="#5F6168" stroke-width="1.5" stroke-linecap="round"/>
                                                      <circle r="0.7" transform="matrix(1 0 0 -1 7.99883 5.19941)" fill="#5F6168"/>
                                                   </svg>
                                                   <div class="tp-price-feature-tooltip">
                                                      <p>Add gradient heading, button, pricing table testimonial etc.</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-8">
                                          <div class="tp-price-feature-info-item">
                                             <div class="tp-price-feature-info text-center">
                                                <span>02</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>12</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>Limited</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>100</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>Limited</span>
                                             </div>
                                          </div>
                                          <div class="tp-price-feature-info-item active">
                                             <div class="tp-price-feature-info text-center">
                                                <span>02</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>12</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>Limited</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>100</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>Limited</span>
                                             </div>
                                          </div>
                                          <div class="tp-price-feature-info-item">
                                             <div class="tp-price-feature-info text-center">
                                                <span>02</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>12</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>Limited</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>100</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>Limited</span>
                                             </div>
                                          </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                        <div class="tp-price-table price-inner-white-bg z-index-5">
                           <div class="tp-price-table-wrapper">
                              <div class="row g-0 align-items-center">
                                 <div class="col-4">
                                    <div class="tp-price-header">
                                       <div class="tp-price-header-img">
                                          <img src="home/assets/img/price/price-4.1.png" alt="">
                                       </div>
                                       <div class="tp-price-header-content">
                                          <p>You pay <span>$59.00/mo</span> today Renews <br>
                                             April  2024 For <span>$69.00/mo</span></p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-8">
                                    <div class="tp-price-top-wrapper">
                                       <div class="tp-price-top-item text-center">
                                          <div class="tp-price-top-tag-wrapper">
                                             <span>STARTER</span>
                                             <p>Collect more submissions, <br> access most of the features</p>
                                          </div>
                                          <div class="tp-price-top-title-wrapper">
                                             <h4>$36 <span>/mo</span></h4>
                                             <p>Billed monthly</p>
                                             <a class="tp-btn-service" href="#">Get Started</a>
                                          </div>
                                       </div>
                                       <div class="tp-price-top-item text-center active">
                                          <div class="tp-price-top-tag-wrapper">
                                             <span>Advance</span>
                                             <p>Collect more submissions, <br> access most of the features</p>
                                          </div>
                                          <div class="tp-price-top-title-wrapper">
                                             <h4>$59 <span>/mo</span></h4>
                                             <p>Billed monthly</p>
                                             <a class="tp-btn-service" href="#">Get Started</a>
                                          </div>
                                       </div>
                                       <div class="tp-price-top-item text-center">
                                          <div class="tp-price-top-tag-wrapper">
                                             <span>Team Plan</span>
                                             <p>Collect more submissions, <br> access most of the features</p>
                                          </div>
                                          <div class="tp-price-top-title-wrapper">
                                             <h4>$99 <span>/mo</span></h4>
                                             <p>Billed monthly</p>
                                             <a class="tp-btn-service" href="#">Get Started</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tp-price-feature-wrapper">
                                 <div class="row g-0">
                                    <div class="col-4">
                                       <div class="tp-price-feature-box">
                                          <div class="tp-price-feature-item p-relative">
                                             <div>
                                                <span>Team</span>
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <circle opacity="0.5" cx="8" cy="8" r="7" stroke="#5F6168" stroke-width="1.5"/>
                                                   <path d="M8 11.5V7.3" stroke="#5F6168" stroke-width="1.5" stroke-linecap="round"/>
                                                   <circle r="0.7" transform="matrix(1 0 0 -1 7.99883 5.19941)" fill="#5F6168"/>
                                                </svg>
                                             </div>
                                             <div class="tp-price-feature-tooltip">
                                                <p>Add gradient heading, button, pricing table testimonial etc.</p>
                                             </div>
                                          </div>
                                          <div class="tp-price-feature-item p-relative">
                                             <span>Installed Agent</span>
                                             <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle opacity="0.5" cx="8" cy="8" r="7" stroke="#5F6168" stroke-width="1.5"/>
                                                <path d="M8 11.5V7.3" stroke="#5F6168" stroke-width="1.5" stroke-linecap="round"/>
                                                <circle r="0.7" transform="matrix(1 0 0 -1 7.99883 5.19941)" fill="#5F6168"/>
                                             </svg>
                                             <div class="tp-price-feature-tooltip">
                                                <p>Add gradient heading, button, pricing table testimonial etc.</p>
                                             </div>
                                          </div>
                                          <div class="tp-price-feature-item p-relative">
                                             <span>Real-Time Feedback</span>
                                             <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle opacity="0.5" cx="8" cy="8" r="7" stroke="#5F6168" stroke-width="1.5"/>
                                                <path d="M8 11.5V7.3" stroke="#5F6168" stroke-width="1.5" stroke-linecap="round"/>
                                                <circle r="0.7" transform="matrix(1 0 0 -1 7.99883 5.19941)" fill="#5F6168"/>
                                             </svg>
                                             <div class="tp-price-feature-tooltip">
                                                <p>Add gradient heading, button, pricing table testimonial etc.</p>
                                             </div>
                                          </div>
                                          <div class="tp-price-feature-item p-relative">
                                             <span>Adding Time Manually</span>
                                             <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle opacity="0.5" cx="8" cy="8" r="7" stroke="#5F6168" stroke-width="1.5"/>
                                                <path d="M8 11.5V7.3" stroke="#5F6168" stroke-width="1.5" stroke-linecap="round"/>
                                                <circle r="0.7" transform="matrix(1 0 0 -1 7.99883 5.19941)" fill="#5F6168"/>
                                             </svg>
                                             <div class="tp-price-feature-tooltip">
                                                <p>Add gradient heading, button, pricing table testimonial etc.</p>
                                             </div>
                                          </div>
                                          <div class="tp-price-feature-item p-relative">
                                             <span>Video Dedicated Support</span>
                                             <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle opacity="0.5" cx="8" cy="8" r="7" stroke="#5F6168" stroke-width="1.5"/>
                                                <path d="M8 11.5V7.3" stroke="#5F6168" stroke-width="1.5" stroke-linecap="round"/>
                                                <circle r="0.7" transform="matrix(1 0 0 -1 7.99883 5.19941)" fill="#5F6168"/>
                                             </svg>
                                             <div class="tp-price-feature-tooltip">
                                                <p>Add gradient heading, button, pricing table testimonial etc.</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-8">
                                          <div class="tp-price-feature-info-item">
                                             <div class="tp-price-feature-info text-center">
                                                <span>02</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>12</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>Limited</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>100</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>Limited</span>
                                             </div>
                                          </div>
                                          <div class="tp-price-feature-info-item active">
                                             <div class="tp-price-feature-info text-center">
                                                <span>02</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>12</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>Limited</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>100</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>Limited</span>
                                             </div>
                                          </div>
                                          <div class="tp-price-feature-info-item">
                                             <div class="tp-price-feature-info text-center">
                                                <span>02</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>12</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>Limited</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>100</span>
                                             </div>
                                             <div class="tp-price-feature-info text-center">
                                                <span>Limited</span>
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
         </div>
         <!-- tp-price-area-end -->

         <!--plan-area-start -->
         <div class="plan-area pb-110">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-xl-6">
                     <div class="plan-section-box text-center pb-20">
                        <h3 class="tp-section-title tp-section-title-shape p-relative">
                           Compare our plans
                           <svg width="220" height="9" viewBox="0 0 220 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M202.386 1.05664C197.577 0.824859 192.769 0.654425 187.96 0.456733C186.373 0.388562 184.779 0.388584 183.192 0.354499C179.748 0.279516 176.303 0.211338 172.859 0.136347C170.943 0.0954477 169.02 0.0477334 167.105 0.013648C166.545 0.00683097 165.995 0 165.436 0C164.187 0 162.937 0.0136128 161.687 0.0204299C156.007 0.027247 150.319 0.0340772 144.639 0.0340772C143.282 0.0340772 141.934 0.0613441 140.577 0.0749782C137.223 0.109064 133.878 0.149987 130.532 0.184073C126.751 0.224978 122.977 0.238574 119.196 0.320384C113.08 0.443086 106.973 0.572644 100.856 0.695352C97.3133 0.770343 93.7786 0.811219 90.2352 0.927108C84.1358 1.13162 78.0444 1.32932 71.945 1.52701C68.6158 1.63609 65.2783 1.72472 61.949 1.88151C55.644 2.17465 49.3389 2.46094 43.0338 2.75408C39.6635 2.91087 36.2931 3.02676 32.931 3.26536C26.6506 3.70846 20.3784 4.15158 14.098 4.59469C12.7416 4.69013 11.3853 4.78555 10.0289 4.88099C7.31613 5.07187 4.61987 5.37184 1.91535 5.62407C1.74272 5.64452 1.57832 5.66498 1.40569 5.67862C1.0851 5.75361 0.797379 5.88993 0.558988 6.08762C0.205511 6.38076 0 6.78978 0 7.20565C0 7.62145 0.205511 8.0305 0.558988 8.33044C0.879583 8.59627 1.43857 8.84172 1.91535 8.79405C5.17886 8.48722 8.43411 8.16683 11.6976 7.9351C14.731 7.72375 17.7561 7.50558 20.7894 7.29424C24.094 7.0625 27.3986 6.8307 30.7033 6.5989C32.0349 6.50346 33.3667 6.38077 34.7066 6.31942C39.8608 6.08083 45.015 5.84902 50.1692 5.61042C53.3834 5.46045 56.5976 5.31732 59.8117 5.16734C61.1435 5.10598 62.4669 5.03099 63.7986 4.98326C68.9035 4.81284 74.0167 4.65603 79.1215 4.49924C82.2207 4.4038 85.3112 4.30155 88.4104 4.20611C89.4545 4.17203 90.4907 4.13111 91.534 4.11066C97.05 4.00159 102.566 3.89936 108.082 3.7971C111.165 3.73575 114.239 3.68121 117.322 3.61986C118.415 3.5994 119.516 3.5653 120.61 3.55848C126.298 3.51077 131.987 3.46307 137.675 3.41535C141.226 3.38127 144.77 3.35399 148.321 3.36081C154.363 3.37444 160.405 3.38124 166.439 3.39488C167.631 3.39488 168.823 3.43581 170.015 3.4699C173.352 3.55171 176.682 3.6335 180.019 3.71531C182.518 3.77666 185.017 3.83798 187.524 3.89934C189.299 3.94023 191.067 4.04932 192.843 4.13114C198.062 4.36291 203.283 4.60834 208.494 4.87421C209.818 4.94238 211.141 5.02416 212.465 5.10597C213.887 5.18777 215.309 5.2764 216.723 5.40592C216.945 5.43319 217.158 5.46729 217.381 5.50819C217.94 5.60363 218.474 5.57636 218.975 5.33776C219.436 5.1128 219.781 4.73786 219.929 4.30838C220.225 3.40853 219.567 2.4473 218.482 2.19507C217.529 1.97693 216.542 1.88834 215.564 1.80654C214.89 1.752 214.224 1.69065 213.55 1.63611C212.259 1.52704 210.961 1.47247 209.67 1.39066C207.245 1.26114 204.812 1.17252 202.386 1.05664Z" fill="#6B14FA"/>
                           </svg>
                        </h3>
                        <p>Comparing our pricing plans side-by-side so you can choose the best <br> one for yourself.</p>
                     </div>
                  </div>
               </div>
               <div class="pr-feature-box">
                  <div class="pr-feature-main">
                     <div class="pr-feature-wrapper">
                        <div class="row gx-0 align-items-center">
                           <div class="col-xl-4 col-lg-4 col-md-4">
                              <div class="pr-feature-head">
                                 <div class="pr-feature-title-box">
                                    <h5 class="pr-feature-title">Features and Services</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-8 col-lg-8 col-md-8">
                              <div class="pr-feature-head">
                                 <ul>
                                    <li>
                                       <div class="pr-feature-item">
                                          <h5>BASIC</h5>
                                          <a class="tp-btn-service black-bg text-white" href="service-details.html">Get Basic</a>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="pr-feature-item active">
                                          <h5>Growth</h5>
                                          <a class="tp-btn-service black-bg text-white" href="service-details.html">Get Growth</a>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="pr-feature-item">
                                          <h5>Premium</h5>
                                          <a class="tp-btn-service black-bg text-white" href="service-details.html">Get Premium</a>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="pr-feature-wrapper-2">
                        <div class="row gx-0 align-items-center pr-feature-height">
                           <div class="col-xl-4 col-lg-4 col-md-4">
                              <div class="pr-feature-bottom">
                                 <div class="pr-feature-title-box">
                                    <h5 class="pr-feature-title-sm">Version history</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-8 col-lg-8 col-md-8">
                              <div class="pr-feature-bottom">
                                 <ul>
                                    <li>
                                       <span>30days</span>
                                    </li>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="row gx-0 align-items-center pr-feature-height">
                           <div class="col-xl-4 col-lg-4 col-md-4">
                              <div class="pr-feature-bottom">
                                 <div class="pr-feature-title-box">
                                    <h5 class="pr-feature-title-sm">Send invoices and quotes</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-8 col-lg-8 col-md-8">
                              <div class="pr-feature-bottom">
                                 <ul>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="row gx-0 align-items-center pr-feature-height">
                           <div class="col-xl-4 col-lg-4 col-md-4">
                              <div class="pr-feature-bottom">
                                 <div class="pr-feature-title-box">
                                    <h5 class="pr-feature-title-sm">Cross platform</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-8 col-lg-8 col-md-8">
                              <div class="pr-feature-bottom">
                                 <ul>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="row gx-0 align-items-center pr-feature-height">
                           <div class="col-xl-4 col-lg-4 col-md-4">
                              <div class="pr-feature-bottom">
                                 <div class="pr-feature-title-box">
                                    <h5 class="pr-feature-title-sm">Scan receipts and bills</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-8 col-lg-8 col-md-8">
                              <div class="pr-feature-bottom">
                                 <ul>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="row gx-0 align-items-center pr-feature-height">
                           <div class="col-xl-4 col-lg-4 col-md-4">
                              <div class="pr-feature-bottom">
                                 <div class="pr-feature-title-box">
                                    <h5 class="pr-feature-title-sm">Storage</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-8 col-lg-8 col-md-8">
                              <div class="pr-feature-bottom">
                                 <ul>
                                    <li>
                                       <span>50gb</span>
                                    </li>
                                    <li>
                                       <span>100gb</span>
                                    </li>
                                    <li>
                                       <span>Unlimited</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="row gx-0 align-items-center pr-feature-height">
                           <div class="col-xl-4 col-lg-4 col-md-4">
                              <div class="pr-feature-bottom">
                                 <div class="pr-feature-title-box">
                                    <h5 class="pr-feature-title-sm">Advanced analytics</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-8 col-lg-8 col-md-8">
                              <div class="pr-feature-bottom">
                                 <ul>
                                    <li>
                                       <i class="far fa-times times"></i>
                                    </li>
                                    <li>
                                       <i class="far fa-times times"></i>
                                    </li>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="row gx-0 align-items-center pr-feature-height">
                           <div class="col-xl-4 col-lg-4 col-md-4">
                              <div class="pr-feature-bottom">
                                 <div class="pr-feature-title-box">
                                    <h5 class="pr-feature-title-sm">Projections dashboard</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-8 col-lg-8 col-md-8">
                              <div class="pr-feature-bottom">
                                 <ul>
                                    <li>
                                       <i class="far fa-times times"></i>
                                    </li>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="row gx-0 align-items-center pr-feature-height">
                           <div class="col-xl-4 col-lg-4 col-md-4">
                              <div class="pr-feature-bottom">
                                 <div class="pr-feature-title-box">
                                    <h5 class="pr-feature-title-sm">Invoice tracking and payments</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-8 col-lg-8 col-md-8">
                              <div class="pr-feature-bottom">
                                 <ul>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                    <li>
                                       <i class="far fa-times times"></i>
                                    </li>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="row gx-0 align-items-center pr-feature-height">
                           <div class="col-xl-4 col-lg-4 col-md-4">
                              <div class="pr-feature-bottom">
                                 <div class="pr-feature-title-box">
                                    <h5 class="pr-feature-title-sm">Collaboration</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-8 col-lg-8 col-md-8">
                              <div class="pr-feature-bottom">
                                 <ul>
                                    <li>
                                       <span>100</span>
                                    </li>
                                    <li>
                                       <span>1000</span>
                                    </li>
                                    <li>
                                       <span>Unlimited</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="row gx-0 align-items-center pr-feature-height">
                           <div class="col-xl-4 col-lg-4 col-md-4">
                              <div class="pr-feature-bottom">
                                 <div class="pr-feature-title-box">
                                    <h5 class="pr-feature-title-sm">Unlimited single-use virtual cards</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-8 col-lg-8 col-md-8">
                              <div class="pr-feature-bottom">
                                 <ul>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="row gx-0 align-items-center pr-feature-height">
                           <div class="col-xl-4 col-lg-4 col-md-4">
                              <div class="pr-feature-bottom">
                                 <div class="pr-feature-title-box">
                                    <h5 class="pr-feature-title-sm">Cross platform</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-8 col-lg-8 col-md-8">
                              <div class="pr-feature-bottom">
                                 <ul>
                                    <li>
                                       <i class="far fa-times times"></i>
                                    </li>
                                    <li>
                                       <i class="far fa-times times"></i>
                                    </li>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="row gx-0 align-items-center pr-feature-height">
                           <div class="col-xl-4 col-lg-4 col-md-4">
                              <div class="pr-feature-bottom">
                                 <div class="pr-feature-title-box">
                                    <h5 class="pr-feature-title-sm">Multi-currency functionality</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-8 col-lg-8 col-md-8">
                              <div class="pr-feature-bottom">
                                 <ul>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                    <li>
                                       <i class="far fa-times times"></i>
                                    </li>
                                    <li>
                                       <i class="far fa-check"></i>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--plan-area-end -->

         <!--ab-brand-area-start -->
         <div class="ab-brand-area">
            <div class="container">
               <div class="ab-brand-border-bottom pb-90">
                  <div class="row">
                     <div class="col-12">
                        <div class="ab-brand-section-box text-center mb-50">
                           <h4 class="ab-brand-title">Trusted by Thousands Business</h4>
                           <p>More than 100,000+ teams are using Softuch</p>
                        </div>
                     </div>
                  </div>
                  <div class="row justify-content-center">
                     <div class="col-xl-10">
                        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 justify-content-center">
                           <div class="col">
                              <div class="ab-brand-item mb-25">
                                 <img src="home/assets/img/brand/brand-inner-1.png" alt="">
                              </div>
                           </div>
                           <div class="col">
                              <div class="ab-brand-item mb-25">
                                 <img src="home/assets/img/brand/brand-inner-2.png" alt="">
                              </div>
                           </div>
                           <div class="col">
                              <div class="ab-brand-item mb-25">
                                 <img src="home/assets/img/brand/brand-inner-3.png" alt="">
                              </div>
                           </div>
                           <div class="col">
                              <div class="ab-brand-item mb-25">
                                 <img src="home/assets/img/brand/brand-inner-4.png" alt="">
                              </div>
                           </div>
                           <div class="col">
                              <div class="ab-brand-item mb-25">
                                 <img src="home/assets/img/brand/brand-inner-5.png" alt="">
                              </div>
                           </div>
                           <div class="col">
                              <div class="ab-brand-item mb-25">
                                 <img src="home/assets/img/brand/brand-inner-6.png" alt="">
                              </div>
                           </div>
                           <div class="col">
                              <div class="ab-brand-item mb-25">
                                 <img src="home/assets/img/brand/brand-inner-7.png" alt="">
                              </div>
                           </div>
                           <div class="col">
                              <div class="ab-brand-item mb-25">
                                 <img src="home/assets/img/brand/brand-inner-8.png" alt="">
                              </div>
                           </div>
                           <div class="col">
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
                  <div class="col-xl-6 col-lg-6">
                     <div class="tp-faq-left-wrapper p-relative">
                        <div class="tp-faq-section-box tp-inner-font tp-inner-faq-box pb-20">
                           <h4 class="inner-section-subtitle">Support</h4>
                           <h3 class="tp-section-title">Frequently Asked Questions</h3>
                           <p>Sed ut perspiciatis unde omnis iste natus error <br> sit voluptatem accusantium.!</p>
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
                  <div class="col-xl-6 col-lg-6">
                     <div class="tp-custom-accordion">
                        <div class="accordion tp-inner-font" id="accordionExample">
                           <div class="accordion-items">
                              <h2 class="accordion-header" id="headingOne">
                                 <button class="accordion-buttons " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Why should I choose Softec?
                                    <span class="accordion-btn"></span>
                                 </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    The Softec Shop is built right into your account dashboard, and is accessible
                                    immediately after signing up.
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-items tp-faq-active">
                              <h2 class="accordion-header" id="headingTwo">
                                 <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Do I need to change banks?
                                    <span class="accordion-btn"></span>
                                 </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    The Softec Shop is built right into your account dashboard, and is accessible
                                    immediately after signing up.
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-items">
                              <h2 class="accordion-header" id="headingThree">
                                 <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How can I order equipment?
                                    <span class="accordion-btn"></span>
                                 </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    The Softec Shop is built right into your account dashboard, and is accessible
                                    immediately after signing up.
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-items">
                              <h2 class="accordion-header" id="headingFour">
                                 <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Do you offer volume discounts?
                                    <span class="accordion-btn"></span>
                                 </button>
                              </h2>
                              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    The Softec Shop is built right into your account dashboard, and is accessible
                                    immediately after signing up.
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-items">
                              <h2 class="accordion-header" id="headingFive">
                                 <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How does signing up work?
                                    <span class="accordion-btn"></span>
                                 </button>
                              </h2>
                              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                 data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    The Softec Shop is built right into your account dashboard, and is accessible
                                    immediately after signing up.
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
                           <h3 class="tp-section-title text-white">Try our service now!</h3>
                           <p>Eyerything you need to accept cord payments and grow your business <br>
                              anywhere on the planet.</p>
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