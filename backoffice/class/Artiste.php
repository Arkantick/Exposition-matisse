<?php
/**
 * Created by PhpStorm.
 * User: lordo
 * Date: 13/03/2017
 * Time: 15:01
 */

class Artiste
{
    protected $idArtiste;
    protected $prenom;
    protected $nom;
    protected $biographie;
    protected $photo;


    public function  __construct($idArtiste ="", $Prenom ="", $nom ="", $biographie="", $photo="")
    {
        $this->setidArtiste($idArtiste);
        $this->setPrenom($Prenom);
        $this->setNom($nom);
        $this->setBiographie($biographie);
        $this->setphoto($photo);
    }

    /**
     * @return mixed
     */
    public function getidArtiste()
    {
        return $this->_idArtiste;
    }

    /**
     * @param mixed $idArtiste
     */
    public function setidArtiste($idArtiste)
    {
        $this->_idArtiste = $idArtiste;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $Prenom
     */
    public function setPrenom($Prenom)
    {
        $this->prenom = $Prenom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getBiographie()
    {
        return $this->biographie;
    }

    /**
     * @param mixed $biographie
     */
    public function setBiographie($biographie)
    {
        $this->biographie = $biographie;
    }

    /**
     * @return mixed
     */
    public function getphoto()
    {
        return $this->_photo;
    }

    /**
     * @param mixed $photo
     */
    public function setphoto($photo)
    {
        $this->_photo = $photo;
    }

}