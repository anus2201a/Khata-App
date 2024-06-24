@extends('admindashboard.layouts.app')
@section('content')

        <!-- End Header -->

        <!-- NFTmax Dashboard -->
        <section class="nftmax-adashboard nftmax-show">
            <div class="container-fluid">
                <div class="row">


                    <div class="col-lg-12 setting-main  ">
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
                                            <div class="row border border-5 border-dark m-auto py-2">
                                                <div class="personal-informations-from-btn col-lg-6 m-auto">
                                                    <h1 align="left"><b>Service Page</b></h1>
                                                </div>
                                                <div class="personal-informations-from-btn col-lg-6 my-2 px-2">

                                                    {{-- <button type="submit" class="btn-one">Update Content</button> --}}
                                                    {{-- <a href="{{ url('cms_home_form' )}}" class="btn-one btn-success">Update Content</a> --}}

                                                </div>
                                            </div><br>
                                         <form action="{{url ('cms_service')}}" enctype="multipart/form-data" method="POST">
                                                @csrf
                                            <div class="personal-informations-head">
                                                <h3>Section 1</h3>
                                            </div>
                                             <div class="personal-informations-from">
                                                <div class="personal-informations-from-item">

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">

                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Main Tittle</label>
                                                                <input type="text" value="" name="section_1_main_tittle" class="form-control"
                                                                    aria-label="Last name">
                                                            </div>

                                                            <div class="col-12 col-md-12 col-lg-6 ">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Main Image</label>
                                                                <input type="file" name="section_1_main_image" class="form-control"
                                                                    aria-label="First name">
                                                                    {{-- <div class="payment-item "> --}}

                                                                        {{-- <div class="payment-text"> --}}
                                                                        <br>
                                                                        <img src="" style="border-radius: 12px;"  width="200" height="auto" alt="">
                                                                    {{-- </div> --}}

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
                                                                <div class="col col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Main Tittle</label>
                                                                    <input type="text" value="" name="section_2_main_tittle" class="form-control"
                                                                        aria-label="Email">
                                                                </div>
                                                                <div class="col col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Background Image</label>
                                                                    <input type="text" value="" name="section_2_bg_image" class="form-control"
                                                                        aria-label="Email">
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="personal-informations-from-item-inner">
                                                            <div class="row ">
                                                                <div class="col col-12 col-md-12 col-lg-6">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label last-name">Tittle 1
                                                                        </label>
                                                                    <input type="text" value="" name="section_2_tittle_1" class="form-control"
                                                                        aria-label="Phone Number (Optional)">
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
                                                            <div class="row ">
                                                                <div class="col col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Background Image</label>
                                                                    <input type="file" name="section_3_bg_image" class="form-control"
                                                                        aria-label="Email"><br>
                                                                       <img src="   " style="border-radius: 10px;"  width="auto" height="auto" alt="">

                                                                </div>
                                                                <div class="col col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label"> Image 1</label>
                                                                    <input type="file" name="section_3_image_1" class="form-control"
                                                                        aria-label="Email"><br>
                                                                       <img src="" style="border-radius: 10px;"  width="auto" height="auto" alt="">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="personal-informations-from-item-inner">
                                                            <div class="row ">
                                                                <div class="col col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label"> Image 2</label>
                                                                    <input type="file" name="section_3_image_2" class="form-control"
                                                                        aria-label="Email"><br>
                                                                       <img src="" style="border-radius: 10px;"  width="auto" height="auto" alt="">

                                                                </div>
                                                                <div class="col col-12 col-md-12 col-lg-6">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label last-name">Main Tittle
                                                                        </label>
                                                                    <input type="text" value="" name="section_3_main_tittle" class="form-control"
                                                                        aria-label="Phone Number (Optional)">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="personal-informations-from-item-inner">
                                                            <div class="row ">
                                                                <div class="col col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label" >Main Description </label>
                                                                    <input type="text" value="" name="section_3_main_desc" class="form-control"
                                                                        aria-label="Email">
                                                                        <br>
                                                                        {{-- <img src="" style="border-radius: 10px;"  width="170" height="200" alt=""> --}}
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="personal-informations-head mt-4">
                                                    <h3>Section 4</h3>
                                                </div>
                                                <div class="personal-informations-from">
                                                    <div class="personal-informations-from-item">

                                                        <div class="personal-informations-from-item-inner">
                                                            <div class="row ">
                                                                <div class="col col-12 col-md-12 col-lg-6">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label last-name">Main Tittle
                                                                        </label>
                                                                    <input type="text" value="" name="section_4_main_tittle" class="form-control"
                                                                        aria-label="Phone Number (Optional)">
                                                                </div>
                                                                <div class="col col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label" >Main Description </label>
                                                                    <input type="text" value="" name="section_4_main_desc" class="form-control"
                                                                        aria-label="Email">
                                                                        <br>
                                                                        {{-- <img src="" style="border-radius: 10px;"  width="170" height="200" alt=""> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="personal-informations-from-item-inner">
                                                            <div class="row ">
                                                                <div class="col col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label" >Sub Tittle 1 </label>
                                                                    <input type="text" value="" name="section_4_sub_tittle_1" class="form-control"
                                                                        aria-label="Email">
                                                                        <br>
                                                                        {{-- <img src="" style="border-radius: 10px;"  width="170" height="200" alt=""> --}}
                                                                </div>
                                                                <div class="col col-12 col-md-12 col-lg-6">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label last-name">Sub Tittle 2
                                                                        </label>
                                                                    <input type="text" value="" name="section_4_sub_tittle_2" class="form-control"
                                                                        aria-label="Phone Number (Optional)">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="personal-informations-from-item-inner">
                                                            <div class="row ">
                                                                <div class="col col-12 col-md-12 col-lg-6">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label" >Sub Tittle 3 </label>
                                                                    <input type="text" value="" name="section_4_sub_tittle_3" class="form-control"
                                                                        aria-label="Email">
                                                                        <br>
                                                                        {{-- <img src="" style="border-radius: 10px;"  width="170" height="200" alt=""> --}}
                                                                </div>

                                                                <div class="col col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label"> Main Image</label>
                                                                    <input type="file" name="section_4_main_image" class="form-control"
                                                                        aria-label="Email"><br>
                                                                       <img src="" style="border-radius: 10px;"  width="auto" height="auto" alt="">

                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="personal-informations-from-item-inner">
                                                            <div class="row ">
                                                                <div class="col col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Sub Image</label>
                                                                    <input type="file" name="section_4_sub_image" class="form-control"
                                                                        aria-label="Email"><br>
                                                                       <img src="" style="border-radius: 10px;"  width="auto" height="auto" alt="">

                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="personal-informations-from-btn">

                                                <button type="submit" class="btn-one">Save Profile</button>

                                                </div>
                                            </div>


                                        </form>
                                        </div>

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
