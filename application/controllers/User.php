<?php
class User extends My_Controller{
    public function login(){
        $this->load->helper('form');
        $this->load->view('public/login_view');
    }

    public function userLogin(){
        echo "Reached Login Function";
    }
}
?>