function showDetails( nombreE, nombreP, fecha, hora,tipoCita, estado, image) {
    document.getElementById('nombre-especialista').innerText = nombreE;
    document.getElementById('nombre-paciente').innerText = nombreP; // Aquí puedes añadir los datos correspondientes
    document.getElementById('fecha').innerText = fecha; // Aquí puedes añadir los datos correspondientes
    document.getElementById('hora').innerText = hora; // Aquí puedes añadir los datos correspondientes
    document.getElementById('tipo-cita').innerText = tipoCita;
    document.getElementById('estado').innerText = estado;
    document.getElementById('profile-picture').src = image || 'img/default-profile.png';; // Cambia la fuente de la imagen de perfil según el paciente
    document.getElementById('medico_id').value = medicoId;
}








