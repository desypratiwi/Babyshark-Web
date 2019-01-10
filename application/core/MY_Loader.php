<?php

class MY_Loader extends CI_Loader {

    public function __construct(){
            parent:: __construct();    
    }


    public function viewshop($template_name,$sd, $vars = array(), $return = FALSE) {
        if ($return):
            $content .= $this->view('shop_layout/shop_header', $vars, $return);
            $content .= $this->view('shop_layout/shop_sidebar', $sd, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('shop_layout/shop_footer', $vars, $return);
            

            return $content;
        else:
            $this->view('shop_layout/shop_header', $vars);
            $this->view('shop_layout/shop_sidebar', $sd);
            $this->view($template_name, $vars);
            $this->view('shop_layout/shop_footer', $vars);
            
        endif;
    }

    
}

?>