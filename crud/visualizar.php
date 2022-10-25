<?php
    include("./includes/header.php");
    include("./class/ClassCrud.php");
?>
<div class="container">
    <?php
        $Crud=new ClassCrud();
        $IdUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

        $BFetch=$Crud->selectDB(
            "*",
            "cadastro",
            "where Id=?",
            "i",
            array(
                $IdUser
            )
        );
        $Result=$BFetch->fetch_all();
        foreach($Result as $Fetch){
    ?>
    <h1>Dados do Usuário</h1>
    <hr>
    <strong>CPF:</strong> <?php echo $Fetch[1]; ?><br>
    <strong>Name:</strong> <?php echo $Fetch[2]; ?><br>
    <strong>Age:</strong> <?php echo $Fetch[3]; ?><br>
    <strong>Gender:</strong> <?php echo $Fetch[4]; ?><br>    
    <?php } ?>
</div>
<?php include("./includes/footer.php");?>