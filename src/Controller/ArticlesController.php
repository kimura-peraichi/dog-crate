<?php
declare(strict_types=1);

namespace App\Controller;

class ArticlesController extends AppController
{
    public function index()
    {
        echo "test";
        return $this->renderJson([
            'test'
        ]);
    }
}
