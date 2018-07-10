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
            $em = $this->input->post('em');
            $pas = $this->input->post('pass');
            $this->load->model('LoginModel');
            $login_id = $this->LoginModel->validate_login($em,$pas);
            if($login_id){
                $this->load->library('session');
                $this->session->set_userdata('user_id',$login_id);
                return redirect('user/products_view');
                //echo $this->session->user_id;
            }else{
                echo "Incorrect Email/ Password";
            }
        }else{
            $this->load->view('public/login_view');
            //echo validation_errors();
        }
    }

    public function products_view(){
        $this->load->library('session');
        if($this->session->user_id){
            $this->load->model('ProductModel');
            $products = $this->ProductModel->products_list();
            $this->load->view('user/products_view',['products'=>$products]);
        }else{
            return redirect('user/login');
        }
    }

    public function logout_user(){
        $this->load->library('session');
        $this->session->unset_userdata('user_id');
        return redirect('user/login');
    }
}
?>