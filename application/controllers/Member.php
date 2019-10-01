<?php

class Member extends CI_Controller {

        public function signup()
        {
                $this->load->library('form_validation');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('myform');
                }
                else
                {
                        $this->load->view('formsuccess');
                }
        }
}
?>