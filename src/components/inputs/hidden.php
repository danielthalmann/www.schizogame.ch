<input 
    type="hidden"
    name="<?= $name ?? 'name' ?>"
    id="<?= $name ?? 'name' ?>_id"
    value="<?= $value ?? request_esc($name, '') ?>"
>