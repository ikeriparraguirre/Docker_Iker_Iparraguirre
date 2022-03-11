<?php
    class PruebaPolimorf{
        static function calcular(Empleado $e){
            if($e instanceof Empleado){
                return $e->ingresos();
            }
        }
    }
?>