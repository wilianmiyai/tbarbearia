<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Contato_model', 'contato');
    }

    public function index() {
        $this->load->view('contatoCadastro');
    }

    public function inserir() {
        //nome dos dados no vetor devem ser os mesmos da tabela carro
        if (isset($_POST['salvar'])) {
        $dados['idservico'] = $this->input->post('idservico');
        $dados['nome'] = $this->input->post('nome');
        $dados['dataTime'] = $this->input->post('dataTime');
        $dados['tipoServico'] = $this->input->post('tipoServico');
        $dados['telefone'] = $this->input->post('telefone');
        $dados['corte'] = $this->input->post('corte');
        //chamando o método inserir($) do model carro
        $result = $this->contato->inserir($dados);
    }
    }

    public function atualizar() {
        //este é o lado do BD = este é o lado do Form
        $dados['idservico'] = $this->input->post('idservico');
        $dados['nome'] = $this->input->post('nome');
        $dados['dataTime'] = $this->input->post('dataTime');
        $dados['tipoServico'] = $this->input->post('tipoServico');
        $dados['telefone'] = $this->input->post('telefone');
        $dados['corte'] = $this->input->post('corte');
        if ($this->contato->atualizar($dados) == true) {
            //falta implementar as msgs de notificações
            $this->session->set_tempdata('msg', 'atualizado', 5);
            redirect('contato');
        } else {
            $this->session->set_tempdata('msg', 'erroAtualizar', 5);
            redirect('contato');
        }
    }

    public function excluir($id) {
        $result = $this->carro->deletar($id);
        if ($result == true) {
            //redireciona para o controller pessoa
            $this->session->set_tempdata('msg', 'deletado', 5);
            redirect('contato');
        } else {
            $this->session->set_tempdata('msg', 'erroDeletar', 5);
            redirect('contato');
        }
    }

}
