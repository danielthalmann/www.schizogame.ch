<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Liste d'éléments</title>
    <link href="../theme.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="icon" href="../../images/logo.svg" sizes="32x32" />

    <link rel="alternate" href="/fr" hreflang="fr" />
    <link rel="alternate" href="/de" hreflang="de" />
    <?php include('../components/menu.php'); ?>
</head>
<body>

<header class="fixed w-full">
        <nav class="bg-gray-200 border-gray-200 py-2.5">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                <a href="/fr" class="flex items-center">
                    <img src="../../images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Schizogame Logo">
                    <span class="self-center text-xl font-semibold whitespace-nowrap">Schizogame</span>
                </a>
                <div class="flex items-center lg:order-2 lg:hidden">
                    <button class="mt-2 mr-4 sm:inline-block cursor-pointer" id="h-menu" type="button">
                        <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Mobile menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <?php echo menu('Psyquiz', 'https://psyquiz.ch/') ?>
                        <?php echo menu('Between two realities', 'fr/between-two-realities') ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    

    <!-- Start block -->
    <section class="bg-white">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl text-[#50bd21]"><a href="fr/between-two-realities/">Between two realities</a></h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl">
                    Incarne Kevin, un jeune qui souffre de troubles schizophréniques et accompagne-le dans une mini aventure interactive. 
                </p>
            </div>
        </div>
    </section>
    <!-- End block -->

    <!-- Start block -->
    <section class="bg-white">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl text-[#50bd21]">Escape room</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl">
                    Escape room
                </p>
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
                    <h2 class="mb-8 text-3xl font-extrabold tracking-tight text-center lg:mb-8 lg:text-3xl text-[#50bd21]">Liens externes</h2>
                    <div class="">

                        <div class="mb-8">
                            <a class="text-[#50bd21]" target="_blank" href="https://positiveminders.com/">positiveminders.com</a> regroupe des infos sur la santé mentale en général
                        </div> 

                        <div class="mb-8">
                            <a class="text-[#50bd21]" target="_blank" href="https://schizinfo.com/">schizinfo.com</a> sur les troubles de la schizophrénie
                        </div> 

                        <div class="mb-8">
                            <a class="text-[#50bd21]" target="_blank" href="https://santepsy.ch/">santepsy.ch</a> promotion de la santé mentale dans les cantons latins
                        </div> 

                        <div class="mb-8">
                            <a class="text-[#50bd21]" target="_blank" href="https://www.promentesana.org/">www.promentesana.org</a> défend les intérêts et les droits des personnes souffrant de troubles ou d’un handicap psychiques
                        </div> 

                        <div class="mb-8">
                            <a class="text-[#50bd21]" target="_blank" href="https://associationciao.ch/">associationciao.ch</a> information pour les 11-20 ans
                        </div> 

                        <div class="mb-8">
                            <a class="text-[#50bd21]" target="_blank" href="https://psyquiz.ch/">psyquiz.ch</a> Quiz sur différents troubles en santé mentale
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
                    <h2 class="mb-8 text-3xl font-extrabold tracking-tight text-center lg:mb-8 lg:text-3xl text-[#50bd21]">Membres du comité</h2>
                    <div class="col-span-2 space-y-8 md:grid md:grid-cols-3 md:gap-12 md:space-y-0">
                        <div>
                            <a target="_blank" href="https://www.rfsm.ch/"><img src="../../images/partners/logo-RFSM-2019.jpg" alt="logo-RFSM"></a>
                        </div> 
                        <div>
                            <a target="_blank" href="https://horizonsud.ch/"><img src="../../images/partners/logo-HorizonSud-scaled.jpg" alt="logo-horizon-sud"></a>
                        </div>
                        <div>
                            <a target="_blank" href="https://www.st-louis.ch/"><img src="../../images/partners/logo-st-louis.jpg" alt="logo-st-louis"></a>
                        </div>
                        <div>
                            <a target="_blank" href="https://www.fr.ch/dsas"><img src="../../images/partners/logo-DSAS.jpg" alt="logo-dsas"></a>
                        </div>
                        <div>
                            <a target="_blank" href="https://www.lestraversees.ch/"><img src="../../images/partners/logo-Les_Traversees.png" alt="logo-lestraversees"></a>
                        </div> 
                        <div>
                            <a target="_blank" href="https://afaap.ch/"><img src="../../images/partners/logo-AFAAP.jpg" alt="logo-AFAAP"></a>
                        </div> 

                    </div>

                </div>
            </div>

        </div>
    </section>    
    <!-- End block -->    

    <?php include('../components/footer.php'); ?>
    
</body>
</html>