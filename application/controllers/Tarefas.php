<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarefas extends CI_Controller {


	public function index()
	{
		$this->load->model("tarefas_model");
		$lista = $this->tarefas_model->buscaTodos();
		$dados = array("tarefas" => $lista);
		$this->load->view('welcome_message', $dados);
	}

	public function novo() {
		$tarefa = array(
			"cod_tarefa" => $this->input->post("cod_tarefa"),
			"cod_categoria" => $this->input->post("cod_categoria"),
			"nome" => $this->input->post("nome"),
			"previsao" => $this->input->post("previsao"),
			"texto" => $this->input->post("texto"),
			"valor" => $this->input->post("valor"),
			"cod_usuario_c" => $this->input->post("cod_usuario_c"),
			"data_c" => $this->input->post("data_c"),
			"cod_usuario_a" => $this->input->post("cod_usuario_a"),
			"data_a" => $this->input->post("data_a")
		);
		$this->load->model("tarefas_model");
		$this->tarefas_model->salva($tarefa);
		$this->load->view('tarefas/novo');
	}


//	public function gerarPDF() {
//		$this->load->library('Pdf');
//
//		$html = $this->load->view('pdf', FALSE, TRUE);
//		$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
//		$pdf->SetTitle('TITULO DO PDF');
//		$pdf->SetHeaderMargin(10);
//		$pdf->SetTopMargin(10);
//		$pdf->SetAuthor("Matheus Souza Santana");
//
//		$pdf->AddPage('L', false, false);
//		$pdf->writeHTML($html);
//		$pdf->Output('pdfexport.pdf', 'I');
//
//	}
}
