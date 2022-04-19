<?php
namespace App\Modules\Dashboard\Controllers;

use App\Libraries\Email;

class Dashboard extends \App\Controllers\BaseController
{
    public function __construct()
	{
		// $this->language = \Config\Services::language();
		// $this->language->setLocale(WEB_LANG);
	}

    public function index()
    {
        return view('App\Modules\Dashboard\Views\index', $this->viewData);
    }

    public function send_email()
    {
        $email   = new Email();
        $code    = 400;
        $data    = [];
        $message = 'Permintaan tidak dapat dipahami oleh server karena sintaks yang salah. Klien TIDAK HARUS mengulangi permintaan tanpa modifikasi.';
        $status  = false;

        if($this->request->isAJAX()){
            $data    = $this->request->getPost();
            $is_mail = (new Email)->mail($data);
            $code    = ($is_mail) ? 200        : $code;
            $status  = ($is_mail) ? true       : $status;
            $message = ($is_mail) ? 'berhasil' : $message;
        }

        $result['code']    = $code;
        $result['data']    = $data;
        $result['message'] = $message;
        $result['status']  = $status;

        return print_r(json_encode($result));
    }
}
