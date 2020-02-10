<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class MontantTotalSouscriptionData
{

    /**
     * @var float $FraisDossierCompagnie
     */
    protected $FraisDossierCompagnie = null;

    /**
     * @var float $FraisDossierIntermediaire
     */
    protected $FraisDossierIntermediaire = null;

    /**
     * @var float $MontantFraisDossierTTC
     */
    protected $MontantFraisDossierTTC = null;

    /**
     * @var float $MontantPremierePrimeTTC
     */
    protected $MontantPremierePrimeTTC = null;

    /**
     * @var float $MontantTotalTTC
     */
    protected $MontantTotalTTC = null;

    /**
     * @var float $TaxeFraisDossier
     */
    protected $TaxeFraisDossier = null;

    /**
     * @param float $FraisDossierCompagnie
     * @param float $FraisDossierIntermediaire
     * @param float $MontantFraisDossierTTC
     * @param float $MontantPremierePrimeTTC
     * @param float $MontantTotalTTC
     * @param float $TaxeFraisDossier
     */
    public function __construct($FraisDossierCompagnie = null, $FraisDossierIntermediaire = null, $MontantFraisDossierTTC = null, $MontantPremierePrimeTTC = null, $MontantTotalTTC = null, $TaxeFraisDossier = null)
    {
      $this->FraisDossierCompagnie = $FraisDossierCompagnie;
      $this->FraisDossierIntermediaire = $FraisDossierIntermediaire;
      $this->MontantFraisDossierTTC = $MontantFraisDossierTTC;
      $this->MontantPremierePrimeTTC = $MontantPremierePrimeTTC;
      $this->MontantTotalTTC = $MontantTotalTTC;
      $this->TaxeFraisDossier = $TaxeFraisDossier;
    }

    /**
     * @return float
     */
    public function getFraisDossierCompagnie()
    {
      return $this->FraisDossierCompagnie;
    }

    /**
     * @param float $FraisDossierCompagnie
     * @return \FilippoToso\AfiEsca\ProtectimItalie\MontantTotalSouscriptionData
     */
    public function setFraisDossierCompagnie($FraisDossierCompagnie)
    {
      $this->FraisDossierCompagnie = $FraisDossierCompagnie;
      return $this;
    }

    /**
     * @return float
     */
    public function getFraisDossierIntermediaire()
    {
      return $this->FraisDossierIntermediaire;
    }

    /**
     * @param float $FraisDossierIntermediaire
     * @return \FilippoToso\AfiEsca\ProtectimItalie\MontantTotalSouscriptionData
     */
    public function setFraisDossierIntermediaire($FraisDossierIntermediaire)
    {
      $this->FraisDossierIntermediaire = $FraisDossierIntermediaire;
      return $this;
    }

    /**
     * @return float
     */
    public function getMontantFraisDossierTTC()
    {
      return $this->MontantFraisDossierTTC;
    }

    /**
     * @param float $MontantFraisDossierTTC
     * @return \FilippoToso\AfiEsca\ProtectimItalie\MontantTotalSouscriptionData
     */
    public function setMontantFraisDossierTTC($MontantFraisDossierTTC)
    {
      $this->MontantFraisDossierTTC = $MontantFraisDossierTTC;
      return $this;
    }

    /**
     * @return float
     */
    public function getMontantPremierePrimeTTC()
    {
      return $this->MontantPremierePrimeTTC;
    }

    /**
     * @param float $MontantPremierePrimeTTC
     * @return \FilippoToso\AfiEsca\ProtectimItalie\MontantTotalSouscriptionData
     */
    public function setMontantPremierePrimeTTC($MontantPremierePrimeTTC)
    {
      $this->MontantPremierePrimeTTC = $MontantPremierePrimeTTC;
      return $this;
    }

    /**
     * @return float
     */
    public function getMontantTotalTTC()
    {
      return $this->MontantTotalTTC;
    }

    /**
     * @param float $MontantTotalTTC
     * @return \FilippoToso\AfiEsca\ProtectimItalie\MontantTotalSouscriptionData
     */
    public function setMontantTotalTTC($MontantTotalTTC)
    {
      $this->MontantTotalTTC = $MontantTotalTTC;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxeFraisDossier()
    {
      return $this->TaxeFraisDossier;
    }

    /**
     * @param float $TaxeFraisDossier
     * @return \FilippoToso\AfiEsca\ProtectimItalie\MontantTotalSouscriptionData
     */
    public function setTaxeFraisDossier($TaxeFraisDossier)
    {
      $this->TaxeFraisDossier = $TaxeFraisDossier;
      return $this;
    }

}
