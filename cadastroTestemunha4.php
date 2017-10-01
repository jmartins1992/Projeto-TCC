<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <title>Tela de Cadastro de Testemunha 4</title>

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

            input[type=text] {

                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;

            }



            h1 {
                font-size: 20px;
                color: #3299CC;
            }



        </style>

    </head>

    <body style="background-color:#CDCDCD">

<nav class="navbar navbar-inverse" style="background-color:#00009C">
        <div class="container-fluid">

            <div class="navbar-header">
                <h1 style="color:#000000">Sistema de Irrigação Intenligente</h1>
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
        
        <br><br><br><br>


<div class="col-sm-8 text-left">
    
         <?php
        //codigo responsavel pela conexao com o banco de dados
        //E coloca os dados em um array para a alimentação do grafico
        //Desabilita a exibição de erros

        error_reporting(0);
        ini_set("display_errors", 0);

        include_once("coneBdFormulario.php");
        $valor = $_POST['txt_valor'];
        $data = $_POST['date'];
        $hora = $_POST['time'];



        $result_usuario = "INSERT INTO testemunha1 (valor4, data , hora) VALUES ('$valor','$data','$hora')";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        
        ?>
    

    <form class="form-horizontal" method="POST" action="cadastroTestemunha4.php" >
            <div class="form-group" align="left">
                <label class="control-label col-sm-2" >Valor:</label>
                <div class="col-sm-10"> 
                    <input type="text" class="form-control" name="txt_valor" placeholder="digite o valor em psi">
                </div>
            </div>
            <div class="form-group">

                <label class="control-label col-sm-2">Data:</label>

                <div class="col-sm-10"> 

                    <input type="date" class="form-control"  name="date">
                </div>

            </div>
            <div class="form-group"> 

                <label class="control-label col-sm-2">Hora:</label>
                <div class="col-sm-10"> 
                    <input type="time" class="form-control" name="time">
                </div> 

            </div>
            <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary btn-block">
                        <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Salvar</button>
                     
                </div>
            </div>
        </form>
    
</div>


    </body>

    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>
    
    

    <footer  style="background-color:#00009C" >

        <p align="right" style="color:#000000">Posted by: Jeferson Martins</p>


    </footer>
</html>
