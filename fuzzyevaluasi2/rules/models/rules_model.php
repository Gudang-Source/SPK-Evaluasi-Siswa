<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Rules_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('rules', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }
    
    function get_one($rule_id) {
        $this->db->where('rule_id', $rule_id);
        $result = $this->db->get('rules');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function save() {
           $data = array(
        
            'rulename' => $this->input->post('rulename', TRUE),
           
            'prestasi' => $this->input->post('prestasi', TRUE),
           
            'kegiatan' => $this->input->post('kegiatan', TRUE),
           
            'kehadiran' => $this->input->post('kehadiran', TRUE),
           
            'fuzzy_output' => $this->input->post('fuzzy_output', TRUE),
           
            'datetime' => $this->input->post('datetime', TRUE),
           
        );
        $this->db->insert('rules', $data);
    }

    function update($rule_id) {
        $data = array(
        'rule_id' => $this->input->post('rule_id',TRUE),
       'rulename' => $this->input->post('rulename', TRUE),
       
       'prestasi' => $this->input->post('prestasi', TRUE),
       
       'kegiatan' => $this->input->post('kegiatan', TRUE),
       
       'kehadiran' => $this->input->post('kehadiran', TRUE),
       
       'fuzzy_output' => $this->input->post('fuzzy_output', TRUE),
       
       'datetime' => $this->input->post('datetime', TRUE),
       
        );
        $this->db->where('rule_id', $rule_id);
        $this->db->update('rules', $data);
        /*'datetime' => date('Y-m-d H:i:s'),*/
    }

    function delete($rule_id) {
        $this->db->where('rule_id', $rule_id);
        $this->db->delete('rules'); 
       
    }

    //Update 07122013 SWI
    //untuk Array Dropdown
    function get_dropdown_array($value){
        $result = array();
        $array_keys_values = $this->db->query('select rule_id, '.$value.' from rules order by rule_id asc');
        $result[0]="-- Pilih Urutan rule_id --";
        foreach ($array_keys_values->result() as $row)
        {
            $result[$row->rule_id]= $row->$value;
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
