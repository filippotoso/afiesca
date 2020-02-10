<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class CreateSimulationDataResponse
{

    /**
     * @var SimulationDataMT $CreateSimulationDataResult
     */
    protected $CreateSimulationDataResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SimulationDataMT
     */
    public function getCreateSimulationDataResult()
    {
      return $this->CreateSimulationDataResult;
    }

    /**
     * @param SimulationDataMT $CreateSimulationDataResult
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CreateSimulationDataResponse
     */
    public function setCreateSimulationDataResult($CreateSimulationDataResult)
    {
      $this->CreateSimulationDataResult = $CreateSimulationDataResult;
      return $this;
    }

}
