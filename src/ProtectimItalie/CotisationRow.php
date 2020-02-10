<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class CotisationRow
{

    /**
     * @var int $Age
     */
    protected $Age = null;

    /**
     * @var int $Annee
     */
    protected $Annee = null;

    /**
     * @var ArrayOfCotisationData $Cotisations
     */
    protected $Cotisations = null;

    /**
     * @var float $FrAcquisition
     */
    protected $FrAcquisition = null;

    /**
     * @var float $FrGestion
     */
    protected $FrGestion = null;

    /**
     * @var float $FrIntermediation
     */
    protected $FrIntermediation = null;

    /**
     * @var float $MontantKRD
     */
    protected $MontantKRD = null;

    /**
     * @var int $Pret
     */
    protected $Pret = null;

    /**
     * @var float $Taxes
     */
    protected $Taxes = null;

    /**
     * @var float $Total
     */
    protected $Total = null;

    /**
     * @param int $Age
     * @param int $Annee
     * @param ArrayOfCotisationData $Cotisations
     * @param float $FrAcquisition
     * @param float $FrGestion
     * @param float $FrIntermediation
     * @param float $MontantKRD
     * @param int $Pret
     * @param float $Taxes
     * @param float $Total
     */
    public function __construct($Age = null, $Annee = null, $Cotisations = null, $FrAcquisition = null, $FrGestion = null, $FrIntermediation = null, $MontantKRD = null, $Pret = null, $Taxes = null, $Total = null)
    {
      $this->Age = $Age;
      $this->Annee = $Annee;
      $this->Cotisations = $Cotisations;
      $this->FrAcquisition = $FrAcquisition;
      $this->FrGestion = $FrGestion;
      $this->FrIntermediation = $FrIntermediation;
      $this->MontantKRD = $MontantKRD;
      $this->Pret = $Pret;
      $this->Taxes = $Taxes;
      $this->Total = $Total;
    }

    /**
     * @return int
     */
    public function getAge()
    {
      return $this->Age;
    }

    /**
     * @param int $Age
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CotisationRow
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
      return $this;
    }

    /**
     * @return int
     */
    public function getAnnee()
    {
      return $this->Annee;
    }

    /**
     * @param int $Annee
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CotisationRow
     */
    public function setAnnee($Annee)
    {
      $this->Annee = $Annee;
      return $this;
    }

    /**
     * @return ArrayOfCotisationData
     */
    public function getCotisations()
    {
      return $this->Cotisations;
    }

    /**
     * @param ArrayOfCotisationData $Cotisations
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CotisationRow
     */
    public function setCotisations($Cotisations)
    {
      $this->Cotisations = $Cotisations;
      return $this;
    }

    /**
     * @return float
     */
    public function getFrAcquisition()
    {
      return $this->FrAcquisition;
    }

    /**
     * @param float $FrAcquisition
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CotisationRow
     */
    public function setFrAcquisition($FrAcquisition)
    {
      $this->FrAcquisition = $FrAcquisition;
      return $this;
    }

    /**
     * @return float
     */
    public function getFrGestion()
    {
      return $this->FrGestion;
    }

    /**
     * @param float $FrGestion
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CotisationRow
     */
    public function setFrGestion($FrGestion)
    {
      $this->FrGestion = $FrGestion;
      return $this;
    }

    /**
     * @return float
     */
    public function getFrIntermediation()
    {
      return $this->FrIntermediation;
    }

    /**
     * @param float $FrIntermediation
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CotisationRow
     */
    public function setFrIntermediation($FrIntermediation)
    {
      $this->FrIntermediation = $FrIntermediation;
      return $this;
    }

    /**
     * @return float
     */
    public function getMontantKRD()
    {
      return $this->MontantKRD;
    }

    /**
     * @param float $MontantKRD
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CotisationRow
     */
    public function setMontantKRD($MontantKRD)
    {
      $this->MontantKRD = $MontantKRD;
      return $this;
    }

    /**
     * @return int
     */
    public function getPret()
    {
      return $this->Pret;
    }

    /**
     * @param int $Pret
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CotisationRow
     */
    public function setPret($Pret)
    {
      $this->Pret = $Pret;
      return $this;
    }

    /**
     * @return float
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param float $Taxes
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CotisationRow
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
      return $this->Total;
    }

    /**
     * @param float $Total
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CotisationRow
     */
    public function setTotal($Total)
    {
      $this->Total = $Total;
      return $this;
    }

}
