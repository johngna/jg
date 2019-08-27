<!DOCTYPE html>
@langrtl
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @endlangrtl
    <head>

        <!--begin::Base Path (base relative path for assets of this page) -->
        <base href="{{url('/admin')}}">

        <!--end::Base Path -->
        <meta charset="utf-8" />
        <title>ANIMAX | </title>
        <meta name="description" content="Page with empty content">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('meta')

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

    @stack('before-styles')

    <!--end::Fonts -->

        <!--begin::Page Vendors Styles(used by this page) -->
        <link href="./assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

        <!--end::Page Vendors Styles -->

        <!--begin:: Global Mandatory Vendors -->
        <link href="./assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

        <!--end:: Global Mandatory Vendors -->

        <!--begin:: Global Optional Vendors -->
        <link href="./assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
        <link href="./assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
        <!--end:: Global Optional Vendors -->

        <!--begin::Global Theme Styles(used by all pages) -->
        <link href="./assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

        <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        <link href="./assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />


        <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

    {{--  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" />--}}
    {{--<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />--}}

    <!--end::Layout Skins -->
        <link rel="shortcut icon" href="./assets/media/logos/favicon.ico" />

        {{--{{ style(mix('css/backend.css')) }}--}}
        @stack('after-styles')
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="{{ config('backend.body_classes') }}  kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-aside--enabled kt-aside--fixed">

    <!-- begin:: Page -->



    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <a href="demo1/index.html">
                {{--<img alt="Logo" src="./assets/media/logos/logo-light.png" />--}}
                <h4 style="color:white">ANIMAX</h4>
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
            {{--<button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>--}}
            {{--<button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>--}}
        </div>
    </div>

    <!-- end:: Header Mobile -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

            <!-- begin:: Aside -->
        @include('frontend.includes.aside')
        <!-- end:: Aside -->
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">


                <!-- begin:: Header -->
            @include('frontend.includes.header')
            <!-- end:: Header -->
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                    <!-- begin:: Subheader -->
                {{--@include('backend.includes.subheader')--}}
                <!-- end:: Subheader -->

                    <!-- begin:: Content -->
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                        @include('includes.partials.messages')


                        <div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--height-fluid">
                            <div class="kt-portlet__head kt-portlet__space-x">
                                <div class="kt-portlet__head-label">

                                </div>

                            </div>
                            <div class="kt-portlet__body">
                                <div class="kt-widget28">
                                    {{-- <div class="kt-widget28__visual" style="background-image: url(./assets/media//misc/bg-2.jpg)"></div>--}}
                                    <div class="kt-widget28__wrapper kt-portlet__space-x">

                                        <!-- begin::Tab Content -->
                                        <div class="tab-content">
                                            <div id="menu11" class="tab-pane">
                                                <div class="kt-widget28__tab-items">
                                                    <div class="kt-widget28__tab-item">
                                                        <span>Company Name</span>
                                                        <span>SLT Back-end Solutions</span>
                                                    </div>
                                                    <div class="kt-widget28__tab-item">
                                                        <span>INE Number</span>
                                                        <span>D330-1234562546</span>
                                                    </div>
                                                    <div class="kt-widget28__tab-item">
                                                        <span>Total Charges</span>
                                                        <span>USD 1,250.000</span>
                                                    </div>
                                                    <div class="kt-widget28__tab-item">
                                                        <span>Project Description</span>
                                                        <span>Creating Back-end Components</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="menu21" class="tab-pane fade">
                                                <div class="kt-widget28__tab-items">
                                                    <div class="kt-widget28__tab-item">
                                                        <span>Project Description</span>
                                                        <span>Back-End Web Architecture</span>
                                                    </div>
                                                    <div class="kt-widget28__tab-item">
                                                        <span>Total Charges</span>
                                                        <span>USD 2,170.000</span>
                                                    </div>
                                                    <div class="kt-widget28__tab-item">
                                                        <span>INE Number</span>
                                                        <span>D110-1234562546</span>
                                                    </div>
                                                    <div class="kt-widget28__tab-item">
                                                        <span>Company Name</span>
                                                        <span>SLT Back-end Solutions</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="menu31" class="tab-pane fade active">

                                                    <!--begin:: Widgets/Blog-->
                                                    <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                                        <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                                                            <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 200px; background-image: url(./assets/media//products/product21.jpg)">
                                                                <h3 class="kt-widget19__title kt-font-light">
                                                                    Conheça o CBCA
                                                                </h3>
                                                                <div class="kt-widget19__shadow"></div>
                                                                <div class="kt-widget19__labels">
                                                                    <a href="#" class="btn btn-label-light-o2 btn-bold ">Artigo</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="kt-portlet__body">
                                                            <div class="kt-widget19__wrapper">
                                                                <div class="kt-widget19__content">
                                                                    <div class="kt-widget19__userpic">
                                                                        <img src="./assets/media//users/user1.jpg" alt="">
                                                                    </div>
                                                                    <div class="kt-widget19__info">
                                                                        <a href="#" class="kt-widget19__username">
                                                                            Administrador
                                                                        </a>
                                                                        <span class="kt-widget19__time">
						Presidente do Conselho do CBCA
					</span>
                                                                    </div>
                                                                    <div class="kt-widget19__stats">
                    <span class="kt-widget19__number kt-font-brand">
						18
					</span>
                                                                        <a href="#" class="kt-widget19__comment">
                                                                            Comentários
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="kt-widget19__text">
                                                                    O Centro Brasileiro de Cuidado Animal é uma associação sem fins lucrativos, mantenedora do Hospital Veterinário ANIMAX
                                                                </div>
                                                            </div>
                                                            <div class="kt-widget19__action">
                                                                <a href="#" class="btn btn-sm btn-label-brand btn-bold">Leia Mais...</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </div>
                                        </div>
                                        <!-- end::Tab Content -->
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>

                    <!-- end:: Content -->
                </div>

                <!-- begin:: Footer -->
            @include('frontend.includes.footer')
            <!-- end:: Footer -->
            </div>
        </div>
    </div>

    <!-- end:: Page -->


    <!-- Modal -->
    <div class="modal fade" id="modal_novo" tabindex="-1" role="dialog" aria-labelledby="modal_novo" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Incluir</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @yield('formulario')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" onclick="salvar()">Salvar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- begin::Quick Panel -->
    {{--@include('frontend.includes.qpanel')--}}

    <!-- end::Quick Panel -->

    <!-- begin::Scrolltop -->
    <div id="kt_scrolltop" class="kt-scrolltop">
        <i class="fa fa-arrow-up"></i>
    </div>

    <!-- end::Scrolltop -->

    <!-- begin::Sticky Toolbar -->
    {{--<ul class="kt-sticky-toolbar" style="margin-top: 30px;">
        <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success" id="kt_demo_panel_toggle" data-toggle="kt-tooltip" title="Check out more demos" data-placement="right">
            <a href="#" class=""><i class="flaticon2-drop"></i></a>
        </li>
        <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--brand" data-toggle="kt-tooltip" title="Layout Builder" data-placement="left">
            <a href="https://keenthemes.com/metronic/preview/demo1/builder.html" target="_blank"><i class="flaticon2-gear"></i></a>
        </li>
        <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--warning" data-toggle="kt-tooltip" title="Documentation" data-placement="left">
            <a href="https://keenthemes.com/metronic/?page=docs" target="_blank"><i class="flaticon2-telegram-logo"></i></a>
        </li>
        <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--danger" id="kt_sticky_toolbar_chat_toggler" data-toggle="kt-tooltip" title="Chat Example" data-placement="left">
            <a href="#" data-toggle="modal" data-target="#kt_chat_modal"><i class="flaticon2-chat-1"></i></a>
        </li>
    </ul>--}}

    <!-- end::Sticky Toolbar -->

    @stack('before-scripts')
    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>

        /*document.getElementsByClassName("btn btn-danger")[1].addEventListener("click", function(event){
            event.preventDefault()
        });
        */



        for(var i=0; i<document.querySelectorAll("[data-method]").length; i++){
            var x = document.querySelectorAll("[data-method]")[i];

            x.addEventListener("click", function(event){
                event.preventDefault()
            });

        }


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

    <!-- Scripts -->
    @stack('before-scripts')
    {!! script(mix('js/manifest.js')) !!}
    {!! script(mix('js/vendor.js')) !!}
    {!! script(mix('js/backend.js')) !!}
    @stack('after-scripts')


    <!--end::Page Scripts -->

    <!-- end::Global Config -->

    <!--begin:: Global Mandatory Vendors -->
    {{--<script src="./assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>--}}
    <script src="./assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <script src="./assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
    <script src="./assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
    <script src="./assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
    <script src="./assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
    <script src="./assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
    <script src="./assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
    <script src="./assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="./assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Vendors(used by this page) -->
    <script src="./assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
    <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
    <script src="./assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>

    <!--end::Page Vendors -->
    <script src="./assets/js/demo1/pages/crud/forms/widgets/form-repeater.js" type="text/javascript"></script>

    <!--begin::Page Scripts(used by this page) -->
    {{--<script src="./assets/js/demo1/pages/dashboard.js" type="text/javascript"></script>--}}

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    @stack('after-scripts')

    </body>

    <!-- end::Body -->
    </html>
