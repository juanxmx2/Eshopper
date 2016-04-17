document.write("<"+"script type='text/javascript' src='../../Scripts/js/alerta.js'><"+"/script>")

 var cent=0;
function vincular(){
    
    if($('#identificacion').val() === ""){
        $("#identificacion").focus();
        alerts("La identificacion es obligatorio para la vinculacion" , "Formulario Incompleto");
    }
    else{
        validarSiNumero($("#identificacion").val());
        if(cent==0){
            if($('#telefono').val() === ""){
                $("#telefono").focus();
                alerts("El telefono es obligatorio para la vinculacion", "Formulario Incompleto");
            }
            else{
                validarSiNumero($("#telefono").val());
                if(cent==0){
                    if($("#direccion").val() === ""){
                        $("#direccion").focus();
                        alerts("La direccion es obligatoria para el registro", "Formulario Incompleto");
                                
                    }
                    else{
                        if($("#ciudad").val() === ""){
                            $("#ciudad").focus();
                            alerts("La ciudad es obligatoria para el registro", "Formulario Incompleto");
                        }
                        else{
                                document.getElementById("vinculacion").submit();
                        }
                    }
                }
            }
        }
    }
}


function validarSiNumero(numero){
    cent=0;
    if (!/^([0-9])*$/.test(numero)){
        alerts("Se requiere un dato numerico" , "Dato invalido");
        cent=1;
    } 
}
