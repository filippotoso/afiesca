<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class GetProfessions
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
     * @var string $codelangue
     */
    protected $codelangue = null;

    
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
     * @return \FilippoToso\AfiEsca\ProtectimItalie\GetProfessions
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
     * @return \FilippoToso\AfiEsca\ProtectimItalie\GetProfessions
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getCodelangue()
    {
      return $this->codelangue;
    }

    /**
     * @param string $codelangue
     * @return \FilippoToso\AfiEsca\ProtectimItalie\GetProfessions
     */
    public function setCodelangue($codelangue)
    {
      $this->codelangue = $codelangue;
      return $this;
    }

}
