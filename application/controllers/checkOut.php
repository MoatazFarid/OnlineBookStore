<?php
/**
 * Created by PhpStorm.
 * User: Moataz
 * Date: 4/24/2015
 * Time: 1:12 AM
 */
class CheckOut extends CI_Controller{

    function __construct(){
        parent::__construct();
        // check if the member is validated
        $this->check_isvalidated();
        $data['msg']=null;
        $data['result'] = null;
    }
    // check that user is validated to see the page
    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }

    /**
     *this function used to view cart content
     */
    function viewCart(){
        $userid = $this->session->userdata('userid');

        $this->load->model('cart_model');
        $cartdata = $this->cart_model->getCartData($userid);
        if(!is_null($cartdata)){
            $data['result']=$cartdata;

            $this->load->view('checkOut_view',$data);
        }else{
            $this->load->view('checkOut_view');
        }
    }

    /**
     *This function used to edit shiping address , $city , $state , $zip
     * and returns to checkOut_view
     */
    function editShipAdd(){

//        get session data
        $userid = $this->session->userdata('userid');

//        get user input

        $fname = $this->security->xss_clean($this->input->post('fname'));
        $this->session->set_userdata('Shiping_fname',$fname);

        $lname = $this->security->xss_clean($this->input->post('lname'));
        $this->session->set_userdata('Shiping_lname',$lname);

        $st = $this->security->xss_clean($this->input->post('st'));
        $city = $this->security->xss_clean($this->input->post('city'));
        $state = $this->security->xss_clean($this->input->post('state'));
        $zip = $this->security->xss_clean($this->input->post('zip'));

// send data to Model to edit in db
        $this->load->model('order_model');
        $flag = $this->order_model->editShipingData($userid , $st , $city , $state , $zip);
        if($flag){

            $this->viewCart();

        }else{
            $data['msg'] = "can't edit Shiping data ";
            $this->load->view('checkOut_view',$data);
        }




    }

    /**
     *this function is used to edit credit card and
     */
    function editCC(){

//        get session data
        $userid = $this->session->userdata('userid');
        $cc = $this->security->xss_clean($this->input->post('newCC'));
        $ccType = $this->security->xss_clean($this->input->post('newCCType'));

        $this->load->model('register_model');
        $flag = $this->register_model->editCC($cc,$ccType);
        if($flag){

            $this->viewCart();

        }else{
            $data['msg'] = "can't edit Credit Card data ";
            $this->load->view('checkOut_view',$data);
        }

    }

    function process(){
        $this->load->model('order_model');
        $this->order_model->createODetails();
        $ono = $this->session->userdata('OrderNo');
        $ShippingDetails = $this->order_model->getShippingDetails();
        $data['no_order'] = null;
        $orderDetails = $this->order_model->getODetails();
        // get user name
        $this->load->model('login_model');
        $data['username'] = $this->login_model->getUserName();

    }
}