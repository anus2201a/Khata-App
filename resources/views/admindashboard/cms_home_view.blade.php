@extends('admindashboard.layouts.app')
@section('content')
    <!-- End Header -->

    <!-- NFTmax Dashboard -->
    <section class="nftmax-adashboard nftmax-show">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 setting-main">



                    <div class="d-flex align-items-start">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                    <div class="row">

                                        @if (session()->has('success'))
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong> {{ session()->get('success') }}</strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        @endif

                                        <div class="col-lg-12">
                                            <div class="row border border-5 border-dark m-auto">
                                                <div class="personal-informations-from-btn col-lg-6 m-auto">
                                                    <h1 align="left"><b>Home Page</b></h1>
                                                </div>
                                                <div class="personal-informations-from-btn col-lg-6 my-2 px-2">

                                                    {{-- <button type="submit" class="btn-one">Update Content</button> --}}
                                                    <a href="{{ url('cms_home_form' )}}" class="btn-one btn-success">Update Content</a>

                                                </div>
                                            </div><br>

                                            <div class="personal-informations-head">
                                                <h3>Section 1</h3>
                                            </div>


                                            <div class="personal-informations-from">
                                                <div class="personal-informations-from-item">

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            {{-- <div class="col-12 col-md-12 col-lg-6 ">
                                                                <label for="exampleFormControlInput1"
                                                                class="form-label">Background Image</label>
                                                                <input type="file" name="section_1_bg_image" class="form-control"
                                                                    aria-label="First name">
                                                            </div> --}}

                                                            <div class="col-lg-6 col-md-12 col-pr-40px col-padding-0">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Background Image</label>
                                                                <div class="payment-item ">

                                                                    {{-- <div class="payment-text"> --}}

                                                                    <h4>Background Image</h4>
                                                                    {{-- <p>Offers payment processing software for e-commerce websites and mobile applications.</p> --}}
                                                                    <img src="{{asset($data['section_1_bg_image']->value)}}" style="border-radius: 10px;"  width="170" height="200" alt="">

                                                                    {{-- </div> --}}
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Main Tittle :</label>
                                                                <div class="payment-item ">

                                                                    {{-- <div class="payment-text"> --}}

                                                                    <h4>Main Tittle :</h4>
                                                                    <p>{{$data['section_1_main_tittle']->value }}</p>
                                                                    {{-- </div> --}}
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Image 1</label>
                                                                <div class="payment-item ">

                                                                    {{-- <div class="payment-text"> --}}

                                                                    <h4>Image 1</h4>
                                                                    {{-- <p>Offers payment processing software for e-commerce websites and mobile applications.</p> --}}
                                                                    <img src="{{asset($data['section_1_image_1']->value)}}" style="border-radius: 10px;"  width="170" height="200" alt="">

                                                                    {{-- </div> --}}
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Image 2</label>
                                                                <div class="payment-item ">

                                                                    {{-- <div class="payment-text"> --}}

                                                                    <h4>Image 2</h4>
                                                                    {{-- <p>Offers payment processing software for e-commerce websites and mobile applications.</p> --}}
                                                                    <img src="{{asset($data['section_1_image_2']->value)}}" style="border-radius: 10px;"  width="170" height="200" alt="">

                                                                    {{-- </div> --}}
                                                                </div>
                                                            </div>






                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="personal-informations-head mt-4">
                                                    <h3>Section 2</h3>

                                                </div>
                                                <div class="personal-informations-from">
                                                    <div class="personal-informations-from-item">

                                                        <div class="personal-informations-from-item-inner">
                                                            <div class="row ">
                                                                <div class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Main Tittle</label>
                                                                    <div class="payment-item ">

                                                                        {{-- <div class="payment-text"> --}}

                                                                        <h4>Main Tittle</h4>
                                                                        <p> {{ $data['section_2_main_tittle']->value }}</p>
                                                                        {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                        {{-- </div> --}}
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Main Description</label>
                                                                    <div class="payment-item ">

                                                                        {{-- <div class="payment-text"> --}}

                                                                        <h4>Main Description</h4>
                                                                        <p>{{ $data['section_2_main_decs']->value}}</p>
                                                                        {{-- </div> --}}
                                                                    </div>
                                                                </div>

                                                                <div class="personal-informations-from-item-inner">
                                                                    <div class="row ">
                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Tittle 1</label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}

                                                                                <h4>Tittle 1</h4>
                                                                                <p>{{ $data['section_2_tittle_1']->value }}</p>
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Description 1</label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}

                                                                                <h4>Description 1</h4>
                                                                                <p>{{ $data['section_2_desc_1']->value }}</p>
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>



                                                                    </div>
                                                                </div>

                                                                <div class="personal-informations-from-item-inner">
                                                                    <div class="row ">
                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Image 1</label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}

                                                                                <h4>Image 1</h4>
                                                                                {{-- <p>Offers payment processing software for e-commerce websites and mobile applications.</p> --}}
                                                                                <img src="{{asset( $data['section_2_image_1']->value)}}" style="border-radius: 10px;"  width="170" height="200" alt="">



                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>



                                                                <div class="personal-informations-from-item-inner">
                                                                    <div class="row ">
                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Tittle 2</label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}

                                                                                <h4>Tittle 2</h4>
                                                                                <p>{{ $data['section_2_tittle_2']->value }}</p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}

                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Description 2</label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}

                                                                                <h4>Description 2</h4>
                                                                                <p>{{ $data['section_2_desc_2']->value }}</p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}

                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>



                                                                <div class="personal-informations-from-item-inner">
                                                                    <div class="row ">
                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Image 2</label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}

                                                                                <h4>Image 2</h4>
                                                                                {{-- <p>Offers payment processing software for e-commerce websites and mobile applications.</p> --}}
                                                                            <img src="{{asset($data['section_2_image_2']->value)}}" style="border-radius: 10px;"  width="170" height="200" alt="">


                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>



                                                                <div class="personal-informations-from-item-inner">
                                                                    <div class="row ">

                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Tittle 3</label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Tittle 3</h4>
                                                                                <p>{{ $data['section_2_tittle_3']->value }}</p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>



                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Description 3</label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Description 3</h4>
                                                                                <p>{{ $data['section_2_desc_3']->value }}</p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>


                                                                <div class="personal-informations-from-item-inner">
                                                                    <div class="row ">
                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Image 3</label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Image 3</h4>
                                                                                {{-- <p>Offers payment processing software for e-commerce websites and mobile applications.</p> --}}
                                                                            <img src="{{asset($data['section_2_image_3']->value)}}" style="border-radius: 10px;"  width="170" height="200" alt="">
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>




                                                        <div class="personal-informations-head mt-4">
                                                            <h3>Section 3</h3>
                                                        </div>

                                                        <div class="personal-informations-from">
                                                            <div class="personal-informations-from-item">
                                                                <div class="personal-informations-from-item-inner">
                                                                    <div class="row  ">
                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Main Tittle</label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Main Tittle</h4>
                                                                                <p>{{ $data['section_3_main_tittle']->value }}
                                                                                </p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Main Description</label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Main Description</h4>
                                                                                <p>{{ $data['section_3_main_desc']->value }}</p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>





                                                        <div class="personal-informations-head mt-4">
                                                            <h3 class="font-size-bold">Section 4</h3>
                                                        </div>

                                                        <div class="personal-informations-from">
                                                            <div class="personal-informations-from-item">

                                                                <div class="personal-informations-from-item-inner">
                                                                    <div class="row  ">
                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Main Tittle</label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Main Tittle</h4>
                                                                                <p>{{ $data['section_4_main_tittle']->value }}
                                                                                </p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>


                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Main Description</label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Main Description</h4>
                                                                                <p>{{ $data['section_4_main_desc']->value }}</p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="personal-informations-from-item-inner">
                                                                    <div class="row ">
                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Tittle 1 </label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Tittle 1 </h4>
                                                                                <p>{{ $data['section_4_tittle_1']->value }}/p>
                                                                                    {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                    {{-- </div> --}}
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>



                                                        <div class="personal-informations-head mt-4">
                                                            <h3>Section 5</h3>
                                                        </div>

                                                        <div class="personal-informations-from">
                                                            <div class="personal-informations-from-item">
                                                                <div class="personal-informations-from-item-inner">
                                                                    <div class="row  ">
                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Background Image
                                                                            </label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Background Image </h4>
                                                                                {{-- <p>Offers payment processing software for e-commerce websites and mobile applications.</p> --}}
                                                                                <img src="{{asset($data['section_5_bg_image']->value)}}" style="border-radius: 10px;"  width="170" height="auto" alt="">

                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>


                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Front Image </label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Front Image </h4>
                                                                                {{-- <p>Offers payment processing software for e-commerce websites and mobile applications.</p> --}}
                                                                                <img src="{{asset($data['section_5_front_image']->value)}}" style="border-radius: 10px;"  width="170" height="200" alt="">

                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="personal-informations-from">
                                                            <div class="personal-informations-from-item">
                                                                <div class="personal-informations-from-item-inner">
                                                                    <div class="row  ">
                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Main Tittle </label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Main Tittle </h4>
                                                                                <p>{{ $data['section_5_main_tittle']->value }}
                                                                                </p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Sub Tittle 1 </label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Sub Tittle 1 </h4>
                                                                                <p>{{ $data['section_5_sub_tittle_1']->value }}
                                                                                </p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="personal-informations-from">
                                                            <div class="personal-informations-from-item">
                                                                <div class="personal-informations-from-item-inner">
                                                                    <div class="row  ">
                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Sub Tittle 2</label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Sub Tittle 2</h4>
                                                                                <p>{{ $data['section_5_sub_tittle_2']->value }}
                                                                                </p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Sub Tittle 3</label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Sub Tittle 3 </h4>
                                                                                <p>{{ $data['section_5_sub_tittle_3']->value }}
                                                                                </p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="personal-informations-head mt-4">
                                                            <h3>Section 6</h3>
                                                        </div>

                                                        <div class="personal-informations-from">
                                                            <div class="personal-informations-from-item">
                                                                <div class="personal-informations-from-item-inner">
                                                                    <div class="row  ">

                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Main Tittle </label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Main Tittle </h4>
                                                                                <p>{{ $data['section_6_main_tittle']->value }}
                                                                                </p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Main Description
                                                                            </label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Main Description </h4>
                                                                                <p>{{ $data['section_6_main_decs']->value }}</p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="personal-informations-from">
                                                            <div class="personal-informations-from-item">
                                                                <div class="personal-informations-from-item-inner">
                                                                    <div class="row  ">
                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Main Image </label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Main Image </h4>
                                                                                {{-- <p>Offers payment processing software for e-commerce websites and mobile applications.</p> --}}
                                                                            <img src="{{asset($data['section_6_image']->value)}}" style="border-radius: 10px;"  width="170" height="200" alt="">

                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="personal-informations-from">
                                                            <div class="personal-informations-from-item">
                                                                <div class="personal-informations-from-item-inner">
                                                                    <div class="row  ">
                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Sub Tittle 1 </label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Sub Tittle 1 </h4>
                                                                                <p>{{ $data['section_6_sub_tittle_1']->value }}
                                                                                </p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Sub Description 1
                                                                            </label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Sub Description 1 </h4>
                                                                                <p>{{ $data['section_6_sub_desc_1']->value }}
                                                                                </p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="personal-informations-from">
                                                            <div class="personal-informations-from-item">
                                                                <div class="personal-informations-from-item-inner">
                                                                    <div class="row  ">
                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Sub Tittle 2 </label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Sub Tittle 2 </h4>
                                                                                <p>{{ $data['section_6_sub_tittle_2']->value }}
                                                                                </p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Sub Description
                                                                                2</label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Sub Description 2 </h4>
                                                                                <p>{{ $data['section_6_sub_desc_2']->value }}
                                                                                </p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="personal-informations-from">
                                                            <div class="personal-informations-from-item">
                                                                <div class="personal-informations-from-item-inner">
                                                                    <div class="row  ">
                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Sub Tittle 3 </label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Sub Tittle 3 </h4>
                                                                                <p>{{ $data['section_6_sub_tittle_3']->value }}
                                                                                </p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Sub Description
                                                                                3</label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Sub Description 3 </h4>
                                                                                <p>{{ $data['section_6_sub_desc_3']->value }}
                                                                                </p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="personal-informations-from">
                                                            <div class="personal-informations-from-item">
                                                                <div class="personal-informations-from-item-inner">
                                                                    <div class="row  ">
                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Sub Tittle 4 </label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Sub Tittle 4 </h4>
                                                                                <p>{{ $data['section_6_sub_tittle_4']->value }}
                                                                                </p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Sub Description
                                                                                4</label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Sub Description 4 </h4>
                                                                                <p>{{ $data['section_6_sub_desc_4']->value }}
                                                                                </p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="personal-informations-from">
                                                            <div class="personal-informations-from-item">
                                                                <div class="personal-informations-from-item-inner">
                                                                    <div class="row  ">
                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Sub Tittle 5 </label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Sub Tittle 5 </h4>
                                                                                <p>{{ $data['section_6_sub_tittle_5']->value }}
                                                                                </p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Sub Description
                                                                                5</label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Sub Description 5 </h4>
                                                                                <p>{{ $data['section_6_sub_desc_5']->value }}
                                                                                </p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="personal-informations-head mt-4">
                                                            <h3>Section 7</h3>
                                                        </div>

                                                        <div class="personal-informations-from">
                                                            <div class="personal-informations-from-item">
                                                                <div class="personal-informations-from-item-inner">
                                                                    <div class="row">

                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Main Tittle </label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Main Tittle </h4>
                                                                                <p>{{ $data['section_7_main_tittle']->value }}
                                                                                </p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="col-lg-6 col-md-12  col-pr-40px col-padding-0">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Main Description</label>
                                                                            <div class="payment-item ">

                                                                                {{-- <div class="payment-text"> --}}
                                                                                <h4>Main Description </h4>
                                                                                <p>{{ $data['section_7_main_desc']->value }}</p>
                                                                                {{-- <img src="admin/assets/images/cover.png" alt=""> --}}
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>




                                                <div class="personal-informations-from-btn">

                                                    <button type="submit" class="btn-one">Save Profile</button>

                                                </div>
                                            </div>




                                        </div>

                                    </div>



                            </div>



                            <div class="tab-pane fade" id="v-pills-settings-3" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab-3">


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="terams-main">
                                            <div class="terams-main-head">
                                                <h2>Terms and Conditions</h2>
                                            </div>







                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
    </section>
    <!-- End NFTmax Dashboard -->
    </div>
@endsection
