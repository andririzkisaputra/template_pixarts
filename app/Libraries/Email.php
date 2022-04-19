<?php 

namespace App\Libraries;

class Email
{
    public function mail($from, $to, $subject, $message, $attachment = '')
    {
        $email = \Config\Services::email();

        $email->setFrom($from,'Pixarts');
		$email->setTo($to);

		$email->attach($attachment);

		$email->setSubject($subject);
		$email->setMessage($message);
		if(!$email->send()){
			return false;
		}else{
			return true;
		}
    }
}