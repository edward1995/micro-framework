<?php 
class Controler {
    
    public $model;
    public $view;
    
    function __construct()
    {
        $this->view = new View();
    }
    
}