$(document).ready(function () {

    //alert('estamos desde js');

    //funcion del menu desplegable
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";

    $(window).on("load resize", function () {
        if (this.matchMedia("(min-width: 768px)").matches) {
            $dropdown.hover(
                function () {
                    const $this = $(this);
                    $this.addClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "true");
                    $this.find($dropdownMenu).addClass(showClass);
                },
                function () {
                    const $this = $(this);
                    $this.removeClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "false");
                    $this.find($dropdownMenu).removeClass(showClass);
                }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });

    //validacion formularios

    (function () {
        'use strict'
  
        var forms = document.querySelectorAll('.needs-validation')

        Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }
    
            form.classList.add('was-validated')
            }, false)
        })
    })();

    // mostrar campos segun el usuario de contacto
    $('#datos_paciente').hide();
    $('#usuario').change(function(){
        if($('#usuario').val() == 'paciente'){
            $('#datos_paciente').css('display','none');
            $("#namepa").attr("disabled",true);
            $("#namepa").append('N/A');
            $("#apellidopa").attr("disabled",true);
            $("#tipoidpa").attr("disabled",true);
            $("#cedulapaciente").attr("disabled",true);
        }
        if($('#usuario').val() == 'acudiente'){
            $('#datos_paciente').css('display','block');
            $("#namepa").attr("disabled",false);
            $("#apellidopa").attr("disabled",false);
            $("#tipoidpa").attr("disabled",false);
            $("#cedulapaciente").attr("disabled",false);
        }
    });

    //ocultar imagenes cuando se activa la accion hover
    $('#invisible').hide();
    $('#invisible2').hide();
    $('#invisible3').hide();
    
    $('#prom1').on({
        mouseenter: function(){
            $('#invisible').show();
        },
        mouseleave: function(){
            $('#invisible').hide();
        }
    });
    $('#prom2').on({
        mouseenter: function(){
            $('#invisible2').show();
        },
        mouseleave: function(){
            $('#invisible2').hide();
        }
    });
    $('#prom3').on({
        mouseenter: function(){
            $('#invisible3').show();
        },
        mouseleave: function(){
            $('#invisible3').hide();
        }
    });
    
});