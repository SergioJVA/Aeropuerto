<?php
    class Pasajero{
        private int $IdPasajero;
        private string $Nombre;
        private string $Apellidos;
        private int $Edad;
        private int $IdVuelo;

        
        

        /**
         * Get the value of IdPasajero
         */
        public function getIdPasajero(): int
        {
                return $this->IdPasajero;
        }

        /**
         * Set the value of IdPasajero
         */
        public function setIdPasajero(int $IdPasajero)
        {
                $this->IdPasajero = $IdPasajero;

        }

        /**
         * Get the value of Nombre
         */
        public function getNombre(): string
        {
                return $this->Nombre;
        }

        /**
         * Set the value of Nombre
         */
        public function setNombre(string $Nombre)
        {
                $this->Nombre = $Nombre;

        }

        /**
         * Get the value of Apellidos
         */
        public function getApellidos(): string
        {
                return $this->Apellidos;
        }

        /**
         * Set the value of Apellidos
         */
        public function setApellidos(string $Apellidos)
        {
                $this->Apellidos = $Apellidos;


        }

        /**
         * Get the value of Edad
         */
        public function getEdad(): int
        {
                return $this->Edad;
        }

        /**
         * Set the value of Edad
         */
        public function setEdad(int $Edad)
        {
                $this->Edad = $Edad;

        }

        /**
         * Get the value of IdVuelo
         */
        public function getIdVuelo(): int
        {
                return $this->IdVuelo;
        }

        /**
         * Set the value of IdVuelo
         */
        public function setIdVuelo(int $IdVuelo)
        {
                $this->IdVuelo = $IdVuelo;
        }
    }



?>