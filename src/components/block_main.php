    <!-- Start block -->
    <section class="bg-radial-[at_50%_75%] from-jds-500 to-jdsgray-500 text-white">
        <div class="grid grid-cols-1 max-w-screen-xl mx-auto lg:min-h-screen">
            <div class="my-25 lg:my-none mx-5 lg:mx-auto flex">
                <div class="m-auto relative">
                    <label class="top-0 right-0 whitespace-nowrap sm:absolute">
                        <span class="inline-block sm:block -translate-y-5 lg:translate-y-0 lg:translate-x-16 origin-center lg:rotate-10 rounded-2xl text-2xl font-bold bg-orange-400 text-white border-2 border-white text-center py-2 px-3 shadow-jdsgray-500/50">
                            <?= $toptext ?? 'Édition 2026' ?>
                        </span>
                    </label>
                    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl text-jds-500">
                        <?= $title ?>
                    </h1>

                    <p class="max-w-2xl mb-6 font-light lg:mb-8 md:text-lg lg:text-xl">
                        <?= $description ?>
                    </p>

                    <div class=" mb-15 max-w-[640px] mx-auto">
                        <?php if (isset($video)) : ?>
                        <video class="w-full shadow-lg shadow-jdsgray-500/50 " width="600" loop="true" autoplay="true" muted>
                            <source src="<?= $video ?>" type="video/mp4">
                            Your browser does not support HTML video.
                        </video>
                        <?php endif; ?>
                        <?php if (isset($image)) : ?>
                            <img src="<?= $image ?>" alt="<?= $image ?>">
                        <?php endif; ?>
                    </div>

                    <div class="text-center">
                        <a class="bg-jds-500 text-neutral-100 p-3 rounded-lg shadow-lg shadow-jdsgray-500/50" href="<?= $link_url ?>">
                            <span><?= $link_text ?></span>
                            <svg class="inline ml-2 mb-1 h-4 fill-neutral-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6l0-128c0-17.7-14.3-32-32-32L352 0zM80 32C35.8 32 0 67.8 0 112L0 432c0 44.2 35.8 80 80 80l320 0c44.2 0 80-35.8 80-80l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-320c0-8.8 7.2-16 16-16l112 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 32z"/></svg>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- End block -->