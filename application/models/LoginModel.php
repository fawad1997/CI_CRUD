<?php
class LoginModel extends CI_Model{
    public function validate_login($email,$pass){
        $q = $this->db->where(['email'=>$email,'password'=>$pass])->get('user');
        if($q->num_rows()>=1){
            return $q->row()->id;
        }else{
            return false;
        }
    }
}
?>