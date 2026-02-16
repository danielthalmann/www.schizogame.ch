<?php

use Exception;

class SmtpMail
{

    public $from = '';
    public $to = '';
    public $subject = '';
    public $message = '';
    public $replyTo = null;

    function __construct()
    {

    }

    function Send()
    {
        $to = $this->validate($this->to);
        $subject = $this->subject;
        $message = $this->message;
        $headers = "From: " . $this->validate($this->from) . "\r\n" .
                "Reply-To: " . ($this->validate($this->replyTo) ?? $this->validate($this->from)) . "\r\n" .
                "X-Mailer: PHP/" . phpversion();
        $accepted = mail($to, $subject, $message, $headers);

        if (!$accepted) {
            throw new Exception('Email delivery not accepted');
        }
    }

    public function validate($email)
    {
        if ($email !== null)
        {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                throw new Exception("Invalid email address :" . $email);
            }
        }
        return $email;
    } 
}
