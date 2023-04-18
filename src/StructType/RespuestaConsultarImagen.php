<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for respuestaConsultarImagen StructType
 * @subpackage Structs
 */
class RespuestaConsultarImagen extends AbstractStructBase
{
    /**
     * The codigoRespuesta
     * @var int|null
     */
    protected ?int $codigoRespuesta = null;
    /**
     * The descripcionRespuesta
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $descripcionRespuesta = null;
    /**
     * The linkImagen
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $linkImagen = null;
    /**
     * Constructor method for respuestaConsultarImagen
     * @uses RespuestaConsultarImagen::setCodigoRespuesta()
     * @uses RespuestaConsultarImagen::setDescripcionRespuesta()
     * @uses RespuestaConsultarImagen::setLinkImagen()
     * @param int $codigoRespuesta
     * @param string $descripcionRespuesta
     * @param string $linkImagen
     */
    public function __construct(?int $codigoRespuesta = null, ?string $descripcionRespuesta = null, ?string $linkImagen = null)
    {
        $this
            ->setCodigoRespuesta($codigoRespuesta)
            ->setDescripcionRespuesta($descripcionRespuesta)
            ->setLinkImagen($linkImagen);
    }
    /**
     * Get codigoRespuesta value
     * @return int|null
     */
    public function getCodigoRespuesta(): ?int
    {
        return $this->codigoRespuesta;
    }
    /**
     * Set codigoRespuesta value
     * @param int $codigoRespuesta
     * @return \StructType\RespuestaConsultarImagen
     */
    public function setCodigoRespuesta(?int $codigoRespuesta = null): self
    {
        // validation for constraint: int
        if (!is_null($codigoRespuesta) && !(is_int($codigoRespuesta) || ctype_digit($codigoRespuesta))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codigoRespuesta, true), gettype($codigoRespuesta)), __LINE__);
        }
        $this->codigoRespuesta = $codigoRespuesta;
        
        return $this;
    }
    /**
     * Get descripcionRespuesta value
     * @return string|null
     */
    public function getDescripcionRespuesta(): ?string
    {
        return $this->descripcionRespuesta;
    }
    /**
     * Set descripcionRespuesta value
     * @param string $descripcionRespuesta
     * @return \StructType\RespuestaConsultarImagen
     */
    public function setDescripcionRespuesta(?string $descripcionRespuesta = null): self
    {
        // validation for constraint: string
        if (!is_null($descripcionRespuesta) && !is_string($descripcionRespuesta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcionRespuesta, true), gettype($descripcionRespuesta)), __LINE__);
        }
        $this->descripcionRespuesta = $descripcionRespuesta;
        
        return $this;
    }
    /**
     * Get linkImagen value
     * @return string|null
     */
    public function getLinkImagen(): ?string
    {
        return $this->linkImagen;
    }
    /**
     * Set linkImagen value
     * @param string $linkImagen
     * @return \StructType\RespuestaConsultarImagen
     */
    public function setLinkImagen(?string $linkImagen = null): self
    {
        // validation for constraint: string
        if (!is_null($linkImagen) && !is_string($linkImagen)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkImagen, true), gettype($linkImagen)), __LINE__);
        }
        $this->linkImagen = $linkImagen;
        
        return $this;
    }
}
