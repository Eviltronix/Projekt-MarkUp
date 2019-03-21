<?php

namespace Controller;

abstract class AbstractController {
    protected $context = [];
    // display wird auch render() genannt
    function display($tpl = NULL) {
        extract($this->context);
        include './tpl/layout.tpl.php';
    }
    
    function addContext($key, $value) {
        $this->context[$key] = $value;
    }
} //CLASS ENDE ++++++++++++++++++++++++++++++++++++++++++++++++++++++
