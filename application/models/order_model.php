<?php



/**
 * Class Order_model (debug and test Report)
 *  depug no 5 (increase the number as u debug again and review the code)
 *
 * -------------------------------------------------------------------
 *  * المشكله حاليا إن ال order no بيتكرر مع كل رفرش و بيضيف حجات جديده
 * بس الأوردر الجديد مش بينزل في جدول ال odetails
 * we need a solution 14/4/2015 at 1:05 AM
 * -------------------------------------------------------------------
 *solved 18/4/2015 at 12:40 PM
 */
class Order_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function editShipingData($userid , $st , $city , $state , $zip){
       // $ono = null ;
        if($this->isOrderExists()){
            $ono = $this->session->userdata('OrderNo');
        }else{
            $ono = $this->setOrder();
        }
        // start editing the order details
        $sql = 'update `orders` set `shipAddress`=?,`shipCity`=?,`shipState`=?,`shipZip`= ? where `ono` = ? and `userid` = ?';
        $query = $this->db->query($sql,array($st,$city,$state,$zip,$ono,$userid));
        if($this->db->affected_rows() >0){
            return true;
        }else{
            return false;
        }
    }
    /**
     * The next methods are made to create a new order in `order` table
     * and set that order details in `odetails` table
     * so we will made it into 2 functions 'setOrder'
     * and 'createODetails' table
     **/

    /**
     *              setOrder()
     * `setOrder` method will return the ono (order no.)
     * of that item in cart
     */
    private function setOrder(){
        //get user id from session
        $userid =$this->session->userdata('userid');

        // ono no
        $ono = $this->generateOno();
        $this->session->set_userdata('OrderNo', $ono);

        // get data of member
        $sql = 'SELECT `zip`,`state`,`city`,`address` from `members` where `userid` = ?';
        $quary = $this->db->query($sql , array($userid));

        foreach($quary->result() as $row){
            $shipCity = $row->city;
            $shipAddress = $row->address;
            $shipState = $row->state;
            $shipZip = $row->zip;
        }

        // prepare statement to to set data of member to order table
        $sql2 = 'insert into `orders` VALUES (?,?,?,?,?,?,?,?)';
        //execute $sql2

        $quary2 = $this->db->query($sql2,array($userid , $ono , time() , NULL ,$shipAddress , $shipCity , $shipState , $shipZip ));

        return $ono;
    }

    /**
     * This will check if there are any orders exists in orders for that user id
     */
    private function isOrderExists(){
        //get user id from session
        $userid =$this->session->userdata('userid');

        // prepare and execute the order
        $sql = 'select `ono` from orders where `userid` = ?';
        $query = $this->db->query($sql,array($userid));
        if($query->num_rows >0){
            return true;
        }else{
            return false;
        }
    }
    /**
     *          createODetails()
     * get ono from setorder function
     * get the isbn and qty of the user from cart
     * insert them in odetails with other odetails fields from other
     * tables
     */
    public function createODetails(){
        //get user id from session
        $userid =$this->session->userdata('userid');

        // we will check if there are any orders exists in orders for that user id
        // if there is an order we will take order no only from user session , if no order exists ,
        /// we will create a new order and set ono in userdata
        if($this->isOrderExists()){
            $ono = $this->session->userdata('OrderNo');

        }else{
            // get order number
            $ono = $this->setOrder();

        }

        // prepare and execute sql to gett data from cart
        $sql ='select * from `cart` `c`, `books` `b` where c.`userid` = ? and c.`isbn` = b.`isbn` ';
        $query = $this->db->query($sql, array($userid));

        foreach($query->result() as $row){
            $qty = $row->qty;
            $isbn = $row->isbn;
            $price = $row->price;

            // insert data into order details
            // insert statement
            $sql1 = 'insert into `odetails` VALUES (?,?,?,?)';
            $query1 = $this->db->query($sql1, array($ono , $isbn , $qty , $price));

        }

        // removing cart of user
        $sql2 = 'delete from `cart` where `userid` = ?';
        $query1 = $this->db->query($sql2, array($userid));
    }
    /**
     *          getODetails()
     * get ono from user in checkorderstate_view
     * get ISBN ,Title,  $,Qty from books and odetails
     * tables
     */
    public function getODetails(){
        //get user id from session
        $userid =$this->session->userdata('userid');
        $ono =$this->input->post('reqOrderNo_checkOrderStatus');


        // prepare and execute sql to gett data from cart
        $sql ='select * from `odetails` `od`, `books` `b`, `orders` `o` where o.`userid` = ? and od.`ono` = o.`ono` and od.`isbn` = b.`isbn` and od.`ono` = ?';
        $query = $this->db->query($sql, array($userid , $ono));

        return $query->result();
    }

    /**
     *           generateOno()
     * generate random number between 1-99999 not in order table
     */
    private function generateOno(){
        $random = null;
        $flag = true;
        while($flag == true){
            $random = rand(1,99999);
            $sql = 'select * from `orders` where `ono` = ?';
            $query = $this->db->query($sql , array($random));
            if(!$query->result()){
               $flag = false;
            }
        }
        return $random;

    }

    /**
     * this function returns a query result contains
     * isbn, ono , price , qty , title ,
     * subject , shipAddress , shipCity , shipped , shipState
     * , shipZip ,fname , lname , zip , address, city , state
     *
     */
    public function invoiceData(){
        /// this function should return all data needed to use option 6
        // which is invoice

        // get userid from session
        $userid=$this->session->userdata('userid');


        // prepare query to list all orders of that member
        $sql ='select od.`isbn` , od.`ono` , od.`price` , od.`qty` , b.`title`, b.`subject` , o.`shipAddress` , o.`shipCity` , o.`shipped` , o.`shipState` , o.`shipZip` ,m.`fname` , m.`lname` , m.`zip` , m.`address`, m.`city` , m.`state`
                from `odetails` `od` , `books` `b` , `members` `m`, `orders` `o`
                where m.`userid` = ? AND
                    o.ono = od.ono AND
                    od.isbn = b.isbn and
                    o.userid = m.userid';
        // execute that query
        $query = $this->db->query($sql,array($userid));

        if($query->num_rows >= 0){
            return $query;
        }else{
            return null;
        }
    }
    /**
     *          getShippingDetails()
     * this function returns a query result contains
     *  shipAddress , shipCity , shipped , shipState
     * , shipZip , zip , address, city , state
     *
     */
    public function getShippingDetails($ono){

        // get userid from session
        $userid=$this->session->userdata('userid');


        // prepare query to list all orders of that member
        $sql ='select o.`shipAddress` ,o.`ono`, o.`shipCity` , o.`shipped` , o.`shipState` , o.`shipZip` , m.`zip` , m.`address`, m.`city` , m.`state`
                from `members` `m`, `orders` `o`
                where m.`userid` = ? AND
                    o.ono = ? AND
                    o.userid = m.userid';
        // execute that query
        $query = $this->db->query($sql,array($userid,$ono));

        if($query->num_rows >= 0){
            return $query->row();
        }else{
            return null;
        }
    }

    /**
     * this function should return all orders by the member (userid)
     */
    public function getOrdersOfMember(){


        // get userid from session

        $userid=$this->session->userdata('userid');


        // prepare query to list all orders of that member
        $sql ='select * from `orders` where `userid` = ?';
        // execute that query
        $query = $this->db->query($sql,array($userid));

        if($query->num_rows >= 0){
            return $query->result();
        }else{
            return null;
        }

    }

}