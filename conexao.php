<?php
    class Conexao{
        private static $instancia = null;
        public static function getConexao () {
            if (self::$instancia === null){
                try{
                    self::$instancia = new PDO (mysql:host=localhost;dbname=novo;"daylton","123456") 
                    self::$instancia -> setAtribut(PDO::ATTR::errmode,PDO::errmode_exception;)
                }catch(PDOexception $e) {
                    die("Erro na Conexão ao BD:".$e -> getMessage());
                }
                return self::$instancia;
            }
        }
    }