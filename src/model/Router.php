<?php

namespace App\model;


use App\controller\SecurityController;
use ReflectionClass;
use App\attribute\Route as RouteAttribute;
use App\model\Route;

class Router
{
    /**
     * @var Route[]
     */
    protected array $routes = [];

    public function addRoute(Route $route) : Router {
        $this->routes[] = $route;

        return $this;
    }

    public function execute(string $uri)
    {
        try {
            foreach ($this->routes as $route) {
                if(preg_match("~" . $route->getPath() . "~", $uri, $matches)) {
                    $object = new ($route->getClassName())();
                    unset($matches[0]);
                    call_user_func_array([$object, $route->getMethod()], $matches);
                    exit();
                }
            }
        } catch (\Throwable $e){
            echo $e->getMessage();
            exit();
        }
    }

    public function initRoutes(): void
    {
        foreach (glob("/www/src/controller/*") as $filename) {

            $fullControllerName = "App\\controller\\". pathinfo($filename)['filename'];

            $reflection = new ReflectionClass($fullControllerName);



            foreach ($reflection->getMethods() as $method) {
                foreach ($method->getAttributes(RouteAttribute::class) as $attribute) {
                    $this->addRoute(new Route($attribute->getArguments()[0], $reflection->getName(), $method->getName()));
                }
            }
        }
   }
}
