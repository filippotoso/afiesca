<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class ArrayOfPalierPretData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PalierPretData[] $PalierPretData
     */
    protected $PalierPretData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PalierPretData[]
     */
    public function getPalierPretData()
    {
      return $this->PalierPretData;
    }

    /**
     * @param PalierPretData[] $PalierPretData
     * @return \FilippoToso\AfiEsca\ProtectimItalie\ArrayOfPalierPretData
     */
    public function setPalierPretData(array $PalierPretData = null)
    {
      $this->PalierPretData = $PalierPretData;
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
      return isset($this->PalierPretData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PalierPretData
     */
    public function offsetGet($offset)
    {
      return $this->PalierPretData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PalierPretData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PalierPretData[] = $value;
      } else {
        $this->PalierPretData[$offset] = $value;
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
      unset($this->PalierPretData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PalierPretData Return the current element
     */
    public function current()
    {
      return current($this->PalierPretData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PalierPretData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PalierPretData);
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
      reset($this->PalierPretData);
    }

    /**
     * Countable implementation
     *
     * @return PalierPretData Return count of elements
     */
    public function count()
    {
      return count($this->PalierPretData);
    }

}
