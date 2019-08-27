<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">

            </h3>
            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            <div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											 </span>
            </div>
        </div>
        <div class="kt-subheader__toolbar">
            <a href="{{route('admin.'. $modelo->getTable().'.index')}}" class="btn btn-default btn-bold">
                Voltar </a>
            <div class="btn-group">
                <button type="button" class="btn btn-brand btn-bold" onclick="document.form1.submit();">
                    Salvar </button>
                <button type="button" class="btn btn-brand btn-bold dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </button>
                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(161px, 35px, 0px);">
                    <ul class="kt-nav">
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon flaticon2-writing"></i>
                                <span class="kt-nav__link-text">Salvar e continuar</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon flaticon2-medical-records"></i>
                                <span class="kt-nav__link-text">salvar  e novo</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="#" class="kt-nav__link">
                                <i class="kt-nav__link-icon flaticon2-hourglass-1"></i>
                                <span class="kt-nav__link-text">Salvar e Voltar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
