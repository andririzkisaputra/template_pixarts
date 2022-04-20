<?php
namespace App\Modules\Dashboard\Controllers;

use App\Libraries\Email;
use App\Libraries\Respon;

class Dashboard extends \App\Controllers\BaseController
{
    public function __construct()
	{

	}

    public function index()
    {
        return view('App\Modules\Dashboard\Views\index', $this->viewData);
    }

    public function send_email()
    {
        $result = (new Respon)->error_input();

        if($this->request->isAJAX()){
            $post = $this->request->getPost();
            $to      = 'pixartsindonesia@gmail.com';
            $from    = 'no-replay@gmail.com';
            $subject = 'Dari '.$post['nama'];
            $message = $post['message'].', Hubungi Ke Nomor : '.$post['notelp'].' atau Email : '.$post['email'].', Waktu Mengirim Pesan : '.date('Y-m-d H:i:s');
            $is_mail = (new Email)->mail($from, $to, $subject, $message);
            $result  = ($is_mail) ? (new Respon)->success_input($post) : $result;
        }

        return print_r(json_encode($result));
    }
}
