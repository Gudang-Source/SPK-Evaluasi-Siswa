<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Evaluasi_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('evaluasi', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }
    
    function get_one($id_evaluasi) {
        $this->db->where('id_evaluasi', $id_evaluasi);
        $result = $this->db->get('evaluasi');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function save() {
           $data = array(
        
            'id_siswa' => $this->input->post('id_siswa', TRUE),
           
            'prestasi' => $this->input->post('prestasi', TRUE),
           
            'keaktifan' => $this->input->post('keaktifan', TRUE),
           
            'kehadiran' => $this->input->post('kehadiran', TRUE),
           
            'datetime' => $this->input->post('datetime', TRUE),
           
        );
        $this->db->insert('evaluasi', $data);
    }

    function update($id_evaluasi) {
        $data = array(
        'id_evaluasi' => $this->input->post('id_evaluasi',TRUE),
       'id_siswa' => $this->input->post('id_siswa', TRUE),
       
       'prestasi' => $this->input->post('prestasi', TRUE),
       
       'keaktifan' => $this->input->post('keaktifan', TRUE),
       
       'kehadiran' => $this->input->post('kehadiran', TRUE),
       
       'datetime' => $this->input->post('datetime', TRUE),
       
        );
        $this->db->where('id_evaluasi', $id_evaluasi);
        $this->db->update('evaluasi', $data);
        /*'datetime' => date('Y-m-d H:i:s'),*/
    }

    function delete($id_evaluasi) {
        $this->db->where('id_evaluasi', $id_evaluasi);
        $this->db->delete('evaluasi'); 
       
    }

    //Update 07122013 SWI
    //untuk Array Dropdown
    function get_dropdown_array($value){
        $result = array();
        $array_keys_values = $this->db->query('select id_evaluasi, '.$value.' from evaluasi order by id_evaluasi asc');
        $result[0]="-- Pilih Urutan id_evaluasi --";
        foreach ($array_keys_values->result() as $row)
        {
            $result[$row->id_evaluasi]= $row->$value;
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
