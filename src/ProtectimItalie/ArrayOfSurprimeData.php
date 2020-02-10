<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class ArrayOfSurprimeData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SurprimeData[] $SurprimeData
     */
    protected $SurprimeData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SurprimeData[]
     */
    public function getSurprimeData()
    {
      return $this->SurprimeData;
    }

    /**
     * @param SurprimeData[] $SurprimeData
     * @return \FilippoToso\AfiEsca\ProtectimItalie\ArrayOfSurprimeData
     */
    public function setSurprimeData(array $SurprimeData = null)
    {
      $this->SurprimeData = $SurprimeData;
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
      return isset($this->SurprimeData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SurprimeData
     */
    public function offsetGet($offset)
    {
      return $this->SurprimeData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SurprimeData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SurprimeData[] = $value;
      } else {
        $this->SurprimeData[$offset] = $value;
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
      unset($this->SurprimeData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SurprimeData Return the current element
     */
    public function current()
    {
      return current($this->SurprimeData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SurprimeData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SurprimeData);
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
      reset($this->SurprimeData);
    }

    /**
     * Countable implementation
     *
     * @return SurprimeData Return count of elements
     */
    public function count()
    {
      return count($this->SurprimeData);
    }

}
