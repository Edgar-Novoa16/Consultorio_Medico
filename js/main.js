
function crearMapa()
{
        var map = L.map('map').setView([20.498077253707937, -103.35904115939371], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([20.498077253707937, -103.35904115939371]).addTo(map)
        .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
        .openPopup();

}


document.getElementById("linkP1").addEventListener('click', () =>
{

    let configuracionPag = 
    { 
        
        showdiv: true,
        plan: "Limpieza dental"

    };

    localStorage.setItem('configuracionPag', JSON.stringify(configuracionPag));    
    
    window.location.href="formulario_registro.html";

});

document.getElementById("linkP2").addEventListener('click', () =>
{

    let configuracionPag = 
    { 
        showdiv: true,
        plan: "Resina dental"
        
    };

    localStorage.setItem('configuracionPag', JSON.stringify(configuracionPag));

    window.location.href="formulario_registro.html";

});

document.getElementById("linkP3").addEventListener('click', () =>
{

    
    let configuracionPag = 
    { 
        
        showdiv: true,
        plan: "Endodoncia"   

    };


    localStorage.setItem('configuracionPag', JSON.stringify(configuracionPag));
    
    window.location.href="formulario_registro.html";

});

document.getElementById("linkP4").addEventListener('click', () =>
{

    
    let configuracionPag = 
    {
        
        showdiv: true,
        plan: "Corona dental"

    };
    
    localStorage.setItem('configuracionPag', JSON.stringify(configuracionPag));

    window.location.href="formulario_registro.html";

});

document.getElementById("linkP5").addEventListener('click', () =>
{

    
    let configuracionPag = 
    {
        
        showdiv: true,
        plan: "Puente dental"

    };
   
    localStorage.setItem('configuracionPag', JSON.stringify(configuracionPag));
    
    window.location.href="formulario_registro.html";

});


function mostrarValidacion(validacion)
{

    if(validacion === 0)
    {

        window.alert("La cita no ha podido agendarse debido a que ya existe otra persona esperando para ser atendido ese dia.");

    }else
    {

        window.alert("La cita se ha agendado con éxito");

    }

}


function regresarAlFormularioDeRegistro(validacion)
{


    let importante =
    {
        showdiv: true,
        validacion: validacion
        
    };

    localStorage.setItem("validacion", JSON.stringify(importante));

    window.location.href = "formulario_registro.html";


}


function comprobarCampoNombre()
{
 
            let letrasValidas = /^([a-zA-Z áéíóúÁÉÍÓÚ]+)$/;
            let elemento = document.getElementById("nombres");
            
                if(!letrasValidas.exec(elemento.value))
                {

                    alert("Inserta letras en vez de números o caracteres especiales.");
                    elemento.value = "";
                    elemento.focus();
                    elemento.style.cssText = "outline: unset;border: .1rem solid red;";

                }else
                {

                        elemento.style.cssText = "border: .1rem solid #1f53c5;";

                }
                
}

function comprobarCampoApellidoPaterno()
{

    let letrasNoValidas = /[0-9!"\;\:.\,_\-<>^{}@#$%&/()=?¡*¨¨]/;
    let elemento = document.getElementById("apellido_paterno");
            
        if(letrasNoValidas.test(elemento.value))
        {

            alert("Inserta letras en vez de números o caracteres especiales.");
            elemento.value = "";
            elemento.focus();
            elemento.style.cssText = "outline: unset;border: .1rem solid red;";

        }else
        {

            elemento.style.cssText = "border: .1rem solid #1f53c5;";

        }

}

function comprobarCampoApellidoMaterno()
{

    let letrasNoValidas = /[0-9!"<>¿!^{}\-_\;\:.\,\`@#$%&/()=?¡*¨¨]/;
    let elemento = document.getElementById("apellido_materno");
            
        if(letrasNoValidas.test(elemento.value))
        {

            alert("Inserta letras en vez de números o caracteres especiales.");
            elemento.value = "";
            elemento.focus();
            elemento.style.cssText = "outline: unset;border: .1rem solid red;";

        }else
        {

            elemento.style.cssText = "border: .1rem solid #1f53c5;";

        }

}


function comprobarCampoCorreoElectronico()
{

    let formatoDelCorreo = /^([\da-zA-ZáéíóúÁÉÍÓÚ\.]+)@([a-z\.]{5,10})\.([a-z\.]{2,6})$/;
    let elemento = document.getElementById("correo");

        if(!formatoDelCorreo.exec(elemento.value))
        {

            alert("El texto que escribiste en el campo del correo electrónico, no concuerda con el formato de un correo.\nSigue el siguiente formato: nombre + @ + servidor + dominio.");
            elemento.value="";
            elemento.focus();
            elemento.style.cssText = "outline: unset;border: .1rem solid red;";

        }else
        {

            elemento.style.cssText = "border: .1rem solid #1f53c5;";

        }


}

function comprobarCampoFecha()
{

    let formatoFecha = /^([\d\.]{4})-([\d\.]{2})-([\d\.]{2})$/;
    let elemento = document.getElementById("fecha");
    pasa = false;

        if(!formatoFecha.exec(elemento.value))
        {

            let mensaje = window.open("","", "width=300,height=300,top=300,left=500,scrollbars=NO");
            mensaje.document.write("La fecha que escribiste en el campo fecha, es incorrecto.\nSigue el siguiente formato: yyyy + - + mm + - + dd\nEs importante que sustituyas las letras por dígitos numéricos");


            setTimeout(function()
            {

                mensaje.close();

            }, 6000);

            //alert("La fecha que escribiste en el campo fecha, es incorrecto.\nSigue el siguiente formato: yyyy + - + mm + - + dd\nEs importante que sustituyas las letras por dígitos numéricos");
            elemento.value = "";
            elemento.focus();

            elemento.style.cssText = "outline: unset;border: .1rem solid red;";

        }else
        {

            pasa = true;
            elemento.style.cssText = "border: .1rem solid #1f53c5";

            if(pasa === true)
            {

                    let año = elemento.value.substr(0,4);
                    let fechaActual = new Date();
                    let añoActual = fechaActual.getFullYear(); 



                    if(año > añoActual)
                    {

                        let mensaje = window.open("","", "width=300,height=300,top=300,left=500,scrollbars=NO");
                        mensaje.document.write("No puedes agendar la cita para un año superior al " + añoActual + ".\nPor favor, introduce el año actual.");


                        setTimeout(function()
                        {

                            mensaje.close();

                        }, 6000);

                        //alert("La hora en la que piensas agendar la cita es superior a las 19 hrs.\nPor favor, introduce una hora que esté en el rango de 10 a 19 hrs.");
                        
                        elemento.value = (""+elemento.value.substr(4, undefined));
                        elemento.focus();
                        elemento.style.cssText = "outline: unset;border: .1rem solid red";
                        pasa = false;

                    }else if(año < añoActual)
                    {

                        let mensaje = window.open("","", "width=300,height=300,top=300,left=500,scrollbars=NO");
                        mensaje.document.write("No puedes agendar la cita para un anterior al " + añoActual + ".\nPor favor, introduce el año actual.");


                        setTimeout(function()
                        {

                            mensaje.close();

                        }, 6000);

                        //alert("La hora en la que piensas agendar la cita es superior a las 19 hrs.\nPor favor, introduce una hora que esté en el rango de 10 a 19 hrs.");
                        
                        elemento.value = (""+elemento.value.substr(4, undefined));
                        elemento.focus();
                        elemento.style.cssText = "outline: unset;border: .1rem solid red";
                        pasa = false;

                    }
                    
                    let mes = elemento.value.substr(5,2);
                    let mesActual = (fechaActual.getMonth() + 1);

                    if(mes > 12 || mes === 0)
                    {


                            let mensaje = window.open("","", "width=300,height=300,top=300,left=500,scrollbars=NO");
                            mensaje.document.write("Un año contiene 12 meses, que van desde el 01 hasta el 12.\nPor favor, introduce un mes que esté en el rango de 01 a 12.");


                            setTimeout(function()
                            {

                                mensaje.close();

                            }, 6000);

                            //alert("La hora en la que piensas agendar la cita es menor a las 10 hrs.\nPor favor, introduce una hora que esté en el rango de 10 a 19 hrs.");
                            elemento.value = (año + "-" + "" + elemento.value.substr(7, undefined));
                            elemento.focus();
                            elemento.style.cssText = "outline: unset;border: .1rem solid red";
                            pasa = false;

                            

                    }

                    if(mes < mesActual )
                    {

                        let mensaje = window.open("","", "width=300,height=300,top=300,left=500,scrollbars=NO");
                        mensaje.document.write("No puedes agendar una cita para un mes anterior al que estás.\nPor favor, introduce un mes que sea igual o mayor al actual.");


                        setTimeout(function()
                        {

                            mensaje.close();

                        }, 6000);

                        //alert("La hora en la que piensas agendar la cita es menor a las 10 hrs.\nPor favor, introduce una hora que esté en el rango de 10 a 19 hrs.");
                        elemento.value = (año + "-" + "" + elemento.value.substr(7, undefined));
                        elemento.focus();
                        elemento.style.cssText = "outline: unset;border: .1rem solid red";
                        pasa = false;    

                    }


                    let día = elemento.value.substr(8,2);
                    let díaActual = fechaActual.getDate();

                    if(día < díaActual)
                    {

                        let mensaje = window.open("","", "width=300,height=300,top=300,left=500,scrollbars=NO");
                            mensaje.document.write("No puedes agendar la cita para un día anterior al actual.\nPor favor, introduce un día que sea igual o mayor al actual.");


                            setTimeout(function()
                            {

                                mensaje.close();

                            }, 6000);

                            //alert("La cantidad de minutos que introdujiste, en el campo de la hora de la cita, es incongruente.\nPor favor, respeta la sintáxis.");
                            elemento.value = (año + "-" + mes + "-" + "");
                            elemento.focus();
                            elemento.style.cssText("outline: unset;borde: .1rem solid red;");
                            pasa = false;


                    }else if(mes != 04 && mes != 06 && mes != 08 && mes != 11 && mes != 02)
                    {

                        if(día > 31 || día === 0)
                        {

                            
                            let mensaje = window.open("","", "width=300,height=300,top=300,left=500,scrollbars=NO");
                            mensaje.document.write("El mes " + mes + " tiene un máximo de 31 días.\nPor favor, introduce un día acorde al rango desde 01 hasta el 31.");


                            setTimeout(function()
                            {

                                mensaje.close();

                            }, 6000);

                            //alert("La cantidad de minutos que introdujiste, en el campo de la hora de la cita, es incongruente.\nPor favor, respeta la sintáxis.");
                            elemento.value = (año + "-" + mes + "-" + "");
                            elemento.focus();
                            elemento.style.cssText("outline: unset;borde: .1rem solid red;");
                            pasa = false;
                                

                        }


                    }else if(mes != 01 && mes != 05 && mes != 08 && mes != 03 && mes != 07 && mes != 10 && mes != 12 && mes != 02)
                    {

                        if(día > 30 || día === 0)
                        {

                            let mensaje = window.open("","", "width=300,height=300,top=300,left=500,scrollbars=NO");
                                mensaje.document.write("El mes " + mes + " tiene un máximo de 30 días.\nPor favor, introduce un día acorde al rango desde 01 hasta el 30.");


                                setTimeout(function()
                                {

                                    mensaje.close();

                                }, 6000);

                                //alert("La cantidad de minutos que introdujiste, en el campo de la hora de la cita, es incongruente.\nPor favor, respeta la sintáxis.");
                                elemento.value = (año + "-" + mes + "-" + "");
                                elemento.focus();
                                elemento.style.cssText("outline: unset;borde: .1rem solid red;");
                                pasa = false;

                        }   
                                
                    }else if(mes === 02)
                    {

                        if((año % 4) === 0)
                        {

                            if(día > 29 || día === 0)
                            {

                                let mensaje = window.open("","", "width=300,height=300,top=300,left=500,scrollbars=NO");
                                mensaje.document.write("El mes " + mes + " tiene un máximo de 29 días (debido a que este año es año bisiesto).\nPor favor, introduce un día acorde al rango desde 01 hasta el 29.");


                                setTimeout(function()
                                {

                                    mensaje.close();

                                }, 6000);

                                //alert("La cantidad de minutos que introdujiste, en el campo de la hora de la cita, es incongruente.\nPor favor, respeta la sintáxis.");
                                elemento.value = (año + "-" + mes + "-" + "");
                                elemento.focus();
                                elemento.style.cssText("outline: unset;borde: .1rem solid red;");
                                pasa = false;     

                            }

                        }else
                        {

                            if(día > 28 || día === 0)
                            {

                                let mensaje = window.open("","", "width=300,height=300,top=300,left=500,scrollbars=NO");
                                mensaje.document.write("El mes " + mes + " tiene un máximo de 28 días (debido a que este año no es año bisiesto).\nPor favor, introduce un día acorde al rango desde 01 hasta el 28.");


                                setTimeout(function()
                                {

                                    mensaje.close();

                                }, 6000);

                                //alert("La cantidad de minutos que introdujiste, en el campo de la hora de la cita, es incongruente.\nPor favor, respeta la sintáxis.");
                                elemento.value = (año + "-" + mes + "-" + "");
                                elemento.focus();
                                elemento.style.cssText("outline: unset;borde: .1rem solid red;");
                                pasa = false;     

                            }

                        }



                    }

                   
            }    


        }

}

function comprobarCampoHora()
{

    let formatoFecha = /^([\d\.]{2}):([\d\.]{2}):([\d\.]{2})$/;
    let elemento = document.getElementById("hora");
    pasa = false;

        if(!formatoFecha.exec(elemento.value))
        {

            let mensaje = window.open("","", "width=300,height=300,top=300,left=500,scrollbars=NO");
            mensaje.document.write("La hora que escribiste en el campo hora, es incorrecto.\nSigue el siguiente formato: hh + : + mm + : + ss\nEs importante que sustituyas las letras por dígitos numéricos");


            setTimeout(function()
            {

                mensaje.close();

            }, 3000);

            //alert("La hora que escribiste en el campo hora, es incorrecto.\nSigue el siguiente formato: hh + : + mm + : + ss\nEs importante que sustituyas las letras por dígitos numéricos");
            elemento.value = "";
            elemento.focus();
            elemento.style.cssText = "outline: unset;border: .1rem solid red;";
            

        }else
        {

            pasa = true;
            elemento.style.cssText = "border: .1rem solid #1f53c5";

                if(pasa === true)
                {

                    let horas = elemento.value.substr(0,2);

                    if(horas > 19 )
                    {

                        let mensaje = window.open("","", "width=300,height=300,top=300,left=500,scrollbars=NO");
                        mensaje.document.write("La hora en la que piensas agendar la cita es superior a las 19 hrs.\nPor favor, introduce una hora que esté en el rango de 10 a 19 hrs.");


                        setTimeout(function()
                        {

                            mensaje.close();

                        }, 3000);

                        //alert("La hora en la que piensas agendar la cita es superior a las 19 hrs.\nPor favor, introduce una hora que esté en el rango de 10 a 19 hrs.");
                        
                        elemento.value = (""+elemento.value.substr(2, undefined));
                        elemento.focus();
                        elemento.style.cssText = "outline: unset;border: .1rem solid red";
                        pasa = false;

                    }else if(horas < 10)
                    {

                        let mensaje = window.open("","", "width=300,height=300,top=300,left=500,scrollbars=NO");
                        mensaje.document.write("La hora en la que piensas agendar la cita es menor a las 10 hrs.\nPor favor, introduce una hora que esté en el rango de 10 a 19 hrs.");


                        setTimeout(function()
                        {

                            mensaje.close();

                        }, 3000);

                        //alert("La hora en la que piensas agendar la cita es menor a las 10 hrs.\nPor favor, introduce una hora que esté en el rango de 10 a 19 hrs.");
                        elemento.value = (""+elemento.value.substr(2, undefined));
                        elemento.focus();
                        elemento.style.cssText = "outline: unset;border: .1rem solid red";
                        pasa = false;

                    }

                    let minutos = elemento.value.substr(3,2);

                    if(minutos > 59)
                    {

                        let mensaje = window.open("","", "width=300,height=300,top=300,left=500,scrollbars=NO");
                        mensaje.document.write("La cantidad de minutos que introdujiste, en el campo de la hora de la cita, es incongruente.\nPor favor, respeta la sintáxis.");


                        setTimeout(function()
                        {

                            mensaje.close();

                        }, 3000);

                        //alert("La cantidad de minutos que introdujiste, en el campo de la hora de la cita, es incongruente.\nPor favor, respeta la sintáxis.");
                        elemento.value = (horas + ":" + "" + elemento.value.substr(5, undefined));
                        elemento.focus();
                        elemento.style.cssText("outline: unset;borde: .1rem solid red;");
                        pasa = false;

                    }

                    let segundos = elemento.value.substr(6,undefined);

                    if(segundos > 59)
                    {

                        let mensaje = window.open("","", "width=300,height=300,top=300,left=500,scrollbars=NO");
                        mensaje.document.write("La cantidad de segundos que introdujiste, en el campo de la hora de la cita, es incongruente.\nPor favor, respeta la sintáxis.");


                        setTimeout(function()
                        {

                            mensaje.close();

                        }, 3000);

                        //alert("La cantidad de minutos que introdujiste, en el campo de la hora de la cita, es incongruente.\nPor favor, respeta la sintáxis.");
                        elemento.value = (horas + ":" + minutos + ":" + "");
                        elemento.focus();
                        elemento.style.cssText("outline: unset;borde: .1rem solid red;");
                        pasa = false;

                    }


                }
        
                
        }

}






/*
function validarNombres()
{



    var borrar = false;

    document.getElementById("nombres").addEventListener('keydown', function(e)
    {

        const tecla = e.key;

        if(tecla === "Delete")
        {

            borrar = true;

        }

    });


    if(borrar === false)
    {

        let aux = document.getElementById("nombres").value;
        let letrasValidas = /[a-zA-Z]/;
        
        if(!aux.match(letrasValidas))
        {

            window.alert("¿Acaso tu nombre es algún número?");
            document.getElementById("nombres").value = "";
            document.getElementById("nombres").style.cssText = "border: .1rem solid red;";

        }

    }
    


}*/

/*document.getElementById("nombres").addEventListener('input', () =>
{

    let aux = document.getElementById("nombres").value;
    
        
    if(!isNaN(aux))
    {

        window.alert("¿Acaso tu nombre es algún número?");
        document.getElementById("nombres").style.cssText = "border: .1rem solid red;";

    }

});
*/

/*function validarCampos()
{


    let aux = document.getElementById('nombres').value();

    if(aux === null)
    {

        

    }



}*/
