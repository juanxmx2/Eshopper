function loguearse(){
        if(document.getElementById("usuario").value === "" 
                || document.getElementById("pass").value === ""){
            alert("USUARIO  y CONTRASE\u00d1A son obligatorios");
        }else{
            document.getElementById("logueo").submit();
        }
    }