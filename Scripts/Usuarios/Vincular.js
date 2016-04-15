function vincular(){
    if($("#nombres").val() === ""){
        $("#identificacion").focus();
        alert("El nombre es obligatorio para el Registro");
    }else if($("#telefono").val() === ""){
        $("#email").focus();
        alert("El E-mail es obligatorio para el registro");
    }else if($("#ciudad").val() === ""){
        $("#contrasena").focus();
        alert("La contraseña es obligatoria para el registro");
    }else if($("#direccion").val() === ""){
        $("#contrasena").focus();
        alert("La contraseña es obligatoria para el registro");
    }else{
        document.getElementById("vinculacion").submit();
    }
}