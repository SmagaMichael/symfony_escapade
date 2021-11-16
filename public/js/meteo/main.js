const CLEAPI = '90454e0a8f52b4e498fb29b5c11b9769';
let resultatsAPI;

// selection class
const title = document.querySelector('.title-meteo');
const temps = document.querySelector('.temps');

const temperature = document.querySelector('.temperature');
const localisation = document.querySelector('.localisation');

const heure = document.querySelectorAll('.heure-nom-prevision');
const tempPourH = document.querySelectorAll('.heure-prevision-valeur');
const iconParH = document.querySelectorAll('.heure-prevision-icon');

const joursDiv = document.querySelectorAll('.jour-prevision-nom');
const tempJoursDiv = document.querySelectorAll('.jour-prevision-temp');
const iconParJ = document.querySelectorAll('.jour-prevision-icon');

const imgIcone = document.querySelector('.logo-meteo');


const chargementContainer = document.querySelector('.overlay-icone-chargement');

// permet de demander la géolocalisation la première fois que l'appli est ouverte
// temps.innerText = resultatsAPI.current.weather[0].description;
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(position => {

        // console.log(position);
        let long = position.coords.longitude;
        let lat = position.coords.latitude;
        AppelAPI(long, lat);

    }, () => {
        alert(`Vous avez refusé la géolocalisation, l'application ne peur pas fonctionner, veuillez l'activer.!`)
    })
}

function AppelAPI(long, lat) {
    // console.log(long, lat);
    // eclusion des minutes / unité en metric / lang en fr
    fetch(`https://api.openweathermap.org/data/2.5/onecall?lat=${lat}&lon=${long}&exclude=minutely&units=metric&lang=fr&appid=${CLEAPI}`)
        .then((reponse) => {
            return reponse.json();
        })
        .then((data) => {
            console.log(data);
            resultatsAPI = data;

            temps.innerText = resultatsAPI.current.weather[0].description;
            temperature.innerText = Math.trunc(resultatsAPI.current.temp) + "°c";
            // localisation.innerText = resultatsAPI.timezone;

            // heures par tranche de 3 avec leur température
            let heureActuelle = new Date().getHours();

            // pour chaque heure-nom-prevision on augmentent de 3h
            for (let i = 0; i < heure.length; i++) {

                let heureIncr = heureActuelle + i * 3;

                if (heureIncr > 24) {
                    heure[i].innerText = `${heureIncr - 24}h`;
                } else if (heureIncr === 24) {
                    heure[i].innerText = "00h"
                } else {
                    heure[i].innerText = `${heureIncr}h`;
                }

            }

            // temp pour 3h
            for (let j = 0; j < tempPourH.length; j++) {
                tempPourH[j].innerText = Math.trunc(resultatsAPI.hourly[j * 3].temp) + "°C";
            }


            for (let n = 0; n < iconParH.length; n++) {
                iconParH[n].src = `img/meteo/AllIcone/${resultatsAPI.hourly[n * 3].weather[0].icon}.svg`
            }


            // trois premieres lettres des jours 
            for (let k = 0; k < tabJoursEnOrdre.length; k++) {
                joursDiv[k].innerText = tabJoursEnOrdre[k].slice(0, 3);
            }

            // Temps par jour
            for (let m = 0; m < 7; m++) {
                tempJoursDiv[m].innerText = Math.trunc(resultatsAPI.daily[m + 1].temp.day) + "°C"
            }
            for (let m = 0; m < 7; m++) {
                iconParJ[m].src = `img/meteo/AllIcone/${resultatsAPI.daily[m + 1].weather[0].icon}.svg`
            }



            // Icone dynamique 
            // if (heureActuelle >= 6 && heureActuelle < 21) {
            //     imgIcone.src = `img/meteo/nuit/${resultatsAPI.current.weather[0].icon}.svg`
            // } else {
            //     imgIcone.src = `img/meteo/jour/${resultatsAPI.current.weather[0].icon}.svg`
            // }

            imgIcone.src = `img/meteo/AllIcone/${resultatsAPI.current.weather[0].icon}.svg`
            chargementContainer.classList.add('disparition');

        })
}




// animation flash info

var info = [
'<p>Il n\'y a plus de croquette ! Alerte générale.</p>',
'<p>Michaël aime à la folie sa petite chérie .</p>'];
var index = 0;

function change_title() {
    var x = info[index];
    $('.flash-info').html(x);
    index++;
    if (index >= title.length) { index = 0; }
};

function change_left() {
    $('.flash-info').removeClass('slide-right').addClass('slide-left');
}

function change_right() {
    $('.flash-info').removeClass('slide-left').addClass('slide-right');
    change_title();
}

function to_left() {
setInterval(change_left, 10000);
};

function to_right() {
    setInterval(change_right, 20000);
};

to_left();
to_right();