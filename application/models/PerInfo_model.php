<?php
class PerInfo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getInfo(){
        $userid =$this->session->userdata('userid');

        $sql = 'select * from `members` where `userid` = ?';
        $query  = $this->db->query($sql,array($userid));

        return $query->result();
    }
    function editInfo(){
        $userid =$this->session->userdata('userid');

        $password = $this->security->xss_clean($this->input->post('password'));
        $fname = $this->security->xss_clean($this->input->post('fname'));
        $lname = $this->security->xss_clean($this->input->post('lname'));
        $address = $this->security->xss_clean($this->input->post('address'));
        $city = $this->security->xss_clean($this->input->post('city'));
        $state = $this->security->xss_clean($this->input->post('state'));
        $zip = $this->security->xss_clean($this->input->post('zip'));
        $phone = $this->security->xss_clean($this->input->post('phone'));
        $email = $this->security->xss_clean($this->input->post('email'));
        $ccno = $this->security->xss_clean($this->input->post('ccno'));
        $cct = $this->security->xss_clean($this->input->post('cct'));


        // Run the query
        $sql = 'update `members` set `fname` = ? ,`lname` = ? ,`address` = ?,`city` = ?,`state` = ?,`zip`=?,`phone`=?,`email`=?,`password`=?,`creditcardtype`=?,`creditcardnumber`= ? where `userid` = ?';

        $query = $this->db->query($sql ,array($fname,$lname,$address,$city,$state,$zip,$phone,$email,$password,$cct,$ccno,$userid));

        if($this->db->affected_rows() >0){
            return true;
        }else{
            return false;
        }

    }

}

?>