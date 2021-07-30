<?php
if (isset($_POST["method"])){
    include "../../mvc/config.php";
    $connexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $method = $_POST['method'];
    switch ($method) {
        case "load" :
            loadEmail();
            break;
        case "verif":
            verifResult();
            break;
        default;
    }
} else{
    header("location: ../../");
}

function loadEmail()
{
    include "../../mvc/config.php";
    $connexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $query = $connexion->query("SELECT distinct(email) FROM candidat");
    $mails = $query->fetchAll();
    $data = [];
    foreach ($mails as $mail) {
        array_push($data, $mail["email"]);
    }
    echo json_encode($data);
}

function verifResult(){
    include "../../mvc/config.php";
    $connexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $type = $_POST["typebachelier"];
    $email = $_POST["verifemail"];
    if ($type === "nb") {
        $query = $connexion->prepare("SELECT * FROM candidat JOIN nouveaubachelier ON candidat.id_candidat = nouveaubachelier.candidat JOIN note ON nouveaubachelier.candidat = note.nouveaubachelier LEFT JOIN parent ON candidat.parent = parent.id_parent WHERE email = ?");
        $query->execute([$email]);
        $candidat = $query->fetch();
        include "../models/NouveauBachelier.php";
        $candidat = new NouveauBachelier($candidat["nom"], $candidat["prenom"], $candidat["datenaiss"], $candidat["lieunaiss"], $candidat["nationalite"], $candidat["etablissementorg"], $candidat["tel"], $candidat["email"], $candidat["nomparent"], $candidat["prenomparent"], $candidat["telparent"], $candidat["emailparent"], $candidat["adresseparent"], $candidat["ue"], null, $candidat["etat"], $candidat["serie"], $candidat["moyannfran"], $candidat["moyannang"], $candidat["moyannmath"], $candidat["notebacfran"], $candidat["notebacang"], $candidat["notebacmath"], $candidat["mga"], $candidat["pointbac"], $candidat["moybac"]);
        $candidat->moyenneCpdec =  $candidat->moyenneCpdec();
    } else if ($type === "ab"){
        $query = $connexion->prepare("SELECT * FROM candidat JOIN ancienbachelier ON candidat.id_candidat = ancienbachelier.candidat LEFT JOIN parent ON candidat.parent = parent.id_parent WHERE email = ?");
        $query->execute([$email]);
        $candidat = $query->fetch();
        include "../models/AncienBachelier.php";
        $candidat = new AncienBachelier($candidat["nom"], $candidat["prenom"], $candidat["datenaiss"], $candidat["lieunaiss"], $candidat["nationalite"], $candidat["etablissementorg"], $candidat["tel"], $candidat["email"], $candidat["nomparent"], $candidat["prenomparent"], $candidat["telparent"], $candidat["emailparent"], $candidat["adresseparent"], $candidat["ue"], null, $candidat["etat"], $candidat["diplome"], $candidat["anneediplome"], $candidat["profession"], $candidat["ves"], $candidat["cours"]);
    }
    echo json_encode($candidat->jsonSerialize());
}