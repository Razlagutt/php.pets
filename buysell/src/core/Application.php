<?php

namespace app\core;

class Application
{
    private string $uri = "";
    private string $info = "";
    private Router $router;

    public function __construct(
    ) {
        $this->router = new Router();
        $this->info = "this is content";
    }

    public function getInfo()
    {
        return $this->info;
    }

    public function getRoute()
    {
        $this->uri = $this->router->getUri();
    }

    public function renderToResponse()
    {
        $content = $this->getInfo();
        $title = "BuySell";
        
        require_once "../src/views/header.php";
        require_once "../src/views/nav.php";
        require_once $this->uri;
        require_once "../src/views/footer.php";
    }
}
