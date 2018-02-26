<!--begin: Search Form -->
<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
    <div class="row align-items-center">
        <div class="col-xl-8 order-2 order-xl-1">
            <div class="form-group m-form__group row align-items-center">
                <div class="col-md-4">
                    <div class="m-input-icon m-input-icon--left">
                        <input type="text" class="form-control m-input m-input--solid" placeholder="Buscar..." id="generalSearch">
                        <span class="m-input-icon__icon m-input-icon__icon--left">
                            <span>
                                <i class="la la-search"></i>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end: Search Form -->


<!--begin: Datatable -->
<table class="tipos" id="tipos-table" width="100%">
    <thead>
        <tr>
            <th title="id">
                Id
            </th>
            <th title="image">
                Image
            </th>
            <th title="referencia">
                Referencia
            </th>
            <th title="tipo">
                Tipo
            </th>
            <th title="localidad">
                Localidad
            </th>
            <th title="precio de venta">
                Precio de venta
            </th>
            <th title="visible">
                Visible
            </th>
            <th title="destecado">
                Destecado
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
                    image
                </td>
                <td>
                    referencia
                </td>
                <td>
                    tipo
                </td>
                <td>
                    localidad
                </td>
                <td>
                    precio de venta
                </td>
                <td>
                    visible
                </td>
                <td>
                    destecado
                </td>
            </tr>
        <?php } ?>

        <tr>
            <td>
                id
            </td>
            <td>
                testing search
            </td>
            <td>
                testing search
            </td>
            <td>
                testing search
            </td>
            <td>
                testing search
            </td>
            <td>
                testing search
            </td>
            <td>
                testing search
            </td>
            <td>
                testing search
            </td>
        </tr>
    
        
    </tbody>
</table>
<!--end: Datatable -->



