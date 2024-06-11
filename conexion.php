<?php

 
    $conexion = new PDO('mysql:host=localhost;dbname=consultorio_dental;charset=UTF8', 'root', 'marcoscg1198');

    if(!$conexion)
    {
        die("Error en la conexión con la base de datos").mysqli_connect_error();
    }



/*    generarConsulta($conexion);
 y


    function generarConsulta($conexion)
    {
*/
        
        $nombres = $_POST['Nombres'];
        $apellidoP = $_POST['Apellido_Paterno'];
        $apellidoM = $_POST['Apellido_Materno'];
        $edad = $_POST['Edad'];
        $correoElectronico = $_POST['Correo_Electrónico'];
        $fecha = $_POST['Fecha'];
        $hora = $_POST['Hora'];
        $plan = $_POST['Plan'];
        
        $año = substr($fecha, 0, 4);
        $mes = substr($fecha, 5, 2);
        $día = substr($fecha, 8, 2);


    //    echo '<script type="text/javascript"> comprobarCampoNombre($nombres); </script>';

    try
    {
    
        $statement = 'CALL generarCita(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, @validacion)';
        $st = $conexion->prepare($statement);

        
        
        $st->bindParam(1, $nombres, PDO::PARAM_STR, 100);
        $st->bindParam(2, $apellidoP, PDO::PARAM_STR, 100);
        $st->bindParam(3, $apellidoM, PDO::PARAM_STR, 100);
        $st->bindParam(4, $edad, PDO::PARAM_INT, 3);      
        $st->bindParam(5, $correoElectronico, PDO::PARAM_STR, 100);
        $st->bindParam(6, $fecha, PDO::PARAM_STR, 100);
        $st->bindParam(7, $año, PDO::PARAM_STR, 4);
        $st->bindParam(8, $mes, PDO::PARAM_STR, 2);
        $st->bindParam(9, $día, PDO::PARAM_STR, 2);
        $st->bindParam(10, $hora, PDO::PARAM_STR, 100);  
        $st->bindParam(11, $plan, PDO::PARAM_STR, 100);
        $st-> execute();

        $st = $conexion->query("select @validacion");
       
        
        foreach($st as $row)
        {

            $valor = $row["@validacion"];


        }
        
     
    }catch(PDOException $ex)
    {

        echo $ex->getMessage();

    }    
  //          echo '<script type="text/javascript">', 'mostrarValidacion($valor);', '</script>';
  //            echo '<script type="text/javascript">', 'regresarAlFormulario();', '</script>';              


    //};
?>


<script type="text/javascript">

    

    let importante =    
        {
            showdiv: true,
            validacion: <?=$valor?>    
            
        };

        localStorage.setItem("validacion", JSON.stringify(importante));

        window.location.href = "formulario_registro.html";

        if(importante.validacion === 0)
        {

            window.alert("La cita no ha podido agendarse debido a que ya existe otra persona esperando para ser atendido ese dia.");

        }else
        {

            window.alert("La cita se ha agendado con éxito");

        }


        

</script>


