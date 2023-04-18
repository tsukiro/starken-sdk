<?php

declare(strict_types=1);
/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'consultarCobertura' => '\\StructType\\ConsultarCobertura',
            'consultarCoberturaBultoSobre' => '\\StructType\\ConsultarCoberturaBultoSobre',
            'consultarCoberturaBultoSobreResponse' => '\\StructType\\ConsultarCoberturaBultoSobreResponse',
            'consultarCoberturaResponse' => '\\StructType\\ConsultarCoberturaResponse',
            'consultarLinkImagen' => '\\StructType\\ConsultarLinkImagen',
            'consultarLinkImagenResponse' => '\\StructType\\ConsultarLinkImagenResponse',
            'consultarTarifas' => '\\StructType\\ConsultarTarifas',
            'consultarTarifasResponse' => '\\StructType\\ConsultarTarifasResponse',
            'getDetalleSeguimiento' => '\\StructType\\GetDetalleSeguimiento',
            'getDetalleSeguimientoNuevo' => '\\StructType\\GetDetalleSeguimientoNuevo',
            'getDetalleSeguimientoNuevoResponse' => '\\StructType\\GetDetalleSeguimientoNuevoResponse',
            'getDetalleSeguimientoResponse' => '\\StructType\\GetDetalleSeguimientoResponse',
            'getEstadoReclamo' => '\\StructType\\GetEstadoReclamo',
            'getEstadoReclamoResponse' => '\\StructType\\GetEstadoReclamoResponse',
            'getSeguimiento' => '\\StructType\\GetSeguimiento',
            'getSeguimientoEmpresa' => '\\StructType\\GetSeguimientoEmpresa',
            'getSeguimientoEmpresaDD' => '\\StructType\\GetSeguimientoEmpresaDD',
            'getSeguimientoEmpresaDDResponse' => '\\StructType\\GetSeguimientoEmpresaDDResponse',
            'getSeguimientoEmpresaResponse' => '\\StructType\\GetSeguimientoEmpresaResponse',
            'getSeguimientoNuevo' => '\\StructType\\GetSeguimientoNuevo',
            'getSeguimientoNuevoResponse' => '\\StructType\\GetSeguimientoNuevoResponse',
            'getSeguimientoResponse' => '\\StructType\\GetSeguimientoResponse',
            'listarCiudadesDestino' => '\\StructType\\ListarCiudadesDestino',
            'listarCiudadesDestinoResponse' => '\\StructType\\ListarCiudadesDestinoResponse',
            'listarCiudadesOrigen' => '\\StructType\\ListarCiudadesOrigen',
            'listarCiudadesOrigenResponse' => '\\StructType\\ListarCiudadesOrigenResponse',
            'consultarCoberturaRespuesta' => '\\StructType\\ConsultarCoberturaRespuesta',
            'respuesta' => '\\StructType\\Respuesta',
            'resumenTarifa' => '\\StructType\\ResumenTarifa',
            'tipoEntrega' => '\\StructType\\TipoEntrega',
            'tipoServicio' => '\\StructType\\TipoServicio',
            'respuestaConsultarImagen' => '\\StructType\\RespuestaConsultarImagen',
            'detalleSeguimientoNuevo' => '\\StructType\\DetalleSeguimientoNuevo',
            'detalleSeguimiento' => '\\StructType\\DetalleSeguimiento',
            'respEstadoReclamoVO' => '\\StructType\\RespEstadoReclamoVO',
            'seguimientoCarga' => '\\StructType\\SeguimientoCarga',
            'seguimientoCargaEmpresa' => '\\StructType\\SeguimientoCargaEmpresa',
            'resultadoSeguimientoDD' => '\\StructType\\ResultadoSeguimientoDD',
            'resultadoSeguimiento' => '\\StructType\\ResultadoSeguimiento',
            'resultadoSeguimientoNuevo' => '\\StructType\\ResultadoSeguimientoNuevo',
            'listarCiudadesDestinoRespuesta' => '\\StructType\\ListarCiudadesDestinoRespuesta',
            'ciudad' => '\\StructType\\Ciudad',
            'listarCiudadesOrigenRespuesta' => '\\StructType\\ListarCiudadesOrigenRespuesta',
        ];
    }
}
