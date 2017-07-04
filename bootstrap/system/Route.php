<?php
use Dopesong\Slim\Error\Whoops as WhoopsError;
/**
 *
 */
class Route
{
    static $app;
    static $routes = [];
    static $path = [
        'controller' => APP . 'controllers/'
    ];

    public static function get($path, $callback)
    {
        self::$routes[] = ['path' => $path, 'callback' => $callback, 'type' => 'get'];
    }

    public static function post($path, $callback)
    {
        self::$routes[] = ['path' => $path, 'callback' => $callback, 'type' => 'post'];
    }

    public function run()
    {
        $app = new Slim\App();
        $container = $app->getContainer();

        $container['notFoundHandler'] = function ($c) {
          return function ($request, $response) use ($c) {
              return $c['response']
                  ->withStatus(404)
                  ->withHeader('Content-Type', 'text/html')
                  ->write(file_get_contents(ROOT . 'app/views/errors/404.blade.php'));
          };
      };

        $container['phpErrorHandler'] = $container['errorHandler'] = function($c) {
            return new WhoopsError($c->get('settings')['displayErrorDetails']);
        };

        foreach(self::$routes as $route) {
            $router = json_decode(json_encode($route), FALSE);


            if(is_string($router->callback))
            {
                $router->callback = explode('@', $router->callback);

                $router->callback = [
                  'path' => strtolower($router->callback[0]),
                  'controller' => $router->callback[0],
                  'method' => $router->callback[1]
                ];


                if($router->type == 'get')
                {
                  $app->get($router->path, function ($request, $response, $args) use($router) {
                      if(file_exists(self::$path['controller'] . $router->callback['path'] . '.php'))
                      {
                          include_once(self::$path['controller'] . $router->callback['path'] . '.php');
                          $controller = new $router->callback['controller'];

                          if(method_exists($controller, $router->callback['method']))
                          {
                              call_user_func_array([$controller, $router->callback['method']], $args);
                          }
                          else {
                              throw new \Exception("Error Processing Method {$router->callback['method']}", 1);
                          }
                      }
                  });
                }
                else {

                    $app->post($router->path, function ($request, $response, $args) use($router) {
                        if(file_exists(self::$path['controller'] . $router->callback['path'] . '.php'))
                        {
                            include_once(self::$path['controller'] . $router->callback['path'] . '.php');
                            $controller = new $router->callback['controller'];

                            if(method_exists($controller, $router->callback['method']))
                            {
                                call_user_func_array([$controller, $router->callback['method']], $args);
                            }
                            else {
                                throw new \Exception("Error Processing Method {$router->callback['method']}", 1);
                            }
                        }
                    });
                }
            }



        }

        $app->run();
    }
}
