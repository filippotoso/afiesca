<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class PretData
{

    /**
     * @var int $Differe
     */
    protected $Differe = null;

    /**
     * @var int $Duree
     */
    protected $Duree = null;

    /**
     * @var float $Montant
     */
    protected $Montant = null;

    /**
     * @var int $Numero
     */
    protected $Numero = null;

    /**
     * @var ArrayOfPalierPretData $Paliers
     */
    protected $Paliers = null;

    /**
     * @var float $Taux
     */
    protected $Taux = null;

    /**
     * @var float $TauxInfine
     */
    protected $TauxInfine = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var float $ValeurResiduelle
     */
    protected $ValeurResiduelle = null;

    /**
     * @param int $Differe
     * @param int $Duree
     * @param float $Montant
     * @param int $Numero
     * @param ArrayOfPalierPretData $Paliers
     * @param float $Taux
     * @param float $TauxInfine
     * @param string $Type
     * @param float $ValeurResiduelle
     */
    public function __construct($Differe = null, $Duree = null, $Montant = null, $Numero = null, $Paliers = null, $Taux = null, $TauxInfine = null, $Type = null, $ValeurResiduelle = null)
    {
      $this->Differe = $Differe;
      $this->Duree = $Duree;
      $this->Montant = $Montant;
      $this->Numero = $Numero;
      $this->Paliers = $Paliers;
      $this->Taux = $Taux;
      $this->TauxInfine = $TauxInfine;
      $this->Type = $Type;
      $this->ValeurResiduelle = $ValeurResiduelle;
    }

    /**
     * @return int
     */
    public function getDiffere()
    {
      return $this->Differe;
    }

    /**
     * @param int $Differe
     * @return \FilippoToso\AfiEsca\ProtectimItalie\PretData
     */
    public function setDiffere($Differe)
    {
      $this->Differe = $Differe;
      return $this;
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
     * @return \FilippoToso\AfiEsca\ProtectimItalie\PretData
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
     * @return \FilippoToso\AfiEsca\ProtectimItalie\PretData
     */
    public function setMontant($Montant)
    {
      $this->Montant = $Montant;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumero()
    {
      return $this->Numero;
    }

    /**
     * @param int $Numero
     * @return \FilippoToso\AfiEsca\ProtectimItalie\PretData
     */
    public function setNumero($Numero)
    {
      $this->Numero = $Numero;
      return $this;
    }

    /**
     * @return ArrayOfPalierPretData
     */
    public function getPaliers()
    {
      return $this->Paliers;
    }

    /**
     * @param ArrayOfPalierPretData $Paliers
     * @return \FilippoToso\AfiEsca\ProtectimItalie\PretData
     */
    public function setPaliers($Paliers)
    {
      $this->Paliers = $Paliers;
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
     * @return \FilippoToso\AfiEsca\ProtectimItalie\PretData
     */
    public function setTaux($Taux)
    {
      $this->Taux = $Taux;
      return $this;
    }

    /**
     * @return float
     */
    public function getTauxInfine()
    {
      return $this->TauxInfine;
    }

    /**
     * @param float $TauxInfine
     * @return \FilippoToso\AfiEsca\ProtectimItalie\PretData
     */
    public function setTauxInfine($TauxInfine)
    {
      $this->TauxInfine = $TauxInfine;
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
     * @return \FilippoToso\AfiEsca\ProtectimItalie\PretData
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return float
     */
    public function getValeurResiduelle()
    {
      return $this->ValeurResiduelle;
    }

    /**
     * @param float $ValeurResiduelle
     * @return \FilippoToso\AfiEsca\ProtectimItalie\PretData
     */
    public function setValeurResiduelle($ValeurResiduelle)
    {
      $this->ValeurResiduelle = $ValeurResiduelle;
      return $this;
    }

}
