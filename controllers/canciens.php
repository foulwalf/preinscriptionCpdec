<?php
if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header("location: ../views/messages/erreur.php?type=inc");
} else {
    include '../models/AncienBachelier.php';
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $ddnaiss = $_POST["ddnaiss"];
    $lieunaiss = $_POST["lieunaiss"];
    $nationalite = $_POST["nationalite"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $diplome = $_POST["diplome"];
    $anneediplome = $_POST["anneediplome"];
    $nomparent = $_POST["nomparent"];
    $prenomparent = $_POST["prenomparent"];
    $prenomparent = $_POST["prenomparent"];
    $contactparent = $_POST["contactparent"];
    $emailparent = $_POST["emailparent"];
    $adresseparent = $_POST["adresseparent"];
    $ue = implode(',', $_POST["ue"]);
    $profession = $_POST["profession"];
    $etablissementorg = $_POST["profession"] === "travailleur" ? $_POST["entreprise"] : $_POST["etablissement"];
    $ves = $_POST["ves"];
    $cours = $_POST["cours"];
    $fichiers = $_FILES;
    $candidat = new AncienBachelier($nom, $prenom, $ddnaiss, $lieunaiss, $nationalite, $etablissementorg, $contact, $email, $nomparent, $prenomparent, $contactparent, $emailparent, $adresseparent, $ue, $fichiers, null, $diplome, $anneediplome, $profession, $ves, $cours);

    try {
        $testI = $candidat->testDInscription();

    } catch (Exception $e){

    }
    if ($testI) {
        header("location: ../views/messages/erreur.php?type=ed");
    } else {
        if ($nomparent !== null) {
            try {
                $candidat->ajouterParent();
            } catch (Exception $e){

            }
        }
        try {
            $inscription = $candidat->ajouterCandidat();
            echo '<pre>';
            var_dump($nomparent);
            echo '</pre>';
            die();
        } catch (Exception $e){

        }
        if ($inscription) {
            try {
                $ajoutFichiers = $candidat->ajouterFichier(["Relevé de note du bac", "Autre document"]);
            } catch (Exception $e){

            }
            if ($ajoutFichiers) {
                header("location: ../views/messages/succes.php");
            } else {
                try {
                    $candidat->supprimerFichier();
                    $candidat->supprimerCandidat();
                } catch (Exception $e){

                }
                header("location: ../views/messages/erreur.php?type=inc");
            }
        } else {
            header("location: ../views/messages/erreur.php?type=inc");
        }
    }
}

