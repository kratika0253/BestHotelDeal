<?php
require_once 'swiftmailer-master/swiftmailer-master/lib/swift_required.php';

$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, "ssl"))
  ->setUsername('testneel3')
  ->setPassword('Neel.12345');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('Test Subject')
  ->setFrom(array('kratika0253@gmail.com' => 'ABC'))
  ->setTo(array('ponkia.neel@gmailcom'))
  ->setBody('This is a test mail.');

$result = $mailer->send($message);
?>