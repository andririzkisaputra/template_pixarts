<?php
namespace App\Modules\Admin\Controllers;

use App\Libraries\Email;
use App\Libraries\Message;
use App\Controllers\BaseController;

class Admin extends BaseController
{
    protected function render_pager($view) 
    {
        echo view('App\Modules\Admin\Views\layout\navbar', $this->viewData);
        echo view($view);
        echo view('App\Modules\Admin\Views\layout\footer');
    }

    public function index()
    {
        return $this->render_pager('App\Modules\Admin\Views\index');
    }

    public function login()
    {
        echo view('App\Modules\Admin\Views\layout\head', $this->viewData);
        echo view('App\Modules\Admin\Views\login');
        echo view('App\Modules\Admin\Views\layout\end');
    }
}
