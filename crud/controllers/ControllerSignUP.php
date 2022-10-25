<?php
require_once "./../includes/variables.php";
require_once "./../class/ClassCrud.php";
require_once "./../class/ClassConnection.php";

$Crud=new ClassCrud();
if($Acao=="Cadastrar"){
    $Crud->insertDB(
        "cadastro",
        "?,?,?,?,?",
        "iisis",
        array(
            $Id,
            $CPF,
            $Name,
            $Age,
            $Gender
        )
    );
    echo "Cadastro Realizado com Sucesso!";
}else{
    $Crud->updateDB(
        "cadastro",
        "CPF=?,Name=?,Age=?,Gender=?",
        "Id=?",
        "isisi",
        array(
            $CPF,
            $Name,
            $Age,
            $Gender,
            $Id
        )
    );
    echo "Cadastro Editado com Sucesso!";
}