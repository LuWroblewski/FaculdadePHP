<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tarefa faculdade</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div>
        <section class="containerTabela2">
            <?php
            $w = $_POST["ID"];
            $x = $_POST["Nome"];
            $y = $_POST["Descricao"];
            $z = $_POST["Prateleira"];
            $endereço = '';
            $usuario = '';
            $senha = '';
            $bd = '';

            $connect = mysqli_connect($endereço, $usuario, $senha, $bd);
            $sql = "UPDATE Produtos SET Nome= '$x',Descricao='$y',Prateleira='$z' WHERE ID= $w";
            $result = mysqli_query($connect, $sql);

            $qry = "SELECT * FROM Produtos";
            $result = mysqli_query($connect, $qry);
            $dt = array();
            echo "<table class=tabela>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>  ID  </th>";
            echo "<th> Nome </th>";
            echo "<th> Descrição </th>";
            echo "<th> Prateleira </th>";
            echo "</tr>";
            echo "</thead>";
            while ($answer = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                $dt[0] = $answer['ID'];
                $dt[1] = $answer['Nome'];
                $dt[2] = $answer['Descricao'];
                $dt[3] = $answer['Prateleira'];
                $string1 = ($dt[0]);
                $string2 = ($dt[1]);
                $string3 = ($dt[2]);
                $string4 = ($dt[3]);
                echo "<tr>";
                echo "<td>$string1 </td>";
                echo "<td>$string2</td>";
                echo "<td>$string3</td>";
                echo "<td>$string4</td>";
                echo "</tr>";
                print "<p/>";
            }
            mysqli_free_result($result);
            mysqli_close($connect);
            ?>
        </section>
    </div>
</body>

</html>
