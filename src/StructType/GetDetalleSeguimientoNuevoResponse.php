<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getDetalleSeguimientoNuevoResponse StructType
 * Meta information extracted from the WSDL
 * - type: ns0:getDetalleSeguimientoNuevoResponse
 * @subpackage Structs
 */
class GetDetalleSeguimientoNuevoResponse extends AbstractStructBase
{
    /**
     * The detalleSeguimientoNuevo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\DetalleSeguimientoNuevo|null
     */
    protected ?\StructType\DetalleSeguimientoNuevo $detalleSeguimientoNuevo = null;
    /**
     * Constructor method for getDetalleSeguimientoNuevoResponse
     * @uses GetDetalleSeguimientoNuevoResponse::setDetalleSeguimientoNuevo()
     * @param \StructType\DetalleSeguimientoNuevo $detalleSeguimientoNuevo
     */
    public function __construct(?\StructType\DetalleSeguimientoNuevo $detalleSeguimientoNuevo = null)
    {
        $this
            ->setDetalleSeguimientoNuevo($detalleSeguimientoNuevo);
    }
    /**
     * Get detalleSeguimientoNuevo value
     * @return \StructType\DetalleSeguimientoNuevo|null
     */
    public function getDetalleSeguimientoNuevo(): ?\StructType\DetalleSeguimientoNuevo
    {
        return $this->detalleSeguimientoNuevo;
    }
    /**
     * Set detalleSeguimientoNuevo value
     * @param \StructType\DetalleSeguimientoNuevo $detalleSeguimientoNuevo
     * @return \StructType\GetDetalleSeguimientoNuevoResponse
     */
    public function setDetalleSeguimientoNuevo(?\StructType\DetalleSeguimientoNuevo $detalleSeguimientoNuevo = null): self
    {
        $this->detalleSeguimientoNuevo = $detalleSeguimientoNuevo;
        
        return $this;
    }
}
