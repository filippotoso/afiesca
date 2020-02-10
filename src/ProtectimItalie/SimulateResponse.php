<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class SimulateResponse
{

    /**
     * @var SimulationResultMT $SimulateResult
     */
    protected $SimulateResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SimulationResultMT
     */
    public function getSimulateResult()
    {
      return $this->SimulateResult;
    }

    /**
     * @param SimulationResultMT $SimulateResult
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SimulateResponse
     */
    public function setSimulateResult($SimulateResult)
    {
      $this->SimulateResult = $SimulateResult;
      return $this;
    }

}
