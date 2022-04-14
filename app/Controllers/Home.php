<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function send_email()
    {
        $message = service('request')->getPost('message');
        var_dump($this->request->getPost('message'));
    }
}
