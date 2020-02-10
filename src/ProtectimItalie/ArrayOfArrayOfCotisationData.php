<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class ArrayOfArrayOfCotisationData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ArrayOfCotisationData[] $ArrayOfCotisationData
     */
    protected $ArrayOfCotisationData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfCotisationData[]
     */
    public function getArrayOfCotisationData()
    {
      return $this->ArrayOfCotisationData;
    }

    /**
     * @param ArrayOfCotisationData[] $ArrayOfCotisationData
     * @return \FilippoToso\AfiEsca\ProtectimItalie\ArrayOfArrayOfCotisationData
     */
    public function setArrayOfCotisationData(array $ArrayOfCotisationData = null)
    {
      $this->ArrayOfCotisationData = $ArrayOfCotisationData;
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
      return isset($this->ArrayOfCotisationData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ArrayOfCotisationData
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfCotisationData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ArrayOfCotisationData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfCotisationData[] = $value;
      } else {
        $this->ArrayOfCotisationData[$offset] = $value;
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
      unset($this->ArrayOfCotisationData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ArrayOfCotisationData Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfCotisationData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfCotisationData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfCotisationData);
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
      reset($this->ArrayOfCotisationData);
    }

    /**
     * Countable implementation
     *
     * @return ArrayOfCotisationData Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfCotisationData);
    }

}
