<?php
class User extends My_Controller{
    public function login(){
        $this->load->helper('form');
        $this->load->view('public/login_view');
    }

    public function userLogin(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('em','Email','required|valid_email');
        $this->form_validation->set_rules('pass','Password','required|min_length[5]');
        $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
        if($this->form_validation->run()){
            echo "Reached Login Function Success";
        }else{
            $this->load->view('public/login_view');
            //echo validation_errors();
        }
    }
}
?>