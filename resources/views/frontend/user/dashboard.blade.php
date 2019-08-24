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
                                <a href="{{route('frontend.user.dashboard')}}" class="kt-widget__item kt-widget__item--active">
                                    Perfil
                                </a>

                                <a href="{{route('frontend.user.account')}}" class="kt-widget__item">
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
                                    <h3 class="kt-portlet__head-title">Informações Pessoais <small> Atualização</small></h3>
                                </div>

                            </div>
                            <form class="kt-form kt-form--label-right" method="post" action="{{route('frontend.user.profile.update')}}" enctype="multipart/form-data">
                                @method('PATCH')
                                @csrf
                                <input type="hidden" name="avatar_type" value="storage">
                                <div class="kt-portlet__body">
                                    <div class="kt-section kt-section--first">
                                        <div class="kt-section__body">
                                            <div class="row">
                                                <label class="col-xl-3"></label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <h3 class="kt-section__title kt-section__title-sm"></h3>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Foto</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="kt-avatar kt-avatar--outline kt-avatar--circle" id="kt_apps_user_add_avatar">
                                                        <div class="kt-avatar__holder" style="background-image: url({{ $logged_in_user->picture }});"></div>
                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                            <i class="fa fa-pen"></i>
                                                            <input type="file" name="avatar_location" accept=".png, .jpg, .jpeg">
                                                        </label>
                                                        <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
																				<i class="fa fa-times"></i>
																			</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Nome</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control" name="first_name" type="text" value="{{ $logged_in_user->first_name }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Sobrenome</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control" name="last_name" type="text" value="{{ $logged_in_user->last_name }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Telefone</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                        <input type="text" name="telefone" class="form-control" value="{{ $logged_in_user->telefone }}" placeholder="Phone" aria-describedby="basic-addon1">
                                                    </div>
                                                    <span class="form-text text-muted">Nós não iremos compartilhar com ninguem sem a sua autorização.</span>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                        <input type="text" class="form-control" value="{{ $logged_in_user->email }}" disabled placeholder="Email" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Redes Sociais:</h3>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">facebook</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control" type="text" value="{{ $logged_in_user->facebook }}" name="facebook">

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Twitter</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control" type="text" value="{{ $logged_in_user->twitter }}" name="twitter">

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Google</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control" type="text" value="{{ $logged_in_user->google }}" name="google">

                                                </div>
                                            </div>





                                        </div>
                                    </div>
                                </div>
                                <div class="kt-portlet__foot">
                                    <div class="kt-form__actions">
                                        <div class="row">
                                            <div class="col-lg-3 col-xl-3">
                                            </div>
                                            <div class="col-lg-9 col-xl-9">
                                                <button type="submit" class="btn btn-success">Atualizar</button>&nbsp;
                                                <button type="reset" class="btn btn-secondary">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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

