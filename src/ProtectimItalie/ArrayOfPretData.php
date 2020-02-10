<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class ArrayOfPretData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PretData[] $PretData
     */
    protected $PretData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PretData[]
     */
    public function getPretData()
    {
      return $this->PretData;
    }

    /**
     * @param PretData[] $PretData
     * @return \FilippoToso\AfiEsca\ProtectimItalie\ArrayOfPretData
     */
    public function setPretData(array $PretData = null)
    {
      $this->PretData = $PretData;
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
      return isset($this->PretData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PretData
     */
    public function offsetGet($offset)
    {
      return $this->PretData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PretData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PretData[] = $value;
      } else {
        $this->PretData[$offset] = $value;
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
      unset($this->PretData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PretData Return the current element
     */
    public function current()
    {
      return current($this->PretData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PretData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PretData);
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
      reset($this->PretData);
    }

    /**
     * Countable implementation
     *
     * @return PretData Return count of elements
     */
    public function count()
    {
      return count($this->PretData);
    }

}
