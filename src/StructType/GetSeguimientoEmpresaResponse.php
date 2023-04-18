<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSeguimientoEmpresaResponse StructType
 * Meta information extracted from the WSDL
 * - type: ns0:getSeguimientoEmpresaResponse
 * @subpackage Structs
 */
class GetSeguimientoEmpresaResponse extends AbstractStructBase
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
     * Constructor method for getSeguimientoEmpresaResponse
     * @uses GetSeguimientoEmpresaResponse::setResumenSeguimiento()
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
        foreach ($values as $getSeguimientoEmpresaResponseResumenSeguimientoItem) {
            // validation for constraint: itemType
            if (!$getSeguimientoEmpresaResponseResumenSeguimientoItem instanceof \StructType\ResultadoSeguimiento) {
                $invalidValues[] = is_object($getSeguimientoEmpresaResponseResumenSeguimientoItem) ? get_class($getSeguimientoEmpresaResponseResumenSeguimientoItem) : sprintf('%s(%s)', gettype($getSeguimientoEmpresaResponseResumenSeguimientoItem), var_export($getSeguimientoEmpresaResponseResumenSeguimientoItem, true));
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
     * @return \StructType\GetSeguimientoEmpresaResponse
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
     * @return \StructType\GetSeguimientoEmpresaResponse
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
