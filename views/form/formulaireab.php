<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPDEC</title>
    <!-- style.-->
    <link rel="stylesheet" href="../../assets/css/dist/style.css">
    <!--jquery-->
    <script src="../../assets/js/jquery.js"></script>
</head>

<body>
<div class="loader lds-rings">
    <div class="lds-ring"></div>
    <div class="lds-ring"></div>
    <div class="lds-ring"></div>
    <div class="lds-ring"></div>
</div>
<div class="body">
    <div class="header">
        <div class="header__img">
            <img src="../../assets/img/logoInphb.gif" alt="logoinphb">
        </div>
    </div>
    <div class="container">
        <form method="post" action="../../controllers/canciens.php" name="formulaireab" id="formulaireab"
              enctype="multipart/form-data">
            <div class="form-div">
                <div class="identification">
                    <div class="title"><h4>Identification (Anciens bacheliers)</h4></div>
                    <div class="row col2">
                        <div class="form-group">
                            <label for="nom" class="label">Nom<span class="ast">*</span></label><input type="text" name="nom" id="nom">
                        </div>
                        <div class="form-group">
                            <label for="prenom" class="label">Prénoms<span class="ast">*</span></label><input type="text" name="prenom"
                                                                                    id="prenom">
                        </div>
                    </div>
                    <div class="row col3">
                        <div class="form-group">
                            <label for="ddnaiss" class="label">Date de naissance<span class="ast">*</span></label><input type="date"
                                                                                                name="ddnaiss"
                                                                                                id="ddnaiss">
                        </div>
                        <div class="form-group">
                            <label for="lieunaiss" class="label">Lieu de naissance<span class="ast">*</span></label><input type="text"
                                                                                                  name="lieunaiss"
                                                                                                  id="lieunaiss">
                        </div>
                        <div class="form-group">
                            <label for="nationalite" class="label">Nationalité<span class="ast">*</span></label><input type="text"
                                                                                              name="nationalite"
                                                                                              id="nationalite">
                        </div>
                    </div>
                    <div class="row col2">
                        <div class="form-group">
                            <label for="contact" class="label">Contact du candidat<span class="ast">*</span></label><input type="text"
                                                                                                  name="contact"
                                                                                                  id="contact">
                        </div>
                        <div class="form-group">
                            <label for="email" class="label">Email du candidat<span class="ast">*</span></label><input type="email" name="email"
                                                                                              id="email">
                        </div>
                    </div>
                    <div class="row col2">
                        <div class="form-group">
                            <label class="label" for="diplome">Dernier diplome<span class="ast">*</span></label>
                            <input type="text" class="form-control" name="diplome" list="liste-diplome" id="diplome">
                            <datalist id="liste-diplome">
                                <option value="BAC">BAC</option>
                                <option value="BTS">BTS</option>
                                <option value="LICENSE">LICENSE</option>
                                <option value="MASTER">MASTER</option>
                            </datalist>
                        </div>
                        <div class="form-group">
                            <label for="anneediplome" class="label">Année du diplome<span class="ast">*</span></label>
                            <input type="text" name="anneediplome" id="anneediplome">
                        </div>
                    </div>
                    <div class="row col2">
                        <div class="form-group">
                            <label for="nomparent" class="label">Nom du parent</label>
                            <input type="text" name="nomparent" id="nomparent">
                        </div>
                        <div class="form-group">
                            <label for="prenomparent" class="label">Prénom du parent</label>
                            <input type="text" name="prenomparent" id="prenomparent">
                        </div>
                    </div>
                    <div class="row col3">
                        <div class="form-group">
                            <label for="contactparent" class="label">Contact du parent</label>
                            <input type="text" name="contactparent" id="contactparent">
                        </div>
                        <div class="form-group">
                            <label for="emailparent" class="label">Email du parent</label>
                            <input type="email" name="emailparent" id="emailparent">
                        </div>
                        <div class="form-group">
                            <label for="adresseparent" class="label">Adresse du parent</label>
                            <input type="text" name="adresseparent" id="adresseparent">
                        </div>
                    </div>
                </div>
                <div class="choixdesue">
                    <div class="title"><h4>Choix des UE</h4></div>
                    <div class="row col1">
                        <div class="form-group">
                            <label for="select" class="label">Choisissez vos UE<span class="ast">*</span></label>
                            <select class="form-select" id="select" name="ue">
                                <option value="">...</option>
                                <option value="115" id="115">&Eacute;conomie comptemporaine</option>
                                <option value="118" id="118">Système d'informations et de gestion</option>
                                <option value="112" id="112">Droit des sociétés et groupements d'affaires</option>
                                <option value="114" id="114">Droit fiscal</option>
                                <option value="120" id="120">Comptabilité approfondie</option>
                                <option value="122" id="122">Anglais des affaires 1</option>
                                <option value="113" id="113">Droit social</option>
                                <option value="116" id="116">Finance d'entreprise</option>
                                <option value="117" id="117">Management</option>
                                <option value="121" id="121">Contr&ocirc;le de gestion</option>
                                <option value="123" id="123">Communication professionnelle</option>
                                <option value="211" id="211">Gestion juridique et fiscal</option>
                                <option value="213" id="213">Management et contr&ocirc;le de gestion</option>
                                <option value="218" id="218">Anglais des affaires 2</option>
                                <option value="212" id="212">Finance</option>
                                <option value="214" id="214">Comptabilité et audit</option>
                                <option value="215" id="215">Management des systèmes d'information</option>
                                <option value="217" id="217">Mémoire</option>
                            </select>
                        </div>
                    </div>
                    <div><h2>UE choisies (<span id="nbUe"></span>)</h2></div>
                    <div class="row col1">
                        <div class="area" id="area">
                            <div class="choix"><input type="hidden" value="111" name="ue[]">Fondamentaux du droit<span class="ast">*</span></div>
                            <div class="choix"><input type="hidden" value="119" name="ue[]">Comptabilité<span class="ast">*</span></div>
                        </div>
                    </div>
                </div>
                <div class="situation">
                    <div class="title"><h4>Situation du candidat</h4></div>
                    <!--                    <div><h2>Profession<span class="ast">*</span></h2></div>-->
                    <div class="row col1">
                        <div class="form-group radio-col" id="profession">
                            <label for="" class="label">Profession<span class="ast">*</span></label>
                            <div>
                                <input type="radio" name="profession" id="ptravailleur" value="TRAVAILLEUR">
                                <label for="ptravailleur" class="label radiolabel">Travailleur</label>
                                <input type="radio" name="profession" id="petudiant" value="ETUDIANT">
                                <label for="petudiant" class="label radiolabel">&Eacute;tudiant</label>
                            </div>
                        </div>
                    </div>
                    <div class="row col1 f_off" id="enterprisediv">
                        <div class="form-group">
                            <label class="label" for="entreprise">Entreprise<span class="ast">*</span></label>
                            <input type="text" name="entreprise" id="enterprise">
                        </div>
                    </div>
                    <div class="row col1 f_off" id="etablissementdiv">
                        <div class="form-group">
                            <label class="label" for="etablissement">Etablissement<span class="ast">*</span></label>
                            <input type="text" name="etablissement" id="etablissement">
                        </div>
                    </div>
                    <!--                    <div><h2>Validation des études supérieures<span class="ast">*</span></h2></div>-->
                    <div class="row col1">
                        <div class="form-group radio-col" id="ves">
                            <label for="" class="label">Validation des études supérieures<span class="ast">*</span></label>
                            <div>
                                <input type="radio" name="ves" id="vesoui" value="oui">
                                <label for="vesoui" class="label radiolabel">Oui</label>
                                <input type="radio" name="ves" id="vesencours" value="en cours">
                                <label for="vesencours" class="label radiolabel">En cours</label>
                                <input type="radio" name="ves" id="vesnon" value="non">
                                <label for="vesnon" class="label radiolabel">Non</label>
                            </div>
                        </div>
                    </div>
                    <!--                    <div><h2>Cours<span class="ast">*</span></h2></div>-->
                    <div class="row col1">
                        <div class="form-group radio-col" id="cours">
                            <label for="" class="label">Cours<span class="ast">*</span></label>
                            <div>
                                <input type="radio" name="cours" id="coursdujour" value="jour">
                                <label for="coursdujour" class="label radiolabel">Jour</label>
                                <input type="radio" name="cours" id="coursdusoir" value="soir">
                                <label for="coursdusoir" class="label radiolabel">Soir</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fichiers">
                    <div class="title"><h4>Fichiers</h4></div>
                    <div class="row col2" id="trimestre">
                        <div class="form-group">
                            <label for="releveDeNoteDuBac" class="label">Relevé de note du bac<span class="ast">*</span></label>
                            <input type="file" name="releveDeNoteDuBac" id="releveDeNoteDuBac" accept="image/*, application/pdf">
                        </div>
                        <div class="form-group">
                            <label for="autreDocument" class="label">Autre document<span class="ast">*</span></label>
                            <input type="file" name="autreDocument" id="autreDocument" accept="image/*, application/pdf">
                        </div>
                    </div>
                </div>
                <div class="validation">
                    <div class="row col2">
                        <div class="form-group">
                            <input type="reset" value="Annuler" class="bg-red-500 text-white" id="btn-reset-ab">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Enregistrer" class="bg_green text-white" id="btn-valid-ab">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <input type="text">
</div>
</body>
<script>

</script>
<!--jquery validation-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
<!--others-->
<script src="../../assets/js/index.js"></script>
<script src="../../assets/js/load.js"></script>
<script src="../../assets/js/select.js"></script>
<script src="../../assets/js/check.js"></script>
</html>

