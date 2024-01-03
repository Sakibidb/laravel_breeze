<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roksyn - Bootstrap 5 Admin Template</title>

    <!--plugins-->
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet">
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet">
    <!--Styles-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/dark-theme.css" rel="stylesheet">

</head>

<body>


    <!--authentication-->

    <div class="mx-3 mx-lg-0">

        <div class="card my-5 col-xl-9 col-xxl-8 mx-auto rounded-4 overflow-hidden border-3 p-3">
            <div class="row g-3">
                <div class="col-lg-6 d-flex">
                    <div class="card-body p-5 w-100">
                        <img src="assets/images/logo-icon.png" class="mb-4" width="45" alt="">
                        <h4 class="fw-bold">Get Started Now</h4>
                        <p class="mb-0">Enter your credentials to login your account</p>
                        <div class="row g-3 my-4">
                            <div class="col-12 col-lg-12">
                                <button class="btn btn-light py-2 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img src="assets/images/icons/google-2.png" width="18" class="me-2" alt="">Log In with Google</button>
                            </div>
                            <div class="col col-lg-12">
                                <button class="btn btn-light py-2 font-text1 fw-bold d-flex align-items-center justify-content-center w-100"><img src="assets/images/icons/apple-logo.png" width="18" class="me-2" alt="">Log In with Apple</button>
                            </div>
                        </div>
                        <div class="separator">
                            <div class="line"></div>
                            <p class="mb-0 fw-bold">OR</p>
                            <div class="line"></div>
                        </div>
                        <div class="form-body mt-4">
                            <div>
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </div>
                            <form class="row g-3" action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="col-12">
                                    <label for="inputUsername" class="form-label" :value="__('Name')">Username</label>
                                    <input :value="old('name')" type="name" name="name" class="form-control" id="inputUsername" placeholder="Jhon">
                                </div>
                                <div class="col-12">
                                    <label for="inputEmailAddress" class="form-label" :value="__('Email')">Email Address</label>
                                    <input :value="old('email')" name="email" type="email" class="form-control" id="inputEmailAddress" placeholder="example@user.com" :messages="$errors->get('email')">
                                </div>
                                <div class="col-12">
                                    <label for="inputChoosePassword" class="form-label" :value="__('Password')">Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input name="password" type="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password" :messages="$errors->get('password')">
                                        <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                                    </div>
                                </div>
                                <!-- cofirm pass -->
                                <div class="col-12">
                                    <label for="password_confirmation" :value="__('Confirm Password')">Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password">
                                        <a href="javascript:;" class="input-group-text bg-transparent"><i class="bi bi-eye-slash-fill"></i></a>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms &amp; Conditions</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-start">
                                        <p class="mb-0">Already have an account? <a href="auth-boxed-login.html">Sign in here</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-flex d-none">
                    <div class="p-3 rounded-4 w-100 d-flex align-items-center justify-content-center border-3 bg-primary">
                        <img src="assets/images/boxed-register.png" class="img-fluid rounded-4" alt="">
                    </div>

                </div>
            </div><!--end row-->
        </div>

    </div>

    <!--authentication-->




    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bi-eye-slash-fill");
                    $('#show_hide_password i').removeClass("bi-eye-fill");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bi-eye-slash-fill");
                    $('#show_hide_password i').addClass("bi-eye-fill");
                }
            });
        });
    </script>

</body>

</html>