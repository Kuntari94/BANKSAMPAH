<?php 
	class M_formulir extends CI_Model{
		public $table = 't_nasabah';
	
	

	function input_formulir($data){
		
		//return $this->db->get()->result();
		return $this->db->insert('t_nasabah',$data);

	}

	function code_rek(){
		$this->db->select('Right(t_nasabah.nomor_rekening,3) as rek',FALSE);
		$this->db->order_by('nomor_rekening','DESC');
		$this->db->limit(1);
		$query=$this->db->get('t_nasabah');
		if($query->num_rows()>0){
			$data=$query->row();
			$rek=intval($data->rek)+1;
		}
		else{
			$rek=1;
		}
		$rekmax= str_pad($rek,4,"0",STR_PAD_LEFT);
		$rekjadi=$rekmax;
		return $rekjadi;
	}

	function get_last_id($tahun=""){
		if(!isset($tahun)OR $tahun=="")
			$tahun=date('y');
		return $this->db->query('SELECT * FROM `t_nasabah` WHERE nomor_rekening like "'.$tahun.'%" Order by nomor_rekening	 DESC limit 1');

	}


	function buatRandomString($length = 10) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
	}

}