<?php

class ProductModel extends CI_Model{
    public function products_list(){
        $prod = $this->db->get('product'); 
        //print_r($prod->result()); exit;
        return $prod->result();
    }

    public function add_product($form_array){
        return $this->db->insert('product',$form_array);
    }

    public function update_product($productId,$product){
        return $this->db->where('id',$productId)->update('product',$product);
    }

    public function delete_product($prod_id){
        return $this->db->delete('product',['id'=>$prod_id]);
    }

    public function find_product($id){
        return $this->db->where('id',$id)->get('product')->row();
    }
}

?>