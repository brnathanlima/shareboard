<?php
class Bootstrap
{
    private $controller;
    private $action;
    private $request;

    public function __construct($request)
    {
        $this->request = $request;

        // Define o controller que será chamado
        if (empty($request['controller'])) {
            $this->controller = 'home';
        } else {
            $this->controller = $this->request['controller'];
        }

        // Define a ação que será executada no controller
        if (empty($request['action'])) {
            $this->action = 'index';
        } else {
            $this->action = $this->request['action'];
        }
    }

    public function createController()
    {
        // Verifica existência da classe
        if (class_exists($this->controller)) {
            $parents = class_parents($this->controller);

            // Verifica se a classe passada na url herda da classe Controller
            if (in_array('Controller', $parents)) {
                
                // Verifica se o método existe no controller
                if (method_exists($this->controller, $this->action)) {
                    return new $this->controller($this->action, $this->request);
                } else {
                    echo "<h1>\"{$this->action}\" não é um método do controller {$this->controller}!</h1>";
                    return;
                }
            } else {
                echo "<h1>\"{$this->controller}\" não é um controller!</h1>";
                return;
            }
        } else {
            echo "<h1>Controller \"{$this->controller}\" não existe!</h1>";
            return;
        }
    }
}
