<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for respuesta StructType
 * @subpackage Structs
 */
abstract class Respuesta extends AbstractStructBase
{
    /**
     * The codigoRespuesta
     * @var int|null
     */
    protected ?int $codigoRespuesta = null;
    /**
     * The mensajeRespuesta
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mensajeRespuesta = null;
    /**
     * Constructor method for respuesta
     * @uses Respuesta::setCodigoRespuesta()
     * @uses Respuesta::setMensajeRespuesta()
     * @param int $codigoRespuesta
     * @param string $mensajeRespuesta
     */
    public function __construct(?int $codigoRespuesta = null, ?string $mensajeRespuesta = null)
    {
        $this
            ->setCodigoRespuesta($codigoRespuesta)
            ->setMensajeRespuesta($mensajeRespuesta);
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
     * @return \StructType\Respuesta
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
     * Get mensajeRespuesta value
     * @return string|null
     */
    public function getMensajeRespuesta(): ?string
    {
        return $this->mensajeRespuesta;
    }
    /**
     * Set mensajeRespuesta value
     * @param string $mensajeRespuesta
     * @return \StructType\Respuesta
     */
    public function setMensajeRespuesta(?string $mensajeRespuesta = null): self
    {
        // validation for constraint: string
        if (!is_null($mensajeRespuesta) && !is_string($mensajeRespuesta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mensajeRespuesta, true), gettype($mensajeRespuesta)), __LINE__);
        }
        $this->mensajeRespuesta = $mensajeRespuesta;
        
        return $this;
    }
}
