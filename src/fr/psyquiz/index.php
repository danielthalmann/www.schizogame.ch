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

    <?= component('menu_root', ['lang' => 'fr', 'path' => 'psyquiz/']) ?>

    <?= component('block_title_mobile',
    [
        'title' => 'PsyQuiz',
        'colorFrom' => 'from-[#50bd21]',
        'colorTo' => 'to-[#387b9a]',
        'description' => 'Testez vos connaissances sur la santé mentale directement depuis votre poche.' ,
        'image' => url('images/psyquiz/psyquiz.png'),
    ]) ?>

    <?= component('block_image_advertising',
    [
        'css' => 'bg-white',
        'title' => 'Pourquoi télécharger PsyQuiz ?',
        'blocks' => [
            [
                'icon' => 'shield',
                'title' => 'Info ou Intox',
                'description' => 'Démêlez le vrai du faux sur la schizophrénie et les troubles psychiques.'
            ],
            [
                'icon' => 'book-open',
                'title' => 'Apprenez en jouant',
                'description' => 'Un mode quiz interactif pour tester vos connaissances de manière ludique.'
            ],
            [
                'icon' => 'map-pin',
                'title' => 'Ressources locales',
                'description' => "Accès direct aux numéros d'urgence et associations dans le canton de Fribourg."
            ]
        ]
    ]) ?>    

    <?= component('block_image',
    [
        'css' => 'bg-gray-100',
        'image' => url('images/psyquiz/logo_proch-ecoute.png'),
        'title' => 'Proch-écoute',
        'link_text' => 'En savoir plus...',
        'link_url' => 'https://www.pa-f.ch/fr/proch-ecoute',
        'sentences' => [
            "Vous êtes proches d'une personne en difficulté ? Vous cherchez des informations sur les offres de soutien et de soins. La ligne téléphonique PROCH·ÉCOUTE est à votre disposition le lundi de 14h à 16h, le mardi de 9h à 12h ainsi que le jeudi de 13h à 16h au 026 420 20 10 ou par e-mail à <a class='text-jds font-bold' href='mailto:contact@proch-ecoute.ch'>contact@proch-ecoute.ch</a>"
        ]
    ]) ?>


    <?= component('block_info',
    [
        'css' => 'bg-jds-500/10',
        'title' => 'Urgences en santé mentale',
        'sentences' => [
            "Vous faites face à une situation d’urgence psychiatrique ? Vous êtes confronté-e à une personne souffrant d’une détresse psychique qui nécessite l’intervention d’une équipe soignante spécialisée en santé mentale.",
        ],
        'insert' => [
            "Le Service des Urgences psychiatriques du RFSM est à votre disposition 24h/24, 7j/7 au 026 308 08 08, Chemin du Cardinal-Journet 3, 1752 Villars-sur-Glâne"
        ]
    ]) ?>


    <!-- Start block -->
    <section class="bg-radial-[at_50%_75%] from-jds-500 to-[#387b9a]">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-24 lg:px-6">

        </div>
      </section>
    <!-- End block -->


    <?= component('partners_psyquiz', ['lang' => 'fr']) ?>

    <?= component('footer', ['lang' => 'fr']) ?>

</body>
</html>