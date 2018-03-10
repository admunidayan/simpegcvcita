 <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 class Report_m extends CI_Model {
  function getData() {
    return $this->db->get('master_satuan_kerja');
  }
}
