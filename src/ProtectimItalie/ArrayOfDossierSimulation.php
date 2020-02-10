<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class ArrayOfDossierSimulation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DossierSimulation[] $DossierSimulation
     */
    protected $DossierSimulation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DossierSimulation[]
     */
    public function getDossierSimulation()
    {
      return $this->DossierSimulation;
    }

    /**
     * @param DossierSimulation[] $DossierSimulation
     * @return \FilippoToso\AfiEsca\ProtectimItalie\ArrayOfDossierSimulation
     */
    public function setDossierSimulation(array $DossierSimulation = null)
    {
      $this->DossierSimulation = $DossierSimulation;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->DossierSimulation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DossierSimulation
     */
    public function offsetGet($offset)
    {
      return $this->DossierSimulation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DossierSimulation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DossierSimulation[] = $value;
      } else {
        $this->DossierSimulation[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DossierSimulation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DossierSimulation Return the current element
     */
    public function current()
    {
      return current($this->DossierSimulation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DossierSimulation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DossierSimulation);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->DossierSimulation);
    }

    /**
     * Countable implementation
     *
     * @return DossierSimulation Return count of elements
     */
    public function count()
    {
      return count($this->DossierSimulation);
    }

}
