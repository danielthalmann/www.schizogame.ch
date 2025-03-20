<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Schizogame</title>
    <link href="../theme.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="Pour son édition 2025, le comité fribourgeois des Journées de la Schizophrénie vous invite à une expérience immersive inédite : un jeu vidéo captivant qui vous plonge au cœur de la schizophrénie.">
    <meta name="author" content="Daniel Thalmann (white-ermine.ch)">
    <link rel="icon" href="../../images/logo.svg" sizes="32x32" />

    <link rel="alternate" href="/fr/" hreflang="fr" />
    <link rel="alternate" href="/de/" hreflang="de" />
    <?php include('../components/header_googletag.php'); ?>
    <?php include('../components/menu.php'); ?>
</head>
<body>
    <?php include('../components/body_googletag.php'); ?>
    <header class="fixed w-full" style="z-index: 100;">
        <nav class="transition-all duration-700 py-2.5 ">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                <a href="/fr/" class="flex items-center">
                    <img src="../../images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Schizogame Logo">
                    <span class="self-center text-xl font-semibold whitespace-nowrap ">Schizogame</span>
                </a>
                <div class="flex items-center lg:order-2 lg:hidden">
                    <button class="mt-2 mr-4 sm:inline-block cursor-pointer" data-toggle="menu" type="button">
                        <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Mobile menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" data-toggle="menu" id="menu">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <?php echo menu('Psyquiz', 'https://psyquiz.ch/') ?>
                        <?php echo menu('Between two realities', '/fr/between-two-realities') ?>
                        <li class="hidden lg:inline m-2 bg-white rounded-xl lg:border-none lg:bg-transparent">
                            <div class="h-full inline-block border-jds-500 border-l-2"></div>
                        </li>
                        <li class="">
                            <div class="inline-block">
                                <ul class="flex flex-row mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                                    <li class="m-2 bg-white rounded-xl lg:border-none lg:bg-transparent">
                                        <span class="underline underline-offset-5 block py-2 pl-3 pr-4 text-[#50bd21] hover:text-[#50bd21] visited:text-[#50bd21]  lg:text-neutral-800 lg:hover:text-neutral-800 lg:visited:text-neutral-800 rounded lg:bg-transparent lg:p-0">FR</span>
                                    </li>
                                    <li class="m-2 bg-white rounded-xl lg:border-none lg:bg-transparent">
                                    <a href="/de/" class="block py-2 pl-3 pr-4 text-[#50bd21] hover:text-[#50bd21] visited:text-[#50bd21]  lg:text-neutral-800 lg:hover:text-neutral-800 lg:visited:text-neutral-800 rounded lg:bg-transparent lg:p-0">DE</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


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
                        <a class="bg-jds-500 text-neutral-100 p-3 rounded-lg shadow-lg shadow-jdsgray-500/50" href="/fr/between-two-realities/">
                            <span>Incarner Kevin</span>
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
                        Événement en ligne
                    </h1>
                    <?php
                        $event_date = new DateTime('2025-03-19 15:30:00');
    $current_date = new DateTime();
    if ($event_date > $current_date):
        ?>
                    <div class="my-15 max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-xl">
                        Retrouvez-nous en direct le <span class="font-bold">mercredi 19 mars 2025</span><br>
                        de <span class="font-bold">14h30 à 15h30</span><br>
                        pour découvrir les coulisses du jeu
                    </div>
                    <div class="my-15 max-w-2xl mb-6 font-light lg:mb-10 md:text-lg lg:text-xl">
                    </div>
                    <div class="my-10 text-center">
                        <a target="_blank" class="bg-jds-500 text-neutral-100 p-3 rounded-lg shadow-lg shadow-jdsgray-500/50" href="https://maison.schizinfo.com/session/2337f27d-56da-ef11-88f8-6045bd89b60c/le-jeu-s-invite-dans-la-schizophrenie">
                            <span>S'inscrire</span>
                            <svg class="inline ml-2 mb-1 h-4 fill-neutral-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6l0-128c0-17.7-14.3-32-32-32L352 0zM80 32C35.8 32 0 67.8 0 112L0 432c0 44.2 35.8 80 80 80l320 0c44.2 0 80-35.8 80-80l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-320c0-8.8 7.2-16 16-16l112 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 32z"/></svg>
                        </a>
                    </div>

                    <?php else:  ?>
                    <div class="my-15 max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-xl">
                        Retrouvez le replay du live qui a eu lieu le <span class="font-bold">mercredi 19 mars 2025</span><br>
                        sur les coulisses du jeu
                    </div>
                    <div class="my-15 max-w-2xl mb-6 font-light lg:mb-10 md:text-lg lg:text-xl">
                    </div>
                    <div class="my-10 text-center">
                        <a target="_blank" class="bg-jds-500 text-neutral-100 p-3 rounded-lg shadow-lg shadow-jdsgray-500/50" href="https://www.youtube.com/watch?v=mitRvWKm2c4">
                            <span>Regarder</span>
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

    <!-- Start block -->
    <section class="bg-neutral-900">
        <div class="grid grid-cols-1 lg:grid-cols-2 max-w-screen-xl mx-auto lg:min-h-[800px]">

            <div class="bg-psyquiz text-white flex relative overflow-hidden">
                <label class="top-0 right-0 whitespace-nowrap absolute">
                    <span class="block translate-y-10 translate-x-16 origin-center rotate-30 text-neutral-800 bg-amber-400 border-t-1 border-white text-center w-[310px] py-2 shadow-jdsgray-500/50">nouvelles fonctionalités</span>
                </label>
                <div class="bg-neutral-900/75 p-5 lg:text-center my-15 lg:m-auto w-full">

                    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl">
                        PsyQuiz 4.0
                    </h1>
                    <div class="my-15 max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-xl">
                        Info ou intox : sauras-tu distinguer le vrai du faux sur les troubles psychiques ?
                    </div>
                    <div class="my-15 max-w-2xl mb-6 font-light lg:mb-10 md:text-lg lg:text-xl">
                    <div class="mb-5">Découvrez les dernières améliorations</div>
                        <div class="font-bold ">Une nouvelle langue</div>
                        <div class="font-bold">Des questions actualisées</div>
                    </div>
                    <div class="my-10 text-center">
                        <a class="bg-jds-500 text-neutral-100 p-3 rounded-lg shadow-lg shadow-jdsgray-500/50" href="https://psyquiz.ch/">
                            <span>Plus d'informations</span>
                            <svg class="inline ml-2 mb-1 h-4 fill-neutral-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6l0-128c0-17.7-14.3-32-32-32L352 0zM80 32C35.8 32 0 67.8 0 112L0 432c0 44.2 35.8 80 80 80l320 0c44.2 0 80-35.8 80-80l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-320c0-8.8 7.2-16 16-16l112 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 32z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-escape text-white flex relative overflow-hidden">
                <label class="top-0 right-0 whitespace-nowrap absolute">
                    <span class="block translate-y-10 translate-x-16 origin-center rotate-30 text-neutral-800 bg-amber-400 border-t-1 border-white text-center w-[310px] py-2 shadow-jdsgray-500/50">À venir</span>
                </label>
                <div class="bg-neutral-900/75 p-5 lg:text-center my-25 lg:m-auto  w-full">

                    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl">
                        Escape Game
                    </h1>
                    <div class="my-15 max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-xl">
                        <p class="mb-5">
                        Cédric est un jeune
                        étudiant fribourgeois
                        qui ne va pas très bien
                        en ce moment
                        </p>
                        <p class="mb-5">
                        Sauriez-vous l’aider à mettre
                        des mots sur ses symptômes
                        et à trouver les soutiens dont il
                        a besoin pour se mettre sur le
                        chemin d’un rétablissement ?
                        </p>
                        <p class="mb-5">
                            L’Escape Game des JdS 2024 se réinvente en format de poche ! Son lancement est prévu au courant 2025.
                        </p>
                    </div>
                    <div class="my-10 text-center">
                        <!--a class="bg-jds-500 text-neutral-100 p-3 rounded-lg shadow-lg shadow-jdsgray-500/50" href="#">
                            <span>Plus d'informations</span>
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
                    <h2 class="mb-8 text-3xl font-extrabold tracking-tight text-center lg:mb-8 lg:text-3xl text-jds-500">Qui sommes nous ?</h2>
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
                    <h2 class="mb-8 text-3xl font-extrabold tracking-tight text-center lg:mb-8 lg:text-3xl text-jds-500">Membres du comité</h2>
                    <div class="col-span-2 space-y-8 md:grid md:grid-cols-3 md:gap-12 md:space-y-0">
                        <div class="p-4">
                            <a target="_blank" href="https://www.rfsm.ch/"><img class="max-h-52" src="../../images/partners/logo-RFSM-2019.jpg" alt="logo-RFSM"></a>
                        </div>
                        <div class="p-4">
                            <a target="_blank" href="https://horizonsud.ch/"><img class="max-h-52" src="../../images/partners/logo-HorizonSud.png" alt="logo-horizon-sud"></a>
                        </div>
                        <div class="p-4">
                            <a target="_blank" href="https://www.st-louis.ch/"><img class="max-h-52" src="../../images/partners/logo-st-louis.jpg" alt="logo-st-louis"></a>
                        </div>
                        <div class="p-4">
                            <a target="_blank" href="https://www.fr.ch/dsas"><img class="max-h-52" src="../../images/partners/logo-DSAS.jpg" alt="logo-dsas"></a>
                        </div>
                        <div class="p-4">
                            <a target="_blank" href="https://www.lestraversees.ch/"><img class="max-h-52" src="../../images/partners/logo-Les_Traversees.png" alt="logo-lestraversees"></a>
                        </div>
                        <div class="p-4">
                            <a target="_blank" href="https://afaap.ch/"><img class="max-h-52" src="../../images/partners/logo-AFAAP.jpg" alt="logo-AFAAP"></a>
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
                    <h2 class="mb-8 text-3xl font-extrabold tracking-tight text-center lg:mb-8 lg:text-3xl text-jds-500">Nos partenaires</h2>
                    <div class="col-span-2 space-y-8 md:grid md:grid-cols-4 md:gap-12 md:space-y-0">
                        <div class="flex flex-col items-center">
                            <a target="_blank" href="https://white-ermine.ch/"><img class="max-h-52" src="../../images/partners/logo_white_ermine.svg" alt="logo-logo_white_ermine"></a>
                        </div>
                        <div class="flex flex-col items-center">
                            <a target="_blank" href="https://michelereymond.ch/"><img class="max-h-52" src="../../images/partners/logo-MR.svg" alt="logo-michelereymond"></a>
                        </div>
                        <div class="flex flex-col items-center">
                            <a target="_blank" href="https://polygravia.ch/"><img class="max-h-52" src="../../images/partners/logo_polygravia.svg" alt="logo-logo_polygravia"></a>
                        </div>
                        <div class="flex flex-col items-center">
                            <a target="_blank" href="https://fri-host.ch/"><img class="max-h-52" src="../../images/partners/logo_fri-host.png" alt="logo-fri-host"></a>
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
                    <h2 class="mb-8 text-3xl font-extrabold tracking-tight text-center lg:mb-8 lg:text-3xl text-jds-500">Liens externes</h2>
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



    <?php include('../components/footer.php'); ?>
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
