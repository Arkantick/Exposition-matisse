<?php

/**
 * Created by PhpStorm.
 * User: lordo
 * Date: 20/03/2017
 * Time: 16:01
 */
class InfoMusee
{
    protected $idMusee;
    protected $nom;
    protected $adresse;
    protected $ville;
    protected $codePostal;
    protected $numeroTel;
    protected $adresseMail;

    public function __construct($idMusee="",$nom="",$adresse="",$ville="",$codePostal="",$numeroTel="",$adresseMail="")
    {
        $this->setIdMusee($idMusee);
        $this->setNom($nom);
        $this->setAdresse($adresse);
        $this->setVille($ville);
        $this->setCodePostal($codePostal);
        $this->setNumeroTel($numeroTel);
        $this->setAdresseMail($adresseMail);
    }
	
    /**
     * @return mixed
     */
    public function getIdMusee()
    {
        return $this->idMusee;
    }

    /**
     * @param mixed $idMusee
     */
    public function setIdMusee($idMusee)
    {
        $this->idMusee = $idMusee;
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
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * @param mixed $codePostal
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    }

    /**
     * @return mixed
     */
    public function getNumeroTel()
    {
        return $this->numeroTel;
    }

    /**
     * @param mixed $numeroTel
     */
    public function setNumeroTel($numeroTel)
    {
        $this->numeroTel = $numeroTel;
    }

    /**
     * @return mixed
     */
    public function getAdresseMail()
    {
        return $this->adresseMail;
    }

    /**
     * @param mixed $adresseMail
     */
    public function setAdresseMail($adresseMail)
    {
        $this->adresseMail = $adresseMail;
    }

}