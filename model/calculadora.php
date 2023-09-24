<?php 

    function calcularPagoMensual($monto, $tasa, $plazo){
        //Validacion de Entradas:
        if($monto <= 0 || $tasa <= 0 || $plazo <= 0){
            throw new Exception("Los valores deben ser mayores a 0.");
        }

        //Tasa de interés mensual (tasa anual dividida por 12 y dividida por 100 para convertirla en decimal).:
        $tasaInteresMensual = ($tasa / 12) / 100;

        //Calculamos la cuota mensual (Cuota mensual (C) = (P * r * (1 + r)^n) / ((1 + r)^n - 1)):
        /* 
            Donde:
            C: Cuota mensual.
            P: Monto del préstamo.
            r: Tasa de interés mensual (tasa anual dividida por 12 y dividida por 100 para convertirla en
            decimal).
            n: Número de cuotas (plazo en meses).
        
        */

        $cuotaMensual = ($monto * $tasaInteresMensual * pow(1 + $tasaInteresMensual, $plazo)) / 
                        (pow(1 + $tasaInteresMensual, $plazo) - 1);
        return $cuotaMensual;
    }


?>