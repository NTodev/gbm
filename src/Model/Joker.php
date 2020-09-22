<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model;

/**
 * Description of Joker
 *
 * @author Nick90
 */
class Joker {
    private $name;
    private $title;
    private $description;
    
    public function __construct($name,$title, $description) {
        $this->name = $name;
        $this->title = $title;
        $this->description = $description;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setTitle($title): void {
        $this->title = $title;
    }

    public function setDescription($description): void {
        $this->description = $description;
    }


}
