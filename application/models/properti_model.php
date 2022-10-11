<?php
Class properti_model extends CI_Model
{
    function AmbilProperti()
    {
        $res = $this->db->get('properti');
        return $res;
    }

    function CekProperti($id)
    {
        $dat = array(
            'id' => $id,
        );

        $res = $this->db->get_where('properti', $dat);
        return $res;
    }
    
    function TambahProperti($id, $x, $y)
    {
        $dat = array(
            'id' => $id,
            'xPos' => $x,
            'yPos' => $y,
        );

        $this->db->insert('properti',$dat);
        return $this->db->error();
    }

    function UbahProperti($id, $x, $y)
    {
        $this->db->set('xPos', $x);
        $this->db->set('yPos', $y);
        $this->db->where('id', $id);
        $this->db->update('properti');
        return $this->db->error();
    }

    // function TampilMahasiswa() 
    // {
    //     $this->db->order_by('nim', 'ASC');
    //     return $this->db->from('mahasiswa')
    //       ->get()
    //       ->result();
    // }

    // function Getnim($nim = '')
    // {
    //   return $this->db->get_where('mahasiswa', array('nim' => $nim))->row();
    // }

    // function HapusMahasiswa($nim)
    // {
    //     $this->db->delete('mahasiswa',array('nim' => $nim));
    // }
}
?>