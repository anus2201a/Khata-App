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
                                                    <h1 align="left"><b>About Page</b></h1>
                                                </div>
                                                <div class="personal-informations-from-btn col-lg-6 my-2 px-2">

                                                    {{-- <button type="submit" class="btn-one">Update Content</button> --}}
                                                    {{-- <a href="{{ url('cms_home_form' )}}" class="btn-one btn-success">Update Content</a> --}}

                                                </div>
                                            </div><br>
                                         <form action="{{route ('update-cms')}}" enctype="multipart/form-data" method="POST">
                                                @csrf
                                            <div class="personal-informations-head">
                                                <h3>Section 1</h3>
                                            </div>
                                             <div class="personal-informations-from">
                                                <div class="personal-informations-from-item">

                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row">
                                                            <div class="col-12 col-md-12 col-lg-6 ">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Main Image</label>
                                                                <input type="file" name="section_1_main_image" class="form-control"
                                                                    aria-label="First name">
                                                                    {{-- <div class="payment-item "> --}}

                                                                        {{-- <div class="payment-text"> --}}
                                                                        <br>
                                                                        <img src="{{asset(get_cms('section_1_main_image','about','value'))}}" style="border-radius: 12px;"  width="200" height="auto" alt="">
                                                                    {{-- </div> --}}

                                                            </div>
                                                            <div class="col-12 col-md-12  col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name ">Main Tittle</label>
                                                                <input type="text" value="{{get_cms('section_1_main_tittle','about','value')}}" name="section_1_main_tittle" class="form-control"
                                                                    aria-label="Last name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="personal-informations-from-item-inner">
                                                        <div class="row ">
                                                            <div class="col col-12 col-md-12 col-lg-6 ">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label">Tittle 2 </label>
                                                                <input type="text" value="{{get_cms('section_1_tittle_2','about','value')}}" name="section_1_tittle_2" class="form-control"
                                                                    aria-label="Email">
                                                                    <br>
                                                                    {{-- <img src="" style="border-radius: 10px;"  width="170" height="200" alt=""> --}}


                                                            </div>
                                                            <div class="col col-12 col-md-12 col-lg-6">
                                                                <label for="exampleFormControlInput1"
                                                                    class="form-label last-name">Description
                                                                    </label>
                                                                <input type="text" value="{{get_cms('section_1_desc','about','value')}}" name="section_1_desc" class="form-control"
                                                                    aria-label="Phone Number (Optional)">
                                                                    <br>
                                                                    {{-- <img src="" style="border-radius: 10px;"  width="170" height="200" alt=""> --}}


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
                                                                    <input type="text" value="{{get_cms('section_2_main_tittle','about','value')}}" name="section_2_main_tittle" class="form-control"
                                                                        aria-label="Email">
                                                                </div>
                                                                <div class="col col-12 col-md-12 col-lg-6">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label last-name">Description 1
                                                                        </label>
                                                                    <input type="text" value="{{get_cms('section_2_desc_1','about','value')}}" name="section_2_desc_1" class="form-control"
                                                                        aria-label="Phone Number (Optional)">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="personal-informations-from-item-inner">
                                                            <div class="row ">
                                                                <div class="col col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Description 2</label>
                                                                    <input type="text" value="{{get_cms('section_2_desc_2','about','value')}}" name="section_2_desc_2" class="form-control"
                                                                        aria-label="Email">
                                                                </div>
                                                                <div class="col col-12 col-md-12 col-lg-6">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label last-name">Description 3
                                                                        </label>
                                                                    <input type="text" value="{{get_cms('section_2_desc_3','about','value')}}" name="section_2_desc_3" class="form-control"
                                                                        aria-label="Phone Number (Optional)">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="personal-informations-from-item-inner">
                                                            <div class="row ">
                                                                <div class="col col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label" >Counter 1 Tittle </label>
                                                                    <input type="text" value="{{get_cms('counter_1_tittle','about','value')}}" name="counter_1_tittle" class="form-control"
                                                                        aria-label="Email">
                                                                        <br>
                                                                        {{-- <img src="" style="border-radius: 10px;"  width="170" height="200" alt=""> --}}
                                                                </div>
                                                                <div class="col col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label" >Counter 1 Value</label>
                                                                    <input type="text" value="{{get_cms('counter_1_value','about','value')}}" name="counter_1_value" class="form-control"
                                                                        aria-label="Email">
                                                                </div>

                                                            </div>
                                                        </div>



                                                        <div class="personal-informations-from-item-inner">
                                                            <div class="row ">
                                                                <div class="col col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label" >Counter 2 Tittle</label>
                                                                    <input type="text" value="{{get_cms('counter_2_tittle','about','value')}}" name="counter_2_tittle" class="form-control"
                                                                        aria-label="Email">
                                                                        <br>
                                                                       {{-- <img src="" style="border-radius: 10px;"  width="170" height="200" alt=""> --}}

                                                                </div>

                                                                <div class="col col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label" >Counter 2 Value</label>
                                                                    <input type="text" value="{{get_cms('counter_2_value','about','value')}}" name="counter_2_value" class="form-control"
                                                                        aria-label="Email">
                                                                </div>


                                                            </div>
                                                        </div>

                                                        <div class="personal-informations-from-item-inner">
                                                            <div class="row ">
                                                                <div class="col col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label" >Counter 3 Tittle</label>
                                                                    <input type="text" value="{{get_cms('counter_3_tittle','about','value')}}" name="counter_3_tittle" class="form-control"
                                                                        aria-label="Email">
                                                                        <br>
                                                                       {{-- <img src="  " style="border-radius: 10px;"  width="170" height="200" alt=""> --}}

                                                                </div>

                                                                <div class="col col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label" >Counter 3 Value</label>
                                                                    <input type="text" value="{{get_cms('counter_3_value','about','value')}}" name="counter_3_value" class="form-control"
                                                                        aria-label="Email">
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
                                                                        class="form-label">Image</label>
                                                                    <input type="file" name="section_3_image_1" class="form-control"
                                                                        aria-label="Email"><br>
                                                                       <img src="{{asset(get_cms('section_3_image_1','about','value'))}}" style="border-radius: 10px;"  width="auto" height="auto" alt="">

                                                                </div>
                                                                <div class="col col-12 col-md-12 col-lg-6">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label last-name">Main Tittle</label>
                                                                    <input type="text" value="{{get_cms('section_3_main_tittle','about','value')}}" name="section_3_main_tittle" class="form-control"
                                                                        aria-label="Phone Number (Optional)">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="personal-informations-from-item-inner">
                                                            <div class="row ">
                                                                <div class="col col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Main Description</label>
                                                                    <input type="text" value="{{get_cms('section_3_main_desc','about','value')}}" name="section_3_main_desc" class="form-control"
                                                                        aria-label="Email">
                                                                </div>
                                                                <div class="col col-12 col-md-12 col-lg-6">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label last-name">Description 1
                                                                        </label>
                                                                    <input type="text" value="{{get_cms('section_3_desc_1','about','value')}}" name="section_3_desc_1" class="form-control"
                                                                        aria-label="Phone Number (Optional)">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="personal-informations-from-item-inner">
                                                            <div class="row ">
                                                                <div class="col col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label" >Description 2 </label>
                                                                    <input type="text" value="{{get_cms('section_3_desc_2','about','value')}}" name="section_3_desc_2" class="form-control"
                                                                        aria-label="Email">
                                                                        <br>
                                                                        {{-- <img src="" style="border-radius: 10px;"  width="170" height="200" alt=""> --}}
                                                                </div>
                                                                <div class="col col-12 col-md-12 col-lg-6 ">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label" >Description 3</label>
                                                                    <input type="text" value="{{get_cms('section_3_desc_3','about','value')}}" name="section_3_desc_3" class="form-control"
                                                                        aria-label="Email">
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="personal-informations-from-btn">
                                                    <input type="hidden" name="tag" value="about">
                                                <button type="submit" class="btn-one">Save Profile</button>

                                                </div>
                                            </div>


                                        </form>
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

                                                <div class="terams-main-text">
                                                    <h3>2. Acceptance</h3>
                                                    <p>What you do own when you buy an are the keys to a non-fungible –
                                                        perhaps unique – token. That token is yours to trade or hold or
                                                        display in Decentraland. But the digital file associated with an
                                                        NFT is just as easy to copy and paste and download as any other
                                                        – the Finally, players lose their NFTs sometimes according to
                                                        the rules and regulations of the NFT game.</p>
                                                </div>
                                                <div class="terams-main-text">
                                                    <h3>1. Definitions</h3>
                                                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                                                        amet sint. Velit officia consequat duis enim velit mollit.
                                                        Exercitation veniam consequat sunt nostrud amet.Capacity. You
                                                        confirm that you have the legal capacity to receive and hold and
                                                        make use of the NFT under French jurisdiction and any other
                                                        relevant jurisdiction.Acceptance. By participating in the Sale,
                                                        You accept and agree to these Terms and Conditions without any
                                                        condition or restriction.
                                                        If You do not agree to this Contract, You shall not participate
                                                        in the Sale made by the Company Exercitation veniam consequat
                                                        sunt nostrud amet.Capacity. You confirm that you have the legal
                                                        capacity to receive and hold find to end.Contract, You shall not
                                                        participate in the Sale made by the Company Exercitation venia
                                                    </p>
                                                </div>



                                                <div class="terams-main-text-two">
                                                    <h3>In reality, the most important aspect of a great dashboard is
                                                        the part that gets the least amount of attention: The underlying
                                                        data. More than any other aspect, the data will make or break a
                                                        dashboard.Within this definition, successful administration
                                                        appears to rest on three basic skills, which we will call
                                                        technical, and conceptual.</h3>
                                                </div>

                                                <div class="terams-main-text">
                                                    <h3>1. Definitions</h3>
                                                    <p>The Company offers featuring the Betonyou universe. The holders
                                                        of one or more NFTs will be able to win cryptos while playing
                                                        video games. In the future, the Company plans to develop its own
                                                        games and Metaverse around the Betonyou universe (“Project”).
                                                        <br>
                                                        <br>
                                                        To release the NFTs and fund the project, the Company offers
                                                        NFTs from a dedicated website("Sale"). The web address of this
                                                        website will be given at the time of the mint. The NFT
                                                        acquisition does not confer any rights on the Company or in the
                                                        future development.
                                                    </p>
                                                </div>
                                                <div class="terams-main-text">
                                                    <h3>1. Definitions</h3>
                                                    <p>To the fullest extent permitted by applicable law, You undertake
                                                        to indemnify, defend and hold harmless the Company from and
                                                        against all claims, demands, actions, damages, losses, costs and
                                                        expenses (including attorneys’ fees) that arise from or relate
                                                        to (i) your Subscription or use of the NFTs; (ii) your
                                                        responsibilities or obligations under this Contract; and (iii)
                                                        your breach of this Contract.
                                                        <br>
                                                        <br>
                                                        Company undertakes to act with the care normally expected from a
                                                        professional in his field and to comply with the best practice
                                                        in force. The best endeavor obligation only binds the Company.
                                                    </p>
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
        </section>
        <!-- End NFTmax Dashboard -->
    </div>




@endsection
