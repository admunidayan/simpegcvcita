 <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class Report_m extends CI_Model
 {

  public function __construct(){
           //load constructor CI_Model
   parent::__construct();

           //load database
   $this->load->database();
 }
 
 public function getAll() {
   $this->db->select('*');
   $this->db->from('data_pegawai');
   $query = $this->db->get();
   return $query->result();
 }
 
}
