<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for consultarCoberturaBultoSobreResponse StructType
 * Meta information extracted from the WSDL
 * - type: ns0:consultarCoberturaBultoSobreResponse
 * @subpackage Structs
 */
class ConsultarCoberturaBultoSobreResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ConsultarCoberturaRespuesta|null
     */
    protected ?\StructType\ConsultarCoberturaRespuesta $return = null;
    /**
     * Constructor method for consultarCoberturaBultoSobreResponse
     * @uses ConsultarCoberturaBultoSobreResponse::setReturn()
     * @param \StructType\ConsultarCoberturaRespuesta $return
     */
    public function __construct(?\StructType\ConsultarCoberturaRespuesta $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ConsultarCoberturaRespuesta|null
     */
    public function getReturn(): ?\StructType\ConsultarCoberturaRespuesta
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ConsultarCoberturaRespuesta $return
     * @return \StructType\ConsultarCoberturaBultoSobreResponse
     */
    public function setReturn(?\StructType\ConsultarCoberturaRespuesta $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
