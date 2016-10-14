<?php
class Usuario {

    private $id;
    private $nome;
    private $email;
    private $senha;

    private $pdo;

    public function __construct($i = null) {
        try {
            $this->pdo = new PDO("mysql:dbname=blog;host=localhost","root","");

        } catch(PDOException $e){
            echo "FALHOU: ".$e->getMessage();
        }
        if (!empty($i)){
            $sql = "SELECT * FROM usuarios WHERE id = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($i));

            if($sql->rowCount()>0){
                $data = $sql->fetch();

                $this->id = $data['id'];
                $this->nome = $data['nome'];
                $this->email = $data['email'];
                $this->senha = $data['senha'];
            }
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setSenha($senha)
    {
        $this->senha = md5($senha);
    }

    public function salvar(){
        if(!empty($this->id)){
            $sql = "UPDATE usuarios SET email = ?, senha = ? , nome = ? where id = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($this->email, $this->senha,$this->nome, $this->id));
        } else {
            $sql = "INSERT INTO usuarios SET email = ?, senha = ? , nome = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($this->email, $this->senha,$this->nome));
        }
    }

    public function delete() {
        $sql = "DELETE FROM usuarios WHERE id = ?";
        $sql = $this->pdo->prepare($sql);
        $sql->execute(array($this->id));
    }


}









