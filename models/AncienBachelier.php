<?php
include "Candidat.php";

class AncienBachelier extends Candidat
{
    private $diplome;
    private $anneeDuDiplome;
    private $profession;
    private $ves;
    private $cours;

    /**
     * AncienBachelier constructor.
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
     * @param $diplome
     * @param $anneeDuDiplome
     * @param $profession
     * @param $ves
     * @param $cours
     */
    public function __construct($nom, $prenom, $dateDeNaissance, $lieuDeNaissance, $nationalite, $etabllisssemntDorigine, $contact, $email, $nomDuParent, $prenomDuParent, $contactDuParent, $emailDuParent, $adresseDuParent, $ue, $fichiers, $etat, $diplome, $anneeDuDiplome, $profession, $ves, $cours)
    {
        parent::__construct($nom, $prenom, $dateDeNaissance, $lieuDeNaissance, $nationalite, $etabllisssemntDorigine, $contact, $email, $nomDuParent, $prenomDuParent, $contactDuParent, $emailDuParent, $adresseDuParent, $ue, $etat, $fichiers);
        $this->diplome = $diplome;
        $this->anneeDuDiplome = $anneeDuDiplome;
        $this->profession = $profession;
        $this->ves = $ves;
        $this->cours = $cours;
    }

    /**
     * @return mixed
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * @return mixed
     */
    public function getAnneeDuDiplome()
    {
        return $this->anneeDuDiplome;
    }

    /**
     * @return mixed
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * @return mixed
     */
    public function getVes()
    {
        return $this->ves;
    }

    /**
     * @return mixed
     */
    public function getCours()
    {
        return $this->cours;
    }


    public function ajouterCandidat()
    {
        if (parent::ajouterCandidat()) {
            $query = $this->getConnexion()->prepare('INSERT INTO ancienbachelier(candidat, diplome, anneediplome, profession, ves, cours) VALUES (?,?,?,?,?,?)');
            return $query->execute([$this->getId(), $this->getDiplome(), $this->getAnneeDuDiplome(), $this->getProfession(), $this->getVes(), $this->getCours()]);
        } else {
            return false;
        }
    }

    public function jsonSerialize(): array
    {
        return ["nom" => $this->getNom(), "prenom" => $this->getPrenom(), "dateDeNaissance" => $this->getDateDeNaissance(), "lieuDeNaissance" => $this->getLieuDeNaissance(), "nationalite" => $this->getNationalite(), "etablisssementDorigine" => $this->getEtablisssementDorigine(), "contact" => $this->getContact(), "email" => $this->getEmail(), "nomDuParent" => $this->getNomDuParent(), "prenomDuParent" => $this->getPrenomDuParent(), "contactDuParent" => $this->getContactDuParent(), "emailDuParent" => $this->getEmailDuParent(), "adresseDuParent" => $this->getAdresseDuParent(), "ue" => explode(",", $this->getUe()), "etat" => $this->getEtat(), "diplome" => $this->getDiplome(), "anneeDuDiplome" => $this->getAnneeDuDiplome(), "profession" => $this->getProfession(), "ves" => $this->getVes(), "cours" => $this->getCours(),];
    }

}
