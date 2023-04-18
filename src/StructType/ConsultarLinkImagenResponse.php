<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for consultarLinkImagenResponse StructType
 * Meta information extracted from the WSDL
 * - type: ns0:consultarLinkImagenResponse
 * @subpackage Structs
 */
class ConsultarLinkImagenResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\RespuestaConsultarImagen|null
     */
    protected ?\StructType\RespuestaConsultarImagen $return = null;
    /**
     * Constructor method for consultarLinkImagenResponse
     * @uses ConsultarLinkImagenResponse::setReturn()
     * @param \StructType\RespuestaConsultarImagen $return
     */
    public function __construct(?\StructType\RespuestaConsultarImagen $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\RespuestaConsultarImagen|null
     */
    public function getReturn(): ?\StructType\RespuestaConsultarImagen
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\RespuestaConsultarImagen $return
     * @return \StructType\ConsultarLinkImagenResponse
     */
    public function setReturn(?\StructType\RespuestaConsultarImagen $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
