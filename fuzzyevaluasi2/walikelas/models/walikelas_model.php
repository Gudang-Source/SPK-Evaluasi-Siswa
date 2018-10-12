<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Walikelas_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('walikelas', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }
    
    function get_one($id_walikelas) {
        $this->db->where('id_walikelas', $id_walikelas);
        $result = $this->db->get('walikelas');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function save() {
           $data = array(
        
            'nik_walikelas' => $this->input->post('nik_walikelas', TRUE),
           
            'nama_walikelas' => $this->input->post('nama_walikelas', TRUE),
           
            'jab_fungsional' => $this->input->post('jab_fungsional', TRUE),
           
            'guru_matpel' => $this->input->post('guru_matpel', TRUE),
           
            'datetime' => $this->input->post('datetime', TRUE),
           
        );
        $this->db->insert('walikelas', $data);
    }

    function update($id_walikelas) {
        $data = array(
        'id_walikelas' => $this->input->post('id_walikelas',TRUE),
       'nik_walikelas' => $this->input->post('nik_walikelas', TRUE),
       
       'nama_walikelas' => $this->input->post('nama_walikelas', TRUE),
       
       'jab_fungsional' => $this->input->post('jab_fungsional', TRUE),
       
       'guru_matpel' => $this->input->post('guru_matpel', TRUE),
       
       'datetime' => $this->input->post('datetime', TRUE),
       
        );
        $this->db->where('id_walikelas', $id_walikelas);
        $this->db->update('walikelas', $data);
        /*'datetime' => date('Y-m-d H:i:s'),*/
    }

    function delete($id_walikelas) {
        $this->db->where('id_walikelas', $id_walikelas);
        $this->db->delete('walikelas'); 
       
    }

    //Update 07122013 SWI
    //untuk Array Dropdown
    function get_dropdown_array($value){
        $result = array();
        $array_keys_values = $this->db->query('select id_walikelas, '.$value.' from walikelas order by id_walikelas asc');
        $result[0]="-- Pilih Urutan id_walikelas --";
        foreach ($array_keys_values->result() as $row)
        {
            $result[$row->id_walikelas]= $row->$value;
        }
        return $result;
    }

    //Update 30122014 SWI
    //untuk Array Dropdown dari database yang lain
    function get_drop_array($db,$key,$value){
        $result = array();
        $array_keys_values = $this->db->query('select '.$key.','.$value.' from '.$db.' order by '.$key.' asc');
        $result[0]="-- Pilih ".$value." --";
        foreach ($array_keys_values->result() as $row)
        {
            $result[$row->$key]= $row->$value;
        }
        return $result;
    }
    
}
?>
