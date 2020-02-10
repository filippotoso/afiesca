<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class SaveDossierSimulation
{

    /**
     * @var string $login
     */
    protected $login = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var SimulationDataMT $data
     */
    protected $data = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getLogin()
    {
      return $this->login;
    }

    /**
     * @param string $login
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SaveDossierSimulation
     */
    public function setLogin($login)
    {
      $this->login = $login;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SaveDossierSimulation
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return SimulationDataMT
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param SimulationDataMT $data
     * @return \FilippoToso\AfiEsca\ProtectimItalie\SaveDossierSimulation
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
