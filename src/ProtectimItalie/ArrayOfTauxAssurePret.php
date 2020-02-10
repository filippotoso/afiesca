<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class ArrayOfTauxAssurePret implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TauxAssurePret[] $TauxAssurePret
     */
    protected $TauxAssurePret = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TauxAssurePret[]
     */
    public function getTauxAssurePret()
    {
      return $this->TauxAssurePret;
    }

    /**
     * @param TauxAssurePret[] $TauxAssurePret
     * @return \FilippoToso\AfiEsca\ProtectimItalie\ArrayOfTauxAssurePret
     */
    public function setTauxAssurePret(array $TauxAssurePret = null)
    {
      $this->TauxAssurePret = $TauxAssurePret;
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
      return isset($this->TauxAssurePret[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TauxAssurePret
     */
    public function offsetGet($offset)
    {
      return $this->TauxAssurePret[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TauxAssurePret $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TauxAssurePret[] = $value;
      } else {
        $this->TauxAssurePret[$offset] = $value;
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
      unset($this->TauxAssurePret[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TauxAssurePret Return the current element
     */
    public function current()
    {
      return current($this->TauxAssurePret);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TauxAssurePret);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TauxAssurePret);
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
      reset($this->TauxAssurePret);
    }

    /**
     * Countable implementation
     *
     * @return TauxAssurePret Return count of elements
     */
    public function count()
    {
      return count($this->TauxAssurePret);
    }

}
