<!doctype html>
<html lang="fr">

<head>
    <noscript><meta http-equiv="refresh" content="0, URL=../messages/erreur.php?type=nojs"></noscript>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPDEC</title>
    <!-- style.-->
    <link rel="stylesheet" href="../../assets/css/dist/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/solid.min.css" integrity="sha512-jQqzj2vHVxA/yCojT8pVZjKGOe9UmoYvnOuM/2sQ110vxiajBU+4WkyRs1ODMmd4AfntwUEV4J+VfM6DkfjLRg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <form method="POST" action="../../controllers/cnouveaux.php" name="formulairenb" id="formulairenb"
              enctype="multipart/form-data">
            <div class="form-div">
                <div class="identification">
                    <div class="title"><h4>Identification (Nouveaux bacheliers)</h4></div>
                    <div class="row col2">
                        <div class="form-group">
                            <label for="nom" class="label">Nom<span class="ast">*</span></label>
                            <input type="text" name="nom" id="nom">
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
                            <label for="etablissementorg" class="label">&Eacute;tablissemnt d'origine<span class="ast">*</span></label>
                            <input type="text" name="etablissemntorg" id="etablissementorg">
                        </div>
                        <div class="form-group">
                            <label for="serie" class="label">Série du bac<span class="ast">*</span></label>
                            <input type="text" name="serie" id="serie">
                        </div>
                    </div>
                    <div class="row col2">
                        <div class="form-group">
                            <label for="nomparent" class="label">Nom du parent<span class="ast">*</span></label>
                            <input type="text" name="nomparent" id="nomparent">
                        </div>
                        <div class="form-group">
                            <label for="prenomparent" class="label">Prénom du parent<span class="ast">*</span></label>
                            <input type="text" name="prenomparent" id="prenomparent">
                        </div>
                    </div>
                    <div class="row col3">
                        <div class="form-group">
                            <label for="contactparent" class="label">Contact du parent<span class="ast">*</span></label>
                            <input type="text" name="contactparent" id="contactparent">
                        </div>
                        <div class="form-group">
                            <label for="emailparent" class="label">Email du parent</label>
                            <input type="text" name="emailparent" id="emailparent">
                        </div>
                        <div class="form-group">
                            <label for="adresseparent" class="label">Adresse du parent<span class="ast">*</span></label>
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
                <div class="relevedenote">
                    <div class="title"><h4>Relevé de notes</h4></div>
                    <div><h2>Moyennes annuelles</h2></div>
                    <div class="row col3">
                        <div class="form-group">
                            <label for="moyannfran" class="label">Français<span class="ast">*</span></label>
                            <input type="number" name="moyannfran" id="moyannfran">
                        </div>
                        <div class="form-group">
                            <label for="moyannang" class="label">Anglais<span class="ast">*</span></label>
                            <input type="number" name="moyannang" id="moyannang">
                        </div>
                        <div class="form-group">
                            <label for="moyannmath" class="label">Mathématiques<span class="ast">*</span></label>
                            <input type="number" name="moyannmath" id="moyannmath">
                        </div>
                    </div>
                    <div><h2>Notes du bac</h2></div>
                    <div class="row col3">

                        <div class="form-group">
                            <label for="notebacfran" class="label">Français<span class="ast">*</span></label>
                            <input type="number" name="notebacfran" id="notebacfran">
                        </div>
                        <div class="form-group">
                            <label for="notebacang" class="label">Anglais<span class="ast">*</span></label>
                            <input type="number" name="notebacang" id="notebacang">
                        </div>
                        <div class="form-group">
                            <label for="notebacmath" class="label">Mathématiques<span class="ast">*</span></label>
                            <input type="number" name="notebacmath" id="notebacmath">
                        </div>
                    </div>
                    <div><h2>Autres</h2></div>
                    <div class="row col3">

                        <div class="form-group">
                            <label for="mga" class="label">Moyenne générale annuelle<span class="ast">*</span></label>
                            <input type="number" name="mga" id="mga">
                        </div>
                        <div class="form-group">
                            <label for="moybac" class="label">Moyenne du bac<span class="ast">*</span></label>
                            <input type="number" name="moybac" id="moybac">
                        </div>
                        <div class="form-group">
                            <label for="pointbac" class="label">Points du bac<span class="ast">*</span></label>
                            <input type="number" name="pointbac" id="pointbac">
                        </div>
                    </div>
                </div>
                <div class="fichiers">
                    <div class="title"><h4>Fichiers</h4></div>
                    <div class="row col1">
                        <div class="form-group">
                            <label for="typeannee" class="label">Type d'année scolaire<span class="ast">*</span></label>
                            <select name="typeannee" id="typeannee">
                                <option value="">...</option>
                                <option value="t">Trimestre</option>
                                <option value="s">Semestre</option>

                            </select>
                        </div>
                    </div>
                    <div class="row col4 f_off" id="trimestre">
                        <div class="form-group">
                            <label for="bulletinDuTrimestre1" class="label">Bulletin du 1<sup>er</sup> trimestre<span class="ast">*</span></label>
                            <input type="file" name="bulletinDuTrimestre1" id="bulletinDuTrimestre1" accept="image/*, application/pdf">
                        </div>
                        <div class="form-group">
                            <label for="bulletinDuTrimestre2" class="label">Bulletin du 2<sup>ème</sup> trimestre<span class="ast">*</span></label>
                            <input type="file" name="bulletinDuTrimestre2" id="bulletinDuTrimestre2" accept="image/*, application/pdf">
                        </div>
                        <div class="form-group">
                            <label for="bulletinDuTrimestre3" class="label">Bulletin du 3<sup>ème</sup> trimestre<span class="ast">*</span></label>
                            <input type="file" name="bulletinDuTrimestre3" id="bulletinDuTrimestre3" accept="image/*, application/pdf">
                        </div>
                        <div class="form-group">
                            <label for="releveDeNoteDuBacT" class="label">Relevé de note du bac<span class="ast">*</span></label>
                            <input type="file" name="releveDeNoteDuBacT" id="releveDeNoteDuBacT" accept="image/*, application/pdf">
                        </div>
                    </div>
                    <div class="row col3 f_off" id="semestre">
                        <div class="form-group">
                            <label for="bulletinDuSemestre1" class="label">Bulletin du 1<sup>er</sup> semestre<span class="ast">*</span></label>
                            <input type="file" name="bulletinDuSemestre1" id="bulletinDuSemestre1" accept="image/*, application/pdf">
                        </div>
                        <div class="form-group">
                            <label for="bulletinDuSemestre2" class="label">Bulletin du 2<sup>ème</sup> semestre<span class="ast">*</span></label>
                            <input type="file" name="bulletinDuSemestre2" id="bulletinDuSemestre2" accept="image/*, application/pdf">
                        </div>
                        <div class="form-group">
                            <label for="releveDeNoteDuBacS" class="label">Relevé de note du bac<span class="ast">*</span></label>
                            <input type="file" name="releveDeNoteDuBacS" id="releveDeNoteDuBacS" accept="image/*, application/pdf">
                        </div>
                    </div>
                </div>
                <div class="validation">
                    <div class="row col2">
                        <div class="form-group">
                            <input type="reset" value="Annuler" class="bg-red-500 text-white" id="btn-reset-nb">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Enregistrer" class="bg_orange text-white" id="btn-valid-nb"
                                   name="btn-valid-nb">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
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
<script src="../../assets/js/fichiers.js"></script>
<script src="../../assets/js/select.js"></script>
</html>