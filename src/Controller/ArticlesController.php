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

    private function getIndicate()
    {
        return '返り値の型を指定していないメソッド';
    }
}
