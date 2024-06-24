<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from quomodosoft.com/html/bankcohtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Feb 2024 17:21:35 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bancko Dark + Light Finance Dashboard HTML Template</title>

    <!-- fave-icon  -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/icon/fave-icon.png') }}" type="image/png">

    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/responsive.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    rel="stylesheet">


</head>

<body
    style="background-image: url(admin/assets/images/logo/img.jpg); background-position: center; background-repeat:no-repeat; width: auto; height: ;">

    <div class="sign-up-top">

        <div class="sign-up-main">
            <div class="sign-up-logo">
                <img src="{{ asset('admin/assets/images/logo/Logo.svg') }}" alt="logo">
            </div> <br><br>
            <div class="sign-up-text col-lg-6 m-auto">
                @if (session()->has('error_msg'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session()->get('error_msg') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif

                <h2>Sign in to Bankco.</h2>
                <p>Send, spend and save smarter</p>
            </div>




            {{-- <div class="sign-up-top-btn">
                <a href="#">
                    <span>
                        <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.8758 11.2139C20.8758 10.4225 20.8103 9.84497 20.6685 9.24609H11.4473V12.818H16.8599C16.7508 13.7057 16.1615 15.0425 14.852 15.9408L14.8336 16.0603L17.7492 18.2738L17.9512 18.2936C19.8063 16.6145 20.8758 14.1441 20.8758 11.2139Z"
                                fill="#4285F4" />
                            <path
                                d="M11.4467 20.6248C14.0984 20.6248 16.3245 19.7692 17.9506 18.2934L14.8514 15.9405C14.022 16.5073 12.9089 16.903 11.4467 16.903C8.84946 16.903 6.64512 15.224 5.85933 12.9033L5.74415 12.9129L2.7125 15.2122L2.67285 15.3202C4.28791 18.4644 7.60536 20.6248 11.4467 20.6248Z"
                                fill="#34A853" />
                            <path
                                d="M5.86006 12.9034C5.65272 12.3045 5.53273 11.6628 5.53273 10.9997C5.53273 10.3366 5.65272 9.695 5.84915 9.09612L5.84366 8.96857L2.774 6.63232L2.67357 6.67914C2.00792 7.98388 1.62598 9.44905 1.62598 10.9997C1.62598 12.5504 2.00792 14.0155 2.67357 15.3203L5.86006 12.9034Z"
                                fill="#FBBC05" />
                            <path
                                d="M11.4467 5.09664C13.2909 5.09664 14.5349 5.87733 15.2443 6.52974L18.0161 3.8775C16.3138 2.32681 14.0985 1.375 11.4467 1.375C7.60539 1.375 4.28792 3.53526 2.67285 6.6794L5.84844 9.09638C6.64514 6.77569 8.84949 5.09664 11.4467 5.09664Z"
                                fill="#EB4335" />
                        </svg>
                        Sign In with Apple
                    </span>
                </a>
                <a href="#">
                    <span>
                        <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.8744 7.50391C19.7653 7.56519 17.1672 8.85841 17.1672 11.7258C17.2897 14.9959 20.4459 16.1427 20.5 16.1427C20.4459 16.2039 20.0235 17.7049 18.7724 19.2783C17.7795 20.6336 16.6775 22 15.004 22C13.4121 22 12.8407 21.0967 11.004 21.0967C9.03147 21.0967 8.47335 22 6.96314 22C5.28967 22 4.10599 20.5603 3.05896 19.2178C1.69871 17.4606 0.54254 14.703 0.501723 12.0553C0.474217 10.6522 0.774128 9.27304 1.53544 8.10158C2.60998 6.46614 4.52835 5.35595 6.6233 5.31935C8.22845 5.2708 9.65703 6.30777 10.6366 6.30777C11.5754 6.30777 13.3305 5.31935 15.3163 5.31935C16.1735 5.32014 18.4592 5.55173 19.8744 7.50391ZM10.5009 5.03921C10.2151 3.75792 11.004 2.47663 11.7387 1.65931C12.6774 0.670887 14.1601 0 15.4388 0C15.5204 1.28129 15.0031 2.53791 14.0785 3.45312C13.2489 4.44154 11.8203 5.18565 10.5009 5.03921Z"
                                fill="#1A202C" />
                        </svg>
                        Sign In with Apple
                    </span>
                </a>
            </div>

            <div class="sign-up-top-btn-text">
                <p>Or with email</p>
            </div> --}}
            <form action="{{ route('register.post') }}" method="POST">
                @csrf
                <div class="sign-up-from col-lg-6 m-auto">
                    <div class="sign-up-from-item">

                        <div class="sign-up-from-inner">
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput"
                                placeholder="Full Name">
                        </div>

                        <div class="sign-up-from-inner">
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput"
                                placeholder="Username or email">
                        </div>

                        <div class="sign-up-from-inner">
                            <input type="text" name="phone_no" class="form-control" id="exampleFormControlInput"
                                placeholder="Phone no">
                        </div>


                        <div class="sign-up-from-inner">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password">

                                <div class="icon">
                                    <i class="bi bi-eye-slash h5" id="togglePassword"></i>
                                </div>
                        </div>

                        <div class="sign-up-from-inner">

                            <div class="sign-up-from-df">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Remember me

                                    </label>
                                </div>

                                <div class="main-btn">
                                    <button type="button" class="modal-sign-up-from-btn bg-transparent"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal-3" data-bs-dismiss="modal">
                                        Forgot Password?
                                    </button>
                                    <!-- Modal -->
                                    {{-- <div class="modal fade" id="exampleModal-3" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-six">
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">


                                                <div class="modal-sign-up-logo">
                                                    <img src=" {{ asset('admin/assets/images/logo/Logo.svg') }}" alt="logo">
                                                </div>
                                                <div class="modal-sign-up-text">
                                                    <h2>Send Money</h2>
                                                    <p>Please enter user information that you want to send money and
                                                        enter an amount</p>
                                                </div>


                                                <div class="modal-sign-up-from">
                                                    <input type="email" class="form-control"
                                                        id="exampleFormControlInput2" placeholder="Email">
                                                </div>

                                                <div class="modal-sign-up-from-btn-two">
                                                    <a href="#">Return to login</a>
                                                </div>


                                            </div>

                                            <button type="button" class="btn-one-modal btn-one-modal-mt  "
                                                data-bs-toggle="modal" data-bs-target="#exampleModal-4"
                                                data-bs-dismiss="modal">
                                                Continue
                                            </button>



                                        </div>
                                    </div>
                                </div> --}}


                                </div>
                            </div>
                        </div>
                        <div class="sign-up-btn">
                                <button class="btn-one" type="submit">Sign In</button>

                            <p>Don’t have an account? <a href="sign-up.html">Sign Up</a></p>

                        </div>


                        <div class="sign-up-btn-btm">
                            <a href="#">Terms & Condition </a>
                            <a href="#">Privacy Policy </a>
                            <a href="#">Help </a>
                            <a href="#">English </a>
                        </div>

                        <div class="sign-up-btn-btm-text">
                            <p>@ 2023 Bankco. All Right Reserved. </p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        {{-- <div class="sign-up-main-two">

            <div class="sign-up-main-two-item">
                <div class="sign-up-img">
                    <img src="{{ asset('admin/assets/images/sign-up.svg') }}" alt="img">
                </div>

                <div class="sign-up-main-two-item-text">
                    <h2>Speady, Easy and Fast</h2>
                    <p>BankCo. help you set saving goals, earn cash back offers, Go to disclaimer for more details and
                        get paychecks up to two days early. Get a $20 bonus when you receive qualifying direct deposits
                    </p>
                </div>
            </div>


        </div> --}}

    </div>

    <script>
        window.addEventListener("DOMContentLoaded", function () {
          const togglePassword = document.querySelector("#togglePassword");

          togglePassword.addEventListener("click", function (e) {
            // toggle the type attribute
            const type =
              password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            // toggle the eye / eye slash icon
            this.classList.toggle("bi-eye");
          });
        });


        </script>




    <script src="{{ asset('admin/assets/js/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/slick.min.js') }}"></script>
    <script src=" {{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
</body>


<!-- Mirrored from quomodosoft.com/html/bankcohtml/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Feb 2024 17:22:00 GMT -->

</html>
