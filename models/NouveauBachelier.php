<?php

use JetBrains\PhpStorm\Pure;

include "Candidat.php";

class NouveauBachelier extends Candidat
{
    private $serie;
    private $moyenneAnnuelleFrancais;
    private $moyenneAnnuelleAnglais;
    private $moyenneAnnuelleMath;
    private $noteBacFrancais;
    private $noteBacAnglais;
    private $noteBacMath;
    private $moyenneGeneraleAnnuelle;
    private $totalPointBac;
    private $moyenneBac;
    public $moyenneCpdec;

    /**
     * NouveauBachelier constructor.
     * @param $nom
     * @param $prenom
     * @param $dateDeNaissance
     * @param $lieuDeNaissance
     * @param $nationalite
     * @param $etabllisssemntDorigine
     * @param $contact
     * @param $email
     * @param $nomDuParent
     * @param $prenomDuParent
     * @param $contactDuParent
     * @param $emailDuParent
     * @param $adresseDuParent
     * @param $ue
     * @param $fichiers
     * @param $etat
     * @param $serie
     * @param $moyenneAnnuelleFrancais
     * @param $moyenneAnnuelleAnglais
     * @param $moyenneAnnuelleMath
     * @param $noteBacFrancais
     * @param $noteBacAnglais
     * @param $noteBacMath
     * @param $moyenneGeneraleAnnuelle
     * @param $totalPointBac
     * @param $moyenneBac
     */
    public function __construct($nom, $prenom, $dateDeNaissance, $lieuDeNaissance, $nationalite, $etabllisssemntDorigine, $contact, $email, $nomDuParent, $prenomDuParent, $contactDuParent, $emailDuParent, $adresseDuParent, $ue, $fichiers, $etat, $serie, $moyenneAnnuelleFrancais, $moyenneAnnuelleAnglais, $moyenneAnnuelleMath, $noteBacFrancais, $noteBacAnglais, $noteBacMath, $moyenneGeneraleAnnuelle, $totalPointBac, $moyenneBac)
    {
        parent::__construct($nom, $prenom, $dateDeNaissance, $lieuDeNaissance, $nationalite, $etabllisssemntDorigine, $contact, $email, $nomDuParent, $prenomDuParent, $contactDuParent, $emailDuParent, $adresseDuParent, $ue, $etat, $fichiers);
        $this->serie = $serie;
        $this->moyenneAnnuelleFrancais = $moyenneAnnuelleFrancais;
        $this->moyenneAnnuelleAnglais = $moyenneAnnuelleAnglais;
        $this->moyenneAnnuelleMath = $moyenneAnnuelleMath;
        $this->noteBacFrancais = $noteBacFrancais;
        $this->noteBacAnglais = $noteBacAnglais;
        $this->noteBacMath = $noteBacMath;
        $this->moyenneGeneraleAnnuelle = $moyenneGeneraleAnnuelle;
        $this->totalPointBac = $totalPointBac;
        $this->moyenneBac = $moyenneBac;
    }

    /**
     * @return mixed
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * @param mixed $serie
     */
    public function setSerie($serie): void
    {
        $this->serie = $serie;
    }

    /**
     * @return mixed
     */
    public function getMoyenneAnnuelleFrancais()
    {
        return $this->moyenneAnnuelleFrancais;
    }

    /**
     * @param mixed $moyenneAnnuelleFrancais
     */
    public function setMoyenneAnnuelleFrancais($moyenneAnnuelleFrancais): void
    {
        $this->moyenneAnnuelleFrancais = $moyenneAnnuelleFrancais;
    }

    /**
     * @return mixed
     */
    public function getMoyenneAnnuelleAnglais()
    {
        return $this->moyenneAnnuelleAnglais;
    }

    /**
     * @param mixed $moyenneAnnuelleAnglais
     */
    public function setMoyenneAnnuelleAnglais($moyenneAnnuelleAnglais): void
    {
        $this->moyenneAnnuelleAnglais = $moyenneAnnuelleAnglais;
    }

    /**
     * @return mixed
     */
    public function getMoyenneAnnuelleMath()
    {
        return $this->moyenneAnnuelleMath;
    }

    /**
     * @param mixed $moyenneAnnuelleMath
     */
    public function setMoyenneAnnuelleMath($moyenneAnnuelleMath): void
    {
        $this->moyenneAnnuelleMath = $moyenneAnnuelleMath;
    }

    /**
     * @return mixed
     */
    public function getNoteBacFrancais()
    {
        return $this->noteBacFrancais;
    }

    /**
     * @param mixed $noteBacFrancais
     */
    public function setNoteBacFrancais($noteBacFrancais): void
    {
        $this->noteBacFrancais = $noteBacFrancais;
    }

    /**
     * @return mixed
     */
    public function getNoteBacAnglais()
    {
        return $this->noteBacAnglais;
    }

    /**
     * @param mixed $noteBacAnglais
     */
    public function setNoteBacAnglais($noteBacAnglais): void
    {
        $this->noteBacAnglais = $noteBacAnglais;
    }

    /**
     * @return mixed
     */
    public function getNoteBacMath()
    {
        return $this->noteBacMath;
    }

    /**
     * @param mixed $noteBacMath
     */
    public function setNoteBacMath($noteBacMath): void
    {
        $this->noteBacMath = $noteBacMath;
    }

    /**
     * @return mixed
     */
    public function getMoyenneGeneraleAnnuelle()
    {
        return $this->moyenneGeneraleAnnuelle;
    }

    /**
     * @param mixed $moyenneGeneraleAnnuelle
     */
    public function setMoyenneGeneraleAnnuelle($moyenneGeneraleAnnuelle): void
    {
        $this->moyenneGeneraleAnnuelle = $moyenneGeneraleAnnuelle;
    }

    /**
     * @return mixed
     */
    public function getTotalPointBac()
    {
        return $this->totalPointBac;
    }

    /**
     * @param mixed $totalPointBac
     */
    public function setTotalPointBac($totalPointBac): void
    {
        $this->totalPointBac = $totalPointBac;
    }

    /**
     * @return mixed
     */
    public function getMoyenneBac()
    {
        return $this->moyenneBac;
    }

    /**
     * @param mixed $moyenneBac
     */
    public function setMoyenneBac($moyenneBac): void
    {
        $this->moyenneBac = $moyenneBac;
    }

    public function ajouterCandidat()
    {
        if (parent::ajouterCandidat()) {
            $query = $this->getConnexion()->prepare('INSERT INTO nouveaubachelier(candidat, serie) VALUES (?,?)');
            return $query->execute([$this->getId(), $this->serie]);
        } else {
            return false;
        }
    }

    public function ajouterNote()
    {
        $query = $this->getConnexion()->prepare('INSERT INTO note(moyannfran, moyannang, moyannmath, notebacfran, notebacang, notebacmath, moybac, mga, pointbac, nouveaubachelier) VALUES (?,?,?,?,?,?,?,?,?,?)');
        return $query->execute([$this->moyenneAnnuelleFrancais, $this->moyenneAnnuelleAnglais, $this->moyenneAnnuelleMath, $this->noteBacFrancais, $this->noteBacAnglais, $this->noteBacMath, $this->moyenneBac, $this->moyenneGeneraleAnnuelle, $this->totalPointBac, $this->getId()]);
    }

    public function moyenneCpdec()
    {
        return ($this->moyenneAnnuelleFrancais + $this->moyenneAnnuelleAnglais + $this->moyenneAnnuelleMath + ($this->noteBacFrancais * 2) + ($this->noteBacMath * 2) + $this->noteBacAnglais + $this->moyenneBac + $this->moyenneGeneraleAnnuelle) / 10;
    }

    #[Pure] public function jsonSerialize()
    {
        return ["nom" => $this->getNom(), "prenom" => $this->getPrenom(), "dateDeNaissance" => $this->getDateDeNaissance(), "lieuDeNaissance" => $this->getLieuDeNaissance(), "nationalite" => $this->getNationalite(), "etablisssementDorigine" => $this->getEtablisssementDorigine(), "contact" => $this->getContact(), "email" => $this->getEmail(), "nomDuParent" => $this->getNomDuParent(), "prenomDuParent" => $this->getPrenomDuParent(), "contactDuParent" => $this->getContactDuParent(), "emailDuParent" => $this->getEmailDuParent(), "adresseDuParent" => $this->getAdresseDuParent(), "ue" => explode(",", $this->getUe()), "etat" => $this->getEtat(), "serie" => $this->getSerie(), "moyenneAnnuelleFrancais" => $this->getMoyenneAnnuelleFrancais(), "moyenneAnnuelleAnglais" => $this->getMoyenneAnnuelleAnglais(), "moyenneAnnuelleMath" => $this->getMoyenneAnnuelleMath(), "noteBacFrancais" => $this->getNoteBacFrancais(), "noteBacAnglais" => $this->getNoteBacAnglais(), "noteBacMath" => $this->getNoteBacMath(), "moyenneGeneraleAnnuelle" => $this->getMoyenneGeneraleAnnuelle(), "totalPointBac" => $this->getTotalPointBac(), "moyenneBac" => $this->getMoyenneBac(), "moyenneCpdec" => $this->moyenneCpdec()];
    }


}
