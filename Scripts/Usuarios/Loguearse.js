document.write("<"+"script type='text/javascript' src='../../Scripts/js/alerta.js'><"+"/script>")
function loguearse(){
        if(document.getElementById("usuario").value === "" 
                || document.getElementById("pass").value === ""){
            alerts("los campos son obligatorios", "Campos Vacios");
        }else{
            document.getElementById("logueo").submit();
        }
    }