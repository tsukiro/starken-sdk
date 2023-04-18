<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tipoServicio StructType
 * @subpackage Structs
 */
class TipoServicio extends AbstractStructBase
{
    /**
     * The codigoTipoServicio
     * @var int|null
     */
    protected ?int $codigoTipoServicio = null;
    /**
     * The descripcionTipoServicio
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $descripcionTipoServicio = null;
    /**
     * Constructor method for tipoServicio
     * @uses TipoServicio::setCodigoTipoServicio()
     * @uses TipoServicio::setDescripcionTipoServicio()
     * @param int $codigoTipoServicio
     * @param string $descripcionTipoServicio
     */
    public function __construct(?int $codigoTipoServicio = null, ?string $descripcionTipoServicio = null)
    {
        $this
            ->setCodigoTipoServicio($codigoTipoServicio)
            ->setDescripcionTipoServicio($descripcionTipoServicio);
    }
    /**
     * Get codigoTipoServicio value
     * @return int|null
     */
    public function getCodigoTipoServicio(): ?int
    {
        return $this->codigoTipoServicio;
    }
    /**
     * Set codigoTipoServicio value
     * @param int $codigoTipoServicio
     * @return \StructType\TipoServicio
     */
    public function setCodigoTipoServicio(?int $codigoTipoServicio = null): self
    {
        // validation for constraint: int
        if (!is_null($codigoTipoServicio) && !(is_int($codigoTipoServicio) || ctype_digit($codigoTipoServicio))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codigoTipoServicio, true), gettype($codigoTipoServicio)), __LINE__);
        }
        $this->codigoTipoServicio = $codigoTipoServicio;
        
        return $this;
    }
    /**
     * Get descripcionTipoServicio value
     * @return string|null
     */
    public function getDescripcionTipoServicio(): ?string
    {
        return $this->descripcionTipoServicio;
    }
    /**
     * Set descripcionTipoServicio value
     * @param string $descripcionTipoServicio
     * @return \StructType\TipoServicio
     */
    public function setDescripcionTipoServicio(?string $descripcionTipoServicio = null): self
    {
        // validation for constraint: string
        if (!is_null($descripcionTipoServicio) && !is_string($descripcionTipoServicio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcionTipoServicio, true), gettype($descripcionTipoServicio)), __LINE__);
        }
        $this->descripcionTipoServicio = $descripcionTipoServicio;
        
        return $this;
    }
}
