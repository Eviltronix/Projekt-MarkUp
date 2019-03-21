<?php

namespace Mapper;

use \PDO as PDO;
use \Helper\DBHelper as DBHelper;

class ProductMapper {

    const TABLE = 'product';    
    function findAll() {
        $dbh = DBHelper::getConnection();
        $stmt = $dbh->query('SELECT * FROM ' . self::TABLE);
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, '\Entity\Product');
           
        return $results;
    }
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  
    function findById($id) {
        
        $dbh = DBHelper::getConnection(); 
        $stmt = $dbh->prepare('SELECT * FROM ' . self::TABLE . ' WHERE id=?');
        $stmt->execute([$id]);
        return $stmt->fetchObject('\Entity\Product');
//        echo '<pre>';
//            print_r($product);
//        echo '</pre>';
    }
    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    
    function save($data) {
        if($data->getId() > 0) {
            $this->update($data);
        } else {
            $this->insert($data);
        }
    }
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    
    private function insert($data) {
        $dbh = DBHelper::getConnection();
        $dbh->beginTransaction();
//        echo '<pre>';
//            print_r($data);
//        echo '</pre>';
        $sql = 'INSERT INTO ' . self::TABLE . ' (material, shape, color, text, icon, fFamily, fSize) VALUES (?,?,?,?,?,?,?)';     
        $stmt = $dbh->prepare($sql);
        
        try {         
            $stmt->execute([
                $data->getMaterial(),
                $data->getShape(),
                $data->getColor(),
                $data->getText(),
                $data->getIcon(),
                $data->getfFamily(),
                $data->getfSize()
            ]);       
            $data->setId($dbh->lastInsertId());
            
            $dbh->commit();
        } catch (PDOException $e) {
            echo'Hat nicht geklappt!';
            echo $e->getMessage();
            die();
        }
    }
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    
    private function update($data) {
        $dbh = DBHelper::getConnection();
        $sql = 'UPDATE ' . self::TABLE . ' SET material=?, shape=?, color=?, text=?, icon=?, fFamily=?, fSize=? WHERE id=?';
        $stmt = $dbh->prepare($sql);
        $stmt->execute([
            $data->getMaterial(),
            $data->getShape(),
            $data->getColor(),
            $data->getText(),
            $data->getIcon(),
            $data->getfFamily(),
            $data->getfSize(),
            $data->getId()
        ]);
        //$stmt = null;
    }
////++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//    
    function delete($id) {

        $dbh = DBHelper::getConnection();

        $sql = 'DELETE FROM ' . self::TABLE . ' WHERE id=?';
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$id]);
    }

}
