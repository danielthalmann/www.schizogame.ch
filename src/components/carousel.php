

<div id="carousel" class="w-full h-full cursor-grab" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-full overflow-hidden">
        <?php if ($lang == 'fr') : ?>

         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <?= component('card_game',
            [
                'toptext' => 'Édition 2026',
                'picture' => url('images/escape-game_800x800.png'),
                'title' => 'Escape Box',
                'sentences' => [
                    'En équipe, relevez des défis, résolvez des énigmes et explorez les notions d’entraide, de rétablissement et de regard sur l’autre.',
                    'Un jeu immersif pour parler de santé mentale autrement : avec curiosité, humour et humanité.',
                ],
                'link_url' => url('fr/escape-box/'),
                'link_text' => 'Plus d\'informations'
            ]) 
            ?>
        </div>          
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <?= component('card_game',
            [
                'picture' => url('images/btr_800x800.png'),
                'title' => 'Between two realities',
                'sentences' => [
                    'Un jeu vidéo captivant qui vous plonge au cœur de la schizophrénie.' , 
                    'Incarne Kevin, un jeune qui souffre de troubles schizophréniques et accompagne-le dans une mini aventure interactive.',
                ],
                'link_url' => url('fr/between-two-realities/'),
                'link_text' => 'Plus d\'informations'
            ]) 
            ?>
        </div>
        <!-- Item 3 -->
        <div class="h-full hidden duration-700 ease-in-out" data-carousel-item>
            <?= component('card_game',
            [
                'picture' => url('images/psyquiz_800x800.png'),
                'title' => 'PsyQuiz',
                'sentences' => [
                    'Info ou intox : sauras-tu distinguer le vrai du faux sur les troubles psychiques ?' , 
                    'Découvrez les dernières améliorations',
                    '<span class="font-bold">Une nouvelle langue<br>Des questions actualisées</span>'
                ],
                'link_url' => url('fr/psyquiz/'),
                'link_text' => 'Plus d\'informations'
            ]) ?>

        </div>

        <?php elseif( $lang == 'de') : ?>

        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <?= component('card_game',
            [
                'toptext' => 'Ausgabe 2026',
                'picture' => url('images/escape-game_800x800.png'),
                'title' => 'Escape Box',
                'sentences' => [
                    'Stellen Sie sich in Teams Herausforderungen, lösen Sie Rätsel und erkunden Sie die Konzepte von gegenseitiger Unterstützung, Genesung und Verständnis für andere.',
                    'Ein interaktives Spiel, das auf neue Weise über psychische Gesundheit spricht: mit Neugier, Humor und Menschlichkeit.',
                ],
                'link_url' => url('de/escape-box/'),
                'link_text' => 'Weitere Informationen'
            ]) 
            ?>
        </div>
        <!-- Item 2 -->
        <div class="h-full hidden duration-700 ease-in-out" data-carousel-item>
            <?= component('card_game',
            [
                'picture' => url('images/btr_800x800.png'),
                'title' => 'Between two realities',
                'sentences' => [
                    'Ein fesselndes Videospiel, das Sie in das Herz der Schizophrenie eintauchen lässt.' , 
                    'Kevin ist ein junger Mensch mit Schizophrenie. In diesem interaktiven Spiel können Sie in seine Haut schlüpfen und seine Welt erleben.',
                ],
                'link_url' => url( 'de/between-two-realities/'),
                'link_text' => 'Weitere Informationen'
            ]) ?> 
        
        </div>
        <!-- Item 3 -->
        <div class="h-full hidden duration-700 ease-in-out" data-carousel-item>
            <?= component('card_game',
            [
                'picture' => url('images/psyquiz_800x800.png'),
                'title' => 'PsyQuiz',
                'sentences' => [
                    'Info oder Intox: Testen Sie Ihre Kenntnisse über psychische Störungen.',
                    'Entdecken Sie die neuesten Verbesserungen',
                    '<span class="font-bold">Eine neue Sprache<br>Aktualisierte Fragen</span>'
                ],
                'link_url' => url('de/psyquiz/'),
                'link_text' => 'Weitere Informationen'
            ]) ?>
        </div>

        <?php endif; ?>

    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-6 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full w-5 h-5 cursor-pointer" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full w-5 h-5 cursor-pointer" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full w-5 h-5 cursor-pointer" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full w-10 h-10 bg-white/10  group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full w-10 h-10 bg-white/10 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
