<header>
    <h3>Excluir Contato</h3>
</header>

<?php 
    $id = mysqli_real_escape_string($conexao, $_GET['id']);

    $sql = "DELETE FROM tbcontatos WHERE id = '$id'";
    
    mysqli_query($conexao, $sql) or die ("Erro ao executar a exclusão  //" . mysqli_error($conexao));

    echo "Contato Excluído com sucesso!!";

?>