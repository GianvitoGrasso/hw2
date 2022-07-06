function checknome(event)
{
    const nome = event.currentTarget;

    if(!/^[a-zA-Z]+$/.test(nome.value) || nome.value.length == 0)
        {
            const nomeSpan = document.querySelector('#nomeSpan');
            nomeSpan.classList.remove('hidden');
        }
        else
        {
            const nomeSpan = document.querySelector('#nomeSpan');
            nomeSpan.classList.add('hidden');
        }
}
function checkcognome(event)
{
    const cognome = event.currentTarget;
    if(!/^[a-zA-Z]+$/.test(cognome.value))
    {            
        const cognome = document.querySelector('#cognomeSpan');
        cognome.classList.remove('hidden');
    }
    else
    {
        const cognome = document.querySelector('#cognomeSpan');
        cognome.classList.add('hidden');
    }
}
function checkuser(event)
{
    const user = event.currentTarget;
    if(!/^[a-zA-Z0-9_]{1,15}$/.test(user.value))
    {
        const user = document.querySelector('#usernameSpan');
        user.classList.remove('hidden');
    }
}

function checkemail(event)
{
    const email = event.currentTarget;
    if(!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(email.value).toLowerCase())) 
    {
        const emailSpan = document.querySelector('#emailSpan');
        emailSpan.classList.remove('hidden');
    }
}
function checkpass(event)
{
    const pass = event.currentTarget;
    if(pass.value.length >= 8 && /^(?=.*[az])(?=.*[AZ])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]/.test(input.value)) 
    {
        const passSpan = document.querySelector('#passSpan');
        passSpan.classList.add('hidden');
    }
    else
    {
        const passSpan = document.querySelector('#passSpan');
        passSpan.classList.remove('hidden');
    }
}
function checkconfpass(event)
{
    const confpass = event.currentTarget;
    const password = document.querySelector('#passSpan');
    if(confpass.value === password.value) 
    {
        const confpass = document.querySelector('#confpassSpan');
        confpass.classList.remove('errore');
    }
    else
    {
        const confpass = document.querySelector('#confpassSpan');
        confpass.classList.add('errore');
    }
}
const nome = document.querySelector('#nome').addEventListener('blur', checknome);
const cognome = document.querySelector('#cognome').addEventListener('blur', checkcognome);
const username = document.querySelector('#username').addEventListener('blur', checkuser);
const email = document.querySelector('#email').addEventListener('blur', checkemail);
const password = document.querySelector('#password').addEventListener('blur', checkpass);
const confpass = document.querySelector('#confpass').addEventListener('blur', checkconfpass);