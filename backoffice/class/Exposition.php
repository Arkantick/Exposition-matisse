<?php

/**
 * Created by PhpStorm.
 * User: lordo
 * Date: 06/02/2017
 * Time: 15:40
 */
class Exposition
{
protected $idExposition;
protected $nomComplet;
protected $nomRaccourci;
protected $prix;
protected $dateDebut;
protected $dateFin;
protected $responsable;
protected $heureOuverture;
protected $heureFermeure;
protected $noteCommissaire;

    /**
     * @return mixed
     */
    public function getNoteCommissaire()
    {
        return $this->noteCommissaire;
    }

    /**
     * @param mixed $noteCommissaire
     */
    public function setNoteCommissaire($noteCommissaire)
    {
        $this->noteCommissaire = $noteCommissaire;
    }

    /**
     * @return mixed
     */
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * @param mixed $nomComplet
     */
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;
    }

    /**
     * @return mixed
     */
    public function getNomRaccourci()
    {
        return $this->nomRaccourci;
    }

    /**
     * @param mixed $nomRaccourci
     */
    public function setNomRaccourci($nomRaccourci)
    {
        $this->nomRaccourci = $nomRaccourci;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param mixed $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param mixed $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @return mixed
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * @param mixed $responsable
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    }

    /**
     * @return mixed
     */
    public function getHeureOuverture()
    {
        return $this->heureOuverture;
    }

    /**
     * @param mixed $heureOuverture
     */
    public function setHeureOuverture($heureOuverture)
    {
        $this->heureOuverture = $heureOuverture;
    }

    /**
     * @return mixed
     */
    public function getHeureFermeture()
    {
        return $this->heureFermeture;
    }

    /**
     * @param mixed $heureFermeure
     */
    public function setHeureFermeure($heureFermeure)
    {
        $this->heureFermeure = $heureFermeure;
    }

    /**
     * @return mixed
     */
    public function getIdExposition()
    {
        return $this->idExposition;
    }

    /**
     * @param mixed $idExposition
     */
    public function setIdExposition($idExposition)
    {
        $this->idExposition = $idExposition;
    }

    public function __construct($idExposition="",$nomComplet="",$nomRaccourci="",$prix="",$dateDebut="",$dateFin="",$responsable="",$heureOuverture="",$heureFermeture="",$noteCommissaire="")
    {
        $this->setIdExposition($idExposition);
        $this->setNomComplet($nomComplet);
        $this->setNomRaccourci($nomRaccourci);
        $this->setPrix($prix);
        $this->setDateDebut($dateDebut);
        $this->setDateFin($dateFin);
        $this->setResponsable($responsable);
        $this->setHeureOuverture($heureOuverture);
        $this->setHeureFermeure($heureFermeture);
		$this->setNoteCommissaire($noteCommissaire);
    }
}
