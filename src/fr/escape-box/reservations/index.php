<?php include('../../../Bootstrap.php'); (new \ReservationController())->handle(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Escape Box - réservations</title>
    <link href="<?= url('theme.css?v' . SITE_VERSION) ?>" rel="stylesheet">
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
                    
                    <h2 class="mb-3 font-bold">A qui s'adresse l'Escape Box</h2>
                    
                    <div class="mb-3">

                       L'Escape box est une boîte compacte remplie de casse-têtes, cadenas à codes, indices cachés et objets à manipuler. <br>
                       Son usage est conçu exclusivement pour des personnes âgées de 16 ans et plus.<br>
                       Elle est destinée aux écoles, organismes, associations souhaitant sensibiliser à la santé mentale lors de portes ouvertes, festivals, ateliers ou manifestations. <br>
                       Elle se joue entre 3 à 5 personnes (optimal 4 personnes) et la durée maximale du jeu est de 60 minutes.

                    </div>   
                    
                    <h2 class="mb-3 font-bold">Conditions de location</h2>
                    
                    <div class="mb-3">
                    
                        Une réservation préalable par le biais du formulaire de réservation est nécessaire. <br>
                        Un contrat de bail devra être signé et un état des lieux sera fait avant le retrait et à la restitution de l'Escape Box. <br>
                        Un <span class="font-semibold">montant de CHF 100.-</span> est demandée pour la durée de la location (montant destiné à l'entretien de l'Escape Box).<br>
                        Vous assumez et organisez entièrement le transport de l'Escape Box.<br>
                        <div class="mt-3"><a class="text-escapebox font-semibold" href="#">Contrat de location</a></div>

                   
                    </div>


                    <h2 class="mb-3 font-bold">L'Escape Box</h2>
                    
                    <div class="mb-3">

                        Le retrait et la restitution se font auprès de <span class="font-semibold">la Fondation Horizon Sud, Route de la Rotonde 25, 1633 Marsens</span>.<br>
                        L'Escape Box pèse environ 50 kg.<br>
                        Elle mesure un mètre de long, sur 50 centimètres de large et 50 centimètres de haut.<br>
                        Il faut prévoir deux personnes minimum et un véhicule adapté pour la déplacer.<br>

                    </div>

                    <div class="mt-10 mb-3">Toute demande de renseignements peut être faite via: <span class="font-semibold">secretariat@horizonsud.ch</span> (mardi-mercredi et jeudi matin)</div>


            </div>

            <div class="bg-white rounded-xl p-5 col-span-2">

            <form action="" method="post" >

                <h2 class="mb-3 font-bold">Formulaire de réservation de l'Escape Box</h2>

                <div class="border-1 border-zinc-500 rounded-sm p-3 mb-3">

                    <?= component('errors') ?>

                    <?php if(MessageBag::get('sended', false)): ?>
                        
                        <div class="border-1  bg-green-400 p-3 rounded-sm my-4">

                            Les informations sasies dans le formulaire ci-dessous ont bien été envoyé. Vous allez être contacté dès que possible par téléphone ou e-mail.

                        </div>

                    <?php endif; ?>

                    <p class="mb-5">

                        Indiquez les informations de l'entreprise ou l'organisation qui souhaite louer l'Escape Box.<br>

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
                                'name' => 'lastname',
                                'label' => 'Nom',
                                'mandatory' => true,
                            ] ) ?>
                            
                        </div>
                        <div>
                            <?= component('inputs.text',[
                                'name' => 'firstname',
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
                        Veuillez indiquer la période souhaitée pour la location de l'Escape Box.<br>
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
                    'label' => 'J\'accepte les <a class="text-escapebox font-semibold" href="#">conditions de location</a> de l\'Escape Box',
                    'mandatory' => true,

                ] ) ?>

                <hr>

                <?php if(!MessageBag::get('sended', false)): ?>

                <div class="my-5 text-center">
                    <?= component('inputs.button',[
                        'label' => 'Envoyer la demande',
                    ] ) ?>
                </div>

                <?php endif; ?>

                <?= component('inputs.nofilled',[
                    'name' => 'street-nf',
                ] ) ?>

                <?= component('inputs.hidden',[
                    'name' => 'lang',
                    'value' => 'fr'
                ] ) ?>                
            
            </form>

            </div>

        </div>
      </section>
    <!-- End block -->




    <?= component('footer', ['lang' => 'fr']) ?>

</body>
</html>