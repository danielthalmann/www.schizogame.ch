<?php

const LOGFILE = 'request.log';
// const REPOSITORY = 'https://github.com/danielthalmann/www.schizogame.ch.git';

chdir(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..');

// $payload = json_decode($_POST['payload'] ?? '{}', true);
// json_encode($payload, JSON_PRETTY_PRINT);

$fp = fopen(LOGFILE, 'w');
// ExecuteCmd('git remote set-url origin ' . REPOSITORY, $fp);
ExecuteCmd('git pull', $fp);
ExecuteCmd('php install.php', $fp);

fclose($fp);

function ExecuteCmd($cmd, $fp)
{
    fwrite($fp, $cmd . "\n");
    exec($cmd . ' 2>&1', $output, $retval);
    if ($output) {
        foreach ($output as $line) {
            fwrite($fp, $line . "\n");
        }
    }
}
