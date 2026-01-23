    <!-- End block -->
    <section class=" bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-2 max-w-screen-xl mx-auto">
            <div class="text-gray-800 flex relative overflow-hidden">
                <div class="p-5 lg:text-center my-15 lg:m-auto w-full">
                    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl">
                        Online- Event
                    </h1>
                    <?php
                        $event_date = new DateTime('2025-03-19 15:30:00');
    $current_date = new DateTime();
    if ($event_date > $current_date):
        ?>
                    <div class="my-15 max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-xl">
                        Schalten Sie am Mittwoch, den <span class="font-bold">19. März 2025</span>,<br>
                        von <span class="font-bold">14:30 bis 15:30 Uhr</span> live zu uns.<br>
                        um einen Blick hinter die Kulissen des Spiels zu werfen (auf Französisch)
                    </div>
                    <div class="my-15 max-w-2xl mb-6 font-light lg:mb-10 md:text-lg lg:text-xl">
                    </div>
                    <div class="my-10 text-center">
                        <a target="_blank" class="bg-jds-500 text-neutral-100 p-3 rounded-lg shadow-lg shadow-jdsgray-500/50" href="https://maison.schizinfo.com/session/2337f27d-56da-ef11-88f8-6045bd89b60c/le-jeu-s-invite-dans-la-schizophrenie">
                            <span>Sich anmelden</span>
                            <svg class="inline ml-2 mb-1 h-4 fill-neutral-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6l0-128c0-17.7-14.3-32-32-32L352 0zM80 32C35.8 32 0 67.8 0 112L0 432c0 44.2 35.8 80 80 80l320 0c44.2 0 80-35.8 80-80l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-320c0-8.8 7.2-16 16-16l112 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 32z"/></svg>
                        </a>
                    </div>

                    <?php else:  ?>

                    <div class="my-15 max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-xl">
                        Hier finden Sie die Wiederholung der Live-Übertragung, die am Mittwoch, dem <span class="font-bold">19. März 2025</span>,
                        <br>hinter den Kulissen des Spiels stattfand. (auf Französisch)
                    </div>
                    <div class="my-15 max-w-2xl mb-6 font-light lg:mb-10 md:text-lg lg:text-xl">
                    </div>
                    <div class="my-10 text-center">
                        <a target="_blank" class="bg-jds-500 text-neutral-100 p-3 rounded-lg shadow-lg shadow-jdsgray-500/50" href="https://www.youtube.com/watch?v=mitRvWKm2c4">
                            <span>Schauen</span>
                            <svg class="inline ml-2 mb-1 h-4 fill-neutral-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6l0-128c0-17.7-14.3-32-32-32L352 0zM80 32C35.8 32 0 67.8 0 112L0 432c0 44.2 35.8 80 80 80l320 0c44.2 0 80-35.8 80-80l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-320c0-8.8 7.2-16 16-16l112 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 32z"/></svg>
                        </a>
                    </div>
                    <?php  endif;  ?>
                </div>
            </div>
            <div class="text-white flex relative overflow-hidden order-first lg:order-none ">
                <div class="p-5 lg:text-center lg:my-15 lg:m-auto w-full">
                    <img src="/images/INSTAGRAM_POST_2018x2018_150125.jpg">
                </div>
            </div>
        </div>
    </section>
    <!-- End block -->