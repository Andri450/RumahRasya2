<?php 
 
class M_data extends CI_Model{
	function ambil_logo(){
		return $this->db->get('logo');
	}
    function ambil_sub_judul(){
        return $this->db->get('sub_judul');
    }
    function ambil_foto_heading(){
        return $this->db->get('foto_heading');
    }
    function ambil_isi_heading(){
        return $this->db->get('isi_heading');
    }
    function ambil_sub_judul_project(){
        return $this->db->get('sub_judul_project');
    }
    function ambil_media_project(){
        return $this->db->get('media_project');
    }

    function ubah_sub_judul($isi){
        $dats = array(
            'isi' => $isi,
        );

        $wh = array(
            'id_sub' => 1,
        );

        $this->db->where($wh);
        $this->db->update('sub_judul', $dats);
    }

    function ubah_logo($file){
        $dats = array(
            'logo' => $file,
        );

        $wh = array(
            'id' => 1,
        );

        $this->db->where($wh);
        $this->db->update('logo', $dats);
    }
}

?>