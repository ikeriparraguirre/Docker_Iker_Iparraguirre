<?php
    class EmpleadoPlantilla extends Empleado{
        private $sueldo;
        private $dietas;
        function __construct($queNombre, $queApellido, $queNumeroSeguridadSocial, $queSueldo, $queDietas)
        {
            $this->sueldo = $queSueldo;
            $this->dietas = $queDietas;
            Empleado::__construct($queNombre, $queApellido, $queNumeroSeguridadSocial);
        }
        


        /**
         * Get the value of sueldo
         */ 
        public function getSueldo()
        {
                return $this->sueldo;
        }

        /**
         * Set the value of sueldo
         *
         * @return  self
         */ 
        public function setSueldo($sueldo)
        {
                $this->sueldo = $sueldo;

                return $this;
        }

        /**
         * Get the value of dietas
         */ 
        public function getDietas()
        {
                return $this->dietas;
        }

        /**
         * Set the value of dietas
         *
         * @return  self
         */ 
        public function setDietas($dietas)
        {
                $this->dietas = $dietas;

                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of apellido
         */ 
        public function getApellido()
        {
                return $this->apellido;
        }

        /**
         * Set the value of apellido
         *
         * @return  self
         */ 
        public function setApellido($apellido)
        {
                $this->apellido = $apellido;

                return $this;
        }

        /**
         * Get the value of numeroSeguridadSocial
         */ 
        public function getNumeroSeguridadSocial()
        {
                return $this->numeroSeguridadSocial;
        }

        /**
         * Set the value of numeroSeguridadSocial
         *
         * @return  self
         */ 
        public function setNumeroSeguridadSocial($numeroSeguridadSocial)
        {
                $this->numeroSeguridadSocial = $numeroSeguridadSocial;

                return $this;
        }

        public function mostrar()
        {
            return Empleado::mostrar() . "<p>El sueldo: " . $this->sueldo . "</p>" . "<p>Las dietas: " . $this->dietas . "<p>Los ingresos: " . $this->ingresos() . "</p>";
        }

        public function ingresos()
        {
            return $this->sueldo + $this->dietas;
        }
    }
?>