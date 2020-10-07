<?php


namespace /*ClubFromage\*/Modele\business;


class Avis
{
    private $_note;
    private $_texte;
    private $_idUtilisateur;
    private $_idFromage;

    //======================== Debut de Get & Set ========================//
    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->_note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->_note = $note;
    }

    /**
     * @return mixed
     */
    public function getTexte()
    {
        return $this->_texte;
    }

    /**
     * @param mixed $texte
     */
    public function setTexte($texte)
    {
        $this->_texte = $texte;
    }

    /**
     * @return mixed
     */
    public function getIdUtilisateur()
    {
        return $this->_idUtilisateur;
    }

    /**
     * @param mixed $idUtilisateur
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->_idUtilisateur = $idUtilisateur;
    }

    /**
     * @return mixed
     */
    public function getIdFromage()
    {
        return $this->_idFromage;
    }

    /**
     * @param mixed $idFromage
     */
    public function setIdFromage($idFromage)
    {
        $this->_idFromage = $idFromage;
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