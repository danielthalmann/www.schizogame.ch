<?php

copy('https://white-ermine.ch/storage/app/media/games/between-two-realities-webgl-1.0.2.zip', 'game.zip');

$zip = new ZipArchive();
$res = $zip->open('game.zip');

if ($res === true) {
    $zip->extractTo('src/game/');
    $zip->close();
    echo 'All done !' . "\n";
} else {
    echo 'Fail to load zip file.' . "\n";
}

unlink('game.zip');
