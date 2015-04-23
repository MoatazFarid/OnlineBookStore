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

    /**this function returns all cart data for certein user id
     * ISBN        Title                                                $  Qty   Total
     * thats what we need
     * @param $userid
     * @return result or null

     */
    function getCartData($userid){
        $sql = 'select c.`isbn` , b.`title` , b.`price` , c.`qty` from `cart` `c` , `books` `b` where c.`isbn` = b.`isbn` and c.`userid` = ?  ';
        $query = $this->db->query($sql,array($userid));

        if($query->num_rows > 0 ){
          return $query->result() ;
        }else{
            return null;
        }


    }
    /**
     * This function chec
     * @param $userid
     * @param $isbn
     * @param $qty
     * @return bool
     */
    function addToCart($userid,$isbn,$qty){
        // check that the book isn't in cart
        if($this->isInCart($isbn)){
            $oldqty = $this->getOldQuantity($isbn);
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

    /**
     * this function checks if this isbn is cart
     * @return bool
     */
    function isInCart($isbn){
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

    /**
     * This function get the old Quantity of certain ISBN in Cart
     * @param $isbn
     * @return mixed
     */
    function getOldQuantity($isbn){

        // prepare query get cart details
        $sql = 'select * from `cart` where `isbn` = ?';
        // execute query
        $query = $this->db->query($sql ,array($isbn));

        $row = $query->row();
        return $row->qty;

    }


    /**
     * This function is  used to Change the Quantity of given ISBN
     * @param $isbn
     * @param $qty
     * @return bool
     */
    function changeQty($isbn,$qty){
//        $userid = $this->session->userdata('userid');

        $sql = 'update `cart` set `qty` = ? where `isbn`  = ? ';
        $query  = $this->db->query($sql,array($qty,$isbn));

        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }

    }

    /**
     * This function deletes a given row with such ISBN param
     * @param $isbn
     * @return bool
     */
    function deleteFromCart($isbn){
        $userid = $this->session->userdata('userid');

        $sql = 'delete from `cart` where `isbn` = ?';
        $query = $this->db->query($sql,array($isbn));

        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }



    /**un used codeeee
     * DRAFFFFFT
     * @return bool
     */
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