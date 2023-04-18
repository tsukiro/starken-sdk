<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEstadoReclamoResponse StructType
 * Meta information extracted from the WSDL
 * - type: ns0:getEstadoReclamoResponse
 * @subpackage Structs
 */
class GetEstadoReclamoResponse extends AbstractStructBase
{
    /**
     * The estadoReclamo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\RespEstadoReclamoVO|null
     */
    protected ?\StructType\RespEstadoReclamoVO $estadoReclamo = null;
    /**
     * Constructor method for getEstadoReclamoResponse
     * @uses GetEstadoReclamoResponse::setEstadoReclamo()
     * @param \StructType\RespEstadoReclamoVO $estadoReclamo
     */
    public function __construct(?\StructType\RespEstadoReclamoVO $estadoReclamo = null)
    {
        $this
            ->setEstadoReclamo($estadoReclamo);
    }
    /**
     * Get estadoReclamo value
     * @return \StructType\RespEstadoReclamoVO|null
     */
    public function getEstadoReclamo(): ?\StructType\RespEstadoReclamoVO
    {
        return $this->estadoReclamo;
    }
    /**
     * Set estadoReclamo value
     * @param \StructType\RespEstadoReclamoVO $estadoReclamo
     * @return \StructType\GetEstadoReclamoResponse
     */
    public function setEstadoReclamo(?\StructType\RespEstadoReclamoVO $estadoReclamo = null): self
    {
        $this->estadoReclamo = $estadoReclamo;
        
        return $this;
    }
}
