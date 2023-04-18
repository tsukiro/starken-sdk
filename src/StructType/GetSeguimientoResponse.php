<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSeguimientoResponse StructType
 * Meta information extracted from the WSDL
 * - type: ns0:getSeguimientoResponse
 * @subpackage Structs
 */
class GetSeguimientoResponse extends AbstractStructBase
{
    /**
     * The resumenSeguimiento
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ResultadoSeguimiento[]
     */
    protected ?array $resumenSeguimiento = null;
    /**
     * Constructor method for getSeguimientoResponse
     * @uses GetSeguimientoResponse::setResumenSeguimiento()
     * @param \StructType\ResultadoSeguimiento[] $resumenSeguimiento
     */
    public function __construct(?array $resumenSeguimiento = null)
    {
        $this
            ->setResumenSeguimiento($resumenSeguimiento);
    }
    /**
     * Get resumenSeguimiento value
     * @return \StructType\ResultadoSeguimiento[]
     */
    public function getResumenSeguimiento(): ?array
    {
        return $this->resumenSeguimiento;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setResumenSeguimiento method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResumenSeguimiento method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResumenSeguimientoForArrayConstraintFromSetResumenSeguimiento(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSeguimientoResponseResumenSeguimientoItem) {
            // validation for constraint: itemType
            if (!$getSeguimientoResponseResumenSeguimientoItem instanceof \StructType\ResultadoSeguimiento) {
                $invalidValues[] = is_object($getSeguimientoResponseResumenSeguimientoItem) ? get_class($getSeguimientoResponseResumenSeguimientoItem) : sprintf('%s(%s)', gettype($getSeguimientoResponseResumenSeguimientoItem), var_export($getSeguimientoResponseResumenSeguimientoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The resumenSeguimiento property can only contain items of type \StructType\ResultadoSeguimiento, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set resumenSeguimiento value
     * @throws InvalidArgumentException
     * @param \StructType\ResultadoSeguimiento[] $resumenSeguimiento
     * @return \StructType\GetSeguimientoResponse
     */
    public function setResumenSeguimiento(?array $resumenSeguimiento = null): self
    {
        // validation for constraint: array
        if ('' !== ($resumenSeguimientoArrayErrorMessage = self::validateResumenSeguimientoForArrayConstraintFromSetResumenSeguimiento($resumenSeguimiento))) {
            throw new InvalidArgumentException($resumenSeguimientoArrayErrorMessage, __LINE__);
        }
        $this->resumenSeguimiento = $resumenSeguimiento;
        
        return $this;
    }
    /**
     * Add item to resumenSeguimiento value
     * @throws InvalidArgumentException
     * @param \StructType\ResultadoSeguimiento $item
     * @return \StructType\GetSeguimientoResponse
     */
    public function addToResumenSeguimiento(\StructType\ResultadoSeguimiento $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ResultadoSeguimiento) {
            throw new InvalidArgumentException(sprintf('The resumenSeguimiento property can only contain items of type \StructType\ResultadoSeguimiento, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->resumenSeguimiento[] = $item;
        
        return $this;
    }
}
