<?php
/**
 * Created by PhpStorm.
 * User: Moataz
 * Date: 4/11/2015
 * Time: 6:51 PM
 */
class Register extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index($msg = NULL)
    {
        // Load our view to be displayed
        // to the user
        $data['msg'] = $msg;
        $this->load->view('registration_view', $data);
    }

    public function process()
    {
        $success= null;
        // Load the model
        $this->load->model('register_model');

        //check that if the user already exists or not
        $result = $this->register_model->isReg();
        if (!$result) {
            // the user doesn't exists so we will register it
            $success = $this->register_model->register();
            if(!$success){
                $this->index("Can't register!! ");
//                $this->load->view('registration_view', $data);
            }else{
                // done registeration
                // Send them to members area
                redirect('home');
            }
        } else {
            // If not registered and user exists,
            $this->index("user already exists!! ");

        }
    }
}
?>