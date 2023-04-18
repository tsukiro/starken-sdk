<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for consultarCoberturaBultoSobre StructType
 * Meta information extracted from the WSDL
 * - type: ns0:consultarCoberturaBultoSobre
 * @subpackage Structs
 */
class ConsultarCoberturaBultoSobre extends AbstractStructBase
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
     * The tipoBulto
     * @var int|null
     */
    protected ?int $tipoBulto = null;
    /**
     * Constructor method for consultarCoberturaBultoSobre
     * @uses ConsultarCoberturaBultoSobre::setCodigoCiudadOrigen()
     * @uses ConsultarCoberturaBultoSobre::setCodigoCiudadDestino()
     * @uses ConsultarCoberturaBultoSobre::setAlto()
     * @uses ConsultarCoberturaBultoSobre::setAncho()
     * @uses ConsultarCoberturaBultoSobre::setLargo()
     * @uses ConsultarCoberturaBultoSobre::setKilos()
     * @uses ConsultarCoberturaBultoSobre::setTipoBulto()
     * @param int $codigoCiudadOrigen
     * @param int $codigoCiudadDestino
     * @param float $alto
     * @param float $ancho
     * @param float $largo
     * @param float $kilos
     * @param int $tipoBulto
     */
    public function __construct(?int $codigoCiudadOrigen = null, ?int $codigoCiudadDestino = null, ?float $alto = null, ?float $ancho = null, ?float $largo = null, ?float $kilos = null, ?int $tipoBulto = null)
    {
        $this
            ->setCodigoCiudadOrigen($codigoCiudadOrigen)
            ->setCodigoCiudadDestino($codigoCiudadDestino)
            ->setAlto($alto)
            ->setAncho($ancho)
            ->setLargo($largo)
            ->setKilos($kilos)
            ->setTipoBulto($tipoBulto);
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
     * @return \StructType\ConsultarCoberturaBultoSobre
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
     * @return \StructType\ConsultarCoberturaBultoSobre
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
     * @return \StructType\ConsultarCoberturaBultoSobre
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
     * @return \StructType\ConsultarCoberturaBultoSobre
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
     * @return \StructType\ConsultarCoberturaBultoSobre
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
     * @return \StructType\ConsultarCoberturaBultoSobre
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
     * Get tipoBulto value
     * @return int|null
     */
    public function getTipoBulto(): ?int
    {
        return $this->tipoBulto;
    }
    /**
     * Set tipoBulto value
     * @param int $tipoBulto
     * @return \StructType\ConsultarCoberturaBultoSobre
     */
    public function setTipoBulto(?int $tipoBulto = null): self
    {
        // validation for constraint: int
        if (!is_null($tipoBulto) && !(is_int($tipoBulto) || ctype_digit($tipoBulto))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tipoBulto, true), gettype($tipoBulto)), __LINE__);
        }
        $this->tipoBulto = $tipoBulto;
        
        return $this;
    }
}
