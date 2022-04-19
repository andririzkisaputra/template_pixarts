<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class SelectLanguage extends Controller
{

    protected $helpers = [];

    public function index()
    {
        $session = session();
        $locale = $this->request->getLocale();
        $session->remove('lang');
        $session->set('lang', $locale);
        $url = base_url();
        return redirect()->to($url);
    }
}