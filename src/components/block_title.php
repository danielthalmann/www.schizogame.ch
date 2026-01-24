    <!-- Start block -->
    <section class="bg-radial-[at_50%_75%]  from-cyan-600 to-jdsgray-500 text-white">
        <div class="grid grid-cols-1 max-w-screen-xl mx-auto">
            <div class="mt-20 p-5">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl text-[#50bd21]"><?= $title ?></h1>
                <a name="game"></a>
                <p class="mb-6 font-light text-gray-100 lg:mb-2 md:text-lg lg:text-xl">
                    <?= $description ?>
                </p>
                <div class="mx-auto my-10 flex item-center justify-center max-w-xl">
                    <img src="<?= $image ?>" alt="<?= $image ?>">
                </div>
            </div>         
        </div>
    </section>
    <!-- End block -->