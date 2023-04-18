<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSeguimientoEmpresa StructType
 * Meta information extracted from the WSDL
 * - type: ns0:getSeguimientoEmpresa
 * @subpackage Structs
 */
class GetSeguimientoEmpresa extends AbstractStructBase
{
    /**
     * The seguimiento
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\SeguimientoCargaEmpresa[]
     */
    protected ?array $seguimiento = null;
    /**
     * Constructor method for getSeguimientoEmpresa
     * @uses GetSeguimientoEmpresa::setSeguimiento()
     * @param \StructType\SeguimientoCargaEmpresa[] $seguimiento
     */
    public function __construct(?array $seguimiento = null)
    {
        $this
            ->setSeguimiento($seguimiento);
    }
    /**
     * Get seguimiento value
     * @return \StructType\SeguimientoCargaEmpresa[]
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
        foreach ($values as $getSeguimientoEmpresaSeguimientoItem) {
            // validation for constraint: itemType
            if (!$getSeguimientoEmpresaSeguimientoItem instanceof \StructType\SeguimientoCargaEmpresa) {
                $invalidValues[] = is_object($getSeguimientoEmpresaSeguimientoItem) ? get_class($getSeguimientoEmpresaSeguimientoItem) : sprintf('%s(%s)', gettype($getSeguimientoEmpresaSeguimientoItem), var_export($getSeguimientoEmpresaSeguimientoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The seguimiento property can only contain items of type \StructType\SeguimientoCargaEmpresa, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set seguimiento value
     * @throws InvalidArgumentException
     * @param \StructType\SeguimientoCargaEmpresa[] $seguimiento
     * @return \StructType\GetSeguimientoEmpresa
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
     * @param \StructType\SeguimientoCargaEmpresa $item
     * @return \StructType\GetSeguimientoEmpresa
     */
    public function addToSeguimiento(\StructType\SeguimientoCargaEmpresa $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SeguimientoCargaEmpresa) {
            throw new InvalidArgumentException(sprintf('The seguimiento property can only contain items of type \StructType\SeguimientoCargaEmpresa, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->seguimiento[] = $item;
        
        return $this;
    }
}
