<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for consultarTarifasResponse StructType
 * Meta information extracted from the WSDL
 * - type: ns0:consultarTarifasResponse
 * @subpackage Structs
 */
class ConsultarTarifasResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ConsultarCoberturaRespuesta|null
     */
    protected ?\StructType\ConsultarCoberturaRespuesta $return = null;
    /**
     * Constructor method for consultarTarifasResponse
     * @uses ConsultarTarifasResponse::setReturn()
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
     * @return \StructType\ConsultarTarifasResponse
     */
    public function setReturn(?\StructType\ConsultarCoberturaRespuesta $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
