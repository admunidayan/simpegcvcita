<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Export_excel extends CI_Controller {
    
    function index()
    {
        $this->load->model('model_data');
        $d['data'] = $this->model_data->getData()->result();
        $this->load->view('layout', $d);
    }
}