<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDetalleSeguimiento StructType
 * Meta information extracted from the WSDL
 * - type: ns0:getDetalleSeguimiento
 * @subpackage Structs
 */
class GetDetalleSeguimiento extends AbstractStructBase
{
    /**
     * The ordenFlete
     * @var int|null
     */
    protected ?int $ordenFlete = null;
    /**
     * Constructor method for getDetalleSeguimiento
     * @uses GetDetalleSeguimiento::setOrdenFlete()
     * @param int $ordenFlete
     */
    public function __construct(?int $ordenFlete = null)
    {
        $this
            ->setOrdenFlete($ordenFlete);
    }
    /**
     * Get ordenFlete value
     * @return int|null
     */
    public function getOrdenFlete(): ?int
    {
        return $this->ordenFlete;
    }
    /**
     * Set ordenFlete value
     * @param int $ordenFlete
     * @return \StructType\GetDetalleSeguimiento
     */
    public function setOrdenFlete(?int $ordenFlete = null): self
    {
        // validation for constraint: int
        if (!is_null($ordenFlete) && !(is_int($ordenFlete) || ctype_digit($ordenFlete))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ordenFlete, true), gettype($ordenFlete)), __LINE__);
        }
        $this->ordenFlete = $ordenFlete;
        
        return $this;
    }
}
