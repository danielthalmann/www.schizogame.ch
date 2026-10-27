    <!-- Start block -->
    
    <section class="bg-white">
        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
            <!-- Row -->
            <div class="items-center">
                <div class="text-gray-500 sm:text-lg">
                    <?php if ($lang == 'fr') : ?>
                    <?= component('title2', ['title' => 'Nos partenaires']) ?>
                    <?php elseif ($lang == 'de') : ?>
                    <?= component('title2', ['title' => 'Partner']) ?>
                    <?php endif; ?>

                    <div class="col-span-2 space-y-8 grid grid-cols-1 md:grid-cols-4 md:gap-12 md:space-y-0">
                        <div class="flex mx-auto items-center">
                            <a target="_blank" href="https://loro.ch/"><img class="max-h-52" src="<?= url('images/partners/logo_loterie_romande.jpg') ?>" alt="logo_loterie_romande"></a>
                        </div>
                        <div class="flex mx-auto items-center">
                            <a target="_blank" href="https://stopsuicide.ch/"><img class="max-h-52" src="<?= url('images/partners/logo_stop_suicide.png') ?>" alt="logo_stop_suicide"></a>
                        </div>

                        
                        <div class="flex mx-auto items-center">
                            <a target="_blank" href="https://white-ermine.ch/"><img class="max-h-52" src="<?= url('images/partners/logo_white_ermine.svg') ?>" alt="logo_white_ermine"></a>
                        </div>
                        <div class="flex mx-auto items-center">
                            <a target="_blank" href="https://polygravia.ch/"><img class="max-h-52" src="<?= url('images/partners/logo_polygravia.svg') ?>" alt="logo_polygravia"></a>
                        </div>
                        <div class="flex mx-auto items-center">
                            <a target="_blank" href="https://frilance.ch/"><img class="max-h-52" src="<?= url('images/partners/logo_frilance.png') ?>" alt="logo-frilance"></a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- End block -->