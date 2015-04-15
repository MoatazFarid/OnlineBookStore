<?php
/**
 * Created by PhpStorm.
 * User: Moataz
 * Date: 4/11/2015
 * Time: 6:52 PM
 */
class Register_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function isReg(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('userid'));
        // Run the query
        $sql =  'SELECT * FROM `members` WHERE `userid`= "'.$username.'"';
        $query = $this->db->query($sql);

        if($query->num_rows == 1){
            // yes registed
            return true;
        }else{
            // not registerd
            return false;
        }
    }
    public function register()
    {
        // grab user input
        $userid = $this->security->xss_clean($this->input->post('userid'));
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
        $sql =  'Insert into `members` VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
        $query = $this->db->query($sql ,array($fname,$lname,$address,$city,$state,$zip,$phone,$email,$userid,$password,$cct,$ccno));


        if($query == 1){
            // registration DONE
            // create session
            $data = array(
                'userid' => $userid,
                'fname' => $fname,
                'lname' => $lname,
                //'username' => $row->username,
                'validated' => true
            );
            $this->session->set_userdata($data);

            // return
            return true;
        }else{
            // can't be registered
            return false;
        }


    }
}
