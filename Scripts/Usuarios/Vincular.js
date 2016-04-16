document.write("<"+"script type='text/javascript' src='../../Scripts/js/alerta.js'><"+"/script>")
function vincular(){
    
    if($("#nombres").val() === ""){
        $("#identificacion").focus();
        alerts("El nombre es obligatorio para el Registro");
    }else if($("#telefono").val() === ""){
        $("#email").focus();
        alerts("El E-mail es obligatorio para el registro");
    }else if($("#ciudad").val() === ""){
        $("#contrasena").focus();
        alerts("La contraseña es obligatoria para el registro");
    }else if($("#direccion").val() === ""){
        $("#contrasena").focus();
        alerts("La contraseña es obligatoria para el registro");
    }else{
        document.getElementById("vinculacion").submit();
    }
}