<?php


namespace Controller;

class IndexController extends AbstractController {
    private $pm;
    
    function __construct() {
        $this->pm = new \Mapper\ProductMapper();
    }
    
    function indexAction() {

        $results = $this->pm->findAll();
        $this->addContext('results', $results);
        $this->display();    
    }

    
}
