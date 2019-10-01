<?php

class Form extends CI_Controller {

        public function index()
        {
                //$this->load->helper(array('form', 'url'));

                //$this->load->library('form_validation');

                $this->form_validation->set_rules('nom', 'Username', 'callback_username_check');
                $this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[8]');
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[pass]');
                $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('myform');
                }
                else
                {
                        $data = $this->input->post();
                        unset($data['passconf']);
                                  
                        $this->db->insert('users', $data);
                                  
                        $this->load->view('formsuccess');
                }
        }

        public function username_check($str)
        {
                if ($str == 'test')
                {
                        $this->form_validation->set_message('username_check', 'The {field} field can not be the word "test"');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }

}
?>