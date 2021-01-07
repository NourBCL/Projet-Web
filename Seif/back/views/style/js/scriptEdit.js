function verif_edit() {
    var errors = "<ul>";
    var nom = document.querySelector('#nom').value;
    var date = document.querySelector('#date').value;
    var lieu = document.querySelector('#lieu').value;
    var description = document.querySelector('#description').value;
    var categorie = document.querySelectorAll('input[type=radio]'), nb = 0, p = ""; 

    if (nom === "") {
        errors += "<li>Name missed </li>";
    }
   else if (nom.charAt(0) < 'A' || nom.charAt(0) > 'Z') {
        errors += "<li>Le nom de l'evenement doit commencer par une lettre Majuscule </li>";
    }
   
    if (date === "") {
        errors += "<li>Date missed  </li>";
    }
    if (lieu === "") {
        errors += "<li> Place missed </li>";
    }
    if (description === "") {
        errors += "<li>Description missed</li>";
    }
    for (var i = 0; i < categorie.length; i++) {
        if (categorie[i].checked) {
            nb++;
            p += categorie[i].value + " ";
        }
    };
    if (nb!=1) {
        errors += "<li> choose a category </li>";
    };
    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'red';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    }
 
    else {
        var msg = "event edited"; 
        alert(msg);
    }
}