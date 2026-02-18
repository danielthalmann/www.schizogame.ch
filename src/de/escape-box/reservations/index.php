<?php include('../../../Bootstrap.php'); (new \ReservationController())->handle(); ?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Escape Box - Reservierungen</title>
    <link href="<?= url('theme.css') ?>" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="Löse Rätsel und finde Hinweise, um Federico, einen Jugendlichen mit schizophrenen Störungen, bei seiner Genesung zu unterstützen.">
    <meta name="author" content="Daniel Thalmann (white-ermine.ch)">
    <link rel="icon" href="<?= url('images/logo.svg') ?>" sizes="32x32" />

    <link rel="alternate" href="<?= url('fr/escape-box/reservations/') ?>" hreflang="fr" />
    <link rel="alternate" href="<?= url('de/escape-box/reservations/') ?>" hreflang="de" />
    <?php include(base_path('components/header_googletag.php')); ?>
    <?php include(base_path('components/header.php')); ?>
</head>
<body>
    <?php include(base_path('components/body_googletag.php')); ?>

    <?= component('menu_root', [
        'lang' => 'de', 
        'transparent' => false,
        'path' => 'escape-box/reservations/']) ?>


    <!-- Start block -->
    <section class="bg-escapebox pt-16">
        <div class="max-w-screen-xl py-4 px-4 mx-auto lg:grid lg:grid-cols-3 gap-4 lg:py-8 lg:px-6">

            <div class="bg-white rounded-xl p-5 mb-5 lg:mb-0 ">
                    
                    <h2 class="mb-3 font-bold">Wo die Escape-Box zu finden ist</h2>
                    
                    <div class="mb-3">

                       <span>Ort :</span> im Dachgeschoss des Restaurants L'Aigle-Noir📍 Rue des Alpes 10, 1700 Fribourg    

                    </div>   
                    
                    <h2 class="mb-3 font-bold">Für wen ist die Escape-Box geeignet</h2>
                    
                    <div class="mb-3">
                    
                        <p><span class="font-bold">Gruppe :</span> 3 bis 5 Personen maximal (optimal: 4 Personen)</p>
                        <p><span class="font-bold">Öffnungszeiten :</span> Montag bis Samstag, 09:15–19:45 (letzter Start)</p>
                        <p><span class="font-bold">Maximale Spieldauer :</span> 60 Minuten</p>
                        <p><span class="font-bold">Anmeldung :</span> Voranmeldung erforderlich</p>
                        <p><span class="font-bold">Preis :</span> kostenlos und offen für alle ab 16 Jahren</p>
                        <p><span class="font-bold">Bestätigung :</span> Nach Ihrer Anmeldung erhalten Sie eine Bestätigungs-E-Mail</p>
                    
                    </div>


                    <h2 class="mb-3 font-bold">Leihbedingungen</h2>
                    
                    <div class="mb-3">

                    
                        Bei Verhinderung bitten wir Sie, Ihre Absage so früh wie möglich an folgende Adresse zu senden:
                        contact@schizogame.ch

                    </div>

                    <h2 class="mb-3 font-bold">Nutzungsbedingungen</h2>
                    
                    <div class="mb-3">

                    
                        Bei Verhinderung bitten wir Sie, Ihre Absage so früh wie möglich an folgende Adresse zu senden:
                        contact@schizogame.ch

                    </div>

            </div>

            <div class="bg-white rounded-xl p-5 col-span-2">

            <form action="" method="post" >

                <h2 class="mb-3 font-bold">Reservierungsformular für die Escape-Box</h2>

                <div class="border-1 border-zinc-500 rounded-sm p-3 mb-3">

                    <?= component('errors') ?>

                    <?php if(MessageBag::get('sended', false)): ?>
                        
                        <div class="border-1  bg-green-400 p-3 rounded-sm my-4">

                            Die im untenstehenden Formular eingegebenen Informationen wurden erfolgreich gesendet. Sie werden so bald wie möglich telefonisch oder per E-Mail kontaktiert.

                        </div>

                    <?php endif; ?>

                    <p class="mb-5">
                        Geben Sie die Informationen des Unternehmens oder der Organisation an, die die Escape-Box ausleihen möchte.<br>
                    </p>

                    <div>
                        <?= component('inputs.text',[
                            'name' => 'organisation',
                            'label' => 'Firma oder Organisation',
                            'mandatory' => true,
                        ] ) ?>
                        
                    </div>

                    <div class="md:grid md:grid-cols-2 md:gap-3">
                        <div>
                            <?= component('inputs.text',[
                                'name' => 'lastname',
                                'label' => 'Nachname',
                                'mandatory' => true,
                            ] ) ?>
                            
                        </div>
                        <div>
                            <?= component('inputs.text',[
                                'name' => 'firstname',
                                'label' => 'Vorname',
                                'mandatory' => true,
                            ] ) ?>

                        </div>
                    </div>

                    <div>
                        <?= component('inputs.text',[
                            'name' => 'street',
                            'label' => 'Straße und Hausnummer',
                            'mandatory' => true,
                        ] ) ?>
                        
                    </div>

                    <div class="md:grid md:grid-cols-4 md:gap-3">
                        <div>
                            <?= component('inputs.text',[
                                'name' => 'zipcode',
                                'label' => 'PLZ',
                                'mandatory' => true,
                            ] ) ?>
                            
                        </div>
                        <div class="col-span-3">
                            <?= component('inputs.text',[
                                'name' => 'locality',
                                'label' => 'Ort',
                                'mandatory' => true,
                            ] ) ?>

                        </div>
                    </div>

                    <?= component('inputs.text',[
                        'name' => 'email',
                        'label' => 'E-Mail-Adresse',
                        'mandatory' => true,
                    ] ) ?>

                    <?= component('inputs.text',[
                        'name' => 'phone',
                        'label' => 'Telefonnummer',
                        'mandatory' => true,
                    ] ) ?>

                </div>

                <div class="border-1 border-zinc-500 rounded-sm p-3 mb-3">

                    <p class="mb-5">
                        Geben Sie die Informationen zur Veranstaltung an, bei der die Escape-Box eingesetzt wird.<br>
                    </p>

                    <?= component('inputs.text',[
                        'name' => 'event',
                        'label' => 'Name der Veranstaltung',
                        'mandatory' => true,

                    ] ) ?>

                    <?= component('inputs.textarea',[
                        'name' => 'description',
                        'label' => 'Beschreibung der Veranstaltung',
                        'mandatory' => true,

                    ] ) ?>

                </div>

                <div class="border-1 border-zinc-500 rounded-sm p-3 mb-3">

                    <p class="mb-5">
                        Bitte geben Sie den Mietzeitraum der Escape-Box an.<br>
                        Die Escape-Box kann nicht vor dem <span class="font-bold"><?= (new DateTime())->add(new DateInterval('P1W'))->format('d.m.Y') ?></span> reserviert werden.
                    </p>

                    <div class="md:grid md:grid-cols-2 md:gap-3">
                        <div>
                            <?= component('inputs.date',[
                                'name' => 'from',
                                'label' => 'Ab dem',
                                'mandatory' => true,
                            ] ) ?>
                            
                        </div>
                        <div>
                            <?= component('inputs.date',[
                                'name' => 'to',
                                'label' => 'Bis zum',
                                'mandatory' => true,
                            ] ) ?>

                        </div>
                    </div>

                </div>
            

                <?= component('inputs.checkbox',[
                    'name' => 'accept',
                    'label' => 'Ich akzeptiere die Leihbedingungen der Escape-Box',
                    'mandatory' => true,

                ] ) ?>

                <hr>

                <?php if(!MessageBag::get('sended', false)): ?>

                <div class="my-5 text-center">
                    <?= component('inputs.button',[
                        'label' => 'Anfrage senden',
                    ] ) ?>
                </div>

                <?php endif; ?>

                <?= component('inputs.nofilled',[
                    'name' => 'street-nf',
                ] ) ?>

                <?= component('inputs.hidden',[
                    'name' => 'lang',
                    'value' => 'de'
                ] ) ?>                
            
            </form>

            </div>

        </div>
      </section>
    <!-- End block -->




    <?= component('footer', ['lang' => 'fr']) ?>

</body>
</html>