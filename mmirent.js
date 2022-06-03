var loupe = document.getElementById('loupe');
var recherche = document.getElementById('recherche');
function loupebar(){
    recherche.classList.toggle('nouv');
    recherche.classList.toggle('searchbar');
}
loupe.addEventListener('click', loupebar);