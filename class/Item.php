<?php

    class Item
    {
        private $title;
        private $descricao;
        private $caminho;

        public function __construct(){}

        public function create($_title, $_descricao, $_caminho)
        {
            $this->title = $_title;
            $this->descricao = $_descricao;
            $this->caminho = $_caminho;
        }

        public function listarItem()
        {
           try 
           {
                include("assets/db/conn.php");

                $sql = "CALL psItem()";
                $data = $conn->query($sql)->fetchAll();

                return $data;
           } 
           catch (Exception $e) 
           {
               return false;
           }
        }
    }

?>