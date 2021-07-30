<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>CPDEC</title>
    <link rel="stylesheet" href="../../assets/css/dist/style.css">
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
        <div class="title"><h4>NOTIFICATION</h4></div>
        <div class="card message-card">
            <div class="card__body">
                <div class="card__title bg-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                    <h4>
                        Echec
                    </h4>
                </div>
                <div class="card__details">
                    <div>
                        <?php
                        switch ($_GET['type']) {
                            case 'ed':
                                echo 'Ces informations existent déjà dans la base de données.';
                                break;
                            case 'inc':
                                echo 'Une erreur s\'est produite, veuillez réessayer.';
                                break;
                            case 'echecins':
                                echo  'Désolé, votre candidature a été rejetée.';
                                break;
                            case 'echecverif':
                                echo 'Une erreur s\'est produite, veuillez vérifier les informations saisies pour la vérification.';
                                break;
                            case 'waiting':
                                echo 'Votre candidature est en attente, nous vous contacterons sous peu en cas d\'un éventuel repêchage.';
                                break;
                                case 'nojs':
                                echo "JavaScript est désactivé sur votre navigateur, impossible d'accéder au site";
                                break;
                            default:
                                header('location: ../../../');
                                break;
                        }
                        ?>
                    </div>
                    <div class="card__button bg-red-500"><a href="<?= ($_GET['type'] == "echecins" || $_GET['type'] == "echecverif" || $_GET['type'] == "waiting") ? "../verification/verification.php" : "../../../" ?>"></a>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            Retour
                        </button>
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
                        <li>Pour plus d'informations veuillez contacter le <?php include "../../../mvc/config.php"; echo $contact_durgence; ?></li>
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