<?php
    class Banco {
        private static $instance;

        public static function getInstance(){

            if(self::$instance === null) {
                self::$instance = new PDO("mysql:host=localhost;dbname=projetoNSL", "jhon", "Jhonatan.8806");
            }
            
            return self::$instance;
        }
    }
?>