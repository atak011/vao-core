<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href="../../../">
    <meta charset="utf-8"/>
    <title>CloudVao</title>
    <meta name="description" content="Login page example"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{ asset('vendor/vao-core/css/pages/login/login-1.css') }}" rel="stylesheet" type="text/css"/>
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('vendor/vao-core/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/vao-core/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/vao-core/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{ asset('vendor/vao-core/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/vao-core/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/vao-core/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/vao-core/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css"/>
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{ asset('vendor/vao-core/media/logos/favicon.ico') }}"/>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body"
      class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">


        <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
            <!--begin::Content body-->
            <x-vao-core-error  />

            <div class="d-flex flex-column-fluid flex-center">

                <div class="login-form login-signin">
                    <!--begin::Form-->
                    <form class="form" action="{{ route('login')  }}" method="POST" >

                    @csrf
                    <!--begin::Title-->
                        <div class="pb-13 pt-lg-0 pt-5">
                            <img src="{{ $logo ?? '' }}" width="450" class="m-auto" alt="">

                            @if(\Illuminate\Support\Facades\Config::get('theme.lang') == 'en')
                                <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Admin Area</h3>
                            @else
                                <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Personel Girişi</h3>
                            @endif


                        </div>
                        <!--begin::Title-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                            <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="text"
                                   name="email" value="{{ old('email') }}" autocomplete="off"/>
                        </div>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <div class="d-flex justify-content-between mt-n5">

                                @if(\Illuminate\Support\Facades\Config::get('theme.lang') == 'en')
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                @else
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Şifre</label>
                                @endif


                            </div>
                            <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="password"
                                   name="password" autocomplete="off"/>
                        </div>
                        <!--end::Form group-->
                        <!--begin::Action-->
                        <div class="pb-lg-0 pb-5">

                            @if(\Illuminate\Support\Facades\Config::get('theme.lang') == 'en')
                                <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Login</button>
                            @else
                                <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Giriş Yap</button>
                            @endif

                        </div>
                        <!--end::Action-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signin-->
                <!--begin::Signup-->
                <div class="login-form login-signup">
                    <!--begin::Form-->
                    <form class="form" novalidate="novalidate" id="kt_login_signup_form">
                        <!--begin::Title-->
                        <div class="pb-13 pt-lg-0 pt-5">
                            <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Sign Up</h3>
                            <p class="text-muted font-weight-bold font-size-h4">Enter your details to create your
                                account</p>
                        </div>

                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6"
                                   type="text" placeholder="Fullname" name="fullname" autocomplete="off"/>
                        </div>

                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6"
                                   type="email" placeholder="Email" name="email" autocomplete="off"/>
                        </div>

                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6"
                                   type="password" placeholder="Password" name="password" autocomplete="off"/>
                        </div>

                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6"
                                   type="password" placeholder="Confirm password" name="cpassword" autocomplete="off"/>
                        </div>

                        <div class="form-group">
                            <label class="checkbox mb-0">
                                <input type="checkbox" name="agree"/>
                                <span></span>
                                <div class="ml-2">I Agree the
                                    <a href="#">terms and conditions</a>.
                                </div>
                            </label>
                        </div>
                        <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                            <button type="button" id="kt_login_signup_submit"
                                    class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit
                            </button>
                            <button type="button" id="kt_login_signup_cancel"
                                    class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel
                            </button>
                        </div>
                    </form>
                </div>
                <div class="login-form login-forgot">
                    <form class="form" novalidate="novalidate" id="kt_login_forgot_form">
                        <div class="pb-13 pt-lg-0 pt-5">
                            <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Forgotten Password
                                ?</h3>
                            <p class="text-muted font-weight-bold font-size-h4">Enter your email to reset your
                                password</p>
                        </div>

                        <div class="form-group">
                            <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6"
                                   type="email" placeholder="Email" name="email" autocomplete="off"/>
                        </div>

                        <div class="form-group d-flex flex-wrap pb-lg-0">
                            <button type="button" id="kt_login_forgot_submit"
                                    class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit
                            </button>
                            <button type="button" id="kt_login_forgot_cancel"
                                    class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
                <div class="text-dark-50 font-size-lg font-weight-bolder mr-10">
                    <span class="mr-1">{{ \Carbon\Carbon::now()->year }} ©</span>
                    <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">CloudVao</a>
                </div>

                @if(\Illuminate\Support\Facades\Config::get('theme.lang') == 'en')
                    <a href="#" class="text-primary ml-5 font-weight-bolder font-size-lg">Help</a>
                    <a href="#" class="text-primary ml-5 font-weight-bolder font-size-lg">Contact</a>
                @else
                    <a href="#" class="text-primary ml-5 font-weight-bolder font-size-lg">Destek</a>
                    <a href="#" class="text-primary ml-5 font-weight-bolder font-size-lg">İletişim</a>
                @endif

            </div>
        </div>
    </div>
</div>
<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
<script>var KTAppSettings = {"breakpoints": {"sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400},
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{ asset('vendor/vao-core/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('vendor/vao-core/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
<script src="{{ asset('vendor/vao-core/js/scripts.bundle.js') }}"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('vendor/vao-core/js/pages/custom/login/login-general.js') }}"></script>
<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>
