<header>
    <h3>Pagina Contatos</h3>
</header>

<div>
    <a href="index.php?menuop=novo">Novo Contato</a>
</div>
<form action="index.php?menuop=contatos" method="post">
    <input type="text" name="txt_pesquisa">
    <input type="submit" value="Pesquisar">
</form>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Sexo</th>
            <th>Data de Nascimento</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            //variáveis para paginação
            $quantidade = 10;
            $pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1; 
            $inicio = ($quantidade * $pagina) - $quantidade;

        //sql para o pesquisar
            $txt_pesquisa = (isset($_POST["txt_pesquisa"])) ? $_POST["txt_pesquisa"] : "";

        //sql para a tabela
            $sql = "SELECT
                        id,
                        upper(nomeContato) as nomeContato,
                        lower(emailContato) as emailContato,
                        telefoneContato,
                        upper(endereco) as endereco,
                        
                        CASE
                            WHEN sexoContato = 'F'  THEN 'FEMININO'
                            WHEN sexoContato = 'M'  THEN 'MASCULINO'
                        ELSE
                            'NÃO ESPECIFICADO'
                        END AS sexoContato,
                        
                        DATE_FORMAT(dataNascContato,'%d/%m/%Y') AS dataNascContato
                    FROM tbcontatos
                    WHERE id = '$txt_pesquisa' 
                    OR nomeContato LIKE '%$txt_pesquisa%'
                    ORDER BY nomeContato ASC
                    LIMIT $inicio,$quantidade ";
            $rs = mysqli_query($conexao,$sql) or die("Erro ao tentar conectar" . mysqli_error($conexao));

            while($dados = mysqli_fetch_assoc($rs)){
        ?>
                <tr>
                    <td><?= $dados["id"]?></td>
                    <td><?= $dados["nomeContato"]?></td>
                    <td><?= $dados["emailContato"]?></td>
                    <td><?= $dados["telefoneContato"]?></td>
                    <td><?= $dados["endereco"]?></td>
                    <td><?= $dados["sexoContato"]?></td>
                    <td><?= $dados["dataNascContato"]?></td>
                    <td>
                        <a href="index.php?menuop=editar_contato&id=<?= $dados["id"] ?>">Editar</a>
                        <a href="index.php?menuop=excluir_contato&id=<?= $dados["id"] ?>">Excluir</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </tbody>
</table>
<br>
<?php
    $sqlTotal = "SELECT id FROM tbcontatos";
    $qrTotal = mysqli_query($conexao, $sqlTotal) or die (mysqli_error($conexao));
    $numTotal = mysqli_num_rows($qrTotal);
    $totalPagina = ceil($numTotal/$quantidade);
    echo "total de registros: $numTotal";

    echo '<a href="?menuop=contatos&pagina=1">Primeira</a>';

    if($pagina>3){
        ?>
            <a href="?menuop=contatos&pagina=<?php echo $pagina-1?>"> << </a>
        <?php

    }

    for($i=1;$i<=$totalPagina;$i++){
        if($i>=($pagina-3) && $i<= ($pagina+3)){
            if($i==$pagina){
                echo $i;
            }else{
                echo "<a href=\"?menuop=contatos&pagina=$i \"> $i</a>   ";
            }
        }
       
    }
    
    if($pagina<($totalPagina-2)){
        ?>
            <a href="?menuop=contatos&pagina=<?php echo $pagina+1?>"> >> </a>
        <?php

    }

    
    echo "<a href=\"?menuop=contatos&pagina=$totalPagina\">Última</a>";
?>