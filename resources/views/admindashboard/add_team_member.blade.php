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
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    <div class="col-lg-12">
                                        <div class="row border border-5 border-dark m-auto py-2">
                                            <div class="personal-informations-from-btn col-lg-6 m-auto">
                                                <h1 class="text-center"><b>Form</b></h1>
                                                {{-- </div> --}}
                                                {{-- <div class="personal-informations-from-btn col-lg-6 my-2 px-2"> --}}

                                                {{-- <button type="submit" class="btn-one">Update Content</button> --}}
                                                {{-- <a href="{{ url('cms_home_form' )}}" class="btn-one btn-success">Update Content</a> --}}

                                            </div>
                                        </div><br>
                                        {!! $form['body'] !!}
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

@section('script')
    <script>
        {!! $form['script'] !!}
    </script>
    <script>
        @if ($slug == 'khata')
            var getname = document.getElementById("myname");
            var getamount = document.getElementById("amount");
            var hold_value = document.getElementById("hold_value");
            var merge_name = document.getElementById("merge_name");
            var merge = [];
            var amountmerge = [];
            var new_name;

            getname.addEventListener("keyup", (e) => {
                if (e.key == ",") {
                    var name = document.getElementById("myname").value.trim();
                    var amount = getamount.value;


                    let parts = name.split(",");
                    let getname = parts[parts.length - 2].trim();
                    new_name = getname;

                    $.ajax({
                        url: '{{ route('khata.get') }}',
                        type: 'GET',
                        dataType: "json",
                        data: {
                            name: getname,
                            amount: 0
                        },
                        success: function(response) {
                            getamount.value = response.data ? response.data : ''

                        },
                    });

                    e.preventDefault();
                    getamount.focus();
                }
            });


            getamount.addEventListener("keydown", (e) => {
                if (e.key == "Enter") {
                    e.preventDefault();
                    var name = document.getElementById("myname").value.trim();
                    var amount = document.getElementById("amount").value.trim();
                    if (name && amount) {
                        let parts = name.split(",");
                        let lastTextBeforeComma = parts[parts.length - 2].trim();
                        merge.push(lastTextBeforeComma + "," + amount);

                        //     let amounts = hold_value.split(",");
                        //     var plus = "+";
                        //     let lastamountBeforeComma = parts[amounts.length - 1].trim();
                        //     amountmerge.push(lastamountBeforeComma + parseInt(plus) + amount);
                        //     // text.replace("Microsoft", "W3Schools");
                        // console.log(amountmerge)


                        getamount.value = "";
                        hold_value.value = merge.join(",");

                    }

                    $.ajax({
                        url: '{{ route('khata.get') }}',
                        type: 'GET',
                        dataType: "json",
                        data: {
                            name: new_name,
                            amount: amount
                        },
                        success: function(response) {
                            if (response.success) {
                                getamount.value = response.data
                            } else {
                                getamount.value = response.data
                            }

                        },
                    });
                    console.log(merge)
                    getname.focus();
                } else if (e.key == "Tab") {
                    var name = document.getElementById("myname").value.trim();
                    var amount = document.getElementById("amount").value.trim();
                    if (name && amount) {
                        let parts = name.split(",");
                        let lastTextBeforeComma = parts[parts.length - 2].trim();
                        merge.push(lastTextBeforeComma + "," + amount);
                        // getname.value = "";
                        // getamount.value = "";
                        hold_value.value = merge.join(",");
                        // console.log(hold_value.value);
                    }

                }
            });
        @endif
    </script>
@endsection
