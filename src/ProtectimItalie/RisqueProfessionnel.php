<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class RisqueProfessionnel
{

    /**
     * @var string $CSP
     */
    protected $CSP = null;

    /**
     * @var boolean $TravailEnHauteur
     */
    protected $TravailEnHauteur = null;

    /**
     * @var boolean $ContactAvecProduitDangereux
     */
    protected $ContactAvecProduitDangereux = null;

    /**
     * @var boolean $TravailManuel
     */
    protected $TravailManuel = null;

    /**
     * @var boolean $Deplacements
     */
    protected $Deplacements = null;

    /**
     * @param string $CSP
     * @param boolean $TravailEnHauteur
     * @param boolean $ContactAvecProduitDangereux
     * @param boolean $TravailManuel
     * @param boolean $Deplacements
     */
    public function __construct($CSP = null, $TravailEnHauteur = null, $ContactAvecProduitDangereux = null, $TravailManuel = null, $Deplacements = null)
    {
      $this->CSP = $CSP;
      $this->TravailEnHauteur = $TravailEnHauteur;
      $this->ContactAvecProduitDangereux = $ContactAvecProduitDangereux;
      $this->TravailManuel = $TravailManuel;
      $this->Deplacements = $Deplacements;
    }

    /**
     * @return string
     */
    public function getCSP()
    {
      return $this->CSP;
    }

    /**
     * @param string $CSP
     * @return \FilippoToso\AfiEsca\ProtectimItalie\RisqueProfessionnel
     */
    public function setCSP($CSP)
    {
      $this->CSP = $CSP;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTravailEnHauteur()
    {
      return $this->TravailEnHauteur;
    }

    /**
     * @param boolean $TravailEnHauteur
     * @return \FilippoToso\AfiEsca\ProtectimItalie\RisqueProfessionnel
     */
    public function setTravailEnHauteur($TravailEnHauteur)
    {
      $this->TravailEnHauteur = $TravailEnHauteur;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getContactAvecProduitDangereux()
    {
      return $this->ContactAvecProduitDangereux;
    }

    /**
     * @param boolean $ContactAvecProduitDangereux
     * @return \FilippoToso\AfiEsca\ProtectimItalie\RisqueProfessionnel
     */
    public function setContactAvecProduitDangereux($ContactAvecProduitDangereux)
    {
      $this->ContactAvecProduitDangereux = $ContactAvecProduitDangereux;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTravailManuel()
    {
      return $this->TravailManuel;
    }

    /**
     * @param boolean $TravailManuel
     * @return \FilippoToso\AfiEsca\ProtectimItalie\RisqueProfessionnel
     */
    public function setTravailManuel($TravailManuel)
    {
      $this->TravailManuel = $TravailManuel;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDeplacements()
    {
      return $this->Deplacements;
    }

    /**
     * @param boolean $Deplacements
     * @return \FilippoToso\AfiEsca\ProtectimItalie\RisqueProfessionnel
     */
    public function setDeplacements($Deplacements)
    {
      $this->Deplacements = $Deplacements;
      return $this;
    }

}
