<?php

class Hairstyle extends Application {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->helper('html');
        $this->data['pagehairstyle'] = 'class="selected"';
        $this->data['pagetitle'] = 'Hairstyle - ' . $this->data['pagetitle'];
        
        $hairstyles = $this->hairstyles->all();
        $formattedlist = array();
        foreach( $hairstyles as $style) {
            $image_properties = array(
                'src' => $style,
                'alt' => ''
            );
            $formattedlist[] = '<a href="#">'.img($image_properties).'</a>';      
        }
        $formattedlist = ul($formattedlist);
        $this->data['hairstyles'] = $formattedlist;
        
        $this->data['pagebody'] = 'hairstyle';
        $this->render();
    }

}