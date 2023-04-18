<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDetalleSeguimientoResponse StructType
 * Meta information extracted from the WSDL
 * - type: ns0:getDetalleSeguimientoResponse
 * @subpackage Structs
 */
class GetDetalleSeguimientoResponse extends AbstractStructBase
{
    /**
     * The detalleSeguimiento
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\DetalleSeguimiento|null
     */
    protected ?\StructType\DetalleSeguimiento $detalleSeguimiento = null;
    /**
     * Constructor method for getDetalleSeguimientoResponse
     * @uses GetDetalleSeguimientoResponse::setDetalleSeguimiento()
     * @param \StructType\DetalleSeguimiento $detalleSeguimiento
     */
    public function __construct(?\StructType\DetalleSeguimiento $detalleSeguimiento = null)
    {
        $this
            ->setDetalleSeguimiento($detalleSeguimiento);
    }
    /**
     * Get detalleSeguimiento value
     * @return \StructType\DetalleSeguimiento|null
     */
    public function getDetalleSeguimiento(): ?\StructType\DetalleSeguimiento
    {
        return $this->detalleSeguimiento;
    }
    /**
     * Set detalleSeguimiento value
     * @param \StructType\DetalleSeguimiento $detalleSeguimiento
     * @return \StructType\GetDetalleSeguimientoResponse
     */
    public function setDetalleSeguimiento(?\StructType\DetalleSeguimiento $detalleSeguimiento = null): self
    {
        $this->detalleSeguimiento = $detalleSeguimiento;
        
        return $this;
    }
}
