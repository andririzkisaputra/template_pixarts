<?php
namespace App\Modules\Dashboard\Controllers;

use App\Modules\Dashboard\Views;

class Dashboard extends \App\Controllers\BaseController
{
    public function index()
    {
        return view('App\Modules\Dashboard\Views\index');
    }

    public function send_email()
    {
        $message = service('request')->getPost('message');
        var_dump($message);
    }
}
