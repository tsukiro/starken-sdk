<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Listar ServiceType
 * @subpackage Services
 */
class Listar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named listarCiudadesDestino
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ListarCiudadesDestino $parameters
     * @return \StructType\ListarCiudadesDestinoResponse|bool
     */
    public function listarCiudadesDestino(\StructType\ListarCiudadesDestino $parameters)
    {
        try {
            $this->setResult($resultListarCiudadesDestino = $this->getSoapClient()->__soapCall('listarCiudadesDestino', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultListarCiudadesDestino;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listarCiudadesOrigen
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ListarCiudadesOrigen $parameters
     * @return \StructType\ListarCiudadesOrigenResponse|bool
     */
    public function listarCiudadesOrigen(\StructType\ListarCiudadesOrigen $parameters)
    {
        try {
            $this->setResult($resultListarCiudadesOrigen = $this->getSoapClient()->__soapCall('listarCiudadesOrigen', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultListarCiudadesOrigen;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ListarCiudadesDestinoResponse|\StructType\ListarCiudadesOrigenResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
