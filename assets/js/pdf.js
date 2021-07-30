$(document).ready(function () {
    let ues = {
        111: {
            nom: "Fondamentaux du droit"
        },
        115: {
            nom: "Economie comptemporaine"
        },
        118: {
            nom: "Système d'informations et de gestion"
        },
        119: {
            nom: "Comptabilité"
        }
        , 112: {
            nom: "Droit des sociétés et groupements d'affaires"
        }
        , 114: {
            nom: "Droit fiscal"
        }
        , 120: {
            nom: "Comptabilité approfondie"
        }
        , 122: {
            nom: "Anglais des affaires 1"
        }
        , 113: {
            nom: "Droit social"
        }
        , 116: {
            nom: "Finance d'entreprise"
        }
        , 117: {
            nom: "Management"
        }
        , 121: {
            nom: "Contrôle de gestion"
        }
        , 123: {
            nom: "Communication professionnelle"
        }
        , 211: {
            nom: "Gestion juridique et fiscal"
        }
        , 213: {
            nom: "Management et contr&ocirc;le de gestion"
        }
        , 218: {
            nom: "Anglais des affaires 2"
        }
        , 212: {
            nom: "Finance"
        }
        , 214: {
            nom: "Comptabilité et audit"
        }
        , 215: {
            nom: "Management des systèmes d'information"
        }
        , 217: {
            nom: "Mémoire"
        }
    }
    let sortUe = sessionStorage.ue.split(",").sort()
    var bodyData = [];
    sortUe.forEach(function (ue) {
        var dataRow = [];
        dataRow.push(ue);
        dataRow.push(ues[ue].nom);
        bodyData.push(dataRow)
    });

    let pdf;
    if (sessionStorage.moyenneCpdec) {
        pdf = {
            info: {
                title: 'Fiche de préinscription',
            },
            header: {text: "Fiche de préinscription au CPDEC", style: "header", alignment: "center"},
            footer: function (currentPage, pageCount) {
                return {text: currentPage.toString() + ' / ' + pageCount, alignment: "center"}
            },
            content: [
                {
                    text: `Année universitaire ${new Date().getFullYear()}-${new Date().getFullYear() + 1}`,
                    alignment: "center"
                },
                {text: `(Nouveaux bacheliers)`, alignment: "center", fontSize: 8, bold: true},
                {text: "I-IDENTIFICATION", style: "header"},
                {
                    table: {
                        widths: ['*', '*'],
                        body: [
                            [{
                                text: `Nom & prénoms  :  ${sessionStorage.nom} ${sessionStorage.prenom}`,

                                colSpan: 2,
                                border: [true, true, true, false]
                            }, {}],
                            [{
                                text: `Date et lieu de naissance  :  ${new Date(sessionStorage.dateDeNaissance).toLocaleDateString()} à ${sessionStorage.lieuDeNaissance}`,

                                colSpan: 2,
                                border: [true, false, true, false]
                            }, {}],
                            [{
                                text: `Nationalité  :  ${sessionStorage.nationalite}`,

                                colSpan: 2,
                                border: [true, false, true, false]
                            }, {}],
                            [{
                                text: `Contact  :  ${sessionStorage.contact}`,

                                border: [true, false, false, false]
                            }, {text: `E-mail  :  ${sessionStorage.email}`, border: [false, false, true, false]}],
                            [{
                                text: `Etablissement d'origine  :  ${sessionStorage.etablisssementDorigine}`,

                                colSpan: 2,
                                border: [true, false, true, false]
                            }, {}],
                            [{
                                text: `Année du bac  :  ${new Date().getFullYear()}`,

                                border: [true, false, false, false]
                            }, {
                                text: `Série  :  ${sessionStorage.serie}`,

                                border: [false, false, true, false]
                            }],
                            [{
                                text: `Nom & prénoms du parent  :  ${sessionStorage.nomDuParent} ${sessionStorage.prenomDuParent}`,

                                colSpan: 2,
                                border: [true, false, true, false]
                            }, {}],
                            [{
                                text: `Contact du parent :  ${sessionStorage.contactDuParent}`,

                                border: [true, false, false, false]
                            }, {
                                text: `E-mail du parent  :  ${sessionStorage.emailDuParent}`,

                                border: [false, false, true, false]
                            }],
                            [{
                                text: `Adresse du parent :  ${sessionStorage.adresseDuParent}`,

                                colSpan: 2,
                                border: [true, false, true, true]
                            }, {}],
                        ]
                    },
                    margin: [0, 0, 0, 10],
                },
                {text: "II-UNITES D'ENSEIGNEMENT CHOISIES", style: "header"},
                {
                    table: {
                        widths: ['auto', '*'],
                        headerRows: 1,
                        body: bodyData,
                        style: "tableStyle"
                    }
                },
                {text: "III-NOTES", style: "header"},
                {
                    table: {
                        headerRows: 1,
                        widths: ['auto', '*', '*', '*'],
                        body: [
                            [{text: "", border: [false, false, true, true]}, {
                                text: `Français`,

                                alignment: "center"
                            }, {
                                text: `Anglais`,

                                alignment: "center"
                            }, {text: `Mathématiques`, alignment: "center"}],
                            [{text: `Moyenne annuelle`,}, {
                                text: `${sessionStorage.moyenneAnnuelleFrancais}`,

                                alignment: "center"
                            }, {
                                text: `${sessionStorage.moyenneAnnuelleAnglais}`,

                                alignment: "center"
                            }, {text: `${sessionStorage.moyenneAnnuelleMath}`, alignment: "center"}],
                            [{text: `Note du bac`,}, {
                                text: `${sessionStorage.noteBacFrancais}`,

                                alignment: "center"
                            }, {
                                text: `${sessionStorage.noteBacAnglais}`,

                                alignment: "center"
                            }, {text: `${sessionStorage.noteBacMath}`, alignment: "center"}],
                            [{text: `Moyenne générale annuelle`,}, {
                                text: `${sessionStorage.moyenneGeneraleAnnuelle}`,

                                alignment: "center",
                                colSpan: 3
                            }, {}, {}],
                            [{text: `Points au bac`,}, {
                                text: `${sessionStorage.totalPointBac}`,

                                alignment: "center",
                                colSpan: 3
                            }, {}, {}],
                            [{text: `Moyenne du bac`,}, {
                                text: `${sessionStorage.moyenneBac}`,

                                alignment: "center",
                                colSpan: 3
                            }, {}, {}],
                        ]
                    }
                },
                {
                    layout: "noBorders",
                    table: {
                        headerRows: 1,
                        widths: ['*', '*'],
                        body: [
                            [{text: "Décision :  admis(e)", alignment: "left",}, {
                                text: `Date  :  ${new Date().toLocaleDateString()}`,

                                alignment: "right"
                            }]
                        ]
                    },
                    margin: [0, 10, 0, 0]
                },
                {
                    text: "Signature du Directeur",
                    alignment: "right",
                    decoration: "underline",
                    margin: [0, 10, 0, 0]
                }
            ],
            defaultStyle: {
                fontSize: 9,
                bold: true,
                lineHeight: 1
            },
            styles: {
                header: {
                    fontSize: 9,
                    bold: true,
                    alignment: "left",
                    margin: [0, 10, 0, 10]
                }
            }
        }
    } else {
        pdf = {
            info: {
                title: 'Fiche de préinscription',
            },
            header: {text: "Fiche de préinscription au CPDEC", style: "header", alignment: "center"},
            footer: function (currentPage, pageCount) {
                return {text: currentPage.toString() + ' / ' + pageCount, alignment: "center"}
            },
            content: [
                {
                    text: `Année universitaire ${new Date().getFullYear()}-${new Date().getFullYear() + 1}`,
                    alignment: "center"
                },
                {text: `(Anciens bacheliers)`, alignment: "center", fontSize: 8, bold: true},
                {text: "I-IDENTIFICATION", style: "header"},
                {
                    table: {
                        widths: ['*', '*'],
                        body: [
                            [{
                                text: `Nom & prénoms  :  ${sessionStorage.nom} ${sessionStorage.prenom}`,

                                colSpan: 2,
                                border: [true, true, true, false]
                            }, {}],
                            [{
                                text: `Date et lieu de naissance  :  ${new Date(sessionStorage.dateDeNaissance).toLocaleDateString()} à ${sessionStorage.lieuDeNaissance}`,

                                colSpan: 2,
                                border: [true, false, true, false]
                            }, {}],
                            [{
                                text: `Nationalité  :  ${sessionStorage.nationalite}`,

                                colSpan: 2,
                                border: [true, false, true, false]
                            }, {}],
                            [{
                                text: `Contact  :  ${sessionStorage.contact}`,

                                border: [true, false, false, false]
                            }, {text: `E-mail  : ${sessionStorage.email}`, border: [false, false, true, false]}],
                            [{
                                text: `Nom & prénoms du parent  :  ${sessionStorage.nomDuParent} ${sessionStorage.prenomDuParent}`,

                                colSpan: 2,
                                border: [true, false, true, false]
                            }, {}],
                            [{
                                text: `Contact du parent :  ${sessionStorage.contactDuParent}`,

                                border: [true, false, false, false]
                            }, {
                                text: `E-mail du parent  :  ${sessionStorage.emailDuParent}`,

                                border: [false, false, true, false]
                            }],
                            [{
                                text: `Adresse du parent :  ${sessionStorage.adresseDuParent}`,

                                colSpan: 2,
                                border: [true, false, true, true]
                            }, {}],
                        ]
                    },
                    margin: [0, 0, 0, 10],

                },
                {text: "II-UNITES D'ENSEIGNEMENT CHOISIES", style: "header"},
                {
                    table: {
                        widths: ['auto', '*'],
                        headerRows: 1,
                        body: bodyData,
                        style: "tableStyle"
                    }
                },
                {text: "III-SITUATION DU CANDIDAT", style: "header"},
                {text: `Profession  :  ${sessionStorage.profession}`},
                {text: `Entreprise ou établissement  :  ${sessionStorage.etablisssementDorigine}`},
                {text: `Dernier diplome  :  ${sessionStorage.diplome}`},
                {text: `Date du diplome  :  ${sessionStorage.anneeDuDiplome}`},
                {text: `Validation des études supérieures  :  ${sessionStorage.ves}`},
                {text: `Cours  :  ${sessionStorage.cours}`},
                {
                    layout: "noBorders",
                    table: {
                        headerRows: 1,
                        widths: ['*', '*'],
                        body: [
                            [{
                                text: "Décision :  admis(e)",
                                alignment: "left"
                            }, {text: `Date  :  ${new Date().toLocaleDateString()}`, alignment: "right"}]
                        ]
                    },
                    margin: [0, 10, 0, 0]
                },
                {
                    text: "Signature du Directeur",
                    alignment: "right",
                    decoration: "underline",
                    margin: [0, 10, 0, 0]
                }
            ],
            defaultStyle: {
                fontSize: 9,
                bold: true,
                lineHeight: 1
            },
            styles: {
                header: {
                    fontSize: 9,
                    bold: true,
                    alignment: "left",
                    margin: [0, 10, 0, 10]
                }
            }
        }
    }

    $("#btn-down-pdf").on("click", function () {
        pdfMake.createPdf(pdf).download(`Fiche de préinscription de ${sessionStorage.nom} ${sessionStorage.prenom}.pdf`, () => {
            location.href = "../verification/verification.php"
        })
    })
})
