@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )


@section('content')

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <!--Begin::App-->
        <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">

            <!--Begin:: App Aside Mobile Toggle-->
            <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
                <i class="la la-close"></i>
            </button>

            <!--End:: App Aside Mobile Toggle-->

            <!--Begin:: App Aside-->
            <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">

                <!--begin:: Widgets/Applications/User/Profile4-->
                <div class="kt-portlet kt-portlet--height-fluid-">
                    <div class="kt-portlet__body">

                        <!--begin::Widget -->
                        <div class="kt-widget kt-widget--user-profile-4">
                            <div class="kt-widget__head">
                                <div class="kt-widget__media">
                                    <img class="kt-widget__img kt-hidden-" src="{{ $logged_in_user->picture }}" alt="image">
                                    <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                                        JD
                                    </div>
                                </div>
                                <div class="kt-widget__content">
                                    <div class="kt-widget__section">
                                        <a href="#" class="kt-widget__username">
                                            {{ $logged_in_user->name }}
                                        </a>
                                        <div class="kt-widget__button">
                                            <span class="btn btn-label-primary btn-sm">{{ ($logged_in_user->confirmed == 1 ? 'Ativo' : 'Inativo') }}</span>
                                        </div>
                                        <div class="kt-widget__action">
                                            <a href="#" class="btn btn-icon btn-circle btn-label-facebook">
                                                <i class="socicon-facebook"></i>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-circle btn-label-twitter">
                                                <i class="socicon-twitter"></i>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-circle btn-label-google">
                                                <i class="socicon-google"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-widget__body">
                                <a href="{{route('frontend.user.dashboard')}}" class="kt-widget__item">
                                    Perfil
                                </a>

                                <a href="{{route('frontend.user.account')}}" class="kt-widget__item  kt-widget__item--active">
                                    Alterar Senha
                                </a>
                               {{-- <a href="#" class="kt-widget__item">
                                    Email settings
                                </a>
                                <a href="#" class="kt-widget__item">
                                    Saved Credit Cards
                                </a>
                                <a href="#" class="kt-widget__item">
                                    Tax information
                                </a>--}}
                            </div>
                        </div>

                        <!--end::Widget -->
                    </div>
                </div>

                <!--end:: Widgets/Applications/User/Profile4-->


            </div>

            <!--End:: App Aside-->

            <!--Begin:: App Content-->
            <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="kt-portlet">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">Alterar Senha <small> Atualização</small></h3>
                                </div>

                            </div>



                            <div class="kt-portlet__body">

                            {{ html()->form('PATCH', route('frontend.auth.password.update'))->open() }}
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        {{ html()->label(__('validation.attributes.frontend.old_password'))->for('old_password') }}

                                        {{ html()->password('old_password')
                                            ->class('form-control')
                                            ->placeholder(__('validation.attributes.frontend.old_password'))
                                            ->autofocus()
                                            ->required() }}
                                    </div><!--form-group-->
                                </div><!--col-->
                            </div><!--row-->

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        {{ html()->label(__('validation.attributes.frontend.password'))->for('password') }}

                                        {{ html()->password('password')
                                            ->class('form-control')
                                            ->placeholder(__('validation.attributes.frontend.password'))
                                            ->required() }}
                                    </div><!--form-group-->
                                </div><!--col-->
                            </div><!--row-->

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        {{ html()->label(__('validation.attributes.frontend.password_confirmation'))->for('password_confirmation') }}

                                        {{ html()->password('password_confirmation')
                                            ->class('form-control')
                                            ->placeholder(__('validation.attributes.frontend.password_confirmation'))
                                            ->required() }}
                                    </div><!--form-group-->
                                </div><!--col-->
                            </div><!--row-->

                            <div class="row">
                                <div class="col">
                                    <div class="form-group mb-0 clearfix">
                                        {{ form_submit(__('labels.general.buttons.update') . ' ' . __('validation.attributes.frontend.password')) }}
                                    </div><!--form-group-->
                                </div><!--col-->
                            </div><!--row-->
                            {{ html()->form()->close() }}


                            </div>


                        </div>
                    </div>



                </div>


            </div>




            <!--End:: App Content-->
        </div>

        <!--End::App-->
    </div>

    <!-- end:: Content -->


@endsection


