<?php
/**
 * Created by PhpStorm.
 * User: lordo
 * Date: 13/03/2017
 * Time: 15:11
 */


class Oeuvres
{
	protected $idOeuvre;
    protected $nom;
    protected $dateOeuvre;
	protected $dimensions;
    protected $typePeinture;
    protected $description;
    protected $photoOeuvre;
    protected $creditPhoto;


    public function __construct($idOeuvre ="", $nom="",$dateOeuvre="",$dimensions="",$typePeinture="",$description="",$photoOeuvre="",$creditPhoto="")
    {
		$this->setIdOeuvre($idOeuvre);
        $this->setNom($nom);
        $this->setDateOeuvre($dateOeuvre);
		$this->setDimensions($dimensions);
        $this->setTypePeinture($typePeinture);
        $this->setDescription($description);
        $this->setPhotoOeuvre($photoOeuvre);
        $this->setCreditPhoto($creditPhoto);
    }
	
    /**
     * @return mixed
     */
    public function getIdOeuvre()
    {
        return $this->idOeuvre;
    }

    /**
     * @param mixed $idOeuvre
     */
    public function setIdOeuvre($idOeuvre)
    {
        $this->idOeuvre = $idOeuvre;
    }

	    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * @param mixed $dimensions
     */
    public function setDimensions($dimensions)
    {
        $this->dimensions = $dimensions;
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
    public function getDateOeuvre()
    {
        return $this->dateOeuvre;
    }

    /**
     * @param mixed $dateOeuvre
     */
    public function setDateOeuvre($dateOeuvre)
    {
        $this->dateOeuvre = $dateOeuvre;
    }

    /**
     * @return mixed
     */
    public function getTypePeinture()
    {
        return $this->typePeinture;
    }

    /**
     * @param mixed $typePeinture
     */
    public function setTypePeinture($typePeinture)
    {
        $this->typePeinture = $typePeinture;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPhotoOeuvre()
    {
        return $this->photoOeuvre;
    }

    /**
     * @param mixed $photoOeuvre
     */
    public function setPhotoOeuvre($photoOeuvre)
    {
        $this->photoOeuvre = $photoOeuvre;
    }

    /**
     * @return mixed
     */
    public function getCreditPhoto()
    {
        return $this->creditPhoto;
    }

    /**
     * @param mixed $creditPhoto
     */
    public function setCreditPhoto($creditPhoto)
    {
        $this->creditPhoto = $creditPhoto;
    }

}