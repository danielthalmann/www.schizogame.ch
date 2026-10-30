<!DOCTYPE html>
<?php include('../Bootstrap.php'); ?>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Schizogame</title>
    <link href="<?= url('theme.css?v' . SITE_VERSION) ?>" rel="stylesheet">
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

    <?= component('block_main_carousel',
    [
        'lang' => 'de'
    ]) ?>

    <?= component('block_sentence',
    [
        'css' => 'bg-neutral-200',
        'title' => 'Wer sind wir?',
        'title_center' => true,
        'sentences' => [
            "Das Freiburger Komitee der <span class=\"whitespace-pre\">die Tage der Schizophrenie (TdS)</span> setzt sich dafür ein, auf eine neue Art über psychische Gesundheit zu sprechen. Das Ziel: Tabus brechen, gängige Vorurteile abbauen und Themen rund um die psychische Gesundheit zugänglicher machen.",
            "Seit 2004 organisieren die Partner des Freiburger Komitees <span class=\"whitespace-pre\">die Tage der Schizophrenie (TdS)</span> – in Zusammenarbeit mit dem Verein PositiveMinders, der diese Tage sowohl in der Schweiz als auch international koordiniert, um über psychische Erkrankungen aufzuklären und ihnen den Schrecken zu nehmen – Veranstaltungen, die darauf abzielen, die breite Öffentlichkeit und insbesondere junge Menschen für psychische Störungen zu sensibilisieren. Zudem sollen diese Veranstaltungen Betroffenen und ihren Angehörigen helfen, aus der Isolation zu treten, und sie über Behandlungsangebote sowie Möglichkeiten der Früherkennung informieren, um die Chancen auf eine Besserung des Krankheitsverlaufs zu erhöhen.",
            "Das Freiburger Komitee der JdS setzt sich aus einer betroffenen Person, Angehörigen sowie Fachleuten zusammen; gemeinsam setzen sie sich für die Entstigmatisierung psychischer Erkrankungen und die Verbesserung des Zugangs zu lokalen Angeboten ein.",
            "Da Verstehen auch durch Erleben entsteht, setzt unser Komitee auf Gamification. Ob Spiele, Herausforderungen oder immersive Erlebnisse – hier lernt man spielerisch. Ob Videospiel, Quiz auf dem Smartphone oder eine immersive „Escape Box“: Jedes dieser Instrumente bietet einen interaktiven Zugang, um die Realität psychischer Erkrankungen – insbesondere der Schizophrenie – kennenzulernen.",
            "Diese Website ermöglicht es dir, diese Erfahrungen zu erkunden, mehr darüber zu erfahren und vor allem den Dialog über psychische Gesundheit zu eröffnen.",
        ]
    ]) ?>

    <?= component('committee', ['lang' => 'de']) ?>

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

</body>
</html>
