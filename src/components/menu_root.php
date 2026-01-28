    <header class="fixed w-full" style="z-index: 100;">
        <nav class="transition-all duration-700 py-2.5 bg-gray-200  <?php if ($transparent   ?? true) : ?> lg:bg-transparent <?php endif; ?>">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto px-4">
                <a href="<?= url($lang . '/') ?>" class="flex items-center">
                    <img src="<?= url('images/logo.svg') ?>" class="h-6 mr-3 sm:h-9" alt="Schizogame Logo">
                    <span class="self-center text-xl font-semibold whitespace-nowrap ">Schizogame</span>
                </a>
                <div class="flex items-center lg:order-2 lg:hidden">
                    <button class="mt-2 mr-4 sm:inline-block cursor-pointer" data-toggle="menu" type="button">
                        <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                        </svg>
                    </button>
                </div>

                <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1 rounded-b-lg" data-toggle="menu" id="menu">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <?php if ($menuPage) : ?>
                        <?php foreach($menuPage as $text => $url) : ?>
                            <?= menu($text, $url) ?>
                        <?php endforeach; ?>   
                        <li class="hidden lg:inline m-2 bg-white rounded-xl lg:border-none lg:bg-transparent">
                            <div class="h-full inline-block border-jds-500 border-l-2"></div>
                        </li>                         
                        <?php endif; ?>
                        <?php if ($lang == 'fr') : ?>
                        <?= menu('Psyquiz', 'https://psyquiz.ch/') ?>
                        <?php elseif ($lang == 'de') : ?>
                        <?= menu('Psyquiz', 'https://psyquiz.ch/de/') ?>
                        <?php endif; ?>
                        <?= menu('Between two realities', url($lang . '/between-two-realities/')) ?>
                        <?= menu('Escape box', url($lang . '/escape-box/')) ?>
                        <li class="hidden lg:inline m-2 bg-white rounded-xl lg:border-none lg:bg-transparent">
                            <div class="h-full inline-block border-jds-500 border-l-2"></div>
                        </li>
                        <li class="">
                            <div class="inline-block">
                                <ul class="flex flex-row mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                                    <li class="m-2 bg-white rounded-xl lg:border-none lg:bg-transparent">
                                        <?php if ($lang == 'fr') : ?>
                                            <span class="underline underline-offset-5 block py-2 pl-3 pr-4 text-[#50bd21] hover:text-[#50bd21] visited:text-[#50bd21]  lg:text-neutral-800 lg:hover:text-neutral-800 lg:visited:text-neutral-800 rounded lg:bg-transparent lg:p-0">FR</span>
                                        <?php elseif ($lang == 'de') : ?>
                                            <a href="<?= url('fr/' . ($path ?? '')) ?>" class="block py-2 pl-3 pr-4 text-[#50bd21] hover:text-[#50bd21] visited:text-[#50bd21]  lg:text-neutral-800 lg:hover:text-neutral-800 lg:visited:text-neutral-800 rounded lg:bg-transparent lg:p-0">FR</a>
                                        <?php endif; ?>
                                    </li>
                                    <li class="m-2 bg-white rounded-xl lg:border-none lg:bg-transparent">
                                        <?php if ($lang == 'fr') : ?>
                                            <a href="<?= url('de/' . ($path ?? '')) ?>" class="block py-2 pl-3 pr-4 text-[#50bd21] hover:text-[#50bd21] visited:text-[#50bd21]  lg:text-neutral-800 lg:hover:text-neutral-800 lg:visited:text-neutral-800 rounded lg:bg-transparent lg:p-0">DE</a>
                                        <?php elseif ($lang == 'de') : ?>
                                            <span class="underline underline-offset-5 block py-2 pl-3 pr-4 text-[#50bd21] hover:text-[#50bd21] visited:text-[#50bd21]  lg:text-neutral-800 lg:hover:text-neutral-800 lg:visited:text-neutral-800 rounded lg:bg-transparent lg:p-0">DE</span>
                                        <?php endif; ?>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <script>
        document.addEventListener('scroll', () => {
            <?php if ($transparent   ?? true) : ?> 
                className = 'lg:bg-transparent';
            <?php else: ?> 
                className = 'lg:bg-transparent-disable';
            <?php endif; ?>
            nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                if (nav.classList.contains(className)) {
                    nav.classList.remove(className);
                }
            } else {
                if (!nav.classList.contains(className)) {
                    nav.classList.add(className);
                }
            }
        });
    </script>