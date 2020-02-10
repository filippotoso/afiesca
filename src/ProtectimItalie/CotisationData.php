<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class CotisationData
{

    /**
     * @var string $Garantie
     */
    protected $Garantie = null;

    /**
     * @var float $Prime
     */
    protected $Prime = null;

    /**
     * @var float $PrimeHT
     */
    protected $PrimeHT = null;

    /**
     * @var float $Taxe
     */
    protected $Taxe = null;

    /**
     * @var float $SurprimeMedicalePCHT
     */
    protected $SurprimeMedicalePCHT = null;

    /**
     * @var float $SurprimeMedicalePMHT
     */
    protected $SurprimeMedicalePMHT = null;

    /**
     * @var float $SurprimeNonMedicalePCHT
     */
    protected $SurprimeNonMedicalePCHT = null;

    /**
     * @var float $SurprimeNonMedicalePMHT
     */
    protected $SurprimeNonMedicalePMHT = null;

    /**
     * @param string $Garantie
     * @param float $Prime
     * @param float $PrimeHT
     * @param float $Taxe
     * @param float $SurprimeMedicalePCHT
     * @param float $SurprimeMedicalePMHT
     * @param float $SurprimeNonMedicalePCHT
     * @param float $SurprimeNonMedicalePMHT
     */
    public function __construct($Garantie = null, $Prime = null, $PrimeHT = null, $Taxe = null, $SurprimeMedicalePCHT = null, $SurprimeMedicalePMHT = null, $SurprimeNonMedicalePCHT = null, $SurprimeNonMedicalePMHT = null)
    {
      $this->Garantie = $Garantie;
      $this->Prime = $Prime;
      $this->PrimeHT = $PrimeHT;
      $this->Taxe = $Taxe;
      $this->SurprimeMedicalePCHT = $SurprimeMedicalePCHT;
      $this->SurprimeMedicalePMHT = $SurprimeMedicalePMHT;
      $this->SurprimeNonMedicalePCHT = $SurprimeNonMedicalePCHT;
      $this->SurprimeNonMedicalePMHT = $SurprimeNonMedicalePMHT;
    }

    /**
     * @return string
     */
    public function getGarantie()
    {
      return $this->Garantie;
    }

    /**
     * @param string $Garantie
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CotisationData
     */
    public function setGarantie($Garantie)
    {
      $this->Garantie = $Garantie;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrime()
    {
      return $this->Prime;
    }

    /**
     * @param float $Prime
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CotisationData
     */
    public function setPrime($Prime)
    {
      $this->Prime = $Prime;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrimeHT()
    {
      return $this->PrimeHT;
    }

    /**
     * @param float $PrimeHT
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CotisationData
     */
    public function setPrimeHT($PrimeHT)
    {
      $this->PrimeHT = $PrimeHT;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxe()
    {
      return $this->Taxe;
    }

    /**
     * @param float $Taxe
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CotisationData
     */
    public function setTaxe($Taxe)
    {
      $this->Taxe = $Taxe;
      return $this;
    }

    /**
     * @return float
     */
    public function getSurprimeMedicalePCHT()
    {
      return $this->SurprimeMedicalePCHT;
    }

    /**
     * @param float $SurprimeMedicalePCHT
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CotisationData
     */
    public function setSurprimeMedicalePCHT($SurprimeMedicalePCHT)
    {
      $this->SurprimeMedicalePCHT = $SurprimeMedicalePCHT;
      return $this;
    }

    /**
     * @return float
     */
    public function getSurprimeMedicalePMHT()
    {
      return $this->SurprimeMedicalePMHT;
    }

    /**
     * @param float $SurprimeMedicalePMHT
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CotisationData
     */
    public function setSurprimeMedicalePMHT($SurprimeMedicalePMHT)
    {
      $this->SurprimeMedicalePMHT = $SurprimeMedicalePMHT;
      return $this;
    }

    /**
     * @return float
     */
    public function getSurprimeNonMedicalePCHT()
    {
      return $this->SurprimeNonMedicalePCHT;
    }

    /**
     * @param float $SurprimeNonMedicalePCHT
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CotisationData
     */
    public function setSurprimeNonMedicalePCHT($SurprimeNonMedicalePCHT)
    {
      $this->SurprimeNonMedicalePCHT = $SurprimeNonMedicalePCHT;
      return $this;
    }

    /**
     * @return float
     */
    public function getSurprimeNonMedicalePMHT()
    {
      return $this->SurprimeNonMedicalePMHT;
    }

    /**
     * @param float $SurprimeNonMedicalePMHT
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CotisationData
     */
    public function setSurprimeNonMedicalePMHT($SurprimeNonMedicalePMHT)
    {
      $this->SurprimeNonMedicalePMHT = $SurprimeNonMedicalePMHT;
      return $this;
    }

}
