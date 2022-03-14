<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Response;

class ArticlesController extends AppController
{
    public function index(): ?Response
    {
        $indicate = $this->getReport();
        echo $indicate;
        return $this->redirect('/');
    }

    private function getReport()
    {
        return '返り値の型宣言をしていないメソッド';
    }
}
