<!--begin::Portlet-->
<div class="m-portlet">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                    Principal
                </h3>
            </div>
        </div>
    </div>
    <!--begin::Form-->
    <form class="m-form m-form--state m-form--fit m-form--label-align-right" id="principal" action="#" method="get">
        <div class="m-portlet__body">
            <div class="m-form__content">
                <div class="m-alert m-alert--icon alert alert-warning m--hide" role="alert" id="m_form_2_msg">
                    <div class="m-alert__icon">
                        <i class="la la-warning"></i>
                    </div>
                    <div class="m-alert__text">
                        mensaje de error!
                    </div>
                    <div class="m-alert__close">
                        <button type="button" class="close" data-close="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Referencia
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <input type="text" class="form-control m-input" name="referencia" placeholder="Referencia">
                </div>
            </div>

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Titulo es
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <input type="text" class="form-control m-input" name="titulo-es" placeholder="Titulo es">
                </div>
            </div>

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Titulo en
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <input type="text" class="form-control m-input" name="titulo-es" placeholder="Titulo en">
                </div>
            </div>

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Titulo nl
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <input type="text" class="form-control m-input" name="titulo-es" placeholder="Titulo nl">
                </div>
            </div>

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Clase
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <select class="form-control m-bootstrap-select m_selectpicker" data-live-search="true" name="clase">
                        <option value="reventa">
                            Reventa
                        </option>
                        <option value="obra-nueva">
                            Obra Nueva
                        </option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <a href="#" class="btn btn-success m-btn m-btn--icon">
                        <span>
                            <i class="fa fa-plus"></i>
                            <span>
                                Crear Valor
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Tupo
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <select class="form-control m-bootstrap-select m_selectpicker" data-live-search="true">
                        <option value="adosado">
                            Adosado
                        </option>
                        <option value="apartamento">
                            Apartamento
                        </option>
                        <option value="atico">
                            Àtico
                        </option>
                        <option value="bungalow">
                            Bungalow
                        </option>
                        <option value="chalet-pareado">
                            Chalet Pareado
                        </option>
                        <option value="duplex">
                            Duplex
                        </option>
                        <option value="estudio">
                            Estudio
                        </option>
                        <option value="finca">
                            Finca
                        </option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <a href="#" class="btn btn-success m-btn m-btn--icon">
                        <span>
                            <i class="fa fa-plus"></i>
                            <span>
                                Crear Valor
                            </span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Localidad
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <select class="form-control m-bootstrap-select m_selectpicker" data-live-search="true">
                        <option value="">
                        </option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <a href="#" class="btn btn-success m-btn m-btn--icon">
                        <span>
                            <i class="fa fa-plus"></i>
                            <span>
                                Crear Valor
                            </span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Zona
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <select class="form-control m-bootstrap-select m_selectpicker" data-live-search="true">
                        <option value="">
                        </option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <a href="#" class="btn btn-success m-btn m-btn--icon">
                        <span>
                            <i class="fa fa-plus"></i>
                            <span>
                                Crear Valor
                            </span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Costa
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <select class="form-control m-bootstrap-select m_selectpicker" data-live-search="true">
                        <option value="costa-blanco-norte">
                            Costa Blanca Norte
                        </option>
                        <option value="costa-blanco-sur">
                            Costa Blanca Sur
                        </option>
                        <option value="costa-calida">
                            Costa Calida
                        </option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <a href="#" class="btn btn-success m-btn m-btn--icon">
                        <span>
                            <i class="fa fa-plus"></i>
                            <span>
                                Crear Valor
                            </span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Ano Construido
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <input type="text" class="form-control m-input" name="ano-construido" placeholder="Ano Construido">
                </div>
            </div>

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Certificado energia
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <select class="form-control m-bootstrap-select m_selectpicker" data-live-search="true">
                        <option value="x">
                            X
                        </option>
                        <option value="a">
                            A
                        </option>
                        <option value="b">
                            B
                        </option>
                        <option value="c">
                            C
                        </option>
                        <option value="d">
                            D
                        </option>
                        <option value="e">
                            E
                        </option>
                        <option value="f">
                            F
                        </option>
                        <option value="g">
                            G
                        </option>

                    </select>
                </div>
            </div>

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Video
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <input type="text" class="form-control m-input" name="video" placeholder="Video">
                </div>
            </div>


        </div>
        <div class="m-portlet__foot m-portlet__foot--fit">
            <div class="m-form__actions m-form__actions">
                <div class="row">
                    <div class="col-lg-9 ml-lg-auto">
                        <button type="submit" class="btn btn-accent">
                            Guardar
                        </button>
                        <button type="reset" class="btn btn-secondary">
                            Cancelar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--end::Form-->
</div>
<!--end::Portlet-->