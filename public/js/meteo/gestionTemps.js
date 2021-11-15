const joursSemaine = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];

// recupére la date a l'instant T
let ajd = new Date();
let options = {weekday: 'long'};

// on convertie la date récupéré pour l'avoir en français en version longue grâce a l'option
let jourActuel = ajd.toLocaleDateString('fr-FR', options);
// console.log(ajd);
// console.log(jourActuel);

// Met la premiere lettre du jour en majuscule et rajoute le reste
jourActuel = jourActuel.charAt(0).toUpperCase() + jourActuel.slice(1);

// on coupe le tableau en deux si on est mardi 
// on récupére la partie de mardi a dimanche => joursSemaine.slice(joursSemaine.indexOf(jourActuel))
// puis on rajoute la partie qui a été enlevé a la fin donc lundi 
// ce qui permet d'avoir un tableau commençant toujours au jour actuel 
let tabJoursEnOrdre = joursSemaine.slice(joursSemaine.indexOf(jourActuel)).concat(joursSemaine.slice(0, joursSemaine.indexOf(jourActuel)));
// console.log(tabJoursEnOrdre);

