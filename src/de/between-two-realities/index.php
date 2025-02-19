<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Between two realities</title>
    <link href="../../theme.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="icon" href="../../images/logo.svg" sizes="32x32" />

    <link rel="alternate" href="/fr/between-two-realities/" hreflang="fr" />
    <link rel="alternate" href="/de/between-two-realities/" hreflang="de" />

    <?php include('../../components/header.php'); ?>
    <?php include('../../components/menu.php'); ?>
</head>
<body>
    <header class="fixed w-full">
        <nav class="bg-gray-200 border-gray-200 py-2.5">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                <a href="/de/" class="flex items-center">
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
                        <?php echo menu('Spiel', '#game') ?>
                        <?php echo menu('Mehr', '#more') ?>
                        <?php echo menu('Störung', '#troubles') ?>
                        <li class="hidden lg:inline m-2 bg-white rounded-xl lg:border-none lg:bg-transparent">
                            <div class="h-full inline-block border-jds-500 border-l-2"></div>
                        </li>
                        <li class="">
                            <div class="inline-block">
                                <ul class="flex flex-row mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                                    <li class="m-2 bg-white rounded-xl lg:border-none lg:bg-transparent">
                                    <a href="/fr/between-two-realities/" class="block py-2 pl-3 pr-4 text-[#50bd21] hover:text-[#50bd21] visited:text-[#50bd21]  lg:text-neutral-800 lg:hover:text-neutral-800 lg:visited:text-neutral-800 rounded lg:bg-transparent lg:p-0">FR</a>
                                    </li>
                                    <li class="m-2 bg-white rounded-xl lg:border-none lg:bg-transparent">
                                    <span class="underline underline-offset-5 block py-2 pl-3 pr-4 text-[#50bd21] hover:text-[#50bd21] visited:text-[#50bd21]  lg:text-neutral-800 lg:hover:text-neutral-800 lg:visited:text-neutral-800 rounded lg:bg-transparent lg:p-0">DE</span>
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
                    Kevin ist ein junger Mensch mit Schizophrenie. In diesem interaktiven Spiel können Sie in seine Haut schlüpfen und seine Welt erleben.
                </p>
                <div class="text-right">
                    <button class="bg-jds-500 cursor-pointer text-neutral-100 p-3 rounded-t-lg shadow-lg shadow-jdsgray-500/50" id="togglefullscreen">Im Vollbild</button>
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
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-[#50bd21]">Das Spiel</h2>
                    <p class="mb-4 font-light lg:text-xl">
                    In « Between two realities » schlüpfen Sie in die Haut Kevins, eines jungen Menschen mit Schizophrenie. Seine Geschichte beginnt an einem scheinbar gewöhnlichen Morgen: ein Zimmer, das in sanftes Licht getaucht ist, mit vertrauten Gegenständen voller Erinnerungen. Doch nichts in Kevins Leben ist jemals gewöhnlich.
                    </p>
                    <p class="mb-4 font-light lg:text-xl">
                    Jede Interaktion mit seiner Umgebung offenbart eine Seite seiner inneren Welt, die zwischen Verwirrung und Momenten der Gelassenheit schwankt. « Between two realities » ist nicht nur ein Spiel: Die Spielerinnen und Spieler erleben eine bewegende menschliche Erfahrung auf einer emotionalen Reise!
                    </p>
                    <p class="mb-4 font-light lg:text-xl">
                    Es ist nicht nur eine interaktive Erzählung: Die Spielerin oder der Spieler ist auf der Mission, die täglichen Herausforderungen von Menschen mit Schizophrenie zu verstehen, Wahrheit und Vorurteile zu entflechten, Stigmatisierungen zu erkennen und abzubauen und zu lernen, was Menschen mit Schizophrenie wirklich helfen kann und was nicht.
                    </p>   
                    <p class="mb-4 font-light lg:text-xl">
                    Das Spiel richtet sich an ein breites Publikum. Auf der Reise « Between two realities » erwarten die Spielerin oder den Spieler keine verstörenden Szenen. Um die vielschichtige und bereichernde Erfahrung zu machen, die den Spielerinnen und Spielern angeboten wird, wird indessen eine gewisse emotionale Reife vorausgesetzt.
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
            <h2 class="mb-8 text-3xl font-extrabold tracking-tight text-[#50bd21]">Mehr erfahren...</h2>

            <div class="col-span-2 space-y-8 md:grid md:grid-cols-3 lg:grid-cols-4 md:gap-12 md:space-y-0">
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/photo.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">Das Familienfoto</h3>
                    <p class="font-light text-gray-800">Schizophrenie kann eine genetische Komponente haben. Bekannte Fälle von Schizophrenie in der Familie, aber auch andere biopsychosoziale Faktoren wie Umwelt, biologische Einflüsse, Stress oder der Konsum von Substanzen können die Entstehung einer Schizophrenie begünstigen oder sich erschwerend auf ihren Verlauf auswirken.</p>
                </div>
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/wardrobe.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">Der Schrank</h3>
                    <p class="font-light text-gray-800">Les <a class="font-semibold text-[#50bd21]" href="#hallucinations">Halluzinationen</a> sind Sinnestäuschungen, die ohne Reizung eines Sinnesorgans von aussen zustande kommen und als reale Sinneseindrücke angenommen werden. Im Fall von Kevin sieht und hört er Horus. Bei Schizophrenie haben Halluzinationen oft negative Konsequenzen. Sie beinhalten dann Befehle, Drohungen oder negative Kommentare, die Angst, Misstrauen und emotionales Leid auslösen oder verstärken können.</p>
                </div>                
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/bed.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">Das Bett</h3>
                    <p class="font-light text-gray-800">Der Verlust von Motivation und Interesse und der soziale Rückzug gehören zu den <a class="font-semibold text-[#50bd21]" href="#symptomes-negatifs">negativen Symptomen</a> der Schizophrenie. Häufig treten auch Ein- und Durchschlafstörungen oder verstörende Träume auf, was die anderen Symptome verschlimmern kann.</p>
                </div>  
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/curtain.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">Das Fenster</h3>
                    <p class="font-light text-gray-800">Der Verlust von Motivation und Energie gehört zu den <a class="font-semibold text-[#50bd21]" href="#symptomes-negatifs">negativen Symptomen</a> der Schizophrenie. Die Aussenwelt kann Betroffenen weniger interessant und schwerer zugänglich vorkommen. Es kann sich auch ein Verfolgungsgefühl bis hin zum <a class="font-semibold text-[#50bd21]" href="#delires">Verfolgungswahn</a> einstellen, wie im Fall von Kevin, der glaubt, durch das Fenster beobachtet zu werden. Das macht ihn misstrauisch und weniger geneigt, das Haus zu verlassen und Menschen zu treffen, was wiederum seine soziale Isolation (ein weiteres negatives Symptom der Schizophrenie) verstärken kann.</p>
                </div> 
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/book.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">Das Buch</h3>
                    <p class="font-light text-gray-800">Die meisten Menschen mit Schizophrenie (aber nicht alle) haben <a class="font-semibold text-[#50bd21]" href="#troubles-cognitifs">kognitive Defizite</a> wie Schwierigkeiten, sich zu konzentrieren, sich Dinge zu merken, ihre Gedanken zu ordnen oder einem Gespräch oder der Handlung eines Films zu folgen. Solche Schwierigkeiten können durch gezielte Therapien reduziert werden.</p>
                </div> 
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/medicines.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">Die Medikamente</h3>
                    <p class="font-light text-gray-800">Medikamente wie Antipsychotika sind wichtig, um die Symptome der Schizophrenie zu reduzieren. Sie «heilen» die Krankheit nicht, helfen aber, den Zustand Betroffener zu stabilisieren und ihre Lebensqualität zu verbessern. Solche Medikamente können Nebenwirkungen haben, die sorgfältig überwacht werden müssen.</p>
                </div>
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/mirror.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">Der Spiegel</h3>
                    <p class="font-light text-gray-800">Im Unterschied zu Halluzinationen knüpfen Illusionen an reale Wahrnehmungen an; diese werden aber produktiv ausgestaltet bzw. verfälscht. Illusionen können auch das Selbstbild zum Gegenstand haben. Zum Beispiel, wenn jemand im Spiegel ein verzerrtes Bild von sich sieht. Solche verfälschten Wahrnehmungen können beängstigen, verwirren, ein Gefühl der Not hervorrufen sowie das Selbstwertgefühl und den Realitätsbezug negativ beeinflussen. Sie können bei Schizophrenie auftreten, sind aber kein Hauptkriterium für die Diagnose.</p>
                </div>  
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/watercloset.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">Das WC</h3>
                    <p class="font-light text-gray-800">Menschen mit Schizophrenie klagen oft über Ein- und Durchschlafstörungen. Solche Störungen können durch Ängste infolge nächtlicher Halluzinationen sowie durch eine reduzierte Tagesaktivität infolge Antriebsmangels begünstigt werden.</p>
                </div>
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/horus.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">Horus</h3>
                    <p class="font-light text-gray-800">Les <a class="font-semibold text-[#50bd21]" href="#hallucinations">Halluzinationen</a> entsprechen der vermeintlichen Wahrnehmung von etwas nicht Vorhandenem als sicher gegeben, ohne Reizung der Sinne (Gehörsinn, Sehsinn oder andere). Im Fall von Kevin sieht und hört er Horus. Oft werden diese Halluzinationen, insbesondere das Stimmenhören, als negative Einflüsse wahrgenommen, die durch manipulative oder bedrohliche Worte die Angst, das Misstrauen oder das emotionale Leiden der Betroffenen verstärken.</p>
                </div>
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/sink.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">Das Lavabo</h3>
                    <p class="font-light text-gray-800">Die <a class="font-semibold text-[#50bd21]" href="#symptomes-negatifs">negativen Symptome</a> der Schizophrenie können auch zu einer Vernachlässigung der Körperpflege führen. Sich um die Körperpflege zu kümmern, kann dazu beitragen, die Tagesstruktur zu stärken, das emotionale Wohlbefinden zu fördern und das Gefühl der Kontrolle über das eigene Leben zu verbessern.</p>
                </div>
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/postit.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">Das Post-it</h3>
                    <p class="font-light text-gray-800">Menschen mit Schizophrenie klagen oft über Gedächtnis- und Konzentrationsstörungen sowie Störungen der Organisations- und Planungsfähigkeit. Solche <a class="font-semibold text-[#50bd21]" href="#troubles-cognitifs">kognitiven Defizite</a> können die Planung und Durchführung von Aufgaben erschweren.</p>
                </div>
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/assiette.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">Der Teller auf dem Tisch</h3>
                    <p class="font-light text-gray-800">Krankhafte Willensschwäche, Unentschlossenheit und Antriebsverlust (Avolition und Abulie) sind <a class="font-semibold text-[#50bd21]" href="#symptomes-negatifs">negative Symptome</a> der Schizophrenie. Betroffene sind unfähig, zielgerichtete Handlungen zu beginnen und aufrechtzuerhalten oder Beschlüsse zu fassen und auszuführen, und haben die Tendenz, Dinge aufzuschieben (Prokrastination).</p>
                </div>
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/radio.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">Das Radio</h3>
                    <p class="font-light text-gray-800">Menschen mit Schizophrenie haben oft <a class="font-semibold text-[#50bd21]" href="#delires">Wahnvorstellungen</a>. Beim Beziehungswahn glauben Betroffene, Ereignisse in ihrer Umgebung seien speziell an sie gerichtet. Sie setzen diese also irrtümlicherweise zu sich selbst in Beziehung. Zum Beispiel glauben sie, Informationen aus dem Radio, Fernsehen oder Internet seien geheime Botschaften für sie. Eine weitere Art von Wahn ist der Beeinträchtigungswahn, der als Unterform des Beziehungswahns betrachtet werden kann. Hier glauben Betroffene, dass andere Menschen oder äussere Kräfte ihnen schaden wollen.</p>
                </div>   
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/phone.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">Das Telefon</h3>
                    <p class="font-light text-gray-800"><a class="font-semibold text-[#50bd21]" href="#delires">Verfolgungswahn</a> ist ein psychotisches Symptom, das bei bestimmten Formen der Schizophrenie, insbesondere der paranoiden Schizophrenie, häufig auftritt. Betroffene sind ohne vernünftigen Grund überzeugt, bedroht, ausspioniert oder verfolgt zu werden oder Opfer einer Verschwörung zu sein.</p>
                </div>
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/distributor.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">Der Verkaufsautomat</h3>
                    <p class="font-light text-gray-800"><a class="font-semibold text-[#50bd21]" href="#delires">Vergiftungswahn</a> ist eine Form des Verfolgungswahns. Betroffene glauben ohne objektive Beweise, jemand wolle sie vergiften oder durch Vergiftung der Nahrung, der Getränke oder der Umgebung ihrer Gesundheit schaden. Dies kann bei Betroffenen zu Isolation, sozialem Rückzug und unzureichender Nahrungs- und Flüssigkeitsaufnahme führen, wenn sie vermeintlich vergiftete Nahrungsmittel konsequent meiden.</p>
                </div>
                <div>
                    <div class="p-5 bg-gray-100 rounded-full mb-5 w-40 mx-auto"><img src="../../images/thumbnails/bus.png"></div>
                    <h3 class="mb-2 text-2xl font-bold text-[#50bd21]">Der Bus</h3>
                    <p class="font-light text-gray-800">Menschen mit Schizophrenie können sich durch die Anwesenheit vieler Menschen gestresst fühlen, was die Symptome der Schizophrenie verstärken kann. So kann Stress psychotische Symptome wie Wahn oder Halluzinationen erneut auslösen oder verstärken. Kognitive Schwierigkeiten oder ein bereits bestehender sozialer Rückzug können die Anfälligkeit für Stress erhöhen.</p>
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
                    <h2 class="mb-8 text-3xl font-extrabold tracking-tight text-center lg:mb-8 lg:text-3xl text-[#50bd21]">MSD Manual für Patienten – Psychische Gesundheitsstörungen – Schizophrenie</h2>
                    <div class="">
                        <div class="mb-8">
                            Die Symptome der Schizophrenie werden generell in vier Hauptgruppen eingeordnet:
                        </div>
                       
                        <div class="mb-8">
                            Erstens, <span class="font-semibold text-gray-950">positive Symptome</span> d. h. die Verzerrung normaler Funktionen oder ein Überschuss im Vergleich zu normalen Funktionen:

                            <ul class="ml-5 mt-3">
                                <li><span class="font-semibold text-[#50bd21]">Wahnvorstellungen:</span> hartnäckige Fehlüberzeugungen, die oftmals unplausibel sind, wie Verfolgungs- oder Grössenwahn. Die Überzeugung bleibt bestehen, obwohl ihr eindeutige und vernünftige Beweise entgegenstehen.</li>
                                <li><span class="font-semibold text-[#50bd21]">Halluzinationen:</span> Täuschungen des Gehörsinns, Sehsinns, Tastsinns, der inneren Körperwahrnehmung, des Geruchssinns oder des Geschmackssinns ohne entsprechenden Aussenreiz. Die häufigsten Halluzinationen betreffen das Hören, oftmals von Stimmen, die zweithäufigsten das Sehen.</li>
                                <li><span class="font-semibold text-[#50bd21]">Desorganisation</span> wird manchmal zu den positiven Symptomen gezählt, kann aber auch als eigenständige Symptomgruppe betrachtet werden.</li>
                            </ul>
                        </div> 

                        <div class="mb-8">
                            Zweitens, Symptome der <span class="font-semibold text-gray-950">Desorganisation</span>:

                            <ul class="ml-5 mt-3">
                                <li><span class="font-semibold text-[#50bd21]">Denkstörung:</span> unorganisierte Denkweise, die sich durch eine chaotische oder zusammenhanglose Rede bemerkbar macht.</li>
                                <li><span class="font-semibold text-[#50bd21]">Desorganisiertes Verhalten:</span> unpassende, unvorhersehbare, planlose Handlungen.</li>
                            </ul>
                        </div>
                        <div class="mb-8">
                            Drittens, <span class="font-semibold text-gray-950">negative Symptome</span> d. h. eine Abnahme oder ein Verlust normaler emotionaler und sozialer Funktionen:

                            <ul class="ml-5 mt-3">
                                <li><span class="font-semibold text-[#50bd21]">Abgestumpfter Affekt:</span> stark verminderter oder fehlender Ausdruck von Gefühlen.</li>
                                <li><span class="font-semibold text-[#50bd21]">Spracharmut:</span> Mangel an sprachlicher Ausdrucksfähigkeit, einsilbige oder minimalistische Antworten.</li>
                                <li><span class="font-semibold text-[#50bd21]">Freudlosigkeit:</span> Verlust der Freude und des Interesses, auch an Tätigkeiten, die früher Freude bereitet haben.</li>
                                <li><span class="font-semibold text-[#50bd21]">Sozialer Rückzug:</span> Schwierigkeiten, soziale Interaktionen und Beziehungen zu entwickeln oder aufrechtzuerhalten.</li>
                                <li><span class="font-semibold text-[#50bd21]">Antriebsmangel:</span> verminderte oder fehlende Motivation, Aufgaben anzupacken und zu Ende zu bringen; damit verwandt sind die Unfähigkeit, zielgerichtete Handlungen zu beginnen und aufrechtzuerhalten; die Willenlosigkeit bzw. die Unfähigkeit, Entscheidungen zu treffen; und die Unfähigkeit, geplante Handlungen umzusetzen.</li>
                            </ul>
                        </div>
                        <div class="mb-8">
                            Viertens, <span class="font-semibold text-gray-950">kognitive Defizite</span>:

                            <ul class="ml-5 mt-3">
                                <li><span class="font-semibold text-[#50bd21]">Konzentrationsstörungen:</span> Schwierigkeiten, die Aufmerksamkeit auf eine Aufgabe zu richten und aufrechtzuerhalten.</li>
                                <li><span class="font-semibold text-[#50bd21]">Gedächtnisstörungen:</span> Schwierigkeiten, neue Informationen im Gedächtnis zu speichern und Gedächtnisinhalte abzurufen.</li>
                                <li><span class="font-semibold text-[#50bd21]">Beeinträchtigung der Exekutivfunktionen:</span> Schwierigkeiten beim Planen, Problemlösen und Organisieren von Aufgaben.</li>
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
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-[#50bd21]">Unsere Geschichte</h2>
                    <p class="mb-4 font-light lg:text-xl">
                    «Between two realities» entstand durch eine kreative Allianz zwischen dem Freiburger Komitee der Tage der Schizophrenie und dem Unternehmen White Ermine Game Studio, die durch die Verbindung von Leidenschaft und Fachwissen dieses immersive Abenteuer verwirklicht haben.
                    </p>
                    <p class="mb-8 font-light lg:text-xl">
                        <b>Die Tage der Schizophrenie</b>
                    </p>                    
                </div>
            </div>
        </div>
    </section>
    <!-- End block -->



    <?php include('../../components/footer.php'); ?>

</body>
</html>