<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestor extends CI_Controller {

	public function index()
	{	$this->load->library('session');
        $data['error'] = $this->session->flashdata('error');
		$this->load->view('view_topo');
		$this->load->view('view_home', $data);
		$this->load->view('view_rodape');
	}

	public function cadastrar(){
		$this->load->view('view_topo');
		$this->load->view('view_cadastrar_cliente');
		$this->load->view('view_rodape');
	}

	public function salvar_novo_gestor(){

		//Carregando o Model Clientes
		$this->load->model('Gestor_model');

		//Chamando o método insert do Model passando os dados do form
		$this->Gestor_model->insert($this->input->post());

		//Redirecionando para a home
		header("Location: index");
	}

	public function login() {
		//carregar sessão
		$this->load->library('session');

		// Load the Model Clientes
		$this->load->model('Gestor_model');
	
		// Get input data and sanitize
		$email = $this->input->post('email');
		$senha = $this->input->post('senha');
	
		// Call the login method of the model with sanitized data
		$gestor = $this->Gestor_model->login($email, $senha);
	
		if ($gestor) {
			$user_id = $gestor->idgestor;
			// User authenticated successfully, start a session
            $this->session->set_userdata('user_id', $gestor->idgestor);
            $this->session->set_userdata('email', $gestor->email);
			$this->session->set_userdata('nome', $gestor->nome);
			// Obter carros do cliente usando o ID do usuário
			$equipes_gestor = $this->Gestor_model->get_equipe_gestor($user_id);
        	// Passar os carros para a view
        	$data['equipes_gestor'] = $equipes_gestor;
			// Redirect to the dashboard or desired page
			$this->load->view('view_topo');
			$this->load->view('view_logado', $data);
			$this->load->view('view_rodape');
		} else {
			$data['msg']= "Usuario e senha incorretos!";
			// Authentication failed
			echo "Invalid Email or Password.";
			$this->session->set_flashdata('error', 'Invalid Email or Password');
			redirect('../Gestor/index');
			//header("Location: index");
		}
	}

	public function logout() {
        // Carregar a biblioteca de sessão
        $this->load->library('session');

        // Destruir a sessão
        $this->session->sess_destroy();

        // Redirecionar para a página de login (ou outra página)
        header("Location: index");
    }

	/*public function listar(){
		//Carregar o Model
		$this->load->model('Clientes_model');

		//Obter os dados resultantes de uma consulta SQL
		$data['clientes'] = $this->Clientes_model->get_clientes();
		
		// Chamando uma view para mostrar o resultado
		$this->load->view('view_topo');
		$this->load->view('view_listar',$data);
		$this->load->view('view_rodape');
	}

	public function editar($id){
		$this->load->model("Clientes_model");
		$data['cliente']=$this->Clientes_model->get_cliente($id);
		$this->load->view('view_topo');
		$this->load->view('view_editar_cliente',$data);
		$this->load->view('view_rodape');
	}

	public function salvar_cliente_editado(){
		$data = $this->input->post();
		$this->load->model("Clientes_model");
		$this->Clientes_model->update($data);
		$this->listar();
	}

	public function deletar($id){
		$this->load->model("Clientes_model");
		$this->Clientes_model->delete($id);
		header("Location: ../listar");
	}*/

	
}