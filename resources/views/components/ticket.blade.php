@extends('layouts.layout')

<div class="d-flex mt-3">
    <img class="w-50" src="https://www.redal.ma/sites/g/files/dvc3366/files/styles/crop_freeform/public/image/2023/11/Generic%20content_0.gif?itok=-uxE81VF" alt="">
    <div class="w-50 bg-light p-4 d-flex align-items-center justify-content-center flex-column">
        <h2 style="font-family: monospace">Espace client</h2>
        <p style="font-family: monospace; font-size:18px;">
            Vous souhaitez suivre votre consommation, gérer vos factures, ou obtenir de l'aide ? Pour accéder à ces fonctionnalités, il vous suffit de demander un ticket 
            <form id="ticketForm" action="{{ route('ticket.create') }}" method="POST">
                @method('GET')
                <input type="hidden" name="latitude" id="latitude">
                <input type="hidden" name="longitude" id="longitude">
                <input type="hidden" name="address" id="address">
                <input type="hidden" name="city" id="city"> <!-- Hidden input for city -->
                <button type="submit" class="btn btn-secondary text-decoration-none text-light">ici</button>  
            </form>         
        </p>
    </div>
</div>

<script>
    // Get user's location
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            document.getElementById('latitude').value = latitude;
            document.getElementById('longitude').value = longitude;

            // Use Nominatim to get the address
            var nominatimUrl = 'https://nominatim.openstreetmap.org/reverse?format=json&lat=' + latitude + '&lon=' + longitude;

            fetch(nominatimUrl)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    var address = data.address;
                    var street = address.road || '';
                    var city = address.city || '';
                    var result = street + (city ? ', ' + city : '');

                    // Set the address and city values to the hidden input fields
                    document.getElementById('address').value = street;
                    document.getElementById('city').value = city;
                })
                .catch(error => {
                    console.error('Error fetching address:', error);
                });
        }, function(error) {
            console.error('Error getting user location:', error);
        });
    } else {
        console.error('Geolocation is not supported by this browser.');
    }
</script>
