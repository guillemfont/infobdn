function confirmElim(){ //Confirmar eliminació d'usuari
    let x = confirm("Estàs segur que vols eliminar l'usuari?\n Aquesta acció no es pot revertir.");

    if (x){
        return true;
    } else {
        return false;
    }
}

function modificarProf(){ //Confirmar modificació de professor
    let x = confirm("Estàs segur que vols guardar els canvis?");

    if (x){
        return true;
    } else {
        return false;
    }
}

function confirmEstat(){ //Confirmar convi d'estat d'usuari
    let x = confirm("Estàs segur que vols canviar l'estat de l'usuari?");

    if (x){
        return true;
    } else {
        return false;
    }
}
