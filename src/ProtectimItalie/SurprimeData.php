<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class SurprimeData
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var float $Taux
     */
    protected $Taux = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @param string $Code
     * @param float $Taux
     * @param string $Type
     */
    public function __construct($Code = null, $Taux = null, $Type = null)
    {
      $this->Code = $Code;
      $this->Taux = $Taux;
      $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SurprimeData
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaux()
    {
      return $this->Taux;
    }

    /**
     * @param float $Taux
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SurprimeData
     */
    public function setTaux($Taux)
    {
      $this->Taux = $Taux;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SurprimeData
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
