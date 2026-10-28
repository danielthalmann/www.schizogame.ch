<!DOCTYPE html>
<?php include('../../Bootstrap.php'); ?>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Escape Box</title>
    <link href="<?= url('theme.css?v' . SITE_VERSION) ?>" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="Résous des énigmes et trouve des indices pour aider Federico, un jeune confronté à des troubles schizophréniques, à se rétablir.">
    <meta name="author" content="Daniel Thalmann (white-ermine.ch)">
    <link rel="icon" href="<?= url('images/logo.svg') ?>" sizes="32x32" />

    <link rel="alternate" href="<?= url('fr/psyquiz/') ?>" hreflang="fr" />
    <link rel="alternate" href="<?= url('de/psyquiz/') ?>" hreflang="de" />
    <?php include(base_path('components/header_googletag.php')); ?>
    <?php include(base_path('components/header.php')); ?>
</head>
<body>
    <?php include(base_path('components/body_googletag.php')); ?>

    <?= component('menu_root', ['lang' => 'de', 'path' => 'psyquiz/']) ?>

    <?= component('block_title_mobile',
    [
        'lang' => 'de',
        'title' => 'PsyQuiz',
        'colorFrom' => 'from-[#50bd21]',
        'colorTo' => 'to-[#387b9a]',
        'description' => 'Testen Sie Ihr Wissen über psychische Gesundheit direkt aus Ihrer Tasche.' ,
        'image' => url('images/psyquiz/psyquiz.png'),
    ]) ?>

    <?= component('block_image_advertising',
    [
        'css' => 'bg-white',
        'title' => 'Warum PsyQuiz herunterladen?',
        'blocks' => [
            [
                'icon' => 'shield',
                'title' => 'Info oder Mythos',
                'description' => 'Unterscheiden Sie Fakten von Fiktion über Schizophrenie.'
            ],
            [
                'icon' => 'book-open',
                'title' => 'Spielerisch lernen',
                'description' => 'Ein interaktiver Quiz-Modus, um Ihr Wissen spielerisch zu testen.'
            ],
            [
                'icon' => 'map-pin',
                'title' => 'Lokale Ressourcen',
                'description' => "Direkter Zugang zu Notfallnummern und Verbänden im Kanton Freiburg."
            ]
        ]
    ]) ?>    

    <?= component('block_image',
    [
        'css' => 'bg-gray-100',
        'image' => url('images/psyquiz/logo_proch-ecoute.png'),
        'title' => 'An.gehör.ige',
        'link_text' => 'Mehr erfahren...',
        'link_url' => 'https://www.pa-f.ch/de/an-gehor-ige',
        'sentences' => [
            "Kennen Sie unter Ihren Angehörige/r einer Person mit Schwierigkeiten? Sie suchen Sie Informationen über Unterstützungs- und Behandlungsangebote. Die Telefon-Hotline An.gehör.ige steht Ihnen montags von 14 bis 16 Uhr, dienstags von 9 bis 12 Uhr sowie donnerstags von 13 bis 16 Uhr unter 026 420 20 10 oder per E-Mail unter <a class='text-jds font-bold' href='mailto:contact@proch-ecoute.ch'>contact@proch-ecoute.ch</a> zur Verfügung."
        ]
    ]) ?>


    <?= component('block_info',
    [
        'css' => 'bg-jds-500/10',
        'title' => 'Psychiatrische notfälle',
        'sentences' => [
            "Sind Sie mit einem psychiatrischen Notfall konfrontiert? Sie sind mit einer Person konfrontiert, die sich in psychischer Not befindet. Sie benötigt die sofortige Intervention eines auf Psychiatrie spezialisierten Behandlungsteams."
        ],
        'insert' => [
            "Der psychiatrische Notfalldienst des FNPG steht Ihnen rund um die Uhr unter der Nummer 026 308 08 08, Chemin du Cardinal-Journet 3, 1752 Villars-sur-Glâne, zur Verfügung."
        ]
    ]) ?>


    <!-- Start block -->
    <section class="bg-radial-[at_50%_75%] from-jds-500 to-[#387b9a]">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-24 lg:px-6">

        </div>
      </section>
    <!-- End block -->


    <?= component('partners_psyquiz', ['lang' => 'de']) ?>

    <?= component('footer', ['lang' => 'de']) ?>

</body>
</html>