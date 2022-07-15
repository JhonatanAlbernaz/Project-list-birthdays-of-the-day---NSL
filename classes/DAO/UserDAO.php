<?php

    require_once __DIR__."../../config/Banco.php";
    require_once __DIR__."../../models/User.php";

    class UserDAO{
        private static $instance;

        public static function getInstance(){
            if(self::$instance === null){
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function save(User $user){
            
            $stm = Banco::getInstance()->prepare("
                INSERT INTO aniversariantes(nome, dataNasc, funcao) 
                VALUES (:nome, :dataNasc, :funcao)
            ");

            $stm->bindParam('nome', $user->nome);
            $stm->bindParam('dataNasc', $user->dataNasc);
            $stm->bindParam('funcao', $user->funcao);

            $stm->execute();
        }

    }

?>