<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for respEstadoReclamoVO StructType
 * @subpackage Structs
 */
class RespEstadoReclamoVO extends Respuesta
{
    /**
     * The codReclamo
     * @var int|null
     */
    protected ?int $codReclamo = null;
    /**
     * The codigoEstadoHomologado
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $codigoEstadoHomologado = null;
    /**
     * The folio
     * @var int|null
     */
    protected ?int $folio = null;
    /**
     * The nomEstadoReclamo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nomEstadoReclamo = null;
    /**
     * The nombreEstadoHomologado
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nombreEstadoHomologado = null;
    /**
     * The orden_flete
     * @var int|null
     */
    protected ?int $orden_flete = null;
    /**
     * Constructor method for respEstadoReclamoVO
     * @uses RespEstadoReclamoVO::setCodReclamo()
     * @uses RespEstadoReclamoVO::setCodigoEstadoHomologado()
     * @uses RespEstadoReclamoVO::setFolio()
     * @uses RespEstadoReclamoVO::setNomEstadoReclamo()
     * @uses RespEstadoReclamoVO::setNombreEstadoHomologado()
     * @uses RespEstadoReclamoVO::setOrden_flete()
     * @param int $codReclamo
     * @param int $codigoEstadoHomologado
     * @param int $folio
     * @param string $nomEstadoReclamo
     * @param string $nombreEstadoHomologado
     * @param int $orden_flete
     */
    public function __construct(?int $codReclamo = null, ?int $codigoEstadoHomologado = null, ?int $folio = null, ?string $nomEstadoReclamo = null, ?string $nombreEstadoHomologado = null, ?int $orden_flete = null)
    {
        $this
            ->setCodReclamo($codReclamo)
            ->setCodigoEstadoHomologado($codigoEstadoHomologado)
            ->setFolio($folio)
            ->setNomEstadoReclamo($nomEstadoReclamo)
            ->setNombreEstadoHomologado($nombreEstadoHomologado)
            ->setOrden_flete($orden_flete);
    }
    /**
     * Get codReclamo value
     * @return int|null
     */
    public function getCodReclamo(): ?int
    {
        return $this->codReclamo;
    }
    /**
     * Set codReclamo value
     * @param int $codReclamo
     * @return \StructType\RespEstadoReclamoVO
     */
    public function setCodReclamo(?int $codReclamo = null): self
    {
        // validation for constraint: int
        if (!is_null($codReclamo) && !(is_int($codReclamo) || ctype_digit($codReclamo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codReclamo, true), gettype($codReclamo)), __LINE__);
        }
        $this->codReclamo = $codReclamo;
        
        return $this;
    }
    /**
     * Get codigoEstadoHomologado value
     * @return int|null
     */
    public function getCodigoEstadoHomologado(): ?int
    {
        return $this->codigoEstadoHomologado;
    }
    /**
     * Set codigoEstadoHomologado value
     * @param int $codigoEstadoHomologado
     * @return \StructType\RespEstadoReclamoVO
     */
    public function setCodigoEstadoHomologado(?int $codigoEstadoHomologado = null): self
    {
        // validation for constraint: int
        if (!is_null($codigoEstadoHomologado) && !(is_int($codigoEstadoHomologado) || ctype_digit($codigoEstadoHomologado))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codigoEstadoHomologado, true), gettype($codigoEstadoHomologado)), __LINE__);
        }
        $this->codigoEstadoHomologado = $codigoEstadoHomologado;
        
        return $this;
    }
    /**
     * Get folio value
     * @return int|null
     */
    public function getFolio(): ?int
    {
        return $this->folio;
    }
    /**
     * Set folio value
     * @param int $folio
     * @return \StructType\RespEstadoReclamoVO
     */
    public function setFolio(?int $folio = null): self
    {
        // validation for constraint: int
        if (!is_null($folio) && !(is_int($folio) || ctype_digit($folio))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($folio, true), gettype($folio)), __LINE__);
        }
        $this->folio = $folio;
        
        return $this;
    }
    /**
     * Get nomEstadoReclamo value
     * @return string|null
     */
    public function getNomEstadoReclamo(): ?string
    {
        return $this->nomEstadoReclamo;
    }
    /**
     * Set nomEstadoReclamo value
     * @param string $nomEstadoReclamo
     * @return \StructType\RespEstadoReclamoVO
     */
    public function setNomEstadoReclamo(?string $nomEstadoReclamo = null): self
    {
        // validation for constraint: string
        if (!is_null($nomEstadoReclamo) && !is_string($nomEstadoReclamo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomEstadoReclamo, true), gettype($nomEstadoReclamo)), __LINE__);
        }
        $this->nomEstadoReclamo = $nomEstadoReclamo;
        
        return $this;
    }
    /**
     * Get nombreEstadoHomologado value
     * @return string|null
     */
    public function getNombreEstadoHomologado(): ?string
    {
        return $this->nombreEstadoHomologado;
    }
    /**
     * Set nombreEstadoHomologado value
     * @param string $nombreEstadoHomologado
     * @return \StructType\RespEstadoReclamoVO
     */
    public function setNombreEstadoHomologado(?string $nombreEstadoHomologado = null): self
    {
        // validation for constraint: string
        if (!is_null($nombreEstadoHomologado) && !is_string($nombreEstadoHomologado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreEstadoHomologado, true), gettype($nombreEstadoHomologado)), __LINE__);
        }
        $this->nombreEstadoHomologado = $nombreEstadoHomologado;
        
        return $this;
    }
    /**
     * Get orden_flete value
     * @return int|null
     */
    public function getOrden_flete(): ?int
    {
        return $this->orden_flete;
    }
    /**
     * Set orden_flete value
     * @param int $orden_flete
     * @return \StructType\RespEstadoReclamoVO
     */
    public function setOrden_flete(?int $orden_flete = null): self
    {
        // validation for constraint: int
        if (!is_null($orden_flete) && !(is_int($orden_flete) || ctype_digit($orden_flete))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orden_flete, true), gettype($orden_flete)), __LINE__);
        }
        $this->orden_flete = $orden_flete;
        
        return $this;
    }
}
