<?php

namespace Controller;

class FrontController {
    private $basedir;
    private $controller = 'Controller\IndexController';
    private $action = 'indexAction';
    private $params = [];
    
    function __construct($basedir = '') {
        $this->basedir = $basedir;
        $this->parseUrl();
    }
    
    function parseUrl() {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $path = trim(substr($path, strlen($this->basedir)), '/');
        @list($controller, $action, $params) = explode('/', $path, 3);
        
        if(isset($controller)) {
            $this->setController($controller);
        }
        
        if(isset($action)) {
            $this->setAction($action);
        }
        
        if(isset($params)) {
            $this->setParams($params);
        }
    }
    
    function setController($controller) {
        $controller = __NAMESPACE__.'\\'.ucfirst(strtolower($controller)).'Controller';
        if(class_exists($controller)) {
            $this->controller = $controller;
        }
    }

    function setAction($action) {
        $action = strtolower($action).'Action';
        if(method_exists($this->controller, $action)) {
            $this->action = $action;
        }
    }

    function setParams($params) {
        $this->params = explode('/', $params);
    }
    
    function run() {
        
        //(new $this->controller)->$this->action();
        // (new Controller\ProductController())->deleteAction(5, 10, 7)
        call_user_func_array([new $this->controller, $this->action], $this->params);
    }

}
