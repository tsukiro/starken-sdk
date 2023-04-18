<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resumenTarifa StructType
 * @subpackage Structs
 */
class ResumenTarifa extends AbstractStructBase
{
    /**
     * The costoTotal
     * @var float|null
     */
    protected ?float $costoTotal = null;
    /**
     * The diasEntrega
     * @var int|null
     */
    protected ?int $diasEntrega = null;
    /**
     * The tipoEntrega
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TipoEntrega|null
     */
    protected ?\StructType\TipoEntrega $tipoEntrega = null;
    /**
     * The tipoServicio
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\TipoServicio|null
     */
    protected ?\StructType\TipoServicio $tipoServicio = null;
    /**
     * Constructor method for resumenTarifa
     * @uses ResumenTarifa::setCostoTotal()
     * @uses ResumenTarifa::setDiasEntrega()
     * @uses ResumenTarifa::setTipoEntrega()
     * @uses ResumenTarifa::setTipoServicio()
     * @param float $costoTotal
     * @param int $diasEntrega
     * @param \StructType\TipoEntrega $tipoEntrega
     * @param \StructType\TipoServicio $tipoServicio
     */
    public function __construct(?float $costoTotal = null, ?int $diasEntrega = null, ?\StructType\TipoEntrega $tipoEntrega = null, ?\StructType\TipoServicio $tipoServicio = null)
    {
        $this
            ->setCostoTotal($costoTotal)
            ->setDiasEntrega($diasEntrega)
            ->setTipoEntrega($tipoEntrega)
            ->setTipoServicio($tipoServicio);
    }
    /**
     * Get costoTotal value
     * @return float|null
     */
    public function getCostoTotal(): ?float
    {
        return $this->costoTotal;
    }
    /**
     * Set costoTotal value
     * @param float $costoTotal
     * @return \StructType\ResumenTarifa
     */
    public function setCostoTotal(?float $costoTotal = null): self
    {
        // validation for constraint: float
        if (!is_null($costoTotal) && !(is_float($costoTotal) || is_numeric($costoTotal))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($costoTotal, true), gettype($costoTotal)), __LINE__);
        }
        $this->costoTotal = $costoTotal;
        
        return $this;
    }
    /**
     * Get diasEntrega value
     * @return int|null
     */
    public function getDiasEntrega(): ?int
    {
        return $this->diasEntrega;
    }
    /**
     * Set diasEntrega value
     * @param int $diasEntrega
     * @return \StructType\ResumenTarifa
     */
    public function setDiasEntrega(?int $diasEntrega = null): self
    {
        // validation for constraint: int
        if (!is_null($diasEntrega) && !(is_int($diasEntrega) || ctype_digit($diasEntrega))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($diasEntrega, true), gettype($diasEntrega)), __LINE__);
        }
        $this->diasEntrega = $diasEntrega;
        
        return $this;
    }
    /**
     * Get tipoEntrega value
     * @return \StructType\TipoEntrega|null
     */
    public function getTipoEntrega(): ?\StructType\TipoEntrega
    {
        return $this->tipoEntrega;
    }
    /**
     * Set tipoEntrega value
     * @param \StructType\TipoEntrega $tipoEntrega
     * @return \StructType\ResumenTarifa
     */
    public function setTipoEntrega(?\StructType\TipoEntrega $tipoEntrega = null): self
    {
        $this->tipoEntrega = $tipoEntrega;
        
        return $this;
    }
    /**
     * Get tipoServicio value
     * @return \StructType\TipoServicio|null
     */
    public function getTipoServicio(): ?\StructType\TipoServicio
    {
        return $this->tipoServicio;
    }
    /**
     * Set tipoServicio value
     * @param \StructType\TipoServicio $tipoServicio
     * @return \StructType\ResumenTarifa
     */
    public function setTipoServicio(?\StructType\TipoServicio $tipoServicio = null): self
    {
        $this->tipoServicio = $tipoServicio;
        
        return $this;
    }
}
