<?php

    session_start();

   $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';

    $nome = $_POST['name'];
    $idade = $_POST['idade'];
   
    if(empty($nome)){
        $_SESSION['mensagem de erro'] = "nome não pode ser vazio";
        return;
    }

    if(strlen($nome) < 3){
        echo "o nome deve conter mais que 3 caracter";
        return;
    }
    if(strlen($nome) > 40){
        echo "nome digitado excede o maximo permitido";
        return;
    }

    if(empty($idade)){
        echo "por favor informe a idade do competidor";
        return;
    }
    if(!is_numeric($idade)){
        echo "informe a sua idade no formato numerico";
        return;
    }
    if($idade < 6){
        echo "infelizmente a criança é muito nova para competir";
        return;
    }
    if($idade >= 100){
        echo "Parabens por viver ate os 100 anos, mas você não poderá competir devido a sua idade";
        return;
    }

    if($idade >=6 && $idade <= 12){
    
        for($i =0; $i <= count($categorias); $i++){
            if($categorias[$i] == 'infantil')
                echo "O nadador ".$nome." compete na categoria ". $categorias[$i]; 
        }        
        
    }
    else if($idade >= 13 && $idade <= 18){
         for($i =0; $i <= count($categorias); $i++){
            if($categorias[$i] == 'adolescente')
                echo "O nadador ". $nome. " compete na categoria ". $categorias[$i]; 
        }   
    }
    else{
         for($i =0; $i <= count($categorias); $i++){
            if($categorias[$i] == 'adulto')
                echo "O nadador ". $nome. " compete na categoria ". $categorias[$i]; 
        }   
    }
