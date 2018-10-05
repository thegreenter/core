<?php
/**
 * Created by PhpStorm.
 * User: Giansalex
 * Date: 15/07/2017
 * Time: 21:05.
 */

namespace Greenter\Model\Sale;
use Greenter\Model\Client\Client;

/**
 * Invoice 2.1.
 *
 * Class Invoice.
 */
class Invoice extends BaseSale
{
    /**
     * Tipo operacion (Catálogo 51).
     *
     * @var string
     */
    private $tipoOperacion;

    /**
     * @var \DateTime
     */
    private $fecVencimiento;

    /**
     * @var float
     */
    private $mtoOperGratuitas;

    /**
     * @var float
     */
    private $sumDsctoGlobal;

    /**
     * @var float
     */
    private $mtoDescuentos;

    /**
     * @var float
     */
    private $totalAnticipos;

    /**
     * @var SalePerception
     */
    private $perception;

    /**
     * Utilizado cuando se trata de una Factura Guia.
     *
     * @var EmbededDespatch
     */
    private $guiaEmbebida;

    /**
     * @var Client
     */
    private $seller;
    /**
     * @var Client
     */
    private $buyer;

    /**
     * @return string
     */
    public function getTipoOperacion()
    {
        return $this->tipoOperacion;
    }

    /**
     * @param string $tipoOperacion
     *
     * @return Invoice
     */
    public function setTipoOperacion($tipoOperacion)
    {
        $this->tipoOperacion = $tipoOperacion;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFecVencimiento()
    {
        return $this->fecVencimiento;
    }

    /**
     * @param \DateTime $fecVencimiento
     *
     * @return Invoice
     */
    public function setFecVencimiento($fecVencimiento)
    {
        $this->fecVencimiento = $fecVencimiento;

        return $this;
    }

    /**
     * @return float
     */
    public function getSumDsctoGlobal()
    {
        return $this->sumDsctoGlobal;
    }

    /**
     * @param float $sumDsctoGlobal
     *
     * @return Invoice
     */
    public function setSumDsctoGlobal($sumDsctoGlobal)
    {
        $this->sumDsctoGlobal = $sumDsctoGlobal;

        return $this;
    }

    /**
     * @return float
     */
    public function getMtoDescuentos()
    {
        return $this->mtoDescuentos;
    }

    /**
     * @param float $mtoDescuentos
     *
     * @return Invoice
     */
    public function setMtoDescuentos($mtoDescuentos)
    {
        $this->mtoDescuentos = $mtoDescuentos;

        return $this;
    }

    /**
     * @return float
     */
    public function getMtoOperGratuitas()
    {
        return $this->mtoOperGratuitas;
    }

    /**
     * @param float $mtoOperGratuitas
     *
     * @return Invoice
     */
    public function setMtoOperGratuitas($mtoOperGratuitas)
    {
        $this->mtoOperGratuitas = $mtoOperGratuitas;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalAnticipos()
    {
        return $this->totalAnticipos;
    }

    /**
     * @param mixed $totalAnticipos
     *
     * @return Invoice
     */
    public function setTotalAnticipos($totalAnticipos)
    {
        $this->totalAnticipos = $totalAnticipos;

        return $this;
    }

    /**
     * @return SalePerception
     */
    public function getPerception()
    {
        return $this->perception;
    }

    /**
     * @param SalePerception $perception
     *
     * @return Invoice
     */
    public function setPerception($perception)
    {
        $this->perception = $perception;

        return $this;
    }

    /**
     * @return EmbededDespatch
     */
    public function getGuiaEmbebida()
    {
        return $this->guiaEmbebida;
    }

    /**
     * @param EmbededDespatch $guiaEmbebida
     *
     * @return Invoice
     */
    public function setGuiaEmbebida($guiaEmbebida)
    {
        $this->guiaEmbebida = $guiaEmbebida;

        return $this;
    }

    /**
     * @return Client
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param Client $seller
     * @return Invoice
     */
    public function setSeller($seller)
    {
        $this->seller = $seller;
        return $this;
    }

    /**
     * @return Client
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * Datos del comprador.
     *
     * @param Client $buyer
     * @return Invoice
     */
    public function setBuyer($buyer)
    {
        $this->buyer = $buyer;
        return $this;
    }
}
