<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for consultarLinkImagen StructType
 * Meta information extracted from the WSDL
 * - type: ns0:consultarLinkImagen
 * @subpackage Structs
 */
class ConsultarLinkImagen extends AbstractStructBase
{
    /**
     * The codigoOrdenFlete
     * @var int|null
     */
    protected ?int $codigoOrdenFlete = null;
    /**
     * The rutEmpresa
     * @var int|null
     */
    protected ?int $rutEmpresa = null;
    /**
     * The rutUsuario
     * @var int|null
     */
    protected ?int $rutUsuario = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * Constructor method for consultarLinkImagen
     * @uses ConsultarLinkImagen::setCodigoOrdenFlete()
     * @uses ConsultarLinkImagen::setRutEmpresa()
     * @uses ConsultarLinkImagen::setRutUsuario()
     * @uses ConsultarLinkImagen::setPassword()
     * @param int $codigoOrdenFlete
     * @param int $rutEmpresa
     * @param int $rutUsuario
     * @param string $password
     */
    public function __construct(?int $codigoOrdenFlete = null, ?int $rutEmpresa = null, ?int $rutUsuario = null, ?string $password = null)
    {
        $this
            ->setCodigoOrdenFlete($codigoOrdenFlete)
            ->setRutEmpresa($rutEmpresa)
            ->setRutUsuario($rutUsuario)
            ->setPassword($password);
    }
    /**
     * Get codigoOrdenFlete value
     * @return int|null
     */
    public function getCodigoOrdenFlete(): ?int
    {
        return $this->codigoOrdenFlete;
    }
    /**
     * Set codigoOrdenFlete value
     * @param int $codigoOrdenFlete
     * @return \StructType\ConsultarLinkImagen
     */
    public function setCodigoOrdenFlete(?int $codigoOrdenFlete = null): self
    {
        // validation for constraint: int
        if (!is_null($codigoOrdenFlete) && !(is_int($codigoOrdenFlete) || ctype_digit($codigoOrdenFlete))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codigoOrdenFlete, true), gettype($codigoOrdenFlete)), __LINE__);
        }
        $this->codigoOrdenFlete = $codigoOrdenFlete;
        
        return $this;
    }
    /**
     * Get rutEmpresa value
     * @return int|null
     */
    public function getRutEmpresa(): ?int
    {
        return $this->rutEmpresa;
    }
    /**
     * Set rutEmpresa value
     * @param int $rutEmpresa
     * @return \StructType\ConsultarLinkImagen
     */
    public function setRutEmpresa(?int $rutEmpresa = null): self
    {
        // validation for constraint: int
        if (!is_null($rutEmpresa) && !(is_int($rutEmpresa) || ctype_digit($rutEmpresa))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rutEmpresa, true), gettype($rutEmpresa)), __LINE__);
        }
        $this->rutEmpresa = $rutEmpresa;
        
        return $this;
    }
    /**
     * Get rutUsuario value
     * @return int|null
     */
    public function getRutUsuario(): ?int
    {
        return $this->rutUsuario;
    }
    /**
     * Set rutUsuario value
     * @param int $rutUsuario
     * @return \StructType\ConsultarLinkImagen
     */
    public function setRutUsuario(?int $rutUsuario = null): self
    {
        // validation for constraint: int
        if (!is_null($rutUsuario) && !(is_int($rutUsuario) || ctype_digit($rutUsuario))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rutUsuario, true), gettype($rutUsuario)), __LINE__);
        }
        $this->rutUsuario = $rutUsuario;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \StructType\ConsultarLinkImagen
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
}
