if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/sw.js')
        .then((registration) => {
            console.log('Service Worker enregistré avec succès:', registration);
        })
        .catch((error) => {
            console.error('Erreur lors de l\'enregistrement du Service Worker:', error);
        });
}