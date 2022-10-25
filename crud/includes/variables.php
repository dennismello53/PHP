<?php

if(isset($_POST['acao'])){ $Acao=filter_input(INPUT_POST,'acao',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['acao'])){ $Acao=filter_input(INPUT_GET,'acao',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Acao=""; }

if (isset($_POST['id'])) {$Id=filter_input(INPUT_POST,'id', FILTER_SANITIZE_SPECIAL_CHARS);}elseif(isset($_GET['id'])){$Id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);}else{$Id=0;}

if (isset($_POST['cpf'])) {$CPF=filter_input(INPUT_POST,'cpf', FILTER_SANITIZE_SPECIAL_CHARS);}elseif(isset($_GET['cpf'])){$CPF=filter_input(INPUT_GET,'cpf',FILTER_SANITIZE_SPECIAL_CHARS);}else{$CPF="";}

if (isset($_POST['name'])) { $Name=filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['name'])){ $Name=filter_input(INPUT_GET,'name',FILTER_SANITIZE_SPECIAL_CHARS);}else{ $Name=""; }

if (isset($_POST['age'])) { $Age=filter_input(INPUT_POST,'age',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['age'])){ $Age=filter_input(INPUT_GET,'age',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Age=""; }

if (isset($_POST['gender'])) { $Gender=filter_input(INPUT_POST,'gender',FILTER_SANITIZE_SPECIAL_CHARS); }elseif(isset($_GET['gender'])){ $Gender=filter_input(INPUT_GET,'gender',FILTER_SANITIZE_SPECIAL_CHARS); }else{ $Gender=""; }