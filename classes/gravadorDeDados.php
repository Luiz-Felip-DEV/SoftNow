<?php 
    class gravadorDeDados{

        public function gravarDados($dados){
            $file = 'dados.txt';
            file_put_contents($file, $dados. PHP_EOL, FILE_APPEND);
        }
    }
?>