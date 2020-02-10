<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class ArrayOfFormaliteMedicaleData
{

    /**
     * @var FormaliteMedicaleData $FormaliteMedicaleData
     */
    protected $FormaliteMedicaleData = null;

    /**
     * @param FormaliteMedicaleData $FormaliteMedicaleData
     */
    public function __construct($FormaliteMedicaleData = null)
    {
      $this->FormaliteMedicaleData = $FormaliteMedicaleData;
    }

    /**
     * @return FormaliteMedicaleData
     */
    public function getFormaliteMedicaleData()
    {
      return $this->FormaliteMedicaleData;
    }

    /**
     * @param FormaliteMedicaleData $FormaliteMedicaleData
     * @return \FilippoToso\AfiEsca\ProtectimItalie\ArrayOfFormaliteMedicaleData
     */
    public function setFormaliteMedicaleData($FormaliteMedicaleData)
    {
      $this->FormaliteMedicaleData = $FormaliteMedicaleData;
      return $this;
    }

}
