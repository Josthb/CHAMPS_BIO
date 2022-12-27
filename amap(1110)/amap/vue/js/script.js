let = tabs = document.querySelectorAll('.tabs__toggle'), //cette ligne permet de récupérer tous les éléments qui ont la classe tabs__toggle
    contents = document.querySelectorAll('.tabs__content'); //cette ligne permet de récupérer tous les éléments qui ont la classe tabs__content

tabs.forEach((tab, index) => {  //cette ligne permet de parcourir tous les éléments avec les paramètres tab et index qui sont les éléments parcourus et leur index
    tab.addEventListener('click', () => { //cette ligne permet d'ajouter un événement au clic sur les éléments qui ont la classe tabs__toggle
        contents.forEach((content) => { //Pour chaque élément qui a la classe tabs__content 
            content.classList.remove('is-active'); //on supprime la classe is-active
        });
        tabs.forEach ((tab) => { //Pour chaque élément qui a comme paramètre tab
            tab.classList.remove('is-active'); //on supprime la classe is-active
        });

        contents[index].classList.add('is-active'); //on ajoute la classe is-active à l'index de l'élément parcouru
        tabs[index].classList.add('is-active'); //on ajoute la classe is-active à l'index de l'élément parcouru
    });
})

