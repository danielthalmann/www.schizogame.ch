<!-- Start block -->
<section class="<?= $css ?? 'bg-gray-300' ?>">
    <div id="features" class="max-w-7xl px-4 py-8 mx-auto lg:space-y-20 lg:py-24 lg:px-6">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center text-primary mb-16">Pourquoi télécharger PsyQuiz ?</h2>
            <div class="grid md:grid-cols-3 gap-12">
                <?php foreach ($blocks as $block) : ?>
                <div class="flex flex-col items-center text-center space-y-4 p-6">
                    <div class="p-4 bg-primary/10 rounded-full mb-2">
                        <?php if (isset($block['icon']) && $block['icon'] == 'shield') : ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-shield w-12 h-12 text-primary" aria-hidden="true">
                            <path
                                d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                            </path>
                        </svg>
                        <?php endif; ?>
                        <?php if (isset($block['icon']) && $block['icon'] == 'book-open') : ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-book-open w-12 h-12 text-primary" aria-hidden="true">
                            <path d="M12 7v14"></path>
                            <path
                                d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                            </path>
                        </svg>
                        <?php endif; ?>
                        <?php if (isset($block['icon']) && $block['icon'] == 'map-pin') : ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-map-pin w-12 h-12 text-primary" aria-hidden="true">
                            <path
                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                            </path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <?php endif; ?>

                    </div>
                    <h3 class="text-xl font-bold text-gray-800"><?= $block['title'] ?></h3>
                    <p class="text-secondary leading-relaxed"><?= $block['description'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- End block -->