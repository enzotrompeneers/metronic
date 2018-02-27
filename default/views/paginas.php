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
                                        Paginas
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <div class="m-portlet__body">
                            <!--begin::Portlet-->
                            <div class="m-portlet m-portlet--success m-portlet--head-solid-bg m-portlet--head-sm m-portlet--collapsed" data-portlet="true" id="m_portlet_tools_1">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <div class="m-portlet__head-tools">
                                                <ul class="m-portlet__nav">
                                                    <li class="m-portlet__nav-item">
                                                        <a href=""  data-portlet-tool="toggle" class="m-portlet__nav-link m-portlet__nav-link--icon">
                                                            <i class="la la-plus"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="m-portlet__head-text">
                                                Nueva pagina
                                            </h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="m-portlet__body">
                                <!--begin::Form-->
                                    <form class="m-form m-form--state m-form--fit m-form--label-align-right" id="nueva-pagina" action="#" method="get">
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
                                                <label for="pagina" class="col-form-label col-lg-3 col-sm-12">
                                                    Nueva pagina
                                                </label>
                                                <div class="col-lg-4 col-md-9 col-sm-12">
                                                    <input id="pagina" type="text" class="form-control m-input" name="pagina" placeholder="nueva pagina">
                                                </div>
                                            </div>

                                            <div class="form-group m-form__group row">
                                                <label class="col-form-label col-lg-3 col-sm-12">
                                                    Clase
                                                </label>
                                                <div class="col-lg-4 col-md-9 col-sm-12">
                                                    <select class="form-control m-bootstrap-select m_selectpicker" data-live-search="true" name="clase">
                                                        <option value="ninguno">
                                                            Ninguno
                                                        </option>
                                                        <option value="inicio">
                                                            Inicio
                                                        </option>
                                                        <option value="inicio">
                                                            Inicio
                                                        </option>
                                                        <option value="viviendas">
                                                            Viviendas
                                                        </option>
                                                        <option value="empresa">
                                                            Empresa
                                                        </option>
                                                        <option value="contacto">
                                                            Contacto
                                                        </option>
                                                        <option value="politica-privacidad">
                                                            Politica-privacidad
                                                        </option>
                                                        <option value="aviso-legal">
                                                            Aviso-legal
                                                        </option>
                                                        <option value="politica-cookies">
                                                            Politica-cookies
                                                        </option>
                                                    </select>
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
                            </div>
                            <!--end::Portlet-->

                            <!--begin::Portlet-->
                            <div class="m-portlet m-portlet--warning m-portlet--head-solid-bg m-portlet--head-sm" data-portlet="true" id="m_portlet_tools_1">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <div class="m-portlet__head-tools">
                                                <ul class="m-portlet__nav">
                                                    <li class="m-portlet__nav-item">
                                                        <a href=""  data-portlet-tool="toggle" class="m-portlet__nav-link m-portlet__nav-link--icon">
                                                            <i class="la la-plus"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="m-portlet__head-text">
                                                Editar pagina
                                            </h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="m-portlet__body">
                                <!--begin::Form-->
                                    <form class="m-form m-form--state m-form--fit m-form--label-align-right" id="editar-pagina" action="#" method="get">
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
                                                <menu id="nestable-menu">
                                                    <button type="button" class="btn btn-accent m-btn  m-btn--icon" data-action="expand-all">
                                                        <i class="fa fa-expand"></i>
                                                        Expand All
                                                    </button>
                                                    <button type="button" class="btn btn-accent m-btn  m-btn--icon" data-action="collapse-all">
                                                        <i class="fa fa-compress"></i>
                                                        Collapse All
                                                    </button>
                                                </menu>

                                                <div class="cf nestable-lists">
                                                    

                                                    <div class="dd" id="nestable">
                                                        <ol class="dd-list">
                                                            <h1>Menú interior</h1>
                                                            <li class="dd-item" data-id="1">
                                                                <div class="dd-handle">
                                                                    <i class="fa fa-arrows"></i>
                                                                    inicio
                                                                    <i class="fa fa-edit e-right"></i>
                                                                </div>
                                                            </li>

                                                            <li class="dd-item" data-id="2">
                                                                <div class="dd-handle">
                                                                    <i class="fa fa-arrows"></i>
                                                                    viviendas
                                                                    <i class="fa fa-edit e-right"></i>
                                                                </div>

                                                                <ol class="dd-list">
                                                                    <li class="dd-item" data-id="3">
                                                                        <div class="dd-handle">
                                                                            <i class="fa fa-arrows"></i>
                                                                            empresa
                                                                            <i class="fa fa-edit e-right"></i>
                                                                        </div>
                                                                    </li>

                                                                    <li class="dd-item" data-id="4">
                                                                        <div class="dd-handle">
                                                                            <i class="fa fa-arrows"></i>
                                                                            contacto
                                                                            <i class="fa fa-edit e-right"></i>
                                                                        </div>
                                                                    </li>

                                                                    <li class="dd-item" data-id="5">
                                                                        <div class="dd-handle">
                                                                            <i class="fa fa-arrows"></i>
                                                                            politica-privacidad
                                                                            <i class="fa fa-edit e-right"></i>
                                                                        </div>
                                                                        <ol class="dd-list">
                                                                            <li class="dd-item" data-id="6">
                                                                                <div class="dd-handle">
                                                                                    <i class="fa fa-arrows"></i>
                                                                                    aviso-legal
                                                                                    <i class="fa fa-edit e-right"></i>
                                                                                </div>
                                                                            </li>
                                                                        </ol>
                                                                    </li>
                                                                </ol>
                                                            </li>
                                                            <li class="dd-item" data-id="11">
                                                                <div class="dd-handle">
                                                                <i class="fa fa-arrows"></i>
                                                                politica-cookies
                                                                <i class="fa fa-edit e-right"></i>
                                                                </div>
                                                            </li>
                                                            <h1>Menú exterior</h1>
                                                            <li class="dd-item" data-id="12">
                                                                <div class="dd-handle">
                                                                <i class="fa fa-arrows"></i>
                                                                not in the menu
                                                                <i class="fa fa-edit e-right"></i>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </div>

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
                            </div>
                            <!--end::Portlet-->

                            <!--begin::Portlet-->
                            <div class="m-portlet m-portlet--danger m-portlet--head-solid-bg m-portlet--head-sm" data-portlet="true" id="m_portlet_tools_1">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <div class="m-portlet__head-tools">
                                                <ul class="m-portlet__nav">
                                                    <li class="m-portlet__nav-item">
                                                        <a href=""  data-portlet-tool="toggle" class="m-portlet__nav-link m-portlet__nav-link--icon">
                                                            <i class="la la-plus"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="m-portlet__head-text">
                                                Borrar pagina
                                            </h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="m-portlet__body">
                                <!--begin::Form-->
                                    <form class="m-form m-form--state m-form--fit m-form--label-align-right" id="borrar-pagina" action="#" method="get">
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
                                                <label for="pagina" class="col-form-label col-lg-3 col-sm-12">
                                                    Nueva pagina
                                                </label>
                                                <div class="col-lg-4 col-md-9 col-sm-12">
                                                    <input id="pagina" type="text" class="form-control m-input" name="pagina" placeholder="nueva pagina">
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
                            </div>
                            <!--end::Portlet-->
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