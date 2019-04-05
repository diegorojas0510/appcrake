<?php
    require_once '../models/connection.php';
    require_once '../models/keys.php';
    class KeyDAO {
        public static function showLetters (){
            $conn = new Connection();

            $cont = $conn->executeQuery("SELECT * FROM clave");

            $conn->closeConnection();

            return $cont;
        }

            public static function searchLetter ($letter){
            $conn = new Connection();

            $cont = $conn->executeQuery("SELECT letter_key FROM clave WHERE letter = '".$letter."'");

            $conn->closeConnection();

            return $cont;
        }

    }

?>