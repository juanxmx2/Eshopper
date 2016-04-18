document.write("<"+"script type='text/javascript' src='../../Scripts/js/alerta.js'><"+"/script>")
function ingreso(){
    if($("#nombres").val() === ""){
        $("#nombres").focus();
        alerts("El nombre es obligatorio para el Registro","Campo Vacio");
    }else if($("#email").val() === ""){
        $("#email").focus();
        alerts("El E-mail es obligatorio para el registro", "Campo Vacio");
    }else if($("#contrasena").val() === ""){
        $("#contrasena").focus();
        alerts("La contraseña es obligatoria para el registro", "Campo Vacio");
    }else{
        document.getElementById("ingresoUsuario").submit();
    }
}