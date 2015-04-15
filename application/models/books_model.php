<?php
/**
 * Created by PhpStorm.
 * User: Moataz
 * Date: 4/11/2015
 * Time: 9:04 PM
 */
class Books_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->check_isvalidated();

    }

    function index(){

    }

    function getBooksFromSubject(){
        // grab user input
        $book_subject = $this->security->xss_clean($this->input->post('book_subject'));

        // PREPARE QUERY get a list of subjects
        $sql = 'SELECT * FROM `books` WHERE `subject` = ?';
        // execute quary
        $query = $this->db->query($sql,array($book_subject));
        // return a result

        return $query->result();

    }

    function getSubject(){
        // PREPARE QUERY get a list of subjects
        $sql = 'SELECT DISTINCT `subject` FROM `books` ';
        // execute quary
        $query = $this->db->query($sql);
        // return a result
        return $query->result();
    }
    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }
}