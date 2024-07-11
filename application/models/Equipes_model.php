<?php
class Equipes_model extends CI_Model {

    /*public function get_veiculos(){
        $query = $this->db->get('veiculos');
        return $query->result();
    }*/

    //Insere um novo registro
    //$cliente é contem os dados do form
    public function insert($equipe){
        $this->db->insert('equipe', $equipe);
    }

    /*public function get_veiculo($id){
        $this->db->where('id', $id);
        $query = $this->db->get('veiculo');
        return $query->result()[0];
    }*/

    /*public function update($data){
        $this->db->where('id', $data['id']);
		$this->db->update('veiculo', $data);
    }*/

    public function delete($id){
        $this->db->where('idequipe', $id);
        $this->db->delete('equipe');
    }
}
?>