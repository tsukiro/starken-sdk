<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for listarCiudadesDestinoRespuesta StructType
 * @subpackage Structs
 */
class ListarCiudadesDestinoRespuesta extends Respuesta
{
    /**
     * The listaCiudadesDestino
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Ciudad[]
     */
    protected ?array $listaCiudadesDestino = null;
    /**
     * Constructor method for listarCiudadesDestinoRespuesta
     * @uses ListarCiudadesDestinoRespuesta::setListaCiudadesDestino()
     * @param \StructType\Ciudad[] $listaCiudadesDestino
     */
    public function __construct(?array $listaCiudadesDestino = null)
    {
        $this
            ->setListaCiudadesDestino($listaCiudadesDestino);
    }
    /**
     * Get listaCiudadesDestino value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Ciudad[]
     */
    public function getListaCiudadesDestino(): ?array
    {
        return $this->listaCiudadesDestino ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setListaCiudadesDestino method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListaCiudadesDestino method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListaCiudadesDestinoForArrayConstraintFromSetListaCiudadesDestino(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listarCiudadesDestinoRespuestaListaCiudadesDestinoItem) {
            // validation for constraint: itemType
            if (!$listarCiudadesDestinoRespuestaListaCiudadesDestinoItem instanceof \StructType\Ciudad) {
                $invalidValues[] = is_object($listarCiudadesDestinoRespuestaListaCiudadesDestinoItem) ? get_class($listarCiudadesDestinoRespuestaListaCiudadesDestinoItem) : sprintf('%s(%s)', gettype($listarCiudadesDestinoRespuestaListaCiudadesDestinoItem), var_export($listarCiudadesDestinoRespuestaListaCiudadesDestinoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The listaCiudadesDestino property can only contain items of type \StructType\Ciudad, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set listaCiudadesDestino value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\Ciudad[] $listaCiudadesDestino
     * @return \StructType\ListarCiudadesDestinoRespuesta
     */
    public function setListaCiudadesDestino(?array $listaCiudadesDestino = null): self
    {
        // validation for constraint: array
        if ('' !== ($listaCiudadesDestinoArrayErrorMessage = self::validateListaCiudadesDestinoForArrayConstraintFromSetListaCiudadesDestino($listaCiudadesDestino))) {
            throw new InvalidArgumentException($listaCiudadesDestinoArrayErrorMessage, __LINE__);
        }
        if (is_null($listaCiudadesDestino) || (is_array($listaCiudadesDestino) && empty($listaCiudadesDestino))) {
            unset($this->listaCiudadesDestino);
        } else {
            $this->listaCiudadesDestino = $listaCiudadesDestino;
        }
        
        return $this;
    }
    /**
     * Add item to listaCiudadesDestino value
     * @throws InvalidArgumentException
     * @param \StructType\Ciudad $item
     * @return \StructType\ListarCiudadesDestinoRespuesta
     */
    public function addToListaCiudadesDestino(\StructType\Ciudad $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Ciudad) {
            throw new InvalidArgumentException(sprintf('The listaCiudadesDestino property can only contain items of type \StructType\Ciudad, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->listaCiudadesDestino[] = $item;
        
        return $this;
    }
}
