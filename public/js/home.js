function onJson(json) {
    console.log(json)
    for (i = 0; i < 10; i++) {
        if (json.player[i].strThumb == null) {
            
        } else {
                const sect = document.querySelector('section div');
                const par = document.querySelector('section p ');
                par.innerHTML="Ecco la tua Ricerca: ";
                sect.classList.remove('flex-containersection');
                sect.classList.add('flex');
                const div = document.createElement('div');
                div.classList.add('first');
                const immagine = document.createElement('img');
                const paragrafo = document.createElement('p');
                const button = document.createElement('button');
                immagine.src = json.player[i].strThumb;
                var img = immagine;
                paragrafo.textContent = json.player[i].strPlayer;
                button.innerHTML="Mi piace";
                button.addEventListener('click',mipiace);
                sect.appendChild(div);
                div.appendChild(immagine);
                div.appendChild(paragrafo);
                div.appendChild(button);
                }                
    }
}

function onJsonLike(json) {
    console.log(json)
}

function onResponseLike(response) {
    return response.json();
}

function mipiace(event) {
    event.preventDefault();
    const butt = event.currentTarget;
    if(butt.classList.contains('like'))
    {
        butt.classList.remove('like');
        blocco = event.currentTarget.parentNode;
        prova = event.currentTarget;
        prova.innerHTML="Mi piace";
        const image = blocco.querySelector('img').src;
        const par = blocco.querySelector('p').textContent;
        const form_data = new FormData;
        form_data.append("image", image);
        form_data.append("par", par);
        form_data.append("_token", csrf_token);
        fetch(BASE_URL + 'unLike', { method: "post", body: form_data}).then(onResponseLike).then(onJsonLike);
    } else {
        butt.classList.add('like');
        blocco = event.currentTarget.parentNode;
        prova = event.currentTarget;
        prova.innerHTML="Non mi piace";
        const image = blocco.querySelector('img').src;
        const imageok = encodeURIComponent(image);
        const par = blocco.querySelector('p').textContent;
        const parok = encodeURIComponent(par);
        const form_data = new FormData;
        form_data.append("image", imageok);
        form_data.append("par", parok);
        form_data.append("_token", csrf_token);
        fetch(BASE_URL + 'like', { method: "post", body: form_data}).then(onResponseLike).then(onJsonLike);
    }
}

function onResponseCerca(response) {
    return response.json();
}

function cerca (event) {
    event.preventDefault();
    const contenuto = document.querySelector('#contenuto').value;
    fetch(BASE_URL + "thesportsdb/" + contenuto).then(onResponseCerca).then(onJson);
    const sect = document.querySelectorAll('section div div');
    for (const ck of sect)
    {
        ck.remove();
    }
}

function onJsonPref(json) {
        for (i = 0; i < 10; i++) 
        {
                const sect = document.querySelector('section div');
                sect.classList.remove('flex-containersection');
                sect.classList.add('flex')
                const div = document.createElement('div');
                div.classList.add('first');
                const immagine = document.createElement('img'); 
                const paragrafo = document.createElement('p');
                const button = document.createElement('button');
                button.addEventListener('click', dislike);
                button.innerHTML="Non mi piace"; 
                button.classList.add('like');
                immagine.src = decodeURIComponent(json[i].img);
                paragrafo.textContent = decodeURIComponent(json[i].title);
                sect.appendChild(div);
                div.appendChild(immagine);
                div.appendChild(paragrafo);
                div.appendChild(button);
        }
}

function onResponsePref(response) {
    return response.json();
}

function preferiti () {
    fetch(BASE_URL + 'preferiti').then(onResponsePref).then(onJsonPref);
}

preferiti();

function onJsondisLike(json) {
    console.log(json)
}

function onResponsedisLike(response) {
    return response.json();
}

function dislike(event) {
    blocco = event.currentTarget.parentNode;
    const image = blocco.querySelector('img').src;
    const par = blocco.querySelector('p').textContent;
    const imageok = encodeURIComponent(image);
    const parok = encodeURIComponent(par);
    const form_data = new FormData;
    form_data.append("image", imageok);
    form_data.append("par", parok);
    form_data.append("_token", csrf_token);
    fetch(BASE_URL + 'disLike', { method: "post", body: form_data}).then(onResponsedisLike).then(onJsondisLike);
    blocco.remove();
}

function elimina(event) {
    event.preventDefault();
    fetch(BASE_URL + 'cancella')
    const sect = document.querySelectorAll('section div div');
    for (const ck of sect)
    {
        ck.innerHTML=""; 
    }
}

const form = document.querySelector('form');
form.addEventListener('submit', cerca);

const butt = document.querySelector('.flex-button');
butt.addEventListener('click', elimina);
