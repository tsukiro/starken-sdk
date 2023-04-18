<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tipoEntrega StructType
 * @subpackage Structs
 */
class TipoEntrega extends AbstractStructBase
{
    /**
     * The codigoTipoEntrega
     * @var int|null
     */
    protected ?int $codigoTipoEntrega = null;
    /**
     * The descripcionTipoEntrega
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $descripcionTipoEntrega = null;
    /**
     * Constructor method for tipoEntrega
     * @uses TipoEntrega::setCodigoTipoEntrega()
     * @uses TipoEntrega::setDescripcionTipoEntrega()
     * @param int $codigoTipoEntrega
     * @param string $descripcionTipoEntrega
     */
    public function __construct(?int $codigoTipoEntrega = null, ?string $descripcionTipoEntrega = null)
    {
        $this
            ->setCodigoTipoEntrega($codigoTipoEntrega)
            ->setDescripcionTipoEntrega($descripcionTipoEntrega);
    }
    /**
     * Get codigoTipoEntrega value
     * @return int|null
     */
    public function getCodigoTipoEntrega(): ?int
    {
        return $this->codigoTipoEntrega;
    }
    /**
     * Set codigoTipoEntrega value
     * @param int $codigoTipoEntrega
     * @return \StructType\TipoEntrega
     */
    public function setCodigoTipoEntrega(?int $codigoTipoEntrega = null): self
    {
        // validation for constraint: int
        if (!is_null($codigoTipoEntrega) && !(is_int($codigoTipoEntrega) || ctype_digit($codigoTipoEntrega))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codigoTipoEntrega, true), gettype($codigoTipoEntrega)), __LINE__);
        }
        $this->codigoTipoEntrega = $codigoTipoEntrega;
        
        return $this;
    }
    /**
     * Get descripcionTipoEntrega value
     * @return string|null
     */
    public function getDescripcionTipoEntrega(): ?string
    {
        return $this->descripcionTipoEntrega;
    }
    /**
     * Set descripcionTipoEntrega value
     * @param string $descripcionTipoEntrega
     * @return \StructType\TipoEntrega
     */
    public function setDescripcionTipoEntrega(?string $descripcionTipoEntrega = null): self
    {
        // validation for constraint: string
        if (!is_null($descripcionTipoEntrega) && !is_string($descripcionTipoEntrega)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcionTipoEntrega, true), gettype($descripcionTipoEntrega)), __LINE__);
        }
        $this->descripcionTipoEntrega = $descripcionTipoEntrega;
        
        return $this;
    }
}
