<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class SimulationResultMT
{

    /**
     * @var boolean $Error
     */
    protected $Error = null;

    /**
     * @var string $ErrorDescription
     */
    protected $ErrorDescription = null;

    /**
     * @var ArrayOfArrayOfFormaliteMedicaleData $FormalitesMedicales
     */
    protected $FormalitesMedicales = null;

    /**
     * @var ArrayOfArrayOfCotisationRow $TableauCotisationsAssures
     */
    protected $TableauCotisationsAssures = null;

    /**
     * @var ArrayOfCotisationRow $TableauCotisationsGlobal
     */
    protected $TableauCotisationsGlobal = null;

    /**
     * @var ArrayOfTauxAssurePret $TableauTauxAssurePret
     */
    protected $TableauTauxAssurePret = null;

    /**
     * @var ArrayOfdouble $TauxCommission
     */
    protected $TauxCommission = null;

    /**
     * @var ArrayOfArrayOfCotisationData $TotalAssures
     */
    protected $TotalAssures = null;

    /**
     * @var ArrayOfCotisationData $TotalGlobal
     */
    protected $TotalGlobal = null;

    /**
     * @var ArrayOfMontantTotalSouscriptionData $TotalSouscriptionAssures
     */
    protected $TotalSouscriptionAssures = null;

    /**
     * @param boolean $Error
     */
    public function __construct($Error = null)
    {
      $this->Error = $Error;
    }

    /**
     * @return boolean
     */
    public function getError()
    {
      return $this->Error;
    }

    /**
     * @param boolean $Error
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SimulationResultMT
     */
    public function setError($Error)
    {
      $this->Error = $Error;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorDescription()
    {
      return $this->ErrorDescription;
    }

    /**
     * @param string $ErrorDescription
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SimulationResultMT
     */
    public function setErrorDescription($ErrorDescription)
    {
      $this->ErrorDescription = $ErrorDescription;
      return $this;
    }

    /**
     * @return ArrayOfArrayOfFormaliteMedicaleData
     */
    public function getFormalitesMedicales()
    {
      return $this->FormalitesMedicales;
    }

    /**
     * @param ArrayOfArrayOfFormaliteMedicaleData $FormalitesMedicales
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SimulationResultMT
     */
    public function setFormalitesMedicales($FormalitesMedicales)
    {
      $this->FormalitesMedicales = $FormalitesMedicales;
      return $this;
    }

    /**
     * @return ArrayOfArrayOfCotisationRow
     */
    public function getTableauCotisationsAssures()
    {
      return $this->TableauCotisationsAssures;
    }

    /**
     * @param ArrayOfArrayOfCotisationRow $TableauCotisationsAssures
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SimulationResultMT
     */
    public function setTableauCotisationsAssures($TableauCotisationsAssures)
    {
      $this->TableauCotisationsAssures = $TableauCotisationsAssures;
      return $this;
    }

    /**
     * @return ArrayOfCotisationRow
     */
    public function getTableauCotisationsGlobal()
    {
      return $this->TableauCotisationsGlobal;
    }

    /**
     * @param ArrayOfCotisationRow $TableauCotisationsGlobal
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SimulationResultMT
     */
    public function setTableauCotisationsGlobal($TableauCotisationsGlobal)
    {
      $this->TableauCotisationsGlobal = $TableauCotisationsGlobal;
      return $this;
    }

    /**
     * @return ArrayOfTauxAssurePret
     */
    public function getTableauTauxAssurePret()
    {
      return $this->TableauTauxAssurePret;
    }

    /**
     * @param ArrayOfTauxAssurePret $TableauTauxAssurePret
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SimulationResultMT
     */
    public function setTableauTauxAssurePret($TableauTauxAssurePret)
    {
      $this->TableauTauxAssurePret = $TableauTauxAssurePret;
      return $this;
    }

    /**
     * @return ArrayOfdouble
     */
    public function getTauxCommission()
    {
      return $this->TauxCommission;
    }

    /**
     * @param ArrayOfdouble $TauxCommission
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SimulationResultMT
     */
    public function setTauxCommission($TauxCommission)
    {
      $this->TauxCommission = $TauxCommission;
      return $this;
    }

    /**
     * @return ArrayOfArrayOfCotisationData
     */
    public function getTotalAssures()
    {
      return $this->TotalAssures;
    }

    /**
     * @param ArrayOfArrayOfCotisationData $TotalAssures
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SimulationResultMT
     */
    public function setTotalAssures($TotalAssures)
    {
      $this->TotalAssures = $TotalAssures;
      return $this;
    }

    /**
     * @return ArrayOfCotisationData
     */
    public function getTotalGlobal()
    {
      return $this->TotalGlobal;
    }

    /**
     * @param ArrayOfCotisationData $TotalGlobal
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SimulationResultMT
     */
    public function setTotalGlobal($TotalGlobal)
    {
      $this->TotalGlobal = $TotalGlobal;
      return $this;
    }

    /**
     * @return ArrayOfMontantTotalSouscriptionData
     */
    public function getTotalSouscriptionAssures()
    {
      return $this->TotalSouscriptionAssures;
    }

    /**
     * @param ArrayOfMontantTotalSouscriptionData $TotalSouscriptionAssures
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SimulationResultMT
     */
    public function setTotalSouscriptionAssures($TotalSouscriptionAssures)
    {
      $this->TotalSouscriptionAssures = $TotalSouscriptionAssures;
      return $this;
    }

}
