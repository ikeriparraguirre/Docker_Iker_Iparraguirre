<?php
    class EmpleadoPorComision extends Empleado{
        private $horas;
        private $tarifas;
        private $base;
        function __construct($queNombre, $queApellido, $queNumeroSeguridadSocial, $queHoras, $queTarifas, $queBase){
            $this->horas = $queHoras;
            $this->tarifas = $queTarifas;
            $this->base = $queBase;
            Empleado::__construct($queNombre, $queApellido, $queNumeroSeguridadSocial);
        }

        //Accesores y mutadores creados automaticamente.
        

        /**
         * Get the value of base
         */ 
        public function getBase()
        {
                return $this->base;
        }

        /**
         * Set the value of base
         *
         * @return  self
         */ 
        public function setBase($base)
        {
                $this->base = $base;

                return $this;
        }

        /**
         * Get the value of tarifas
         */ 
        public function getTarifas()
        {
                return $this->tarifas;
        }

        /**
         * Set the value of tarifas
         *
         * @return  self
         */ 
        public function setTarifas($tarifas)
        {
                $this->tarifas = $tarifas;

                return $this;
        }

        /**
         * Get the value of horas
         */ 
        public function getHoras()
        {
                return $this->horas;
        }

        /**
         * Set the value of horas
         *
         * @return  self
         */ 
        public function setHoras($horas)
        {
                $this->horas = $horas;

                return $this;
        }

        function mostrar(){
            return Empleado::mostrar() . "<p>Cantida de horas: " . $this->horas . "</p>" . "<p>Las tarifas: " . $this->tarifas . "</p>" . "<p>La base: " . $this->base . "<p>Los ingresos: " . $this->ingresos() . "</p>";
        }
        
        function ingresos(){
            return ($this->base + $this->horas) * $this->tarifas;
        }
    }
?>