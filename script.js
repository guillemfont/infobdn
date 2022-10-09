function confirmElim(){ //Confirmar eliminació d'usuari
    let x = confirm("Estàs segur que vols eliminar l'usuari?\n Aquesta acció no es pot revertir.");

    if (x){
        return true;
    } else {
        return false;
    }
}

