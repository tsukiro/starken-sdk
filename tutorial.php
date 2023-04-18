<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://serviciosdls.starken.cl/StarkenServices/starkenServices?WSDL',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://serviciosdls.starken.cl/StarkenServices/starkenServices?WSDL',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
];
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
/**
 * Sample call for getDetalleSeguimientoNuevo operation/method
 */
if ($get->getDetalleSeguimientoNuevo(new \StructType\GetDetalleSeguimientoNuevo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSeguimiento operation/method
 */
if ($get->getSeguimiento(new \StructType\GetSeguimiento()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSeguimientoNuevo operation/method
 */
if ($get->getSeguimientoNuevo(new \StructType\GetSeguimientoNuevo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getEstadoReclamo operation/method
 */
if ($get->getEstadoReclamo(new \StructType\GetEstadoReclamo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDetalleSeguimiento operation/method
 */
if ($get->getDetalleSeguimiento(new \StructType\GetDetalleSeguimiento()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSeguimientoEmpresa operation/method
 */
if ($get->getSeguimientoEmpresa(new \StructType\GetSeguimientoEmpresa()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSeguimientoEmpresaDD operation/method
 */
if ($get->getSeguimientoEmpresaDD(new \StructType\GetSeguimientoEmpresaDD()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Consultar ServiceType
 */
$consultar = new \ServiceType\Consultar($options);
/**
 * Sample call for consultarCoberturaBultoSobre operation/method
 */
if ($consultar->consultarCoberturaBultoSobre(new \StructType\ConsultarCoberturaBultoSobre()) !== false) {
    print_r($consultar->getResult());
} else {
    print_r($consultar->getLastError());
}
/**
 * Sample call for consultarLinkImagen operation/method
 */
if ($consultar->consultarLinkImagen(new \StructType\ConsultarLinkImagen()) !== false) {
    print_r($consultar->getResult());
} else {
    print_r($consultar->getLastError());
}
/**
 * Sample call for consultarCobertura operation/method
 */
if ($consultar->consultarCobertura(new \StructType\ConsultarCobertura()) !== false) {
    print_r($consultar->getResult());
} else {
    print_r($consultar->getLastError());
}
/**
 * Sample call for consultarTarifas operation/method
 */
if ($consultar->consultarTarifas(new \StructType\ConsultarTarifas()) !== false) {
    print_r($consultar->getResult());
} else {
    print_r($consultar->getLastError());
}
/**
 * Samples for Listar ServiceType
 */
$listar = new \ServiceType\Listar($options);
/**
 * Sample call for listarCiudadesDestino operation/method
 */
if ($listar->listarCiudadesDestino(new \StructType\ListarCiudadesDestino()) !== false) {
    print_r($listar->getResult());
} else {
    print_r($listar->getLastError());
}
/**
 * Sample call for listarCiudadesOrigen operation/method
 */
if ($listar->listarCiudadesOrigen(new \StructType\ListarCiudadesOrigen()) !== false) {
    print_r($listar->getResult());
} else {
    print_r($listar->getLastError());
}
