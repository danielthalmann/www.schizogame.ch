<div class="mb-3">
    <?php if (isset($label)) : ?>
        <label class="mb-1 block font-bold" for="<?= $name ?? 'name' ?>_id">
            <?= $label ?>
            <?php if (isset($mandatory) && $mandatory) : ?>
                <?= $mandatory_label ?? '*' ?>
            <?php endif; ?>
        </label>
    <?php endif; ?>
    <input class="block focus-visible:outline-gray-600 focus-visible:outline-2 hover:outline-1 hover:outline-gray-600 w-full border-1 rounded-sm p-2" 
        type="text"
        name="<?= $name ?? 'name' ?>"
        id="<?= $name ?? 'name' ?>_id"
        value="<?= $value ?? request_esc($name, '') ?>"
        <?php if (isset($mandatory) && $mandatory) : ?>
        required="required"
        <?php endif; ?>
    >
</div>
