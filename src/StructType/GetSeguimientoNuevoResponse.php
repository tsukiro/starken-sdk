<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSeguimientoNuevoResponse StructType
 * Meta information extracted from the WSDL
 * - type: ns0:getSeguimientoNuevoResponse
 * @subpackage Structs
 */
class GetSeguimientoNuevoResponse extends AbstractStructBase
{
    /**
     * The resumenSeguimientoNuevo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ResultadoSeguimientoNuevo[]
     */
    protected ?array $resumenSeguimientoNuevo = null;
    /**
     * Constructor method for getSeguimientoNuevoResponse
     * @uses GetSeguimientoNuevoResponse::setResumenSeguimientoNuevo()
     * @param \StructType\ResultadoSeguimientoNuevo[] $resumenSeguimientoNuevo
     */
    public function __construct(?array $resumenSeguimientoNuevo = null)
    {
        $this
            ->setResumenSeguimientoNuevo($resumenSeguimientoNuevo);
    }
    /**
     * Get resumenSeguimientoNuevo value
     * @return \StructType\ResultadoSeguimientoNuevo[]
     */
    public function getResumenSeguimientoNuevo(): ?array
    {
        return $this->resumenSeguimientoNuevo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setResumenSeguimientoNuevo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResumenSeguimientoNuevo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResumenSeguimientoNuevoForArrayConstraintFromSetResumenSeguimientoNuevo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSeguimientoNuevoResponseResumenSeguimientoNuevoItem) {
            // validation for constraint: itemType
            if (!$getSeguimientoNuevoResponseResumenSeguimientoNuevoItem instanceof \StructType\ResultadoSeguimientoNuevo) {
                $invalidValues[] = is_object($getSeguimientoNuevoResponseResumenSeguimientoNuevoItem) ? get_class($getSeguimientoNuevoResponseResumenSeguimientoNuevoItem) : sprintf('%s(%s)', gettype($getSeguimientoNuevoResponseResumenSeguimientoNuevoItem), var_export($getSeguimientoNuevoResponseResumenSeguimientoNuevoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The resumenSeguimientoNuevo property can only contain items of type \StructType\ResultadoSeguimientoNuevo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set resumenSeguimientoNuevo value
     * @throws InvalidArgumentException
     * @param \StructType\ResultadoSeguimientoNuevo[] $resumenSeguimientoNuevo
     * @return \StructType\GetSeguimientoNuevoResponse
     */
    public function setResumenSeguimientoNuevo(?array $resumenSeguimientoNuevo = null): self
    {
        // validation for constraint: array
        if ('' !== ($resumenSeguimientoNuevoArrayErrorMessage = self::validateResumenSeguimientoNuevoForArrayConstraintFromSetResumenSeguimientoNuevo($resumenSeguimientoNuevo))) {
            throw new InvalidArgumentException($resumenSeguimientoNuevoArrayErrorMessage, __LINE__);
        }
        $this->resumenSeguimientoNuevo = $resumenSeguimientoNuevo;
        
        return $this;
    }
    /**
     * Add item to resumenSeguimientoNuevo value
     * @throws InvalidArgumentException
     * @param \StructType\ResultadoSeguimientoNuevo $item
     * @return \StructType\GetSeguimientoNuevoResponse
     */
    public function addToResumenSeguimientoNuevo(\StructType\ResultadoSeguimientoNuevo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ResultadoSeguimientoNuevo) {
            throw new InvalidArgumentException(sprintf('The resumenSeguimientoNuevo property can only contain items of type \StructType\ResultadoSeguimientoNuevo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->resumenSeguimientoNuevo[] = $item;
        
        return $this;
    }
}
