<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
//session_start();
class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    public function index($msg = NULL){
        // Load our view to be displayed
        // to the user
        $data['msg'] = $msg;
        $this->load->view('login_view', $data);
    }

    public function process(){
        // Load the model
        $this->load->model('login_model');
        // Validate the user can login
        $result = $this->login_model->validate();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            $this->index("Wrong user/pass");

        }else{
            // If user did validate,
            // Send them to members area

            redirect('home');
        }
    }

    // logout
    public function do_logout(){
        $this->session->sess_destroy();
        $sql1 = 'delete from `odetails` where 1';
        $query = $this->db->query($sql1);
        $sql = 'delete from `orders` where 1';
        $query = $this->db->query($sql);

        redirect('login');
    }

}
?>