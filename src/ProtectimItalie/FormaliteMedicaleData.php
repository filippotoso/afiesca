<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class FormaliteMedicaleData
{

    /**
     * @var string $Detail
     */
    protected $Detail = null;

    /**
     * @var string $Label
     */
    protected $Label = null;

    /**
     * @param string $Detail
     * @param string $Label
     */
    public function __construct($Detail = null, $Label = null)
    {
      $this->Detail = $Detail;
      $this->Label = $Label;
    }

    /**
     * @return string
     */
    public function getDetail()
    {
      return $this->Detail;
    }

    /**
     * @param string $Detail
     * @return \FilippoToso\AfiEsca\ProtectimItalie\FormaliteMedicaleData
     */
    public function setDetail($Detail)
    {
      $this->Detail = $Detail;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->Label;
    }

    /**
     * @param string $Label
     * @return \FilippoToso\AfiEsca\ProtectimItalie\FormaliteMedicaleData
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
      return $this;
    }

}
