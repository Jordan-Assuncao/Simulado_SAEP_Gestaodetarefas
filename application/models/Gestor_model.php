<?php
class Gestor_model extends CI_Model {

    /*public function get_clientes(){
        $query = $this->db->get('clientes');
        return $query->result();
    }*/

    //Insere um novo registro
    //$cliente é contem os dados do form
    public function insert($gestor){
        $this->db->insert('gestor', $gestor);
    }

    public function login($email, $senha) {
        // Query to fetch user by email and password
        $this->db->where('email', $email);
        $this->db->where('senha', $senha); // Directly comparing the password
        $query = $this->db->get('gestor');

        if ($query->num_rows() == 1) {
            return $query->row(); // Return the user object
        } else {
            // No user found or password mismatch
            return false;
        }
    }


    public function get_equipe_gestor($idgestor) {
        // Consulta para recuperar os carros do cliente
        $this->db->select('*');
        $this->db->from('equipe');
        $this->db->where('gestor_idgestor', $idgestor);
        $query = $this->db->get();

        // Verificar se há resultados
        if ($query->num_rows() > 0) {
            // Retornar os resultados como um array de objetos
            return $query->result();
        } else {
            // Se não houver carros associados a esse cliente, retornar um array vazio
            return array();
        }
    }
}

?>