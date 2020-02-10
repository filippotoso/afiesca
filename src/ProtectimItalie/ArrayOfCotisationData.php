<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class ArrayOfCotisationData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CotisationData[] $CotisationData
     */
    protected $CotisationData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CotisationData[]
     */
    public function getCotisationData()
    {
      return $this->CotisationData;
    }

    /**
     * @param CotisationData[] $CotisationData
     * @return \FilippoToso\AfiEsca\ProtectimItalie\ArrayOfCotisationData
     */
    public function setCotisationData(array $CotisationData = null)
    {
      $this->CotisationData = $CotisationData;
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
      return isset($this->CotisationData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CotisationData
     */
    public function offsetGet($offset)
    {
      return $this->CotisationData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CotisationData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CotisationData[] = $value;
      } else {
        $this->CotisationData[$offset] = $value;
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
      unset($this->CotisationData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CotisationData Return the current element
     */
    public function current()
    {
      return current($this->CotisationData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CotisationData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CotisationData);
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
      reset($this->CotisationData);
    }

    /**
     * Countable implementation
     *
     * @return CotisationData Return count of elements
     */
    public function count()
    {
      return count($this->CotisationData);
    }

}
