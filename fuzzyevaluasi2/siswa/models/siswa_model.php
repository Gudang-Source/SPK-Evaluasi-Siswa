<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


class Siswa_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_all($limit, $uri) {

        $result = $this->db->get('siswa', $limit, $uri);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return array();
        }
    }
    
    function get_one($id_siswa) {
        $this->db->where('id_siswa', $id_siswa);
        $result = $this->db->get('siswa');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function save() {
           $data = array(
        
            'nama_siswa' => $this->input->post('nama_siswa', TRUE),
           
            'id_kelas' => $this->input->post('id_kelas', TRUE),
           
            'j_kelamin' => $this->input->post('j_kelamin', TRUE),
           
            'alamat' => $this->input->post('alamat', TRUE),
           
            'telp' => $this->input->post('telp', TRUE),
           
            'datetime' => $this->input->post('datetime', TRUE),
           
        );
        $this->db->insert('siswa', $data);
    }

    function update($id_siswa) {
        $data = array(
        'id_siswa' => $this->input->post('id_siswa',TRUE),
       'nama_siswa' => $this->input->post('nama_siswa', TRUE),
       
       'id_kelas' => $this->input->post('id_kelas', TRUE),
       
       'j_kelamin' => $this->input->post('j_kelamin', TRUE),
       
       'alamat' => $this->input->post('alamat', TRUE),
       
       'telp' => $this->input->post('telp', TRUE),
       
       'datetime' => $this->input->post('datetime', TRUE),
       
        );
        $this->db->where('id_siswa', $id_siswa);
        $this->db->update('siswa', $data);
        /*'datetime' => date('Y-m-d H:i:s'),*/
    }

    function delete($id_siswa) {
        $this->db->where('id_siswa', $id_siswa);
        $this->db->delete('siswa'); 
       
    }

    //Update 07122013 SWI
    //untuk Array Dropdown
    function get_dropdown_array($value){
        $result = array();
        $array_keys_values = $this->db->query('select id_siswa, '.$value.' from siswa order by id_siswa asc');
        $result[0]="-- Pilih Urutan id_siswa --";
        foreach ($array_keys_values->result() as $row)
        {
            $result[$row->id_siswa]= $row->$value;
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
    
    function get_one($nim) {
        $this->db->where('nim', $nim);
        $result = $this->db->get('siswa');
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return array();
        }
    }

    function save() {
           $data = array(
        
            'nama_siswa' => $this->input->post('nama_siswa', TRUE),
           
            'id_kelas' => $this->input->post('id_kelas', TRUE),
           
            'j_kelamin' => $this->input->post('j_kelamin', TRUE),
           
            'alamat' => $this->input->post('alamat', TRUE),
           
            'telp' => $this->input->post('telp', TRUE),
           
            'datetime' => $this->input->post('datetime', TRUE),
           
        );
        $this->db->insert('siswa', $data);
    }

    function update($nim) {
        $data = array(
        'nim' => $this->input->post('nim',TRUE),
       'nama_siswa' => $this->input->post('nama_siswa', TRUE),
       
       'id_kelas' => $this->input->post('id_kelas', TRUE),
       
       'j_kelamin' => $this->input->post('j_kelamin', TRUE),
       
       'alamat' => $this->input->post('alamat', TRUE),
       
       'telp' => $this->input->post('telp', TRUE),
       
       'datetime' => $this->input->post('datetime', TRUE),
       
        );
        $this->db->where('nim', $nim);
        $this->db->update('siswa', $data);
        /*'datetime' => date('Y-m-d H:i:s'),*/
    }

    function delete($nim) {
        $this->db->where('nim', $nim);
        $this->db->delete('siswa'); 
       
    }

    //Update 07122013 SWI
    //untuk Array Dropdown
    function get_dropdown_array($value){
        $result = array();
        $array_keys_values = $this->db->query('select nim, '.$value.' from siswa order by nim asc');
        $result[0]="-- Pilih Urutan nim --";
        foreach ($array_keys_values->result() as $row)
        {
            $result[$row->nim]= $row->$value;
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
