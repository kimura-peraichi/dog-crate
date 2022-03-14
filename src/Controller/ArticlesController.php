<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Response;

class ArticlesController extends AppController
{
    public function index(): ?Response
    {
        echo "test";
        return $this->redirect('/');
    }
}
