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

    <?= component('block_main',
    [
        //'toptext' => 'nouvelles fonctionalités',
        'title' => 'Between two realities',
        'description' => 'Für seine Ausgabe 2025 lädt Sie das Freiburger Komitee der Schizophrenie-Tage zu einer völlig neuen immersiven Erfahrung ein: ein fesselndes Videospiel, das Sie in das Herz der Schizophrenie eintauchen lässt.',
        'video' => '../videos/between_two_realities_de.mp4',
        'link_url' => url('de/between-two-realities/'),
        'link_text' => 'Kevin verkörpern'
    ]) ?>    


    <!-- Start block -->
    <section class="bg-neutral-900">

        <div class="grid grid-cols-1 lg:grid-cols-2 max-w-screen-xl mx-auto lg:min-h-[800px]">


            <?= component('card_game',
            [
                //'toptext' => 'neue Funktionen',
                'css' => 'bg-psyquiz',
                'title' => 'PsyQuiz 4.0',
                'sentences' => [
                    'Info oder Intox: Testen Sie Ihre Kenntnisse über psychische Störungen.',
                    '&nbsp;',
                    'Entdecken Sie die neuesten Verbesserungen',
                    '<span class="font-bold">Eine neue Sprache<br>Aktualisierte Fragen</span>'
                ],
                'link_url' => 'https://psyquiz.ch/de',
                'link_text' => 'Weitere Informationen'
            ]) ?>

            <?= component('card_game',
            [
                //'toptext' => 'neue Funktionen',
                //'css' => 'bg-psyquiz',
                'title' => 'Between two realities',
                'sentences' => [
                    'Ein fesselndes Videospiel, das Sie in das Herz der Schizophrenie eintauchen lässt.' , 
                    'Kevin ist ein junger Mensch mit Schizophrenie. In diesem interaktiven Spiel können Sie in seine Haut schlüpfen und seine Welt erleben.',
                ],
                'link_url' => url( 'de/between-two-realities/'),
                'link_text' => 'Weitere Informationen'
            ]) ?> 


        </div>

    </section>
    <!-- End block -->

    <!-- Start block -->
    <section class="bg-neutral-200">
        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
            <!-- Row -->
            <div class="items-center">
                <div class="text-gray-500 sm:text-lg">
                    <?= component('title2', ['title' => 'Wer sind wir?']) ?>
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
                    <?= component('title2', ['title' => 'Komitee-Mitglieder']) ?>
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
                    <?= component('title2', ['title' => 'Externe Links']) ?>
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
