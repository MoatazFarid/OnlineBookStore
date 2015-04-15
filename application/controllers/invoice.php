<?php
/**
 * Created by PhpStorm.
 * User: Moataz
 * Date: 4/12/2015
 * Time: 5:47 PM
 */
class Invoice extends CI_Controller{
    function __construct(){
        parent::__construct();
        // check if the member is validated
        $this->check_isvalidated();
    }

    // check that user is validated to see the page
    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }

    public function getInvoiceView(){
        $this->load->view('invoice_view');
    }
    public function oneClkCheckOut(){
        $this->load->model('order_model');
        $this->order_model->createODetails();
        $data['no_order'] = null;
        $order = $this->order_model->getOrdersOfMember();
        $invoice = $this->order_model->invoiceData();
        if($order != null && $invoice != null)
        {
            $data['order'] = $order;
            $data['invoice'] =$invoice->row();
//            insert a array of objects
            $data['invoice2'] =$invoice->result();
        }

        else{$data['no_order']= "can't create the order !! ";}

        $this->load->view('invoice_view',$data);
//        redirect(home/index);

    }
}