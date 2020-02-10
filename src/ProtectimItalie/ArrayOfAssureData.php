<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class ArrayOfAssureData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AssureData[] $AssureData
     */
    protected $AssureData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AssureData[]
     */
    public function getAssureData()
    {
      return $this->AssureData;
    }

    /**
     * @param AssureData[] $AssureData
     * @return \FilippoToso\AfiEsca\ProtectimItalie\ArrayOfAssureData
     */
    public function setAssureData(array $AssureData = null)
    {
      $this->AssureData = $AssureData;
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
      return isset($this->AssureData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AssureData
     */
    public function offsetGet($offset)
    {
      return $this->AssureData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AssureData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AssureData[] = $value;
      } else {
        $this->AssureData[$offset] = $value;
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
      unset($this->AssureData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AssureData Return the current element
     */
    public function current()
    {
      return current($this->AssureData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AssureData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AssureData);
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
      reset($this->AssureData);
    }

    /**
     * Countable implementation
     *
     * @return AssureData Return count of elements
     */
    public function count()
    {
      return count($this->AssureData);
    }

}
