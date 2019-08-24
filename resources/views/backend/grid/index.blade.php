@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))


@section('content')

    <div class="row">

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
                    <h3 class="kt-portlet__head-title">
                        {{ ucfirst($modelo->getTable())}}
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="la la-download"></i> Export
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="kt-nav">
                                        <li class="kt-nav__section kt-nav__section--first">
                                            <span class="kt-nav__section-text">Choose an option</span>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-print"></i>
                                                <span class="kt-nav__link-text">Print</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-copy"></i>
                                                <span class="kt-nav__link-text">Copy</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                <span class="kt-nav__link-text">Excel</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                <span class="kt-nav__link-text">CSV</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                <span class="kt-nav__link-text">PDF</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            &nbsp;
                            <a href="{{route('admin.'. $modelo->getTable().'.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
                                <i class="la la-plus"></i>
                                Novo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-portlet__body">

                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover" id="myTable"  style="border-bottom: 0px;">
                    <thead>
                    <tr>
                        @foreach($modelo->getCampos() as $campo)
                            @if($campo['grid'] == 'on')
                                <th style="border-bottom: 0px;">{{$campo['label']}}</th>
                            @endif
                        @endforeach
                        <th style="width: 60px;border-bottom: 0px;">Opções</th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse($dados as $dado)
                        <tr>
                            @foreach($modelo->getCampos() as $campo)
                                @if($campo['grid'] == 'on')
                                    <?php $label = $campo['nome']; ?>
                                    <td> {{$dado->$label}}</td>
                                @endif
                            @endforeach
                                <td>




                                    <a title="Editar" href="{{route('admin.'. $modelo->getTable().'.edit', $dado->id )}}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                        <i class="la la-edit"></i>
                                    </a>

                                    <a title="Deletar" onclick="excluir({{$dado->id}})" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-trash"></i></a>

                                </td>
                        </tr>
                    @empty


                    @endforelse



                    </tbody>
                </table>

                <!--end: Datatable -->
            </div>
        </div>
    </div>

    <!-- end:: Content -->

    </div>


    <div class="modal fade show" id="kt_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-modal="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Excluir Registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>

                <form name="form_excluir" method="POST" action="" id="form_excluir">
                    @csrf

                        <input type="hidden" name="_method" value="delete">

                        <div class="alert alert-light alert-elevate" role="alert" style="margin-bottom:0px">
                            <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                            <div class="alert-text">
                                Confirma a exclusão deste registro?
                            </div>
                        </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Excluir</button>

                    </div>


                </form>

            </div>
        </div>
    </div>


@endsection

@push('after-scripts')


    <!--begin::Page Scripts(used by this page) -->
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );


        function excluir(id) {

            event.preventDefault();

            var endereco = '{{route('admin.'. $modelo->getTable().'.index')}}' + '/' + id;

            $('#form_excluir').attr("action", endereco)

            $('#kt_modal_1').modal();
        }

    </script>



@endpush
