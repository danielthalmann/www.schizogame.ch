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

    <link rel="alternate" href="<?= url('fr/escape-box/') ?>" hreflang="fr" />
    <link rel="alternate" href="<?= url('de/escape-box/') ?>" hreflang="de" />
    <?php include(base_path('components/header_googletag.php')); ?>
    <?php include(base_path('components/header.php')); ?>
</head>
<body>
    <?php include(base_path('components/body_googletag.php')); ?>

    <?= component('menu_root', [
        'lang' => 'fr', 
        'path' => 'escape-box/',
    ]) ?>

    <?= component('block_title',
    [
        'title' => 'Escape Box',
        'description' => 'Résous des énigmes et trouve des indices pour aider Federico, un jeune confronté à des troubles schizophréniques, à se rétablir.' ,
        'image' => url('images/escapebox/escape-box.png'),
    ]) ?>

    <?= component('block_sentence',
    [
        'css' => 'bg-white',
        'illustration' => 'bg-locked',
        'title' => 'L’Escape Box',
        'sentences' => [
            'Dans une boîte compacte remplie de casse-têtes, cadenas à codes, indices cachés et objets à manipuler, explore différentes pièces pour résoudre les énigmes en 60 minutes chrono et accompagne Federico pas à pas vers le rétablissement !' , 
            'Que tu sois joueur.se aguerri.e ou simple curieux.se, cette aventure t’invite à dépasser tes préjugés et à vivre un moment fort, à la fois ludique et profondément humain. Une chose est sûre : tu ne verras plus la santé mentale du même œil !',
        ]
    ]) ?>    

    <?php if((new DateTime()) > (new DateTime('2026-03-01'))): ?>
    <?= component('block_sentence',
    [
        'css' => 'bg-escapebox-light text-white',
        'title' => 'En location',
        'sentences' => [
            'Escape Box en location : mets la santé mentale au cœur d’un événement !' , 
            'L’Escape Box est disponible en location pour les écoles, organismes, associations et manifestations souhaitant sensibiliser à la santé mentale (portes ouvertes, festivals, ateliers, etc.).',
            ],
        'link_text' => 'Info et location',
        'link_url' => url('fr/escape-box/reservations'),
    ]) ?>
    <?php else: ?>
    <?= component('block_sentence',
    [
        'css' => 'bg-escapebox-light text-white',
        'title' => 'Après l\'événement',
        'sentences' => [
            'Escape Box en location : mets la santé mentale au cœur d’un événement !' , 
            'Après les JdS et Ludesco, l’Escape Box est disponible en location pour les écoles, organismes, associations et manifestations souhaitant sensibiliser à la santé mentale (portes ouvertes, festivals, ateliers, etc.).',
            'Les réservations seront ouvertes prochainement.'
            ],
    ]) ?>
    <?php endif; ?>

    <?= component('block_sentence',
    [
        'css' => 'bg-white',
        'illustration' => 'bg-tree',
        'title' => 'En apprendre plus',
        'sentences' => [
            'De l’Escape Game à l’Escape Box : Une géniale réinvention !' , 
            'Un projet innovant conçu pour déstigmatiser la santé mentale par le jeu !',
            'L’idée de l’Escape Box est née après le succès de l’Escape Game présenté en collaboration avec Entrée de Jeux lors des JdS 2024 à l’Aigle Noir. Nombreux partenaires ont sollicité le comité fribourgeois pour pouvoir rejouer l’Escape Game lors de manifestations, mais le jeu avec ce format s’est révélé impossible à redéployer. L’Escape Game s’est donc réinventée en format poche : l’Escape Box, plus mobile, prête à voyager !',
            'Un mandat a ainsi été confié à une personne concernée par un trouble psychique, passionnée d’Escape Game et calée en conception de jeux. Son travail a été soutenu par différents partenaires talentueux : Fondation St-Louis (équipe du Chantier Écologique), White Ermine Studio Game (électronique, informatique, site internet), Frilance (formulaire d’inscription JdS), Polygravia (visuels et impressions), Brick Occasion (Bulle) : espaces immersifs.',
            'La conception et la réalisation de l’Escape Box ont duré deux ans environ.',
            'Résultat : une boîte immersive qui sensibilise avec humanité et efficacité au thème de la santé mentale.',
        ]
    ]) ?>

    <!-- Start block -->
    <section class="bg-escapebox">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-24 lg:px-6">

        </div>
      </section>
    <!-- End block -->


    <?= component('partners_escapebox', ['lang' => 'fr']) ?>

    <?= component('footer', ['lang' => 'fr']) ?>

</body>
</html>