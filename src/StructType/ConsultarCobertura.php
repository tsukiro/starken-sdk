<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for consultarCobertura StructType
 * Meta information extracted from the WSDL
 * - type: ns0:consultarCobertura
 * @subpackage Structs
 */
class ConsultarCobertura extends AbstractStructBase
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
     * Constructor method for consultarCobertura
     * @uses ConsultarCobertura::setCodigoCiudadOrigen()
     * @uses ConsultarCobertura::setCodigoCiudadDestino()
     * @uses ConsultarCobertura::setAlto()
     * @uses ConsultarCobertura::setAncho()
     * @uses ConsultarCobertura::setLargo()
     * @uses ConsultarCobertura::setKilos()
     * @param int $codigoCiudadOrigen
     * @param int $codigoCiudadDestino
     * @param float $alto
     * @param float $ancho
     * @param float $largo
     * @param float $kilos
     */
    public function __construct(?int $codigoCiudadOrigen = null, ?int $codigoCiudadDestino = null, ?float $alto = null, ?float $ancho = null, ?float $largo = null, ?float $kilos = null)
    {
        $this
            ->setCodigoCiudadOrigen($codigoCiudadOrigen)
            ->setCodigoCiudadDestino($codigoCiudadDestino)
            ->setAlto($alto)
            ->setAncho($ancho)
            ->setLargo($largo)
            ->setKilos($kilos);
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
     * @return \StructType\ConsultarCobertura
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
     * @return \StructType\ConsultarCobertura
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
     * @return \StructType\ConsultarCobertura
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
     * @return \StructType\ConsultarCobertura
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
     * @return \StructType\ConsultarCobertura
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
     * @return \StructType\ConsultarCobertura
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
}
