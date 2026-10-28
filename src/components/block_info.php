<!-- Start block -->
<div class="container my-12 mx-auto px-4 max-w-5xl">
    <div
        class="flex flex-col md:flex-row items-start gap-8 bg-white p-8 rounded-3xl shadow-xl border-l-8 border-r-8 border-red-500">
        <div class="flex-1 text-center md:text-left">
            <h2 class="text-2xl font-bold text-red-600 mb-4 uppercase tracking-wider"><?= $title ?></h2>
            <?php foreach($sentences as $sentence) : ?>
            <p class="text-gray-700 mb-6 text-lg leading-relaxed"><?= $sentence ?></p>
            <?php endforeach; ?>
            <?php if (isset($insert)) : ?>
                <div class="bg-red-50 p-6 rounded-xl border border-red-100">
                    <?php foreach($insert as $item) : ?>
                    <p class="text-gray-900 font-semibold text-lg"><?= $item ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- End block -->