<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class SaveDossierSimulationResponse
{

    /**
     * @var ArrayOfDossierSimulation $SaveDossierSimulationResult
     */
    protected $SaveDossierSimulationResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfDossierSimulation
     */
    public function getSaveDossierSimulationResult()
    {
      return $this->SaveDossierSimulationResult;
    }

    /**
     * @param ArrayOfDossierSimulation $SaveDossierSimulationResult
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SaveDossierSimulationResponse
     */
    public function setSaveDossierSimulationResult($SaveDossierSimulationResult)
    {
      $this->SaveDossierSimulationResult = $SaveDossierSimulationResult;
      return $this;
    }

}
