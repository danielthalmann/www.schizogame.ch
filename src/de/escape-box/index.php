<!DOCTYPE html>
<?php include('../../Bootstrap.php'); ?>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Escape Box</title>
    <link href="<?= url('theme.css') ?>" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="Löse Rätsel und finde Hinweise, um Federico, einen jungen Menschen mit schizophrenen Störungen, auf seinem Weg zur Genesung zu unterstützen.">
    <meta name="author" content="Daniel Thalmann (white-ermine.ch)">
    <link rel="icon" href="<?= url('images/logo.svg') ?>" sizes="32x32" />

    <link rel="alternate" href="<?= url('fr/escape-box/') ?>" hreflang="fr" />
    <link rel="alternate" href="<?= url('de/escape-box/') ?>" hreflang="de" />
    <?php include(base_path('components/header_googletag.php')); ?>
    <?php include(base_path('components/header.php')); ?>
</head>
<body>
    <?php include(base_path('components/body_googletag.php')); ?>

    <?= component('menu_root', ['lang' => 'de', 'path' => 'escape-box/']) ?>

    <?= component('block_title',
    [
        'title' => 'Escape Box',
        'description' => 'Löse Rätsel und finde Hinweise, um Federico, einen jungen Menschen mit schizophrenen Störungen, auf seinem Weg zur Genesung zu unterstützen.' ,
        'image' => url('images/escapebox/escape-box.png'),
    ]) ?>

    <?= component('block_sentence',
    [
        'css' => 'bg-white',
        'illustration' => 'bg-locked',
        'title' => 'Die Escape Box',
        'sentences' => [
            'In einer kompakten Box voller Rätsel, Zahlenschlösser, versteckter Hinweise und manipulierbarer Objekte erkundest du verschiedene Bereiche, um die Aufgaben in 60 Minuten zu lösen und begleitest Federico Schritt für Schritt auf dem Weg zur Genesung!', 
            'Ob erfahrener Spieler oder neugierige Person, dieses Abenteuer lädt dich ein, Vorurteile zu überwinden und einen intensiven, zugleich spielerischen und zutiefst menschlichen Moment zu erleben. Eines ist sicher: Du wirst psychische Gesundheit mit anderen Augen sehen!',
        ]
    ]) ?>    

    <?= component('block_image',
    [
        'title' => 'Komm und teste die Escape Box und andere einzigartige Spiele im Herzen von Freiburg!',
        'sentences' => [
            'Vom 14. bis 21. März 2026 öffnet das Freiburger Komitee der Schizophrenie-Tage (JdS) die Dachböden des Restaurants L\'Aigle Noir in der Stadt Freiburg für eine Woche, die Spielen und psychischer Gesundheit gewidmet ist. Melde dich jetzt an, um die Escape Box zu spielen. Du kannst auch das Psyquiz und das Videospiel Between Two Realities erneut testen, zwei Highlights früherer JdS-Ausgaben.',
            'Neben den immersiven Spielen gibt es einen Austauschbereich mit Fachpersonen aus der psychischen Gesundheitsversorgung, die deine Fragen beantworten und den Dialog fördern. Eine einzigartige Gelegenheit, zu entdecken, zu spielen und sich in einer freundlichen, unterstützenden Atmosphäre auszutauschen!',
        ],
        'link_text' => 'Reservierungen',
        'link_url' => 'https://reservations.schizogame.ch/',
        'image' => url('images/affiche-jds2026.png'),
        'image_url' => url('medias/JDS2026_Affiches_A3.pdf'),
    ]) ?>    

    <?= component('block_sentence',
    [
        'css' => 'bg-neutral-200',
        'title' => 'Ludesco-Veranstaltung',
        'sentences' => [
            'Escape Box bei Ludesco: 28.–29. März 2026' , 
            'Die Escape Box ist am 28. und 29. März beim Festival Ludesco (www.ludesco.ch) in La Chaux-de-Fonds vertreten! Komm vorbei und erlebe diese immersive Erfahrung im Herzen des größten Spiel-Festivals der Romandie.',
            'Anmeldung erforderlich über die Website von Ludesco – Verpasse nicht diese einzigartige Gelegenheit zu spielen, dich auszutauschen und den Blick auf psychische Gesundheit in der festlichen Festivalstimmung zu verändern!',
        ],
        'link_text' => 'Ludesco',
        'link_url' => 'https://ludesco.ch/',
    ]) ?>

    <?= component('block_sentence',
    [
        'css' => 'bg-escapebox-light text-white',
        'title' => 'Nach der Veranstaltung',
        'sentences' => [
            'Escape Box zur Miete: Stelle psychische Gesundheit in den Mittelpunkt deiner Veranstaltung!' , 
            'Nach den JdS und Ludesco kann die Escape Box für Schulen, Organisationen, Vereine und Veranstaltungen gemietet werden, die für psychische Gesundheit sensibilisieren möchten (Tags der offenen Tür, Festivals, Workshops usw.).',
        ],
        'link_text' => 'Informtionen und Escape Box-Vermietung',
        'link_url' => url('de/escape-box/reservations'),        
    ]) ?>

    <?= component('block_sentence',
    [
        'css' => 'bg-white',
        'illustration' => 'bg-tree',
        'title' => 'Mehr erfahren',
        'sentences' => [
            'Vom Escape Game zur Escape Box: Eine geniale Neuinterpretation!' , 
            'Ein innovatives Projekt, das psychische Gesundheit durch Spiel entstigmatisieren soll!',
            'Die Idee zur Escape Box entstand nach dem Erfolg des Escape Games, das bei den JdS 2024 im L\'Aigle Noir präsentiert wurde. Viele Partner baten das Freiburger Komitee, das Escape Game bei Veranstaltungen erneut spielen zu können, doch das Format ließ sich nicht einfach übertragen. Daher wurde das Escape Game neu erfunden – als kompakte Escape Box: mobiler und reisefähig!',
            'Ein Auftrag wurde einer Person mit eigener psychischer Beeinträchtigung anvertraut, die sich für Escape Games begeistert und in der Spielekonzeption erfahren ist. Ihre Arbeit wurde von verschiedenen talentierten Partnern unterstützt: Fondation St-Louis (Schreiner des Chantier Écologique), White Ermine Studio Game (Elektronik, Informatik, Website), Frilance (Anmeldeformular JdS), Polygravia (Visuelle Gestaltung und Druck), Brick Occasion (Bulle): immersive Räume.',
            'Die Konzeption und Umsetzung der Escape Box dauerten etwa ein Jahr.',
            'Ergebnis: eine immersive Box, die mit Menschlichkeit und Effektivität für das Thema psychische Gesundheit sensibilisiert.',
        ]
    ]) ?>

    <!-- Start block -->
    <section class="bg-escapebox">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-24 lg:px-6">

        </div>
      </section>
    <!-- End block -->


    <?= component('partners_escapebox', ['lang' => 'de']) ?>

    <?= component('footer', ['lang' => 'de']) ?>

</body>
</html>