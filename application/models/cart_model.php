<?php
/**
 * Created by PhpStorm.
 * User: Moataz
 * Date: 4/12/2015
 * Time: 9:05 AM
 */
class cart_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function addToCart($userid,$isbn,$qty){
        // check that the book isn't in cart
        if($this->isInCart()){
            $oldqty = $this->getOldQuantity();
            // inserting those data into cart
            // prepare the query
            $sql = 'UPDATE `cart` SET `qty` = ? WHERE `userid` = ? AND `isbn` = ?';
            // execute the $query
            $query = $this->db->query($sql, array(($oldqty+$qty),$userid, $isbn));
        }else {

            // inserting those data into cart
            // prepare the query
            $sql = 'INSERT into `cart` VALUES (?,?,?)';
            // execute the $query
            $query = $this->db->query($sql, array($userid, $isbn, $qty));
        }
        return true;

    }

    function isInCart(){
        $isbn = $this->security->xss_clean($this->input->post('book_isbn'));
        // prepare query get cart details
        $sql = 'select * from `cart` where `isbn` = ?';
        // execute query
        $query = $this->db->query($sql ,array($isbn));

        //check that the result is 1 row and this mean that the book exists in cart
        if($query->num_rows == 1)
        {
            return true;
        }else{
            return false;
        }
    }

    function getOldQuantity(){

        $isbn = $this->security->xss_clean($this->input->post('book_isbn'));
        // prepare query get cart details
        $sql = 'select * from `cart` where `isbn` = ?';
        // execute query
        $query = $this->db->query($sql ,array($isbn));

        $row = $query->row();
        return $row->qty;

    }


    function template(){
        ///used as template for unused code
        $isbn = $this->security->xss_clean($this->input->post('book_isbn'));

        // prepare query get book details
        $sql = 'select * from `books` where `isbn` = ?';
        // execute query
        $query = $this->db->query($sql ,array($isbn));

        //get data from quary to and assign to variables
        //check that the result is 1 row
        if($query->num_rows == 1)
        {
            // get the data from the row
            $row = $query->row();
            $data = array(
                'author' => $row->author,
                'title' => $row->title,
                'subject' => $row->subject,
                'price' => $row->price
            );




            return true;
        }else{
            // If the previous process did not validate
            // then return false.
            return false;
        }
    }
}