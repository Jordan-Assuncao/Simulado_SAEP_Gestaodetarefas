<?php
class Servicos_model extends CI_Model {


    //Insere um novo registro
    //$cliente é contem os dados do form
    public function insert($servico){
        $this->db->insert('servico', $servico);
    }


}
?>