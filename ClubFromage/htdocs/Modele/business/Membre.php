<?php


namespace /*ClubFromage\*/Modele\business;


class Membre
{
    private $_id;
    private $_nom;
    private $_pseudo;
    private $_email;
    private $_mdp;
    private $_dateDerniereConnexion;
    private $_heureDerniereConnexion;
    private $_dateInscription;
    private $_description;
    private $_actif;

    //======================== Debut de Get & Set ========================//
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->_pseudo;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->_pseudo = $pseudo;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->_mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->_mdp = $mdp;
    }

    /**
     * @return mixed
     */
    public function getDateDerniereConnexion()
    {
        return $this->_dateDerniereConnexion;
    }

    /**
     * @param mixed $dateDerniereConnexion
     */
    public function setDateDerniereConnexion($dateDerniereConnexion)
    {
        $this->_dateDerniereConnexion = $dateDerniereConnexion;
    }

    /**
     * @return mixed
     */
    public function getHeureDerniereConnexion()
    {
        return $this->_heureDerniereConnexion;
    }

    /**
     * @param mixed $heureDerniereConnexion
     */
    public function setHeureDerniereConnexion($heureDerniereConnexion)
    {
        $this->_heureDerniereConnexion = $heureDerniereConnexion;
    }

    /**
     * @return mixed
     */
    public function getDateInscription()
    {
        return $this->_dateInscription;
    }

    /**
     * @param mixed $dateInscription
     */
    public function setDateInscription($dateInscription)
    {
        $this->_dateInscription = $dateInscription;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->_description = $description;
    }

    /**
     * @return mixed
     */
    public function getActif()
    {
        return $this->_actif;
    }

    /**
     * @param mixed $actif
     */
    public function setActif($actif)
    {
        $this->_actif = $actif;
    }
    //========================= Fin de Get & Set =========================//
    //=========================== constructeur ===========================//
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }
    //========================= fin constructeur =========================//

    private function hydrate(array $donnes)
    {
        foreach ($donnes as $key=>$value)
        {
            $method='set'.ucfirst($key);

            if(method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

}