<?php include("./class/ClassCrud.php");
/* Edição de dados */
if(isset($_GET['id'])){
    $Acao="Editar";

    $Crud=new ClassCrud();
    $BFetch=$Crud->selectDB("*","cadastro","where Id=?","i",array($_GET['id']));
    $Fetch=$BFetch->fetch_all();
    foreach($Fetch as $Fetchs){
        $Id=$Fetchs[0];
        $CPF=$Fetchs[1];
        $Name=$Fetchs[2];
        $Age=$Fetchs[3];
        $Gender=$Fetchs[4];
    }
}

/* Cadastro novo */
else{
    $Acao="Cadastrar";
    $Id=0;
    $CPF='';
    $Name="";
    $Age='';
    $Gender="";
}
?>


<div class="resultado"></div>

<form class="form_cadastro" id="cadastrar" method="post" action="./controllers/ControllerSignUP.php">
    <input type="hidden" id="acao" name="acao" value="<?php echo $Acao; ?>">
    <input type="hidden" id="id" name="id" value="<?php echo $Id; ?>">
    <h1 class="page__titulo">Cadastro</h1>

    <div class="form__input--grupo">
        <input type="text" name="CPF" id="cpf_input" class="form__input" value="<?php echo $CPF; ?>" autofocus placeholder="CPF" onkeypress="return onlyNumberKey(event)" maxlength="11" minlength="11" autocomplete="off" required>
    </div>

    <div class="form__input--grupo">
        <input type="text" name="Name" id="name_input" class="form__input" value="<?php echo $Name; ?>" autofocus placeholder="Name" onkeypress="return onlyAlphabets(event,this);" autocomplete="off" required>
    </div>

    <div class="form__input--grupo">
        <div class="form__input--age">
            <input type="number" name="Age" id="age_input" class="form__input" value="<?php echo $Age; ?>" autofocus placeholder="Age" required>
        </div>
    </div>

    <div class="form__input--grupo">
        <select name="Gender" id="gender_input" class="form__input" autofocus placeholder="Gender" required>
            <option value="<?php echo $Gender; ?>"><?php echo $Gender; ?></option>
            <option value="Man">Man</option>
            <option value="Woman">Woman</option>
        </select>
    </div>

    <button class="form__botão" id="botao_cadastro" input type="submit" value="<?php echo $Acao; ?>">Cadastrar</button>
</form>