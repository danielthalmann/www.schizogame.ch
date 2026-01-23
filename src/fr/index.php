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
                        Pour son édition 2025, le comité fribourgeois des Journées de la Schizophrénie vous invite à une expérience immersive inédite : un jeu vidéo captivant qui vous plonge au cœur de la schizophrénie.
                    </p>


                    <div class=" mb-15 max-w-[640px] mx-auto">
                        <video class="w-full shadow-lg shadow-jdsgray-500/50 " width="600" loop="true" autoplay="true" muted>
                            <source src="../videos/between_two_realities.mp4" type="video/mp4">
                            Your browser does not support HTML video.
                        </video>
                    </div>

                    <div class="text-center">
                        <a class="bg-jds-500 text-neutral-100 p-3 rounded-lg shadow-lg shadow-jdsgray-500/50" href="<?= url('fr/between-two-realities/') ?>">
                            <span>Incarner Kevin</span>
                            <svg class="inline ml-2 mb-1 h-4 fill-neutral-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6l0-128c0-17.7-14.3-32-32-32L352 0zM80 32C35.8 32 0 67.8 0 112L0 432c0 44.2 35.8 80 80 80l320 0c44.2 0 80-35.8 80-80l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-320c0-8.8 7.2-16 16-16l112 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 32z"/></svg>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- End block -->


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


    <!-- Start block -->
    <section class="bg-white">

        <div class="max-w-screen-xl px-4 pt-8 mx-auto space-y-12 lg:space-y-20 lg:pt-24 lg:px-6">
            <!-- Row -->
            <div class="items-center">
                <div class="text-gray-500 sm:text-lg">
                    <?= component('title2', ['title' => 'Membres du comité']) ?>
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
