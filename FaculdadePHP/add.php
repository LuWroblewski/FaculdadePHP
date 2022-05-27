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
        <section class="containerTabela >
            <?php
            $x = $_POST["Nome"];
            $y = $_POST["Descricao"];
            $z = $_POST["Prateleira"];
            $endereço = '167.99.252.245';
            $usuario = 'BSI_E4';
            $senha = 'bsi@e42022';
            $bd = 'BSI_E4_LU';

            $connect = mysqli_connect($endereço, $usuario, $senha, $bd);

            $qry = "INSERT INTO Produtos(Nome,Descricao,Prateleira) values('$x','$y','$z')";
            $result = mysqli_query($connect, $qry);

            $qry = "SELECT * FROM Produtos";
            $result = mysqli_query($connect, $qry);
            $dt = array('', '', '', '');
            while ($answer = mysqli_fetch_array($result, MYSQLI_BOTH)) {
                $dt[0] = $answer['ID'];
                $dt[1] = $answer['Nome'];
                $dt[2] = $answer['Descricao'];
                $dt[3] = $answer['Prateleira'];
                print "<br/>";
                print json_encode($dt);
            }
            mysqli_free_result($result);
            mysqli_close($connect);
            ?>
        </section>
    </div>
</body>

</html>