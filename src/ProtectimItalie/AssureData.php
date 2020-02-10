<?php

namespace FilippoToso\AfiEsca\ProtectimItalie;

class AssureData
{

    /**
     * @var TypeCivilite $Civilite
     */
    protected $Civilite = null;

    /**
     * @var \DateTime $DateNaissance
     */
    protected $DateNaissance = null;

    /**
     * @var boolean $Fumeur
     */
    protected $Fumeur = null;

    /**
     * @var ArrayOfstring $Garanties
     */
    protected $Garanties = null;

    /**
     * @var ArrayOfstring $Options
     */
    protected $Options = null;

    /**
     * @var int $Poids
     */
    protected $Poids = null;

    /**
     * @var int $ProfessionID
     */
    protected $ProfessionID = null;

    /**
     * @var float $Quotite
     */
    protected $Quotite = null;

    /**
     * @var ArrayOfSurprimeData $Surprimes
     */
    protected $Surprimes = null;

    /**
     * @var int $Taille
     */
    protected $Taille = null;

    /**
     * @var float $TauxCommission
     */
    protected $TauxCommission = null;

    /**
     * @var string $Nom
     */
    protected $Nom = null;

    /**
     * @var string $Prenom
     */
    protected $Prenom = null;

    /**
     * @var string $Telephone
     */
    protected $Telephone = null;

    /**
     * @var string $EMail
     */
    protected $EMail = null;

    /**
     * @var RisqueProfessionnel $RisqueProfessionnel
     */
    protected $RisqueProfessionnel = null;

    /**
     * @param TypeCivilite $Civilite
     * @param \DateTime $DateNaissance
     * @param boolean $Fumeur
     * @param ArrayOfstring $Garanties
     * @param ArrayOfstring $Options
     * @param int $Poids
     * @param int $ProfessionID
     * @param float $Quotite
     * @param ArrayOfSurprimeData $Surprimes
     * @param int $Taille
     * @param float $TauxCommission
     * @param string $Nom
     * @param string $Prenom
     * @param string $Telephone
     * @param string $EMail
     * @param RisqueProfessionnel $RisqueProfessionnel
     */
    public function __construct($Civilite = null, \DateTime $DateNaissance = null, $Fumeur = null, $Garanties = null, $Options = null, $Poids = null, $ProfessionID = null, $Quotite = null, $Surprimes = null, $Taille = null, $TauxCommission = null, $Nom = null, $Prenom = null, $Telephone = null, $EMail = null, $RisqueProfessionnel = null)
    {
      $this->Civilite = $Civilite;
      $this->DateNaissance = $DateNaissance ? $DateNaissance->format(\DateTime::ATOM) : null;
      $this->Fumeur = $Fumeur;
      $this->Garanties = $Garanties;
      $this->Options = $Options;
      $this->Poids = $Poids;
      $this->ProfessionID = $ProfessionID;
      $this->Quotite = $Quotite;
      $this->Surprimes = $Surprimes;
      $this->Taille = $Taille;
      $this->TauxCommission = $TauxCommission;
      $this->Nom = $Nom;
      $this->Prenom = $Prenom;
      $this->Telephone = $Telephone;
      $this->EMail = $EMail;
      $this->RisqueProfessionnel = $RisqueProfessionnel;
    }

    /**
     * @return TypeCivilite
     */
    public function getCivilite()
    {
      return $this->Civilite;
    }

    /**
     * @param TypeCivilite $Civilite
     * @return \FilippoToso\AfiEsca\ProtectimItalie\AssureData
     */
    public function setCivilite($Civilite)
    {
      $this->Civilite = $Civilite;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateNaissance()
    {
      if ($this->DateNaissance == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateNaissance);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateNaissance
     * @return \FilippoToso\AfiEsca\ProtectimItalie\AssureData
     */
    public function setDateNaissance(\DateTime $DateNaissance)
    {
      $this->DateNaissance = $DateNaissance->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFumeur()
    {
      return $this->Fumeur;
    }

    /**
     * @param boolean $Fumeur
     * @return \FilippoToso\AfiEsca\ProtectimItalie\AssureData
     */
    public function setFumeur($Fumeur)
    {
      $this->Fumeur = $Fumeur;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getGaranties()
    {
      return $this->Garanties;
    }

    /**
     * @param ArrayOfstring $Garanties
     * @return \FilippoToso\AfiEsca\ProtectimItalie\AssureData
     */
    public function setGaranties($Garanties)
    {
      $this->Garanties = $Garanties;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getOptions()
    {
      return $this->Options;
    }

    /**
     * @param ArrayOfstring $Options
     * @return \FilippoToso\AfiEsca\ProtectimItalie\AssureData
     */
    public function setOptions($Options)
    {
      $this->Options = $Options;
      return $this;
    }

    /**
     * @return int
     */
    public function getPoids()
    {
      return $this->Poids;
    }

    /**
     * @param int $Poids
     * @return \FilippoToso\AfiEsca\ProtectimItalie\AssureData
     */
    public function setPoids($Poids)
    {
      $this->Poids = $Poids;
      return $this;
    }

    /**
     * @return int
     */
    public function getProfessionID()
    {
      return $this->ProfessionID;
    }

    /**
     * @param int $ProfessionID
     * @return \FilippoToso\AfiEsca\ProtectimItalie\AssureData
     */
    public function setProfessionID($ProfessionID)
    {
      $this->ProfessionID = $ProfessionID;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuotite()
    {
      return $this->Quotite;
    }

    /**
     * @param float $Quotite
     * @return \FilippoToso\AfiEsca\ProtectimItalie\AssureData
     */
    public function setQuotite($Quotite)
    {
      $this->Quotite = $Quotite;
      return $this;
    }

    /**
     * @return ArrayOfSurprimeData
     */
    public function getSurprimes()
    {
      return $this->Surprimes;
    }

    /**
     * @param ArrayOfSurprimeData $Surprimes
     * @return \FilippoToso\AfiEsca\ProtectimItalie\AssureData
     */
    public function setSurprimes($Surprimes)
    {
      $this->Surprimes = $Surprimes;
      return $this;
    }

    /**
     * @return int
     */
    public function getTaille()
    {
      return $this->Taille;
    }

    /**
     * @param int $Taille
     * @return \FilippoToso\AfiEsca\ProtectimItalie\AssureData
     */
    public function setTaille($Taille)
    {
      $this->Taille = $Taille;
      return $this;
    }

    /**
     * @return float
     */
    public function getTauxCommission()
    {
      return $this->TauxCommission;
    }

    /**
     * @param float $TauxCommission
     * @return \FilippoToso\AfiEsca\ProtectimItalie\AssureData
     */
    public function setTauxCommission($TauxCommission)
    {
      $this->TauxCommission = $TauxCommission;
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
     * @return \FilippoToso\AfiEsca\ProtectimItalie\AssureData
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
     * @return \FilippoToso\AfiEsca\ProtectimItalie\AssureData
     */
    public function setPrenom($Prenom)
    {
      $this->Prenom = $Prenom;
      return $this;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
      return $this->Telephone;
    }

    /**
     * @param string $Telephone
     * @return \FilippoToso\AfiEsca\ProtectimItalie\AssureData
     */
    public function setTelephone($Telephone)
    {
      $this->Telephone = $Telephone;
      return $this;
    }

    /**
     * @return string
     */
    public function getEMail()
    {
      return $this->EMail;
    }

    /**
     * @param string $EMail
     * @return \FilippoToso\AfiEsca\ProtectimItalie\AssureData
     */
    public function setEMail($EMail)
    {
      $this->EMail = $EMail;
      return $this;
    }

    /**
     * @return RisqueProfessionnel
     */
    public function getRisqueProfessionnel()
    {
      return $this->RisqueProfessionnel;
    }

    /**
     * @param RisqueProfessionnel $RisqueProfessionnel
     * @return \FilippoToso\AfiEsca\ProtectimItalie\AssureData
     */
    public function setRisqueProfessionnel($RisqueProfessionnel)
    {
      $this->RisqueProfessionnel = $RisqueProfessionnel;
      return $this;
    }

}
