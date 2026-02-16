<?php include('../../../Bootstrap.php'); (new \ReservationController())->handle(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Escape Box</title>
    <link href="<?= url('theme.css') ?>" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="Résous des énigmes et trouve des indices pour aider Federico, un jeune confronté à des troubles schizophréniques, à se rétablir.">
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
        'lang' => 'fr', 
        'transparent' => false,
        'path' => 'escape-box/reservations/']) ?>


    <!-- Start block -->
    <section class="bg-escapebox pt-16">
        <div class="max-w-screen-xl py-4 px-4 mx-auto lg:grid lg:grid-cols-3 gap-4 lg:py-8 lg:px-6">

            <div class="bg-white rounded-xl p-5 mb-5 lg:mb-0 ">
                    
                    <h2 class="mb-3 font-bold">Où chercher l'Escape-box</h2>
                    
                    <div class="mb-3">

                       <span>Lieu :</span> dans les combles du Restaurant de l’Aigle-noir📍 Rue des Alpes 10, 1700 Fribourg    

                    </div>   
                    
                    <h2 class="mb-3 font-bold">A qui s'adresse l'Escape Box</h2>
                    
                    <div class="mb-3">
                    
                        <p><span class="font-bold">Groupe :</span> 3 à 5 personnes maximum (optimal : 4 personnes)</p>
                        <p><span class="font-bold">Horaires :</span> du lundi au samedi, de 09:15 à 19:45 (dernier départ)</p>
                        <p><span class="font-bold">Durée maximale du jeu :</span> 60 minutes</p>
                        <p><span class="font-bold">Inscription :</span> préalable obligatoire</p>
                        <p><span class="font-bold">Tarif :</span> gratuit et ouvert à tous-tes dès 16 ans</p>
                        <p><span class="font-bold">Confirmation :</span> dès votre inscription, vous recevez un mail de confirmation</p>
                    
                    </div>


                    <h2 class="mb-3 font-bold">Condition d'emprunt</h2>
                    
                    <div class="mb-3">

                    
                        En cas de contretemps, merci d’annoncer votre annulation dans les meilleurs délais à l’adresse :
                        contact@schizogame.ch

                    </div>

                    <h2 class="mb-3 font-bold">Condition d'utilisation</h2>
                    
                    <div class="mb-3">

                    
                        En cas de contretemps, merci d’annoncer votre annulation dans les meilleurs délais à l’adresse :
                        contact@schizogame.ch

                    </div>

            </div>

            <div class="bg-white rounded-xl p-5 col-span-2">

            <form action="" method="post" >

                <h2 class="mb-3 font-bold">Formulaire de réservation de l'Escape Box</h2>

                <div class="border-1 border-zinc-500 rounded-sm p-3 mb-3">

                    <p class="mb-5">
                        Indiquez les informations de l'entreprise ou l'organisation qui souhaite emprunter l'Escape Box.<br>
                    </p>

                    <div>
                        <?= component('inputs.text',[
                            'name' => 'organisation',
                            'label' => 'Entreprise ou organisation',
                            'mandatory' => true,
                        ] ) ?>
                        
                    </div>

                    <div class="md:grid md:grid-cols-2 md:gap-3">
                        <div>
                            <?= component('inputs.text',[
                                'name' => 'firstname',
                                'label' => 'Nom',
                                'mandatory' => true,
                            ] ) ?>
                            
                        </div>
                        <div>
                            <?= component('inputs.text',[
                                'name' => 'lastname',
                                'label' => 'Prénom',
                                'mandatory' => true,
                            ] ) ?>

                        </div>
                    </div>

                    <div>
                        <?= component('inputs.text',[
                            'name' => 'street',
                            'label' => 'Rue et numéro de rue',
                            'mandatory' => true,
                        ] ) ?>
                        
                    </div>

                    <div class="md:grid md:grid-cols-4 md:gap-3">
                        <div>
                            <?= component('inputs.text',[
                                'name' => 'zipcode',
                                'label' => 'NPA',
                                'mandatory' => true,
                            ] ) ?>
                            
                        </div>
                        <div class="col-span-3">
                            <?= component('inputs.text',[
                                'name' => 'locality',
                                'label' => 'Localité',
                                'mandatory' => true,
                            ] ) ?>

                        </div>
                    </div>

                    <?= component('inputs.text',[
                        'name' => 'email',
                        'label' => 'Adresse e-mail',
                        'mandatory' => true,
                    ] ) ?>

                    <?= component('inputs.text',[
                        'name' => 'phone',
                        'label' => 'Numéro de téléphone',
                        'mandatory' => true,
                    ] ) ?>

                </div>

                <div class="border-1 border-zinc-500 rounded-sm p-3 mb-3">

                    <p class="mb-5">
                        Indiquez les informations de la manifestation ou de l'événement où sera utilisé l'Escape Box.<br>
                    </p>

                    <?= component('inputs.text',[
                        'name' => 'event',
                        'label' => 'Nom de la manifestation ou de l\'événement',
                        'mandatory' => true,

                    ] ) ?>

                    <?= component('inputs.textarea',[
                        'name' => 'description',
                        'label' => 'Description de la manifestation ou de l\'événement',
                        'mandatory' => true,

                    ] ) ?>

                </div>

                <div class="border-1 border-zinc-500 rounded-sm p-3 mb-3">

                    <p class="mb-5">
                        Veuillez indiquer la période de location de l'Escape Box.<br>
                        L'Escape Box ne peut pas être réservé avant le le <span class="font-bold"><?= (new DateTime())->add(new DateInterval('P1W'))->format('d.m.Y') ?></span>.
                    </p>

                    <div class="md:grid md:grid-cols-2 md:gap-3">
                        <div>
                            <?= component('inputs.date',[
                                'name' => 'from',
                                'label' => 'À partir du',
                                'mandatory' => true,
                            ] ) ?>
                            
                        </div>
                        <div>
                            <?= component('inputs.date',[
                                'name' => 'to',
                                'label' => 'Jusqu\'au',
                                'mandatory' => true,
                            ] ) ?>

                        </div>
                    </div>

                </div>
            

                <?= component('inputs.checkbox',[
                    'name' => 'accept',
                    'label' => 'J\'accepte les conditions d\'emprunt de l\'Escape-box',
                    'mandatory' => true,

                ] ) ?>

                <hr>

                <div class="my-5 text-center">
                    <?= component('inputs.button',[
                        'label' => 'Envoyer la demande',
                    ] ) ?>
                </div>
            
            </form>

            </div>

        </div>
      </section>
    <!-- End block -->




    <?= component('footer', ['lang' => 'fr']) ?>

</body>
</html>