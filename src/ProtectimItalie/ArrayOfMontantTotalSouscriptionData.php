<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class ArrayOfMontantTotalSouscriptionData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MontantTotalSouscriptionData[] $MontantTotalSouscriptionData
     */
    protected $MontantTotalSouscriptionData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MontantTotalSouscriptionData[]
     */
    public function getMontantTotalSouscriptionData()
    {
      return $this->MontantTotalSouscriptionData;
    }

    /**
     * @param MontantTotalSouscriptionData[] $MontantTotalSouscriptionData
     * @return \FilippoToso\AfiEsca\ProtectimItalie\ArrayOfMontantTotalSouscriptionData
     */
    public function setMontantTotalSouscriptionData(array $MontantTotalSouscriptionData = null)
    {
      $this->MontantTotalSouscriptionData = $MontantTotalSouscriptionData;
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
      return isset($this->MontantTotalSouscriptionData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MontantTotalSouscriptionData
     */
    public function offsetGet($offset)
    {
      return $this->MontantTotalSouscriptionData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MontantTotalSouscriptionData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MontantTotalSouscriptionData[] = $value;
      } else {
        $this->MontantTotalSouscriptionData[$offset] = $value;
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
      unset($this->MontantTotalSouscriptionData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MontantTotalSouscriptionData Return the current element
     */
    public function current()
    {
      return current($this->MontantTotalSouscriptionData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MontantTotalSouscriptionData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MontantTotalSouscriptionData);
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
      reset($this->MontantTotalSouscriptionData);
    }

    /**
     * Countable implementation
     *
     * @return MontantTotalSouscriptionData Return count of elements
     */
    public function count()
    {
      return count($this->MontantTotalSouscriptionData);
    }

}
