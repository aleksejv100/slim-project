<?php


namespace Core\Support;

use Jenssegers\Blade\Blade;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ResponseFactoryInterface;

class View
{
    protected $response;

    /**
     * View constructor.
     * @param ResponseFactoryInterface $factory
     */
    public function __construct(ResponseFactoryInterface $factory)
    {
        $this->response = $factory->createResponse(200, "Success");
    }

    /**
     * @param string $template
     * @param array $with
     * @return Response
     */
    function __invoke(string $template = '', array $with = []) : Response
    {
        $cache = config('blade.cache');
        $views = config('blade.views');

        $blade = (new Blade($views, $cache))->make($template, $with);
        $this->response->getBody()->write($blade->render());
        return $this->response;
    }
}