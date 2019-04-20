<?php
// Conexao com  banco de dados

// $db = 'lifetime01';
// $usuario = lifetime01_add1;
// $senha = e24rh33b;

// Versão do servidor:
// MySQL 5.6

// Host para conexão:
// mysql.lifetime.com.br

// Host alternativo: mysql10-farm76.kinghost.net
// mysql10-farm76.kinghost.net

// Usuário para conexão:
// (mesmo nome da base de dados)

   abstract class conexaoDB{
        const USERNAME="lifetime01_add2";
        const PASSWORD="e24rh33B";
        const HOST="mysql10-farm76.kinghost.net";
        const DB="lifetime01";

        public function getConnection(){
            $username = self::USERNAME;
            $password = self::PASSWORD;
            $host = self::HOST;
            $db = self::DB;
            $connection = new PDO("mysql:dbname=$db;host=$host", $username, $password);
            return $connection;
        }

    }
?>




