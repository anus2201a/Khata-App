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
                                            {!! get_cms('section_1_main_tittle', 'contact', 'value') !!}
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
                                <div class="about-img about-img-height p-relative"
                                    data-background="{{ asset(get_cms('section_1_main_image', 'contact', 'value') ?? 'home/assets/img/contact/contact-banner.jpg') }}">
                                    <div class="about-img-content">
                                        <h4 class="about-img-title" data-parallax='{"y": 1000, "smoothness": 10}'>
                                            {!! get_cms('section_1_main_tittle', 'contact', 'value') !!}
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tp-breadcrumb-header-area-end -->

                <!-- tp-contact-area-strat -->
                <div class="contact-info-area pb-90">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 mb-30">
                                <div class="contact-info-item">
                                    <div class="contact-info-img">
                                        <img src="{{asset(get_cms('section_2_image_1', 'contact', 'value')) }}" alt="">
                                    </div>
                                    <div class="contact-info-title-box">
                                        <h5 class="contact-info-title-sm"><a
                                                href="#">{{ get_cms('section_2_tittle_1', 'contact', 'value') }}</a>
                                        </h5>
                                        <p> {!! get_cms('section_2_decs_1', 'contact', 'value') !!} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 mb-30">
                                <div class="contact-info-item p-relative">
                                    <div class="contact-info-badge">
                                        <span>Main Office</span>
                                    </div>
                                    <div class="contact-info-img">
                                        <img src="{{asset(get_cms('section_2_image_2', 'contact', 'value')) }}" alt="">
                                    </div>
                                    <div class="contact-info-title-box">
                                        <h5 class="contact-info-title-sm"><a
                                                href="#">{{ get_cms('section_2_tittle_2', 'contact', 'value') }}</a>
                                        </h5>
                                        <p> {!! get_cms('section_2_decs_2', 'contact', 'value') !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 mb-30">
                                <div class="contact-info-item">
                                    <div class="contact-info-img">
                                        <img src="{{asset(get_cms('section_2_image_3', 'contact', 'value')) }}" alt="">
                                    </div>
                                    <div class="contact-info-title-box">
                                        <h5 class="contact-info-title-sm"><a
                                                href="#">{{ get_cms('section_2_tittle_3', 'contact', 'value') }}</a>
                                        </h5>
                                        <p>{!! get_cms('section_2_decs_2', 'contact', 'value') !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-form-area pb-120">
                    <div class="container">
                        <div class="row gx-0">
                            <div class="col-xl-5 col-lg-6">
                                <div class="contact-form-left">
                                    <div class="contact-form-section-box pb-80">
                                        <h5 class="inner-section-subtitle">CONTACT US</h5>
                                        <h4 class="tp-section-title pb-10">{!! get_cms('section_3_main_tittle', 'contact', 'value') !!}
                                            <span>
                                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <rect width="44" height="44" fill="url(#pattern0)" />
                                                    <defs>
                                                        <pattern id="pattern0" patternContentUnits="objectBoundingBox"
                                                            width="1" height="1">
                                                            <use xlink:href="#image0_2106_35"
                                                                transform="translate(-0.425532 -0.170213) scale(0.0212766)" />
                                                        </pattern>
                                                        <image id="image0_2106_35" width="83" height="66"
                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFMAAABCCAYAAAArOOo+AAADcklEQVR4nO2bP0wTURzHP5RqQhyMtyJNTCcTnKCLnVhs4sRmHRk10U0WFhcXiQskuDPhxirRQZMagn8WB1gatTqQiMV/qRBM6nB99oDe9Y7+3mvf8T5j03u/yyfv97vvK8dQs9ls4hAh0+8bSBNOpiBOpiBOpiBOpiBOpiBOpiBOpiCnWma1AmvzUK/JrJeVWcYeqhWovoKnDw9/fu1e72ufCplhAhUXLsrUSa3MbgKD5IsyNVMlM4nAIF5Opr71Mk8qUFEoy92LlTJ7FRgkf7X3NRRDtvyeKSkwyKOvcmsN9M6UEuiNQf3z8c8lWxwGUKbkDvTGoHAzfC3JFocBkamjhfNFKC/Ag4no70jSN5m6ZiBAadY/0SxNR39PKhIpjMrUKRD8ti4v+jtubd6vF4b0vAQDMnULVOSLcHu1XbNbPel5CZqiUb0Gb57oF6hQba1qR81JhWQkUmjZmY+nO0cRaYJtrVi52/06HS0OmmTeWm239+sVHRUOt7Wi25z8f62GFgcDJ6B6TV5ssK0V1Ur3p7di7q38kxwMHyd7FduprdW6ceakQse8BBg6OPjbzGaH9aweQVKxndpasTQdr73Bn5flxfj3mYTMyxfv9KzcBS/nH/XKi37blRfCHwyl2XCRceekQte8BBg+N3Lp/tRUgTNn+3eyHDkPo1dg/LovdHTc/2zvB8wsh0uuVmDlTrJaM8u9328Y2efPNtjc/MDE5GV9VRLg5dq7Nop6Lf4DR6ErEiky29vfWF9/r7eKBuLkyaPobHFo/d18a+sjjcae3kqCJJ2TCulfiY6SAah92rZGZpxzdxg6smWQDMDOznd2d3/qrSRE0jmp0D0voSXzT2OP/f0D/dUEKM2e7Drd8xJaMqvVL/z+1dBfTYDJGye7rls6kMC6F7e8XPKWNdHiYKFMSP6SlYkWB0tlerlkMUd3JFJYKROglGB36o5ECmtl5ovxdpypeQkWywQoxHiym5qXYLnMWDvTQCRSWC3Ty0WHeJMtDpbLhOgQb7LFIQUyo0K8qUiksF4mhId4U5FIkQqZnUK86XkJKZEJx0O86XkJKZJ5NMSbjESK1MiEdojvR4tDymTmi61Xr/skcyBew5bCy8Fcf96pAFK2M/uNkymINf9UZQNuZwriZAriZAriZAriZAriZAriZAriZAryD4xxER8vOFEDAAAAAElFTkSuQmCC" />
                                                    </defs>
                                                </svg>
                                            </span>
                                            you.
                                        </h4>
                                        <p>{!! get_cms('section_3_main_desc', 'contact', 'value') !!}
                                        </p>
                                    </div>
                                    <div class="contact-form-social-box p-relative">
                                        <div class="contact-form-social-item">
                                            <a href="{{ get_cms('facebook_link', 'config', 'value') }}"><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a href="{{ get_cms('twitter_link', 'config', 'value') }}"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="{{ get_cms('facebook_link', 'config', 'value') }}"><i
                                                    class="fab fa-vimeo-v"></i></a>
                                            <a href="{{ get_cms('instagram_link', 'config', 'value') }}"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                        <div class="contact-form-section-img">
                                            <img src="{{ asset(get_cms('section_3_main_image', 'contact', 'value')) }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6">
                                <div class="contact-form-right-warp">
                                    <div class="postbox__comment-form">

                                        @if (session()->has('success'))
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong> {{ session()->get('success') }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                         @endif

                                        <form action="{{ route('contact.store') }}" class="box" method="POST">
                                            @csrf
                                            <div class="row gx-20">
                                                <div class="col-12">
                                                    <div class="postbox__comment-input mb-30">
                                                        {{-- <p>Hi, This is {{ $data['name'] }}</p>
                                                        <p>I have some query like {{ $data['message'] }}.</p>
                                                        <p>It would be appriciative, if you gone through this feedback.</p> --}}

                                                        <input type="text" name="name" class="inputText" required>
                                                        <span class="floating-label">Full Name</span>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="postbox__comment-input mb-30">
                                                        <input type="text" name="email" class="inputText" required>
                                                        <span class="floating-label">Your Email</span>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="postbox__comment-input mb-35">
                                                        <input type="text" name="phone_no" class="inputText" required>
                                                        <span class="floating-label">Phone Number</span>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="postbox__comment-input mb-35">
                                                        <input type="text" name="subject" class="inputText" required>
                                                        <span class="floating-label">Subject</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12">
                                                    <div class="postbox__comment-input mb-30">
                                                        <textarea class="textareaText" name="message" required></textarea>
                                                        <span class="floating-label-2">Message...</span>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12">
                                                    <div class="postbox__btn-box">
                                                        <button type="submit" class="submit-btn w-100">Send your
                                                            Request</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-inner-area pb-130">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-inner-title-sm-wrap text-center mb-50">
                                    <h4 class="contact-inner-title-sm">
                                        {{ get_cms('section_4_main_tittle', 'contact', 'value') }}</h4>
                                    <p>{!! get_cms('section_4_main_desc', 'contact', 'value') !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="contact-inner-wrapper">
                            <div class="row gx-0">
                                <div class="col-xl-4 col-lg-4">
                                    <div class="contact-inner-item d-flex align-items-center justify-content-center">
                                        <div class="contact-inner-img contact-img-1">
                                            <img src="home/assets/img/contact/contact-icon-sm-1.png" alt="">
                                        </div>
                                        <div class="contact-inner-link">
                                            <a
                                                href="mailto:contact@softuch.com">{{ get_cms('email_address', 'config', 'value') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="contact-inner-item d-flex align-items-center justify-content-center">
                                        <div class="contact-inner-img contact-img-2">
                                            <img src="home/assets/img/contact/contact-icon-sm-2.png" alt="">
                                        </div>
                                        <div class="contact-inner-link">
                                            <a href="tel:12025550144">{{ get_cms('contact_number', 'config', 'value') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="contact-inner-item d-flex align-items-center justify-content-center">
                                        <div class="contact-inner-img contact-img-3">
                                            <img src="home/assets/img/contact/contact-icon-sm-3.png" alt="">
                                        </div>
                                        <div class="contact-inner-link">
                                            <a href="https://www.google.com.bd/maps/@23.7806365,90.4193257,12z"
                                                target="_blank">{!! get_cms('address', 'config', 'value') !!}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tp-contact-area-end -->

                <!-- tp-cta-area-start -->
                <div class="tp-cta-area p-relative">
                    <div class="tp-cta-grey-bg grey-bg-2"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="tp-cta-bg" data-background="home/assets/img/cta/cta-bg.jpg">
                                    <div class="tp-cta-content tp-inner-font text-center">
                                        <h3 class="tp-section-title text-white">
                                            {{ get_cms('section_7_main_tittle', 'home', 'value') }}</h3>
                                        <p>{!! get_cms('section_7_main_desc', 'home', 'value') !!}</p>
                                        <a class="tp-btn-inner white-bg text-black" href="service-details.html">Get
                                            Started Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tp-cta-area-end -->

            </main>
        @endsection
