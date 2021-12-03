(function () {
    var emails = {}
    $.ajax({
        type: "POST",
        url: "../../controllers/ajax.php",
        data: {method: "load"},
        dataType: "JSON",
        success: function (data) {
            emails = data
            $.validator.addMethod("repeatEmail", function (value) {
                return !emails.includes($("#email").val())
            }, "Cette adresse e-mail est déjà utilisée");
        },
        error: function () {
            // console.log("error")
        }
    })

    let formulairenb = $('#formulairenb');
    let formulaireab = $('#formulaireab');
    let verifform = $('#verifform');
    let trimestre = {
        required: {
            depends: () => {
                return ($('#trimestre').hasClass("f_off"))
            }
        }
    }
    let semestre = {
        required: {
            depends: () => {
                return ($('#semestre').hasClass("f_off"))
            }
        }
    }
    let rulesNB = {
        nom: {
            required: true,
            noNumber: true,
            noSpace: true
        },
        prenom: {
            required: true,
            noNumber: true,
            noSpace: true
        },
        ddnaiss: {
            required: true,
            date: true,
            dateNaissance: true
        },
        lieunaiss: {
            required: true,
            noSpecial: true,
            noSpace: true
        },
        nationalite: {
            required: true,
            noNumber: true,
            noSpace: true
        },
        contact: {
            required: true,
            minlength: 10,
            tel: true,
            noSpace: true
        },
        email: {
            required: true,
            email: true,
            repeatEmail: true,
            noSpace: true
        },
        etablissemntorg: {
            required: true,
            noSpecial: true,
            noSpace: true
        },
        serie: {
            required: true,
            noSpace: true,
            noSpace: true
        },
        nomparent: {
            required: true,
            noNumber: true,
            noSpace: true
        },
        prenomparent: {
            required: true,
            noNumber: true,
            noSpace: true
        },
        contactparent: {
            required: true,
            minlength: 10,
            tel: true,
            noSpace: true
        },
        emailparent: {
            email: {
                depends: function () {
                    return $("input[name=emailparent]").val().trim().length !== 0
                }
            },
        },
        adresseparent: {
            required: true,
            noSpace: true
        },
        ue: {
            required: {
                depends: function () {
                    return !($('input[type = hidden]').length > 2)
                }
            }
        },
        moyannfran: {
            required: true,
            number: true,
            min: 0,
            max: 20,
            noSpace: true
        },
        moyannang: {
            required: true,
            number: true,
            min: 0,
            max: 20,
            noSpace: true
        },
        moyannmath: {
            required: true,
            number: true,
            min: 0,
            max: 20,
            noSpace: true
        },
        notebacfran: {
            required: true,
            number: true,
            min: 0,
            max: 20,
            noSpace: true
        },
        notebacang: {
            required: true,
            number: true,
            min: 0,
            max: 20,
            noSpace: true
        },
        notebacmath: {
            required: true,
            number: true,
            min: 0,
            max: 20,
            noSpace: true
        },
        mga: {
            required: true,
            number: true,
            min: 0,
            max: 20,
            noSpace: true
        },

        moybac: {
            required: true,
            number: true,
            min: 0,
            max: 20,
            noSpace: true
        },
        pointbac: {
            required: true,
            number: true,
            min: 200,
            max: 400,
            noSpace: true

        },
        typeannee: {
            required: {
                depends: function () {
                    return ($('#trimestre').hasClass("f_off") && $('#semestre').hasClass("f_off"))
                }
            }
        },
        bulletinDuTrimestre1: {
            required: trimestre,
            accept: "image/*, application/pdf",
            extension: "jpg|jpeg|png|pdf"
        },
        bulletinDuTrimestre2: {
            required: trimestre,
            accept: "image/*, application/pdf",
            extension: "jpg|jpeg|png|pdf"
        },

        bulletinDuTrimestre3: {
            required: trimestre,
            accept: "image/*, application/pdf",
            extension: "jpg|jpeg|png|pdf"
        },
        releveDeNoteDuBacT: {
            required: trimestre,
            accept: "image/*, application/pdf",
            extension: "jpg|jpeg|png|pdf"
        },
        bulletinDuSemestre1: {
            required: semestre,
            accept: "image/*, application/pdf",
            extension: "jpg|jpeg|png|pdf"
        },
        bulletinDuSemestre2: {
            required: semestre,
            accept: "image/*, application/pdf",
            extension: "jpg|jpeg|png|pdf"
        },
        releveDeNoteDuBacS: {
            required: semestre,
            accept: "image/*, application/pdf",
            extension: "jpg|jpeg|png|pdf"
        },
    }
    let messagesNB = {
        nom: {
            required: "Ce champ est requis",
        },
        prenom: {
            required: "Ce champ est requis"
        },
        ddnaiss: {
            required: "Ce champ est requis",
            date: "La date n'est pas valide"
        },
        lieunaiss: {
            required: "Ce champ est requis"
        },
        nationalite: {
            required: "Ce champ est requis",
        },
        contact: {
            required: "Ce champ est requis",
            minlength: "Le numero doit contenir au moins 10 chiffres"
        },
        email: {
            required: "Ce champ est requis",
            email: "Adresse E-mail invalide",
        },
        etablissemntorg: {
            required: "Ce champ est requis"
        },
        serie: {
            required: "Ce champ est requis"
        },
        nomparent: {
            required: "Ce champ est requis",
        },
        prenomparent: {
            required: "Ce champ est requis",
        },
        contactparent: {
            required: "Champ est requis",
            minlength: "Le numero doit contenir au moins 10 chiffres"
        },
        emailparent: {
            required: "Ce champ est requis",
            email: "Adresse E-mail invalide",
        },
        adresseparent: {
            required: "Ce champ est requis"
        },
        ue: {
            required: "Il vous faut au minimun 1 UE supplémentaire en plus des 2 obligatoires"
        },
        moyannfran: {
            required: "Ce champ est requis",
            min: "La moyenne ne peut pas être inférieure à 0",
            max: "La moyenne ne peut pas être supérieure à 20",
            number: "Moyenne invalide"

        },
        moyannang: {
            required: "Ce champ est requis",
            min: "La moyenne ne peut pas être inférieure à 0",
            max: "La moyenne ne peut pas être supérieure à 20",
            number: "Moyenne invalide"
        },
        moyannmath: {
            required: "Ce champ est requis",
            min: "La moyenne ne peut pas être inférieure à 0",
            max: "La moyenne ne peut pas être supérieure à 20",
            number: "Moyenne invalide"
        },
        notebacfran: {
            required: "Ce champ est requis",
            min: "La note ne peut pas être inférieure à 0",
            max: "La note ne peut pas être supérieure à 20",
            number: "Note invalide"
        },
        notebacang: {
            required: "Ce champ est requis",
            min: "La note ne peut pas être inférieure à 0",
            max: "La note ne peut pas être supérieure à 20",
            number: "Note invalide"
        },
        notebacmath: {
            required: "Ce champ est requis",
            min: "La note ne peut pas être inférieure à 0",
            max: "La note ne peut pas être supérieure à 20",
            number: "Note invalide"
        },
        mga: {
            required: "Ce champ est requis",
            min: "La moyenne ne peut pas être inférieure à 0",
            max: "La moyenne ne peut pas être supérieure à 20",
            number: "Moyenne générale invalide"
        },
        moybac: {
            required: "Ce champ est requis",
            min: "La moyenne ne peut pas être inférieure à 0",
            max: "La moyenne ne peut pas être supérieure à 20",
            number: "Note invalide"
        },
        pointbac: {
            required: "Ce champ est requis",
            min: "Le total des points ne peut pas être inférieure à 200",
            max: "Le total des points  ne peut pas être supérieure à 400",
            number: "Total invalide"
        },
        typeannee: {
            required: "Vous devez choisir le type d'année scolaire et charger vos différents fichiers"
        },
        bulletinDuTrimestre1: {
            required: "Ce fichier est requis",
            accept: "Ce champ n'accepte que les images ou les fichiers pdf",
            extension: "Ce champ n'accepte que les images ou les fichiers pdf"
        },
        bulletinDuTrimestre2: {
            required: "Ce fichier est requis",
            accept: "Ce champ n'accepte que les images ou les fichiers pdf",
            extension: "Ce champ n'accepte que les images ou les fichiers pdf"
        },
        bulletinDuTrimestre3: {
            required: "Ce fichier est requis",
            accept: "Ce champ n'accepte que les images ou les fichiers pdf",
            extension: "Ce champ n'accepte que les images ou les fichiers pdf"
        },
        releveDeNoteDuBacS: {
            required: "Ce fichier est requis",
            accept: "Ce champ n'accepte que les photos ou les fichiers pdf",
            extension: "Ce champ n'accepte que les photos ou les fichiers pdf"
        },
        bulletinDuSemestre1: {
            required: "Ce fichier est requis",
            accept: "Ce champ n'accepte que les photos ou les fichiers pdf",
            extension: "Ce champ n'accepte que les img ou les fichiers pdf"
        },
        bulletinDuSemestre2: {
            required: "Ce fichier est requis",
            accept: "Ce champ n'accepte que les photos ou les fichiers pdf",
            extension: "Ce champ n'accepte que les img ou les fichiers pdf"
        },
        releveDeNoteDuBacT: {
            required: "Ce fichier est requis",
            accept: "Ce champ n'accepte que les photos ou les fichiers pdf",
            extension: "Ce champ n'accepte que les photos ou les fichiers pdf"
        },
    }
    let rulesAB = {
        nom: {
            required: true,
            noNumber: true,
            noSpace: true
        },
        prenom: {
            required: true,
            noNumber: true,
            noSpace: true
        },

        ddnaiss: {
            required: true,
            date: true,
            dateNaissance: true
        },
        lieunaiss: {
            required: true,
            noSpecial: true,
            noSpace: true
        },
        nationalite: {
            required: true,
            noNumber: true,
            noSpace: true
        },
        contact: {
            required: true,
            minlength: 10,
            tel: true,
            noSpace: true
        },
        email: {
            required: true,
            email: true,
            repeatEmail: true,
            noSpace: true
        },
        diplome: {
            required: true,
            noNumber: true,
            noSpecial: true,
            noSpace: true
        },
        anneediplome: {
            max: new Date().getFullYear(),
            min: new Date().getFullYear() - 100,
            required: true,
            number: true,
            diplomeValide: true,
            digits: true,
            date: true,
            noSpace: true
        },
        nomparent: {
            required: {
                depends: function () {
                    return !($('#prenomparent').val().trim().length === 0 && $('#contactparent').val().trim().length === 0 && $('#adresseparent').val().trim().length === 0)
                }
            },
            noNumber: {
                depends: function () {
                    return $('#nomparent').val().trim().length !== 0
                }
            },
        },
        prenomparent: {
            required: {
                depends: function () {
                    return !($('#nomparent').val().trim().length === 0 && $('#contactparent').val().trim().length === 0 && $('#adresseparent').val().trim().length === 0)
                }
            },
            noNumber: {
                depends: function () {
                    return $('#prenomparent').val().trim().length !== 0
                }
            },
        },
        contactparent: {
            required: {
                depends: function () {
                    return !($('#nomparent').val().trim().length === 0 && $('#prenomparent').val().trim().length === 0 && $('#adresseparent').val().trim().length === 0)
                }
            },
            minlength: 10,
            tel: {
                depends: function () {
                    return $('#contactparent').val().trim().length !== 0
                }
            },
        },
        emailparent: {
            email: {
                depends: function () {
                    return $("input[name=emailparent]").val().trim().length !== 0
                }
            },
        },
        adresseparent: {
            required: {
                depends: function () {
                    return !($('#nomparent').val().trim().length === 0 && $('#prenomparent').val().trim().length === 0 && $('#contactparent').val().trim().length === 0)
                }
            },
        },
        ue: {
            required: {
                depends: function () {
                    return !($('input[type = hidden]').length > 2)
                }
            }
        },
        profession: {
            required: true
        },
        entreprise: {
            required: {
                depends: () => {
                    return ($('#ptravailleur').is(':checked'))
                }
            },
            noSpace: {
                depends: () => {
                    return ($('#ptravailleur').is(':checked'))
                }
            },
        },
        etablissement: {
            required: {
                depends: () => {
                    return ($('#petudiant').is(':checked'))
                }
            },
            noSpace: {
                depends: () => {
                    return ($('#ptravailleur').is(':checked'))
                }
            },
        },
        ves: {
            required: true
        },
        cours: {
            required: true
        },
        releveDeNoteDuBac: {
            required: true,
            accept: "image/*, application/pdf",
            extension: "jpg|jpeg|png|pdf"
        },
        autreDocument: {
            required: true,
            accept: "image/*, application/pdf",
            extension: "jpg|jpeg|png|pdf"
        }
    }
    let messagesAB = {
        nom: {
            required: "Ce champ est requis",
        },
        prenom: {
            required: "Ce champ est requis"
        },
        ddnaiss: {
            required: "Ce champ est requis",
            date: "La date n'est pas valide"
        },
        lieunaiss: {
            required: "Ce champ est requis"
        },
        nationalite: {
            required: "Ce champ est requis",
        },
        contact: {
            required: "Ce champ est requis",
            minlength: "Le numero doit contenir au moins 10 chiffres"
        },
        email: {
            required: "Ce champ est requis",
            email: "Adresse E-mail invalide (exemple: xxxx@xxx.xxx)",
        },
        diplome: {
            required: "Ce champ est requis"
        },
        anneediplome: {
            required: "Ce champ est requis",
            max: `Veuillez saisir une année inférieur à ${new Date().getFullYear()}`,
            min: `Veuillez saisir une année supérieur à ${new Date().getFullYear() - 100}`,
            number: 'Veuillez saisir une année valide',
            digits: 'Veuillez saisir une année valide',
            date: "Veuillez entrer une année valide"
        },
        nomparent: {
            required: "Ce champ est requis",
        },
        prenomparent: {
            required: "Ce champ est requis",
        },
        contactparent: {
            required: "Champ est requis",
            minlength: "Le numero doit contenir au moins 10 chiffres"
        },
        emailparent: {
            email: "Adresse E-mail invalide",
        },
        adresseparent: {
            required: "Ce champ est requis"
        },
        ue: {
            required: "Il vous faut au minimun 1 UE supplémentaire en plus des 2 obligatoires"
        },
        profession: {
            required: "Veuillez choisir votre profession",
        },
        entreprise: {
            required: "Ce champ est requis",
            noSpace: true
        },
        etablissement: {
            required: "Ce champ est requis",
            noSpace: true
        },
        ves: {
            required: "Veuillez choisir une option"
        },
        cours: {
            required: "Veuillez choisir une option"
        },
        releveDeNoteDuBac: {
            required: "Ce fichier est requis",
            accept: "Ce champ n'accepte que les images ou les fichiers pdf",
            extension: "Ce champ n'accepte que les images ou les fichiers pdf"
        },
        autreDocument: {
            required: "Ce fichier est requis",
            accept: "Ce champ n'accepte que les images ou les fichiers pdf",
            extension: "Ce champ n'accepte que les images ou les fichiers pdf"
        },
    }
    let rulesV = {
        verifemail: {
            required: true,
            email: true,
            noSpace: true
        },
        typebachelier: {
            required: true
        }
    }
    let messagesV = {
        verifemail: {
            required: "Ce champ est requis",
            email: "Saisissez une adresse email valide"
        },
        typebachelier: {
            required: "Veuillez choisir un option"
        }
    }
    $.validator.addMethod("noNumber", function (value) {
        return /^[A-Z'\-\s ]+$/.test(value.toUpperCase());
    }, "Ce champ ne doit contenir que des lettres sans accents");

    $.validator.addMethod("noSpecial", function (value) {
        return /^[A-Z0-9'\-,\s]+$/.test(value.toUpperCase());
    }, "Ce champ ne doit pas contenir de caractères spéciaux ou accentués");

    $.validator.addMethod("noSpace", function (value) {
        return value.trim().length !== 0;
    }, "Ce champ ne contient que des espaces");

    $.validator.addMethod("tel", function (value) {
        return /^(\+|)[0-9]+$/.test(value.toUpperCase());
    }, "Ce champ ne contient pas un numéro valide");

    $.validator.addMethod("diplomeValide", function () {
        return $('[name=anneediplome]')[0].value != new Date().getFullYear().toString() || $('[name=diplome]')[0].value.toUpperCase() != 'BAC'
    }, "Vous êtes un nouveau bachelier, préinscrivez vous dans l'espace dédié aux nouveaux bacheliers");
    $.validator.addMethod("dateNaissance", function () {
        var d1 = new Date($('[name=ddnaiss]')[0].value).getTime()
        var now = new Date()
        var d2 = new Date(now.getUTCFullYear(), now.getUTCMonth(), now.getUTCDate()).getTime()
        return !(d1 >= d2)
    }, "Votre date de naissance ne peut pas être supérieure ou égale à la date d'aujourd'hui");
    //soumission si le formulaire est valide
    $("#btn-valid-nb").on("click", function (e) {
        e.preventDefault();
        if (formulairenb.valid()) {
            $('.loader').removeClass("f_off").addClass("loader-opac")
            formulairenb.submit()
        }
    });
    $("#btn-valid-ab").on("click", function (e) {
        e.preventDefault();
        if (formulaireab.valid()) {
            $('.loader').removeClass("f_off").addClass("loader-opac")
            formulaireab.submit()
        }
    });
    $("#verif-button").on("click", function (e) {
        e.preventDefault()
        if (verifform.valid()) {
            $('.loader').removeClass("f_off").addClass("loader-opac")
            let verifemail = $("#verifemail").val()
            let typebachelier = $("#nb").is(":checked") ? $("#nb").val() : $("#ab").val()
            $.ajax({
                type: "POST",
                url: "../../controllers/ajax.php",
                data: {method: "verif", verifemail: verifemail, typebachelier: typebachelier},
                dataType: "JSON",
                success: function (data) {
                    if (data.etat === "1") {
                        window.location.href = "../../views/verification/admis.php"
                    } else if (data.etat === "0") {
                        window.location.href = "../../views/messages/erreur.php?type=echecins"
                    } else {
                        window.location.href = "../../views/messages/erreur.php?type=waiting"
                    }
                },
                error: function (error) {
                    window.location.href = "../../views/messages/erreur.php?type=echecverif"
                }
            })
        }
    });

    $('input[id^=btn-reset]').on("click", function (e) {
        window.location = "accueil.php"
    })

    $('input[type=text]').focusout(function (e) {
        $(this).val($(this).val().toUpperCase())
    })
    // validation de formulaire des nouveaux bacheliers
    formulairenb.validate({rules: rulesNB, messages: messagesNB});

    // validation du formulaire des anciens bacheliers
    formulaireab.validate({rules: rulesAB, messages: messagesAB});

    //validation du formulaire de vérification
    verifform.validate({rules: rulesV, messages: messagesV})

})();
