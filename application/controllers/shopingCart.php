<?php
class ShopingCart extends CI_Controller{
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
//
//    function index($msg=null){
//        $data['result']= null;
//        $data['msg'] = $msg;
//        $this->load->view('shopingCart_view',$data);
//    }

    function viewCart(){
        $userid = $this->session->userdata('userid');

        $this->load->model('cart_model');
        $cartdata = $this->cart_model->getCartData($userid);
        if(!is_null($cartdata)){
            $data['result']=$cartdata;
            $data['msg']=null;
            $this->load->view('shopingCart_view',$data);
        }else{
            $this->load->view('shopingCart_view');
        }
    }


    function OperateOnCart(){
//        filter inputs
        $isbn = $this->security->xss_clean($this->input->post('ISBN'));
        $qty = $this->security->xss_clean($this->input->post('newQty'));

        $this->load->model('cart_model');
        $data['msg'] = null;
        $data['result']= null;

        if(!is_null($isbn)){
            if($this->input->post('delete_edit_item')== 'delete'){

                $check = $this->cart_model->deleteFromCart($isbn);
                if($check != true){
                    $data['msg']="can't delete from Cart ";
                }

            }elseif ($this->input->post('delete_edit_item')== 'edit_qty' && !is_null($qty)){

                $check = $this->cart_model->changeQty($isbn,$qty);

                if($check != true) {

                    $data['msg'] = "can't modify quantity from Cart ";
                }
            }elseif ($this->input->post('delete_edit_item')== 'edit_qty' && is_null($qty)){

                $data['msg'] = "(ERROR)Insert Quantity ";

            }
        }
        //redirect('shopingCart/viewCart');
        $this->load->view('shopingCart_view',$data);
    }
}
?>