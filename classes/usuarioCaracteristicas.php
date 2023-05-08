<?php 

    class usuarioCaracteristicas {

        private $nome;
        private $sobrenome;
        private $email;
        private $senha;
        private $telefone;


    // metodos get e set

    public function getNome(){
        return $nome;
    }

    public function setNome($novoNome){
        $nome = $novoNome;
    }

    public function getSobrenome(){
        return $sobrenome;
    }

    public function setSobrenome($novoSobrenome){
        $sobrenome = $novoSobrenome;
    }

    public function getEmail(){
        return $email;
    }

    public function setEmail($novoEmail){
        $email = $novoEmail;
    }

    public function getSenha(){
        return $senha;
    }

    public function setSenha($novaSenha){
        $senha = $novaSenha;
    }

    public function getTelefone(){
        return $telefone;
    }

    public function setTelefone($novoTelefone){
        $telefone = $novoTelefone;
    }
}

?>