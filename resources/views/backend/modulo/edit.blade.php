@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))


@section('content')


    <div class="row">
        <div class="col-md-12">

            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                <div class="kt-portlet kt-portlet--tabs">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-toolbar">
                            <ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_apps_user_edit_tab_1" role="tab" aria-selected="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon id="Bound" points="0 0 24 0 24 24 0 24"></polygon>
                                                <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" id="Shape" fill="#000000" fill-rule="nonzero"></path>
                                                <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" id="Path" fill="#000000" opacity="0.3"></path>
                                            </g>
                                        </svg> Módulo
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_apps_user_edit_tab_2" role="tab" aria-selected="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" id="Mask" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" id="Mask-Copy" fill="#000000" fill-rule="nonzero"></path>
                                            </g>
                                        </svg> Campos
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_apps_user_edit_tab_3" role="tab" aria-selected="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" id="Path-50" fill="#000000" opacity="0.3"></path>
                                                <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" id="Mask" fill="#000000" opacity="0.3"></path>
                                                <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" id="Mask-Copy" fill="#000000" opacity="0.3"></path>
                                            </g>
                                        </svg> Configurações
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_apps_user_edit_tab_4" role="tab" aria-selected="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                                                <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" id="Combined-Shape" fill="#000000"></path>
                                            </g>
                                        </svg> Settings
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="kt-portlet__body">

                            <div class="tab-content">

                                <div class="tab-pane active" id="kt_apps_user_edit_tab_1" role="tabpanel">

                                    <form action="{{route('admin.modulo.update', $modulo->id)}}" method="post" id="form1" name="form1">
                                        @csrf
                                        @method('put')

                                    <div class="kt-form kt-form--label-right">
                                        <div class="kt-form__body">
                                            <div class="kt-section kt-section--first">
                                                <div class="kt-section__body">
                                                    <div class="row">
                                                        <label class="col-xl-2"></label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <h3 class="kt-section__title kt-section__title-sm">Informações Gerais:</h3>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-xl-2 col-lg-2 col-form-label">Nome</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <input class="form-control" type="text" value="{{$modulo->nome}}" name="nome">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-2 col-lg-2 col-form-label">Descrição</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <textarea class="form-control" name="descricao" rows="4">{{$modulo->descricao}}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-2 col-lg-2 col-form-label">Tabela</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <input class="form-control" type="text" value="{{$modulo->tabela}}" name="tabela">
                                                            <span class="form-text text-muted">informe o nome da tabela sem ascento ou caracteres especiais.</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-2 col-lg-2 col-form-label">Controller</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <input class="form-control" type="text" value="{{$modulo->controller}}" name="controller">
                                                            <span class="form-text text-muted">informe o nome do controller.</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-2 col-lg-2 col-form-label">Icone</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <input class="form-control" type="text" value="{{$modulo->icone}}" name="icone">
                                                            <span class="form-text text-muted">nome do icone.</span>
                                                        </div>
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
                                                        <button type="submit" class="btn btn-success">Salvar</button>&nbsp;
                                                        <button type="reset" class="btn btn-secondary">Cancelar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="tab-pane" id="kt_apps_user_edit_tab_2" role="tabpanel">
                                    <div class="kt-form kt-form--label-right">
                                        <div class="kt-form__body">


                                            <div class="kt-section kt-section--first">
                                                <div class="kt-section__body">


                                                    <button class="btn btn-primary" style="margin-bottom:10px;" data-toggle="modal" data-target="#modal_novo" onclick="preparar()">Novo</button>




                                                        <table class="table table-bordered table-hover " id="campos_table">
                                                            <thead class="thead-light">
                                                            <tr>
                                                                <th style="padding: 5px 9px">ID</th>
                                                                <th style="padding: 5px 9px">Nome</th>
                                                                <th style="padding: 5px 9px">Tipo</th>
                                                                <th style="padding: 5px 9px">Opçoes</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            @forelse($modulo->campos as $campos)
                                                            <tr>
                                                                <td>{{$campos->id}}</td>
                                                                <td>{{$campos->nome}}</td>
                                                                <td>{{$campos->tipo}}</td>
                                                                <td>
                                                                    <a class="kt-nav__link" href="#" onclick="editar({{$campos->id}})"><i class="kt-nav__link-icon flaticon2-contract"></i><span class="kt-nav__link-text"> Editar</span></a>

                                                                </td>
                                                            </tr>

                                                            @empty

                                                                <tr>
                                                                    <td>Nenhum registro localizado!</td>

                                                                </tr>

                                                            @endforelse

                                                            </tbody>
                                                        </table>



                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="kt_apps_user_edit_tab_3" role="tabpanel">
                                    <div class="kt-form kt-form--label-right">
                                        <div class="kt-form__body">
                                            <div class="kt-section kt-section--first">
                                                <div class="kt-section__body">
                                                    <div class="alert alert-solid-danger alert-bold fade show kt-margin-t-20 kt-margin-b-40" role="alert">
                                                        <div class="alert-icon"><i class="fa fa-exclamation-triangle"></i></div>
                                                        <div class="alert-text">Configure user passwords to expire periodically. <br>Users will need warning that their passwords are going to expire, or they might inadvertently get locked out of the system!</div>
                                                        <div class="alert-close">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true"><i class="la la-close"></i></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-xl-3"></label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <h3 class="kt-section__title kt-section__title-sm">Change Or Recover Your Password:</h3>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Current Password</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <input type="password" class="form-control" value="" placeholder="Current password">
                                                            <a href="#" class="kt-link kt-font-sm kt-font-bold kt-margin-t-5">Forgot password ?</a>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">New Password</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <input type="password" class="form-control" value="" placeholder="New password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-last row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Verify Password</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <input type="password" class="form-control" value="" placeholder="Verify password">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>
                                        <div class="kt-form__actions">
                                            <div class="row">
                                                <div class="col-xl-3"></div>
                                                <div class="col-lg-9 col-xl-6">
                                                    <a href="#" class="btn btn-label-brand btn-bold">Save changes</a>
                                                    <a href="#" class="btn btn-clean btn-bold">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="kt_apps_user_edit_tab_4" role="tabpanel">
                                    <div class="kt-form kt-form--label-right">
                                        <div class="kt-form__body">
                                            <div class="kt-section kt-section--first">
                                                <div class="kt-section__body">
                                                    <div class="row">
                                                        <label class="col-xl-3"></label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <h3 class="kt-section__title kt-section__title-sm">Setup Email Notification:</h3>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-sm row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Email Notification</label>
                                                        <div class="col-lg-9 col-xl-6">
																		<span class="kt-switch">
																			<label>
																				<input type="checkbox" checked="checked" name="email_notification_1">
																				<span></span>
																			</label>
																		</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-last row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Send Copy To Personal Email</label>
                                                        <div class="col-lg-9 col-xl-6">
																		<span class="kt-switch">
																			<label>
																				<input type="checkbox" name="email_notification_2">
																				<span></span>
																			</label>
																		</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                                            <div class="kt-section kt-section--first">
                                                <div class="kt-section__body">
                                                    <div class="row">
                                                        <label class="col-xl-3"></label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <h3 class="kt-section__title kt-section__title-sm">Activity Related Emails:</h3>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">When To Email</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <div class="kt-checkbox-list">
                                                                <label class="kt-checkbox">
                                                                    <input type="checkbox"> You have new notifications.
                                                                    <span></span>
                                                                </label>
                                                                <label class="kt-checkbox">
                                                                    <input type="checkbox"> You're sent a direct message
                                                                    <span></span>
                                                                </label>
                                                                <label class="kt-checkbox">
                                                                    <input type="checkbox" checked="checked"> Someone adds you as a connection
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-last row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">When To Escalate Emails</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <div class="kt-checkbox-list">
                                                                <label class="kt-checkbox kt-checkbox--brand">
                                                                    <input type="checkbox"> Upon new order.
                                                                    <span></span>
                                                                </label>
                                                                <label class="kt-checkbox kt-checkbox--brand">
                                                                    <input type="checkbox"> New membership approval
                                                                    <span></span>
                                                                </label>
                                                                <label class="kt-checkbox kt-checkbox--brand">
                                                                    <input type="checkbox" checked="checked"> Member registration
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                                            <div class="kt-section kt-section--first">
                                                <div class="kt-section__body">
                                                    <div class="row">
                                                        <label class="col-xl-3"></label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <h3 class="kt-section__title kt-section__title-sm">Updates From Keenthemes:</h3>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Email You With</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <div class="kt-checkbox-list">
                                                                <label class="kt-checkbox">
                                                                    <input type="checkbox"> News about Metronic product and feature updates
                                                                    <span></span>
                                                                </label>
                                                                <label class="kt-checkbox">
                                                                    <input type="checkbox"> Tips on getting more out of Keen
                                                                    <span></span>
                                                                </label>
                                                                <label class="kt-checkbox">
                                                                    <input type="checkbox" checked="checked"> Things you missed since you last logged into Keen
                                                                    <span></span>
                                                                </label>
                                                                <label class="kt-checkbox">
                                                                    <input type="checkbox" checked="checked"> News about Metronic on partner products and other services
                                                                    <span></span>
                                                                </label>
                                                                <label class="kt-checkbox">
                                                                    <input type="checkbox" checked="checked"> Tips on Metronic business products
                                                                    <span></span>
                                                                </label>
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
                </div>
            </div>


        </div>


    </div><!--row-->
@endsection

@push('before-scripts')
    <script type="application/javascript">


        function preparar(){

            document.getElementById('foreign_key').value = '{{$modulo->id}}';
            $('#form_create').resetForm();
            $('#id').val('');
        }

        function salvar(){

            event.preventDefault();

            var id = $('#id').val();


            if(id > 0){

                var end = '{{route("admin.campos.update",'')}}' + '/' + id;
                var type = 'PUT';

            }else{

                var end = '{{route("admin.campos.store")}}';
                var type = 'POST';

            }


            var dados = $('#form_create').serialize();

            console.log(dados);

            jQuery.ajax({
                type: type,
                url: end,
                data: dados,
                success: function( data )
                {
                    $('#form_create').resetForm();
                    $('#modal_novo').modal('hide');

                    carrega_tabela();

                }
            });




        }


        function editar(id){
            event.preventDefault();

            $('#form_create').resetForm();

            var end = '{{route("admin.edit_campos",'')}}' + '/' + id;


            jQuery.ajax({
                type: "GET",
                url: end,
                success: function( data )
                {
                    $('#modal_novo').modal('show');

                    $.each(data, function(index, valor) {

                        if(valor != null && index != 'created_at' && index != 'updated_at' && index != 'modulo_id') {

                            $('#'+ index).val(valor) ;

                            if(valor == 'on'){

                                $('#'+ index).prop("checked", true) ;
                            }

                        }




                    });



                }
            });

        }


        function carrega_tabela(){


            $("#campos_table > tbody").html("");

            var end = '{{route("admin.lista_campos",'')}}' + '/' + '{{$modulo->id}}';

            jQuery.ajax({
                type: "GET",
                url: end,
                success: function( data )
                {

                    $.each(data, function(index, valor) {


                        $('#campos_table').append('<tr><td>'+ valor.id +'</td><td>'+ valor.nome +'</td><td>'+ valor.tipo +'</td><td><a class="kt-nav__link" href="#" onclick="editar(' + valor.id  + ')"><i class="kt-nav__link-icon flaticon2-contract"></i><span class="kt-nav__link-text"> Editar</span></a></td></tr>');

                    })

                }
            });



        }







    </script>
@endpush

@section('formulario')


    @include('backend.campo.create')

@endsection
