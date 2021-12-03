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
    <!--   Big container   -->
    <div class="header">
        <div class="header__img">
            <img src="../../assets/img/logoInphb.gif" alt="logoinphb">
        </div>
    </div>
    <div class="container">
        <div class="title"><h4>PR&Eacute;INSCRIPTION AU CPDEC</h4></div>
        <div class="card">
            <div class="card__body">
                <div class="card__title bg_orange">
                    <h4>
                        Nouveaux bacheliers
                    </h4>
                </div>
                <div class="card__details">
                    <div>Candidat ayant obtenu le bac en <?= date("Y") ?> </div>
                    <div class="card__button bg_orange"><a href="formulairenb.php"></a>
                        <button>Se préinscrire</button>
                    </div>
                </div>
                <div class="card__footer">
                    <div class="card__footer__circle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <p>
                        <b>Informations :</b>
                    <ul>
                        <li>Toute candidature comportant des déclarations ou des documents faux sera
                            systématiquement rejetée
                        </li>
                        <li>Les champs suivis d'une astérisque (*) sont obligatoires</li>
                    </ul>
                    </p>
                </div>
            </div>
            <div class="card__body">
                <div class="card__title bg_green">
                    <h4>
                        Anciens bacheliers
                    </h4>
                </div>
                <div class="card__details">
                    <div>Candidat ayant obtenu le bac avant <?= date("Y") ?> </div>
                    <div class="card__button bg_green"><a href="formulaireab.php"></a>
                        <button>Se préinscrire</button>
                    </div>
                </div>
                <div class="card__footer">
                    <div class="card__footer__circle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <p>
                        <b>Informations :</b>
                    <ul>
                        <li>Toute candidature comportant des déclarations ou des documents faux sera
                            systématiquement rejetée
                        </li>
                        <li>Les champs suivis d'une astérisque (*) sont obligatoires</li>
                    </ul>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="../../assets/js/load.js"></script>
</html>