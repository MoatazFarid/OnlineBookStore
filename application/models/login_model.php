<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function validate(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('userid'));
        $password = $this->security->xss_clean($this->input->post('password'));
//        $username = $this->input->post('userid');
//        $password =$this->input->post('password');

        // Prep the query
//        $this->db->where('userid', $username);
//        $this->db->where('password', $password);
        // Run the query
        $sql =  'SELECT * FROM `members` WHERE `userid`= "'.$username.'" AND `password` = "'.$password.'"';
        $query = $this->db->query($sql);


//        $query = $this->db->get('members');
        //echo "\n".$sql;
        // Let's check if there are any results
//        echo var_dump($query->num_rows == 1);
        if($query->num_rows == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                'userid' => $row->userid,
                'fname' => $row->fname,
                'lname' => $row->lname,
                //'username' => $row->username,
                'validated' => true
            );

            $this->session->set_userdata($data);
            return true;
        }else{
            // If the previous process did not validate
            // then return false.
            return false;
        }
    }
}