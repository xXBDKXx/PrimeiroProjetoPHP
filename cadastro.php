<?php
    //Classe Cadastro
    class Cadastro
    {
        //Declaração de Variaveis
        private int $cpf;
        private string $nome;
        private string $telefone;
        private string $endereco;
        private string $cidade;

        public function __construct($cpf, $nome, $telefone, $endereco, $cidade)
        {
            $this->setCPF($cpf);
            $this->setNome($nome);
            $this->setTelefone($telefone);
            $this->setEndereco($endereco);
            $this->setCidade($cidade);
        }//Fim do Construtor

        //Métodos consultores e de consulta
        public function getCPF()
        {
            return $this->cpf;
        }//Fim do Método

        public function getNome()
        {
            return $this->nome;
        }//Fim do Método

        public function getTelefone()
        {
            return $this->telefone;
        }//Fim do Método

        public function getEndereco()
        {
            return $this->endereco;
        }//Fim do Método

        public function getCidade()
        {
            return $this->cidade;
        }//Fim do Método

        //Fim dos Gets
        //--------------------------

        public function setCPF($cpf)
        {
            $this->cpf = $cpf;
        }//Fim do Método

        public function setNome($nome)
        {
            $this->nome = $nome;
        }//Fim do Método

        public function setTelefone($telefone)
        {
            $this->telefone = $telefone;
        }//Fim do Método

        public function setEndereco($endereco)
        {
            $this->endereco = $endereco;
        }//Fim do Método

        public function setCidade($cidade)
        {
            $this->cidade = $cidade;
        }//Fim do Método

        //Fim dos Sets
        //----------------------------
        
        public function imprimir()
        {
            $msg = "\n\nCPF: ".$this->getCPF(). 
                    "\nNome: ".$this->getNome(). 
                    "\nTelefone: ".$this->getTelefone(). 
                    "\nEndereco: ".$this->getEndereco(). 
                    "\nCidade: ".$this->getCidade();
            return $msg;
        }//Fim do Metodo


        public function excluir()
        {
            $this->setCPF(0);
            $this->setNome("");
            $this->setTelefone("");
            $this->setEndereco("");
            $this->setCidade("");
            return "Dados Excluidos!";
        }//Fim do Metodo

    }//Fim da Classe

//Fim do Projeto
?>