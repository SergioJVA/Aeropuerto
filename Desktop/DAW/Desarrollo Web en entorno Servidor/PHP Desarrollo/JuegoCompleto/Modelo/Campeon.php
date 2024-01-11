<?php

    class Campeon{
        private int $Id;
        private string $Nombre;
        private string $Rol;
        private string $Dificultad;
        private string $Descripcion;

        
        public function getId(): int
        {
                return $this->Id;
        }

       
        public function setId(int $Id)
        {
                $this->Id = $Id;
        }

     
        public function getNombre(): string
        {
                return $this->Nombre;
        }

        
        public function setNombre(string $Nombre)
        {
                $this->Nombre = $Nombre;
        }

        
        public function getRol(): string
        {
                return $this->Rol;
        }

       
        public function setRol(string $Rol)
        {
                $this->Rol = $Rol;
        }

       
        public function getDificultad(): string
        {
                return $this->Dificultad;
        }

       
        public function setDificultad(string $Dificultad)
        {
                $this->Dificultad = $Dificultad;
        }

        
        public function getDescripcion(): string
        {
                return $this->Descripcion;
        }

        
        public function setDescripcion(string $Descripcion)
        {
                $this->Descripcion = $Descripcion;
        }
    }

?>