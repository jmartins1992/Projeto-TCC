<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <title>Tela de Dados em Tabela referente ao Tensiometro 8</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <!-- Google Chart -->  
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <style>
            
            .button {

                border: none;
                color: white;
                padding: 1px 2px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 1px 1px;
                cursor: pointer;
                width:    125px;
                height:  50px;
            }

            .button1 {
                background-color: white; 
                color: black; 
                border: 6px solid #000000;
                border-radius: 12px;
            }
            .button2 {
                background-color: white; 
                color: black; 
                border: 6px solid #FF0000;
                border-radius: 12px;
            }

            .button3 {
                background-color: white; 
                color: black; 
                border:6px solid #6B238E;
                border-radius: 12px;
            }

            .button4 {
                background-color: white; 
                color: black; 
                border: 6px solid #FFFF00;
                border-radius: 12px;
            }

            .button5 {
                background-color: white; 
                color: black; 
                border: 6px solid #00009C;
                border-radius: 12px;
            }

            input[type=submit]{
                background-color: #FF0000;
                border: none;
                color: #000000;
                padding: 6px 12px;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
                width: 42%;
            }

            input[type=time]{
                background-color: #E6E8FA;
                border: none;
                color: #000000;
                padding: 6px 12px;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
                width: 14%;
            }

            input[type=date]{
                background-color: #E6E8FA;
                border: none;
                color: #000000;
                padding: 6px 12px;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
                width: 38%;
            }





            h1 {
                font-size: 20px;
                color: #000000;
            }


        </style>

    </head>

    <body style="background-color:#A8A8A8">





        <nav class="navbar navbar-inverse" style="background-color:#6B238E">
        <div class="container-fluid">

            <div class="navbar-header">
                <h1 style="color:#FF0000">Sistema de Irrigação Intenligente</h1>
            </div>


            <div class="collapse navbar-collapse" id="myNavbar">

                <ul class="nav navbar-nav">

                    <li >
                        <a href="individualGrafico.php">
                            <button class="button button1">Graficos
                                <i class="fa fa-area-chart"></i>
                            </button></a>
                    </li>

                    <li><a href="blocoGraficos.php">
                            <button type="button" class="button button2">Blocos
                                <span class="glyphicon glyphicon-th-large" aria-hidden="true">
                                </span>
                            </button></a>
                    </li>

                    <li><a href="individualTable.php">
                            <button type="button" class="button button3">Tabelas
                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true">
                                </span> 
                            </button></a>
                    </li>

                    <li><a href="individualTestemunha.php">
                            <button type="button" class="button button4">Testemunha
                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true">
                                </span> 
                            </button></a>
                    </li>

                    <li><a href="cadastroTestemunha.php">
                            <button type="button" class="button button5">Testemunha
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true">
                                </span> 
                            </button></a>
                    </li>

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="telainicial.php">
                            <span class="glyphicon glyphicon-home"></span> Tela Inicial</a></li>
                </ul>

            </div>

        </div>

        </div>


    </nav>

        <div class="jumtron">
            <div class="container text-center" style="background-color:#CDCDCD">



                <br>



                <br>



                <?php
                error_reporting(0);
                ini_set("display_errors", 0);

                include 'conecta2.php';

                /* @var $_POST type */
                $data = $_POST["V1"];
                $hora = $_POST['H1'];
                $hora2 = $_POST['H2'];

                $query = "select id , time , sensor8, data ,TIME_FORMAT(time, '%h') 
                from tensiometro8 
                where data like '$data' and time between '$hora' and '$hora2' ";



                $resultado = mysqli_query($conecta, $query);

                if (mysqli_num_rows($resultado) > 0) {
                    print "<table border='5'>";
                    print "<tr><td>Número da Leitura</td><td>Data</td><td>Hora</td><td>Escala de leitura</td></tr>";
                    while ($info = mysqli_fetch_array($resultado)) {
                        print "<tr><td>$info[id]</td> <td>$info[data]</td> <td>$info[time]</td> <td>$info[sensor8]</td></tr>";
                    }
                    print "</table>";
                }
                ?>

            </div>



            <br>
        </div>

        <div  style="background-color:#6B238E">
            <br>


            <form method="POST" action="tabela8.php" >

                <p align="center">Data:<input type="date" name="V1"></p>
                <p align="center">Horário 1: <input type="time" name="H1">
                    Horário 2: <input type="time" name="H2">
                </p>


                <p align="center"><input type="submit" value="Pesquisar"></p> 



            </form>  



        </div>


        <footer  style="background-color:#6B238E">

            <p align="right" style="color:#FF0000">Posted by: Jeferson Martins</p>

        </footer>

    </body>
</html>
