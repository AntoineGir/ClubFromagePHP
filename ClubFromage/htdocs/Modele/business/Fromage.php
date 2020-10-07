<?php
namespace /*ClubFromage\*/Modele\business;

class Fromage
{
    private $_id;
    private $_nom;
    private $_pays;
    private $_affinage;
    private $_datePublication;
    private $_image;
    private $_recette;
    private $_histoire;

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
    public function getPays()
    {
        return $this->_pays;
    }

    /**
     * @param mixed $pays
     */
    public function setPays($pays)
    {
        //$this->_pays = $pays;

        //recuper les id pays pour savoir le nom du pays et s'il existe
        //echo $this->getPays();



    }

    /**
     * @return mixed
     */
    public function getAffinage()
    {
        return $this->_affinage;
    }

    /**
     * @param mixed $affinage
     */
    public function setAffinage($affinage)
    {
        $this->_affinage = $affinage;
    }

    /**
     * @return mixed
     */
    public function getDatePublication()
    {
        return $this->_datePublication;
    }

    /**
     * @param mixed $datePublication
     */
    public function setDatePublication($datePublication)
    {
        $this->_datePublication = $datePublication;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->_image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->_image = $image;
    }

    /**
     * @return mixed
     */
    public function getRecette()
    {
        return $this->_recette;
    }

    /**
     * @param mixed $recette
     */
    public function setRecette($recette)
    {
        $this->_recette = $recette;
    }

    /**
     * @return mixed
     */
    public function getHistoire()
    {
        return $this->_histoire;
    }

    /**
     * @param mixed $histoire
     */
    public function setHistoire($histoire)
    {
        $this->_histoire = $histoire;
    }
    //========================= Fin de Get & Set =========================//
    //=========================== constructeur ===========================//
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

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