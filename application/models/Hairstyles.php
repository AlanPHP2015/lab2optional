<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Hairstyles extends CI_Model {
    private $list = array();
    
    function __construct() {
        parent::__construct();
        for ( $i = 1; $i <= 16; $i++) {
            $this->list[] = 'images/hairstyle'.$i.'.jpg';
        }
    }
    
    function all() {
        return $this->list;
    }
}