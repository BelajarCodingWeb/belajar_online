<?php

/**
 *
 */
class data_sticker extends CI_Model
{

  function get_sticker()
  {
    $query = $this->db->get('sticker', 10);
      return $query->result();
  }

  function edit_sticker($id_sticker)
  {
      $id_sticker  =  array('id_sticker'=> $id_sticker);
      return $this->db->get_where('sticker',$id_sticker);
  }
  /* end fungsi sticker */
}


 ?>
