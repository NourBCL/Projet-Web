function verif() {
    var errors="<ul>"
    var nom=document.querySelector("#nom").value
    var prenom=document.querySelector("#prenom").value
    var age=document.querySelector("#age").value
    var adresse_cab=document.querySelector("#adresse_cab").value
    if(nom.charAt(0) < 'A' || nom.charAt(0) > 'Z') {
        errors+=("<li>Error!! Name must have a capital letter at first!!</li>")
    }

    if(prenom.charAt(0) < 'A' || prenom.charAt(0) > 'Z') {
        errors+=("<li>Error!! Last Name must have a capital letter at first!!</li>")
    }

    if(age < 10) {
        errors+=("<li>Error!! Must be +10 Years Old!!</li>")
    }

    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'red';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        console.log("dqfqf");
        return false;
    } 
    else { 
        return true;   
    }
}