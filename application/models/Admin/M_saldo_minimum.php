<?php
	class M_saldo_minimum extends CI_Model
	{
		public $table = 't_minim_saldo';

		public function __construct()
		{
			parent:: __construct();
		}

		function get_saldo(){
			return $this->db->get('t_minim_saldo')->result();
		}

		function get_saldo_by_id($id_min_saldo){
			$this->db->where('id_min_saldo',$id_min_saldo);
			return $this->db->get('t_minim_saldo')->row();
		}

		function edit_saldo($data,$id_min_saldo){
			$this->db->where('id_min_saldo',$id_min_saldo);
			return $this->db->update('t_minim_saldo',$data);
		}

	}
