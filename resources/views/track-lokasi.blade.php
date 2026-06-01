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
            border-radius:2rem;
            z-index: 10;
        }
    </style>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen py-4">

    <!-- PHONE -->
    <div style="max-width:420px;"
         class="w-full
                h-[95vh]
                bg-[#FAFAFA]
                rounded-[3rem]
                shadow-2xl
                relative
                overflow-hidden
                flex flex-col">
        
        @include('components.sidebar')

        <div class="flex-1 overflow-y-auto px-6 pt-14 pb-10">

            <!-- TOPBAR -->
            <div class="flex items-center justify-between mb-8">
                <!-- MENU -->
                <button
                    onclick="openSidebar()"
                    class="text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-7 h-7"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <div class="mb-8">
                <h1 class="text-[30px] font-extrabold text-slate-900 leading-[1.1] tracking-[-0.5px]">
                    Track Lokasi
                </h1>
                <p class="text-gray-500 text-[14px] mt-1">
                    Lacak perjalanan titipan secara real-time
                </p>
            </div>

            <!-- TRACK INFO -->
            <div class="bg-white rounded-[32px] p-6 border border-slate-100 shadow-[0_10px_30px_rgba(15,23,42,0.05)] mb-7">
                
                <!-- START -->
                <div class="flex gap-4 relative">
                    <div class="flex flex-col items-center z-10">
                        <div class="w-4 h-4 rounded-full bg-[#7C3AED] border-[3px] border-white shadow-[0_0_0_2px_#7C3AED]"></div>
                        <div class="w-[2px] h-12 bg-gray-200 mt-2 mb-2"></div>
                    </div>
                    <div>
                        <h3 class="font-semibold text-slate-800 text-[16px]">
                            Kantin Kampus
                        </h3>
                        <p class="text-[13px] text-slate-500">
                            10.15 WIB - Titipan Diambil
                        </p>
                    </div>
                </div>

                <!-- DESTINATION -->
                <div class="flex gap-4">
                    <div class="flex flex-col items-center z-10">
                        <div class="w-4 h-4 rounded-full bg-[#10B981] border-[3px] border-white shadow-[0_0_0_2px_#10B981]"></div>
                    </div>
                    <div>
                        <h3 class="font-semibold text-slate-800 text-[16px]">
                            Kos Putri GP 1
                        </h3>
                        <p class="text-[13px] text-slate-500">
                            Lokasi Tujuan
                        </p>
                    </div>
                </div>

                <hr class="my-5 border-gray-100">

                <div class="grid grid-cols-2 gap-4">
                    <!-- DISTANCE -->
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-violet-50 flex items-center justify-center text-[#7C3AED]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[11px] text-gray-400">Jarak</p>
                            <h3 id="distance" class="font-bold text-slate-800 text-[14px]">Menghitung...</h3>
                        </div>
                    </div>
                    
                    <!-- ETA -->
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-green-50 flex items-center justify-center text-[#10B981]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[11px] text-gray-400">ETA</p>
                            <h3 id="eta" class="font-bold text-slate-800 text-[14px]">Menghitung...</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MAP -->
            <div id="map"
                 class="w-full h-[220px]
                        rounded-[24px]
                        shadow-[0_10px_30px_rgba(15,23,42,0.05)]
                        border border-slate-100
                        mb-7">
            </div>

            <!-- HELPER CARD -->
            <div class="bg-white rounded-[24px]
                        shadow-[0_10px_30px_rgba(15,23,42,0.05)] p-5
                        border border-slate-100
                        flex items-center justify-between">

                <div class="flex items-center gap-4">
                    <img
                        src="https://randomuser.me/api/portraits/men/32.jpg"
                        class="w-12 h-12 rounded-full object-cover border-2 border-slate-50">

                    <div>
                        <h3 class="font-bold text-slate-800 text-[16px]">
                            Justin Bieber
                        </h3>
                        <div class="flex items-center gap-1 mt-0.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-yellow-400">
                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-[12px] font-medium text-slate-600">4.9</span>
                            <span class="text-[12px] text-gray-400">(52 Ulasan)</span>
                        </div>
                    </div>
                </div>

                <div class="flex gap-2">
                    <a href="#" class="w-10 h-10 rounded-full bg-violet-50 text-[#7C3AED] hover:bg-violet-100 transition-colors flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-2.896-1.596-5.48-4.08-7.074-6.97l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-blue-50 text-[#3B82F6] hover:bg-blue-100 transition-colors flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                        </svg>
                    </a>
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
            const dLat = (lat2-lat1) * Math.PI / 180;
            const dLon = (lon2-lon1) * Math.PI / 180;
            const a = Math.sin(dLat/2) * Math.sin(dLat/2) + Math.cos(lat1*Math.PI/180) * Math.cos(lat2*Math.PI/180) * Math.sin(dLon/2) * Math.sin(dLon/2);
            const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
            return R * c;
        }

        // GPS TRACK
        navigator.geolocation.watchPosition(
            function(position){
                const userLat = position.coords.latitude;
                const userLng = position.coords.longitude;

                // REMOVE OLD
                if(window.userMarker){
                    map.removeLayer(window.userMarker);
                }

                // USER MARKER
                window.userMarker =
                    L.marker([userLat, userLng])
                    .addTo(map)
                    .bindPopup('Helper');

                // REMOVE LINE
                if(window.routeLine){
                    map.removeLayer(window.routeLine);
                }

                // ROUTE
                window.routeLine =
                    L.polyline([
                        [userLat,userLng],
                        [destination.lat, destination.lng]
                    ],{
                        color:'#7C3AED',
                        weight:5
                    })
                    .addTo(map);

                // FIT MAP
                map.fitBounds(window.routeLine.getBounds());

                // DISTANCE
                const distance = calculateDistance(userLat, userLng, destination.lat, destination.lng);
                document.getElementById('distance').innerText = distance.toFixed(1) + ' km';

                // ETA
                const eta = Math.ceil(distance * 4);
                document.getElementById('eta').innerText = eta + ' mnt';
            },
            function(error){
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