<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class CreateSimulationData
{

    /**
     * @var string $login
     */
    protected $login = null;

    /**
     * @var string $password
     */
    protected $password = null;

    
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
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CreateSimulationData
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
     * @return \FilippoToso\AfiEsca\ProtectimItalie\CreateSimulationData
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
