    var activado1 = false;
    var activado2 = false;
    var activado3 = false;
    var activado4 = false;
    var activado5 = false;
    var activado6 = false;
    var activado7 = false;
    var activado8 = false;
    var activado9 = false;
    var activado10 = false;
    var activado12 = false;
    var activado13 = false;
    var grafica;
    var grafica2;
    var elemento;

function generarGraficaDeCitasTotales(cantidadDeCitasTotales, cantidadDeCitasEnero, cantidadDeCitasFebrero, cantidadDeCitasMarzo,
                                      cantidadDeCitasAbril, cantidadDeCitasMayo, cantidadDeCitasJunio, cantidadDeCitasJulio, cantidadDeCitasAgosto,
                                      cantidadDeCitasSeptiembre, cantidadDeCitasOctubre, cantidadDeCitasNoviembre, cantidadDeCitasDiciembre, botonCliqueado, graficaActivada)
{

    
        if(botonCliqueado === 'Linea')
        {

            if(activado1 === false)
            {



                if(graficaActivada === true)
                {

                    grafica.destroy();
                    graficaActivada = false;    
                    activado2 = false;
                    activado3 = false;
                    activado4 = false;

                }

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
                            hoverBackgroundColor: 'white',
                            fill: {target: 'origin', above: 'rgba(34, 135, 153, 0.466)', below:'rgba(34, 135, 153, 0.466)'},
                            tension: 0.4
                        }]
                        }; 


                        const config = 
                        {

                            type: 'line',
                            data: data,
                            options: {}
                            
                        };

                                grafica = new Chart(elemento, config);
                        
                document.getElementById("citas_totalesBar").style.cssText = "border: none; color: whitesmoke;";   
                document.getElementById("citas_totalesDoughnut").style.cssText = "border: none; color: whitesmoke;";
                document.getElementById("citas_totalesPie").style.cssText = "border: none; color: whitesmoke;";                
                graficaActivada = true;        

            }else
            {
                
                
                if(graficaActivada === true)
                {

                    grafica.destroy();
                    graficaActivada = false;    
                    
                }


                activado1 = false;
                document.getElementById("citas_totalesLine").style.cssText = "border: none; color: whitesmoke;";


            }    

             

        }else if(botonCliqueado === 'Barra')
        {
          
            if(activado2 === false)
            {

                if(graficaActivada === true)
                {
    
                    grafica.destroy();
                    graficaActivada = false;
                    activado1 = false;
                    activado3 = false;
                    activado4 = false;

                }

                activado2 = true;
                
                elemento = document.getElementById("citasTotales");

                elemento.innerHTML = "Citas totales: " + cantidadDeCitasTotales; 

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
                                backgroundColor: ['rgb(10, 10, 153, 0.432)', 'rgb(230, 25, 25, 0.466)', 'rgb(0, 128, 0, 0.479)','rgb(218, 165, 32, 0.603)',
                                                'rgb(128, 128, 128, 0.596)', 'rgb(78, 76, 76, 0.61)', 'rgb(224, 90, 32, 0.555)', 'rgb(12, 85, 85, 0.552)',
                                                'rgb(14, 179, 176, 0.616)', 'rgb(112, 169, 5, 0.623)', 'rgb(176, 224, 230, 0.534)', 'rgb(109, 109, 56, 0.767)'],
                                borderColor: ['rgb(10, 10, 153)', 'rgb(230, 25, 25)', 'rgb(0, 128, 0)','rgb(218, 165, 32)',
                                            'rgb(128, 128, 128)', 'rgb(78, 76, 76)', 'rgb(224, 90, 32)', 'rgb(12, 85, 85)',
                                            'rgb(14, 179, 176)', 'rgb(112, 169, 5)', 'rgb(176, 224, 230)', 'rgb(109, 109, 56)'],
                                data: mes,
                                borderWidth: 3,
                                hoverBorderColor: 'rgb(0, 0, 0)'
                            }]
                            }; 
            
            
                            const config = 
                            {
            
                                type: 'bar',
                                data: data,
                                options: {

                                    options: 
                                    {
                                        maintainAspectRatio: false  
                                    },
                                    scales: {
                                    y: {
                                    beginAtZero: true
                                    }
                                }}
                                
                            };
            
                                    grafica = new Chart(elemento, config);
                                    document.getElementById("citas_totalesLine").style.cssText = "border: none; color: whitesmoke;";
                                    document.getElementById("citas_totalesDoughnut").style.cssText = "border: none; color: whitesmoke;";             
                                    graficaActivada = true;
            }else
            {


                if(graficaActivada === true)
                {

                    grafica.destroy();
                    graficaActivada = false;

                }

                activado2 = false;

                document.getElementById("citas_totalesBar").style.cssText = "border: none; color: whitesmoke;";

            }        

        }else if(botonCliqueado === 'Dona')
        {


            if(activado3 === false)
            {

                if(graficaActivada === true)
                {
    
                    grafica.destroy();
                    graficaActivada = false;
                    activado1 = false;
                    activado2 = false;
                    activado4 = false;

                }

                activado3 = true;
                
                elemento = document.getElementById("citasTotales");

                elemento.innerHTML = "Citas totales: " + cantidadDeCitasTotales; 

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
                                data: mes,
                                backgroundColor: ['rgba(0, 0, 139)', 'rgb(230, 25, 25)', 'rgb(0, 128, 0)','rgb(218, 165, 32)',
                                                'rgb(128, 128, 128)', 'rgb(78, 76, 76)', 'rgb(224, 90, 32)', 'rgb(12, 85, 85)',
                                                'rgb(14, 179, 176)', 'rgb(112, 169, 5)', 'rgb(176, 224, 230)', 'rgb(119, 59, 3)'],
                                spacing: 2,
                                borderWidth: 5,
                                hoverBorderColor: 'rgb(0,0,0)',
                                cutout: 40,
                                              
                            }]
                            }; 
            
            
                            const config = 
                            {
            
                                type: 'doughnut',
                                data: data,
                                options:{
                                maintainAspectRatio: false  
                                }
                            };
            
                                    grafica = new Chart(elemento, config);
                                               
                                    graficaActivada = true;
                                    document.getElementById("citas_totalesLine").style.cssText = "border: none; color: whitesmoke;"; 
                                    document.getElementById("citas_totalesBar").style.cssText = "border: none; color: whitesmoke;";
                                    document.getElementById("citas_totalesPie").style.cssText = "border: none; color: whitesmoke;";

            }else
            {


                if(graficaActivada === true)
                {

                    grafica.destroy();
                    graficaActivada = false;

                }

                activado3 = false;

                document.getElementById("citas_totalesDoughnut").style.cssText = "border: none; color: whitesmoke;";

            } 

        }else if(botonCliqueado === 'Pie')
        {

            if(activado4 === false)
            {

                if(graficaActivada === true)
                {
    
                    grafica.destroy();
                    graficaActivada = false;
                    activado1 = false;
                    activado2 = false;
                    activado3 = false;
                }

                activado4 = true;
                
                elemento = document.getElementById("citasTotales");

                elemento.innerHTML = "Citas totales: " + cantidadDeCitasTotales; 

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
                                data: mes,
                                backgroundColor: ['rgba(0, 0, 139)', 'rgb(230, 25, 25)', 'rgb(0, 128, 0)','rgb(218, 165, 32)',
                                                'rgb(128, 128, 128)', 'rgb(78, 76, 76)', 'rgb(224, 90, 32)', 'rgb(12, 85, 85)',
                                                'rgb(14, 179, 176)', 'rgb(112, 169, 5)', 'rgb(176, 224, 230)', 'rgb(119, 59, 3)'],
                                spacing: 1,
                                borderWidth: 5,
                                hoverBorderColor: 'rgb(0,0,0)',
                                cutout: 0 ,
                                width: 5               
                            }]
                            }; 
            
            
                            const config = 
                            {
            
                                type: 'doughnut',
                                data: data,
                                options:{
                                    maintainAspectRatio: false  
                                    }
                            };
            
                                    grafica = new Chart(elemento, config);
                                           
                                    
                                    graficaActivada = true;
                                    document.getElementById("citas_totalesLine").style.cssText = "border: none; color: whitesmoke;"; 
                                    document.getElementById("citas_totalesBar").style.cssText = "border: none; color: whitesmoke;";
                                    document.getElementById("citas_totalesDoughnut").style.cssText = "border: none; color: whitesmoke;";

            }else
            {


                if(graficaActivada === true)
                {

                    grafica.destroy();
                    graficaActivada = false;

                }

                activado4 = false;

                document.getElementById("citas_totalesPie").style.cssText = "border: none; color: whitesmoke;";

            } 




        }  

        return graficaActivada;

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
                                        cantidadDeCitasPendientesDía31, botonCliqueado, graficaActivda
                                        )
{ 




    if(botonCliqueado === 'Linea')
    {

        if(activado6 === false)
        {

        
            if(graficaActivda === true)
            {

                grafica2.destroy();
                graficaActivda = false;
                activado7 = false;
                activado8 = false;
                activado9 = false;

            }

            activado6 = true;
            elemento = document.getElementById("citasPendientes");
            elemento.innerHTML = "Citas pendientes para este mes: " + cantidadDeCitasPendientes;
            

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
                    label: 'Citas pendientes de este mes ' + mesActual,
                    backgroundColor: 'red',
                    borderColor: 'red',
                    data: cantidadDeCitasParaElDía,
                    fill: {target: 'origin', above: 'rgba(241, 70, 70, 0.479)', below: 'rgba(241, 70, 70, 0.479)'},
                    hoverBackgroundColor: 'whitesmoke'
                }]
                };                



                const config2 = 
                {

                    type: 'line',
                    data: data2,
                    options: {}
                    
                };


                grafica2 = new Chart(elemento, config2);
                document.getElementById("citas_pendientesBar").style.cssText = "border: none; color: whitesmoke;";
                document.getElementById("citas_pendientesDoughnut").style.cssText = "border: none; color: whitesmoke;";
                document.getElementById("citas_pendientesPie").style.cssText = "border: none; color: whitesmoke;";


        }else
        {

            if(graficaActivada === true)
            {

                grafica.destroy();
                graficaActivada = false;    
                
            }


            activado6 = false;
            document.getElementById("citas_pendientesLine").style.cssText = "border: none; color: whitesmoke;";
        
        }

    }else if(botonCliqueado === 'Barra')
    {       

    }else if(botonCliqueado === 'Dona')
    {


        if(activado3 === false)
        {

            if(graficaActivada === true)
            {

                grafica.destroy();
                graficaActivada = false;
                activado1 = false;
                activado2 = false;
                activado4 = false;

            }

            activado3 = true;
            
            elemento = document.getElementById("citasTotales");

            elemento.innerHTML = "Citas totales: " + cantidadDeCitasTotales; 

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
                            data: mes,
                            backgroundColor: ['rgba(0, 0, 139)', 'rgb(230, 25, 25)', 'rgb(0, 128, 0)','rgb(218, 165, 32)',
                                            'rgb(128, 128, 128)', 'rgb(78, 76, 76)', 'rgb(224, 90, 32)', 'rgb(12, 85, 85)',
                                            'rgb(14, 179, 176)', 'rgb(112, 169, 5)', 'rgb(176, 224, 230)', 'rgb(119, 59, 3)'],
                            spacing: 2,
                            borderWidth: 5,
                            hoverBorderColor: 'rgb(0,0,0)',
                            cutout: 40,
                                          
                        }]
                        }; 
        
        
                        const config = 
                        {
        
                            type: 'doughnut',
                            data: data,
                            options:{
                            maintainAspectRatio: false  
                            }
                        };
        
                                grafica = new Chart(elemento, config);
                                           
                                graficaActivada = true;
                                document.getElementById("citas_totalesLine").style.cssText = "border: none; color: whitesmoke;"; 
                                document.getElementById("citas_totalesBar").style.cssText = "border: none; color: whitesmoke;";
                                document.getElementById("citas_totalesPie").style.cssText = "border: none; color: whitesmoke;";

        }else
        {


            if(graficaActivada === true)
            {

                grafica.destroy();
                graficaActivada = false;

            }

            activado3 = false;

            document.getElementById("citas_totalesDoughnut").style.cssText = "border: none; color: whitesmoke;";

        } 

    }else if(botonCliqueado === 'Pie')
    {


        if(activado5 === false)
        {

        
            activado5 = true;
            elemento = document.getElementById("citasPendientes");
            elemento.innerHTML = "Citas pendientes para este mes: " + cantidadDeCitasPendientes;
            

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
                    label: 'Citas pendientes de este mes ' + mesActual,
                    backgroundColor: 'red',
                    borderColor: 'red',
                    data: cantidadDeCitasParaElDía,
                    fill: {target: 'origin', above: 'rgba(241, 70, 70, 0.479)', below: 'rgba(241, 70, 70, 0.479)'},
                    hoverBackgroundColor: 'whitesmoke'
                }]
                };                



                const config2 = 
                {

                    type: 'line',
                    data: data2,
                    options: {}
                    
                };


                 grafica2 = new Chart(elemento, config2);
                
       

        }else
        {


            if(graficaActivada === true)
            {

                grafica.destroy();
                graficaActivada = false;

            }

            activado4 = false;

            document.getElementById("citas_totalesPie").style.cssText = "border: none; color: whitesmoke;";

        } 

       



    }  

    return graficaActivada;
}






                

                    //window.location.href = "administracion.html";
                             



  








