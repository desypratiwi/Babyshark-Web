<?php

class MY_Loader extends CI_Loader {

    public function viewku($template_name, $vars = array(), $return = FALSE) {
        if ($return):
            $content = $this->view('metadata', $vars, $return);
            $content .= $this->view('header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('footer', $vars, $return);
            $content .= $this->view('sidebar', $vars, $return);

            return $content;
        else:
            $this->view('metadata', $vars);
            $this->view('header', $vars);
            $this->view($template_name, $vars);
            $this->view('footer', $vars);
            $this->view('sidebar', $vars);
        endif;
    }

}

?>