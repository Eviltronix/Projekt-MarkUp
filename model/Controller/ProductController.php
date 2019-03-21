<?php

namespace Controller;

class ProductController extends AbstractController {

    function __construct() {
        $this->pm = new \Mapper\ProductMapper();
    }
    
    function previewAction() {

        $product= filter_input_array(INPUT_POST);
        
        $results = $this->pm->findAll();
        
        $this->addContext('results', $results);  
        $this->addContext('product', $product); 
        $product['color'] = 'red';
        $this->display();


    }

function indexAction() {
    $products = $this->pm->findAll();
    $this->addContext('products', $products);
    $this->display();
    }
    
 function newAction() {
        // Formular-Template setzen
    }
    
   function saveAction() {
        $datas = filter_input_array(INPUT_POST);
        $results = $this->pm->findAll();
        
        $this->addContext('results', $results);  
        $this->addContext('datas', $datas);  

        header('location: '.BASE_DIR.'/index');
//        echo '<pre>';
//            print_r($datas);
//        echo '</pre>';
        
        $customer = new \Entity\Product();
        $customer->setByArray($datas);
//        echo '<pre>';
//            print_r($customer);
//        echo '</pre>';
        $this->pm->save($customer);
        
        

        
        
    }
   function findById($id) {
        
        $dbh = DBHelper::getConnection(); 
        $stmt = $dbh->prepare('SELECT * FROM ' . self::TABLE . ' WHERE id=?');
        $stmt->execute([$id]);
        return $stmt->fetchObject('\Entity\Product');
//        echo '<pre>';
//        print_r($product);
//        echo '</pre>';
    }
    
    function deleteAction() {
        
    }
    
    function testAction($a, $b, $c = 'default') {
        var_dump($a);
        var_dump($b);
        var_dump($c);
    }
 
    
    
}
