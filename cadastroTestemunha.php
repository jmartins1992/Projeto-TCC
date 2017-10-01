<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <title>Tela de Cadastro de Testemunhas </title>

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


            footer {
                border-style: double;
                background-color : #00009C;
                color: #000000;
                padding: 8px;
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



        <br><br>


        <div class="container-fluid bg-3 text-center">    

            <div class="row">
                <div class="col-sm-3">
                    <a href="cadastroTestemunha1.php"><button type="button" class="btn btn-default btn-lg">Testemunha 1
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
                        </button>
                </div>

                <div class="col-sm-3"> 
                    <a href="cadastroTestemunha2.php"><button type="button" class="btn btn-default btn-lg">Testemunha 2
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
                        </button>
                </div>

                <div class="col-sm-3"> 
                    <a href="cadastroTestemunha3.php"><button type="button" class="btn btn-default btn-lg">Testemunha 3
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
                        </button>
                </div>

                <div class="col-sm-3">
                    <a href="cadastroTestemunha4.php"><button type="button" class="btn btn-default btn-lg">Testemunha 4
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
                        </button>
                </div>

                <br><br><br><br>

                <div class="col-sm-3">
                    <a href="cadastroTestemunha5.php"><button type="button" class="btn btn-default btn-lg">Testemunha 5
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
                        </button>
                </div>

                </body>

                <br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br><br><br>
                <br><br><br><br>

                <footer  >

                    <p align="right" >Posted by: Jeferson Martins</p>


                </footer>
                </html>
