<?php
namespace App\Controllers;

use Core\Support\View;
use DB;


class PageController
{
    public function index(View $view, DB $db)
    {
        $content = 'Content page more text and words 12345';
        $user = $db->table('users')->find(1);
        return $view('pages.home', compact('content', 'user'));
    }

    public function test(View $view, $id)
    {
        $content = 'Content Test';
        return $view( 'pages.test', compact('content', 'id'));
    }
}