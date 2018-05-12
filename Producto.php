<?php

class Producto {
    
    // Variables internas
    
    private $nombre;
    private $cantidad;
             
    
    /**
     * @return mixed
     */
    public function getNombre ()
    {
        return $this->nombre;
    }

    /**
     * @return mixed
     */
    public function getCantidad ()
    {
        return $this->cantidad;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre ($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @param mixed $cantidad
     */
    public function setCantidad ($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    
    
    
    
    
    
    
    
    
}
