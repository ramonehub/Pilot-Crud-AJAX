<?php
class EquipeDAO {
    private $pdo;
    public function __construct($pdo){$this->pdo=$pdo;}
    public function listar(){
        return $this->pdo->query("SELECT * FROM equipe")->fetchAll(PDO::FETCH_ASSOC);
    }
}