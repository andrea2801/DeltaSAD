require('./bootstrap');
//VALIDAR POPUPS FORM
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();

$(document).ready(function(){
    //LOGIN
    //animacion block dni
    $("input#dni_input_login").on('click',function (){
        $(".dni_mov").animate({top: "9px"}, 500)
    });
    //animacion block password
    $("input#password_input_login").on('click',function (){
        $(".pass_mov").animate({top: "84px"}, 500)
    });
    //forgot password
    $(".forgot_password").on('click',function (){
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
            $(this).css("color","#50B2CE");
        },
        mouseleave: function () {
            $(this).css("color","#1F1F1F");
        }
    });
    //FILTRAR TRABAJADORAS
    //dni
    $("img.buscar_dni").click(function (){
        var valor=$(this).prev().val();
        $("tbody.info_filtrar").html("");
         $.ajax({
            url:"/trabajadoras/busqueda/dni",
            data:{dni:valor},
            success:function(data){
                var nombre=data[0].nombre;
                var apellido=data[0].apellidos;
                var email=data[0].email;
                var telefono=data[0].telefono;
                var zona=data[0].zona;
                var id=data[0].id;
                $("tbody.info_filtrar").html("<td>"+nombre+" "+apellido+"</td>"
                +"<td>"+telefono+"</td>"
                +"<td>"+email+"</td>"
                +"<td>"+zona+"</td>"
                +" <td> <a href=''>Ver</a></td>"
                +" <td><a  class='ver_usuarios'>Ver</a></td>"
                +"<td ><a href='/trabajadoras/editar/"+id+"' class='nav-link active ' data-toggle='modal' data-target='#editar_trabajadora'>editar</a><span> </span><a href='/trabajadoras/eliminar/"+id+"'>Eliminar</a></td>");
                $("#tabla_filtrar").css("display","block");
            }
        });
    });
//zona
    $("#select_zonas").change(function(){
        var valor=$("#select_zonas option:selected").val();
        $("tbody.info_filtrar").html("");

        $.ajax({
            url:"/trabajadoras/busqueda/zona",
            data:{zonas:valor},
            success:function(data){
                console.log(data);

                console.log(data.length);
                for(var a=0; a<data.length;a++){
                    var nombre=data[a].nombre;
                    var apellido=data[a].apellidos;
                    var email=data[a].email;
                    var telefono=data[a].telefono;
                    var zona=data[a].zona;
                    var id=data[a].id;
                    $("tbody.info_filtrar").append("<tr><td>"+nombre+" "+apellido+"</td>"
                        +"<td>"+telefono+"</td>"
                        +"<td>"+email+"</td>"
                        +"<td>"+zona+"</td>"
                        +" <td><a href=''>ver</a></td>"
                        +" <td><a href=''>ver</a></td>"
                          +"<td><a href=''>editar</a><span> </span><a href='/trabajadoras/eliminar/"+id+"'>eliminar</a></td></tr>");
                    $("#tabla_filtrar").css("display","block");
                }

            }
        });




    });
    //limpiar
    $(".limpiar_filtro").on('click',function (){
        $("tbody.info_filtrar").html("");
    });

    $('td.editar_trabajadora').on('click',function (){
        console.log("pepa");
    });
    //USUARIOS
    //Modificar usuario

    $("#update").on("click", function(){
        $("input").css("display", "flex")
        $("label").css("display", "flex")
    })

});
//HEADERs
//datetime

function datetime (){
    var datetime = new Date();
    var day= datetime.getDate();
    var month=(datetime.getMonth() +1);
    var year=datetime.getFullYear();
    var h=datetime.getHours();
    var m=datetime.getMinutes();
    var s=datetime.getSeconds();
    if (h < 10) {
        h = "0" + h;
    }
    if (m < 10) {
        m = "0" + m;
    }
    if (s < 10) {
        s = "0" + s;
    }

    $(".date").html(day+"/"+month+"/"+year+"-"+h+":"+m+":"+s);

}
setInterval(datetime,1000);
