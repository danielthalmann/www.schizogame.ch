    <!-- Start block -->
    <section class="bg-white">

        <div class="max-w-screen-xl px-4 pt-8 mx-auto space-y-12 lg:space-y-20 lg:pt-24 lg:px-6">
            <!-- Row -->
            <div class="items-center">
                <div class="text-gray-500 sm:text-lg">
                        <?php if ($lang == 'fr') : ?>
                            <?= component('title2', ['title' => 'Membres du comité']) ?>
                        <?php elseif ($lang == 'de') : ?>
                            <?= component('title2', ['title' => 'Komitee-Mitglieder']) ?>
                        <?php endif; ?>                    
                    <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                        <div class="p-4">
                            <a target="_blank" href="https://www.rfsm.ch/"><img class="max-h-52" src="<?= url('images/partners/logo-RFSM-2019.jpg') ?>" alt="logo-RFSM"></a>
                        </div>
                        <div class="p-4">
                            <a target="_blank" href="https://horizonsud.ch/"><img class="max-h-52" src="<?= url('images/partners/logo-HorizonSud.png') ?>" alt="logo-horizon-sud"></a>
                        </div>
                        <div class="p-4">
                            <a target="_blank" href="https://www.st-louis.ch/"><img class="max-h-52" src="<?= url('images/partners/logo-st-louis.jpg') ?>" alt="logo-st-louis"></a>
                        </div>
                        <div class="p-4">
                            <a target="_blank" href="https://www.fr.ch/dsas"><img class="max-h-52" src="<?= url('images/partners/logo-DSAS.jpg') ?>" alt="logo-dsas"></a>
                        </div>
                        <div class="p-4">
                            <a target="_blank" href="https://www.lestraversees.ch/"><img class="max-h-52" src="<?= url('images/partners/logo-Les_Traversees.png') ?>" alt="logo-lestraversees"></a>
                        </div>
                        <?php /*
                        <div class="p-4">
                            <a target="_blank" href="https://afaap.ch/"><img class="max-h-52" src="<?= url('images/partners/logo-AFAAP.jpg') ?>" alt="logo-AFAAP"></a>
                        </div>
                         */ ?>

                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End block -->
