<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <title>Tela de Graficos  </title>

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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

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
            background-color: #000000;
            color: #FF0000;
            padding: 4px;
        }


    </style>

</head>

<body style="background-color:#CDCDCD">

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







    <br><br>







    <div class="row" style="color:#CC0000">

        <div class="col-xs-6 col-md-3">
            <a href="grafico1.php"> 
                <button class="btn btn-default btn-lg"style="font-size:24px">Tensiomentro 01
                    <i class="fa fa-line-chart"></i></button>
        </div>

        <div class="col-xs-6 col-md-3">
            <a href="grafico6.php"> 
                <button class="btn btn-default btn-lg" style="font-size:24px">Tensiomentro 06
                    <i class="fa fa-line-chart"></i></button>
        </div>



        <div class="col-xs-6 col-md-3">
            <a href="grafico11.php"> 
                <button class="btn btn-default btn-lg" style="font-size:24px">Tensiomentro 11
                    <i class="fa fa-line-chart"></i></button>
        </div>

        <div class="col-xs-6 col-md-3">

            <a href="grafico16.php"> 
                <button class="btn btn-default btn-lg" style="font-size:24px">Tensiomentro 16
                    <i class="fa fa-line-chart"></i></button>
        </div>

    </div>

    <br><br>

    <div class="row">

        <div class="col-xs-6 col-md-3">
            <a href="grafico2.php"> 
                <button class="btn btn-default btn-lg" style="font-size:24px">Tensiomentro 02
                    <i class="fa fa-line-chart"></i></button>
        </div>

        <div class="col-xs-6 col-md-3">
            <a href="grafico7.php"> 
                <button class="btn btn-default btn-lg" style="font-size:24px">Tensiomentro 07
                    <i class="fa fa-line-chart"></i></button>
        </div>



        <div class="col-xs-6 col-md-3">
            <a href="grafico12.php"> 
                <button class="btn btn-default btn-lg" style="font-size:24px">Tensiomentro 12
                    <i class="fa fa-line-chart"></i></button>
        </div>

        <div class="col-xs-6 col-md-3">

            <a href="grafico17.php"> 
                <button class="btn btn-default btn-lg" style="font-size:24px">Tensiomentro 17
                    <i class="fa fa-line-chart"></i></button>
        </div>

    </div>


    <br><br>

    <div class="row">

        <div class="col-xs-6 col-md-3">
            <a href="grafico3.php"> 
                <button class="btn btn-default btn-lg" style="font-size:24px">Tensiomentro 03
                    <i class="fa fa-line-chart"></i></button>
        </div>

        <div class="col-xs-6 col-md-3">
            <a href="grafico8.php"> 
                <button class="btn btn-default btn-lg" style="font-size:24px">Tensiomentro 08
                    <i class="fa fa-line-chart"></i></button>
        </div>



        <div class="col-xs-6 col-md-3">
            <a href="grafico13.php"> 
                <button class="btn btn-default btn-lg" style="font-size:24px">Tensiomentro 13
                    <i class="fa fa-line-chart"></i></button>
        </div>

        <div class="col-xs-6 col-md-3">

            <a href="grafico18.php"> 
                <button class="btn btn-default btn-lg" style="font-size:24px">Tensiomentro 18
                    <i class="fa fa-line-chart"></i></button>

        </div>

    </div>


    <br><br>

    <div class="row">

        <div class="col-xs-6 col-md-3">
            <a href="grafico4.php"> 
                <button class="btn btn-default btn-lg" style="font-size:24px">Tensiomentro 04
                    <i class="fa fa-line-chart"></i></button>
        </div>

        <div class="col-xs-6 col-md-3">
            <a href="grafico9.php"> 
                <button class="btn btn-default btn-lg" style="font-size:24px">Tensiomentro 09
                    <i class="fa fa-line-chart"></i></button>
        </div>



        <div class="col-xs-6 col-md-3">
            <a href="grafico14.php"> 
                <button class="btn btn-default btn-lg" style="font-size:24px">Tensiomentro 14
                    <i class="fa fa-line-chart"></i></button>
        </div>

        <div class="col-xs-6 col-md-3">

            <a href="grafico19.php"> 
                <button class="btn btn-default btn-lg" style="font-size:24px">Tensiomentro 19
                    <i class="fa fa-line-chart"></i></button>
        </div>

    </div>

    <br><br>

    <div class="row">

        <div class="col-xs-6 col-md-3">
            <a href="grafico5.php"> 
                <button class="btn btn-default btn-lg" style="font-size:24px">Tensiomentro 05
                    <i class="fa fa-line-chart"></i></button>
        </div>

        <div class="col-xs-6 col-md-3">
            <a href="grafico10.php"> 
                <button class="btn btn-default btn-lg" style="font-size:24px">Tensiomentro 10
                    <i class="fa fa-line-chart"></i></button>
        </div>



        <div class="col-xs-6 col-md-3">
            <a href="grafico15.php"> 
                <button class="btn btn-default btn-lg" style="font-size:24px">Tensiomentro 15
                    <i class="fa fa-line-chart"></i></button>
        </div>

        <div class="col-xs-6 col-md-3">

            <a href="grafico20.php"> 
                <button class="btn btn-default btn-lg" style="font-size:24px">Tensiomentro 20
                    <i class="fa fa-line-chart"></i></button> 




                </button>
        </div>

        <br>




        </body>


        <br><br><br><br>


        </html>
        <footer  >


            <p align="right" style=" color:#E6E8FA">Posted by: Jeferson Martins</p>

        </footer>
