<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for seguimientoCarga StructType
 * @subpackage Structs
 */
class SeguimientoCarga extends AbstractStructBase
{
    /**
     * The numeroOrdenFlete
     * @var int|null
     */
    protected ?int $numeroOrdenFlete = null;
    /**
     * Constructor method for seguimientoCarga
     * @uses SeguimientoCarga::setNumeroOrdenFlete()
     * @param int $numeroOrdenFlete
     */
    public function __construct(?int $numeroOrdenFlete = null)
    {
        $this
            ->setNumeroOrdenFlete($numeroOrdenFlete);
    }
    /**
     * Get numeroOrdenFlete value
     * @return int|null
     */
    public function getNumeroOrdenFlete(): ?int
    {
        return $this->numeroOrdenFlete;
    }
    /**
     * Set numeroOrdenFlete value
     * @param int $numeroOrdenFlete
     * @return \StructType\SeguimientoCarga
     */
    public function setNumeroOrdenFlete(?int $numeroOrdenFlete = null): self
    {
        // validation for constraint: int
        if (!is_null($numeroOrdenFlete) && !(is_int($numeroOrdenFlete) || ctype_digit($numeroOrdenFlete))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numeroOrdenFlete, true), gettype($numeroOrdenFlete)), __LINE__);
        }
        $this->numeroOrdenFlete = $numeroOrdenFlete;
        
        return $this;
    }
}
