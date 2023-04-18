<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for consultarCoberturaRespuesta StructType
 * @subpackage Structs
 */
class ConsultarCoberturaRespuesta extends Respuesta
{
    /**
     * The listaTarifas
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ResumenTarifa[]
     */
    protected ?array $listaTarifas = null;
    /**
     * Constructor method for consultarCoberturaRespuesta
     * @uses ConsultarCoberturaRespuesta::setListaTarifas()
     * @param \StructType\ResumenTarifa[] $listaTarifas
     */
    public function __construct(?array $listaTarifas = null)
    {
        $this
            ->setListaTarifas($listaTarifas);
    }
    /**
     * Get listaTarifas value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ResumenTarifa[]
     */
    public function getListaTarifas(): ?array
    {
        return $this->listaTarifas ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setListaTarifas method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListaTarifas method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListaTarifasForArrayConstraintFromSetListaTarifas(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $consultarCoberturaRespuestaListaTarifasItem) {
            // validation for constraint: itemType
            if (!$consultarCoberturaRespuestaListaTarifasItem instanceof \StructType\ResumenTarifa) {
                $invalidValues[] = is_object($consultarCoberturaRespuestaListaTarifasItem) ? get_class($consultarCoberturaRespuestaListaTarifasItem) : sprintf('%s(%s)', gettype($consultarCoberturaRespuestaListaTarifasItem), var_export($consultarCoberturaRespuestaListaTarifasItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The listaTarifas property can only contain items of type \StructType\ResumenTarifa, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set listaTarifas value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ResumenTarifa[] $listaTarifas
     * @return \StructType\ConsultarCoberturaRespuesta
     */
    public function setListaTarifas(?array $listaTarifas = null): self
    {
        // validation for constraint: array
        if ('' !== ($listaTarifasArrayErrorMessage = self::validateListaTarifasForArrayConstraintFromSetListaTarifas($listaTarifas))) {
            throw new InvalidArgumentException($listaTarifasArrayErrorMessage, __LINE__);
        }
        if (is_null($listaTarifas) || (is_array($listaTarifas) && empty($listaTarifas))) {
            unset($this->listaTarifas);
        } else {
            $this->listaTarifas = $listaTarifas;
        }
        
        return $this;
    }
    /**
     * Add item to listaTarifas value
     * @throws InvalidArgumentException
     * @param \StructType\ResumenTarifa $item
     * @return \StructType\ConsultarCoberturaRespuesta
     */
    public function addToListaTarifas(\StructType\ResumenTarifa $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ResumenTarifa) {
            throw new InvalidArgumentException(sprintf('The listaTarifas property can only contain items of type \StructType\ResumenTarifa, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->listaTarifas[] = $item;
        
        return $this;
    }
}
