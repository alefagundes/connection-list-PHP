<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listagem</title>
</head>
<body>
    <h1 class="titulo">Listagem de dados</h1>
        <table width="100%" border="1 bordercolor="#EEE" cellspacing="0" cellpaddinng="10">
             <tr>
                <td><strong>Nome</strong></td>
            </tr>
    <?php
    include("test.php");
    $seleciona = mysqli_query($conexao, "select * from department order by Id desc");
    while($campo = mysqli_fetch_array($seleciona)){?>
    <tr>
        <td><?=$campo["Name"]?></td>
    </tr>


    <?php  }?>
</table>

</body>
</html>