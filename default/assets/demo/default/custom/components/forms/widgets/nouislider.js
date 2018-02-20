//== Class definition
var noUiSliderDemos = function() {

    //== Private functions

     
    var demo1 = function() {
        // init slider
        var sliderDormitorios = document.getElementById('dormitorios');
        var sliderBanos = document.getElementById('banos');


        noUiSlider.create(sliderDormitorios, {
            start: [ 0 ],
            step: 1,
            range: {
                'min': [ 0 ],
                'max': [ 12 ]
            },
            format: wNumb({
                decimals: 0 
            })
        });

        noUiSlider.create(sliderBanos, {
            start: [ 0 ],
            step: 1,
            range: {
                'min': [ 0 ],
                'max': [ 12 ]
            },
            format: wNumb({
                decimals: 0 
            })
        });

        // init slider input
        var sliderInputDormitorios = document.getElementById('dormitorios_input');
        var sliderInputBanos = document.getElementById('banos_input');

        sliderDormitorios.noUiSlider.on('update', function( values, handle ) {
            sliderInputDormitorios.value = values[handle];
        });
        sliderBanos.noUiSlider.on('update', function( values, handle ) {
            sliderInputBanos.value = values[handle];
        });

        sliderInputDormitorios.addEventListener('change', function(){
            sliderDormitorios.noUiSlider.set(this.value);
        });
        sliderInputBanos.addEventListener('change', function(){
            sliderBanos.noUiSlider.set(this.value);
        });
    }

    var demo2 = function() {
        // init slider
        var sliderAeropuerto = document.getElementById('aeropuerto');
        var sliderPlaya = document.getElementById('playa');
        var sliderCiudad = document.getElementById('ciudad');
        var sliderGolf = document.getElementById('golf');

        noUiSlider.create(sliderAeropuerto, {
            start: [ 0 ],
            connect: [true, false],
            step: 1,
            range: {
                'min': [ 0 ],
                'max': [ 1000 ]
            },
            format: wNumb({
                decimals: 3,
                thousand: '.',
            })
        });

        noUiSlider.create(sliderPlaya, {
            start: [ 0 ],
            connect: [true, false],
            step: 5,
            range: {
                'min': [ 0 ],
                'max': [ 1000 ]
            },
            format: wNumb({
                decimals: 3,
                thousand: '.',
            })
        });

        noUiSlider.create(sliderCiudad, {
            start: [ 0 ],
            connect: [true, false],
            step: 5,
            range: {
                'min': [ 0 ],
                'max': [ 1000 ]
            },
            format: wNumb({
                decimals: 3,
                thousand: '.',
            })
        });

        noUiSlider.create(sliderGolf, {
            start: [ 0 ],
            connect: [true, false],
            step: 5,
            range: {
                'min': [ 0 ],
                'max': [ 1000 ]
            },
            format: wNumb({
                decimals: 3,
                thousand: '.',
            })
        });

        // init slider input
        var sliderInputAeropuerto = document.getElementById('aeropuerto_input');
        var sliderInputPlaya = document.getElementById('playa_input');
        var sliderInputCiudad = document.getElementById('ciudad_input');
        var sliderInputGolf = document.getElementById('golf_input');

        sliderAeropuerto.noUiSlider.on('update', function( values, handle ) {
            sliderInputAeropuerto.value = values[handle];
        });
        sliderPlaya.noUiSlider.on('update', function( values, handle ) {
            sliderInputPlaya.value = values[handle];
        });
        sliderCiudad.noUiSlider.on('update', function( values, handle ) {
            sliderInputCiudad.value = values[handle];
        });
        sliderGolf.noUiSlider.on('update', function( values, handle ) {
            sliderInputGolf.value = values[handle];
        });

        sliderInputAeropuerto.addEventListener('change', function(){
            sliderAeropuerto.noUiSlider.set(this.value);
        });
        sliderInputPlaya.addEventListener('change', function(){
            sliderPlaya.noUiSlider.set(this.value);
        });
        sliderInputCiudad.addEventListener('change', function(){
            sliderCiudad.noUiSlider.set(this.value);
        });
        sliderInputGolf.addEventListener('change', function(){
            sliderGolf.noUiSlider.set(this.value);
        });
    }

    
    // Modal demo

    var modaldemo1 = function() {
        var slider = document.getElementById('m_nouislider_modal1');

        noUiSlider.create(slider, {
            start: [ 0 ],
            step: 2,
            range: {
                'min': [ 0 ],
                'max': [ 10 ]
            },
            format: wNumb({
                decimals: 0 
            })
        });

        // init slider input
        var sliderInput = document.getElementById('m_nouislider_modal1_input');

        slider.noUiSlider.on('update', function( values, handle ) {
            sliderInput.value = values[handle];
        });

        sliderInput.addEventListener('change', function(){
            slider.noUiSlider.set(this.value);
        });
    }

    var modaldemo2 = function() {
        var slider = document.getElementById('m_nouislider_modal2');

        noUiSlider.create(slider, {
            start: [ 20000 ],
            connect: [true, false],
            step: 1000,
            range: {
                'min': [ 20000 ],
                'max': [ 80000 ]
            },
            format: wNumb({
                decimals: 3,
                thousand: '.',
                postfix: ' (US $)',
            })
        });

        // init slider input
        var sliderInput = document.getElementById('m_nouislider_modal2_input');

        slider.noUiSlider.on('update', function( values, handle ) {
            sliderInput.value = values[handle];
        });

        sliderInput.addEventListener('change', function(){
            slider.noUiSlider.set(this.value);
        });
    }

    
    return {
        // public functions
        init: function() {
            demo1();
            demo2();                           
        }
    };
}();

jQuery(document).ready(function() {
    noUiSliderDemos.init();
});


