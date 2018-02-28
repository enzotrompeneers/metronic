<!--begin::Form-->
<form class="m-form m-form--state m-form--fit m-form--label-align-right" id="viviendas-meta" action="#" method="get">
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
                Fecha creado
            </label>
            <div class="col-lg-4 col-md-9 col-sm-12">
                <div class='input-group date' id='m_datepicker'>
                    <input id="m_datepicker_1" type='text' class="form-control m-input" readonly name="fecha-creado" placeholder="fecha creado"/>
                    <span class="input-group-addon">
                        <i class="la la-calendar-check-o"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-3 col-sm-12">
                Fecha modificado
            </label>
            <div class="col-lg-4 col-md-9 col-sm-12">
                <div class='input-group date' id='m_datepicker'>
                    <input id="m_datepicker_1" type='text' class="form-control m-input" readonly name="fecha-modificado" placeholder="fecha modificado"/>
                    <span class="input-group-addon">
                        <i class="la la-calendar-check-o"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-3 col-sm-12">
                Opciones json
            </label>
            <div class="col-lg-4 col-md-9 col-sm-12">
                <textarea class="form-control m-input" id="opciones-json" rows="3" name="opciones-json" placeholder="Opciones json">[]</textarea>
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