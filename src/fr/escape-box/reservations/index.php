<!DOCTYPE html>
<?php include('../../../Bootstrap.php'); ?>
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
                    
                    <h2 class=" size-4 font-bold">Récupérer l'Escape-box</h2>
                    
                    <div>

                        Dates : du samedi 14 mars au samedi 21 mars 2026
                        Lieu : dans les combles du Restaurant de l’Aigle-noir📍 Rue des Alpes 10, 1700 Fribourg    

                    </div>

                    
                    
                    <h2>Infos pratiques</h2>
                    
                    
                    <div>
                        Groupe : 3 à 5 personnes maximum (optimal : 4 personnes)
                        Horaires : du lundi au samedi, de 09:15 à 19:45 (dernier départ)
                        Durée maximale du jeu : 60 minutes
                        Inscription : préalable obligatoire
                        Tarif : gratuit et ouvert à tous-tes dès 16 ans
                        Confirmation : dès votre inscription, vous recevez un mail de confirmation
                    
                    </div>


                    <h2>Annulation</h2>
                    
                    <div>
                    
                        En cas de contretemps, merci d’annoncer votre annulation dans les meilleurs délais à l’adresse :
                        contact@schizogame.ch
                    </div>
            </div>

            <div class="bg-white rounded-xl p-5 col-span-2">

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


                <?= component('inputs.text',[
                    'name' => 'email',
                    'label' => 'Adresse e-mail',
                ] ) ?>

                <?= component('inputs.text',[
                    'name' => 'phone',
                    'label' => 'Numéro de téléphone',
                ] ) ?>

                <?= component('inputs.text',[
                    'name' => 'event',
                    'label' => 'Nom de la manifestation',
                ] ) ?>

                <?= component('inputs.textarea',[
                    'name' => 'description',
                    'label' => 'Description de la manifestation',
                ] ) ?>

                <?= component('inputs.checkbox',[
                    'name' => 'accept',
                    'label' => 'J\'accepte les conditions d\'emprunt de l\'Escape-box',
                ] ) ?>

            </div>

        </div>
      </section>
    <!-- End block -->




    <?= component('footer', ['lang' => 'fr']) ?>

</body>
</html>