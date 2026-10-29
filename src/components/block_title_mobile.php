<!-- Start block -->
<section
    class="bg-radial-[at_50%_75%] <?= $colorFrom ?? 'from-[#134570]' ?> <?= $colorTo ?? 'to-[#387b9a]' ?>  text-white">
    <div class="grid grid-cols-1 md:grid-cols-2 max-w-7xl mx-auto">
        <div class="mt-25 p-5">
            <h1
                class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl text-[#50bd21]">
                <?= $title ?></h1>
            <a name="game"></a>
            <p class="mb-6 font-light text-gray-100 lg:mb-2 md:text-lg lg:text-xl">
                <?= $description ?>
            </p>
            <?php if (!isset($lang) || $lang == 'fr') : ?>
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-4"><a
                    href="https://apps.apple.com/ch/app/psyquiz/id1610720564?l=fr-FR" target="_blank"
                    rel="noopener noreferrer"
                    class="group flex items-center gap-3 bg-black text-white px-6 py-3 rounded-xl hover:bg-gray-900 transition-all transform hover:scale-105 shadow-xl hover:shadow-2xl border border-gray-800"
                    data-alpine-devtools-right-click=""><svg viewBox="0 0 384 512"
                        class="w-8 h-8 fill-current group-hover:text-gray-200 transition-colors">
                        <path
                            d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 52.3-11.4 69.5-34.3z">
                        </path>
                    </svg>
                    <div class="text-left flex flex-col justify-center">
                        <div class="text-[10px] uppercase font-medium tracking-wide opacity-90 leading-none mb-1">
                            Télécharger sur</div>
                        <div class="text-xl font-bold leading-none tracking-tight">App Store</div>
                    </div>
                </a><a href="https://play.google.com/store/apps/details?id=com.fridev.psyquiz&amp;hl=fr_CH"
                    target="_blank" rel="noopener noreferrer"
                    class="group flex items-center gap-3 bg-black text-white px-6 py-3 rounded-xl hover:bg-gray-900 transition-all transform hover:scale-105 shadow-xl hover:shadow-2xl border border-gray-800"><svg
                        viewBox="0 0 512 512" class="w-8 h-8 group-hover:text-gray-200 transition-colors">
                        <path fill="currentColor"
                            d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z">
                        </path>
                    </svg>
                    <div class="text-left flex flex-col justify-center">
                        <div class="text-[10px] uppercase font-medium tracking-wide opacity-90 leading-none mb-1">
                            DISPONIBLE SUR</div>
                        <div class="text-xl font-bold leading-none tracking-tight">Google Play</div>
                    </div>
                </a>
            </div>
            <?php elseif ($lang == 'de') : ?>
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-4"><a
                    href="https://apps.apple.com/ch/app/psyquiz/id1610720564?l=de_DE" target="_blank"
                    rel="noopener noreferrer"
                    class="group flex items-center gap-3 bg-black text-white px-6 py-3 rounded-xl hover:bg-gray-900 transition-all transform hover:scale-105 shadow-xl hover:shadow-2xl border border-gray-800"><svg
                        viewBox="0 0 384 512" class="w-8 h-8 fill-current group-hover:text-gray-200 transition-colors">
                        <path
                            d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 52.3-11.4 69.5-34.3z">
                        </path>
                    </svg>
                    <div class="text-left flex flex-col justify-center">
                        <div class="text-[10px] uppercase font-medium tracking-wide opacity-90 leading-none mb-1">Laden
                            im</div>
                        <div class="text-xl font-bold leading-none tracking-tight">App Store</div>
                    </div>
                </a><a href="https://play.google.com/store/apps/details?id=com.fridev.psyquiz&amp;hl=de_DE"
                    target="_blank" rel="noopener noreferrer"
                    class="group flex items-center gap-3 bg-black text-white px-6 py-3 rounded-xl hover:bg-gray-900 transition-all transform hover:scale-105 shadow-xl hover:shadow-2xl border border-gray-800"><svg
                        viewBox="0 0 512 512" class="w-8 h-8 group-hover:text-gray-200 transition-colors">
                        <path fill="currentColor"
                            d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z">
                        </path>
                    </svg>
                    <div class="text-left flex flex-col justify-center">
                        <div class="text-[10px] uppercase font-medium tracking-wide opacity-90 leading-none mb-1">JETZT
                            BEI</div>
                        <div class="text-xl font-bold leading-none tracking-tight">Google Play</div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
        </div>
        <div class="mt-25 mb-5 md:mb-10 p-5 hidden md:flex justify-center items-center">
            <div
                class="relative w-62 h-125 bg-gray-900 rounded-[3rem] shadow-2xl border-8 border-gray-900 overflow-hidden transform rotate-[-5deg] hover:rotate-0 transition-all duration-500">
                <div class="absolute top-0 w-full h-8 bg-black z-20 flex justify-between px-6 items-center">
                    <div class="text-white text-xs">9:41</div>
                    <div class="flex gap-1">
                        <div class="w-4 h-3 bg-white rounded-sm"></div>
                    </div>
                </div>
                <div class="w-full h-full bg-white pt-12 px-4 flex flex-col items-center"
                    data-alpine-devtools-right-click="">
                    <div
                        class="w-full h-28 bg-primary/10 rounded-2xl mb-6 flex items-center justify-center overflow-hidden p-6">
                        <img alt="PsyQuiz Logo" class="w-full h-full object-contain drop-shadow-lg"
                            src="<?php echo url('images/psyquiz/logo_app.png') ?>">
                    </div>
                    <div class="w-3/4 h-4 bg-gray-200 rounded-full mb-3 animate-pulse"></div>
                    <div class="w-full h-4 bg-gray-100 rounded-full mb-3"></div>
                    <div class="w-5/6 h-4 bg-gray-100 rounded-full mb-8"></div>
                    <div class="w-full flex-1 bg-gray-50 rounded-t-3xl p-4 space-y-3">
                        <div
                            class="w-full h-14 bg-white shadow-sm rounded-xl border border-gray-100 flex items-center px-4 gap-3">
                            <div class="w-8 h-8 rounded-full bg-green-100"></div>
                            <div class="w-2/3 h-2 bg-gray-100 rounded-full"></div>
                        </div>
                        <div
                            class="w-full h-14 bg-white shadow-sm rounded-xl border border-gray-100 flex items-center px-4 gap-3">
                            <div class="w-8 h-8 rounded-full bg-red-100"></div>
                            <div class="w-1/2 h-2 bg-gray-100 rounded-full"></div>
                        </div>
                        <div
                            class="w-full h-14 bg-white shadow-sm rounded-xl border border-gray-100 flex items-center px-4 gap-3">
                            <div class="w-8 h-8 rounded-full bg-blue-100"></div>
                            <div class="w-3/4 h-2 bg-gray-100 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<!-- End block -->