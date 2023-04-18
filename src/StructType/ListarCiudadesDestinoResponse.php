<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for listarCiudadesDestinoResponse StructType
 * Meta information extracted from the WSDL
 * - type: ns0:listarCiudadesDestinoResponse
 * @subpackage Structs
 */
class ListarCiudadesDestinoResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ListarCiudadesDestinoRespuesta|null
     */
    protected ?\StructType\ListarCiudadesDestinoRespuesta $return = null;
    /**
     * Constructor method for listarCiudadesDestinoResponse
     * @uses ListarCiudadesDestinoResponse::setReturn()
     * @param \StructType\ListarCiudadesDestinoRespuesta $return
     */
    public function __construct(?\StructType\ListarCiudadesDestinoRespuesta $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ListarCiudadesDestinoRespuesta|null
     */
    public function getReturn(): ?\StructType\ListarCiudadesDestinoRespuesta
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ListarCiudadesDestinoRespuesta $return
     * @return \StructType\ListarCiudadesDestinoResponse
     */
    public function setReturn(?\StructType\ListarCiudadesDestinoRespuesta $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
