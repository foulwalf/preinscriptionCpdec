$(function () {
    var trimestre = $("#trimestre")
    var semestre = $("#semestre")
    $("#typeannee").change(function () {
        switch ($("#typeannee").val()){
            case "t" :
                trimestre.removeClass("f_off")
                semestre.addClass("f_off")
                break
            case "s" :
                semestre.removeClass("f_off")
                trimestre.addClass("f_off")
                break
            default :
                semestre.addClass("f_off")
                trimestre.addClass("f_off")
        }
    })
})
