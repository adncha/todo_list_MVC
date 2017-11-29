<?

    class MY_Loader extends CI_Loader
    {
        public function template($template_name, $vars = [], $return = false)
        {
            if ($return):
                $content = $this->view('/include/header', $vars, $return);
                $content .= $this->view($template_name.'_view', $vars, $return);
                $content .= $this->view('include/footer', $vars, $return);

                return $content;
            else:
                $this->view('include/header', $vars);
                $this->view($template_name.'_view', $vars);
                $this->view('include/footer', $vars);
            endif;
        }
    }