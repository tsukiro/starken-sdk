<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Consultar ServiceType
 * @subpackage Services
 */
class Consultar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named consultarCoberturaBultoSobre
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ConsultarCoberturaBultoSobre $parameters
     * @return \StructType\ConsultarCoberturaBultoSobreResponse|bool
     */
    public function consultarCoberturaBultoSobre(\StructType\ConsultarCoberturaBultoSobre $parameters)
    {
        try {
            $this->setResult($resultConsultarCoberturaBultoSobre = $this->getSoapClient()->__soapCall('consultarCoberturaBultoSobre', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultConsultarCoberturaBultoSobre;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named consultarLinkImagen
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ConsultarLinkImagen $parameters
     * @return \StructType\ConsultarLinkImagenResponse|bool
     */
    public function consultarLinkImagen(\StructType\ConsultarLinkImagen $parameters)
    {
        try {
            $this->setResult($resultConsultarLinkImagen = $this->getSoapClient()->__soapCall('consultarLinkImagen', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultConsultarLinkImagen;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named consultarCobertura
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ConsultarCobertura $parameters
     * @return \StructType\ConsultarCoberturaResponse|bool
     */
    public function consultarCobertura(\StructType\ConsultarCobertura $parameters)
    {
        try {
            $this->setResult($resultConsultarCobertura = $this->getSoapClient()->__soapCall('consultarCobertura', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultConsultarCobertura;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named consultarTarifas
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ConsultarTarifas $parameters
     * @return \StructType\ConsultarTarifasResponse|bool
     */
    public function consultarTarifas(\StructType\ConsultarTarifas $parameters)
    {
        try {
            $this->setResult($resultConsultarTarifas = $this->getSoapClient()->__soapCall('consultarTarifas', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultConsultarTarifas;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ConsultarCoberturaBultoSobreResponse|\StructType\ConsultarCoberturaResponse|\StructType\ConsultarLinkImagenResponse|\StructType\ConsultarTarifasResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
