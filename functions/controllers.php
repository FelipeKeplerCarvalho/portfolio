<?php


if(!defined('CONTROLLERS_DIR')){
    define('CONTROLLERS_DIR',FUNCTIONS_DIR . '/controllers');
}


//Carrega todos os arquivos no diretório


$arquivos = scandir(CONTROLLERS_DIR);

foreach($arquivos as $arquivo){
    if ($arquivo !== '.' && $arquivo !== '..'){ // A função scandir() retorna dois itens especiais: . (diretório atual) e .. (diretório pai). Estes precisam ser ignorados.
        require_once(CONTROLLERS_DIR .'/'. $arquivo);
    }
}



$arquivos = scandir(CONTROLLERS_DIR);
