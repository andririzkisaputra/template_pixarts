<?php 

namespace App\Libraries;

class Email
{
    public function __construct()
	{
		$this->email = \Config\Services::email();
	}

    public function mail($from, $to, $subject, $message, $attachment = '')
    {
        $this->email = \Config\Services::email();

        $this->email->setFrom($from,'Pixarts');
		$this->email->setTo($to);

		$this->email->attach($attachment);

		$this->email->setSubject($subject);
		$this->email->setMessage($message);
		if(!$this->email->send()){
			return false;
		}else{
			return true;
		}
    }
}