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

$(document).ready( function (){
    //LOGIN
    //animacion block dni
    $("input#dni_input_login").click(function (){
        $(".dni_mov").animate({top: "16px"}, 500)
    });
    //animacion block password
    $("input#password_input_login").click(function (){
        $(".pass_mov").animate({top: "95px"}, 500)
    });
    //forgot password
    $(".forgot_password").click(function (){
        $(this).css("color","#50B2CE");
        $(".popup").css("display","block");
    });
    $(".close_login").click(function (){
        $(".popup").css("display","none");
    });

    //FILTRAR TRABAJADORAS
    $("#dni_search").blur(function (){
        var valor=$(this).val();
         $.ajax({
            url:"/trabajadoras/busqueda/dni",
            data:{dni:valor},
            success:function(data){
                console.log(data);
                var nombre=data[0].nombre;
                var apellido=data[0].apellidos;
                var email=data[0].email;
                var telefono=data[0].telefono;
                var zona=data[0].zona;
                $("tr.dni_info").html("<td>"+nombre+" "+apellido+"</td>"
                +"<td>"+telefono+"</td>"
                +"<td>"+email+"</td>"
                +"<td>"+zona+"</td>"
                +" <td><a href=''>ver</a></td>"
                +" <td><a href=''>ver</a></td>"
                +"<td><a href=''>ver</a></td>");
                $("#tabla_filtrar").css("display","block");
            }
        });
    });

    $("#select_zonas").on("change",function(){
        var valor=$('select[name=select_zonas]').val();
       /* $.ajax({
            url:"",
            data:{'valor':valor},
            success:function(data){
                $("#tabla_filtrar").css("display","block");
            }*/
        $(".zona_tabla_camp").html(valor);
        $("#tabla_filtrar").css("display","block");
        });

    $(".limpiar_filtro").click(function (){
        $("#tabla_filtrar").css("display","none");
    });





});
//HEADER
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
