<form action="{{route('admin.campos.store')}}" class="" method="post" id="form_create">
    @csrf
    <input type="hidden" name="foreign_key" value="" id="foreign_key">
    <input type="hidden" name="id" value="" id="id">
    <div class="col-md-12">

        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" style="margin-bottom: 15px;" required>
        </div>

        <div class="form-group">
            <label>Label</label>
            <input type="text" class="form-control" name="label" id="label" style="margin-bottom: 15px;" required>
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
            <label>Tipo</label>
            <select class="form-control" name="tipo" id="tipo" required>
                <option value="string">string</option>
                <option value="text">texto</option>
                <option value="number">numero</option>
                <option value="data">data</option>
                <option value="time">hora</option>
                <option value="datetime">datahora</option>
                <option value="email">email</option>
                <option value="select">select</option>
                <option value="radio">radio</option>
                <option value="checkbox">checkbox</option>
                <option value="file">upload</option>
                <option value="image">imagem</option>
            </select>
        </div>


        <div class="form-group" style="margin-bottom: 15px;">
            <div class="kt-radio-inline">
                <label class="kt-checkbox kt-checkbox--brand">
                    <input type="hidden" name="form">
                    <input type="checkbox" name="form" id="form" required> Formulário
                    <span></span>
                </label>
            </div>
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
            <div class="kt-radio-inline">
                <label class="kt-checkbox kt-checkbox--brand">
                    <input type="hidden" name="grid">
                    <input type="checkbox" name="grid" id="grid" required> Grid
                    <span></span>
                </label>
            </div>
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
            <div class="kt-radio-inline">
                <label class="kt-checkbox kt-checkbox--brand">
                    <input type="hidden" name="obrigatorio" >
                    <input type="checkbox" name="obrigatorio" id="obrigatorio" required> Obrigatório
                    <span></span>
                </label>
            </div>
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
            <label>Opções</label>
            <input type="text" class="form-control" name="opcoes" id="opcoes">
        </div>




        <div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
            <div class="card">
                <div class="card-header" id="headingOne7">
                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne7" aria-expanded="false" aria-controls="collapseOne7">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero"></path>
                                <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "></path>
                            </g>
                        </svg>+Opções
                    </div>
                </div>
                <div id="collapseOne7" class="collapse" aria-labelledby="headingOne7" data-parent="#accordionExample7" style="">
                    <div class="card-body">

                        <div class="form-group">
                            <label>Observacoes</label>
                            <textarea class="form-control" rows="3" name="observacoes" id="observacoes"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Tamanho</label>
                            <input type="text" class="form-control" name="tamanho" id="tamanho">
                        </div>

                        <div class="form-group">
                            <label>Ordem</label>
                            <input type="text" class="form-control" name="ordem" id="ordem">
                        </div>

                        <div class="form-group">
                            <label>valor Padrao</label>
                            <input type="text" class="form-control" name="valor_padrao" id="valor_padrao">
                        </div>

                        <div class="form-group">
                            <div class="kt-radio-inline">
                                <label class="kt-checkbox kt-checkbox--brand">
                                    <input type="hidden" name="desabilitado">
                                    <input type="checkbox" name="desabilitado" id="desabilitado"> Desabilitado?
                                    <span></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="kt-radio-inline">
                                <label class="kt-checkbox kt-checkbox--brand">
                                    <input type="hidden" name="somente_leitura">
                                    <input type="checkbox" name="somente_leitura" id="somente_leitura"> Somente Leitura?
                                    <span></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Classe</label>
                            <input type="text" class="form-control" name="classe" id="classe">
                        </div>

                        <div class="form-group">
                            <label>Style</label>
                            <input type="text" class="form-control" name="style" id="style">
                        </div>

                        <div class="form-group">
                            <label>Onclick</label>
                            <input type="text" class="form-control" name="onclick" id="onclick">
                        </div>

                    </div>
                </div>
            </div>

        </div>



    </div>


</form>
