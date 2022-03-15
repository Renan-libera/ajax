<?php

$NOME = $_REQUEST['nome'];
$ANO  =$_REQUEST['ano'];
$BEBIDA = $_REQUEST['bebida'];
$ANO_ATUAL = date('Y');
$ANO2 = date("Y", strtotime($ANO));

$ANO = $ANO_ATUAL - $ANO2;


if(empty($NOME) || empty($ANO) || empty($BEBIDA)){
    $dados = array(
        "tipo" => 'error',
        "mensagem" => 'existem campos obrigatórios não preenchidos'
    );
} else {

    if($ANO >= 18 && $BEBIDA == "1"){
        $dados = array(
            "mensagem" => 'Você pode essa consumir bebida',
            "debug" => $ANO2
        );
    } else {
        $dados = array(
            "mensagem"=> 'Você não pode consumir bebida alcólica escolha outra opçâo'
        );
    }

    if($BEBIDA == "2"){
        $dados = array(
            "mensagem" => 'Você pode consumir essa bebida'
        );
    } else if ($BEBIDA == "3"){
        $dados = array(
            "mensagem" => 'Você pode consumir essa bebida'
        );
    }
    
    if($ANO >= 18 && $BEBIDA == "4"){
        $dados = array(
            "mensagem" => 'Você pode essa consumir bebida',
            "debug" => $ANO2
        );
    } else {
        $dados = array(
            "mensagem"=> 'Você não pode consumir bebida alcólica escolha outra opçâo'
        );
    }

}

echo json_encode($dados);