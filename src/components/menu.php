<?php


function menu($text, $url)
{
?>

<li class=" border-2 m-2 border-neutral-200 bg-white rounded-xl lg:border-none lg:bg-transparent">
    <a href="<?php echo $url; ?>" class="block py-2 pl-3 pr-4 text-[#50bd21] hover:text-[#50bd21] visited:text-[#50bd21]  lg:text-neutral-800 lg:hover:text-neutral-800 lg:visited:text-neutral-800   rounded lg:bg-transparent lg:p-0" aria-current="page"><?php echo $text; ?></a>
</li>

<?php
}

