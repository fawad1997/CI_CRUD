<?php

class ProductModel extends CI_Model{
    public function products_list(){
        $prod = $this->db->get('product'); 
        //print_r($prod->result()); exit;
        return $prod->result();
    }

    public function add_product($nam,$url,$desc,$userid){
        return true;
    }
}

?>