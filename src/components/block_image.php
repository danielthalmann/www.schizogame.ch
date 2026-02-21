    <!-- Start block -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>

    <section class="<?= $css ?? 'bg-gray-300' ?>">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:space-y-20 lg:py-24 lg:px-6">
            <div class="col-span-2 space-y-8 lg:grid lg:grid-cols-2 lg:gap-12 lg:space-y-0">
                <!-- Row -->
                <div class="items-center">
                    <div class="text-gray-900 sm:text-lg">
                        <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-[#50bd21]"><?= $title ?></h2>
                        <?php foreach($sentences as $sentence) : ?>
                        <p class="mb-4 font-light lg:text-xl">
                            <?= $sentence ?>
                        </p>
                        <?php endforeach; ?>    
         
                    </div>
                    <?php if (isset($link_url)) : ?>
                        <div class="flex">
                            <a class="mx-auto bg-jds-500 text-neutral-100 p-3 rounded-lg shadow-lg shadow-jdsgray-500/50" href="<?= $link_url ?>">
                                <span><?= $link_text ?></span>
                                <svg class="inline ml-2 mb-1 h-4 fill-neutral-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6l0-128c0-17.7-14.3-32-32-32L352 0zM80 32C35.8 32 0 67.8 0 112L0 432c0 44.2 35.8 80 80 80l320 0c44.2 0 80-35.8 80-80l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-320c0-8.8 7.2-16 16-16l112 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 32z"/></svg>
                            </a> 
                        </div>
                    <?php endif; ?>
                </div>

                <div class="text-white flex relative overflow-hidden order-first lg:order-none">
                    <div class="p-5 lg:text-center m-auto">
                        <?php if (isset($image_url)) : ?>
                            <a href="<?= $image_url ?>">
                        <?php endif; ?>
                        <img class="max-h-124" src="<?= $image ?>">
                        <?php if (isset($image_url)) : ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
             </div>

        </div>
    </section>

