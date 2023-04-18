<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for detalleSeguimientoNuevo StructType
 * @subpackage Structs
 */
class DetalleSeguimientoNuevo extends AbstractStructBase
{
    /**
     * The cantidadBultos
     * @var int|null
     */
    protected ?int $cantidadBultos = null;
    /**
     * The cantidadKilos
     * @var float|null
     */
    protected ?float $cantidadKilos = null;
    /**
     * The ciudadDestino
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ciudadDestino = null;
    /**
     * The ciudadOrigen
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ciudadOrigen = null;
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
     * The cuentaCorriente
     * @var int|null
     */
    protected ?int $cuentaCorriente = null;
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
     * The direccionAgenciaDestino
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $direccionAgenciaDestino = null;
    /**
     * The documentoCliente
     * @var int|null
     */
    protected ?int $documentoCliente = null;
    /**
     * The estadoFlete
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $estadoFlete = null;
    /**
     * The estadoHomologado
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $estadoHomologado = null;
    /**
     * The fechaCompromiso
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fechaCompromiso = null;
    /**
     * The fechaEmision
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fechaEmision = null;
    /**
     * The fechaEntrega
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fechaEntrega = null;
    /**
     * The nombreDestinatario
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nombreDestinatario = null;
    /**
     * The nombreRemitente
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nombreRemitente = null;
    /**
     * The nombreRetira
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nombreRetira = null;
    /**
     * The ordenFlete
     * @var int|null
     */
    protected ?int $ordenFlete = null;
    /**
     * The rutRetira
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $rutRetira = null;
    /**
     * The tipoEntrega
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tipoEntrega = null;
    /**
     * The tipoServicio
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $tipoServicio = null;
    /**
     * The valorFlete
     * @var float|null
     */
    protected ?float $valorFlete = null;
    /**
     * Constructor method for detalleSeguimientoNuevo
     * @uses DetalleSeguimientoNuevo::setCantidadBultos()
     * @uses DetalleSeguimientoNuevo::setCantidadKilos()
     * @uses DetalleSeguimientoNuevo::setCiudadDestino()
     * @uses DetalleSeguimientoNuevo::setCiudadOrigen()
     * @uses DetalleSeguimientoNuevo::setCodigoAgenciaDestino()
     * @uses DetalleSeguimientoNuevo::setCodigoEstadoHomologado()
     * @uses DetalleSeguimientoNuevo::setCuentaCorriente()
     * @uses DetalleSeguimientoNuevo::setDescEstadoHomologado()
     * @uses DetalleSeguimientoNuevo::setDescripcionAgenciaDestino()
     * @uses DetalleSeguimientoNuevo::setDireccionAgenciaDestino()
     * @uses DetalleSeguimientoNuevo::setDocumentoCliente()
     * @uses DetalleSeguimientoNuevo::setEstadoFlete()
     * @uses DetalleSeguimientoNuevo::setEstadoHomologado()
     * @uses DetalleSeguimientoNuevo::setFechaCompromiso()
     * @uses DetalleSeguimientoNuevo::setFechaEmision()
     * @uses DetalleSeguimientoNuevo::setFechaEntrega()
     * @uses DetalleSeguimientoNuevo::setNombreDestinatario()
     * @uses DetalleSeguimientoNuevo::setNombreRemitente()
     * @uses DetalleSeguimientoNuevo::setNombreRetira()
     * @uses DetalleSeguimientoNuevo::setOrdenFlete()
     * @uses DetalleSeguimientoNuevo::setRutRetira()
     * @uses DetalleSeguimientoNuevo::setTipoEntrega()
     * @uses DetalleSeguimientoNuevo::setTipoServicio()
     * @uses DetalleSeguimientoNuevo::setValorFlete()
     * @param int $cantidadBultos
     * @param float $cantidadKilos
     * @param string $ciudadDestino
     * @param string $ciudadOrigen
     * @param int $codigoAgenciaDestino
     * @param int $codigoEstadoHomologado
     * @param int $cuentaCorriente
     * @param string $descEstadoHomologado
     * @param string $descripcionAgenciaDestino
     * @param string $direccionAgenciaDestino
     * @param int $documentoCliente
     * @param string $estadoFlete
     * @param string $estadoHomologado
     * @param string $fechaCompromiso
     * @param string $fechaEmision
     * @param string $fechaEntrega
     * @param string $nombreDestinatario
     * @param string $nombreRemitente
     * @param string $nombreRetira
     * @param int $ordenFlete
     * @param string $rutRetira
     * @param string $tipoEntrega
     * @param string $tipoServicio
     * @param float $valorFlete
     */
    public function __construct(?int $cantidadBultos = null, ?float $cantidadKilos = null, ?string $ciudadDestino = null, ?string $ciudadOrigen = null, ?int $codigoAgenciaDestino = null, ?int $codigoEstadoHomologado = null, ?int $cuentaCorriente = null, ?string $descEstadoHomologado = null, ?string $descripcionAgenciaDestino = null, ?string $direccionAgenciaDestino = null, ?int $documentoCliente = null, ?string $estadoFlete = null, ?string $estadoHomologado = null, ?string $fechaCompromiso = null, ?string $fechaEmision = null, ?string $fechaEntrega = null, ?string $nombreDestinatario = null, ?string $nombreRemitente = null, ?string $nombreRetira = null, ?int $ordenFlete = null, ?string $rutRetira = null, ?string $tipoEntrega = null, ?string $tipoServicio = null, ?float $valorFlete = null)
    {
        $this
            ->setCantidadBultos($cantidadBultos)
            ->setCantidadKilos($cantidadKilos)
            ->setCiudadDestino($ciudadDestino)
            ->setCiudadOrigen($ciudadOrigen)
            ->setCodigoAgenciaDestino($codigoAgenciaDestino)
            ->setCodigoEstadoHomologado($codigoEstadoHomologado)
            ->setCuentaCorriente($cuentaCorriente)
            ->setDescEstadoHomologado($descEstadoHomologado)
            ->setDescripcionAgenciaDestino($descripcionAgenciaDestino)
            ->setDireccionAgenciaDestino($direccionAgenciaDestino)
            ->setDocumentoCliente($documentoCliente)
            ->setEstadoFlete($estadoFlete)
            ->setEstadoHomologado($estadoHomologado)
            ->setFechaCompromiso($fechaCompromiso)
            ->setFechaEmision($fechaEmision)
            ->setFechaEntrega($fechaEntrega)
            ->setNombreDestinatario($nombreDestinatario)
            ->setNombreRemitente($nombreRemitente)
            ->setNombreRetira($nombreRetira)
            ->setOrdenFlete($ordenFlete)
            ->setRutRetira($rutRetira)
            ->setTipoEntrega($tipoEntrega)
            ->setTipoServicio($tipoServicio)
            ->setValorFlete($valorFlete);
    }
    /**
     * Get cantidadBultos value
     * @return int|null
     */
    public function getCantidadBultos(): ?int
    {
        return $this->cantidadBultos;
    }
    /**
     * Set cantidadBultos value
     * @param int $cantidadBultos
     * @return \StructType\DetalleSeguimientoNuevo
     */
    public function setCantidadBultos(?int $cantidadBultos = null): self
    {
        // validation for constraint: int
        if (!is_null($cantidadBultos) && !(is_int($cantidadBultos) || ctype_digit($cantidadBultos))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cantidadBultos, true), gettype($cantidadBultos)), __LINE__);
        }
        $this->cantidadBultos = $cantidadBultos;
        
        return $this;
    }
    /**
     * Get cantidadKilos value
     * @return float|null
     */
    public function getCantidadKilos(): ?float
    {
        return $this->cantidadKilos;
    }
    /**
     * Set cantidadKilos value
     * @param float $cantidadKilos
     * @return \StructType\DetalleSeguimientoNuevo
     */
    public function setCantidadKilos(?float $cantidadKilos = null): self
    {
        // validation for constraint: float
        if (!is_null($cantidadKilos) && !(is_float($cantidadKilos) || is_numeric($cantidadKilos))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cantidadKilos, true), gettype($cantidadKilos)), __LINE__);
        }
        $this->cantidadKilos = $cantidadKilos;
        
        return $this;
    }
    /**
     * Get ciudadDestino value
     * @return string|null
     */
    public function getCiudadDestino(): ?string
    {
        return $this->ciudadDestino;
    }
    /**
     * Set ciudadDestino value
     * @param string $ciudadDestino
     * @return \StructType\DetalleSeguimientoNuevo
     */
    public function setCiudadDestino(?string $ciudadDestino = null): self
    {
        // validation for constraint: string
        if (!is_null($ciudadDestino) && !is_string($ciudadDestino)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ciudadDestino, true), gettype($ciudadDestino)), __LINE__);
        }
        $this->ciudadDestino = $ciudadDestino;
        
        return $this;
    }
    /**
     * Get ciudadOrigen value
     * @return string|null
     */
    public function getCiudadOrigen(): ?string
    {
        return $this->ciudadOrigen;
    }
    /**
     * Set ciudadOrigen value
     * @param string $ciudadOrigen
     * @return \StructType\DetalleSeguimientoNuevo
     */
    public function setCiudadOrigen(?string $ciudadOrigen = null): self
    {
        // validation for constraint: string
        if (!is_null($ciudadOrigen) && !is_string($ciudadOrigen)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ciudadOrigen, true), gettype($ciudadOrigen)), __LINE__);
        }
        $this->ciudadOrigen = $ciudadOrigen;
        
        return $this;
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
     * @return \StructType\DetalleSeguimientoNuevo
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
     * @return \StructType\DetalleSeguimientoNuevo
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
     * Get cuentaCorriente value
     * @return int|null
     */
    public function getCuentaCorriente(): ?int
    {
        return $this->cuentaCorriente;
    }
    /**
     * Set cuentaCorriente value
     * @param int $cuentaCorriente
     * @return \StructType\DetalleSeguimientoNuevo
     */
    public function setCuentaCorriente(?int $cuentaCorriente = null): self
    {
        // validation for constraint: int
        if (!is_null($cuentaCorriente) && !(is_int($cuentaCorriente) || ctype_digit($cuentaCorriente))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cuentaCorriente, true), gettype($cuentaCorriente)), __LINE__);
        }
        $this->cuentaCorriente = $cuentaCorriente;
        
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
     * @return \StructType\DetalleSeguimientoNuevo
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
     * @return \StructType\DetalleSeguimientoNuevo
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
     * @return \StructType\DetalleSeguimientoNuevo
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
     * Get documentoCliente value
     * @return int|null
     */
    public function getDocumentoCliente(): ?int
    {
        return $this->documentoCliente;
    }
    /**
     * Set documentoCliente value
     * @param int $documentoCliente
     * @return \StructType\DetalleSeguimientoNuevo
     */
    public function setDocumentoCliente(?int $documentoCliente = null): self
    {
        // validation for constraint: int
        if (!is_null($documentoCliente) && !(is_int($documentoCliente) || ctype_digit($documentoCliente))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentoCliente, true), gettype($documentoCliente)), __LINE__);
        }
        $this->documentoCliente = $documentoCliente;
        
        return $this;
    }
    /**
     * Get estadoFlete value
     * @return string|null
     */
    public function getEstadoFlete(): ?string
    {
        return $this->estadoFlete;
    }
    /**
     * Set estadoFlete value
     * @param string $estadoFlete
     * @return \StructType\DetalleSeguimientoNuevo
     */
    public function setEstadoFlete(?string $estadoFlete = null): self
    {
        // validation for constraint: string
        if (!is_null($estadoFlete) && !is_string($estadoFlete)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estadoFlete, true), gettype($estadoFlete)), __LINE__);
        }
        $this->estadoFlete = $estadoFlete;
        
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
     * @return \StructType\DetalleSeguimientoNuevo
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
     * Get fechaCompromiso value
     * @return string|null
     */
    public function getFechaCompromiso(): ?string
    {
        return $this->fechaCompromiso;
    }
    /**
     * Set fechaCompromiso value
     * @param string $fechaCompromiso
     * @return \StructType\DetalleSeguimientoNuevo
     */
    public function setFechaCompromiso(?string $fechaCompromiso = null): self
    {
        // validation for constraint: string
        if (!is_null($fechaCompromiso) && !is_string($fechaCompromiso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaCompromiso, true), gettype($fechaCompromiso)), __LINE__);
        }
        $this->fechaCompromiso = $fechaCompromiso;
        
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
     * @return \StructType\DetalleSeguimientoNuevo
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
     * Get fechaEntrega value
     * @return string|null
     */
    public function getFechaEntrega(): ?string
    {
        return $this->fechaEntrega;
    }
    /**
     * Set fechaEntrega value
     * @param string $fechaEntrega
     * @return \StructType\DetalleSeguimientoNuevo
     */
    public function setFechaEntrega(?string $fechaEntrega = null): self
    {
        // validation for constraint: string
        if (!is_null($fechaEntrega) && !is_string($fechaEntrega)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaEntrega, true), gettype($fechaEntrega)), __LINE__);
        }
        $this->fechaEntrega = $fechaEntrega;
        
        return $this;
    }
    /**
     * Get nombreDestinatario value
     * @return string|null
     */
    public function getNombreDestinatario(): ?string
    {
        return $this->nombreDestinatario;
    }
    /**
     * Set nombreDestinatario value
     * @param string $nombreDestinatario
     * @return \StructType\DetalleSeguimientoNuevo
     */
    public function setNombreDestinatario(?string $nombreDestinatario = null): self
    {
        // validation for constraint: string
        if (!is_null($nombreDestinatario) && !is_string($nombreDestinatario)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreDestinatario, true), gettype($nombreDestinatario)), __LINE__);
        }
        $this->nombreDestinatario = $nombreDestinatario;
        
        return $this;
    }
    /**
     * Get nombreRemitente value
     * @return string|null
     */
    public function getNombreRemitente(): ?string
    {
        return $this->nombreRemitente;
    }
    /**
     * Set nombreRemitente value
     * @param string $nombreRemitente
     * @return \StructType\DetalleSeguimientoNuevo
     */
    public function setNombreRemitente(?string $nombreRemitente = null): self
    {
        // validation for constraint: string
        if (!is_null($nombreRemitente) && !is_string($nombreRemitente)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreRemitente, true), gettype($nombreRemitente)), __LINE__);
        }
        $this->nombreRemitente = $nombreRemitente;
        
        return $this;
    }
    /**
     * Get nombreRetira value
     * @return string|null
     */
    public function getNombreRetira(): ?string
    {
        return $this->nombreRetira;
    }
    /**
     * Set nombreRetira value
     * @param string $nombreRetira
     * @return \StructType\DetalleSeguimientoNuevo
     */
    public function setNombreRetira(?string $nombreRetira = null): self
    {
        // validation for constraint: string
        if (!is_null($nombreRetira) && !is_string($nombreRetira)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreRetira, true), gettype($nombreRetira)), __LINE__);
        }
        $this->nombreRetira = $nombreRetira;
        
        return $this;
    }
    /**
     * Get ordenFlete value
     * @return int|null
     */
    public function getOrdenFlete(): ?int
    {
        return $this->ordenFlete;
    }
    /**
     * Set ordenFlete value
     * @param int $ordenFlete
     * @return \StructType\DetalleSeguimientoNuevo
     */
    public function setOrdenFlete(?int $ordenFlete = null): self
    {
        // validation for constraint: int
        if (!is_null($ordenFlete) && !(is_int($ordenFlete) || ctype_digit($ordenFlete))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ordenFlete, true), gettype($ordenFlete)), __LINE__);
        }
        $this->ordenFlete = $ordenFlete;
        
        return $this;
    }
    /**
     * Get rutRetira value
     * @return string|null
     */
    public function getRutRetira(): ?string
    {
        return $this->rutRetira;
    }
    /**
     * Set rutRetira value
     * @param string $rutRetira
     * @return \StructType\DetalleSeguimientoNuevo
     */
    public function setRutRetira(?string $rutRetira = null): self
    {
        // validation for constraint: string
        if (!is_null($rutRetira) && !is_string($rutRetira)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rutRetira, true), gettype($rutRetira)), __LINE__);
        }
        $this->rutRetira = $rutRetira;
        
        return $this;
    }
    /**
     * Get tipoEntrega value
     * @return string|null
     */
    public function getTipoEntrega(): ?string
    {
        return $this->tipoEntrega;
    }
    /**
     * Set tipoEntrega value
     * @param string $tipoEntrega
     * @return \StructType\DetalleSeguimientoNuevo
     */
    public function setTipoEntrega(?string $tipoEntrega = null): self
    {
        // validation for constraint: string
        if (!is_null($tipoEntrega) && !is_string($tipoEntrega)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoEntrega, true), gettype($tipoEntrega)), __LINE__);
        }
        $this->tipoEntrega = $tipoEntrega;
        
        return $this;
    }
    /**
     * Get tipoServicio value
     * @return string|null
     */
    public function getTipoServicio(): ?string
    {
        return $this->tipoServicio;
    }
    /**
     * Set tipoServicio value
     * @param string $tipoServicio
     * @return \StructType\DetalleSeguimientoNuevo
     */
    public function setTipoServicio(?string $tipoServicio = null): self
    {
        // validation for constraint: string
        if (!is_null($tipoServicio) && !is_string($tipoServicio)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoServicio, true), gettype($tipoServicio)), __LINE__);
        }
        $this->tipoServicio = $tipoServicio;
        
        return $this;
    }
    /**
     * Get valorFlete value
     * @return float|null
     */
    public function getValorFlete(): ?float
    {
        return $this->valorFlete;
    }
    /**
     * Set valorFlete value
     * @param float $valorFlete
     * @return \StructType\DetalleSeguimientoNuevo
     */
    public function setValorFlete(?float $valorFlete = null): self
    {
        // validation for constraint: float
        if (!is_null($valorFlete) && !(is_float($valorFlete) || is_numeric($valorFlete))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valorFlete, true), gettype($valorFlete)), __LINE__);
        }
        $this->valorFlete = $valorFlete;
        
        return $this;
    }
}
