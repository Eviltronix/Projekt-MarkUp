<?php

namespace Entity;

class Product extends AbstractEntity {
    protected $id;
    protected $material;
    protected $shape;
    protected $icon;
    protected $color;
    protected $text;
    protected $fFamily;
    protected $fSize;
//    protected $image;
//    protected $xPos;
//    protected $yPos;

    public $product = Array();
  
  public function displayProduct() {
        echo $this->product;
    }
 
//Getter +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
   
//    function getId() {
//        return $this->id;
//    }

    function getMaterial() {
        return $this->material;
    }

    function getShape() {
        return $this->shape;
    }
    function getFFamily() {
        return $this->fFamily;
    }

    function getFSize() {
        return $this->fSize;
    }

    function getIcon() {
      return $this->icon;
    }
    
    function getColor() {
        return $this->color;
    }
    
    function getText() {
            return $this->text;
    }
    
//    
//Setter +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    
//    function setId($id) {
//        $this->id = $id;
//    }

    function setMaterial($material) {
        $this->material = $material;
    }

    function setShape($shape) {
        $this->shape = $shape;
    }

    function setColor($color) {
        $this->color = $color;
    }
    function setFFamily($fFamily) {
        $this->fFamily = $fFamily;
    }

    function setFSize($fSize) {
        $this->fSize = $fSize;
    }

        function setText($text) {
      $this->text = $text;
    }

  function setIcon($icon) {
      $this->icon = $icon;
  }

} 