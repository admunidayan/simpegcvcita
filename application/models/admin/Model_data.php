 <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 class Model_data extends CI_Model {
  function getData() {
    return $this->db->get('master_satuan_kerja');
  }
}
