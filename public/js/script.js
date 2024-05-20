function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError, {
            enableHighAccuracy: true,
            timeout: 10000,
            maximumAge: 0,
        });
    } else {
        document.getElementById("location").innerHTML =
            "La géolocalisation n'est pas supportée par ce navigateur.";
    }
}

function showPosition(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    var accuracy = position.coords.accuracy;

    // Vérifier la précision des coordonnées
    if (accuracy < 100) {
        // Précision de moins de 100 mètres
        // Stocker les coordonnées dans le stockage local
        localStorage.setItem("latitude", latitude);
        localStorage.setItem("longitude", longitude);

        document.getElementById("location").innerHTML =
            "Latitude: " +
            latitude +
            "<br>Longitude: " +
            longitude +
            "<br>Précision: " +
            accuracy +
            " mètres";

        // Utilisation de Nominatim pour le géocodage inverse
        fetch(
            `https://nominatim.openstreetmap.org/reverse?lat=${latitude}&lon=${longitude}&format=json`
        )
            .then((response) => response.json())
            .then((data) => {
                // Extract and display the address
                var address = data.address.road + ", " + data.address.suburb + ", " + data.address.city;
                document.getElementById("location").innerHTML += `<br>Adresse: ${address}`;
                console.log(`Adresse: ${address}`);
            })
            .catch((error) => console.log(error));
    } else {
        document.getElementById("location").innerHTML =
            "La précision des coordonnées est insuffisante.";
    }
}

function showError(error) {
    switch (error.code) {
        case error.PERMISSION_DENIED:
            document.getElementById("location").innerHTML =
                "L'utilisateur a refusé la demande de géolocalisation.";
            break;
        case error.POSITION_UNAVAILABLE:
            document.getElementById("location").innerHTML =
                "Les informations de localisation ne sont pas disponibles.";
            break;
        case error.TIMEOUT:
            document.getElementById("location").innerHTML =
                "La demande de localisation a expiré.";
            break;
        case error.UNKNOWN_ERROR:
            document.getElementById("location").innerHTML =
                "Une erreur inconnue s'est produite.";
            break;
    }
}

// Vérifier si les coordonnées sont déjà stockées dans le stockage local
document.addEventListener("DOMContentLoaded", (event) => {
    var latitude = localStorage.getItem("latitude");
    var longitude = localStorage.getItem("longitude");

    if (latitude && longitude) {
        document.getElementById("location").innerHTML =
            "Latitude: " + latitude + "<br>Longitude: " + longitude;

        // Utilisation de Nominatim pour le géocodage inverse
        fetch(
            `https://nominatim.openstreetmap.org/reverse?lat=${latitude}&lon=${longitude}&format=json`
        )
            .then((response) => response.json())
            .then((data) => {
                // Extract and display the address
                var address = data.address.road + ", " + data.address.suburb + ", " + data.address.city;
                document.getElementById("location").innerHTML += `<br>Adresse: ${address}`;
            })
            .catch((error) => console.log(error));
    }
});

console.log(getLocation());