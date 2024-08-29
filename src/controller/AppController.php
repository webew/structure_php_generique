<?php

namespace App\controller;

use vendor\classes\AbstractController;

class AppController extends AbstractController
{
    public function __construct() {}

    public function home()
    {
        $this->render('home', [
            'title' => 'HOME'
        ]);
    }
    public function notFound()
    {
        $this->render('404', ['title' => '404']);
    }
}
