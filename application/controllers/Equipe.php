<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipe extends CI_Controller {

	public function index()
	{
		$this->listar();
	}

	public function cadastrar_equipe(){
        $this->load->library('session');
        $data['user_id'] = $this->session->userdata('user_id');
		$this->load->view('view_topo');
		$this->load->view('view_cadastrar_equipe', $data);
		$this->load->view('view_rodape');
	}

	public function salvar_nova_equipe(){
		$this->load->library('session');
        // Carregar modelo para acessar os carros do cliente
        $this->load->model('Gestor_model');
    
        $user_id = $this->session->userdata('user_id');
		//Carregando o Model Clientes
		$this->load->model('Equipes_model');

		//Chamando o método insert do Model passando os dados do form
		$this->Equipes_model->insert($this->input->post());
		$equipes_gestor = $this->Gestor_model->get_equipe_gestor($user_id);

        // Passar os carros para a view
        $data['equipes_gestor'] = $equipes_gestor;

        $this->load->view('view_topo');
        $this->load->view('view_logado', $data);
        $this->load->view('view_rodape');
	}

	public function deletar($id){
		$this->load->library('session');
        // Carregar modelo para acessar os carros do cliente
        $this->load->model('Gestor_model');
    
        $user_id = $this->session->userdata('user_id');
		$this->load->model("Equipes_model");
		$this->Equipes_model->delete($id);
		$equipes_gestor = $this->Gestor_model->get_equipe_gestor($user_id);

        // Passar os carros para a view
        $data['equipes_gestor'] = $equipes_gestor;

        $this->load->view('view_topo');
        $this->load->view('view_logado', $data);
        $this->load->view('view_rodape');

	}

	
}