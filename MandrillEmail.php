<?php
/**
 * Created by PhpStorm.
 * User: Generaleye
 * Date: 5/2/15
 * Time: 6:00 AM
 */

//namespace libs;
require 'vendor/autoload.php';




class MandrillEmail {

//    const MANDRILL_USERNAME = "gabrieloyetunde@gmail.com";
//    const MANDRILL_PASSWORD = "rw2F9hLM5GoZw-UyJY9uMQ";
//    const SENDER_EMAIL = "gabrieloyetunde@gmail.com";
//    const SENDER_NAME = "eVoting";
    const MANDRILL_USERNAME = "meshileyaseun@gmail.com";
    const MANDRILL_PASSWORD = "3ZeSXbCg9LF7X1yXEmWY-A";
    const SENDER_EMAIL = "meshileyaseun@gmail.com";
    const SENDER_NAME = "eVoting";


    public function sendEmail($recipient_name, $recipient_email, $subject, $body) {
        //$subject = 'Hello from Mandrill, PHP!';
        $from = array($this::SENDER_EMAIL => $this::SENDER_NAME);
        $to = array(
            $recipient_email  => $recipient_name
        );

        //$text = "Mandrill speaks plaintext";
        //$html = "<em>Mandrill speaks <strong>HTML</strong></em>";

        $transport = Swift_SmtpTransport::newInstance('smtp.mandrillapp.com', 587);
        $transport->setUsername($this::MANDRILL_USERNAME);
        $transport->setPassword($this::MANDRILL_PASSWORD);
        $swift = Swift_Mailer::newInstance($transport);

        $message = new Swift_Message($subject);
        $message->setFrom($from);
        //$message->setBody($html, 'text/html');
        $message->setTo($to);
        $message->addPart($body, 'text/plain');
        $failures='';
        if ($recipients = $swift->send($message, $failures))
        {
            echo 'Message successfully sent!';
            return true;
        } else {
            echo "There was an error:\n";
            print_r($failures);
            return false;
        }
    }
}
//Basic Usage of the Mandrill API


?>