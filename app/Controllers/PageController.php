<?php
namespace App\Controllers;

use Core\Support\View;


class PageController
{
    public function index(View $view)
    {
        $content = 'Content page more text and words 12345';
        return $view('pages.home', compact('content'));
    }

    public function test(View $view, $id)
    {
        $content = 'Content Test';
        return $view( 'pages.test', compact('content', 'id'));
    }
}