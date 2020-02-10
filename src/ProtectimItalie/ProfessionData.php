<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class ProfessionData
{

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $Libelle
     */
    protected $Libelle = null;

    /**
     * @param int $ID
     * @param string $Libelle
     */
    public function __construct($ID = null, $Libelle = null)
    {
      $this->ID = $ID;
      $this->Libelle = $Libelle;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \FilippoToso\AfiEsca\ProtectimItalie\ProfessionData
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
      return $this->Libelle;
    }

    /**
     * @param string $Libelle
     * @return \FilippoToso\AfiEsca\ProtectimItalie\ProfessionData
     */
    public function setLibelle($Libelle)
    {
      $this->Libelle = $Libelle;
      return $this;
    }

}
