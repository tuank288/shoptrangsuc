<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\EventInterface;

/**
 * Myprofile Controller
 *
 * @method \App\Model\Entity\Myprofile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MyprofileController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('admin');
    }
    public function index()
    {

    }
}
