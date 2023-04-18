<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getSeguimientoEmpresaDDResponse StructType
 * Meta information extracted from the WSDL
 * - type: ns0:getSeguimientoEmpresaDDResponse
 * @subpackage Structs
 */
class GetSeguimientoEmpresaDDResponse extends AbstractStructBase
{
    /**
     * The resumenSeguimientoDD
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ResultadoSeguimientoDD[]
     */
    protected ?array $resumenSeguimientoDD = null;
    /**
     * Constructor method for getSeguimientoEmpresaDDResponse
     * @uses GetSeguimientoEmpresaDDResponse::setResumenSeguimientoDD()
     * @param \StructType\ResultadoSeguimientoDD[] $resumenSeguimientoDD
     */
    public function __construct(?array $resumenSeguimientoDD = null)
    {
        $this
            ->setResumenSeguimientoDD($resumenSeguimientoDD);
    }
    /**
     * Get resumenSeguimientoDD value
     * @return \StructType\ResultadoSeguimientoDD[]
     */
    public function getResumenSeguimientoDD(): ?array
    {
        return $this->resumenSeguimientoDD;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setResumenSeguimientoDD method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResumenSeguimientoDD method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResumenSeguimientoDDForArrayConstraintFromSetResumenSeguimientoDD(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSeguimientoEmpresaDDResponseResumenSeguimientoDDItem) {
            // validation for constraint: itemType
            if (!$getSeguimientoEmpresaDDResponseResumenSeguimientoDDItem instanceof \StructType\ResultadoSeguimientoDD) {
                $invalidValues[] = is_object($getSeguimientoEmpresaDDResponseResumenSeguimientoDDItem) ? get_class($getSeguimientoEmpresaDDResponseResumenSeguimientoDDItem) : sprintf('%s(%s)', gettype($getSeguimientoEmpresaDDResponseResumenSeguimientoDDItem), var_export($getSeguimientoEmpresaDDResponseResumenSeguimientoDDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The resumenSeguimientoDD property can only contain items of type \StructType\ResultadoSeguimientoDD, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set resumenSeguimientoDD value
     * @throws InvalidArgumentException
     * @param \StructType\ResultadoSeguimientoDD[] $resumenSeguimientoDD
     * @return \StructType\GetSeguimientoEmpresaDDResponse
     */
    public function setResumenSeguimientoDD(?array $resumenSeguimientoDD = null): self
    {
        // validation for constraint: array
        if ('' !== ($resumenSeguimientoDDArrayErrorMessage = self::validateResumenSeguimientoDDForArrayConstraintFromSetResumenSeguimientoDD($resumenSeguimientoDD))) {
            throw new InvalidArgumentException($resumenSeguimientoDDArrayErrorMessage, __LINE__);
        }
        $this->resumenSeguimientoDD = $resumenSeguimientoDD;
        
        return $this;
    }
    /**
     * Add item to resumenSeguimientoDD value
     * @throws InvalidArgumentException
     * @param \StructType\ResultadoSeguimientoDD $item
     * @return \StructType\GetSeguimientoEmpresaDDResponse
     */
    public function addToResumenSeguimientoDD(\StructType\ResultadoSeguimientoDD $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ResultadoSeguimientoDD) {
            throw new InvalidArgumentException(sprintf('The resumenSeguimientoDD property can only contain items of type \StructType\ResultadoSeguimientoDD, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->resumenSeguimientoDD[] = $item;
        
        return $this;
    }
}
