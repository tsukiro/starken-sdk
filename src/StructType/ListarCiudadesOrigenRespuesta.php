<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for listarCiudadesOrigenRespuesta StructType
 * @subpackage Structs
 */
class ListarCiudadesOrigenRespuesta extends Respuesta
{
    /**
     * The listaCiudadesOrigen
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Ciudad[]
     */
    protected ?array $listaCiudadesOrigen = null;
    /**
     * Constructor method for listarCiudadesOrigenRespuesta
     * @uses ListarCiudadesOrigenRespuesta::setListaCiudadesOrigen()
     * @param \StructType\Ciudad[] $listaCiudadesOrigen
     */
    public function __construct(?array $listaCiudadesOrigen = null)
    {
        $this
            ->setListaCiudadesOrigen($listaCiudadesOrigen);
    }
    /**
     * Get listaCiudadesOrigen value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Ciudad[]
     */
    public function getListaCiudadesOrigen(): ?array
    {
        return $this->listaCiudadesOrigen ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setListaCiudadesOrigen method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListaCiudadesOrigen method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListaCiudadesOrigenForArrayConstraintFromSetListaCiudadesOrigen(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listarCiudadesOrigenRespuestaListaCiudadesOrigenItem) {
            // validation for constraint: itemType
            if (!$listarCiudadesOrigenRespuestaListaCiudadesOrigenItem instanceof \StructType\Ciudad) {
                $invalidValues[] = is_object($listarCiudadesOrigenRespuestaListaCiudadesOrigenItem) ? get_class($listarCiudadesOrigenRespuestaListaCiudadesOrigenItem) : sprintf('%s(%s)', gettype($listarCiudadesOrigenRespuestaListaCiudadesOrigenItem), var_export($listarCiudadesOrigenRespuestaListaCiudadesOrigenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The listaCiudadesOrigen property can only contain items of type \StructType\Ciudad, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set listaCiudadesOrigen value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\Ciudad[] $listaCiudadesOrigen
     * @return \StructType\ListarCiudadesOrigenRespuesta
     */
    public function setListaCiudadesOrigen(?array $listaCiudadesOrigen = null): self
    {
        // validation for constraint: array
        if ('' !== ($listaCiudadesOrigenArrayErrorMessage = self::validateListaCiudadesOrigenForArrayConstraintFromSetListaCiudadesOrigen($listaCiudadesOrigen))) {
            throw new InvalidArgumentException($listaCiudadesOrigenArrayErrorMessage, __LINE__);
        }
        if (is_null($listaCiudadesOrigen) || (is_array($listaCiudadesOrigen) && empty($listaCiudadesOrigen))) {
            unset($this->listaCiudadesOrigen);
        } else {
            $this->listaCiudadesOrigen = $listaCiudadesOrigen;
        }
        
        return $this;
    }
    /**
     * Add item to listaCiudadesOrigen value
     * @throws InvalidArgumentException
     * @param \StructType\Ciudad $item
     * @return \StructType\ListarCiudadesOrigenRespuesta
     */
    public function addToListaCiudadesOrigen(\StructType\Ciudad $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Ciudad) {
            throw new InvalidArgumentException(sprintf('The listaCiudadesOrigen property can only contain items of type \StructType\Ciudad, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->listaCiudadesOrigen[] = $item;
        
        return $this;
    }
}
