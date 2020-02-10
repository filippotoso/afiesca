<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class PalierPretData
{

    /**
     * @var int $Duree
     */
    protected $Duree = null;

    /**
     * @var float $Montant
     */
    protected $Montant = null;

    /**
     * @var float $Taux
     */
    protected $Taux = null;

    /**
     * @param int $Duree
     * @param float $Montant
     * @param float $Taux
     */
    public function __construct($Duree = null, $Montant = null, $Taux = null)
    {
      $this->Duree = $Duree;
      $this->Montant = $Montant;
      $this->Taux = $Taux;
    }

    /**
     * @return int
     */
    public function getDuree()
    {
      return $this->Duree;
    }

    /**
     * @param int $Duree
     * @return \FilippoToso\AfiEsca\ProtectimItalie\PalierPretData
     */
    public function setDuree($Duree)
    {
      $this->Duree = $Duree;
      return $this;
    }

    /**
     * @return float
     */
    public function getMontant()
    {
      return $this->Montant;
    }

    /**
     * @param float $Montant
     * @return \FilippoToso\AfiEsca\ProtectimItalie\PalierPretData
     */
    public function setMontant($Montant)
    {
      $this->Montant = $Montant;
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
     * @return \FilippoToso\AfiEsca\ProtectimItalie\PalierPretData
     */
    public function setTaux($Taux)
    {
      $this->Taux = $Taux;
      return $this;
    }

}
