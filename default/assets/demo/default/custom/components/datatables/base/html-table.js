//== Class definition

var DatatableHtmlTableDemo = function() {
  //== Private functions

  // demo initializer
  var demo = function() {

    var datatable = $('.m-datatable').mDatatable({
      data: {
        saveState: {cookie: false},
        /* import json file to fill the database
        type: 'remote',
				source: {
					read: {
						url: 'http://server.com/table.php'
					}
        },
        */ 
      },
      search: {
        input: $('#generalSearch'),
      },
      columns: [
        {
          field: "Id",
          title: "id",
          width: 30,
          textAlign: 'center',
        },
        {
          field: "Image",
          title: "image",
          width: 150,
          textAlign: 'center',
          sortable: false,
        },
        {
          field: "Referencia",
          title: "referencia",
          width: 100,
        },
        {
          field: "Tipo",
          title: "tipo",
          width: 100,
        },
        {
          field: "Localidad",
          title: "loacalidad",
          width: 100,
        },
        {
          field: "Precio de venta",
          title: "precio de venta",
          width: 100,
        },{
          field: "Visible",
          title: "visible",
          width: 60,
          sortable: false,
          template: function () {
            return '\
            <span class="m-switch m-switch--outline m-switch--icon m-switch--success">\
              <label>\
                <input type="checkbox" checked="checked">\
                <span></span>\
              </label>\
            </span>\
            ';
          }
        },
        {
          field: "Destecado",
          title: "destecado",
          width: 100,
        },
        {
          field: "Comportamiento",
          title: "comportamiento",
          width: 130,
          sortable: false,
          textAlign: 'center',
          overflow: 'visible',
          template: function () {
            return '\
              <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Editar">\
                <i class="la la-edit"></i>\
              </a>\
              <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Borrar">\
                <i class="la la-trash"></i>\
              </a>\
            ';
          }
        },
      ],
    });
  };

  return {
    //== Public functions
    init: function() {
      // init dmeo
      demo();
    },
  };
}();

jQuery(document).ready(function() {
  DatatableHtmlTableDemo.init();
});