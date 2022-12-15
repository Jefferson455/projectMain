function alertConfirm(e) {
    if (confirm("¿Estás seguro que deseas eliminar el dato?")) {
        return true;
    } else {
        e.preventDefault();
    }
}

let linkdelete = document.querySelectorAll('.a_trash');

for (let i = 0; i < linkdelete.length; i++) {
    linkdelete[i].addEventListener('click', alertConfirm);
}