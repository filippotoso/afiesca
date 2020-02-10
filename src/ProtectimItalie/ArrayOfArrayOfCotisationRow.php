<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class ArrayOfArrayOfCotisationRow implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ArrayOfCotisationRow[] $ArrayOfCotisationRow
     */
    protected $ArrayOfCotisationRow = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfCotisationRow[]
     */
    public function getArrayOfCotisationRow()
    {
      return $this->ArrayOfCotisationRow;
    }

    /**
     * @param ArrayOfCotisationRow[] $ArrayOfCotisationRow
     * @return \FilippoToso\AfiEsca\ProtectimItalie\ArrayOfArrayOfCotisationRow
     */
    public function setArrayOfCotisationRow(array $ArrayOfCotisationRow = null)
    {
      $this->ArrayOfCotisationRow = $ArrayOfCotisationRow;
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
      return isset($this->ArrayOfCotisationRow[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ArrayOfCotisationRow
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfCotisationRow[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ArrayOfCotisationRow $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfCotisationRow[] = $value;
      } else {
        $this->ArrayOfCotisationRow[$offset] = $value;
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
      unset($this->ArrayOfCotisationRow[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ArrayOfCotisationRow Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfCotisationRow);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfCotisationRow);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfCotisationRow);
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
      reset($this->ArrayOfCotisationRow);
    }

    /**
     * Countable implementation
     *
     * @return ArrayOfCotisationRow Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfCotisationRow);
    }

}
