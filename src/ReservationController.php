<?php

class ReservationController
{

    protected $mandatories = [
        'organisation' => 'Le nom de l\'entreprise ou organisation est obligatoire',
        'firstname' => 'Le prénom est obligatoire',
        'lastname' => 'Le nom est obligatoire',
        'street' => 'La rue est obligatoire',
        'zipcode' => 'Le numéro postale est obligatoire',
        'locality' => 'La loccalité est obligatoire',
        'email' => 'L\'adresse email est obligatoire',
        'phone' => 'Le numér de téléphone est obligatoire',
        'event' => 'Le nom de la manifestation est obligatoire',
        'description' => 'La description est obligatoire',
        'from' => 'La date du est obligatoire',
        'to' => 'La date jusqu\'au est obligatoire',
        'accept' => 'Veuillez accepter les conditions',
    ];

    function validate()
    {
    
        array_walk($this->mandatories, function($item, $key) {

            if ( request($key, null) === null ) {

                \MessageBag::set('error', true);
                \MessageBag::set('message', 'Le contenu du formulaire est invalide.');
                $details = \MessageBag::get('message_details', []);
                $details[] = $item;
                \MessageBag::set('message_details', $details);
                
            }

        });

    }

    function check_robot()
    {
        if ( request('street-nf', '') !== '' ) {
            \MessageBag::set('error', true);
            \MessageBag::set('message', 'Le contenu du formulaire est invalide.');
            $details = \MessageBag::get('message_details', []);
            $details[] = 'Hello robots ! you don\'t pass...';
            \MessageBag::set('message_details', $details);
        }
    }

    function handle()
    {

        if (($_SERVER["REQUEST_METHOD"] ?? '') === 'POST') {

            $this->validate();
            $this->check_robot();

            if (! \MessageBag::set('error', false)) {

                try {
                    $sender = new \SmtpMail();
                    $sender->from = 'daniel.thalmann@white-ermine.ch';
                    $sender->to = 'daniel@thalmann.li';
                    $sender->subject = 'Escape Box : demande';
                    $sender->message = component('email_reservation', request_all_esc());
                    $sender->Send();

                    \MessageBag::set('sended', true);

                    //redirect(url(request_esc('lang') . '/escape-box/reservations/?sended'));

                } catch(\Exception $ex) {

                    \MessageBag::set('error', true);
                    \MessageBag::set('message', 'Erreur lors de l\'envoi : ' . $ex->getMessage());
                    
                    return;
                    
                }
                
            }
                    
        }

    }

}
