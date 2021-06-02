const { isSet } = require('lodash');

require('./bootstrap');
//VALIDAR POPUPS FORM
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
  })()

$(document).ready(function(){
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
                    var trabajadora = data.trabajadora;
                    var usuarios = data.users;
                    var nombre = trabajadora[0].nombre;
                    var apellido = trabajadora[0].apellidos;
                    var email = trabajadora[0].email;
                    var telefono = trabajadora[0].telefono;
                    var zona = trabajadora[0].zona;
                    var id = trabajadora[0].id;
                    var rol = trabajadora[0].rol_id;
                    if (rol===1 || rol===3) {
                        $("thead tr th.ver_usuarios").css("display","none");
                        $("tbody.info_filtrar").html("<td>" + nombre + " " + apellido + "</td>" +
                        "<td>" + telefono + "</td>" +
                        "<td>" + email + "</td>" +
                        "<td>" + zona + "</td>" +
                        "<td ><a href='#'  class='nav-link editar_trabajadora '  data-toggle='modal' data-target='#trabajadora'>editar</a><span> </span><a href='/trabajadoras/eliminar/" + id + "'>Eliminar</a></td>");
                    }else {
                        $("thead tr th.ver_usuarios").css({"display":"block", "border":"none"});
                         $("tbody.info_filtrar").html("<td>" + nombre + " " + apellido + "</td>" +
                        "<td>" + telefono + "</td>" +
                        "<td>" + email + "</td>" +
                        "<td>" + zona + "</td>" +
                        " <td class='usuarios_trabajadora'></td>" +
                        "<td ><a href='#'  class='nav-link editar_trabajadora '  data-toggle='modal' data-target='#trabajadora'>editar</a><span> </span><a href='/trabajadoras/eliminar/" + id + "'>Eliminar</a></td>");
                        if (usuarios.length === 0 && rol===2) {
                            $("td.usuarios_trabajadora").append("<p>No tiene usuarios asignados</p>");
                        } else {
                            for (var i = 0; i < usuarios.length; i++) {
                                $("td.usuarios_trabajadora").append("<p><a href='/usuario/"+id+"'>" + usuarios[i].nombre + " " + usuarios[i].apellidos + "</a></p>");
                            }
                        }
                    }
                    $("#tabla_filtrar").css("display", "block");


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
                var trabajadora = data.trabajadora;
                    for (var a = 0; a < trabajadora.length; a++) {
                    var nombre = trabajadora[a].nombre;
                    var apellido = trabajadora[a].apellidos;
                    var email = trabajadora[a].email;
                    var telefono = trabajadora[a].telefono;
                    var zona = trabajadora[a].zona;
                    var code = trabajadora[a].id;
                    var rol = trabajadora[a].rol_id;
                    if (rol===1 || rol===3) {
                        $("thead tr th.ver_usuarios").css({"display":"block", "border":"none"});
                        $("tbody.info_filtrar").append("<tr><td>" + nombre + " " + apellido + "</td>" +
                        "<td>" + telefono + "</td>" +
                        "<td>" + email + "</td>" +
                        "<td>" + zona + "</td>" +
                        "<td>nada<td>" +
                        "<td><a href='#' onclick='trabajadoras("+code+")' data-toggle='modal' data-target='#trabajadora' >editar</a><span> </span><a href='/trabajadoras/eliminar/" + code + "'>eliminar</a></td></tr>");

                    }else{
                        $("thead tr th.ver_usuarios").css({"display":"block", "border":"none"});
                        $("tbody.info_filtrar").append("<tr><td>" + nombre + " " + apellido + "</td>" +
                        "<td>" + telefono + "</td>" +
                        "<td>" + email + "</td>" +
                        "<td>" + zona + "</td>" +
                        "<td><a href='#' onclick='usuarios("+code+")' data-toggle='modal' data-target='#usuario' >ver</a><td>" +
                        "<td><a href='#' onclick='trabajadoras("+code+")' data-toggle='modal' data-target='#trabajadora' >editar</a><span> </span><a href='/trabajadoras/eliminar/" + code + "'>eliminar</a></td></tr>");

                    }
                         $("#tabla_filtrar").css("display", "block");


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
        $(".edit-text").css("display", "flex")
        $(".edit-input").css("display", "flex")
        $(".first-text").css("display", "none")
        $(".content-text").css("display", "none")
        $(".edit-margin").css("margin-top", "20px")
        $(".edit-btn").css("display", "flex")
    });
    $("#cancel").on("click", function(){
        $(".edit-text").css("display", "none")
        $(".edit-input").css("display", "none")
        $(".first-text").css("display", "flex")
        $(".content-text").css("display", "flex")
        $(".edit-margin").css("margin-top", "0")
        $(".edit-btn").css("display", "none")
    })
    //Baja de usuario
    $("#bajaUsuario").on("click", function(event){
        event.preventDefault();
        const url = $(this).attr('href');

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success',
              cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
          })

          swalWithBootstrapButtons.fire({
            title: '¿Seguro que quieres eliminarlo?',
            text: "Si lo haces no lo se podrá revertir!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Si, borra!',
            cancelButtonText: 'No, cancela!',
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            } else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
            ) {
              swalWithBootstrapButtons.fire(
                'Cancelado',
                'Tu usuari@ está a salvo :)',
                'error'
              )
            }
          })
    })
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
                $("#evolutivoContent").html(
                    "<div class='modal-header'>" +
                        "<div class='row all-content'>" +
                             "<div class='col-12 justify-content-end d-flex'>"+
                                "<button type='button' class='close' data-dismiss='modal'><img class='close-cross' src='/img/icons/X.png'></button>"+
                            "</div>" +
                            "<div class='col-12 text-center'>"+
                                "<h4>Evolutiva del " + data[0].fecha_creacion + "</h4>" +
                            "</div>"+
                        "</div>"+
                    "</div>" +
                    "<div class='row modal-body'>" +
                        "<div class='col-12'>"+
                            "<h4 class='text-center'>Nota</h4>" +
                        "</div>" +
                        "<div class='col-12'>"+
                            "<textarea class='text-secondary bg-transparent border-0' rows='4' readonly>" + data[0].descripcion + "</textarea>" +
                        "</div>" +
                    "</div>");
            }
        })
    });
    //ver un nota
    $(".verNota").click(function () {
        var id = $(this).data("idnota");
        console.log(id);
        $.ajax({
            url: "/notas/id",
            data: {
                id: id
            },
            success: function (data) {
                console.log(data);
                $("#notaContent").html(
                    "<div class='modal-header'>" +
                        "<div class='row all-content'>" +
                             "<div class='col-12 justify-content-end d-flex'>"+
                                "<button type='button' class='close' data-dismiss='modal'><img class='close-cross' src='/img/icons/X.png'></button>"+
                            "</div>" +
                            "<div class='col-12 text-center'>"+
                                "<h4>" + data[0].fecha + "</h4>" +
                            "</div>"+
                        "</div>"+
                    "</div>" +
                    "<div class='row modal-body'>" +
                        "<div class='col-12'>"+
                            "<h4 class='text-center'>Nota</h4>" +
                        "</div>" +
                        "<div class='col-12'>"+
                            "<textarea class='text-secondary bg-transparent border-0' rows='4' readonly>" + data[0].nota + "</textarea>" +
                        "</div>" +
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





