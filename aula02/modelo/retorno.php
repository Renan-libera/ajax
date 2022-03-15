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
            "mensagem" => "Você pode essa consumir bebida " . "<br> sua idade e: ".$ANO
        );
    } else {
        $dados = array(
            "mensagem"=> "Você não pode consumir bebida alcólica escolha outra opçâo" . "<br> sua idade e: ".$ANO
        );
    }

    if($BEBIDA == "2"){
        $dados = array(
            "mensagem" => "Você pode consumir essa bebida" . "<br> sua idade e: ".$ANO
        );
    } else if ($BEBIDA == "3"){
        $dados = array(
            "mensagem" => "Você pode consumir essa bebida" . "<br> sua idade e: ".$ANO
        );
    }

}

echo json_encode($dados);