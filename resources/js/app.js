const { isSet } = require('lodash');

require('./bootstrap');
//VALIDAR POPUPS FORM
(function () {
    'use strict';
    window.addEventListener('load', function () {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
});
$(document).ready(function () {
    //LOGIN
    //animacion block dni
    if (!$("input#dni_input_login").val() === "") {
        $(".dni_mov").animate({
            top: "9px"
        }, 500)
      }
    $("input#dni_input_login").on('click', function () {
        $(".dni_mov").animate({
            top: "9px"
        }, 500)
    });
    //animacion block password
    $("input#password_input_login").on('click', function () {
        $(".pass_mov").animate({
            top: "84px"
        }, 500)
    });
    //forgot password
    $(".forgot_password").on('click', function () {
        Swal.fire({
            title: 'Porfavor pongase en contacto con su cordinador/a para restaurar sus credenciales. Grácias.',
            showClass: {
                popup: 'animate__animated animate__backInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__backOutDown'
            }
        })
    });
    $(".forgot_password").on({
        mouseenter: function () {
            $(this).css("color", "#50B2CE");
        },
        mouseleave: function () {
            $(this).css("color", "#1F1F1F");
        }
    });
    //FILTRAR TRABAJADORAS
    //dni
    $("img.buscar_dni").click(function () {
        var valor = $(this).prev().val();
        $("tbody.info_filtrar").html("");
        $.ajax({
            url: "/trabajadoras/busqueda/dni",
            data: {
                dni: valor
            },
            success: function (data) {

                    var dni = data.buscardni;
                    var usuarios = data.users;
                    var nombre = dni[0].nombre;
                    var apellido = dni[0].apellidos;
                    var email = dni[0].email;
                    var telefono = dni[0].telefono;
                    var zona = dni[0].zona;
                    var id = dni[0].id;
                    $("tbody.info_filtrar").html("<td>" + nombre + " " + apellido + "</td>" +
                        "<td>" + telefono + "</td>" +
                        "<td>" + email + "</td>" +
                        "<td>" + zona + "</td>" +
                        " <td class='usuarios_trabajadora'></td>" +
                        "<td ><a href='#'  class='nav-link editar_trabajadora '  data-idtrab='" + id + "' data-toggle='modal' data-target='#editar_trabajadora'>editar</a><span> </span><a href='/trabajadoras/eliminar/" + id + "'>Eliminar</a></td>");
                    $("#tabla_filtrar").css("display", "block");
                    if (usuarios.length === 0) {
                        $("td.usuarios_trabajadora").append("<p>No tiene usuarios asignados</p>");
                    } else {
                        for (var i = 0; i < usuarios.length; i++) {
                            $("td.usuarios_trabajadora").append("<p>" + usuarios[i].nombre + " " + usuarios[i].apellidos + "</p>");
                        }
                    }
            }


        });

    });

    //zona
    $("#select_zonas").change(function () {
        var valor = $("#select_zonas option:selected").val();
        $("tbody.info_filtrar").html("");

        $.ajax({
            url: "/trabajadoras/busqueda/zona",
            data: {
                zonas: valor
            },
            success: function (data) {
                var zonass = data.zonas;
                var usuarios = data.users;
                console.log(zonass);
                console.log(usuarios);

                    for (var a = 0; a < zonass.length; a++) {
                    var nombre = zonass[a].nombre;
                    var apellido = zonass[a].apellidos;
                    var email = zonass[a].email;
                    var telefono = zonass[a].telefono;
                    var zona = zonass[a].zona;
                    var code = zonass[a].id;
                    var rol = zonass[a].rol_id;
                    if(rol==2 || rol==3){
                        $("tbody.info_filtrar").append("<tr><td>" + nombre + " " + apellido + "</td>" +
                        "<td>" + telefono + "</td>" +
                        "<td>" + email + "</td>" +
                        "<td>" + zona + "</td>" +
                        " <td class='usuarios_trabajadora'></td>" +
                        "<td><a href=''>editar</a><span> </span><a href='/trabajadoras/eliminar/" + code + "'>eliminar</a></td></tr>");
                    $("#tabla_filtrar").css("display", "block");
                    $("#tabla_filtrar").css("display", "block");
                    if (usuarios.length == 0) {
                        $("td.usuarios_trabajadora").append("<p>No tiene usuarios asignados</p>");
                    } else {
                        for (var i = 0; i < usuarios.length; i++) {
                             var tf_asignada = usuarios[i].tf_asignada;
                             var tf_asignada2 = usuarios[i].tf_asignada2;

                                console.log("usuario "+usuario)
                            if(code===tf_asignada ||code===tf_asignada2  ){
                                 var usuario = usuarios[i].usuario;
                                $("td.usuarios_trabajadora").append("<p>" + usuario+ "</p>");
                            }

                        }
                    }
                    }

                }

            }
        });

    });




    //limpiar
    $(".limpiar_filtro").on('click', function () {
        $("tbody.info_filtrar").html("");
    });
    //editar trabajadora

    $('td.editar_trabajadora').on('click', function () {
        console.log("pepa");
    });
    //USUARIOS
    //Modificar usuario

    $("#update").on("click", function () {
        $("input").css("display", "flex")
        $("label").css("display", "flex")
    });
    //ver un evolutivo
    $(".verEvol").click(function () {
        var id = $(this).data("idevol");
        console.log(id);
        $.ajax({
            url: "/evolutivos/id",
            data: {
                id: id
            },
            success: function (data) {
                console.log(data);
                $("#evolutivoContent").html("<div class='modal-header header_popup'>" +
                    " <h4>Evolutiva del " + data[0].fecha_creacion + "</h4>" +
                    "</div>" +
                    "<div class='modal-body '>" +
                    "<div class='card-body text-primary popup_body'>" +
                    " <h5 class='card-title'>Evolución</h5>" +
                    " <p class='card-text'>" + data[0].descripcion + "</p>" +
                    "</div>" +
                    "<div class='modal-footer'>" +
                    "<button type='button' class='close' data-dismiss='modal'>" +
                    "  <span class='span'>×</span>  </button>" +
                    "</div>");
            }
        })
    });





    $(".leerNotificacion").on("click", function () {
        var id = $(this).data("noti");
        var prioridad;
        $.ajax({
            url: "/notificaciones/ver/",
            data: {
                notification: id
            },
            success: function (data) {
                for (let i = 0; i < data.length; i++) {
                    if (data[i].estado == 0) {
                        $.ajax({
                            url: "/notificaciones/estado/",
                            data: {
                                notification: id
                            },
                            success: function (data) {
                                console.log("hola")
                            }
                        });
                    }
                    if (data[i].prioridad == 0) {
                        prioridad = "Media";
                    } else {
                        prioridad = "Alta";
                    }
                    $("#priority").text(prioridad)
                    $("#creator").text(data[i].nombre + " " + data[i].apellidos)
                    $("#date").text(data[i].fecha)
                    $("#affair").text(data[i].asunto)
                    $("#message").text(data[i].detalle)
                }
            }
        });
    })

});
//HEADERs
//datetime

function datetime() {
    var datetime = new Date();
    var day = datetime.getDate();
    var month = (datetime.getMonth() + 1);
    var year = datetime.getFullYear();
    var h = datetime.getHours();
    var m = datetime.getMinutes();
    var s = datetime.getSeconds();
    if (h < 10) {
        h = "0" + h;
    }
    if (m < 10) {
        m = "0" + m;
    }
    if (s < 10) {
        s = "0" + s;
    }

    $(".date").html(day + "/" + month + "/" + year + "-" + h + ":" + m + "H");

}
setInterval(datetime, 1000);
