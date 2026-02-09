    <!-- Start block -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>

    <section class="<?= $css ?? 'bg-gray-300' ?>">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:space-y-20 lg:py-24 lg:px-6">
            <div class="col-span-2 space-y-8 lg:grid lg:grid-cols-2 lg:gap-12 lg:space-y-0">
                <!-- Row -->
                <div class="items-center">
                    <div class="text-gray-900 sm:text-lg">
                        <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-[#50bd21]"><?= $title ?></h2>
                        <?php foreach($sentences as $sentence) : ?>
                        <p class="mb-4 font-light lg:text-xl">
                            <?= $sentence ?>
                        </p>
                        <?php endforeach; ?>    
         
                    </div>
                    <?php if (isset($link_url)) : ?>
                        <div class="flex">
                            <a class="mx-auto bg-jds-500 text-neutral-100 p-3 rounded-lg shadow-lg shadow-jdsgray-500/50" href="<?= $link_url ?>">
                                <span><?= $link_text ?></span>
                                <svg class="inline ml-2 mb-1 h-4 fill-neutral-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6l0-128c0-17.7-14.3-32-32-32L352 0zM80 32C35.8 32 0 67.8 0 112L0 432c0 44.2 35.8 80 80 80l320 0c44.2 0 80-35.8 80-80l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-320c0-8.8 7.2-16 16-16l112 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 32z"/></svg>
                            </a> 
                        </div>
                    <?php endif; ?>
                </div>

                <div class="h-96" id="map"></div>
             </div>

        </div>
    </section>
    <script>
        var locationMap = [46.804753,7.157624];

        var centerMap = [locationMap[0],locationMap[1]];
        centerMap[1] -= .001624;

        var map = L.map('map').setView(centerMap, 17);
 	// https://tile.memomaps.de/tilegen
    // https://tile.openstreetmap.org
        L.tileLayer('https://tile.memomaps.de/tilegen/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var marker = L.marker(locationMap).addTo(map);
        marker.bindPopup("l’Aigle Noir<br>Rue des Alpes 10<br>1700 Fribourg"); // .openPopup();

        var gare = [[46.80311, 7.15106],[46.80314,7.15108],[46.80318,7.15112],[46.80318,7.15112],[46.80312,7.15123],[46.80309,7.1513],[46.80309,7.1513],[46.80318,7.15135],[46.80318,7.15135],[46.80316,7.15142],[46.80323,7.15192],[46.80324,7.15197],[46.80365,7.15269],[46.80365,7.15269],[46.80359,7.15277],[46.80353,7.15286],[46.80353,7.15286],[46.80356,7.15291],[46.80364,7.15306],[46.80377,7.15331],[46.80378,7.15337],[46.80377,7.15348],[46.80377,7.15348],[46.8038,7.15353],[46.80386,7.15361],[46.80389,7.15366],[46.80389,7.15366],[46.80378,7.15382],[46.80376,7.15387],[46.80369,7.15395],[46.8036,7.15407],[46.80357,7.15416],[46.80357,7.15422],[46.80388,7.15501],[46.80392,7.15513],[46.804,7.15535],[46.80409,7.15556],[46.80423,7.1559],[46.80426,7.15593],[46.8043,7.15593],[46.80435,7.1559],[46.80435,7.1559],[46.80438,7.15597],[46.80444,7.15607],[46.80444,7.15607],[46.8044,7.1561],[46.80438,7.15614],[46.80434,7.15623],[46.80434,7.15623],[46.80436,7.15626],[46.80441,7.1564],[46.80448,7.15659],[46.8045,7.15665],[46.80454,7.15678],[46.80456,7.15686],[46.80458,7.15691],[46.80464,7.15709],[46.8048,7.15747],[46.80483,7.15754],[46.80483,7.15754]];

        var poly = L.polyline(gare, {color: 'red'}).addTo(map);
        poly.bindPopup("Parcours depuis la gare");

    </script>
    <!-- End block -->
