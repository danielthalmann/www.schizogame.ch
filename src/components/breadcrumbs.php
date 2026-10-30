<section class="<?= $bgColor ?? 'bg-escapebox' ?> <?= $fontColor ?? 'text-white' ?> pt-24 pb-5">
    <div class="max-w-7xl px-4 mx-auto lg:space-y-20 lg:px-6">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <?php $i = 0; ?>
                <?php  foreach($breadcrumbs as $text => $url) : ?>
                <li>
                    <div class="flex items-center space-x-1.5">
                        <?php if ($i > 0) : ?>
                        <svg class="w-3.5 h-3.5 rtl:rotate-180 text-body" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m9 5 7 7-7 7" />
                        </svg>
                        <?php endif; ?>
                        <?php $i++; ?>
                        
                        <?php if ($url != '#') : ?>
                            <a href="<?= $url ?>" class="inline-flex items-center text-sm font-medium text-body hover:text-fg-brand"><?= $text ?></a>
                        <?php else : ?>
                            <span class="inline-flex items-center text-sm font-medium text-body-subtle"><?= $text ?></span>
                        <?php endif; ?>

                    </div>
                </li>                  
               <?php endforeach; ?>               
            </ol>
        </nav>
    </div>
</section>