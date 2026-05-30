<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Track Lokasi</title>

    @vite('resources/css/app.css')

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- LEAFLET -->
    <link rel="stylesheet"
          href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>

    <style>
        body{
            font-family:'Poppins',sans-serif;
        }

        .leaflet-container{
            border-radius:32px;
        }
    </style>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen py-4">

    <!-- PHONE -->
    <div class="w-full max-w-[420px]
                h-[95vh]
                bg-[#FAFAFA]
                rounded-[3rem]
                shadow-2xl
                overflow-hidden
                flex flex-col">

        <div class="flex-1 overflow-y-auto px-6 pt-14 pb-10">

            <!-- HEADER -->
            <div class="flex items-center gap-4 mb-8">

                <a href="/dashboard"
                   class="text-2xl text-gray-700">

                    ←
                </a>

                <h1 class="text-[34px]
                           font-extrabold
                           text-gray-900">

                    Track Lokasi
                </h1>

            </div>

            <p class="text-gray-500 mb-8">
                Lacak perjalanan titipan secara real-time
            </p>

            <!-- TRACK INFO -->
            <div class="space-y-8 mb-8">

                <!-- START -->
                <div class="flex gap-4">

                    <div class="flex flex-col items-center">

                        <div class="w-5 h-5 rounded-full bg-purple-600 border-4 border-purple-300">
                        </div>

                        <div class="w-[2px] h-20 bg-purple-500 mt-1">
                        </div>

                    </div>

                    <div>
                        <h3 class="font-bold text-2xl">
                            Kantin Kampus
                        </h3>

                        <p class="text-gray-400">
                            10.15
                        </p>
                    </div>

                </div>

                <!-- DESTINATION -->
                <div class="flex gap-4">

                    <div class="w-5 h-5 rounded-full bg-green-500 border-4 border-green-200 mt-2">
                    </div>

                    <div>
                        <p class="text-gray-400">
                            Lokasi Tujuan
                        </p>

                        <h3 class="font-bold text-2xl">
                            Kos Putri GP 1
                        </h3>
                    </div>

                </div>

                <!-- DISTANCE -->
                <div class="flex items-start gap-4">

                    <span class="text-3xl">
                        🎯
                    </span>

                    <div>
                        <p class="text-gray-400">
                            Jarak Tersisa
                        </p>

                        <h3 id="distance"
                            class="font-bold text-2xl">

                            Menghitung...
                        </h3>
                    </div>

                </div>

                <!-- ETA -->
                <div class="flex items-start gap-4">

                    <span class="text-3xl">
                        ⏱️
                    </span>

                    <div>
                        <p class="text-gray-400">
                            Estimasi Tiba
                        </p>

                        <h3 id="eta"
                            class="font-bold text-2xl">

                            Menghitung...
                        </h3>
                    </div>

                </div>

            </div>

            <!-- MAP -->
            <div id="map"
                 class="w-full h-[300px]
                        rounded-[2rem]
                        shadow-lg
                        mb-8">
            </div>

            <!-- HELPER CARD -->
            <div class="bg-white rounded-[2rem]
                        shadow-lg p-5
                        flex items-center justify-between">

                <div class="flex items-center gap-4">

                    <img
                        src="https://randomuser.me/api/portraits/men/32.jpg"
                        class="w-16 h-16 rounded-full object-cover">

                    <div>

                        <p class="text-gray-400 text-sm">
                            Helper
                        </p>

                        <h3 class="font-bold text-xl">
                            Justin Bieber
                        </h3>

                        <p class="text-gray-400 text-sm">
                            4.9 (52 Ulasan)
                        </p>

                    </div>

                </div>

                <div class="flex gap-3">

                    <button class="w-12 h-12 rounded-full bg-gray-100">
                        📞
                    </button>

                    <button class="w-12 h-12 rounded-full bg-gray-100">
                        💬
                    </button>

                </div>

            </div>

        </div>

    </div>

    <!-- LEAFLET -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script>

        // TUJUAN
        const destination = {
            lat: -6.9932,
            lng: 110.4211
        };

        // INIT MAP
        const map = L.map('map')
            .setView([
                destination.lat,
                destination.lng
            ], 15);

        // TILE MAP
        L.tileLayer(
            'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            {
                attribution:
                '&copy; OpenStreetMap'
            }
        ).addTo(map);

        // DESTINATION MARKER
        const destinationMarker =
            L.marker([
                destination.lat,
                destination.lng
            ])
            .addTo(map)
            .bindPopup('Tujuan');

        // DISTANCE CALCULATOR
        function calculateDistance(
            lat1, lon1,
            lat2, lon2
        ) {

            const R = 6371;

            const dLat =
                (lat2-lat1)
                * Math.PI / 180;

            const dLon =
                (lon2-lon1)
                * Math.PI / 180;

            const a =
                Math.sin(dLat/2)
                * Math.sin(dLat/2)
                +
                Math.cos(lat1*Math.PI/180)
                *
                Math.cos(lat2*Math.PI/180)
                *
                Math.sin(dLon/2)
                *
                Math.sin(dLon/2);

            const c =
                2 * Math.atan2(
                    Math.sqrt(a),
                    Math.sqrt(1-a)
                );

            return R * c;
        }

        // GPS TRACK
        navigator.geolocation.watchPosition(

            function(position){

                const userLat =
                    position.coords.latitude;

                const userLng =
                    position.coords.longitude;

                // REMOVE OLD
                if(window.userMarker){
                    map.removeLayer(
                        window.userMarker
                    );
                }

                // USER MARKER
                window.userMarker =
                    L.marker([
                        userLat,
                        userLng
                    ])
                    .addTo(map)
                    .bindPopup('Helper');

                // REMOVE LINE
                if(window.routeLine){
                    map.removeLayer(
                        window.routeLine
                    );
                }

                // ROUTE
                window.routeLine =
                    L.polyline([
                        [userLat,userLng],
                        [
                            destination.lat,
                            destination.lng
                        ]
                    ],{
                        color:'#7C3AED',
                        weight:5
                    })
                    .addTo(map);

                // FIT MAP
                map.fitBounds(
                    window.routeLine
                    .getBounds()
                );

                // DISTANCE
                const distance =
                    calculateDistance(
                        userLat,
                        userLng,
                        destination.lat,
                        destination.lng
                    );

                document
                    .getElementById(
                        'distance'
                    )
                    .innerText =
                    distance.toFixed(1)
                    + ' km';

                // ETA
                const eta =
                    Math.ceil(
                        distance * 4
                    );

                document
                    .getElementById(
                        'eta'
                    )
                    .innerText =
                    eta + ' menit lagi';

            },

            function(error){

                alert(
                    'GPS gagal diakses'
                );

                console.log(error);

            },

            {
                enableHighAccuracy:true,
                timeout:5000,
                maximumAge:0
            }

        );

    </script>

</body>
</html>