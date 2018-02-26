<?php include 'includes/header.php' ?>
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">	
    <?php include 'includes/sidebar.php' ?>

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <?php include 'includes/breadcrumb.php' ?>
                <?php include 'includes/pill-menu.php' ?>
            </div>
        </div>
        <!-- END: Subheader -->
		<div class="m-content">
			<div class="row">
                <div class="col-xl-12">
                    <!--begin::Portlet-->
                    <div class="m-portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Traducciones
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="m-portlet__body">
                                <a id="nuevo" href="#" class="btn btn-success m-btn m-btn--icon">
                                    <span>
                                        <i class="la la-plus"></i>
                                        <span>
                                            Nuevo
                                        </span>
                                    </span>
                                </a>

                                <!--begin::Form-->
                                <form class="m-form m-form--state" id="traducciones-nuevo" action="#" method="get" style="display: none;">
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
                                        <label for="es" class="col-form-label col-lg-1 col-sm-12">
                                            ES
                                        </label>
                                        <div class="col-lg-5 col-sm-12">
                                            <input id="es" type="text" class="form-control m-input" name="es" placeholder="es">
                                        </div>
                                    </div>

                                    <div class="form-group m-form__group row">
                                        <label for="en" class="col-form-label col-lg-1 col-sm-12">
                                            EN
                                        </label>
                                        <div class="col-lg-5 col-sm-12">
                                            <input id="en" type="text" class="form-control m-input" name="en" placeholder="en">
                                        </div>
                                    </div>

                                    <div class="form-group m-form__group row">
                                        <label for="nl" class="col-form-label col-lg-1 col-sm-12">
                                            NL
                                        </label>
                                        <div class="col-lg-5 col-sm-12">
                                            <input id="nl" type="text" class="form-control m-input" name="nl" placeholder="nl">
                                        </div>
                                    </div>

                                    <div class="form-group m-form__group row">
                                        <label for="art-es" class="col-form-label col-lg-1 col-sm-12">
                                            Art es
                                        </label>
                                        <div class="col-lg-5 col-sm-12">
                                            <input id="art-es" type="textarea" class="form-control m-input" name="art-es" placeholder="art es">
                                        </div>
                                    </div>

                                    <div class="form-group m-form__group row">
                                        <label for="art-en" class="col-form-label col-lg-1 col-sm-12">
                                            Art en
                                        </label>
                                        <div class="col-lg-5 col-sm-12">
                                            <input id="art-en" type="text" class="form-control m-input" name="art en" placeholder="art-en">
                                        </div>
                                    </div>

                                    <div class="form-group m-form__group row">
                                        <label for="art-nl" class="col-form-label col-lg-1 col-sm-12">
                                            Art nl
                                        </label>
                                        <div class="col-lg-5 col-sm-12">
                                            <input id="art-nl" type="text" class="form-control m-input" name="art-nl" placeholder="art nl">
                                        </div>
                                    </div>

                                    <div class="test">
                                        <div class="row">
                                            <div class="col-lg-12 ml-lg-auto">
                                                <button type="submit" class="btn btn-accent">
                                                    Guardar
                                                </button>
                                                <button type="reset" class="btn btn-secondary">
                                                    Cancelar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!--end::Form-->


                            
                            <?php include 'includes/search.php' ?>
                            <!--begin: Datatable -->
                            <table class="traducciones-nuevo" id="traducionnes-neuvo-table" width="100%">
                                <thead>
                                    <tr>
                                        <th title="id">
                                            Id
                                        </th>
                                        <th title="palabra">
                                            palabra o fresa
                                        </th>
                                        <th title="tradducion">
                                            Traduccion
                                        </th>
                                        <th title="comportamiento">
                                            Comportamiento
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0, $max = 10; $i <= $max; $i++) { ?>
                                        <tr>
                                            <td>
                                                id
                                            </td>
                                            <td>
                                                palabra
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    
                                </tbody>
                            </table>
                            <!--end: Datatable -->
                        </div>
                    </div>
                    <!--end::Portlet-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:: Body -->

<?php include 'includes/footer.php' ?>