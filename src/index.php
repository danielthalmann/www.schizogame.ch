<?php
    include ("HttpAcceptLanguage.php");
    
    use HttpAcceptLanguage;
    
    $l = new HttpAcceptLanguage($_SERVER["HTTP_ACCEPT_LANGUAGE"] ?? '');
    $path = $l->getLanguage(['fr', 'de'], 'fr');

    header('Location: /' . $path,true,301);
?>
