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
        $data['msg'] = null;
        $data['result'] = null;


        $this->load->model('cart_model');
        $cartdata = $this->cart_model->getCartData($userid);
        if(!is_null($cartdata)){
            $data['result']=$cartdata;

            $this->load->view('checkOut_view',$data);
        }else{
            $this->load->view('checkOut_view',$data);
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

    function finalInvoice(){

        ///problem
        // it doesn't create odetails table 
        $ono = null;
        $this->load->model('order_model');
        if($this->order_model->isOrderExists())
        {
            $ono = $this->session->userdata('OrderNo');
        }else{
            $ono =$this->order_model->setOrder();
        }

        $this->order_model->createODetails();

        $data['no_order'] = null;
        $orderDetails = $this->order_model->getODetails($ono);
        // get user name
        $this->load->model('login_model');
        $data['username'] = $this->login_model->getUserName();

        $ShippingDetails = $this->order_model->getShippingDetails($ono);

        if($ShippingDetails != null && $orderDetails != null)
        {
            $data['invoice'] =$ShippingDetails;
//            insert a array of objects
            $data['invoice2'] =$orderDetails;
        }

        else{
            $data['no_order']= "can't get order details !! ";
        }

        $this->load->view('orderDetails_view',$data);
//        redirect(home/index);


    }
    function process(){
        $ch = $this->input->post('choise');
        if($ch == 'newCC'){
            $this->load->view('newCC_view');

        }elseif($ch == 'newAddress'){
            $this->load->view('newAddress_view');
        }elseif($ch == 'prntInvo'){
            $this->finalInvoice();
        }else{
            $data['msg'] =" choose 1 operation to do";
            $this->load->view('checkOut_view',$data);

        }
    }
}