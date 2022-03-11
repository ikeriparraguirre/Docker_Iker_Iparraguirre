<?php
    class Empresa{
        private $empleados = array();
        private $suma = 0;
        private $imprimir = "";
        public function addEmpleado(Empleado $e){
            $this->empleados[] = $e;
        }
        public function listarEmpleados(){
            $this->imprimir .= "<pre>";
            foreach ($this->empleados as $Valor) {
                $this->imprimir .= $Valor->mostrar();
            }
            $this->imprimir .= "</pre>";
            return $this->imprimir;
        }
        public function sumaIngresos(){
            foreach ($this->empleados as $Valor) {
                $this->suma += $Valor->ingresos();
            }
            return $this->suma;
        }

    }
    
?>