<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class TauxAssurePret
{

    /**
     * @var int $NumPret
     */
    protected $NumPret = null;

    /**
     * @var string $TypeTaux
     */
    protected $TypeTaux = null;

    /**
     * @var float $Taux
     */
    protected $Taux = null;

    /**
     * @param int $NumPret
     * @param string $TypeTaux
     * @param float $Taux
     */
    public function __construct($NumPret = null, $TypeTaux = null, $Taux = null)
    {
      $this->NumPret = $NumPret;
      $this->TypeTaux = $TypeTaux;
      $this->Taux = $Taux;
    }

    /**
     * @return int
     */
    public function getNumPret()
    {
      return $this->NumPret;
    }

    /**
     * @param int $NumPret
     * @return \FilippoToso\AfiEsca\ProtectimItalie\TauxAssurePret
     */
    public function setNumPret($NumPret)
    {
      $this->NumPret = $NumPret;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeTaux()
    {
      return $this->TypeTaux;
    }

    /**
     * @param string $TypeTaux
     * @return \FilippoToso\AfiEsca\ProtectimItalie\TauxAssurePret
     */
    public function setTypeTaux($TypeTaux)
    {
      $this->TypeTaux = $TypeTaux;
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
     * @return \FilippoToso\AfiEsca\ProtectimItalie\TauxAssurePret
     */
    public function setTaux($Taux)
    {
      $this->Taux = $Taux;
      return $this;
    }

}
