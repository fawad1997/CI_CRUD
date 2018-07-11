<?php
class User extends My_Controller{
    public function login(){
        if($this->session->user_id){
            return redirect('user/products_view');
        }
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
                $this->session->set_flashdata('login_faild','Incorrect Email or Password');
                $this->load->view('public/login_view');
            }
        }else{
            $this->load->view('public/login_view');
            //echo validation_errors();
        }
    }

    public function products_view(){
        if($this->session->user_id){
            $this->load->model('ProductModel');
            $products = $this->ProductModel->products_list();
            $this->load->view('user/products_view',['products'=>$products]);
        }else{
            return redirect('user/login');
        }
    }

    public function add_product(){
        if($this->session->user_id){
            $this->load->helper('form');
            $this->load->view('user/addproduct_view');
        }else{
            return redirect('user/login');
        }
    }

    public function addProduct(){
        if($this->session->user_id){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('description','Description','required|min_length[5]');
            $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
            if($this->form_validation->run()){
                $form_values = $this->input->post();
                unset($form_values['submit']);
                $this->load->model('ProductModel');
                if($this->ProductModel->add_product($form_values)){
                    $this->session->set_flashdata('articleaddmsg','Product Added Successfully');
                    $this->session->set_flashdata('articleclass','alert alert-success');
                }else{
                    $this->session->set_flashdata('articleaddmsg','Unable to add Product');
                    $this->session->set_flashdata('articleclass','alert alert-danger');
                }
                redirect('user/products_view');
            }else{
                $this->load->view('user/addproduct_view');
            }
            //$this->load->helper('form');
        }else{
            return redirect('user/login');
        }
    }

    public function edit_product($id){
        if($this->session->user_id){
            $this->load->helper('form');
            $this->load->model('ProductModel');
            $article =$this->ProductModel->find_product($id);
            $this->load->view('user/editproduct_view',['article'=>$article]);
            //print_r($article); exit;
        }else{
            return redirect('user/login');
        }
    }

    public function editProduct(){
        if($this->session->user_id){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('description','Description','required|min_length[5]');
            $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
            if($this->form_validation->run()){
                $form_values = $this->input->post();
                unset($form_values['submit']);
                $prod_id = $form_values['id'];
                unset($form_values['id']);
                $this->load->model('ProductModel');
                if($this->ProductModel->update_product($prod_id,$form_values)){
                    $this->session->set_flashdata('articleaddmsg','Product Updated Successfully');
                    $this->session->set_flashdata('articleclass','alert alert-success');
                }else{
                    $this->session->set_flashdata('articleaddmsg','Unable to update Product');
                    $this->session->set_flashdata('articleclass','alert alert-danger');
                }
                redirect('user/products_view');
            }else{
                $this->load->view('user/addproduct_view');
            }
            //$this->load->helper('form');
        }else{
            return redirect('user/login');
        }
    }

    public function delete_product($id){
        $this->load->model('ProductModel');
                if($this->ProductModel->delete_product($id)){
                    $this->session->set_flashdata('articleaddmsg','Product Deleted Successfully');
                    $this->session->set_flashdata('articleclass','alert alert-success');
                }else{
                    $this->session->set_flashdata('articleaddmsg','Unable to delete Product');
                    $this->session->set_flashdata('articleclass','alert alert-danger');
                }
                redirect('user/products_view');
    }

    public function logout_user(){
        $this->load->library('session');
        $this->session->unset_userdata('user_id');
        return redirect('user/login');
    }
}
?>