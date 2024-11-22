function showDetails( nombre, cedula, especialidad1, descripcionE, image) {
    document.getElementById('nombre-especialista').innerText = nombre;
    document.getElementById('cedulaProfesional').innerText = cedula; // Aquí puedes añadir los datos correspondientes
    document.getElementById('especialidad').innerText = especialidad1; // Aquí puedes añadir los datos correspondientes
    document.getElementById('descripcion').innerText = descripcionE; // Aquí puedes añadir los datos correspondientes
    document.getElementById('profile-picture').src = image || 'img/default-profile.png';; // Cambia la fuente de la imagen de perfil según el paciente
}








