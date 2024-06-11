<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="css/normalize.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap<?php echo time(); ?>" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/administracion.js?=<?php echo time(); ?>"></script>

</head>
<body class="reportes">



    <div id="division_citasTotales" class="division_citasTotales">

        <h1 id="citasTotales" class="citasTotales">Citas totales:</h1>
        
        
        
            <div id="citas_totales_seleccion" class="citas_totales_seleccion">

                <button id="citas_totalesLine" class="citas_totalesLine">Generar gráfica de línea</button>
                <button id="citas_totalesBar"  class="citas_totalesBar">Generar gráfica de barra</button>
                <button id="citas_totalesDoughnut" class="citas_totalesDoughnut">Generar gráfica de dona</button>    
                <button id="citas_totalesPie" class="citas_totalesPie">Generar gráfica de pie</button>

            </div>

        <div class="grafica1">

            <canvas id="grafica_para_citasTotales" class="grafica_para_citasTotales"></canvas>

        </div>
            
    </div>    

    <div id="division_citasPendientes" class="division_citasPendientes">

        <h1 id="citasPendientes" class="citasPendientes">Citas pendientes para este mes:</h1>
        
            <div id="citas_pendientes_seleccion" class="citas_pendientes_seleccion">

                <button id="citas_pendientesLine" class="citas_pendientesLine">Generar gráfica de línea</button>
                <button id="citas_pendientesBar" class="citas_pendientesBar">Generar gráfica de barra</button>
                <button id="citas_pendientesDoughnut" class="citas_pendientesDoughnut">Generar gráfica de dona</button>    
                <button id="citas_pendientesPie" class="citas_pendientesPie">Generar gráfica de pie</button>

            </div>

        <div class="grafica2">

            <canvas id="grafica_para_citasPendientes"></canvas>

        </div>    

    </div>    
    

    <?php
        
        include("administracion.php");
        
    ?>




<!--
<script>

    document.getElementById("citas_totalesLine").addEventListener("click", () =>
    {
        generarGraficaDeCitasTotales('<?php echo $cantidadDeCitasTotales; ?>', '<?php echo $cantidadDeCitasEnero; ?>', '<?php echo $cantidadDeCitasFebrero; ?>', '<?php echo $cantidadDeCitasMarzo; ?>', '<?php echo $cantidadDeCitasAbril; ?>',
              '<?php echo $cantidadDeCitasMayo; ?>', '<?php echo $cantidadDeCitasJunio; ?>', '<?php echo $cantidadDeCitasJulio; ?>', '<?php echo $cantidadDeCitasAgosto; ?>',
              '<?php echo $cantidadDeCitasSeptiembre; ?>', '<?php echo $cantidadDeCitasOctubre; ?>', '<?php echo $cantidadDeCitasNoviembre; ?>', '<?php echo $cantidadDeCitasDiciembre;?>'
              );

        document.getElementById("citas_totalesLine").style.cssText = "color: black; border: .3rem solid darkblue;";      

    });          

    document.getElementById("citas_pendientesLine").addEventListener("click", ()=>
    {

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
                            '<?php echo $cantidadDeCitasPendientesDía31; ?>');

    });

    document.getElementById("citas_totalesLine").style.cssText = "color: black; border: .3rem solid darkblue;";

</script>
--->


<!--
    <script>

          generarGraficaDeCitasTotales('<?php echo $cantidadDeCitasTotales; ?>', '<?php echo $cantidadDeCitasEnero; ?>', '<?php echo $cantidadDeCitasFebrero; ?>', '<?php echo $cantidadDeCitasMarzo; ?>', '<?php echo $cantidadDeCitasAbril; ?>',
                        '<?php echo $cantidadDeCitasMayo; ?>', '<?php echo $cantidadDeCitasJunio; ?>', '<?php echo $cantidadDeCitasJulio; ?>', '<?php echo $cantidadDeCitasAgosto; ?>',
                        '<?php echo $cantidadDeCitasSeptiembre; ?>', '<?php echo $cantidadDeCitasOctubre; ?>', '<?php echo $cantidadDeCitasNoviembre; ?>', '<?php echo $cantidadDeCitasDiciembre;?>'
                        );


    </script>
--->


</body>

</html>