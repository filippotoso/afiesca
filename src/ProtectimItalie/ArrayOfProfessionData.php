<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class ArrayOfProfessionData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProfessionData[] $ProfessionData
     */
    protected $ProfessionData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProfessionData[]
     */
    public function getProfessionData()
    {
      return $this->ProfessionData;
    }

    /**
     * @param ProfessionData[] $ProfessionData
     * @return \FilippoToso\AfiEsca\ProtectimItalie\ArrayOfProfessionData
     */
    public function setProfessionData(array $ProfessionData = null)
    {
      $this->ProfessionData = $ProfessionData;
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
      return isset($this->ProfessionData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProfessionData
     */
    public function offsetGet($offset)
    {
      return $this->ProfessionData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProfessionData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProfessionData[] = $value;
      } else {
        $this->ProfessionData[$offset] = $value;
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
      unset($this->ProfessionData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProfessionData Return the current element
     */
    public function current()
    {
      return current($this->ProfessionData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProfessionData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProfessionData);
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
      reset($this->ProfessionData);
    }

    /**
     * Countable implementation
     *
     * @return ProfessionData Return count of elements
     */
    public function count()
    {
      return count($this->ProfessionData);
    }

}
