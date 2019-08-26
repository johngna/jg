<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>

    <!--begin::Base Path (base relative path for assets of this page) -->
    <base href="">

    <!--end::Base Path -->
    <meta charset="utf-8" />
    <title>ANIMAX - HOSPITAL VETERINÁRIO</title>
    <meta name="description" content="Pricing table example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="assets/css/demo1/pages/pricing/pricing-1.css" rel="stylesheet" type="text/css" />

    <!--end::Page Custom Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="assets/vendors/global/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />


    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet" type="text/css" />

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->

                <!-- begin:: Content -->
                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">




                            <div class="kt-pricing-1 kt-pricing-1--fixed">
                                <div class="kt-pricing-1__items row" >
                                    <div class="kt-pricing-1__item col-lg-12">
                                        <div class="kt-pricing-1__visual">
                                            <div class="kt-pricing-1__hexagon1"></div>
                                            <div class="kt-pricing-1__hexagon2"></div>
                                            <span class="kt-pricing-1__icon kt-font-brand"><i class="fa fa-paw"></i></span>
                                        </div>
                                        <span class="kt-pricing-1__price"> ANIMAX</span>
                                        <h2 class="kt-pricing-1__subtitle">Area do cliente</h2>
                                        <span class="kt-pricing-1__description">
													<span>Acompanhe as consultas</span>
													<span>Fique Atento(a) as vacinas</span>
													<span>Histórico de Pagamentos</span>
												</span>
                                        <div class="kt-pricing-1__btn">
                                            <a href="{{url('login')}}"  class="btn btn-pill  btn-brand btn-wide btn-uppercase btn-bolder btn-sm">Acessar</a>
                                        </div>
                                    </div>

                                </div>
                            </div>





                </div>

                <!-- end:: Content -->
            </div>



            <!-- end:: Footer -->
        </div>
    </div>
</div>

<!-- end:: Page -->



<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>

<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="assets/vendors/global/vendors.bundle.js" type="text/javascript"></script>
<script src="assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>

<!--end::Global Theme Bundle -->
</body>

<!-- end::Body -->
</html>






{{--@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-home"></i> @lang('navs.general.home')
                </div>
                <div class="card-body">
                    @lang('strings.frontend.welcome_to', ['place' => app_name()])
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

    <div class="row mb-4">
        <div class="col">
            <example-component></example-component>
        </div><!--col-->
    </div><!--row-->

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fab fa-font-awesome-flag"></i> Font Awesome @lang('strings.frontend.test')
                </div>
                <div class="card-body">
                    <i class="fas fa-home"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-pinterest"></i>
                </div><!--card-body-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection--}}
