<?php


namespace /*ClubFromage\*/Modele\business;


class Pays extends Fromage
{
    private $_id;
    private $_nom;

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