<?php
require_once __DIR__."/../"
// Adicione aqui os includes e/ou requires


// Função que manipula as requsições do servidor
function handleRequest(){
    //Seu código aqui
    if(isset($_POST['action'])){
        switch($_POST['action']){
            case 'add';
            if(!empty($_POST['description'])){
                addTask($_POST['description']);
            }
            break;
        case 'toggle':
            return
            break;
        }
    }
}

// Função que exibe as tasks na view
function showTasks(){
    // Seu código aqui
}
?>