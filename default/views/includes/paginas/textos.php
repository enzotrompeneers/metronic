<!--begin::Form-->
<form class="m-form m-form--state m-form--fit m-form--label-align-right" id="paginas-textos" action="#" method="get">
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
        
        <div class="form-group row">
            <label class="col-lg-12">
                Art es
            </label>
            <div class="col-lg-12">
                <div class="summernote" name="art-es"></div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-lg-12">
                Art en
            </label>
            <div class="col-lg-12">
                <div class="summernote" name="art-en"></div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-lg-12">
                Art nl
            </label>
            <div class="col-lg-12">
                <div class="summernote" name="art-nl"></div>
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