<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for seguimientoCargaEmpresa StructType
 * @subpackage Structs
 */
class SeguimientoCargaEmpresa extends AbstractStructBase
{
    /**
     * The ctaCteCliente
     * @var int|null
     */
    protected ?int $ctaCteCliente = null;
    /**
     * The numeroDocumento
     * @var int|null
     */
    protected ?int $numeroDocumento = null;
    /**
     * The tipoDocumento
     * @var int|null
     */
    protected ?int $tipoDocumento = null;
    /**
     * The tipoDocumentoCliente
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $tipoDocumentoCliente = null;
    /**
     * Constructor method for seguimientoCargaEmpresa
     * @uses SeguimientoCargaEmpresa::setCtaCteCliente()
     * @uses SeguimientoCargaEmpresa::setNumeroDocumento()
     * @uses SeguimientoCargaEmpresa::setTipoDocumento()
     * @uses SeguimientoCargaEmpresa::setTipoDocumentoCliente()
     * @param int $ctaCteCliente
     * @param int $numeroDocumento
     * @param int $tipoDocumento
     * @param int $tipoDocumentoCliente
     */
    public function __construct(?int $ctaCteCliente = null, ?int $numeroDocumento = null, ?int $tipoDocumento = null, ?int $tipoDocumentoCliente = null)
    {
        $this
            ->setCtaCteCliente($ctaCteCliente)
            ->setNumeroDocumento($numeroDocumento)
            ->setTipoDocumento($tipoDocumento)
            ->setTipoDocumentoCliente($tipoDocumentoCliente);
    }
    /**
     * Get ctaCteCliente value
     * @return int|null
     */
    public function getCtaCteCliente(): ?int
    {
        return $this->ctaCteCliente;
    }
    /**
     * Set ctaCteCliente value
     * @param int $ctaCteCliente
     * @return \StructType\SeguimientoCargaEmpresa
     */
    public function setCtaCteCliente(?int $ctaCteCliente = null): self
    {
        // validation for constraint: int
        if (!is_null($ctaCteCliente) && !(is_int($ctaCteCliente) || ctype_digit($ctaCteCliente))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ctaCteCliente, true), gettype($ctaCteCliente)), __LINE__);
        }
        $this->ctaCteCliente = $ctaCteCliente;
        
        return $this;
    }
    /**
     * Get numeroDocumento value
     * @return int|null
     */
    public function getNumeroDocumento(): ?int
    {
        return $this->numeroDocumento;
    }
    /**
     * Set numeroDocumento value
     * @param int $numeroDocumento
     * @return \StructType\SeguimientoCargaEmpresa
     */
    public function setNumeroDocumento(?int $numeroDocumento = null): self
    {
        // validation for constraint: int
        if (!is_null($numeroDocumento) && !(is_int($numeroDocumento) || ctype_digit($numeroDocumento))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numeroDocumento, true), gettype($numeroDocumento)), __LINE__);
        }
        $this->numeroDocumento = $numeroDocumento;
        
        return $this;
    }
    /**
     * Get tipoDocumento value
     * @return int|null
     */
    public function getTipoDocumento(): ?int
    {
        return $this->tipoDocumento;
    }
    /**
     * Set tipoDocumento value
     * @param int $tipoDocumento
     * @return \StructType\SeguimientoCargaEmpresa
     */
    public function setTipoDocumento(?int $tipoDocumento = null): self
    {
        // validation for constraint: int
        if (!is_null($tipoDocumento) && !(is_int($tipoDocumento) || ctype_digit($tipoDocumento))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tipoDocumento, true), gettype($tipoDocumento)), __LINE__);
        }
        $this->tipoDocumento = $tipoDocumento;
        
        return $this;
    }
    /**
     * Get tipoDocumentoCliente value
     * @return int|null
     */
    public function getTipoDocumentoCliente(): ?int
    {
        return $this->tipoDocumentoCliente;
    }
    /**
     * Set tipoDocumentoCliente value
     * @param int $tipoDocumentoCliente
     * @return \StructType\SeguimientoCargaEmpresa
     */
    public function setTipoDocumentoCliente(?int $tipoDocumentoCliente = null): self
    {
        // validation for constraint: int
        if (!is_null($tipoDocumentoCliente) && !(is_int($tipoDocumentoCliente) || ctype_digit($tipoDocumentoCliente))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tipoDocumentoCliente, true), gettype($tipoDocumentoCliente)), __LINE__);
        }
        $this->tipoDocumentoCliente = $tipoDocumentoCliente;
        
        return $this;
    }
}
