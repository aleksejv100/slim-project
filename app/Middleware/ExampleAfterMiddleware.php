<?php


namespace App\Middleware;


use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as Handler;


class ExampleAfterMiddleware
{
    public function __invoke(Request $request, Handler $handler)
    {
        $response = $handler->handle($request);
        $response->getBody()->write("\n After Middleware");
        return $response;
    }
}