<?php
if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header("location: ../views/messages/erreur.php?type=inc");
} else {
    include '../models/NouveauBachelier.php';
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $ddnaiss = $_POST["ddnaiss"];
    $lieunaiss = $_POST["lieunaiss"];
    $nationalite = $_POST["nationalite"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $etablissemntorg = $_POST["etablissemntorg"];
    $serie = $_POST["serie"];
    $nomparent = $_POST["nomparent"];
    $prenomparent = $_POST["prenomparent"];
    $prenomparent = $_POST["prenomparent"];
    $contactparent = $_POST["contactparent"];
    $contactparent = $_POST["contactparent"];
    $emailparent = $_POST["emailparent"];
    $adresseparent = $_POST["adresseparent"];
    $ue = implode(',', $_POST["ue"]);
    $moyannfran = $_POST["moyannfran"];
    $moyannang = $_POST["moyannang"];
    $moyannmath = $_POST["moyannmath"];
    $notebacfran = $_POST["notebacfran"];
    $notebacang = $_POST["notebacang"];
    $notebacmath = $_POST["notebacmath"];
    $mga = $_POST["mga"];
    $moybac = $_POST["moybac"];
    $pointbac = $_POST["pointbac"];
    $typeannee = $_POST["typeannee"];
    $fichiers = $_FILES;
    $candidat = new NouveauBachelier($nom, $prenom, $ddnaiss, $lieunaiss, $nationalite, $etablissemntorg, $contact, $email, $nomparent, $prenomparent, $contactparent, $emailparent, $adresseparent, $ue, $fichiers, null, $serie, $moyannfran, $moyannang, $moyannmath, $notebacfran, $notebacang, $notebacmath, $mga, $pointbac, $moybac);

    try {
        $testI = $candidat->testDInscription();
    } catch (Exception $e) {
        $error = true;
    }
    if ($testI) {
        header("location: ../views/messages/erreur.php?type=ed");
    } else {

        try {

            $ajoutParent = $candidat->ajouterParent();

        } catch (Exception $e) {

        }
        if ($ajoutParent && ($candidat->getParent() !== null)) {
            try {
                $inscription = $candidat->ajouterCandidat();
            } catch (Exception $e) {
            }
            if ($inscription && ($candidat->getId() !== null)) {
                try {
                    $ajoutFichiers = $fichiers["releveDeNoteDuBacS"]["size"] === 0 ? $candidat->ajouterFichier(["Bulletin du 1er trimestre", "Bulletin du 2ème trimestre", "Bulletin du 3ème timestre", "Relevé de note du bac"]) : $candidat->ajouterFichier(["Bulletin du 1er semestre", "Bulletin du 2ème semestre", "Relevé de note du bac"]);
                } catch (Exception $e) {
                }
                if ($ajoutFichiers) {
                    try {
                        $note = $candidat->ajouterNote();
                    } catch (Exception $e) {
                    }
                    if ($note) {
                        header("location: ../views/messages/succes.php");
                    } else {
                        try {
                            $candidat->supprimerFichier();
                        } catch (Exception $e) {
                        }
                        header("location: ../views/messages/erreur.php?type=inc");
                    }
                } else {
                    try {
                        $candidat->supprimerCandidat();
                    } catch (Exception $e) {
                    }
                    header("location: ../views/messages/erreur.php?type=inc");
                }
            } else {
                header("location: ../views/messages/erreur.php?type=inc");
            }
        } else {
            header("location: ../views/messages/erreur.php?type=inc");
        }
    }
}
