<?php 
    require_once 'model/calculadora.php';

        function calcularPrestamo(){
            try {
                //Obtenemos los valores que capturamos en el formulario:
                $monto = isset($_POST['monto']) ? floatval($_POST['monto']) : 0;
                $tasa = isset($_POST['tasa']) ? floatval($_POST['tasa']) : 0;
                $plazo = isset($_POST['plazo']) ? intval($_POST['plazo']) : 0;

                //Calcular la cuota mensual:
                $pagoMensual = calcularPagoMensual($monto, $tasa, $plazo);

                //Mostramos los resultados en la vista:
                include 'views/result.php';

            } catch (Exception $e) {
                //Manejo de errores:
                include 'views/error.php';
            }
        }
    

?>