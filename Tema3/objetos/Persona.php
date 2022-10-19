<?php class Persona
{
    private $nombre;
    private $edad;
    private $ci;
    private $sexo;
    private $peso;
    private $altura;
    public function __construct($nombre, $edad, $ci, $sexo, $peso, $altura)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ci = $ci;
        $this->sexo = $sexo;
        $this->peso = $peso;
        $this->altura = $altura;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getEdad()
    {
        return $this->edad;
    }
    public function getCi()
    {
        return $this->ci;
    }
    public function getSexo()
    {
        return $this->sexo;
    }
    public function getPeso()
    {
        return $this->peso;
    }
}
