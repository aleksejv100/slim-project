<?php


namespace App\Middleware;


use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as Handler;
use Slim\Psr7\Response;

class ExampleBeforeMiddleware
{
    public function __invoke(Request $request, Handler $handler): Response
    {
        $response = $handler->handle($request);
        $content = (string) $response->getBody();
        $response = new Response();
        $response->getBody()->write("Before: " . $content);

        return $response;
    }
}