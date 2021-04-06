<?php


namespace App\Controllers;

use App\Models\User;

class ApiController
{
    public function index($response)
    {
        $user = User::find(1);
        $response->getBody()->write(json_encode([
            'hello' => 'world',
            'user'  => $user
        ], JSON_PRETTY_PRINT));

        return $response;
    }
}