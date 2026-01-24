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

                    <div class="col-span-2 space-y-8 md:grid md:grid-cols-4 md:gap-12 md:space-y-0">
                        <div class="flex flex-col items-center">
                            <a target="_blank" href="https://brickoccasion.ch/"><img class="max-h-52" src="<?= url('images/partners/logo_brick_occasion.svg') ?>" alt="logo-logo_brick_occasion"></a>
                        </div>
                        <div class="flex flex-col items-center">
                            <a target="_blank" href="https://white-ermine.ch/"><img class="max-h-52" src="<?= url('images/partners/logo_white_ermine.svg') ?>" alt="logo-logo_white_ermine"></a>
                        </div>
                        <div class="flex flex-col items-center">
                            <a target="_blank" href="https://polygravia.ch/"><img class="max-h-52" src="<?= url('images/partners/logo_polygravia.svg') ?>" alt="logo-logo_polygravia"></a>
                        </div>
                        <div class="flex flex-col items-center">
                            <a target="_blank" href="https://fri-host.ch/"><img class="max-h-52" src="<?= url('images/partners/logo_fri-host.png') ?>" alt="logo-fri-host"></a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- End block -->