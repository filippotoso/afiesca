<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class GetProfessionsResponse
{

    /**
     * @var ArrayOfProfessionData $GetProfessionsResult
     */
    protected $GetProfessionsResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfProfessionData
     */
    public function getGetProfessionsResult()
    {
      return $this->GetProfessionsResult;
    }

    /**
     * @param ArrayOfProfessionData $GetProfessionsResult
     * @return \FilippoToso\AfiEsca\ProtectimItalie\GetProfessionsResponse
     */
    public function setGetProfessionsResult($GetProfessionsResult)
    {
      $this->GetProfessionsResult = $GetProfessionsResult;
      return $this;
    }

}
