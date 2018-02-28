<!--begin::Form-->
<form class="m-form m-form--state m-form--fit m-form--label-align-right" id="viviendas-notas-acceso" action="#" method="get">
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
            <label for="nombre" class="col-form-label col-lg-3 col-sm-12">
                Acceso nombre contacto
            </label>
            <div class="col-lg-4 col-md-9 col-sm-12 m-input-icon m-input-icon--left">
                <input id="nombre" type="text" class="form-control m-input" name="acceso-nombre-contacto" placeholder="Acceso nombre contacto">
                <span class="m-input-icon__icon m-input-icon__icon--left">
                    <span>
                        <i class="fa fa-user"></i>
                    </span>
                </span>
            </div>
        </div>

        <div class="form-group m-form__group row">
            <label for="telefono" class="col-form-label col-lg-3 col-sm-12">
                Acceso telefono contacto
            </label>
            <div class="col-lg-4 col-md-9 col-sm-12 m-input-icon m-input-icon--left">
                <input id="telefono" type="text" class="form-control m-input" name="acceso-telefono-contacto" placeholder="Acceso telefono contacto">
                <span class="m-input-icon__icon m-input-icon__icon--left">
                    <span>
                        <i class="fa fa-phone"></i>
                    </span>
                </span>
            </div>
        </div>

        <div class="form-group m-form__group row">
            <label for="clave" class="col-form-label col-lg-3 col-sm-12">
                Acceso referencia clave
            </label>
            <div class="col-lg-4 col-md-9 col-sm-12 m-input-icon m-input-icon--left">
                <input id="clave" type="text" class="form-control m-input" name="acceso-referncia-clave" placeholder="Acceso referencia clave">
                <span class="m-input-icon__icon m-input-icon__icon--left">
                    <span>
                        <i class="fa fa-key"></i>
                    </span>
                </span>
            </div>
        </div>

        <div class="form-group m-form__group row">
            <label for="ubicacion" class="col-form-label col-lg-3 col-sm-12">
                Acceso ubicacion clave
            </label>
            <div class="col-lg-4 col-md-9 col-sm-12 m-input-icon m-input-icon--left">
                <input id="ubicacion" type="text" class="form-control m-input" name="acceso-ubicacion-clave" placeholder="Acceso ubicacion clave">
                <span class="m-input-icon__icon m-input-icon__icon--left">
                    <span>
                        <i class="fa fa-key"></i>
                    </span>
                </span>
            </div>
        </div>

        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-3 col-sm-12">
                Acceso notas
            </label>
            <div class="col-lg-8 col-md-9 col-sm-12">
                <div class="summernote" name="acceso-notas"></div>
            </div>
        </div>

        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-3 col-sm-12">
                Alarma notas
            </label>
            <div class="col-lg-8 col-md-9 col-sm-12">
                <div class="summernote" name="alarma-notas"></div>
            </div>
        </div>

        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-3 col-sm-12">
                Observaciones
            </label>
            <div class="col-lg-8 col-md-9 col-sm-12">
                <div class="summernote" name="observaciones"></div>
            </div>
        </div>

        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-3 col-sm-12">
                Id xml
            </label>
            <div class="col-lg-4 col-md-9 col-sm-12">
                <input type="text" class="form-control m-input" name="id-xml" placeholder="Id xml">
            </div>
        </div>

        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-3 col-sm-12">
                Agente
            </label>
            <div class="col-lg-4 col-md-9 col-sm-12">
                <input type="text" class="form-control m-input" name="agente" placeholder="Agente">
            </div>
        </div>
    </div>

    <div class="m-portlet__foot m-portlet__foot--fit">
        <div class="m-form__actions m-form__actions">
            <div class="row">
                <div class="col-lg-9 ml-lg-auto">
                    <button type="submit" class="btn btn-success">
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