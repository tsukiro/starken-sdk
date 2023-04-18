<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ciudad StructType
 * @subpackage Structs
 */
class Ciudad extends AbstractStructBase
{
    /**
     * The codigoCiudad
     * @var int|null
     */
    protected ?int $codigoCiudad = null;
    /**
     * The codigoRegion
     * @var int|null
     */
    protected ?int $codigoRegion = null;
    /**
     * The codigoZonaGeografica
     * @var int|null
     */
    protected ?int $codigoZonaGeografica = null;
    /**
     * The nombreCiudad
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nombreCiudad = null;
    /**
     * Constructor method for ciudad
     * @uses Ciudad::setCodigoCiudad()
     * @uses Ciudad::setCodigoRegion()
     * @uses Ciudad::setCodigoZonaGeografica()
     * @uses Ciudad::setNombreCiudad()
     * @param int $codigoCiudad
     * @param int $codigoRegion
     * @param int $codigoZonaGeografica
     * @param string $nombreCiudad
     */
    public function __construct(?int $codigoCiudad = null, ?int $codigoRegion = null, ?int $codigoZonaGeografica = null, ?string $nombreCiudad = null)
    {
        $this
            ->setCodigoCiudad($codigoCiudad)
            ->setCodigoRegion($codigoRegion)
            ->setCodigoZonaGeografica($codigoZonaGeografica)
            ->setNombreCiudad($nombreCiudad);
    }
    /**
     * Get codigoCiudad value
     * @return int|null
     */
    public function getCodigoCiudad(): ?int
    {
        return $this->codigoCiudad;
    }
    /**
     * Set codigoCiudad value
     * @param int $codigoCiudad
     * @return \StructType\Ciudad
     */
    public function setCodigoCiudad(?int $codigoCiudad = null): self
    {
        // validation for constraint: int
        if (!is_null($codigoCiudad) && !(is_int($codigoCiudad) || ctype_digit($codigoCiudad))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codigoCiudad, true), gettype($codigoCiudad)), __LINE__);
        }
        $this->codigoCiudad = $codigoCiudad;
        
        return $this;
    }
    /**
     * Get codigoRegion value
     * @return int|null
     */
    public function getCodigoRegion(): ?int
    {
        return $this->codigoRegion;
    }
    /**
     * Set codigoRegion value
     * @param int $codigoRegion
     * @return \StructType\Ciudad
     */
    public function setCodigoRegion(?int $codigoRegion = null): self
    {
        // validation for constraint: int
        if (!is_null($codigoRegion) && !(is_int($codigoRegion) || ctype_digit($codigoRegion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codigoRegion, true), gettype($codigoRegion)), __LINE__);
        }
        $this->codigoRegion = $codigoRegion;
        
        return $this;
    }
    /**
     * Get codigoZonaGeografica value
     * @return int|null
     */
    public function getCodigoZonaGeografica(): ?int
    {
        return $this->codigoZonaGeografica;
    }
    /**
     * Set codigoZonaGeografica value
     * @param int $codigoZonaGeografica
     * @return \StructType\Ciudad
     */
    public function setCodigoZonaGeografica(?int $codigoZonaGeografica = null): self
    {
        // validation for constraint: int
        if (!is_null($codigoZonaGeografica) && !(is_int($codigoZonaGeografica) || ctype_digit($codigoZonaGeografica))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codigoZonaGeografica, true), gettype($codigoZonaGeografica)), __LINE__);
        }
        $this->codigoZonaGeografica = $codigoZonaGeografica;
        
        return $this;
    }
    /**
     * Get nombreCiudad value
     * @return string|null
     */
    public function getNombreCiudad(): ?string
    {
        return $this->nombreCiudad;
    }
    /**
     * Set nombreCiudad value
     * @param string $nombreCiudad
     * @return \StructType\Ciudad
     */
    public function setNombreCiudad(?string $nombreCiudad = null): self
    {
        // validation for constraint: string
        if (!is_null($nombreCiudad) && !is_string($nombreCiudad)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreCiudad, true), gettype($nombreCiudad)), __LINE__);
        }
        $this->nombreCiudad = $nombreCiudad;
        
        return $this;
    }
}
