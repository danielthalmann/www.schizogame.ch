<!DOCTYPE html>
<?php include('../Bootstrap.php'); ?>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Schizogame</title>
    <link href="<?= url('theme.css') ?>" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="Für seine Ausgabe 2025 lädt Sie das Freiburger Komitee der Schizophrenie-Tage zu einer völlig neuen immersiven Erfahrung ein: ein fesselndes Videospiel, das Sie in das Herz der Schizophrenie eintauchen lässt.">
    <meta name="author" content="Daniel Thalmann (white-ermine.ch)">
    <link rel="icon" href="<?= url('images/logo.svg') ?>" sizes="32x32" />

    <link rel="alternate" href="<?= url('fr/') ?>" hreflang="fr" />
    <link rel="alternate" href="<?= url('de/') ?>" hreflang="de" />
    <?php include(base_path('components/header_googletag.php')); ?>
</head>
<body>
    <?php include(base_path('components/body_googletag.php')); ?>
    <?= component('menu_root', ['lang' => 'de']) ?>

    <!-- Start block -->
    <section class="bg-radial-[at_50%_75%] from-jds-500 to-jdsgray-500 text-white">
        <div class="grid grid-cols-1 max-w-screen-xl mx-auto lg:min-h-screen">
            <div class="my-25 lg:my-none mx-5 lg:mx-auto flex">
                <div class="m-auto">
                    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl text-jds-500">Between two realities</h1>
                    <!--p class="max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-xl">
                        Incarne Kevin, un jeune qui souffre de troubles schizophréniques et accompagne-le dans une mini aventure interactive.
                    </p-->
                    <p class="max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-xl">
                    Für seine Ausgabe 2025 lädt Sie das Freiburger Komitee der Schizophrenie-Tage zu einer völlig neuen immersiven Erfahrung ein: ein fesselndes Videospiel, das Sie in das Herz der Schizophrenie eintauchen lässt.
                    </p>


                    <div class=" mb-15 max-w-[640px] mx-auto">
                        <video class="w-full shadow-lg shadow-jdsgray-500/50 " width="600" loop="true" autoplay="true" muted>
                            <source src="../videos/between_two_realities_de.mp4" type="video/mp4">
                            Your browser does not support HTML video.
                        </video>
                    </div>

                    <div class="text-center">
                        <a class="bg-jds-500 text-neutral-100 p-3 rounded-lg shadow-lg shadow-jdsgray-500/50" href="<?= url('de/between-two-realities/') ?>">
                            <span> Kevin verkörpern</span>
                            <svg class="inline ml-2 mb-1 h-4 fill-neutral-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6l0-128c0-17.7-14.3-32-32-32L352 0zM80 32C35.8 32 0 67.8 0 112L0 432c0 44.2 35.8 80 80 80l320 0c44.2 0 80-35.8 80-80l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-320c0-8.8 7.2-16 16-16l112 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 32z"/></svg>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- End block -->

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
            <div class="text-white flex relative overflow-hidden ">
                <div class="p-5 lg:text-center my-15 lg:m-auto w-full">
                    <img src="/images/INSTAGRAM_POST_2018x2018_150125.jpg">
                </div>
            </div>
        </div>
    </section>
    <!-- End block -->

    <!-- Start block -->
    <section class="bg-neutral-900">

        <div class="grid grid-cols-1 lg:grid-cols-2 max-w-screen-xl mx-auto lg:min-h-[800px]">

            <div class="bg-psyquiz text-white flex relative overflow-hidden">
                <label class="top-0 right-0 whitespace-nowrap absolute">
                    <span class="block translate-y-10 translate-x-16 origin-center rotate-30 text-neutral-800 bg-amber-400 border-t-1 border-white text-center w-[310px] py-2 shadow-jdsgray-500/50">neue Funktionen</span>
                </label>
                <div class="bg-neutral-900/75 p-5 lg:text-center my-15 lg:m-auto w-full">


                    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl">
                        PsyQuiz 4.0
                    </h1>
                    <div class="my-15 max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-xl">
                        Info oder Intox: Testen Sie Ihre Kenntnisse über psychische Störungen.
                    </div>
                    <div class="my-15 max-w-2xl mb-6 font-light lg:mb-10 md:text-lg lg:text-xl">
                    <div class="mb-5">Entdecken Sie die neuesten Verbesserungen</div>
                        <div class="font-bold ">Eine neue Sprache</div>
                        <div class="font-bold">Aktualisierte Fragen</div>
                    </div>
                    <div class="my-10 text-center">
                        <a class="bg-jds-500 text-neutral-100 p-3 rounded-lg shadow-lg shadow-jdsgray-500/50" href="https://psyquiz.ch/de/">
                            <span>Weitere Informationen</span>
                            <svg class="inline ml-2 mb-1 h-4 fill-neutral-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6l0-128c0-17.7-14.3-32-32-32L352 0zM80 32C35.8 32 0 67.8 0 112L0 432c0 44.2 35.8 80 80 80l320 0c44.2 0 80-35.8 80-80l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-320c0-8.8 7.2-16 16-16l112 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 32z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-escape text-white flex relative overflow-hidden">
                <label class="top-0 right-0 whitespace-nowrap absolute">
                    <span class="block translate-y-10 translate-x-16 origin-center rotate-30 text-neutral-800 bg-amber-400 border-t-1 border-white text-center w-[310px] py-2 shadow-jdsgray-500/50">In der Zukunft</span>
                </label>
                <div class="bg-neutral-900/75 p-5 lg:text-center my-25 lg:m-auto  w-full">

                    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl">
                        Escape Game
                    </h1>
                    <div class="my-15 max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-xl">
                        <p class="mb-5">
                        Cédric ist ein junger Student aus Freiburg, dem es im Moment nicht besonders gut geht.
                        </p>
                        <p class="mb-5">
                        Können Sie ihm helfen, seine Symptome in Worte zu fassen und die Unterstützung zu finden, die er braucht, um sich auf den Weg der Genesung zu begeben?
                        </p>
                        <p class="mb-5">
                        Das Escape Game der Weltjugendtage 2024 erfindet sich im Taschenformat neu! Es soll im Laufe des Jahres 2025 eingeführt werden.
                        </p>
                    </div>
                    <div class="my-10 text-center">
                        <!--a class="bg-jds-500 text-neutral-100 p-3 rounded-lg shadow-lg shadow-jdsgray-500/50" href="#">
                            <span>Weitere Informationen</span>
                            <svg class="inline ml-2 mb-1 h-4 fill-neutral-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6l0-128c0-17.7-14.3-32-32-32L352 0zM80 32C35.8 32 0 67.8 0 112L0 432c0 44.2 35.8 80 80 80l320 0c44.2 0 80-35.8 80-80l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-320c0-8.8 7.2-16 16-16l112 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 32z"/></svg>
                        </a-->
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- End block -->

    <!-- Start block -->
    <section class="bg-neutral-200">
        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
            <!-- Row -->
            <div class="items-center">
                <div class="text-gray-500 sm:text-lg">
                    <h2 class="mb-8 text-3xl font-extrabold tracking-tight text-center lg:mb-8 lg:text-3xl text-jds-500">Wer sind wir?</h2>
                    <div class="mb-3">
                        <div>

                            <p class="mb-5">Seit 2004 koordiniert der Verein PositiveMinders <span class="whitespace-pre">die Tage der Schizophrenie (TdS)</span> in der Schweiz und auf internationaler Ebene, um über psychische Erkrankungen aufzuklären und sie zu entdramatisieren.</p>

                            <p class="mb-5">Die Partner der TdS organisieren Veranstaltungen zur Sensibilisierung der Öffentlichkeit und vor allem junger Menschen für psychische Störungen. Diese Veranstaltungen sollen Betroffenen und ihren Angehörigen zudem einen Weg aus der Isolation bieten, sie über Früherkennungs- und Behandlungsmöglichkeiten informieren und die Chancen auf eine positive Entwicklung der Erkrankung erhöhen.</p>

                            <p class="mb-5">Das Freiburger Komitee der TdS setzt sich aus einer betroffenen Person, Angehörigen und Fachleuten zusammen. Gemeinsam engagieren sie sich für die Entstigmatisierung psychischer Störungen und die Stärkung des Zugangs zu lokalen Unterstützungsangeboten.</p>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End block -->


    <!-- Start block -->
    <section class="bg-white">
        <div class="max-w-screen-xl px-4 pt-8 mx-auto space-y-12 lg:space-y-20 lg:pt-24 lg:px-6">
            <!-- Row -->
            <div class="items-center">
                <div class="text-gray-500 sm:text-lg">
                    <h2 class="mb-8 text-3xl font-extrabold tracking-tight text-center lg:mb-8 lg:text-3xl text-jds-500">Komitee-Mitglieder</h2>
                    <div class="col-span-2 space-y-8 md:grid md:grid-cols-3 md:gap-12 md:space-y-0">
                        <div class="p-4">
                            <a target="_blank" href="https://www.rfsm.ch/"><img class="max-h-52" src="<?= url('images/partners/logo-RFSM-2019.jpg') ?>" alt="logo-RFSM"></a>
                        </div>
                        <div class="p-4">
                            <a target="_blank" href="https://horizonsud.ch/"><img class="max-h-52" src="<?= url('images/partners/logo-HorizonSud.png') ?>" alt="logo-horizon-sud"></a>
                        </div>
                        <div class="p-4">
                            <a target="_blank" href="https://www.st-louis.ch/"><img class="max-h-52" src="<?= url('images/partners/logo-st-louis.jpg') ?>" alt="logo-st-louis"></a>
                        </div>
                        <div class="p-4">
                            <a target="_blank" href="https://www.fr.ch/dsas"><img class="max-h-52" src="<?= url('images/partners/logo-DSAS.jpg') ?>" alt="logo-dsas"></a>
                        </div>
                        <div class="p-4">
                            <a target="_blank" href="https://www.lestraversees.ch/"><img class="max-h-52" src="<?= url('images/partners/logo-Les_Traversees.png') ?>" alt="logo-lestraversees"></a>
                        </div>
                        <div class="p-4">
                            <a target="_blank" href="https://afaap.ch/"><img class="max-h-52" src="<?= url('images/partners/logo-AFAAP.jpg') ?>" alt="logo-AFAAP"></a>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End block -->

    <!-- Start block -->
    <section class="bg-white">
        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
            <!-- Row -->
            <div class="items-center">
                <div class="text-gray-500 sm:text-lg">
                    <h2 class="mb-8 text-3xl font-extrabold tracking-tight text-center lg:mb-8 lg:text-3xl text-jds-500">Externe Links</h2>
                    <div class="">

                        <div class="mb-8">
                            <a class="text-jds-500" target="_blank" href="https://positiveminders.com/">positiveminders.com</a> bietet Informationen über psychische Gesundheit im Allgemeinen an. (Auf Französisch)
                        </div>

                        <div class="mb-8">
                            <a class="text-jds-500" target="_blank" href="https://schizinfo.com/">schizinfo.com</a> bietet Informationen über schizophrene Störungen an. (Auf Französisch)
                        </div>

                        <div class="mb-8">
                            <a class="text-jds-500" target="_blank" href="https://psy-gesundheit.ch/">psy-gesundheit.ch</a> ist eine Initiative der Westschweizer Kantone und des Tessins zur Förderung der psychischen Gesundheit.
                        </div>

                        <div class="mb-8">
                            <a class="text-jds-500" target="_blank" href="https://www.promentesana.org/">www.promentesana.org</a> setzt sich für die Interessen und Rechte von Menschen mit psychischen Beeinträchtigungen ein. (Auf Französisch)
                        </div>

                        <div class="mb-8">
                            <a class="text-jds-500" target="_blank" href="https://Feel-ok.ch/">Feel-ok.ch</a> Eine Gesundheitsplattform für Jugendliche.
                        </div>

                        <div class="mb-8">
                            <a class="text-jds-500" target="_blank" href="https://psyquiz.ch/de/">psyquiz.ch</a> ist ein Quiz über die verschiedenen Arten von psychischen Störungen.
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End block -->



    <?= component('footer', ['lang' => 'de']) ?>
    <script>
        document.addEventListener('scroll', () => {
            className = 'bg-gray-200';
            nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                if (!nav.classList.contains(className)) {
                    nav.classList.add(className);
                }
            } else {
                if (nav.classList.contains(className)) {
                    nav.classList.remove(className);
                }
            }
        });
    </script>

</body>
</html>
