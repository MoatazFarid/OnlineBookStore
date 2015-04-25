<?php
/**
 * Created by PhpStorm.
 * User: MoatazFarid
 * Date: 4/6/2015
 * Time: 11:38 AM
 */
session_start();
class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        // check if the member is validated
        $this->check_isvalidated();
    }

    public function index(){
        // If the user is validated, then this function will run

        //echo 'Congratulations, you are logged in.';
        $this->load->view('home_view');
        // Add a link to logout
        echo "<br /><a href='".".base_url().'/home/do_logout'>Logout Fool!</a>";
        echo"<br/><br/><br/><br/><br/>";
    }

    // check that user is validated to see the page
    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }
    // a function to check if anything is subbmetted from home

    public function selectChoice(){
        // choose a choice and then show it's page
        if($_POST['browse_by_subject']){

            redirect('chooseSubject/getSubject');

        }else if($_POST['search_author_title_subject']){

            redirect('search/searchBy');

        }else if($_POST['view_edit_cart']){

            redirect('shopingCart/viewCart');

        }else if($_POST['check_order_status']){

            redirect('invoice/checkOrderStatus');

        }else if($_POST['check_out']){

            redirect('checkOut/viewCart');

        }else if($_POST['one_clk_check_out']){

            redirect('invoice/oneClkCheckOut');

        }else if($_POST['view_edit_personal_info']){

            redirect('#');

        }else if($_POST['logout']){

            redirect('login/do_logout');

        }

    }

    // logout
    public function do_logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}