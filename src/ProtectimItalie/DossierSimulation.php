<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class DossierSimulation
{

    /**
     * @var string $NumeroDossier
     */
    protected $NumeroDossier = null;

    /**
     * @var string $Nom
     */
    protected $Nom = null;

    /**
     * @var string $Prenom
     */
    protected $Prenom = null;

    /**
     * @var string $URL
     */
    protected $URL = null;

    /**
     * @param string $NumeroDossier
     * @param string $Nom
     * @param string $Prenom
     * @param string $URL
     */
    public function __construct($NumeroDossier = null, $Nom = null, $Prenom = null, $URL = null)
    {
      $this->NumeroDossier = $NumeroDossier;
      $this->Nom = $Nom;
      $this->Prenom = $Prenom;
      $this->URL = $URL;
    }

    /**
     * @return string
     */
    public function getNumeroDossier()
    {
      return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return \FilippoToso\AfiEsca\ProtectimItalie\DossierSimulation
     */
    public function setNumeroDossier($NumeroDossier)
    {
      $this->NumeroDossier = $NumeroDossier;
      return $this;
    }

    /**
     * @return string
     */
    public function getNom()
    {
      return $this->Nom;
    }

    /**
     * @param string $Nom
     * @return \FilippoToso\AfiEsca\ProtectimItalie\DossierSimulation
     */
    public function setNom($Nom)
    {
      $this->Nom = $Nom;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
      return $this->Prenom;
    }

    /**
     * @param string $Prenom
     * @return \FilippoToso\AfiEsca\ProtectimItalie\DossierSimulation
     */
    public function setPrenom($Prenom)
    {
      $this->Prenom = $Prenom;
      return $this;
    }

    /**
     * @return string
     */
    public function getURL()
    {
      return $this->URL;
    }

    /**
     * @param string $URL
     * @return \FilippoToso\AfiEsca\ProtectimItalie\DossierSimulation
     */
    public function setURL($URL)
    {
      $this->URL = $URL;
      return $this;
    }

}
