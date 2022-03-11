<?php
    abstract class Empleado{
        private $nombre;
        private $apellido;
        private $numeroSeguridadSocial;
        function __construct($queNombre, $queApellido, $queNumeroSeguridadSocial){
            $this->nombre = $queNombre;
            $this->apellido = $queApellido;
            $this->numeroSeguridadSocial = $queNumeroSeguridadSocial;
        }
        
        /* Getters y Setters automaticos con PHP Getters & Setters */

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

        public function mostrar(){
            return "<p>Esta empleado " . $this->nombre . " " . $this->apellido . " con el NSS: " . $this->numeroSeguridadSocial . "</p>";
        }

        abstract public function ingresos();
    }
?>
