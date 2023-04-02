<?php

namespace App\Controller;

use App\Controller\AppController;

class HomeController extends AppController 
{
    public function index ()
    {
        $user = $this->Auth->user();
        //var_dump($user);exit;
        $this->set(compact('user'));
    }

    public function sair ()
    {
        $this->Authentication->sair();
        return $this->redirect(['controller' => 'Users', 'action' => 'logout']);
    }
}