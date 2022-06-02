<?php

namespace App\Controller;
use Cake\Event\EventInterface;

class HomeController extends AppController
{

    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('ajax');
        // debug($event);
        // exit;
    }
    public function home()
    {
        $this->loadModel('Products');
        $products = $this->Products->find('all');
        $this->set('products', $products);
    }

    public function shop()
    {
        //
    }

    public function test()
    {
        //
    }

    public function login()
    {
        //
    }

    public function register()
    {
        //
    }

    public function about()
    {
        //
    }
    public function products()
    {
        $this->loadModel('Products');
        $products = $this->Products->find('all');
        $this->set('products', $products);

        $this->loadModel('Categories');
        $categories = $this->Categories->find('all');
        $this->set('categories', $categories);
    }

    public function sproduct()
    {
        //
    }

    public function cart()
    {
        //
    }

    public function contact()
    {
        //
    }

    public function user()
    {
        //
    }

    public function test2()
    {
        $this->loadModel('Products');
        $products = $this->Products->find('all');
        $this->set('products', $products);

        $this->loadModel('Categories');
        $categories = $this->Categories->find('all');
        $this->set('categories', $categories);
    }
}

?>