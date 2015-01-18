<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Application extends CI_Controller {

    protected $data = array();
    protected $id;
    protected $choices = array(
        'Home' => '/',
        'About' => '/about',
        'Hairstyle' => '/hairstyle',
        'News' => '/news',
        'Contact' => '/contact'
    );

    function __construct() {
        parent::__construct();
        $this->data = array();
        $this->data['pagehome'] = '';
        $this->data['pageabout'] = '';
        $this->data['pagehairstyle'] = '';
        $this->data['pagenews'] = '';
        $this->data['pagecontact'] = '';
        $this->data['article'] = 'empty';
        $this->data['pagetitle'] = 'ZiZurz Website Template';
    }

    function render() {
        $this->data['menubar'] = build_menu_bar($this->choices);
        $this->data['article'] = $this->parser->parse($this->data['article'], $this->data, true);
        
        $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
        $this->data['data'] = &$this->data;
        $this->parser->parse('template', $this->data);
    }

}
