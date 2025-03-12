<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Between two realities</title>
    <link href="../../theme.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="Incarne Kevin, un jeune qui souffre de troubles schizophréniques et accompagne-le dans une mini aventure interactive.">
    <meta name="author" content="Daniel Thalmann (white-ermine.ch)">
    <link rel="icon" href="../../images/logo.svg" sizes="32x32" />

    <link rel="alternate" href="/fr/between-two-realities/" hreflang="fr" />
    <link rel="alternate" href="/de/between-two-realities/" hreflang="de" />
    <?php include('../../components/header_googletag.php'); ?>
    <?php include('../../components/header.php'); ?>
    <?php include('../../components/menu.php'); ?>
</head>
<body>
    <?php include('../../components/body_googletag.php'); ?>
    <header class="fixed w-full">
        <nav class="bg-gray-200 border-gray-200 py-2.5">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                <a href="/fr/" class="flex items-center">
                    <img src="/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Schizogame Logo">
                    <span class="self-center text-xl font-semibold whitespace-nowrap">Schizogame</span>
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
                        <?php echo menu('Jeux', '#game') ?>
                        <?php echo menu('Plus', '#more') ?>
                        <?php echo menu('Troubles', '#troubles') ?>
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
                                    <a href="/de/between-two-realities/" class="block py-2 pl-3 pr-4 text-[#50bd21] hover:text-[#50bd21] visited:text-[#50bd21]  lg:text-neutral-800 lg:hover:text-neutral-800 lg:visited:text-neutral-800 rounded lg:bg-transparent lg:p-0">DE</a>
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
    <section class="bg-radial-[at_50%_75%] from-neutral-800 to-jdsgray-500 text-white">
        <div class="grid grid-cols-1 max-w-screen-xl mx-auto lg:min-h-screen">
            <div class="mt-20 p-5">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl text-[#50bd21]">Between two realities</h1>
                <a name="game"></a>
                <p class="max-w-2xl mb-6 font-light text-gray-100 lg:mb-2 md:text-lg lg:text-xl">
                    Incarne Kevin, un jeune qui souffre de troubles schizophréniques et accompagne-le dans une mini aventure interactive. 
                </p>
                <div class="text-right">
                    <button class="bg-jds-500 cursor-pointer text-neutral-100 p-3 rounded-t-lg shadow-lg shadow-jdsgray-500/50" id="togglefullscreen">En plein écran</button>
                </div>
                <div class="mx-auto align-middle">
                    <div class="game-frame w-full mb-5">
                        <iframe 
                            id="game-frame"
                            class="w-full"
                            mozallowfullscreen="true" 
                            msallowfullscreen="true" 
                            frameborder="0" 
                            allowfullscreen="true" 
                            scrolling="no" 
                            src="../../game/index.html?v=0.1.0" 
                            allow="autoplay; fullscreen *; geolocation; microphone; camera; midi; monetization; xr-spatial-tracking; gamepad; gyroscope; accelerometer; xr; cross-origin-isolated; web-share"
                            allowtransparency="true" 
                            webkitallowfullscreen="true">
                        </iframe>
                    </div>
                    <script>
                        var button = document.getElementById("togglefullscreen");

                        button.addEventListener('click', function() {

                            var elem = document.getElementById("game-frame");
                            if (elem.requestFullscreen) {
                                elem.requestFullscreen();
                            }

                        });

                    </script>
                    <!--img src="../../images/game.png" alt="game"/-->
                </div>
            </div>         
            
        </div>
    </section>
    <!-- End block -->

    <!-- Start block -->
    <section class="bg-gray-300">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:space-y-20 lg:py-24 lg:px-6">
            <!-- Row -->
            <div class="items-center">
                <div class="text-gray-900 sm:text-lg">
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-[#50bd21]">Le jeu</h2>
                    <p class="mb-4 font-light lg:text-xl">
                        Dans Between two realities, vous incarnez Kevin, un jeune homme qui souffre de troubles schizophréniques. Son histoire commence par un matin apparemment ordinaire : une chambre baignée de lumière douce, des objets familiers empreints de souvenirs. Mais rien n’est jamais ordinaire dans la vie de Kevin.
                    </p>
                    <p class="mb-4 font-light lg:text-xl">
                        Chaque interaction avec son environnement dévoile un pan de son monde intérieur, oscillant entre confusion et moments de sérénité. Loin d’être un simple jeu, Between two realities vous invite à explorer une expérience humaine, intime et poignante. Un voyage émotionnel !
                    </p>
                    <p class="mb-4 font-light lg:text-xl">
                        Ce n’est pas juste un récit interactif, c’est une mission pour comprendre les défis quotidiens des personnes souffrant de troubles schizophréniques, pour démêler vérité et idées reçues pour briser les stigmates entourant la schizophrénie et pour apprendre à reconnaitre les gestes qui peuvent véritablement aider.
                    </p>   
                    <p class="mb-4 font-light lg:text-xl">
                        Between two realities s’adresse à un large public car aucune scène choquante viendra troubler le voyage. Pourtant, les thèmes abordés demandent une certaine maturité émotionnelle pour saisir pleinement la richesse de l’expérience. 
                    </p>
                </div>

            </div>

        </div>
    </section>
    <!-- End block -->

    <!-- Start block -->
    <a name="more"></a>
    <section class="bg-white">
        <div class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:py-24 lg:px-6">
            <h2 class="mb-8 text-3xl font-extrabold tracking-tight text-[#50bd21]">En apprendre plus...</h2>

            <div class="col-span-2 space-y-8 md:grid md:grid-cols-3 lg:grid-cols-4 md:gap-12 md:space-y-0">
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/photo.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">la photo de sa famille</h3>
                    <p class="font-light text-gray-800">La schizophrénie peut avoir une composante génétique. Les antécédents familiaux peuvent augmenter le risque mais d’autres facteurs biopsychosociaux comme par exemple l’environnement, des facteurs biologiques, le stress ou encore la consommation de substances jouent également un rôle dans l’apparition ou la gravité du trouble.</p>
                </div>
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/wardrobe.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">l'armoire</h3>
                    <p class="font-light text-gray-800">Les <a class="font-semibold text-[#50bd21]" href="#hallucinations">hallucinations</a> sont des perceptions sensorielles en absence de tout stimulus (acoustique, visuel,…) que la personne concernée considère comme faisant partie de la réalité. Dans le cas de Kevin, il voit et entend Horus. Dans la schizophrénie, ces hallucinations ont souvent un impact négatif, et se manifeste sous forme d’injonctions et de commentaires menaçants ou négatifs qui renforcent l’anxiété, la méfiance ou la souffrance émotionnelle de la personne.</p>
                </div>                
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/bed.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">le lit</h3>
                    <p class="font-light text-gray-800">La perte de motivation ou d’intérêt ainsi que le retrait social font partie des <a class="font-semibold text-[#50bd21]" href="#symptomes-negatifs">symptômes négatifs</a> de la schizophrénie. On observe également souvent des troubles du sommeil comme l’insomnie, des réveils fréquents ou des rêves perturbants, ce qui peuvent aggraver les autres symptômes.</p>
                </div>  
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/curtain.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">la fenêtre</h3>
                    <p class="font-light text-gray-800">La perte de motivation et d’énergie, un <a class="font-semibold text-[#50bd21]" href="#symptomes-negatifs">symptôme négatif</a> de la schizophrénie, peut rendre le monde extérieur moins attirant et plus difficile d’accès. De plus, certaines personnes éprouvent aussi un sentiment de persécution (<a class="font-semibold text-[#50bd21]" href="#delires">délire</a> de persécution), comme dans le cas Kevin qui pense être observé ou suivi à travers la fenêtre, ce qui le rend méfiant et donc moins enclin à sortir et à rencontrer des gens, ce qui peut accentuer son isolement social (autre symptôme négatif de la schizophrénie).</p>
                </div> 
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/book.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">le livre</h3>
                    <p class="font-light text-gray-800">Une majorité (mais pas tous) des personnes souffrant de schizophrénie présentent des <a class="font-semibold text-[#50bd21]" href="#troubles-cognitifs">troubles cognitifs</a> comme la difficulté à se concentrer, à mémoriser, à organiser ses pensées ou à suivre une discussion ou un film. Ces difficultés peuvent être améliorées grâce à des thérapies ciblées.</p>
                </div> 
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/medicines.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">les médicaments</h3>
                    <p class="font-light text-gray-800">Les traitements médicamenteux comme les antipsychotiques sont essentiels pour réduire les symptômes de la schizophrénie. Ils ne « guérissent » pas la maladie mais aide à stabiliser l’état de la personne et à améliorer sa qualité de vie. Il faut être attentif à la présence et à la gestion de potentiels effets secondaires de tels médicaments.</p>
                </div>
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/mirror.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">le miroir</h3>
                    <p class="font-light text-gray-800">Les illusions peuvent concerner des altérations de l’image de soi. Contrairement aux <a class="font-semibold text-[#50bd21]" href="#hallucinations">hallucinations</a>, il y a un stimulus mais celui-ci est perçu d’une manière distordue ou inexacte. Une personne pourrait se voir déformée ou différente dans le miroir. Ces perceptions erronées entrainent de l’anxiété, de la confusion ou un sentiment de détresse, affectant ainsi l’estime de soi et le rapport à la réalité. Elles peuvent être présentes dans la schizophrénie sans en être un critère déterminant.</p>
                </div>  
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/watercloset.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">les toilettes</h3>
                    <p class="font-light text-gray-800">Les troubles du sommeil comme l’insomnie ou les réveils fréquents pendant la nuit sont souvent présents chez les personnes souffrant de schizophrénie. Ils peuvent être causés par l’anxiété associée à différents symptômes (les hallucinations peuvent augmenter durant la nuit) ou les déséquilibres liés à la maladie (la baisse de l’énergie avec réduction de l’activité diurne réduit le besoin de sommeil).</p>
                </div>
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/horus.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">Horus</h3>
                    <p class="font-light text-gray-800">Les <a class="font-semibold text-[#50bd21]" href="#hallucinations">hallucinations</a> sont des perceptions qui semblent réelles pour la personne concernée en absence de tout stimulus sensoriel (auditifs, visuels ou autres). Dans le cas de Kevin, il voit et entend Horus. Souvent, ces hallucinations, notamment acoustico-verbales, sont perçues comme des influences négatives, à travers des propos manipulateurs ou menaçants qui renforcent l’anxiété, la méfiance ou la souffrance émotionnelle de la personne.</p>
                </div>
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/sink.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">le lavabo</h3>
                    <p class="font-light text-gray-800">Les <a class="font-semibold text-[#50bd21]" href="#symptomes-negatifs">symptômes négatifs</a> de la schizophrénie peuvent aussi entraîner une négligence de l’hygiène personnelle. Prendre soin de son hygiène peut aider à renforcer la routine quotidienne, favoriser le bien-être émotionnel et améliorer le sentiment de contrôle sur sa vie.</p>
                </div>
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/postit.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">le post-It</h3>
                    <p class="font-light text-gray-800">Les troubles de la mémoire, de la concentration et des capacités d'organisation et de planification sont des <a class="font-semibold text-[#50bd21]" href="#troubles-cognitifs">troubles cognitifs</a> souvent associés à la schizophrénie. Ces difficultés peuvent rendre difficile la réalisation et planification des tâches.</p>
                </div>
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/assiette.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">l'assiette sur la table</h3>
                    <p class="font-light text-gray-800">L’avolition ou aboulie, est un <a class="font-semibold text-[#50bd21]" href="#symptomes-negatifs">symptôme négatif</a> de la schizophrénie. Elle se manifeste par des difficultés ou impossibilité à exercer sa volonté, notamment dans le passage à l'action, avec tendance à différer celle-ci (procrastination).</p>
                </div>
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/radio.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">la radio</h3>
                    <p class="font-light text-gray-800">Le <a class="font-semibold text-[#50bd21]" href="#delires">délire</a> de référence, est un trouble délirant qui peut apparaître dans la schizophrénie. La personne est convaincue que des évènements de son environnement ont une signification particulière personnelle et souvent cachée en lien avec elle. Par exemple, les informations diffusées à la radio, à la télévision ou sur internet peuvent être interprétées comme des messages adressés directement et intentionnellement à la personne. Le délire de concernement repose sur les mêmes interprétations mais avec la perception d’une intentionnalité malveillante.</p>
                </div>   
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/phone.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">le téléphone</h3>
                    <p class="font-light text-gray-800">Le <a class="font-semibold text-[#50bd21]" href="#delires">délire</a> de persécution est un symptôme psychotique qui apparaît fréquemment dans certaines formes de schizophrénie, notamment dans le type paranoïde. Il se caractérise par des idées délirantes où la personne est convaincue qu’elle est menacée, espionnée, suivie, ou victime d’une conspiration, sans fondement rationnel.</p>
                </div>
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/distributor.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">distributeur</h3>
                    <p class="font-light text-gray-800">Le <a class="font-semibold text-[#50bd21]" href="#delires">délire</a> d’empoisonnement est un type de délire de persécution dans lequel une personne croit, sans preuve objective, qu'on cherche à l'empoisonner ou à nuire à sa santé en contaminant sa nourriture, ses boissons ou son environnement. Ce délire peut isoler la personne, altérer ses relations sociales et engendrer des carences alimentaires ou une déshydratation si elle évite systématiquement de consommer des aliments ou boissons qu’elle perçoit comme dangereux.</p>
                </div>
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/bus.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">bus</h3>
                    <p class="font-light text-gray-800">Chez une personne atteinte de schizophrénie, le stress lié à la présence de nombreuses personnes peut être particulièrement intense et exacerber les symptômes de la maladie. Ce stress peut parfois déclencher la réapparition ou l’exacerbation de symptômes psychotiques comme des idées délirantes ou des hallucinations. Des difficultés cognitives, ou un isolement social préalable sont des facteurs qui peuvent augmenter la sensibilité au stress.</p>
                </div>                  
            </div>
        </div>
      </section>
    <!-- End block -->

    <!-- Start block -->
    <a name="troubles"></a>
    <a name="delires"></a>
    <a name="hallucinations"></a>
    <a name="desorganisation"></a>
    <a name="symptomes-negatifs"></a>
    <a name="hallucinations"></a>
    <a name="troubles-cognitifs"></a>     
    <section class="bg-gray-300">
        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
            <!-- Row -->
            <div class="items-center">
                <div class="text-gray-800 sm:text-lg">
                    <h2 class="mb-8 text-3xl font-extrabold tracking-tight text-center lg:mb-8 lg:text-3xl text-[#50bd21]">Schizophrénie - Troubles mentaux - Manuels MSD pour le grand public</h2>
                    <div class="">
                        <div class="mb-8">
                            On classe l’ensemble des symptômes et caractéristiques de la schizophrénie en quatre principales catégories :
                        </div>
                       
                        <div class="mb-8">
                            <span class="font-semibold text-gray-950">Les symptômes positifs</span> qui représentent une distorsion ou un excès des fonctions normales :

                            <ul class="ml-5 mt-3">
                                <li><span class="font-semibold text-[#50bd21]">Délires :</span> Croyances erronées persistantes et souvent invraisemblables, comme les idées de persécution ou de grandeur. La conviction persiste devant une preuve claire et raisonnable du contraire.</li>
                                <li><span class="font-semibold text-[#50bd21]">Hallucinations :</span> perceptions sensorielles auditives, visuelles, tactiles, cénesthésiques, olfactives ou gustatives qu’une personne rapporte sans qu’il n’y ait de stimulus réel. Les hallucinations auditives (souvent sous forme de voix) sont de loin les plus fréquentes, viennent ensuite les hallucinations visuelles. </li>
                                <li><span class="font-semibold text-[#50bd21]">La désorganisation</span> est parfois considéré comme un symptôme positif mais peut être considéré à part.</li>
                            </ul>
                        </div> 

                        <div class="mb-8">
                            <span class="font-semibold text-gray-950">Symptômes associés à la désorganisation</span> :

                            <ul class="ml-5 mt-3">
                                <li><span class="font-semibold text-[#50bd21]">Trouble de la pensée :</span> Discours chaotique ou incohérent révélant une désorganisation mentale.</li>
                                <li><span class="font-semibold text-[#50bd21]">Comportement désorganisé :</span> Actions inadaptées ou erratiques.</li>
                            </ul>
                        </div>
                        <div class="mb-8">
                            <span class="font-semibold text-gray-950">Les symptômes négatifs</span> qui représentent une diminution ou une perte des fonctions normales :

                            <ul class="ml-5 mt-3">
                                <li><span class="font-semibold text-[#50bd21]">Affect émoussé :</span> Réduction marquée ou absence d'expression émotionnelle.</li>
                                <li><span class="font-semibold text-[#50bd21]">Alogie :</span> Pauvreté du discours, réponses laconiques ou minimalistes.</li>
                                <li><span class="font-semibold text-[#50bd21]">Anhédonie :</span> Diminution de la capacité à ressentir du plaisir.</li>
                                <li><span class="font-semibold text-[#50bd21]">Isolement social :</span> Difficultés pour développer ou maintenir les interactions sociales et les relations.</li>
                                <li><span class="font-semibold text-[#50bd21]">Manque de motivation :</span> Réduction de l’initiative pour accomplir des tâches ou atteindre des objectifs. C’est une problématique souvent associée à des concepts comme l’avolition, l’aboulie ou l’apragmatisme.</li>
                            </ul>
                        </div>
                        <div class="mb-8">
                            <span class="font-semibold text-gray-950">Troubles cognitifs</span> :

                            <ul class="ml-5 mt-3">
                                <li><span class="font-semibold text-[#50bd21]">Troubles de la concentration :</span> Difficulté à maintenir ou à focaliser son attention sur une tâche.</li>
                                <li><span class="font-semibold text-[#50bd21]">Troubles de la mémoire :</span> Difficultés pour apprendre et retenir de nouvelles informations ou de réaccéder à des informations mnésiques.</li>
                                <li><span class="font-semibold text-[#50bd21]">Altération des fonctions exécutives :</span> Difficulté à planifier, résoudre des problèmes et organiser des tâches.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>    
    <!-- End block -->   

    <!-- Start block -->
    <section class="bg-[#50bd21]">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-24 lg:px-6">
            <?php /*

            <figure class="max-w-screen-md mx-auto">
                <svg class="h-12 mx-auto mb-3 text-gray-300" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"></path>
                </svg>
                <blockquote>
                    <p class="text-xl font-medium  md:text-2xl text-white">"Ce jeu est exceptionnel ! Il est assez fidèle à la réalité"</p>
                </blockquote>
                <figcaption class="flex items-center justify-center mt-6 space-x-3">
                    <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
                    <div class="flex items-center divide-x-2 divide-gray-500">
                        <div class="pr-3 font-medium text-white">Micheal</div>
                        <div class="pl-3 text-sm font-light text-gray-100">Médecin</div>
                    </div>
                </figcaption>
            </figure>

            */ ?>
        </div>
      </section>
    <!-- End block -->
   
    <!-- Start block -->
    <section class="bg-gray-300">
        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
            <!-- Row -->
            <div class="items-center">
                <div class="text-gray-900 sm:text-lg">
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-[#50bd21]">Notre histoire</h2>
                    <p class="mb-4 font-light lg:text-xl">
                        Between two realities a vu le jour grâce à une alliance créative entre le comité fribourgeois des Journées de la schizophrénie et la société White Ermine Game Studio, unissant passion et savoir-faire pour donner vie à cette aventure immersive.
                    </p>
                    <p class="mb-8 font-light lg:text-xl">
                        <b>Les journées de la schizophrénie</b>
                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- End block -->



    <?php include('../../components/footer.php'); ?>

</body>
</html>