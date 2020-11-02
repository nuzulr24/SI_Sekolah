<?php
class Administrator extends CI_Controller{
    function __construct(){
        parent:: __construct();
    }
function logout(){
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}
    ?>