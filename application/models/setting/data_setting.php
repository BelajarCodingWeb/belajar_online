<?php
/**
 *
 */
class data_setting extends CI_Model
{

  function get_setting()
  {
    $query = $this->db->get('setting', 1);
      return $query->result();
  }
}


 ?>
