<?php

class Candidat implements JsonSerializable
{
    private $id;
    private $nom;
    private $prenom;
    private $dateDeNaissance;
    private $lieuDeNaissance;
    private $nationalite;
    private $etablisssementDorigine;
    private $contact;
    private $email;
    private $parent;
    private $nomDuParent;
    private $prenomDuParent;
    private $contactDuParent;
    private $emailDuParent;
    private $adresseDuParent;
    private $ue;
    private $etat;
    private $fichiers;
    private $connexion;

    /**
     * Candidat constructor.
     * @param $nom
     * @param $prenom
     * @param $dateDeNaissance
     * @param $lieuDeNaissance
     * @param $nationalite
     * @param $etablisssementDorigine
     * @param $contact
     * @param $email
     * @param $nomDuParent
     * @param $prenomDuParent
     * @param $contactDuParent
     * @param $emailDuParent
     * @param $adresseDuParent
     * @param $ue
     * @param $etat
     * @param $fichiers
     */
    public function __construct($nom, $prenom, $dateDeNaissance, $lieuDeNaissance, $nationalite, $etablisssementDorigine, $contact, $email, $nomDuParent, $prenomDuParent, $contactDuParent, $emailDuParent, $adresseDuParent, $ue, $etat, $fichiers)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateDeNaissance = $dateDeNaissance;
        $this->lieuDeNaissance = $lieuDeNaissance;
        $this->nationalite = $nationalite;
        $this->etablisssementDorigine = $etablisssementDorigine;
        $this->contact = $contact;
        $this->email = $email;
        $this->nomDuParent = $nomDuParent;
        $this->prenomDuParent = $prenomDuParent;
        $this->contactDuParent = $contactDuParent;
        $this->emailDuParent = $emailDuParent;
        $this->adresseDuParent = $adresseDuParent;
        $this->ue = $ue;
        $this->etat = $etat;
        $this->fichiers = $fichiers;
        include '../../mvc/config.php';
        $this->connexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
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
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }

    /**
     * @param mixed $dateDeNaissance
     */
    public function setDateDeNaissance($dateDeNaissance): void
    {
        $this->dateDeNaissance = $dateDeNaissance;
    }

    /**
     * @return mixed
     */
    public function getLieuDeNaissance()
    {
        return $this->lieuDeNaissance;
    }

    /**
     * @param mixed $lieuDeNaissance
     */
    public function setLieuDeNaissance($lieuDeNaissance): void
    {
        $this->lieuDeNaissance = $lieuDeNaissance;
    }

    /**
     * @return mixed
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * @param mixed $nationalite
     */
    public function setNationalite($nationalite): void
    {
        $this->nationalite = $nationalite;
    }

    /**
     * @return mixed
     */
    public function getEtablisssementDorigine()
    {
        return $this->etablisssementDorigine;
    }

    /**
     * @param mixed $etablisssemntDorigine
     */
    public function setEtablisssementDorigine($etablisssementDorigine): void
    {
        $this->etablisssementDorigine = $etablisssementDorigine;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param mixed $contact
     */
    public function setContact($contact): void
    {
        $this->contact = $contact;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param mixed $parent
     */
    public function setParent($parent): void
    {
        $this->parent = $parent;
    }

    /**
     * @return mixed
     */
    public function getNomDuParent()
    {
        return $this->nomDuParent;
    }

    /**
     * @param mixed $nomDuParent
     */
    public function setNomDuParent($nomDuParent): void
    {
        $this->nomDuParent = $nomDuParent;
    }

    /**
     * @return mixed
     */
    public function getPrenomDuParent()
    {
        return $this->prenomDuParent;
    }

    /**
     * @param mixed $prenomDuParent
     */
    public function setPrenomDuParent($prenomDuParent): void
    {
        $this->prenomDuParent = $prenomDuParent;
    }

    /**
     * @return mixed
     */
    public function getContactDuParent()
    {
        return $this->contactDuParent;
    }

    /**
     * @param mixed $contactDuParent
     */
    public function setContactDuParent($contactDuParent): void
    {
        $this->contactDuParent = $contactDuParent;
    }

    /**
     * @return mixed
     */
    public function getEmailDuParent()
    {
        return $this->emailDuParent;
    }

    /**
     * @param mixed $emailDuParent
     */
    public function setEmailDuParent($emailDuParent): void
    {
        $this->emailDuParent = $emailDuParent;
    }

    /**
     * @return mixed
     */
    public function getAdresseDuParent()
    {
        return $this->adresseDuParent;
    }

    /**
     * @param mixed $adresseDuParent
     */
    public function setAdresseDuParent($adresseDuParent): void
    {
        $this->adresseDuParent = $adresseDuParent;
    }

    /**
     * @return mixed
     */
    public function getUe()
    {
        return $this->ue;
    }

    /**
     * @param mixed $ue
     */
    public function setUe($ue): void
    {
        $this->ue = $ue;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat): void
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getFichiers()
    {
        return $this->fichiers;
    }

    /**
     * @param mixed $fichiers
     */
    public function setFichiers($fichiers): void
    {
        $this->fichiers = $fichiers;
    }

    /**
     * @return PDO
     */
    public function getConnexion(): PDO
    {
        return $this->connexion;
    }

    /**
     * @param PDO $connexion
     */
    public function setConnexion(PDO $connexion): void
    {
        $this->connexion = $connexion;
    }





    public function ajouterCandidat()
    {
        $query = $this->connexion->prepare('INSERT INTO candidat(nom, prenom, datenaiss, lieunaiss, nationalite, etablissementorg, tel, email, ue, etat, parent) VALUES (?,?,?,?,?,?,?,?,?,?,?)');
        $execution = $query->execute([$this->nom, $this->prenom, $this->dateDeNaissance, $this->lieuDeNaissance, $this->nationalite, $this->etablisssementDorigine, $this->contact, $this->email, $this->ue, $this->etat, $this->parent]);
        if ($execution) {
            $this->id = $this->connexion->lastInsertId();
            return $execution;
        } else {
            return $execution;
        }
    }

    public function ajouterParent()
    {
        $query = $this->connexion->prepare('SELECT id_parent FROM parent WHERE nomparent = ? AND prenomparent = ? AND telparent = ?');
        $query->execute([$this->nomDuParent, $this->prenomDuParent, $this->contactDuParent]);
        $parent = $query->fetch();
        if ($parent) {
            $this->parent = $parent['id_parent'];
            return true;
        } else {
            $query = $this->connexion->prepare('INSERT INTO parent(nomparent, prenomparent, telparent, emailparent, adresseparent) VALUES (?,?,?,?,?)');
            $execution = $query->execute([$this->nomDuParent, $this->prenomDuParent, $this->contactDuParent, $this->emailDuParent, $this->adresseDuParent]);
            if ($execution) {
                $this->parent = $this->connexion->lastInsertId();
                return true;
            } else {
                return false;
            }
        }
    }

    public function ajouterFichier($files_name)
    {
        $fname = $this->nom . " " . $this->prenom . " " . $this->id;
        $folder = "../../fichiers/" . $fname;
        if (!is_dir($folder)) {
            mkdir($folder, 0777);
        }
        $i = 0;
        $test = true;
        foreach ($this->fichiers as $file) {
            if ($file["size"] !== 0) {
                $trueFileName = $files_name[$i] . " " . $fname . "." . PATHINFO($file['name'], PATHINFO_EXTENSION);
                $target = $folder . "/" . $trueFileName;
                $file_moved = move_uploaded_file($file['tmp_name'], $target);
                if ($file_moved) {
                    $query = $this->connexion->prepare('INSERT INTO fichier(nom_fichier, url, candidat) VALUES (?,?,?)');
                    $test = $test && $query->execute([$files_name[$i], $trueFileName, $this->id]);
                } else {
                    $test = false;
                }
                $i++;
            }
        }
        return $test;
    }

    public function supprimerCandidat()
    {
        $query = $this->connexion->prepare("DELETE FROM candidat WHERE id_candidat = ?");
        $query->execute([$this->id]);
    }

    public function supprimerFichier()
    {
        $dossier = "../../fichiers/" . $this->nom . " " . $this->prenom . " " . $this->id;
        if (is_dir($dossier)) {
            $objects = scandir($dossier);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (filetype($dossier."/".$object) == "dir") rrmdir($dossier."/".$object); else unlink($dossier."/".$object);
                }
            }
            reset($objects);
            rmdir($dossier);
        }
        $query = $this->connexion->prepare("DELETE FROM fichier WHERE candidat = ?");
        $query->execute([$this->id]);
    }
    function testDInscription()
    {
        $query = $this->connexion->prepare("SELECT id_candidat FROM candidat where nom = ? AND prenom = ? AND datenaiss = ? AND tel = ?");
        $query->execute([strtoupper($this->nom), strtoupper($this->prenom), $this->dateDeNaissance, $this->contact]);
        return $query->fetch();
    }

    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}