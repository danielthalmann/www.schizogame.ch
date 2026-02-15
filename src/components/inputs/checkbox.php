<div class="mb-3 flex items-center ">
    <input class="w-5 h-5 m-2 inline-block focus-visible:outline-gray-600 focus-visible:outline-2 hover:outline-1 hover:outline-gray-600 border-1 rounded-sm" 
        name="<?= $name ?? 'name' ?>"
        id="<?= $name ?? 'name' ?>_id"
        type="checkbox" 
        value="<?= $value ?? '' ?>"
        <?php if (isset($mandatory) && $mandatory) : ?>
            required="required"
        <?php endif; ?>
        >
    <?php if (isset($label)) : ?>
        <label class="mb-1 inline-block font-bold" for="<?= $name ?? 'name' ?>_id">
            <?= $label ?>
            <?php if (isset($mandatory) && $mandatory) : ?>
                <?= $mandatory_label ?? '*' ?>
            <?php endif; ?>

        </label>
    <?php endif; ?>
</div>
