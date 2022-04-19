<?php 

namespace App\Libraries;

class Email
{
    public function mail($data)
    {
        $email = [
            'subject' => $data['subject'],
            'message' => $data['message'],
        ];
        return true;
    }
}