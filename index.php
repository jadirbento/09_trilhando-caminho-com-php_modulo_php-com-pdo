
<html>
<head>
    <meta charset="utf-8" />
    <title>PDO</title>
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
            padding-left:50px;
            padding-right:50px;
        }
    </style>
</head>
<body>
    <div>
        <ul>
            <li><a href="/?list=all">Listar Todos</a></li>
            <li><a href="/?list=top">Top 3, Maiores Notas</a></li>
        </ul>
    </div>
    <hr />
    <?php
    require_once('config/database.php');



    $opcao;
    if(isset($_GET["list"]) == false){
        $opcao = 'all';
    }else{
        $opcao = $_GET["list"];
    }






    if ($opcao == 'all'){

        echo '<h1>Todos os Alunos</h1>';
        $sql = "select * from `alunos`";
        $result = DbOpenConnection()->query( $sql );
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);

        echo '<table width="50%">';
        echo '<tr>';
        echo '<td><h2>NOME</h2></td><td><h2>NOTA</h2></td>';
        echo '</tr>';
        foreach ($rows as $alunos)
        {
            echo '<tr>    <td>'. $alunos['nome'] .'</td> <td>'. $alunos['nota'] .'</td> </tr>';

        }
        echo '</table>';

    }else{

        echo '<h1>Top 3, Maiores Notas</h1>';

        $sql = "select * from `alunos` order by nota desc limit 3";
        $result = DbOpenConnection()->query( $sql );
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);

        echo '<table width="50%">';
        echo '<tr>';
        echo '<td><h2>NOME</h2></td><td><h2>NOTA</h2></td>';
        echo '</tr>';
        foreach ($rows as $alunos)
        {
            echo '<tr>    <td>'. $alunos['nome'] .'</td> <td>'. $alunos['nota'] .'</td> </tr>';

        }
        echo '</table>';
    }
    ?>



</body>
</html>
