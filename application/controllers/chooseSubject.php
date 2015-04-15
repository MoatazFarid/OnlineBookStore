<?php

class ChooseSubject extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->check_isvalidated();
    }

    public function index($msg = NULL){
        // Load our view to be displayed
        // to the user
        $data['msg'] = $msg;
        $this->load->view('chooseSubject_view',  $data);
    }

    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }

    public function getSubject(){

        $this->load->model('books_model');
//        var_dump($this->books_model->getSubject()); // used for testing
        $data['subjectName']  =$this->books_model->getSubject();
            array("fff",'ffff','fff');

        $this->load->view('chooseSubject_view',  $data);
    }


    public function getBooksFromSubject(){
        $subject = $this->security->xss_clean($this->input->post('book_subject'));
        $this->load->model('books_model');

//        var_dump($this->books_model->getBooksFromSubject()); // used for testing
        $data['books_by_subject_form']  =$this->books_model->getBooksFromSubject();
        // send to view
        $this->load->view('chooseSubject_view',  $data);
    }

    public function addToCart(){
        $this->load->model('cart_model');
        $this->cart_model->addToCart();
//        load home view
        $this->load->view('home_view');


    }
}

?>