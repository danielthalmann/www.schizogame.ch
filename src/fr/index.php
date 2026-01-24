<!DOCTYPE html>
<?php include('../Bootstrap.php'); ?>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Schizogame</title>
    <link href="<?= url('theme.css') ?>" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="Pour son édition 2025, le comité fribourgeois des Journées de la Schizophrénie vous invite à une expérience immersive inédite : un jeu vidéo captivant qui vous plonge au cœur de la schizophrénie.">
    <meta name="author" content="Daniel Thalmann (white-ermine.ch)">
    <link rel="icon" href="<?= url('images/logo.svg') ?>" sizes="32x32" />

    <link rel="alternate" href="<?= url('fr/') ?>" hreflang="fr" />
    <link rel="alternate" href="<?= url('de/') ?>" hreflang="de" />
    <?php include(base_path('components/header_googletag.php')); ?>
</head>
<body>
    <?php include(base_path('components/body_googletag.php')); ?>
    <?= component('menu_root', ['lang' => 'fr']) ?>
    
    <?= component('block_main',
    [
        //'toptext' => 'nouvelles fonctionalités',
        'title' => 'Between two realities',
        'description' => 'Pour son édition 2025, le comité fribourgeois des Journées de la Schizophrénie vous invite à une expérience immersive inédite : un jeu vidéo captivant qui vous plonge au cœur de la schizophrénie.',
        'video' => '../videos/between_two_realities.mp4',
        'link_url' => url('fr/between-two-realities/'),
        'link_text' => 'Incarner Kevin'
    ]) ?>


    <!-- Start block -->
    <section class="bg-neutral-900">
        <div class="grid grid-cols-1 lg:grid-cols-2 max-w-screen-xl mx-auto lg:min-h-[800px]">

            <?= component('card_game',
            [
                //'toptext' => 'nouvelles fonctionalités',
                'css' => 'bg-psyquiz',
                'title' => 'PsyQuiz 4.0',
                'sentences' => [
                    'Info ou intox : sauras-tu distinguer le vrai du faux sur les troubles psychiques ?' , 
                    '&nbsp;',
                    'Découvrez les dernières améliorations',
                    '<span class="font-bold">Une nouvelle langue<br>Des questions actualisées</span>'
                ],
                'link_url' => 'https://psyquiz.ch/',
                'link_text' => 'Plus d\'informations'
            ]) ?>

            <?= component('card_game',
            [
                //'toptext' => 'nouvelles fonctionalités',
                //'css' => 'bg-psyquiz',
                'title' => 'Between two realities',
                'sentences' => [
                    'Un jeu vidéo captivant qui vous plonge au cœur de la schizophrénie.' , 
                    'Incarne Kevin, un jeune qui souffre de troubles schizophréniques et accompagne-le dans une mini aventure interactive.',
                ],
                'link_url' => url( 'fr/between-two-realities/'),
                'link_text' => 'Plus d\'informations'
            ]) 
            ?>
            
        </div>

    </section>
    <!-- End block -->

    <!-- Start block -->
    <section class="bg-neutral-200">
        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
            <!-- Row -->
            <div class="items-center">
                <div class="text-gray-500 sm:text-lg">
                    <?= component('title2', ['title' => 'Qui sommes nous ?']) ?>
                    <div class="mb-3">
                        <div>

                            <p class="mb-5">Depuis 2004, l’association PositiveMinders coordonne en Suisse et au niveau international <span class="whitespace-pre">les Journées de la Schizophrénie (JdS)</span> pour raconter et dédramatiser la maladie psychique.</p>

                            <p class="mb-5">Les partenaires des JdS organisent des événements visant à sensibiliser le grand public et les jeunes en particuliers sur les troubles psychiques. Ces manifestations ont également pour but d’aider les personnes concernées et leurs proches à sortir de l’isolement, les informer sur les possibilités de soins et de détection précoce pour augmenter les chances d’amélioration face à la maladie.</p>

                            <p class="mb-5">Le comité fribourgeois des JdS est composé d’une personne concernée, de proches et professionnel-le-s ; ensemble, ils œuvrent à la déstigmatisation des troubles psychiques et au renforcement de l’accès aux prestations locales.</p>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End block -->


    <?= component('committee', ['lang' => 'fr']) ?>


    <!-- Start block -->
    <section class="bg-white">
        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
            <!-- Row -->
            <div class="items-center">
                <div class="text-gray-500 sm:text-lg">
                    <?= component('title2', ['title' => 'Liens externes']) ?>
                    <div class="">

                        <div class="mb-8">
                            <a class="text-jds-500" target="_blank" href="https://positiveminders.com/">positiveminders.com</a> regroupe des infos sur la santé mentale en général
                        </div>

                        <div class="mb-8">
                            <a class="text-jds-500" target="_blank" href="https://schizinfo.com/">schizinfo.com</a> sur les troubles de la schizophrénie
                        </div>

                        <div class="mb-8">
                            <a class="text-jds-500" target="_blank" href="https://santepsy.ch/">santepsy.ch</a> promotion de la santé mentale dans les cantons latins
                        </div>

                        <div class="mb-8">
                            <a class="text-jds-500" target="_blank" href="https://www.promentesana.org/">www.promentesana.org</a> défend les intérêts et les droits des personnes souffrant de troubles ou d’un handicap psychiques
                        </div>

                        <div class="mb-8">
                            <a class="text-jds-500" target="_blank" href="https://associationciao.ch/">associationciao.ch</a> information pour les 11-20 ans
                        </div>

                        <div class="mb-8">
                            <a class="text-jds-500" target="_blank" href="https://psyquiz.ch/">psyquiz.ch</a> Quiz sur différents troubles en santé mentale
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End block -->

    <?= component('footer', ['lang' => 'fr']) ?>

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
