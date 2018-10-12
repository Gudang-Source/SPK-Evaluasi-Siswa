<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Kelas_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('kelas', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }
    
    function get_one($id_kelas) {
        $this->db->where('id_kelas', $id_kelas);
        $result = $this->db->get('kelas');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function save() {
           $data = array(
        
            'nama_kelas' => $this->input->post('nama_kelas', TRUE),
           
            'tingkatan' => $this->input->post('tingkatan', TRUE),
           
            'id_walikelas' => $this->input->post('id_walikelas', TRUE),
           
            'datetime' => $this->input->post('datetime', TRUE),
           
        );
        $this->db->insert('kelas', $data);
    }

    function update($id_kelas) {
        $data = array(
        'id_kelas' => $this->input->post('id_kelas',TRUE),
       'nama_kelas' => $this->input->post('nama_kelas', TRUE),
       
       'tingkatan' => $this->input->post('tingkatan', TRUE),
       
       'id_walikelas' => $this->input->post('id_walikelas', TRUE),
       
       'datetime' => $this->input->post('datetime', TRUE),
       
        );
        $this->db->where('id_kelas', $id_kelas);
        $this->db->update('kelas', $data);
        /*'datetime' => date('Y-m-d H:i:s'),*/
    }

    function delete($id_kelas) {
        $this->db->where('id_kelas', $id_kelas);
        $this->db->delete('kelas'); 
       
    }

    //Update 07122013 SWI
    //untuk Array Dropdown
    function get_dropdown_array($value){
        $result = array();
        $array_keys_values = $this->db->query('select id_kelas, '.$value.' from kelas order by id_kelas asc');
        $result[0]="-- Pilih Urutan id_kelas --";
        foreach ($array_keys_values->result() as $row)
        {
            $result[$row->id_kelas]= $row->$value;
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
