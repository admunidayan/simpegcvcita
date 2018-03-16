<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Export_excel extends CI_Controller {
    
    function index()
    {
        $this->load->model('admin/Model_data');
        $d['data'] = $this->Model_data->getData()->result();
        $this->load->view('admin/layout', $d);
    }
}