<?php
namespace App\Modules\Dashboard\Controllers;

use App\Libraries\Email;
use App\Libraries\Respon;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    protected function render_pager($view) 
    {
        echo view('App\Modules\Dashboard\Views\layout\header', $this->viewData);
        echo view($view);
        echo view('App\Modules\Dashboard\Views\layout\footer');
    }

    public function index()
    {
        return $this->render_pager('App\Modules\Dashboard\Views\index');
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
