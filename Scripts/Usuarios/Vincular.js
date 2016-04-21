document.write("<"+"script type='text/javascript' src='../../Scripts/js/alerta.js'><"+"/script>")

 var cent=0;
function vincular($indice){
    
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
                                if($indice == 1){
                                    if($('#nombre').val() === ""){
                                        $("#nombre").focus();
                                        alerts("El nombre es obligatorio para la vinculacion" , "Formulario Incompleto");
                                    }
                                    else{
                                        if($('#password1').val() === "" && $('#password2').val() === ""){
                                            document.getElementById("actualizacion").submit();
                                        }
                                        else{
                                            if($('#password1').val() != "" && $('#password2').val() != ""){
                                                if($('#password1').val() == $('#password2').val()){
                                                    document.getElementById("actualizacion").submit();
                                                }
                                                else{
                                                    $("#password1").focus();
                                                        alerts("Las contraseñas no coinciden" , "Contraseñas erroneas");
                                                }
                                            }
                                            else{
                                                $("#password1").focus();
                                                alerts("Confirme correctamente la contraseña" , "Contraseñas erroneas");
                                            }
                                        }
                                    }
                                }else{
                                    document.getElementById("vinculacion").submit();
                                }
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
