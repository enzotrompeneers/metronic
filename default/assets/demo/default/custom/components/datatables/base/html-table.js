

var DatatableHtmlTableDemo = function() {

  var viviendas = function() {

    if (document.getElementsByClassName('viviendas')[0]) {
      var datatable = $('.viviendas').mDatatable({
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
            sortable: true,
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
    }

    
  };
    
  var tipos = function() {
    if (document.getElementsByClassName('tipos')[0]) {

      var datatable = $('.tipos').mDatatable({
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
            field: "Nombre es",
            title: "nombre es",
            width: 100,
          },
          {
            field: "Nombre en",
            title: "nombre en",
            width: 100,
          },
          {
            field: "Nombre nl",
            title: "nombre nl",
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
          }
        ],
      });
    };
  }

  var traduccionesNueva = function() {
    if (document.getElementsByClassName('traducciones-nueva')[0]) {

      var datatable = $('.traducciones-nueva').mDatatable({
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
            field: "Clave",
            title: "clave",
            width: 100,
          },
          {
            field: "Traduccion",
            title: "traduccion",
            width: 100,
            sortable: false,
            textAlign: 'center',
            overflow: 'visible',
            template: function () {
              return '\
                <a href="#">\
                  <img src="../assets/app/media/img/icons/es.gif" alt="es">\
                </a>\
                <a href="#">\
                  <img src="../assets/app/media/img/icons/en.gif" alt="en">\
                </a>\
                <a href="#">\
                  <img src="../assets/app/media/img/icons/nl.gif" alt="nl">\
                </a>\
              ';
            }
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
  }

  var config = function() {
    if (document.getElementsByClassName('config-table')[0]) {

      var datatable = $('.config-table').mDatatable({
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
            field: "Clave",
            title: "clave",
            width: 100,
          },
          {
            field: "Valor",
            title: "valor",
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
          }
        ],
      });
    };
  }

  var emails = function() {
    if (document.getElementsByClassName('emails-table')[0]) {

      var datatable = $('.emails-table').mDatatable({
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
            field: "Nombre es",
            title: "nombre es",
            width: 100,
          },
          {
            field: "Nombre en",
            title: "nombre en",
            width: 100,
          },
          {
            field: "Nombre nl",
            title: "nombre nl",
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
          }
        ],
      });
    };
  }

  var panoramicas = function() {
    if (document.getElementsByClassName('panoramicas-table')[0]) {

      var datatable = $('.panoramicas-table').mDatatable({
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
            width: 100,
          },
          {
            field: "Nombre es",
            title: "nombre es",
            width: 100,
          },
          {
            field: "Nombre en",
            title: "nombre en",
            width: 100,
          },
          {
            field: "Nombre nl",
            title: "nombre nl",
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
          }
        ],
      });
    };
  }

  var localidades = function() {
    if (document.getElementsByClassName('localidades-table')[0]) {

      var datatable = $('.localidades-table').mDatatable({
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
            field: "Nombre es",
            title: "nombre es",
            width: 100,
          },
          {
            field: "Nombre en",
            title: "nombre en",
            width: 100,
          },
          {
            field: "Nombre nl",
            title: "nombre nl",
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
          }
        ],
      });
    };
  }
  var clases = function() {
    if (document.getElementsByClassName('clases-table')[0]) {

      var datatable = $('.clases-table').mDatatable({
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
            field: "Nombre es",
            title: "nombre es",
            width: 100,
          },
          {
            field: "Nombre en",
            title: "nombre en",
            width: 100,
          },
          {
            field: "Nombre nl",
            title: "nombre nl",
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
          }
        ],
      });
    };
  }
  var opciones = function() {
    if (document.getElementsByClassName('opciones-table')[0]) {

      var datatable = $('.opciones-table').mDatatable({
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
            field: "Nombre es",
            title: "nombre es",
            width: 100,
          },
          {
            field: "Nombre en",
            title: "nombre en",
            width: 100,
          },
          {
            field: "Nombre nl",
            title: "nombre nl",
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
          }
        ],
      });
    };
  }
  var piscinas = function() {
    if (document.getElementsByClassName('piscinas-table')[0]) {

      var datatable = $('.piscinas-table').mDatatable({
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
            field: "Nombre es",
            title: "nombre es",
            width: 100,
          },
          {
            field: "Nombre en",
            title: "nombre en",
            width: 100,
          },
          {
            field: "Nombre nl",
            title: "nombre nl",
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
          }
        ],
      });
    };
  }
  var jardines = function() {
    if (document.getElementsByClassName('jardines-table')[0]) {

      var datatable = $('.jardines-table').mDatatable({
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
            field: "Nombre es",
            title: "nombre es",
            width: 100,
          },
          {
            field: "Nombre en",
            title: "nombre en",
            width: 100,
          },
          {
            field: "Nombre nl",
            title: "nombre nl",
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
          }
        ],
      });
    };
  }
  var vistas = function() {
    if (document.getElementsByClassName('vistas-table')[0]) {

      var datatable = $('.vistas-table').mDatatable({
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
            field: "Nombre es",
            title: "nombre es",
            width: 100,
          },
          {
            field: "Nombre en",
            title: "nombre en",
            width: 100,
          },
          {
            field: "Nombre nl",
            title: "nombre nl",
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
          }
        ],
      });
    };
  }
  var contactos = function() {
    if (document.getElementsByClassName('contactos-table')[0]) {

      var datatable = $('.contactos-table').mDatatable({
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
            field: "Fecha",
            title: "fecha",
            width: 100,
          },
          {
            field: "Clave",
            title: "clave",
            width: 100,
          },
          {
            field: "Nombre",
            title: "nombre",
            width: 100,
          },
          {
            field: "Email",
            title: "email",
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
          }
        ],
      });
    };
  }

  return {
    init: function() {
      viviendas();
      tipos();
      traduccionesNueva();
      config();
      emails();
      panoramicas();
      localidades();
      clases();
      opciones();
      piscinas();
      jardines();
      vistas();
      contactos();
    },
  };
}();

$("#traducciones-nueva").click(function() {
  $("#portlet-nueva").toggle();
  //$("#traducciones-nuevo").prop("disabled", true);
});

$(".pagina-editar").click(function() {
  $("#portlet-editar").toggle();
  //$("#traducciones-nuevo").prop("disabled", true);
});

jQuery(document).ready(function() {
  DatatableHtmlTableDemo.init();
});


