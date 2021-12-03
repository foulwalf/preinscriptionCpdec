$(function () {
    var entreprisediv = $("#enterprisediv")
    var etablissementdiv = $("#etablissementdiv")
    $('#profession div input[type=radio]').change(function () {
            if ($(this).val() === "TRAVAILLEUR") {
            etablissementdiv.addClass("f_off")
            document.getElementById("etablissement").value = ""
            entreprisediv.removeClass("f_off")
        } else if($(this).val() === "ETUDIANT"){
            entreprisediv.addClass("f_off");
            document.getElementById("enterprise").value = ""
            etablissementdiv.removeClass("f_off")

        }
    })
})