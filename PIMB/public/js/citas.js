
function showDetails(nombreEspecialista, nombrePaciente, fecha, hora, tipoCita, estadoCita) {
    document.getElementById('nombre-especialista').innerText = nombreEspecialista;
    document.getElementById('nombre-paciente').innerText = nombrePaciente;
    document.getElementById('fecha').innerText = fecha;
    document.getElementById('hora').innerText = hora;
    document.getElementById('tipo-cita').innerText = tipoCita;
    document.getElementById('estado').innerText = estadoCita;
    document.getElementById('profile-picture').src = image || 'img/default-profile.png';;
}


