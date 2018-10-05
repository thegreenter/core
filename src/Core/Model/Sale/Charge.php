<?php
/**
 * Created by PhpStorm.
 * User: Giansalex
 * Date: 04/10/2018
 * Time: 23:03
 */

namespace Greenter\Model\Sale;

/**
 * Class Charge.
 */
class Charge
{
    /**
     * @var bool
     */
    private $indicador;
    /**
     * @var string
     */
    private $codTipo;
    /**
     * @var string
     */
    private $porcentaje;
    /**
     * @var float
     */
    private $monto;
    /**
     * @var float
     */
    private $montoBase;

    /**
     * @return bool
     */
    public function isIndicador()
    {
        return $this->indicador;
    }

    /**
     * @param bool $indicador
     * @return Charge
     */
    public function setIndicador($indicador)
    {
        $this->indicador = $indicador;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodTipo()
    {
        return $this->codTipo;
    }

    /**
     * @param string $codTipo
     * @return Charge
     */
    public function setCodTipo($codTipo)
    {
        $this->codTipo = $codTipo;
        return $this;
    }

    /**
     * @return string
     */
    public function getPorcentaje()
    {
        return $this->porcentaje;
    }

    /**
     * @param string $porcentaje
     * @return Charge
     */
    public function setPorcentaje($porcentaje)
    {
        $this->porcentaje = $porcentaje;
        return $this;
    }

    /**
     * @return float
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * @param float $monto
     * @return Charge
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;
        return $this;
    }

    /**
     * @return float
     */
    public function getMontoBase()
    {
        return $this->montoBase;
    }

    /**
     * @param float $montoBase
     * @return Charge
     */
    public function setMontoBase($montoBase)
    {
        $this->montoBase = $montoBase;
        return $this;
    }
}