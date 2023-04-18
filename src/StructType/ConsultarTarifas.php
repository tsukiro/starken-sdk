<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for consultarTarifas StructType
 * Meta information extracted from the WSDL
 * - type: ns0:consultarTarifas
 * @subpackage Structs
 */
class ConsultarTarifas extends AbstractStructBase
{
    /**
     * The codigoCiudadOrigen
     * @var int|null
     */
    protected ?int $codigoCiudadOrigen = null;
    /**
     * The codigoCiudadDestino
     * @var int|null
     */
    protected ?int $codigoCiudadDestino = null;
    /**
     * The codigoAgenciaOrigen
     * @var int|null
     */
    protected ?int $codigoAgenciaOrigen = null;
    /**
     * The codigoAgenciaDestino
     * @var int|null
     */
    protected ?int $codigoAgenciaDestino = null;
    /**
     * The alto
     * @var float|null
     */
    protected ?float $alto = null;
    /**
     * The ancho
     * @var float|null
     */
    protected ?float $ancho = null;
    /**
     * The largo
     * @var float|null
     */
    protected ?float $largo = null;
    /**
     * The kilos
     * @var float|null
     */
    protected ?float $kilos = null;
    /**
     * The rutCliente
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $rutCliente = null;
    /**
     * The cuentaCorriente
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cuentaCorriente = null;
    /**
     * The cuentaCorrienteDV
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cuentaCorrienteDV = null;
    /**
     * Constructor method for consultarTarifas
     * @uses ConsultarTarifas::setCodigoCiudadOrigen()
     * @uses ConsultarTarifas::setCodigoCiudadDestino()
     * @uses ConsultarTarifas::setCodigoAgenciaOrigen()
     * @uses ConsultarTarifas::setCodigoAgenciaDestino()
     * @uses ConsultarTarifas::setAlto()
     * @uses ConsultarTarifas::setAncho()
     * @uses ConsultarTarifas::setLargo()
     * @uses ConsultarTarifas::setKilos()
     * @uses ConsultarTarifas::setRutCliente()
     * @uses ConsultarTarifas::setCuentaCorriente()
     * @uses ConsultarTarifas::setCuentaCorrienteDV()
     * @param int $codigoCiudadOrigen
     * @param int $codigoCiudadDestino
     * @param int $codigoAgenciaOrigen
     * @param int $codigoAgenciaDestino
     * @param float $alto
     * @param float $ancho
     * @param float $largo
     * @param float $kilos
     * @param string $rutCliente
     * @param string $cuentaCorriente
     * @param string $cuentaCorrienteDV
     */
    public function __construct(?int $codigoCiudadOrigen = null, ?int $codigoCiudadDestino = null, ?int $codigoAgenciaOrigen = null, ?int $codigoAgenciaDestino = null, ?float $alto = null, ?float $ancho = null, ?float $largo = null, ?float $kilos = null, ?string $rutCliente = null, ?string $cuentaCorriente = null, ?string $cuentaCorrienteDV = null)
    {
        $this
            ->setCodigoCiudadOrigen($codigoCiudadOrigen)
            ->setCodigoCiudadDestino($codigoCiudadDestino)
            ->setCodigoAgenciaOrigen($codigoAgenciaOrigen)
            ->setCodigoAgenciaDestino($codigoAgenciaDestino)
            ->setAlto($alto)
            ->setAncho($ancho)
            ->setLargo($largo)
            ->setKilos($kilos)
            ->setRutCliente($rutCliente)
            ->setCuentaCorriente($cuentaCorriente)
            ->setCuentaCorrienteDV($cuentaCorrienteDV);
    }
    /**
     * Get codigoCiudadOrigen value
     * @return int|null
     */
    public function getCodigoCiudadOrigen(): ?int
    {
        return $this->codigoCiudadOrigen;
    }
    /**
     * Set codigoCiudadOrigen value
     * @param int $codigoCiudadOrigen
     * @return \StructType\ConsultarTarifas
     */
    public function setCodigoCiudadOrigen(?int $codigoCiudadOrigen = null): self
    {
        // validation for constraint: int
        if (!is_null($codigoCiudadOrigen) && !(is_int($codigoCiudadOrigen) || ctype_digit($codigoCiudadOrigen))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codigoCiudadOrigen, true), gettype($codigoCiudadOrigen)), __LINE__);
        }
        $this->codigoCiudadOrigen = $codigoCiudadOrigen;
        
        return $this;
    }
    /**
     * Get codigoCiudadDestino value
     * @return int|null
     */
    public function getCodigoCiudadDestino(): ?int
    {
        return $this->codigoCiudadDestino;
    }
    /**
     * Set codigoCiudadDestino value
     * @param int $codigoCiudadDestino
     * @return \StructType\ConsultarTarifas
     */
    public function setCodigoCiudadDestino(?int $codigoCiudadDestino = null): self
    {
        // validation for constraint: int
        if (!is_null($codigoCiudadDestino) && !(is_int($codigoCiudadDestino) || ctype_digit($codigoCiudadDestino))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codigoCiudadDestino, true), gettype($codigoCiudadDestino)), __LINE__);
        }
        $this->codigoCiudadDestino = $codigoCiudadDestino;
        
        return $this;
    }
    /**
     * Get codigoAgenciaOrigen value
     * @return int|null
     */
    public function getCodigoAgenciaOrigen(): ?int
    {
        return $this->codigoAgenciaOrigen;
    }
    /**
     * Set codigoAgenciaOrigen value
     * @param int $codigoAgenciaOrigen
     * @return \StructType\ConsultarTarifas
     */
    public function setCodigoAgenciaOrigen(?int $codigoAgenciaOrigen = null): self
    {
        // validation for constraint: int
        if (!is_null($codigoAgenciaOrigen) && !(is_int($codigoAgenciaOrigen) || ctype_digit($codigoAgenciaOrigen))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codigoAgenciaOrigen, true), gettype($codigoAgenciaOrigen)), __LINE__);
        }
        $this->codigoAgenciaOrigen = $codigoAgenciaOrigen;
        
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
     * @return \StructType\ConsultarTarifas
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
     * Get alto value
     * @return float|null
     */
    public function getAlto(): ?float
    {
        return $this->alto;
    }
    /**
     * Set alto value
     * @param float $alto
     * @return \StructType\ConsultarTarifas
     */
    public function setAlto(?float $alto = null): self
    {
        // validation for constraint: float
        if (!is_null($alto) && !(is_float($alto) || is_numeric($alto))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($alto, true), gettype($alto)), __LINE__);
        }
        $this->alto = $alto;
        
        return $this;
    }
    /**
     * Get ancho value
     * @return float|null
     */
    public function getAncho(): ?float
    {
        return $this->ancho;
    }
    /**
     * Set ancho value
     * @param float $ancho
     * @return \StructType\ConsultarTarifas
     */
    public function setAncho(?float $ancho = null): self
    {
        // validation for constraint: float
        if (!is_null($ancho) && !(is_float($ancho) || is_numeric($ancho))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ancho, true), gettype($ancho)), __LINE__);
        }
        $this->ancho = $ancho;
        
        return $this;
    }
    /**
     * Get largo value
     * @return float|null
     */
    public function getLargo(): ?float
    {
        return $this->largo;
    }
    /**
     * Set largo value
     * @param float $largo
     * @return \StructType\ConsultarTarifas
     */
    public function setLargo(?float $largo = null): self
    {
        // validation for constraint: float
        if (!is_null($largo) && !(is_float($largo) || is_numeric($largo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($largo, true), gettype($largo)), __LINE__);
        }
        $this->largo = $largo;
        
        return $this;
    }
    /**
     * Get kilos value
     * @return float|null
     */
    public function getKilos(): ?float
    {
        return $this->kilos;
    }
    /**
     * Set kilos value
     * @param float $kilos
     * @return \StructType\ConsultarTarifas
     */
    public function setKilos(?float $kilos = null): self
    {
        // validation for constraint: float
        if (!is_null($kilos) && !(is_float($kilos) || is_numeric($kilos))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($kilos, true), gettype($kilos)), __LINE__);
        }
        $this->kilos = $kilos;
        
        return $this;
    }
    /**
     * Get rutCliente value
     * @return string|null
     */
    public function getRutCliente(): ?string
    {
        return $this->rutCliente;
    }
    /**
     * Set rutCliente value
     * @param string $rutCliente
     * @return \StructType\ConsultarTarifas
     */
    public function setRutCliente(?string $rutCliente = null): self
    {
        // validation for constraint: string
        if (!is_null($rutCliente) && !is_string($rutCliente)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rutCliente, true), gettype($rutCliente)), __LINE__);
        }
        $this->rutCliente = $rutCliente;
        
        return $this;
    }
    /**
     * Get cuentaCorriente value
     * @return string|null
     */
    public function getCuentaCorriente(): ?string
    {
        return $this->cuentaCorriente;
    }
    /**
     * Set cuentaCorriente value
     * @param string $cuentaCorriente
     * @return \StructType\ConsultarTarifas
     */
    public function setCuentaCorriente(?string $cuentaCorriente = null): self
    {
        // validation for constraint: string
        if (!is_null($cuentaCorriente) && !is_string($cuentaCorriente)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cuentaCorriente, true), gettype($cuentaCorriente)), __LINE__);
        }
        $this->cuentaCorriente = $cuentaCorriente;
        
        return $this;
    }
    /**
     * Get cuentaCorrienteDV value
     * @return string|null
     */
    public function getCuentaCorrienteDV(): ?string
    {
        return $this->cuentaCorrienteDV;
    }
    /**
     * Set cuentaCorrienteDV value
     * @param string $cuentaCorrienteDV
     * @return \StructType\ConsultarTarifas
     */
    public function setCuentaCorrienteDV(?string $cuentaCorrienteDV = null): self
    {
        // validation for constraint: string
        if (!is_null($cuentaCorrienteDV) && !is_string($cuentaCorrienteDV)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cuentaCorrienteDV, true), gettype($cuentaCorrienteDV)), __LINE__);
        }
        $this->cuentaCorrienteDV = $cuentaCorrienteDV;
        
        return $this;
    }
}
