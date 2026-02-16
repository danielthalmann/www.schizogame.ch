<?php


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
        $headers = [];
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=utf-8';
        $headers[] = "From: " . $this->validate($this->from);
        $headers[] = "Reply-To: " . ($this->validate($this->replyTo) ?? $this->validate($this->from));
        $headers[] = "X-Mailer: PHP/" . phpversion();
        $accepted = mail($to, $subject, $message, implode("\r\n", $headers));

        if (!$accepted) {
            throw new \Exception('Email delivery not accepted');
        }
    }

    public function validate($email)
    {
        if ($email !== null)
        {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                throw new \Exception("Invalid email address :" . $email);
            }
        }
        return $email;
    } 
}
