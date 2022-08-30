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
    function ambil_sub_legal(){
        return $this->db->get('sub_legal');
    }
    function ambil_harga(){
        return $this->db->get('estimasi');
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

    function ubah_fotoHeader($file, $id){
        $dats = array(
            'foto' => $file,
        );

        $wh = array(
            'id_heading' => $id,
        );

        $this->db->where($wh);
        $this->db->update('foto_heading', $dats);
    }

    function ubah_isi_header($isi){
        $dats = array(
            'isi' => $isi,
        );

        $wh = array(
            'id' => 1,
        );

        $this->db->where($wh);
        $this->db->update('isi_heading', $dats);
    }

    function ubah_subProject($isi){
        $dats = array(
            'isi' => $isi,
        );

        $wh = array(
            'id' => 1,
        );

        $this->db->where($wh);
        $this->db->update('sub_judul_project', $dats);
    }

    function ubah_mediaProject($media, $id){
        $dats = array(
            'file_media' => $media,
        );

        $wh = array(
            'id_media' => $id,
        );

        $this->db->where($wh);
        $this->db->update('media_project', $dats);
    }

    function ubah_subLegal($isi){
        $dats = array(
            'isi_sub_legal' => $isi,
        );

        $wh = array(
            'id' => 1,
        );

        $this->db->where($wh);
        $this->db->update('sub_legal', $dats);
    }

    function ubah_harga($harga){
        $dats = array(
            'perMeter' => $harga,
        );

        $wh = array(
            'id' => 1,
        );

        $this->db->where($wh);
        $this->db->update('estimasi', $dats);
    }

    function upload_feedback($dats){
        $this->db->insert('feedback',$dats);
    }

}

?>