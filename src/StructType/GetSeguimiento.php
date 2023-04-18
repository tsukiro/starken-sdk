<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSeguimiento StructType
 * Meta information extracted from the WSDL
 * - type: ns0:getSeguimiento
 * @subpackage Structs
 */
class GetSeguimiento extends AbstractStructBase
{
    /**
     * The seguimiento
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SeguimientoCarga[]
     */
    protected ?array $seguimiento = null;
    /**
     * Constructor method for getSeguimiento
     * @uses GetSeguimiento::setSeguimiento()
     * @param \StructType\SeguimientoCarga[] $seguimiento
     */
    public function __construct(?array $seguimiento = null)
    {
        $this
            ->setSeguimiento($seguimiento);
    }
    /**
     * Get seguimiento value
     * @return \StructType\SeguimientoCarga[]
     */
    public function getSeguimiento(): ?array
    {
        return $this->seguimiento;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSeguimiento method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSeguimiento method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSeguimientoForArrayConstraintFromSetSeguimiento(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSeguimientoSeguimientoItem) {
            // validation for constraint: itemType
            if (!$getSeguimientoSeguimientoItem instanceof \StructType\SeguimientoCarga) {
                $invalidValues[] = is_object($getSeguimientoSeguimientoItem) ? get_class($getSeguimientoSeguimientoItem) : sprintf('%s(%s)', gettype($getSeguimientoSeguimientoItem), var_export($getSeguimientoSeguimientoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The seguimiento property can only contain items of type \StructType\SeguimientoCarga, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set seguimiento value
     * @throws InvalidArgumentException
     * @param \StructType\SeguimientoCarga[] $seguimiento
     * @return \StructType\GetSeguimiento
     */
    public function setSeguimiento(?array $seguimiento = null): self
    {
        // validation for constraint: array
        if ('' !== ($seguimientoArrayErrorMessage = self::validateSeguimientoForArrayConstraintFromSetSeguimiento($seguimiento))) {
            throw new InvalidArgumentException($seguimientoArrayErrorMessage, __LINE__);
        }
        $this->seguimiento = $seguimiento;
        
        return $this;
    }
    /**
     * Add item to seguimiento value
     * @throws InvalidArgumentException
     * @param \StructType\SeguimientoCarga $item
     * @return \StructType\GetSeguimiento
     */
    public function addToSeguimiento(\StructType\SeguimientoCarga $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SeguimientoCarga) {
            throw new InvalidArgumentException(sprintf('The seguimiento property can only contain items of type \StructType\SeguimientoCarga, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->seguimiento[] = $item;
        
        return $this;
    }
}
