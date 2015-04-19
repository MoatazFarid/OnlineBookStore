<?php

class Search extends CI_Controller{

    function __construct(){
        parent::__construct();
        // check if the member is validated
        $this->check_isvalidated();
    }

    /**
     *used to test the controller if it works
     */
    public function test(){
        $this->load->view('search_view');

    }

    public function searchBy(){
        // set is available to null
        $data['isAvailable']= null;
        $data['no_order'] = null;
        $data['searchResult'] = array();

//        check if the user choose search by author
        if(isset($_POST['searchTitle'])){

            $this->load->model('search_model');
            $query = $this->search_model->searchByTitle();

            if($query == null){
                $data['isAvailable']='This Book is not Available';
                $this->load->view('search_view',$data);
            }else{
                //set available
                $data['isAvailable']=true;
                // send the data to view
                $data['searchResult'] = $query;
                $this->load->view('search_view',$data);
            }

        }
        //        check if the user choose search by title
        else if(isset($_POST['searchAuthor'])){
            $this->load->model('search_model');
            $query = $this->search_model->searchByAuther();

            if($query == null){
                $data['isAvailable']='This Book is not Available';
                $this->load->view('search_view',$data);
            }else{

                //set available
                $data['isAvailable']=true;
                // send the data to view
                $data['searchResult'] = $query;
                $this->load->view('search_view',$data);
            }

        }else{

            $this->load->view('search_view',$data);
        }
    }


    /**
     *check that user is validated to see the page
     */
    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }

}

?>