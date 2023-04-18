<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for listarCiudadesOrigenResponse StructType
 * Meta information extracted from the WSDL
 * - type: ns0:listarCiudadesOrigenResponse
 * @subpackage Structs
 */
class ListarCiudadesOrigenResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ListarCiudadesOrigenRespuesta|null
     */
    protected ?\StructType\ListarCiudadesOrigenRespuesta $return = null;
    /**
     * Constructor method for listarCiudadesOrigenResponse
     * @uses ListarCiudadesOrigenResponse::setReturn()
     * @param \StructType\ListarCiudadesOrigenRespuesta $return
     */
    public function __construct(?\StructType\ListarCiudadesOrigenRespuesta $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ListarCiudadesOrigenRespuesta|null
     */
    public function getReturn(): ?\StructType\ListarCiudadesOrigenRespuesta
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ListarCiudadesOrigenRespuesta $return
     * @return \StructType\ListarCiudadesOrigenResponse
     */
    public function setReturn(?\StructType\ListarCiudadesOrigenRespuesta $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
