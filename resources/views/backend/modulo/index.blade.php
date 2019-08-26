@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))


@section('content')




    <div class="row">
        <div class="col-xl-12">

            <!--begin:: Widgets/Notifications-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Gerenciamento de Módulos
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active"  href="{{route('admin.modulo.create')}}">
                                    Novo
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_widget6_tab1_content" aria-expanded="true">
                            <div class="kt-notification">


                                @forelse($modulos as $modulo)
                                <a href="{{route('admin.modulo.edit', $modulo->id)}}" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" id="Combined-Shape" fill="#000000"></path>
                                                <rect id="Rectangle-Copy-2" fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
                                            </g>
                                        </svg> </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title">
                                            Modulo: {{$modulo->nome}}
                                        </div>
                                        <div class="kt-notification__item-time">
                                            {{$modulo->descricao}}
                                        </div>
                                    </div>
                                </a>
                                @empty

                                @endforelse

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--end:: Widgets/Notifications-->
        </div>
    </div><!--row-->
@endsection