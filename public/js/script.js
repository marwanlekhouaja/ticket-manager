function getLocation() {
    fetch('https://ipinfo.io/json')
        .then(response => response.json())
        .then(data => {
            console.log("IP Address: " + data.ip);
            console.log("Location: " + data.city + ", " + data.region + ", " + data.country);
            getDetailedAddress(data.loc);
            console.log("Coordinates: " + data.loc);
            console.log("Postal Code: " + data.postal);
            console.log("Timezone: " + data.timezone);
            console.log("Organization: " + data.org);
        })
        .catch(error => {
            console.error('Error fetching IP data:', error);
        });
}

function getDetailedAddress(loc) {
    const [latitude, longitude] = loc.split(',');
    fetch(`https://nominatim.openstreetmap.org/reverse?lat=${latitude}&lon=${longitude}&format=json`)
        .then(response => response.json())
        .then(data => {
            console.log("Detailed Address: " + data.display_name);
        })
        .catch(error => {
            console.error('Error fetching detailed address data:', error);
        });
}