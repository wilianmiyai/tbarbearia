<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contato_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function inserir($s) {
        return $this->db->insert('servico', $s); //'pessoa' é o nome da tabela
    }

    function deletar($idservico) {
        $this->db->where('$idservico', $idservico);
        return $this->db->delete('servico');
    }

    function editar($idservico) {
        $this->db->where('$idservico', $idservico);
        $result = $this->db->get('servico');
        return $result->result();
    }

    function atualizar($data) {
        $this->db->where('$idservico', $data['$idservico']);
        $this->db->set($data);
        return $this->db->update('servico');
    }

    function listar() {
        $this->db->select('*');
        $this->db->from('servicos');
        $this->db->order_by('nome','ASC');
        $query = $this->db->get();
        return $query->result();
    }

}