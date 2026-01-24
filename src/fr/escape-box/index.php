<!DOCTYPE html>
<?php include('../../Bootstrap.php'); ?>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Between two realities</title>
    <link href="<?= url('theme.css') ?>" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="Incarne Kevin, un jeune qui souffre de troubles schizophréniques et accompagne-le dans une mini aventure interactive.">
    <meta name="author" content="Daniel Thalmann (white-ermine.ch)">
    <link rel="icon" href="<?= url('images/logo.svg') ?>" sizes="32x32" />

    <link rel="alternate" href="<?= url('fr/between-two-realities/') ?>" hreflang="fr" />
    <link rel="alternate" href="<?= url('de/between-two-realities/') ?>" hreflang="de" />
    <?php include(base_path('components/header_googletag.php')); ?>
    <?php include(base_path('components/header.php')); ?>
</head>
<body>
    <?php include(base_path('components/body_googletag.php')); ?>

    <?= component('menu_root', ['lang' => 'fr']) ?>

    <?= component('block_title',
    [
        //'toptext' => 'nouvelles fonctionalités',
        'title' => 'Escape Box',
        'description' => 'Pour son édition 2026, le comité fribourgeois des Journées de la Schizophrénie vous invite à plonger dans une expérience immersive où coopération, réflexion et émotions s’entremêlent ! En équipe, relevez des défis, résolvez des énigmes et explorez les notions d’entraide, de rétablissement et de regard sur l’autre. Un jeu immersif pour parler de santé mentale autrement : avec curiosité, humour et humanité.',
        'image' => url('images/escapebox/escape-box.png'),
    ]) ?>

    <?= component('block_sentence',
    [
        'title' => 'Venez tester l’Escape Box et d’autres jeux uniques au cœur de Fribourg !',
        'sentences' => [
            'Que vous soyez joueur·se aguerri·e ou simple curieux·se, cette aventure vous invite à dépasser vos préjugés et à vivre un moment fort, à la fois ludique et profondément humain. Une chose est sûre : vous ne verrez plus la santé mentale du même œil !' , 
            'Du 14 au 21 mars 2026, le comité fribourgeois des Journées de la Schizophrénie (JdS) ouvre les combles du restaurant de l’Aigle Noir en ville de Fribourg pour une semaine dédiée au jeu et à la santé mentale. Inscrivez-vous dès maintenant via notre site pour jouer à l’Escape Box, plonger dans le Psyquiz et tester le jeu vidéo Between Two Realities, deux expériences phares des éditions précédentes des JdS.',
            'En plus des jeux immersifs, un espace d’échanges avec des professionnel·le·s de la santé mentale vous accueillera pour répondre à vos questions et favoriser le dialogue. Une occasion unique de découvrir, jouer et échanger dans une ambiance conviviale et bienveillante !',
        ]
    ]) ?>    

    <?= component('block_sentence',
    [
        'css' => 'bg-white',
        'title' => 'En apprendre plus',
        'sentences' => [
            'De l’Escape Game à l’Escape Box : Une géniale réinvention !' , 
            'Un projet innovant conçu pour déstigmatiser la santé mentale par le jeu !',
            'L’idée de l’Escape Box est née après le succès de l’Escape Game présenté lors des JdS 2024 à l’Aigle Noir. Nombreux partenaires ont sollicité le comité fribourgeois pour l’emmener partout, mais son format lourd (déménagement, suivi) s’est révélé impossible. L’Escape Game s’est donc réinventée en format poche : l’Escape Box, plus mobile, prête à voyager !',
            'Un mandat a ainsi été confié à une personne concernée par un trouble psychique, passionnée d’Escape Game et calée en conception de jeux. Son travail a été soutenu par différents partenaires talentueux : Fondation St-Louis (menuisiers du Chantier Écologique), White Ermine Studio Game (électronique, informatique, site internet), Frilance (formulaire d’inscription JdS), Polygravia (visuels et impressions), Brick Occasion (Bulle) : espaces immersifs.',
            'La conception et la réalisation de l’Escape Box a durée une année environ.',
            'Résultat : une boîte immersive qui sensibilise avec humanité et efficacité.',
        ]
    ]) ?>

    <!-- Start block -->
    <section class="bg-[#50bd21]">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-24 lg:px-6">

        </div>
      </section>
    <!-- End block -->


    <?= component('partners_escapebox', ['lang' => 'fr']) ?>

    <?= component('footer', ['lang' => 'fr']) ?>

</body>
</html>