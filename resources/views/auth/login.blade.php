<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <title>Aplikasi KKS Enrekang 2022 - Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width= device-width, initial-scale=1, shrink-to-fit=no" />
    <meta property="og:locale" content="id, in" />
    <link rel="shortcut icon" href="{{ asset('media/enrekang.png') }}" />
    <!--begin::Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10">
                <!--begin::Logo-->
                <a href="#" class="mb-10">
                    <img alt="Logo" src="{{ asset('media/enrekang.png') }}" class="h-100px" />
                </a>
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 mx-auto">
                    <div class="d-flex flex-center ">
                        <h3 class="mb-10 mx-auto">Aplikasi KKS Enrekang 2022</h3>
                    </div>
                    <!--begin::Form-->
                    <form class="form w-100" method="POST" action="{{ route('login') }}" novalidate="novalidate"
                        id="kt_sign_in_form">
                        @csrf
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-lg form-control-solid" type="email" name="email"
                                autocomplete="off" value="{{ old('email') }}" tabindex="1" />
                            @error('email')
                            <small class="text-danger font-weight-bold"><strong>{{ $message }}</strong></small>
                            @enderror
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack mb-2">
                                <!--begin::Label-->
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                <!--end::Label-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Input-->
                            <input class="form-control form-control-lg form-control-solid" type="password"
                                name="password" autocomplete="off" tabindex="2" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group=-->
                        <div class="fv-row mb-10">
                            <div class="form-check form-check-solid form-check-inline">
                                <input class="form-check-input" type="checkbox" name="remember" tabindex="3" />
                                <label class="form-check-label fw-bold text-dark fs-6">Ingat Saya</label>
                            </div>
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <!--begin::Submit button-->
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100">
                                <span class="indicator-label">Masuk</span>
                            </button>
                            <!--end::Submit button-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Main-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>