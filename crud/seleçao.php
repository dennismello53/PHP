<?php include("./includes/header.php")?>
<?php include("./class/ClassCrud.php")?>
<div class="container_selecao">
    <table class="tabela_visu">
        <h1 class="page__titulo">Visualizar</h1>
        <tr>
            <td>CPF</td>
            <td>Name</td>
            <td>Age</td>
            <td>Gender</td>
            <td>Actions</td>
        </tr>
        <!-- Estrutura de loop -->


        <?php
        $Crud = new ClassCrud();
        $BFetch = $Crud->selectDB(
            "*",
            "cadastro",
            "",
            "",
            array()
        );

        while ($Result = $BFetch->fetch_all()) {
            foreach ($Result as $Fetch) {
        ?>
                <tr>
                    <td><?php echo $Fetch[1]; ?></td>
                    <td><?php echo $Fetch[2]; ?></td>
                    <td><?php echo $Fetch[3]; ?></td>
                    <td><?php echo $Fetch[4]; ?></td>
                    <td>
                        <a href="<?php echo "visualizar.php?id={$Fetch[0]}"; ?>">
                            <img class="icones" src="./images/search.png" alt="Visualizar"></a>
                        <a href="<?php echo "cadastro.php?id={$Fetch[0]}"; ?>">
                            <img class="icones" src="./images/edit.png" alt="Editar"></a>
                        <a class="Deletar" href="<?php echo "./controllers/ControllerDelete.php ?id={$Fetch[0]}"; ?>">
                            <img class="icones" src="./images/delete.png" alt="Deletar"></a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>

    <?php

    ?>

</div>
<?php include("./includes/footer.php") ?>