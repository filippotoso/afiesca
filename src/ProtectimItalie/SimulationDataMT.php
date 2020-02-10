<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class SimulationDataMT
{

    /**
     * @var ArrayOfAssureData $Assures
     */
    protected $Assures = null;

    /**
     * @var string $CodeLangue
     */
    protected $CodeLangue = null;

    /**
     * @var TypeCotisation $CotisationType
     */
    protected $CotisationType = null;

    /**
     * @var \DateTime $DateEffet
     */
    protected $DateEffet = null;

    /**
     * @var TypePeriodicite $Periodicite
     */
    protected $Periodicite = null;

    /**
     * @var ArrayOfPretData $Prets
     */
    protected $Prets = null;

    /**
     * @param TypeCotisation $CotisationType
     * @param TypePeriodicite $Periodicite
     */
    public function __construct($CotisationType = null, $Periodicite = null)
    {
      $this->CotisationType = $CotisationType;
      $this->Periodicite = $Periodicite;
    }

    /**
     * @return ArrayOfAssureData
     */
    public function getAssures()
    {
      return $this->Assures;
    }

    /**
     * @param ArrayOfAssureData $Assures
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SimulationDataMT
     */
    public function setAssures($Assures)
    {
      $this->Assures = $Assures;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodeLangue()
    {
      return $this->CodeLangue;
    }

    /**
     * @param string $CodeLangue
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SimulationDataMT
     */
    public function setCodeLangue($CodeLangue)
    {
      $this->CodeLangue = $CodeLangue;
      return $this;
    }

    /**
     * @return TypeCotisation
     */
    public function getCotisationType()
    {
      return $this->CotisationType;
    }

    /**
     * @param TypeCotisation $CotisationType
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SimulationDataMT
     */
    public function setCotisationType($CotisationType)
    {
      $this->CotisationType = $CotisationType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateEffet()
    {
      if ($this->DateEffet == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateEffet);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateEffet
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SimulationDataMT
     */
    public function setDateEffet(\DateTime $DateEffet = null)
    {
      if ($DateEffet == null) {
       $this->DateEffet = null;
      } else {
        $this->DateEffet = $DateEffet->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return TypePeriodicite
     */
    public function getPeriodicite()
    {
      return $this->Periodicite;
    }

    /**
     * @param TypePeriodicite $Periodicite
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SimulationDataMT
     */
    public function setPeriodicite($Periodicite)
    {
      $this->Periodicite = $Periodicite;
      return $this;
    }

    /**
     * @return ArrayOfPretData
     */
    public function getPrets()
    {
      return $this->Prets;
    }

    /**
     * @param ArrayOfPretData $Prets
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SimulationDataMT
     */
    public function setPrets($Prets)
    {
      $this->Prets = $Prets;
      return $this;
    }

}
