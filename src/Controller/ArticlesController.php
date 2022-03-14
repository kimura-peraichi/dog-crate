<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Response;

class ArticlesController extends AppController
{
    public function index(): ?Response
    {
        $indicate = $this->getIndicate();
        echo $indicate;
        return $this->redirect('/');
    }

    private function getIndicate(string $param): array
    {
        if (empty($param)) {
            return '';
        }

        return [
            '返り値の型',
            'arrayとは限らないよ'
        ];
    }
}
