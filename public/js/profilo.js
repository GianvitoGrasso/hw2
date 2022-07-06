function onResponse(response) {
    window.location.assign(response.url);
}

function elimina(event) {
    event.preventDefault();
    fetch(BASE_URL + 'elimina').then(onResponse);
    const sect = document.querySelector('section div div');
    sect.innerHTML=""; 
}

document.querySelector('button').addEventListener('click', elimina);