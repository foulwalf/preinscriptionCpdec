function getNbUe() {
    let nbreUe = $('input[type = hidden]').length
    document.getElementById("nbUe").innerText = nbreUe
}
var select = document.getElementById('select')
var options = select.getElementsByTagName('option')
var area = document.getElementById('area')
getNbUe()
select.addEventListener('change', (option) => {
    getNbUe()
    var input = document.createElement('input')
    var div = document.createElement('div')
    var close = document.createElement('div')
    close.appendChild(document.createTextNode("X"))



    var value = option.target.value
    var choix = $(`[value = ${value}]`)[0].textContent
    var child = document.getElementById(option.target.value)

    child.style.display = 'none'
    options[0].selected = true
    input.setAttribute('name', 'ue[]')
    input.setAttribute('type', 'hidden')
    input.setAttribute('value', value)


    div.setAttribute('class', 'choix toggle')
    div.appendChild(document.createTextNode(choix))
    div.appendChild(input)


    close.setAttribute('onclick', `deselectionner(this, ${value});`)
    close.setAttribute('class', `fermer`)
    div.appendChild(close)
    area.appendChild(div);
});
function deselectionner(div, id) {
    var child = $(div).parent()[0]
    var option = document.getElementById(id)
    option.style.display = 'block'
    area.removeChild(child)
    getNbUe()
}
