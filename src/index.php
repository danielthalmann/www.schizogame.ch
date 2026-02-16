<?php
    include ("HttpAcceptLanguage.php");
    
    $l = new \HttpAcceptLanguage($_SERVER["HTTP_ACCEPT_LANGUAGE"] ?? '');
    $path = $l->getLanguage(['fr', 'de'], 'fr');

    header('Location: /' . $path,true,301);
?>
