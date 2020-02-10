<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class ArrayOfArrayOfFormaliteMedicaleData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ArrayOfFormaliteMedicaleData[] $ArrayOfFormaliteMedicaleData
     */
    protected $ArrayOfFormaliteMedicaleData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfFormaliteMedicaleData[]
     */
    public function getArrayOfFormaliteMedicaleData()
    {
      return $this->ArrayOfFormaliteMedicaleData;
    }

    /**
     * @param ArrayOfFormaliteMedicaleData[] $ArrayOfFormaliteMedicaleData
     * @return \FilippoToso\AfiEsca\ProtectimItalie\ArrayOfArrayOfFormaliteMedicaleData
     */
    public function setArrayOfFormaliteMedicaleData(array $ArrayOfFormaliteMedicaleData = null)
    {
      $this->ArrayOfFormaliteMedicaleData = $ArrayOfFormaliteMedicaleData;
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
      return isset($this->ArrayOfFormaliteMedicaleData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ArrayOfFormaliteMedicaleData
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfFormaliteMedicaleData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ArrayOfFormaliteMedicaleData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfFormaliteMedicaleData[] = $value;
      } else {
        $this->ArrayOfFormaliteMedicaleData[$offset] = $value;
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
      unset($this->ArrayOfFormaliteMedicaleData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ArrayOfFormaliteMedicaleData Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfFormaliteMedicaleData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfFormaliteMedicaleData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfFormaliteMedicaleData);
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
      reset($this->ArrayOfFormaliteMedicaleData);
    }

    /**
     * Countable implementation
     *
     * @return ArrayOfFormaliteMedicaleData Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfFormaliteMedicaleData);
    }

}
