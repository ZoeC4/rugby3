        /* fonction d'accessibilité */
    /* les variables */
    /* ouverture d'une page */
window.addEventListener('load', function() {
    var cR = JSON.parse(localStorage.getItem('cR')); // transtypage
    var aP = JSON.parse(localStorage.getItem('aP'));
    var pL = JSON.parse(localStorage.getItem('pL'));
    var pO = JSON.parse(localStorage.getItem('pO'));
    if(cR){
        alert("boucle contraste R");
        contrasteR();
    }
    if (aP){
        alert("boucle police +");
        policePlus();
    }
    if (pL){
        alert("boucle police Dys");
        policeDys();
    }
    if (pO){
        alert("boucle police Luciole");
        policeLuciole();
    }
});
function logo(){
    contraste();
    policeMoins();
    policeArial();
}
    // adapter la couleur de la fleche

document.addEventListener('focusin', function(event) {
    const targetElement = event.target;
    const computedStyle = window.getComputedStyle(targetElement);
    const backgroundColor = computedStyle.backgroundColor;
    const flecheElement = document.getElementById("img_fleche");
    if (backgroundColor === "#000000") {
        flecheElement.styleborder = "1px #ffffff solid";
        flecheElement.style.backgroundColor="#ffffff";
    } else {
      flecheElement.style.filter = "none";
    }
});

    /* fonction contraste */
function contrasteR() {
    localStorage.setItem('cR', 'true');
    // Obtenir les éléments
    var sectionElement = document.getElementById("section");
    var asideElement = document.getElementById("aside");
    var titreElement = document.getElementById("titre");
    var imageElement = document.querySelectorAll(".iconesC");
    // changer la couleur de fond et de police
    sectionElement.style.backgroundColor = '#000000';
    sectionElement.style.color = '#ffffff';
    asideElement.style.backgroundColor = '#000000';
    asideElement.style.color = '#ffffff';
    titreElement.style.backgroundColor = '#000000';
    titreElement.style.color = '#ffffff';
    imageElement.forEach(function(element) {
        element.style.filter = "invert(100%) brightness(90%)";
        element.style.border = "1px solid #ffffff";
    });

        // liens
    var lienElement = document.querySelectorAll(".custom-link");

    lienElement.forEach(function(element){
        element.style.color = '#86ABE3';
        // Au survol
        element.addEventListener('mouseover', function () {
            element.style.fontSize = '2em';
            element.style.color = '#e19d20';
        });
        // quitter le survol
        element.addEventListener('mouseout', function () {
            element.style.fontSize = '1em'; // Rétablir la taille de la police par défaut
            element.style.color = '#86ABE3';
        });
        // Sur clic
        element.addEventListener('mousedown', function () {
            element.style.color = '#FF1E00';
        });
        // Sur relâchement après le clic
        element.addEventListener('mouseup', function () {
            element.style.color = '#86ABE3';
        });
    });
}

function contraste() {
    localStorage.setItem('cR', 'false');
    // Obtenir les éléments
    var sectionElement = document.getElementById("section");
    var asideElement = document.getElementById("aside");
    var titreElement = document.getElementById("titre");
    var imageElement = document.querySelectorAll(".iconesC");
    // changer la couleur de fond et de police
    sectionElement.style.backgroundColor = '#D77FE4';
    sectionElement.style.color = '#000000';
    asideElement.style.backgroundColor = '#B9BA58';
    asideElement.style.color = '#000000';
    titreElement.style.backgroundColor = '#77BBC2';
    titreElement.style.color = '#000000';
    imageElement.forEach(function(element) {
        element.style.filter="none";
        element.style.border="none";
    });

        // les liens plus particuliers
    var lienElement = document.querySelectorAll(".custom-link");

    lienElement.forEach(function(element){
        element.style.color = '#000000';

    });
}
    /* fonction police */
function policeDys() {
    localStorage.setItem('pO', 'true');
    localStorage.setItem('pL', 'false');
        // Obtenir les éléments
    var h1Element = document.querySelector('h1');
    var h2Element = document.querySelectorAll('h2');
    var h3Element = document.querySelectorAll('h3');
    var h4Element = document.querySelectorAll('h4');
    var impElement = document.getElementById("imp");
    var bodyElement = document.body;

    var openDyslexicRegularFont = new FontFace('OpenDyslexic_regular', 'url(open_dyslexic/OpenDyslexic-Regular.otf)');
        openDyslexicRegularFont.load().then(function(loadedFont) {
        document.fonts.add(loadedFont);
        bodyElement.style.fontFamily = "OpenDyslexic_regular, arial";
    }).catch(function(error) {
        console.error('Erreur de chargement de la police OpenDyslexic:', error);
        // mettre un code erreur plus clair pour l'user
        alert('police non utilisable');
    })
    var openDyslexicBoldFont = new FontFace('OpenDyslexic_bold', 'url(open_dyslexic/OpenDyslexic-Bold.otf)');
        openDyslexicBoldFont.load().then(function(loadedFont) {
        document.fonts.add(loadedFont);
        h1Element.style.fontFamily = "OpenDyslexic_bold, arial";
        h2Element.forEach(function(element){
            element.style.fontFamily = "OpenDyslexic_bold, arial";
        });
        h3Element.forEach(function(element){
            element.style.fontFamily = "OpenDyslexic_bold, arial";
        });
        h4Element.forEach(function(element){
            element.style.fontFamily = "OpenDyslexic_bold, arial";
        });
        impElement.style.fontFamily = "OpenDyslexic_bold, arial";
    }).catch(function(error) {
        alert('police non utilisable');
    })
}
function policeLuciole() {
    localStorage.setItem('pO', 'false');
    localStorage.setItem('pL', 'true');
    // Obtenir les éléments
    var h1Element = document.querySelector('h1');
    var h2Element = document.querySelectorAll('h2');
    var h3Element = document.querySelectorAll('h3');
    var h4Element = document.querySelectorAll('h4');
    var impElement = document.getElementById("imp");
    var bodyElement = document.body;

    var lucioleRegularFont = new FontFace('Luciole_regular', 'url(luciole/Luciole-Regular.ttf)');
        lucioleRegularFont.load().then(function(loadedFont) {
        document.fonts.add(loadedFont);
        bodyElement.style.fontFamily = "Luciole_regular, arial";
    }).catch(function(error) {
        alert('police non utilisable');
    })
    var lucioleBoldFont = new FontFace('Luciole_bold', 'url(luciole/Luciole-Bold.ttf)');
        lucioleBoldFont.load().then(function(loadedFont) {
        document.fonts.add(loadedFont);
        h1Element.style.fontFamily = "Luciole_bold, arial";
        h2Element.forEach(function(element){
            element.style.fontFamily = "Luciole_bold, arial";
        });
        h3Element.forEach(function(element){
            element.style.fontFamily = "Luciole_bold, arial";
        });
        h4Element.forEach(function(element){
            element.style.fontFamily = "Luciole_bold, arial";
        });
        impElement.style.fontFamily = "Luciole_bold, arial";
    }).catch(function(error) {
        alert('police non utilisable');
    })
}
function policeArial() {
    localStorage.setItem('pO', 'false');
    localStorage.setItem('pL', 'false');
        // Obtenir les éléments
    var h1Element = document.querySelector('h1');
    var h2Element = document.querySelectorAll('h2');
    var h3Element = document.querySelectorAll('h3');
    var h4Element = document.querySelectorAll('h4');
    var impElement = document.getElementById("imp");
    var bodyElement = document.body;
    h1Element.style.fontFamily = "Arial, sans-serif";
    h2Element.forEach(function(element){
        element.style.fontFamily = "Arial, sans-serif";
    });
    h3Element.forEach(function(element){
        element.style.fontFamily = "Arial, sans-serif";
    });
    h4Element.forEach(function(element){
        element.style.fontFamily = "Arial, sans-serif";
    });
    impElement.style.fontFamily = "Arial, sans-serif";
    bodyElement.style.fontFamily = "Arial, sans-serif";
}
    /* taille de la police */
function policePlus(){
    localStorage.setItem('aP', 'true');
    var bodyElement = document.body;
    bodyElement.style.fontSize = "30px";
    var imgsElement = document.querySelectorAll('.img_section');
    var imgfElement = document.querySelectorAll('.img_footer2');
    var icones1Element = document.querySelectorAll('.icones');
    var icones2Element = document.querySelectorAll('.iconesN');
    var icones3Element = document.querySelectorAll('.iconesC');
    var largeurEcran = window.innerWidth;
    imgsElement.forEach(function(element){
        element.style.width = "85%";
    });
    imgfElement.forEach(function(element){
        if (largeurEcran > 920) {
            element.style.width = "40%";
        } else {
            element.style.width = "20%";
        }
    });
    icones1Element.forEach(function(element){
        element.style.width = "45px";
        element.style.height = "45px";
    });
    icones2Element.forEach(function(element){
        element.style.width = "45px";
        element.style.height = "45px";
    });
    icones3Element.forEach(function(element){
        element.style.width = "45px";
        element.style.height = "45px";
    });
}
function policeMoins(){
    localStorage.setItem('aP', 'false');
    var bodyElement = document.body;
    bodyElement.style.fontSize = "20px";
    var imgsElement = document.querySelectorAll('.img_section');
    var imgfElement = document.querySelectorAll('.img_footer2');
    var icones1Element = document.querySelectorAll('.icones');
    var icones2Element = document.querySelectorAll('.iconesN');
    var icones3Element = document.querySelectorAll('.iconesC');
    var largeurEcran = window.innerWidth;
    imgsElement.forEach(function(element){
        element.style.width = "70%";
    });
    imgfElement.forEach(function(element){
        if (largeurEcran > 920) {
            element.style.width = "30%";
        } else if (largeurEcran > 720) {
            element.style.width = "10%";
        } else {
            element.style.width = "10%";
        }
    });
    icones1Element.forEach(function(element){
        element.style.width = "32px";
        element.style.height = "32px";
    });
    icones2Element.forEach(function(element){
        element.style.width = "32px";
        element.style.height = "32px";
    });
    icones3Element.forEach(function(element){
        element.style.width = "32px";
        element.style.height = "32px";
    });
}

        /* raccourci clavier */

    /* ouvrir un lien, avec ou sans nouvelle page*/
function simulerClic(element) {
    element.click();
    }
function ouvrirNouvellePage(element) {
    window.open(element.href, '_blank'); /* selon le navigateur */
}

document.addEventListener('keydown', function (event) {
    if (event.ctrlKey && event.altKey &&(event.key === 'N' || event.key === 'n')) {
        var elementWithFocus = document.activeElement;
        windows.alert(elementWithFocus.tagName);

        if ((elementWithFocus.tagName === 'a' || elementWithFocus.tagName === 'A')&& elementWithFocus.hasAttribute('href')) {
            ouvrirNouvellePage(elementWithFocus);
        }
    }
});
document.addEventListener('keydown', function (event) {
    if (event.ctrlKey && event.altKey &&(event.key === 'O' || event.key === 'o')) {
        var elementWithFocus = document.activeElement;

    if ((elementWithFocus.tagName === 'a' || elementWithFocus.tagName === 'A')&& elementWithFocus.hasAttribute('href')) {
        simulerClic(elementWithFocus);
    }
    }
});

        /* service worker */
const cacheName = 'votre-application-cache-v1';
const filesToCache = [
    '/',
    '/css/style.css',
    '/js/script.js',
    '/index.html',
    '/reference.html',
    '/informations.html',
    '/histoire.html',
    '/regles.html',
    '/aides_techniques.html',
    '/img/fauteuil_defensif.jpg',
    '/img/fauteuil_offensif.jpg',
    '/img/logo_paris8.png',
    '/img/logo_t9.png',
    '/img/mail.png',
    '/img/header.svg',
    '/img/nav.svg',
    '/img/section.svg',
    '/img/aside.svg',
    '/img/footer.svg',
    '/open_dyslexic/OpenDyslexic-Regular.otf',
    '/open_dyslexic/OpenDyslexic-Bold.otf',
    '/luciole/Luciole-Bold.ttf',
    '/luciole/Luciole-Regular.ttf',
    '/noscript/aides_techniques_+.html',
    '/noscript/aides_techniques_Dys.html',
    // Ajoutez toutes les autres ressources ici
];

self.addEventListener('install', (event) => {
    event.waitUntil(
        caches.open(cacheName).then((cache) => {
            return cache.addAll(filesToCache);
        })
    );
});

self.addEventListener('fetch', (event) => {
    event.respondWith(
        caches.match(event.request).then((response) => {
            return response || fetch(event.request);
        })
    );
});