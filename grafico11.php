<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <title>Grafico Tensiometro 11</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

        <?
        //Desabilita a exibição de erros
        error_reporting(0);
        ini_set(“display_errors”, 0 );

        include 'conecta.php';

        $data = $_POST['V1'];
        $hora = $_POST['H1'];
        $hora2 = $_POST['H2'];


        $query = "select sensor1, data ,TIME_FORMAT(time, '%h') 
        from tensiometro11 
        where data like '$data' and time between '$hora' and '$hora2' ";

        $resultado = mysqli_query($conecta,$query);

        //Cria o array primário
        $dados = array();

        // Cria um laço com o array dos dados
        while ($linha = mysqli_fetch_assoc($resultado)) {

        //Cria o array secundário, onde estarão os dados.
        $tens_hora = array();

        $tens_hora[] = ((string) $linha['time']);
        $tens_hora[] = ((float) $linha['sensor11']);


        //Recebe no array principal, os dados.
        $dados[] = ($tens_hora);

        }

        //Trasforma os dados em JSON
        $jsonTable = json_encode($dados);
        ?>

        <nav class="navbar navbar-inverse">
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

        </nav>

        <div class="jumtron">

            <div class="jumbotron" style="background-color:#A8A8A8">


                <!-- Div do Gráfico -->
                <div class="container"  id="chart_div" align="center">

                </div>


                </body>

                <script>

                    //Script do Google que define o TIPO do gráfico
                    google.charts.load('current', {packages: ['corechart', 'line']});
                    google.charts.setOnLoadCallback(drawBackgroundColor);

                    //Define o tipo de coluna e o nome
                    function drawBackgroundColor() {

                        var data = new google.visualization.DataTable();
                        data.addColumn('string', 'Hora do Dia');
                        data.addColumn('number', 'Tensiometro 11 ');

                        //Pega os dados em JSON e monta o gráfico, de acordo com os dados.

                        data.addRows(<?php echo $jsonTable ?>);

                        //Opções do gráfico:		
                        var options = {
                            title: 'Gráfico de Leitura em Linhas Tensiomentro digital número 11.',
                            colors: ['red', 'blue'],
                            legend: 'top',
                            'width': 1100,
                            'height': 330,
                            hAxis: {
                                title: 'Hora ao Decorrer da Leitura'
                            },
                            vAxis: {
                                title: 'Escala em Ohms'
                            },
                            backgroundColor: '#f1f8e9'
                        };

                        //Criação do Gráfico	
                        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
                        chart.draw(data, options);
                    }

                </script>

            </div>
        </div>  

        <div  style="background-color:#000000">

            <form method="POST" action="grafico11.php" >

                <p align="left">Data:<input type="date" name="V1">
                    Horário 1: <input type="time" name="H1">
                    Horário 2: <input type="time" name="H2">
                </p>

                <p align="center"><input type="submit" value="Pesquisar"></p> 

            </form>  

        </div>

        <footer  style="background-color:#000000">

            <p align="right" style="color:#FF0000">Posted by: Jeferson Martins</p>

        </footer>

    </body>
</html>