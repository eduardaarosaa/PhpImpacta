<?php

class Database
{
    protected $conn;

    public function __construct($host, $user, $senha, $banco)
    {
        $this->conn = mysqli_connect($host, $user, $senha, $banco);
    }

    public function query($sql)
    {
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function __destruct()
    {
        mysqli_close($this->conn);
    }
}


$sql = new Database('localhost', 'root', '', 'bd_agenda');
$lista = $sql->query('SELECT * FROM bd_agenda.usuarios');

var_dump(mysqli_fetch_assoc($lista));
