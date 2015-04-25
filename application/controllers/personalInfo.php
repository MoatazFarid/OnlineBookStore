<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
//session_start();
class PersonalInfo extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    function viewInfo(){
        $this->load->model('PerInfo_model');
        $data['info'] = $this->PerInfo_model->getInfo();
        $this->load->view('personalInfo_view',$data);
    }

    function editInfo(){
        $this->load->model('PerInfo_model');
        $this->PerInfo_model->editInfo();
        redirect('home');
    }
    function editRed(){
        $this->load->view('editPInfo_view');

    }
}
?>