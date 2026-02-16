<?php
use Exception;
use SmtpMail;

class ReservationController
{

    function __construct()
    {

    }

    function handle()
    {

        if (($_SERVER["REQUEST_METHOD"] ?? '') === 'POST') {
            if($_POST['accept'] === 'on') {
                
                try {
                    $sender = new SmtpMail();
                    $sender->from = 'daniel.thalmann@white-ermine.ch';
                    $sender->to = 'daniel@thalmann.li';
                    $sender->subject = 'Escape Box : demande';
                    $sender->message = component('email_reservation', $_POST);
                    $sender->Send();

                } catch(Exception $ex) {

                    ob_clean();
                    echo $ex->getMessage();
                    
                    return;
                    
                }
                
                redirect(url('fr/'));
            }
        }


    }


}
