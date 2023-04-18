<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getDetalleSeguimientoNuevo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDetalleSeguimientoNuevo $parameters
     * @return \StructType\GetDetalleSeguimientoNuevoResponse|bool
     */
    public function getDetalleSeguimientoNuevo(\StructType\GetDetalleSeguimientoNuevo $parameters)
    {
        try {
            $this->setResult($resultGetDetalleSeguimientoNuevo = $this->getSoapClient()->__soapCall('getDetalleSeguimientoNuevo', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDetalleSeguimientoNuevo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSeguimiento
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSeguimiento $parameters
     * @return \StructType\GetSeguimientoResponse|bool
     */
    public function getSeguimiento(\StructType\GetSeguimiento $parameters)
    {
        try {
            $this->setResult($resultGetSeguimiento = $this->getSoapClient()->__soapCall('getSeguimiento', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSeguimiento;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSeguimientoNuevo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSeguimientoNuevo $parameters
     * @return \StructType\GetSeguimientoNuevoResponse|bool
     */
    public function getSeguimientoNuevo(\StructType\GetSeguimientoNuevo $parameters)
    {
        try {
            $this->setResult($resultGetSeguimientoNuevo = $this->getSoapClient()->__soapCall('getSeguimientoNuevo', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSeguimientoNuevo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEstadoReclamo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEstadoReclamo $parameters
     * @return \StructType\GetEstadoReclamoResponse|bool
     */
    public function getEstadoReclamo(\StructType\GetEstadoReclamo $parameters)
    {
        try {
            $this->setResult($resultGetEstadoReclamo = $this->getSoapClient()->__soapCall('getEstadoReclamo', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEstadoReclamo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDetalleSeguimiento
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDetalleSeguimiento $parameters
     * @return \StructType\GetDetalleSeguimientoResponse|bool
     */
    public function getDetalleSeguimiento(\StructType\GetDetalleSeguimiento $parameters)
    {
        try {
            $this->setResult($resultGetDetalleSeguimiento = $this->getSoapClient()->__soapCall('getDetalleSeguimiento', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDetalleSeguimiento;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSeguimientoEmpresa
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSeguimientoEmpresa $parameters
     * @return \StructType\GetSeguimientoEmpresaResponse|bool
     */
    public function getSeguimientoEmpresa(\StructType\GetSeguimientoEmpresa $parameters)
    {
        try {
            $this->setResult($resultGetSeguimientoEmpresa = $this->getSoapClient()->__soapCall('getSeguimientoEmpresa', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSeguimientoEmpresa;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSeguimientoEmpresaDD
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSeguimientoEmpresaDD $parameters
     * @return \StructType\GetSeguimientoEmpresaDDResponse|bool
     */
    public function getSeguimientoEmpresaDD(\StructType\GetSeguimientoEmpresaDD $parameters)
    {
        try {
            $this->setResult($resultGetSeguimientoEmpresaDD = $this->getSoapClient()->__soapCall('getSeguimientoEmpresaDD', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSeguimientoEmpresaDD;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GetDetalleSeguimientoNuevoResponse|\StructType\GetDetalleSeguimientoResponse|\StructType\GetEstadoReclamoResponse|\StructType\GetSeguimientoEmpresaDDResponse|\StructType\GetSeguimientoEmpresaResponse|\StructType\GetSeguimientoNuevoResponse|\StructType\GetSeguimientoResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
