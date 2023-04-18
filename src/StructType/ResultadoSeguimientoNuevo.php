<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultadoSeguimientoNuevo StructType
 * @subpackage Structs
 */
class ResultadoSeguimientoNuevo extends AbstractStructBase
{
    /**
     * The codigoAgenciaDestino
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $codigoAgenciaDestino = null;
    /**
     * The codigoEstadoHomologado
     * @var int|null
     */
    protected ?int $codigoEstadoHomologado = null;
    /**
     * The dctoCliente
     * @var int|null
     */
    protected ?int $dctoCliente = null;
    /**
     * The descEstadoHomologado
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $descEstadoHomologado = null;
    /**
     * The descripcionAgenciaDestino
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $descripcionAgenciaDestino = null;
    /**
     * The destino
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destino = null;
    /**
     * The direccionAgenciaDestino
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $direccionAgenciaDestino = null;
    /**
     * The estado
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $estado = null;
    /**
     * The estadoHomologado
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $estadoHomologado = null;
    /**
     * The fechaEmision
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fechaEmision = null;
    /**
     * The fechaHoraEntrega
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fechaHoraEntrega = null;
    /**
     * The nroOrdenFlete
     * @var int|null
     */
    protected ?int $nroOrdenFlete = null;
    /**
     * The origen
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $origen = null;
    /**
     * Constructor method for resultadoSeguimientoNuevo
     * @uses ResultadoSeguimientoNuevo::setCodigoAgenciaDestino()
     * @uses ResultadoSeguimientoNuevo::setCodigoEstadoHomologado()
     * @uses ResultadoSeguimientoNuevo::setDctoCliente()
     * @uses ResultadoSeguimientoNuevo::setDescEstadoHomologado()
     * @uses ResultadoSeguimientoNuevo::setDescripcionAgenciaDestino()
     * @uses ResultadoSeguimientoNuevo::setDestino()
     * @uses ResultadoSeguimientoNuevo::setDireccionAgenciaDestino()
     * @uses ResultadoSeguimientoNuevo::setEstado()
     * @uses ResultadoSeguimientoNuevo::setEstadoHomologado()
     * @uses ResultadoSeguimientoNuevo::setFechaEmision()
     * @uses ResultadoSeguimientoNuevo::setFechaHoraEntrega()
     * @uses ResultadoSeguimientoNuevo::setNroOrdenFlete()
     * @uses ResultadoSeguimientoNuevo::setOrigen()
     * @param int $codigoAgenciaDestino
     * @param int $codigoEstadoHomologado
     * @param int $dctoCliente
     * @param string $descEstadoHomologado
     * @param string $descripcionAgenciaDestino
     * @param string $destino
     * @param string $direccionAgenciaDestino
     * @param string $estado
     * @param string $estadoHomologado
     * @param string $fechaEmision
     * @param string $fechaHoraEntrega
     * @param int $nroOrdenFlete
     * @param string $origen
     */
    public function __construct(?int $codigoAgenciaDestino = null, ?int $codigoEstadoHomologado = null, ?int $dctoCliente = null, ?string $descEstadoHomologado = null, ?string $descripcionAgenciaDestino = null, ?string $destino = null, ?string $direccionAgenciaDestino = null, ?string $estado = null, ?string $estadoHomologado = null, ?string $fechaEmision = null, ?string $fechaHoraEntrega = null, ?int $nroOrdenFlete = null, ?string $origen = null)
    {
        $this
            ->setCodigoAgenciaDestino($codigoAgenciaDestino)
            ->setCodigoEstadoHomologado($codigoEstadoHomologado)
            ->setDctoCliente($dctoCliente)
            ->setDescEstadoHomologado($descEstadoHomologado)
            ->setDescripcionAgenciaDestino($descripcionAgenciaDestino)
            ->setDestino($destino)
            ->setDireccionAgenciaDestino($direccionAgenciaDestino)
            ->setEstado($estado)
            ->setEstadoHomologado($estadoHomologado)
            ->setFechaEmision($fechaEmision)
            ->setFechaHoraEntrega($fechaHoraEntrega)
            ->setNroOrdenFlete($nroOrdenFlete)
            ->setOrigen($origen);
    }
    /**
     * Get codigoAgenciaDestino value
     * @return int|null
     */
    public function getCodigoAgenciaDestino(): ?int
    {
        return $this->codigoAgenciaDestino;
    }
    /**
     * Set codigoAgenciaDestino value
     * @param int $codigoAgenciaDestino
     * @return \StructType\ResultadoSeguimientoNuevo
     */
    public function setCodigoAgenciaDestino(?int $codigoAgenciaDestino = null): self
    {
        // validation for constraint: int
        if (!is_null($codigoAgenciaDestino) && !(is_int($codigoAgenciaDestino) || ctype_digit($codigoAgenciaDestino))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codigoAgenciaDestino, true), gettype($codigoAgenciaDestino)), __LINE__);
        }
        $this->codigoAgenciaDestino = $codigoAgenciaDestino;
        
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
     * @return \StructType\ResultadoSeguimientoNuevo
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
     * Get dctoCliente value
     * @return int|null
     */
    public function getDctoCliente(): ?int
    {
        return $this->dctoCliente;
    }
    /**
     * Set dctoCliente value
     * @param int $dctoCliente
     * @return \StructType\ResultadoSeguimientoNuevo
     */
    public function setDctoCliente(?int $dctoCliente = null): self
    {
        // validation for constraint: int
        if (!is_null($dctoCliente) && !(is_int($dctoCliente) || ctype_digit($dctoCliente))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dctoCliente, true), gettype($dctoCliente)), __LINE__);
        }
        $this->dctoCliente = $dctoCliente;
        
        return $this;
    }
    /**
     * Get descEstadoHomologado value
     * @return string|null
     */
    public function getDescEstadoHomologado(): ?string
    {
        return $this->descEstadoHomologado;
    }
    /**
     * Set descEstadoHomologado value
     * @param string $descEstadoHomologado
     * @return \StructType\ResultadoSeguimientoNuevo
     */
    public function setDescEstadoHomologado(?string $descEstadoHomologado = null): self
    {
        // validation for constraint: string
        if (!is_null($descEstadoHomologado) && !is_string($descEstadoHomologado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descEstadoHomologado, true), gettype($descEstadoHomologado)), __LINE__);
        }
        $this->descEstadoHomologado = $descEstadoHomologado;
        
        return $this;
    }
    /**
     * Get descripcionAgenciaDestino value
     * @return string|null
     */
    public function getDescripcionAgenciaDestino(): ?string
    {
        return $this->descripcionAgenciaDestino;
    }
    /**
     * Set descripcionAgenciaDestino value
     * @param string $descripcionAgenciaDestino
     * @return \StructType\ResultadoSeguimientoNuevo
     */
    public function setDescripcionAgenciaDestino(?string $descripcionAgenciaDestino = null): self
    {
        // validation for constraint: string
        if (!is_null($descripcionAgenciaDestino) && !is_string($descripcionAgenciaDestino)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcionAgenciaDestino, true), gettype($descripcionAgenciaDestino)), __LINE__);
        }
        $this->descripcionAgenciaDestino = $descripcionAgenciaDestino;
        
        return $this;
    }
    /**
     * Get destino value
     * @return string|null
     */
    public function getDestino(): ?string
    {
        return $this->destino;
    }
    /**
     * Set destino value
     * @param string $destino
     * @return \StructType\ResultadoSeguimientoNuevo
     */
    public function setDestino(?string $destino = null): self
    {
        // validation for constraint: string
        if (!is_null($destino) && !is_string($destino)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destino, true), gettype($destino)), __LINE__);
        }
        $this->destino = $destino;
        
        return $this;
    }
    /**
     * Get direccionAgenciaDestino value
     * @return string|null
     */
    public function getDireccionAgenciaDestino(): ?string
    {
        return $this->direccionAgenciaDestino;
    }
    /**
     * Set direccionAgenciaDestino value
     * @param string $direccionAgenciaDestino
     * @return \StructType\ResultadoSeguimientoNuevo
     */
    public function setDireccionAgenciaDestino(?string $direccionAgenciaDestino = null): self
    {
        // validation for constraint: string
        if (!is_null($direccionAgenciaDestino) && !is_string($direccionAgenciaDestino)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($direccionAgenciaDestino, true), gettype($direccionAgenciaDestino)), __LINE__);
        }
        $this->direccionAgenciaDestino = $direccionAgenciaDestino;
        
        return $this;
    }
    /**
     * Get estado value
     * @return string|null
     */
    public function getEstado(): ?string
    {
        return $this->estado;
    }
    /**
     * Set estado value
     * @param string $estado
     * @return \StructType\ResultadoSeguimientoNuevo
     */
    public function setEstado(?string $estado = null): self
    {
        // validation for constraint: string
        if (!is_null($estado) && !is_string($estado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estado, true), gettype($estado)), __LINE__);
        }
        $this->estado = $estado;
        
        return $this;
    }
    /**
     * Get estadoHomologado value
     * @return string|null
     */
    public function getEstadoHomologado(): ?string
    {
        return $this->estadoHomologado;
    }
    /**
     * Set estadoHomologado value
     * @param string $estadoHomologado
     * @return \StructType\ResultadoSeguimientoNuevo
     */
    public function setEstadoHomologado(?string $estadoHomologado = null): self
    {
        // validation for constraint: string
        if (!is_null($estadoHomologado) && !is_string($estadoHomologado)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estadoHomologado, true), gettype($estadoHomologado)), __LINE__);
        }
        $this->estadoHomologado = $estadoHomologado;
        
        return $this;
    }
    /**
     * Get fechaEmision value
     * @return string|null
     */
    public function getFechaEmision(): ?string
    {
        return $this->fechaEmision;
    }
    /**
     * Set fechaEmision value
     * @param string $fechaEmision
     * @return \StructType\ResultadoSeguimientoNuevo
     */
    public function setFechaEmision(?string $fechaEmision = null): self
    {
        // validation for constraint: string
        if (!is_null($fechaEmision) && !is_string($fechaEmision)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaEmision, true), gettype($fechaEmision)), __LINE__);
        }
        $this->fechaEmision = $fechaEmision;
        
        return $this;
    }
    /**
     * Get fechaHoraEntrega value
     * @return string|null
     */
    public function getFechaHoraEntrega(): ?string
    {
        return $this->fechaHoraEntrega;
    }
    /**
     * Set fechaHoraEntrega value
     * @param string $fechaHoraEntrega
     * @return \StructType\ResultadoSeguimientoNuevo
     */
    public function setFechaHoraEntrega(?string $fechaHoraEntrega = null): self
    {
        // validation for constraint: string
        if (!is_null($fechaHoraEntrega) && !is_string($fechaHoraEntrega)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaHoraEntrega, true), gettype($fechaHoraEntrega)), __LINE__);
        }
        $this->fechaHoraEntrega = $fechaHoraEntrega;
        
        return $this;
    }
    /**
     * Get nroOrdenFlete value
     * @return int|null
     */
    public function getNroOrdenFlete(): ?int
    {
        return $this->nroOrdenFlete;
    }
    /**
     * Set nroOrdenFlete value
     * @param int $nroOrdenFlete
     * @return \StructType\ResultadoSeguimientoNuevo
     */
    public function setNroOrdenFlete(?int $nroOrdenFlete = null): self
    {
        // validation for constraint: int
        if (!is_null($nroOrdenFlete) && !(is_int($nroOrdenFlete) || ctype_digit($nroOrdenFlete))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nroOrdenFlete, true), gettype($nroOrdenFlete)), __LINE__);
        }
        $this->nroOrdenFlete = $nroOrdenFlete;
        
        return $this;
    }
    /**
     * Get origen value
     * @return string|null
     */
    public function getOrigen(): ?string
    {
        return $this->origen;
    }
    /**
     * Set origen value
     * @param string $origen
     * @return \StructType\ResultadoSeguimientoNuevo
     */
    public function setOrigen(?string $origen = null): self
    {
        // validation for constraint: string
        if (!is_null($origen) && !is_string($origen)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origen, true), gettype($origen)), __LINE__);
        }
        $this->origen = $origen;
        
        return $this;
    }
}
