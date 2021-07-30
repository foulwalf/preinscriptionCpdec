<?php
session_start();
if (isset($_SESSION["etat"])){
    $etat = $_SESSION["etat"];
}
session_destroy();
session_abort()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>CPDEC</title>
    <link rel="stylesheet" href="../../assets/css/dist/style.css">
    <!--Jquery-->
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
        <div class="title"><h4>V&Eacute;RIFICATION</h4></div>
        <div class="card message-card">
            <div class="card__body">
                <div class="card__title bg_green">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h4>
                        Verifiez vos resultats
                    </h4>
                </div>
                <form id="verifform" name="verifform">
                    <div class="card__details">
                        <div>
                            <div class="row col1">
                                <div class="form-group">
                                    <input type="email" id="verifemail" name="verifemail" placeholder="E-mail">
                                </div>
                            </div>
                            <div>
                                <div class="radio-col" id="cours">
                                    <div>
                                        <input type="radio" name="typebachelier" id="nb" value="nb">
                                        <label for="nb" class="label radiolabel">Nouveau bachelier</label>
                                        <input type="radio" name="typebachelier" id="ab" value="ab">
                                        <label for="ab" class="label radiolabel">Ancien bachelier</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card__button bg_green">
                            <button type="submit" id="verif-button" style="outline: none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                          clip-rule="evenodd"/>
                                </svg>
                                Vérification
                            </button>
                        </div>
                    </div>
                </form>

                <div class="card__footer">
                    <div class="card__footer__circle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <p>
                        <b>Information(s) :</b>
                    <ul>
                        <li>Veuillez utiliser l'adresse e-mail enregistrée lors de votre préinscription pour vérifier votre résultat</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<!--jquery validation-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
<!--others-->
<script src="../../assets/js/index.js"></script>
<script src="../../assets/js/load.js"></script>
</html>
