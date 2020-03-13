<?php

class tarefas_model extends CI_Model
{
	public function buscaTodos()
	{
		return $this->db->get("cad_tarefa")->result_array();

	}
	public function salva($tarefa){
		$this->db->insert("cad_tarefa", $tarefa);
	}

}

?>
