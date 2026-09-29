<?php
class Vehiculo{
    private $matricula;
    private $marca;
    private $modelo;
    private $propietario;

    public function __construct($matricula, $marca, $modelo, $propietario){
        $this->matricula = $matricula;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->propietario = $propietario;
        
    }
    
    

    /**
     * Get the value of matricula
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     */
    public function setMatricula($matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of propietario
     */
    public function getPropietario()
    {
        return $this->propietario;
    }

    /**
     * Set the value of propietario
     */
    public function setPropietario($propietario): self
    {
        $this->propietario = $propietario;

        return $this;
    }

    public function mostrarInfo(){
        echo "Matricula del vehiculo " . $this->matricula . " ,marca " . $this->marca . " ,modelo " . $this->modelo . " y su propietario es: " . $this->propietario;
    }
}
   
    

   

?>