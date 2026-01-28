    <!-- Start block -->
    <section class="<?= $css ?? 'bg-gray-300' ?>">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:space-y-20 lg:py-24 lg:px-6">
            <!-- Row -->
            <div class="items-center">
                <div class="sm:text-lg">
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-[#50bd21]"><?= $title ?></h2>
                    <?php foreach($sentences as $sentence) : ?>
                    <p class="mb-4 font-light lg:text-xl">
                        <?= $sentence ?>
                    </p>
                    <?php endforeach; ?>                    
                </div>
            </div>
        </div>
    </section>
    <!-- End block -->