<?php
class Search_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    /**
     *This function return a result of all books with given author
     */
    function searchByAuther (){
        $author = $this->security->xss_clean($this->input->post('searchAuthor'));

        $sql = 'Select * from `books` where `author` like "%'.ucwords($author).'%"';

        $query = $this->db->query($sql);

        if($query->num_rows >=0){
            return $query->result();
        }else{
            return null;
        }
    }

    /**
     *This function return a result of all books with given title
     */
    function searchByTitle(){

        $title = $this->security->xss_clean($this->input->post('searchTitle'));

        $sql1 = 'Select * from `books` where `title` like "%'.ucwords($title).'%"';

        $query1 = $this->db->query($sql1);

        if($query1->num_rows >=0){
            return $query1->result();
        }else{
            return null;
        }
    }

}

?>