<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    if(!function_exists('setting'))
    {
        function setting($key)
        {
            $CI =& get_instance();

            $query = $CI->db->select($key)->where('id_sistem',1)->get('setting');

            if($query->num_rows() != 1){

                return NULL;
            }else{
                $result = $query->row();

                return $result->$key;
            }
        }
    }
