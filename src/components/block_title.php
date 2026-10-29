    <!-- Start block -->
    <section class="bg-radial-[at_50%_75%] min-h-168 <?= $colorFrom ?? 'from-[#134570]' ?> <?= $colorTo ?? 'to-[#387b9a]' ?> text-white flex flex-col justify-center">
        <div class="px-4 grid grid-cols-1 md:grid-cols-2 md:gap-4 max-w-7xl mx-auto">
            <div class="mt-25">
                <div class="m-auto relative">
                    <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl text-jds-500">
                        <?= $title ?>
                    </h1>
                    <p class="mb-6 font-light text-gray-100 lg:mb-2 md:text-lg lg:text-xl">
                        <?= $description ?>
                    </p>
                    <?php if (isset($link_url)) : ?>
                    <div class="text-center">
                        <a class="bg-jds-500 text-neutral-100 p-3 rounded-lg shadow-lg shadow-jdsgray-500/50" href="<?= $link_url ?>">
                            <span><?= $link_text ?></span>
                            <svg class="inline ml-2 mb-1 h-4 fill-neutral-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6l0-128c0-17.7-14.3-32-32-32L352 0zM80 32C35.8 32 0 67.8 0 112L0 432c0 44.2 35.8 80 80 80l320 0c44.2 0 80-35.8 80-80l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-320c0-8.8 7.2-16 16-16l112 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 32z"/></svg>
                        </a>
                    </div>
                    <?php endif; ?>                    
                </div>
            </div>
            <div class="md:mt-25 mb-5 md:mb-10 mx-auto flex item-center justify-center max-w-xl">
                <?php if (isset($video)) : ?>
                <video class="w-full shadow-lg shadow-jdsgray-500/50 " loop="true" autoplay="true" muted>
                    <source src="<?= $video ?>" type="video/mp4">
                    Your browser does not support HTML video.
                </video>
                <?php endif; ?>
                <?php if (isset($image)) : ?>
                    <img src="<?= $image ?>" alt="<?= $image ?>">
                <?php endif; ?>
            </div>                    
        </div>
    </section>
    <!-- End block -->