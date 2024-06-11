<?php

    $conexion = new PDO('mysql:host=localhost;dbname=consultorio_dental;charset=UTF8', 'root', 'marcoscg1198');

    if(!$conexion)
    {
        die("Error en la conexión con la base de datos").mysqli_connect_error();
    }

    //CITAS EN GENERAL:

    $st = $conexion -> query("select count(*) from consultas");

    foreach($st as $row)
    {

        $cantidadDeCitasTotales = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes =  MONTH(CURRENT_DATE())");
    $i = 0;

    foreach($st as $row)
    {

        $cantidadDeCitasPendientes = $row["count(*)"];
        

    }




    $st = $conexion -> query("select count(*) from consultas where mes = 1");

    foreach($st as $row)
    {

        $cantidadDeCitasEnero = $row["count(*)"];

    }


    $st = $conexion -> query("select count(*) from consultas where mes = 2");
    
    foreach($st as $row)
    {

        $cantidadDeCitasFebrero = $row["count(*)"];

    }
    
    
    $st = $conexion -> query("select count(*) from consultas where mes = 3");
    
    foreach($st as $row)
    {

        $cantidadDeCitasMarzo = $row["count(*)"];

    }
    
    $st = $conexion -> query("select count(*) from consultas where mes = 4");
    
    foreach($st as $row)
    {

        $cantidadDeCitasAbril = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = 5");
    
    
    foreach($st as $row)
    {

        $cantidadDeCitasMayo = $row["count(*)"];

    }
    
    $st = $conexion -> query("select count(*) from consultas where mes = 6");
    
    
    foreach($st as $row)
    {

        $cantidadDeCitasJunio = $row["count(*)"];

    }
    
    $st = $conexion -> query("select count(*) from consultas where mes = 7");
    
    
    foreach($st as $row)
    {

        $cantidadDeCitasJulio = $row["count(*)"];

    }
    
    $st = $conexion -> query("select count(*) from consultas where mes = 8");
    
    
    foreach($st as $row)
    {

        $cantidadDeCitasAgosto = $row["count(*)"];

    }
    
    $st = $conexion -> query("select count(*) from consultas where mes = 9");
    
    
    foreach($st as $row)
    {

        $cantidadDeCitasSeptiembre = $row["count(*)"];

    }
    
    $st = $conexion -> query("select count(*) from consultas where mes = 10");
    
    
    foreach($st as $row)
    {

        $cantidadDeCitasOctubre = $row["count(*)"];

    }
    
    $st = $conexion -> query("select count(*) from consultas where mes = 11");
    
    
    foreach($st as $row)
    {

        $cantidadDeCitasNoviembre = $row["count(*)"];

    }
    
    $st = $conexion -> query("select count(*) from consultas where mes = 12");

    
    foreach($st as $row)
    {

        $cantidadDeCitasDiciembre = $row["count(*)"];

    }


    
    //CITAS PENDIENTES

    $st = $conexion -> query("select count(*) from consultas where mes  =  MONTH(CURRENT_DATE()) and día >= DAY(CURRENT_DATE())");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientes = $row["count(*)"];

    }



/*    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día >= DATE(CURRENT_DATE())");
    $contador = 0;

    foreach($st as $row)
    {

        $Día[$contador] = strval($row["count(*)"]);
        $contador = ($contador + 1);

    }
*
    $contador = 0;
*/
    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 1");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía1 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 2");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía2 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 3");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía3 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 4");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía4 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 5");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía5 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 6");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía6 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 7");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía7 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 8");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía8 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 9");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía9 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 10");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía10 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 11");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía11 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 12");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía12 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 13");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía13 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 14");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía14 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 15");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía15 = $row["count(*)"];

    }


    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 16");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía16 = $row["count(*)"];

    }


    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 17");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía17 = $row["count(*)"];

    }


    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 18");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía18 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 19");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía19 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 20");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía20 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 21");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía21 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 22");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía22 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 23");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía23 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 24");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía24 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 25");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía25 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 26");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía26 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 26");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía26 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 27");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía27 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 28");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía28 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 29");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía29 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 30");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía30 = $row["count(*)"];

    }

    $st = $conexion -> query("select count(*) from consultas where mes = MONTH(CURRENT_DATE()) and día = 31");

    foreach($st as $row)
    {

        $cantidadDeCitasPendientesDía31 = $row["count(*)"];

    }

    


?>



<script>

    let graficaActivada = false;
    let grafica2Activada = false;

    document.getElementById("citas_totalesLine").addEventListener("click", () =>
    {
        
        document.getElementById("citas_totalesLine").style.cssText = "color: black; border: .3rem solid darkblue;";      
        
        
       graficaActivada = generarGraficaDeCitasTotales('<?php echo $cantidadDeCitasTotales; ?>', '<?php echo $cantidadDeCitasEnero; ?>', '<?php echo $cantidadDeCitasFebrero; ?>', '<?php echo $cantidadDeCitasMarzo; ?>', '<?php echo $cantidadDeCitasAbril; ?>',
              '<?php echo $cantidadDeCitasMayo; ?>', '<?php echo $cantidadDeCitasJunio; ?>', '<?php echo $cantidadDeCitasJulio; ?>', '<?php echo $cantidadDeCitasAgosto; ?>',
              '<?php echo $cantidadDeCitasSeptiembre; ?>', '<?php echo $cantidadDeCitasOctubre; ?>', '<?php echo $cantidadDeCitasNoviembre; ?>', '<?php echo $cantidadDeCitasDiciembre;?>', 'Linea', graficaActivada
              );

        

    });          


    document.getElementById("citas_totalesBar").addEventListener("click", () =>
    {

        document.getElementById("citas_totalesBar").style.cssText = "color: black; border: .3rem solid darkblue;"; 

        graficaActivada = generarGraficaDeCitasTotales('<?php echo $cantidadDeCitasTotales; ?>', '<?php echo $cantidadDeCitasEnero; ?>', '<?php echo $cantidadDeCitasFebrero; ?>', '<?php echo $cantidadDeCitasMarzo; ?>', '<?php echo $cantidadDeCitasAbril; ?>',
              '<?php echo $cantidadDeCitasMayo; ?>', '<?php echo $cantidadDeCitasJunio; ?>', '<?php echo $cantidadDeCitasJulio; ?>', '<?php echo $cantidadDeCitasAgosto; ?>',
              '<?php echo $cantidadDeCitasSeptiembre; ?>', '<?php echo $cantidadDeCitasOctubre; ?>', '<?php echo $cantidadDeCitasNoviembre; ?>', '<?php echo $cantidadDeCitasDiciembre;?>', 'Barra', graficaActivada
              );

                    

    });  

    document.getElementById("citas_totalesDoughnut").addEventListener("click", () =>
    {

        document.getElementById("citas_totalesDoughnut").style.cssText = "color: black; border: .3rem solid darkblue;"; 

        graficaActivada = generarGraficaDeCitasTotales('<?php echo $cantidadDeCitasTotales; ?>', '<?php echo $cantidadDeCitasEnero; ?>', '<?php echo $cantidadDeCitasFebrero; ?>', '<?php echo $cantidadDeCitasMarzo; ?>', '<?php echo $cantidadDeCitasAbril; ?>',
              '<?php echo $cantidadDeCitasMayo; ?>', '<?php echo $cantidadDeCitasJunio; ?>', '<?php echo $cantidadDeCitasJulio; ?>', '<?php echo $cantidadDeCitasAgosto; ?>',
              '<?php echo $cantidadDeCitasSeptiembre; ?>', '<?php echo $cantidadDeCitasOctubre; ?>', '<?php echo $cantidadDeCitasNoviembre; ?>', '<?php echo $cantidadDeCitasDiciembre;?>', 'Dona', graficaActivada
              );

                    

    }); 

    document.getElementById("citas_totalesPie").addEventListener("click", () =>
    {

        document.getElementById("citas_totalesPie").style.cssText = "color: black; border: .3rem solid darkblue;"; 

        graficaActivada = generarGraficaDeCitasTotales('<?php echo $cantidadDeCitasTotales; ?>', '<?php echo $cantidadDeCitasEnero; ?>', '<?php echo $cantidadDeCitasFebrero; ?>', '<?php echo $cantidadDeCitasMarzo; ?>', '<?php echo $cantidadDeCitasAbril; ?>',
              '<?php echo $cantidadDeCitasMayo; ?>', '<?php echo $cantidadDeCitasJunio; ?>', '<?php echo $cantidadDeCitasJulio; ?>', '<?php echo $cantidadDeCitasAgosto; ?>',
              '<?php echo $cantidadDeCitasSeptiembre; ?>', '<?php echo $cantidadDeCitasOctubre; ?>', '<?php echo $cantidadDeCitasNoviembre; ?>', '<?php echo $cantidadDeCitasDiciembre;?>', 'Pie', graficaActivada
              );
                    

    }); 

    document.getElementById("citas_pendientesLine").addEventListener("click", ()=>
    {

        document.getElementById("citas_pendientesLine").style.cssText = "color: black; border: .3rem solid darkblue;";

        generarGraficaDeCitasPendientes('<?php echo $cantidadDeCitasPendientes; ?>', '<?php echo $cantidadDeCitasPendientesDía1; ?>', '<?php echo $cantidadDeCitasPendientesDía2; ?>', '<?php echo $cantidadDeCitasPendientesDía3; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía4; ?>', '<?php echo $cantidadDeCitasPendientesDía5; ?>', '<?php echo $cantidadDeCitasPendientesDía6; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía7; ?>', '<?php echo $cantidadDeCitasPendientesDía8; ?>', '<?php echo $cantidadDeCitasPendientesDía9; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía10; ?>', '<?php echo $cantidadDeCitasPendientesDía11; ?>', '<?php echo $cantidadDeCitasPendientesDía12; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía13; ?>', '<?php echo $cantidadDeCitasPendientesDía14; ?>', '<?php echo $cantidadDeCitasPendientesDía15; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía16; ?>', '<?php echo $cantidadDeCitasPendientesDía17; ?>', '<?php echo $cantidadDeCitasPendientesDía18; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía19; ?>', '<?php echo $cantidadDeCitasPendientesDía20; ?>', '<?php echo $cantidadDeCitasPendientesDía21; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía22; ?>', '<?php echo $cantidadDeCitasPendientesDía23; ?>', '<?php echo $cantidadDeCitasPendientesDía24; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía25; ?>', '<?php echo $cantidadDeCitasPendientesDía26; ?>', '<?php echo $cantidadDeCitasPendientesDía27; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía28; ?>', '<?php echo $cantidadDeCitasPendientesDía29; ?>', '<?php echo $cantidadDeCitasPendientesDía30; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía31; ?>', "Linea", grafica2Activada);

    });

    
    document.getElementById("citas_pendientesBar").addEventListener("click", ()=>
    {

        document.getElementById("citas_pendientesBar").style.cssText = "color: black; border: .3rem solid darkblue;";

       grafica2Activada = generarGraficaDeCitasPendientes('<?php echo $cantidadDeCitasPendientes; ?>', '<?php echo $cantidadDeCitasPendientesDía1; ?>', '<?php echo $cantidadDeCitasPendientesDía2; ?>', '<?php echo $cantidadDeCitasPendientesDía3; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía4; ?>', '<?php echo $cantidadDeCitasPendientesDía5; ?>', '<?php echo $cantidadDeCitasPendientesDía6; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía7; ?>', '<?php echo $cantidadDeCitasPendientesDía8; ?>', '<?php echo $cantidadDeCitasPendientesDía9; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía10; ?>', '<?php echo $cantidadDeCitasPendientesDía11; ?>', '<?php echo $cantidadDeCitasPendientesDía12; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía13; ?>', '<?php echo $cantidadDeCitasPendientesDía14; ?>', '<?php echo $cantidadDeCitasPendientesDía15; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía16; ?>', '<?php echo $cantidadDeCitasPendientesDía17; ?>', '<?php echo $cantidadDeCitasPendientesDía18; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía19; ?>', '<?php echo $cantidadDeCitasPendientesDía20; ?>', '<?php echo $cantidadDeCitasPendientesDía21; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía22; ?>', '<?php echo $cantidadDeCitasPendientesDía23; ?>', '<?php echo $cantidadDeCitasPendientesDía24; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía25; ?>', '<?php echo $cantidadDeCitasPendientesDía26; ?>', '<?php echo $cantidadDeCitasPendientesDía27; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía28; ?>', '<?php echo $cantidadDeCitasPendientesDía29; ?>', '<?php echo $cantidadDeCitasPendientesDía30; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía31; ?>', "Barra", grafica2Activada);

        

    });


</script>





<!--
<script> 


    var activado1 = false;
    var activado2 = false;
    var activado3 = false;
    var activado4 = false;
    var grafica;
    var elemento;

function generarGraficaDeCitasTotales(cantidadDeCitasTotales, cantidadDeCitasEnero, cantidadDeCitasFebrero, cantidadDeCitasMarzo,
                                      cantidadDeCitasAbril, cantidadDeCitasMayo, cantidadDeCitasJunio, cantidadDeCitasJulio, cantidadDeCitasAgosto,
                                      cantidadDeCitasSeptiembre, cantidadDeCitasOctubre, cantidadDeCitasNoviembre, cantidadDeCitasDiciembre)
{

    

    if(activado1 === false)
    {

        elemento = document.getElementById("citasTotales");

        elemento.innerHTML = "Citas totales: " + cantidadDeCitasTotales; 
        activado1 = true;

        elemento = document.getElementById("grafica_para_citasTotales");
            let mes = [

                            cantidadDeCitasEnero, cantidadDeCitasFebrero, cantidadDeCitasMarzo, cantidadDeCitasAbril,
                            cantidadDeCitasMayo, cantidadDeCitasJunio, cantidadDeCitasJulio, cantidadDeCitasAgosto,
                            cantidadDeCitasSeptiembre, cantidadDeCitasOctubre, cantidadDeCitasNoviembre, cantidadDeCitasDiciembre
                
                        ];           

            const labels = 
            [
                'Enero',
                'Febrero',
                'Marzo',
                'Abril',
                'Mayo',
                'Junio',
                'Julio',
                'Agosto',
                'Septiembre',
                'Octubre',
                'Noviembre',
                'Diciembre',
                
                ];

                const data = {
                labels: labels,
                datasets: [{
                    label: 'Citas totales.',
                    backgroundColor: 'black',
                    borderColor: 'blue',
                    data: mes,
                }]
                }; 


                const config = 
                {

                    type: 'line',
                    data: data,
                    options: {}
                    
                };

                        grafica = new Chart(elemento, config);
                        



    }else
    {

        grafica.destroy();
        
        activado1 = false;


    }    


                           

}


function generarGraficaDeCitasPendientes(cantidadDeCitasPendientes, cantidadDeCitasPendientesDía1, cantidadDeCitasPendientesDía2, cantidadDeCitasPendientesDía3,
                                        cantidadDeCitasPendientesDía4, cantidadDeCitasPendientesDía5, cantidadDeCitasPendientesDía6,
                                        cantidadDeCitasPendientesDía7, cantidadDeCitasPendientesDía8, cantidadDeCitasPendientesDía9,
                                        cantidadDeCitasPendientesDía10, cantidadDeCitasPendientesDía11, cantidadDeCitasPendientesDía12,
                                        cantidadDeCitasPendientesDía13, cantidadDeCitasPendientesDía14, cantidadDeCitasPendientesDía15,
                                        cantidadDeCitasPendientesDía16, cantidadDeCitasPendientesDía17, cantidadDeCitasPendientesDía18,
                                        cantidadDeCitasPendientesDía19, cantidadDeCitasPendientesDía20, cantidadDeCitasPendientesDía21,
                                        cantidadDeCitasPendientesDía22, cantidadDeCitasPendientesDía23, cantidadDeCitasPendientesDía24,
                                        cantidadDeCitasPendientesDía25, cantidadDeCitasPendientesDía26, cantidadDeCitasPendientesDía27,
                                        cantidadDeCitasPendientesDía28, cantidadDeCitasPendientesDía29, cantidadDeCitasPendientesDía30,
                                        cantidadDeCitasPendientesDía31
                                        )
{ 

                    //window.location.href = "administracion.html";

                    elemento = document.getElementById("citas_pendientesLine");
                    elemento.innerHTML = cantidadDeCitasPendientes;
                    

                    elemento = document.getElementById("grafica_para_citasPendientes");
                        let fechaActual = new Date();
                        
                        let díaActual = (fechaActual.getDate() - 1);

                        let mesActual = (fechaActual.getMonth() + 1);

                        let cantidadDeCitasParaElDía;
                        let labels2;

                        let añoActual = (fechaActual.getFullYear() % 4);

                    if(mesActual != 04 && mesActual != 06 && mesActual != 08 && mesActual != 11 && mesActual != 02)
                    {


                            
                        aux =
                        [

                            cantidadDeCitasPendientesDía1, cantidadDeCitasPendientesDía2, cantidadDeCitasPendientesDía3,
                            cantidadDeCitasPendientesDía4, cantidadDeCitasPendientesDía5, cantidadDeCitasPendientesDía6,
                            cantidadDeCitasPendientesDía7, cantidadDeCitasPendientesDía8, cantidadDeCitasPendientesDía9,
                            cantidadDeCitasPendientesDía10, cantidadDeCitasPendientesDía11, cantidadDeCitasPendientesDía12,
                            cantidadDeCitasPendientesDía13, cantidadDeCitasPendientesDía14, cantidadDeCitasPendientesDía15,
                            cantidadDeCitasPendientesDía16, cantidadDeCitasPendientesDía17, cantidadDeCitasPendientesDía18,
                            cantidadDeCitasPendientesDía19, cantidadDeCitasPendientesDía20, cantidadDeCitasPendientesDía21,
                            cantidadDeCitasPendientesDía22, cantidadDeCitasPendientesDía23, cantidadDeCitasPendientesDía24,
                            cantidadDeCitasPendientesDía25, cantidadDeCitasPendientesDía26, cantidadDeCitasPendientesDía27,
                            cantidadDeCitasPendientesDía28, cantidadDeCitasPendientesDía29, cantidadDeCitasPendientesDía30,
                            cantidadDeCitasPendientesDía31

                        ];




                        
                        aux2 =
                        [

                            '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17',
                            '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'    

                        ];
                        
                    }else if(mes != 01 && mes != 05 && mes != 08 && mes != 03 && mes != 07 && mes != 10 && mes != 12 && mes != 02)
                    {

                        aux =
                        [

                            cantidadDeCitasPendientesDía1, cantidadDeCitasPendientesDía2, cantidadDeCitasPendientesDía3,
                            cantidadDeCitasPendientesDía7, cantidadDeCitasPendientesDía8, cantidadDeCitasPendientesDía9,
                            cantidadDeCitasPendientesDía10, cantidadDeCitasPendientesDía11, cantidadDeCitasPendientesDía12,
                            cantidadDeCitasPendientesDía13, cantidadDeCitasPendientesDía14, cantidadDeCitasPendientesDía15,
                            cantidadDeCitasPendientesDía16, cantidadDeCitasPendientesDía17, cantidadDeCitasPendientesDía18,
                            cantidadDeCitasPendientesDía19, cantidadDeCitasPendientesDía20, cantidadDeCitasPendientesDía21,
                            cantidadDeCitasPendientesDía22, cantidadDeCitasPendientesDía23, cantidadDeCitasPendientesDía24,
                            cantidadDeCitasPendientesDía25, cantidadDeCitasPendientesDía26, cantidadDeCitasPendientesDía27,
                            cantidadDeCitasPendientesDía28, cantidadDeCitasPendientesDía29, cantidadDeCitasPendientesDía30
                            

                        ];

                        aux2 =
                        [

                            '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17',
                            '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30'    

                        ];

                                
                    }else if(mes === 02)
                    {

                        if(añoActual  === 0)
                        {

                            aux =
                        [

                            cantidadDeCitasPendientesDía1, cantidadDeCitasPendientesDía2, cantidadDeCitasPendientesDía3,
                            cantidadDeCitasPendientesDía4, cantidadDeCitasPendientesDía5, cantidadDeCitasPendientesDía6,
                            cantidadDeCitasPendientesDía7, cantidadDeCitasPendientesDía8, cantidadDeCitasPendientesDía9,
                            cantidadDeCitasPendientesDía10, cantidadDeCitasPendientesDía11, cantidadDeCitasPendientesDía12,
                            cantidadDeCitasPendientesDía13, cantidadDeCitasPendientesDía14, cantidadDeCitasPendientesDía15,
                            cantidadDeCitasPendientesDía16, cantidadDeCitasPendientesDía17, cantidadDeCitasPendientesDía18,
                            cantidadDeCitasPendientesDía19, cantidadDeCitasPendientesDía20, cantidadDeCitasPendientesDía21,
                            cantidadDeCitasPendientesDía22, cantidadDeCitasPendientesDía23, cantidadDeCitasPendientesDía24,
                            cantidadDeCitasPendientesDía25, cantidadDeCitasPendientesDía26, cantidadDeCitasPendientesDía27,
                            cantidadDeCitasPendientesDía28, cantidadDeCitasPendientesDía29
                            

                        ];

                        aux2 =
                        [

                            '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17',
                            '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29'    

                        ];

                        }else
                        {

                            aux =
                            [

                            cantidadDeCitasPendientesDía1, cantidadDeCitasPendientesDía2, cantidadDeCitasPendientesDía3,
                            cantidadDeCitasPendientesDía4, cantidadDeCitasPendientesDía5, cantidadDeCitasPendientesDía6,
                            cantidadDeCitasPendientesDía7, cantidadDeCitasPendientesDía8, cantidadDeCitasPendientesDía9,
                            cantidadDeCitasPendientesDía10, cantidadDeCitasPendientesDía11, cantidadDeCitasPendientesDía12,
                            cantidadDeCitasPendientesDía13, cantidadDeCitasPendientesDía14, cantidadDeCitasPendientesDía15,
                            cantidadDeCitasPendientesDía16, cantidadDeCitasPendientesDía17, cantidadDeCitasPendientesDía18,
                            cantidadDeCitasPendientesDía19, cantidadDeCitasPendientesDía20, cantidadDeCitasPendientesDía21,
                            cantidadDeCitasPendientesDía22, cantidadDeCitasPendientesDía23, cantidadDeCitasPendientesDía24,
                            cantidadDeCitasPendientesDía25, cantidadDeCitasPendientesDía26, cantidadDeCitasPendientesDía27,
                            cantidadDeCitasPendientesDía28,
                            

                            ];

                        aux2 =
                        [

                            '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17',
                            '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28'

                        ];

                        }
                    }    


                    switch(mesActual)
                    {

                        case 1:

                            mesActual = "Enero";

                            break;

                        case 2:    

                            mesActual = "Febrero";

                            break;

                        case 3:    

                            mesActual = "Marzo";

                            break;

                        case 4:

                            mesActual = "Abril";
                            
                            break;

                        case 5:    

                            mesActual = "Mayo";

                            break;

                        case 6:        

                            mesActual = "Junio";

                            break;

                        case 7:
                        
                            mesActual = "Julio";

                            break;

                        case 8:
                            
                            mesActual = "Agosto";

                            break;

                        case 9:
                            
                            mesActual = "Septiembre";

                            break;

                        case 10:
                            
                            mesActual = "Octubre";

                            break;

                        case 11:
                            
                            mesActual = "Noviembre";

                            break;

                        case 12:    

                            mesActual = "Diciembre";

                            break;

                    }




                        cantidadDeCitasParaElDía = aux.slice(díaActual, undefined);
                        labels2 =  aux2.slice(díaActual, undefined);

                
                        const data2 = {
                        labels: labels2,
                        datasets: [{
                            label: 'Citas pendintes de este mes ' + mesActual,
                            backgroundColor: 'red',
                            borderColor: 'red',
                            data: cantidadDeCitasParaElDía
                        }]
                        };                



                        const config2 = 
                        {

                            type: 'line',
                            data: data2,
                            options: {}
                            
                        };


                        let grafica2 = new Chart(elemento, config2);

}                        

</script>

--->

<!--
<script>    

let elemento = document.getElementById("citas_totales");

elemento.innerHTML = '<?php echo $cantidadDeCitasTotales; ?>';



 elemento = document.getElementById("grafica_para_citasTotales");
           let mes = [

                        '<?php echo $cantidadDeCitasEnero; ?>', '<?php echo $cantidadDeCitasFebrero; ?>', '<?php echo $cantidadDeCitasMarzo; ?>', '<?php echo $cantidadDeCitasAbril; ?>',
                        '<?php echo $cantidadDeCitasMayo; ?>', '<?php echo $cantidadDeCitasJunio; ?>', '<?php echo $cantidadDeCitasJulio; ?>', '<?php echo $cantidadDeCitasAgosto; ?>',
                        '<?php echo $cantidadDeCitasSeptiembre; ?>', '<?php echo $cantidadDeCitasOctubre; ?>', '<?php echo $cantidadDeCitasNoviembre; ?>', '<?php echo $cantidadDeCitasDiciembre;?>'
               
                     ];           

           const labels = 
           [
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio',
            'Julio',
            'Agosto',
            'Septiembre',
            'Octubre',
            'Noviembre',
            'Diciembre',
            
            ];

            const data = {
            labels: labels,
            datasets: [{
                label: 'Citas totales.',
                backgroundColor: 'black',
                borderColor: 'blue',
                data: mes,
            }]
            }; 


            const config = 
            {

                type: 'line',
                data: data,
                options: {}
                
            };

                    let grafica = new Chart(elemento, config);                       





                    //window.location.href = "administracion.html";

                    elemento = document.getElementById("citas_pendientes");
                    elemento.innerHTML = '<?php echo $cantidadDeCitasPendientes; ?>';
                    

                    elemento = document.getElementById("grafica_para_citasPendientes");
                        let fechaActual = new Date();
                        
                        let díaActual = (fechaActual.getDate() - 1);

                        let mesActual = (fechaActual.getMonth() + 1);

                        let cantidadDeCitasParaElDía;
                        let labels2;

                        let añoActual = (fechaActual.getFullYear() % 4);

                    if(mesActual != 04 && mesActual != 06 && mesActual != 08 && mesActual != 11 && mesActual != 02)
                    {


                            
                        aux =
                        [

                            '<?php echo $cantidadDeCitasPendientesDía1; ?>', '<?php echo $cantidadDeCitasPendientesDía2; ?>', '<?php echo $cantidadDeCitasPendientesDía3; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía4; ?>', '<?php echo $cantidadDeCitasPendientesDía5; ?>', '<?php echo $cantidadDeCitasPendientesDía6; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía7; ?>', '<?php echo $cantidadDeCitasPendientesDía8; ?>', '<?php echo $cantidadDeCitasPendientesDía9; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía10; ?>', '<?php echo $cantidadDeCitasPendientesDía11; ?>', '<?php echo $cantidadDeCitasPendientesDía12; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía13; ?>', '<?php echo $cantidadDeCitasPendientesDía14; ?>', '<?php echo $cantidadDeCitasPendientesDía15; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía16; ?>', '<?php echo $cantidadDeCitasPendientesDía17; ?>', '<?php echo $cantidadDeCitasPendientesDía18; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía19; ?>', '<?php echo $cantidadDeCitasPendientesDía20; ?>', '<?php echo $cantidadDeCitasPendientesDía21; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía22; ?>', '<?php echo $cantidadDeCitasPendientesDía23; ?>', '<?php echo $cantidadDeCitasPendientesDía24; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía25; ?>', '<?php echo $cantidadDeCitasPendientesDía26; ?>', '<?php echo $cantidadDeCitasPendientesDía27; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía28; ?>', '<?php echo $cantidadDeCitasPendientesDía29; ?>', '<?php echo $cantidadDeCitasPendientesDía30; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía31; ?>'

                        ];




                        
                        aux2 =
                        [

                            '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17',
                            '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'    

                        ];
                        
                    }else if(mes != 01 && mes != 05 && mes != 08 && mes != 03 && mes != 07 && mes != 10 && mes != 12 && mes != 02)
                    {

                        aux =
                        [

                            '<?php echo $cantidadDeCitasPendientesDía1; ?>', '<?php echo $cantidadDeCitasPendientesDía2; ?>', '<?php echo $cantidadDeCitasPendientesDía3; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía7; ?>', '<?php echo $cantidadDeCitasPendientesDía8; ?>', '<?php echo $cantidadDeCitasPendientesDía9; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía10; ?>', '<?php echo $cantidadDeCitasPendientesDía11; ?>', '<?php echo $cantidadDeCitasPendientesDía12; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía13; ?>', '<?php echo $cantidadDeCitasPendientesDía14; ?>', '<?php echo $cantidadDeCitasPendientesDía15; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía16; ?>', '<?php echo $cantidadDeCitasPendientesDía17; ?>', '<?php echo $cantidadDeCitasPendientesDía18; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía19; ?>', '<?php echo $cantidadDeCitasPendientesDía20; ?>', '<?php echo $cantidadDeCitasPendientesDía21; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía22; ?>', '<?php echo $cantidadDeCitasPendientesDía23; ?>', '<?php echo $cantidadDeCitasPendientesDía24; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía25; ?>', '<?php echo $cantidadDeCitasPendientesDía26; ?>', '<?php echo $cantidadDeCitasPendientesDía27; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía28; ?>', '<?php echo $cantidadDeCitasPendientesDía29; ?>', '<?php echo $cantidadDeCitasPendientesDía30; ?>'
                            

                        ];

                        aux2 =
                        [

                            '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17',
                            '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30'    

                        ];

                                
                    }else if(mes === 02)
                    {

                        if(añoActual  === 0)
                        {

                            aux =
                        [

                            '<?php echo $cantidadDeCitasPendientesDía1; ?>', '<?php echo $cantidadDeCitasPendientesDía2; ?>', '<?php echo $cantidadDeCitasPendientesDía3; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía4; ?>', '<?php echo $cantidadDeCitasPendientesDía5; ?>', '<?php echo $cantidadDeCitasPendientesDía6; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía7; ?>', '<?php echo $cantidadDeCitasPendientesDía8; ?>', '<?php echo $cantidadDeCitasPendientesDía9; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía10; ?>', '<?php echo $cantidadDeCitasPendientesDía11; ?>', '<?php echo $cantidadDeCitasPendientesDía12; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía13; ?>', '<?php echo $cantidadDeCitasPendientesDía14; ?>', '<?php echo $cantidadDeCitasPendientesDía15; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía16; ?>', '<?php echo $cantidadDeCitasPendientesDía17; ?>', '<?php echo $cantidadDeCitasPendientesDía18; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía19; ?>', '<?php echo $cantidadDeCitasPendientesDía20; ?>', '<?php echo $cantidadDeCitasPendientesDía21; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía22; ?>', '<?php echo $cantidadDeCitasPendientesDía23; ?>', '<?php echo $cantidadDeCitasPendientesDía24; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía25; ?>', '<?php echo $cantidadDeCitasPendientesDía26; ?>', '<?php echo $cantidadDeCitasPendientesDía27; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía28; ?>', '<?php echo $cantidadDeCitasPendientesDía29; ?>'
                            

                        ];

                        aux2 =
                        [

                            '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17',
                            '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29'    

                        ];

                        }else
                        {

                            aux =
                            [

                            '<?php echo $cantidadDeCitasPendientesDía1; ?>', '<?php echo $cantidadDeCitasPendientesDía2; ?>', '<?php echo $cantidadDeCitasPendientesDía3; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía4; ?>', '<?php echo $cantidadDeCitasPendientesDía5; ?>', '<?php echo $cantidadDeCitasPendientesDía6; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía7; ?>', '<?php echo $cantidadDeCitasPendientesDía8; ?>', '<?php echo $cantidadDeCitasPendientesDía9; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía10; ?>', '<?php echo $cantidadDeCitasPendientesDía11; ?>', '<?php echo $cantidadDeCitasPendientesDía12; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía13; ?>', '<?php echo $cantidadDeCitasPendientesDía14; ?>', '<?php echo $cantidadDeCitasPendientesDía15; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía16; ?>', '<?php echo $cantidadDeCitasPendientesDía17; ?>', '<?php echo $cantidadDeCitasPendientesDía18; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía19; ?>', '<?php echo $cantidadDeCitasPendientesDía20; ?>', '<?php echo $cantidadDeCitasPendientesDía21; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía22; ?>', '<?php echo $cantidadDeCitasPendientesDía23; ?>', '<?php echo $cantidadDeCitasPendientesDía24; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía25; ?>', '<?php echo $cantidadDeCitasPendientesDía26; ?>', '<?php echo $cantidadDeCitasPendientesDía27; ?>',
                            '<?php echo $cantidadDeCitasPendientesDía28; ?>',
                            

                            ];

                        aux2 =
                        [

                            '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17',
                            '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28'

                        ];

                        }
                    }    


                    switch(mesActual)
                    {

                        case 1:

                            mesActual = "Enero";

                            break;

                        case 2:    

                            mesActual = "Febrero";

                            break;

                        case 3:    

                            mesActual = "Marzo";

                            break;

                        case 4:

                            mesActual = "Abril";
                            
                            break;

                        case 5:    

                            mesActual = "Mayo";

                            break;

                        case 6:        

                            mesActual = "Junio";

                            break;

                        case 7:
                        
                            mesActual = "Julio";

                            break;

                        case 8:
                            
                            mesActual = "Agosto";

                            break;

                        case 9:
                            
                            mesActual = "Septiembre";

                            break;

                        case 10:
                            
                            mesActual = "Octubre";

                            break;

                        case 11:
                            
                            mesActual = "Noviembre";

                            break;

                        case 12:    

                            mesActual = "Diciembre";

                            break;

                    }




                        cantidadDeCitasParaElDía = aux.slice(díaActual, undefined);
                        labels2 =  aux2.slice(díaActual, undefined);

                
                        const data2 = {
                        labels: labels2,
                        datasets: [{
                            label: 'Citas pendintes de este mes ' + mesActual,
                            backgroundColor: 'red',
                            borderColor: 'red',
                            data: cantidadDeCitasParaElDía
                        }]
                        };                



                        const config2 = 
                        {

                            type: 'line',
                            data: data2,
                            options: {}
                            
                        };


                        let grafica2 = new Chart(elemento, config2);

</script>
---> 