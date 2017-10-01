<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <title>Tela Dos Dados em Tabela</title>

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
                background-color : #6B238E;
                color: #000000;
                padding: 5px;
            }


        </style>

    </head>

    <body style="background-color:#CDCDCD">

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



    <br><br>



    <div class="row">

        <div class="col-xs-6 col-md-3">
            <a href="tabela1.php"><button type="button" class="btn btn-default btn-lg">Tensiomentro 01
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                </button>
        </div>

        <div class="col-xs-6 col-md-3">
            <a href="tabela6.php"><button type="button" class="btn btn-default btn-lg">Tensiomentro 06
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                </button>
        </div>



        <div class="col-xs-6 col-md-3">
            <a href="tabela11.php"><button type="button" class="btn btn-default btn-lg">Tensiomentro 11
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                </button>
        </div>

        <div class="col-xs-6 col-md-3">

            <a href="tabela16.php"><button type="button" class="btn btn-default btn-lg"> Tensiomentro 16

                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 

                </button>
        </div>

    </div>

    <br><br>

    <div class="row">

        <div class="col-xs-6 col-md-3">
            <a href="tabela2.php"><button type="button" class="btn btn-default btn-lg">Tensiomentro 02
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                </button>
        </div>

        <div class="col-xs-6 col-md-3">
            <a href="tabela7.php"><button type="button" class="btn btn-default btn-lg">Tensiomentro 07
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                </button>
        </div>



        <div class="col-xs-6 col-md-3">
            <a href="tabela12.php"><button type="button" class="btn btn-default btn-lg">Tensiomentro 12
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                </button>
        </div>

        <div class="col-xs-6 col-md-3">

            <a href="tabela17.php"><button type="button" class="btn btn-default btn-lg"> Tensiomentro 17

                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 

                </button>
        </div>

    </div>


    <br><br>

    <div class="row">

        <div class="col-xs-6 col-md-3">
            <a href="tabela3.php"><button type="button" class="btn btn-default btn-lg">Tensiomentro 03
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                </button>
        </div>

        <div class="col-xs-6 col-md-3">
            <a href="tabela8.php"><button type="button" class="btn btn-default btn-lg">Tensiomentro 08
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                </button>
        </div>



        <div class="col-xs-6 col-md-3">
            <a href="tabela13.php"><button type="button" class="btn btn-default btn-lg">Tensiomentro 13
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                </button>
        </div>

        <div class="col-xs-6 col-md-3">

            <a href="tabela18.php"><button type="button" class="btn btn-default btn-lg"> Tensiomentro 18

                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 

                </button>
        </div>

    </div>


    <br><br>

    <div class="row">

        <div class="col-xs-6 col-md-3">
            <a href="tabela4.php"><button type="button" class="btn btn-default btn-lg">Tensiomentro 04
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                </button>
        </div>

        <div class="col-xs-6 col-md-3">
            <a href="tabela9.php"><button type="button" class="btn btn-default btn-lg">Tensiomentro 09
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                </button>
        </div>



        <div class="col-xs-6 col-md-3">
            <a href="tabela14.php"><button type="button" class="btn btn-default btn-lg">Tensiomentro 14
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                </button>
        </div>

        <div class="col-xs-6 col-md-3">

            <a href="tabela19.php"><button type="button" class="btn btn-default btn-lg"> Tensiomentro 19

                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 

                </button>
        </div>

    </div>

    <br><br>

    <div class="row">

        <div class="col-xs-6 col-md-3">
            <a href="tabela5.php"><button type="button" class="btn btn-default btn-lg">Tensiomentro 05
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                </button>
        </div>

        <div class="col-xs-6 col-md-3">
            <a href="tabela10.php"><button type="button" class="btn btn-default btn-lg">Tensiomentro 10
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                </button>
        </div>



        <div class="col-xs-6 col-md-3">
            <a href="tabela15.php"><button type="button" class="btn btn-default btn-lg">Tensiomentro 15
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                </button>
        </div>

        <div class="col-xs-6 col-md-3">

            <a href="tabela20.php"><button type="button" class="btn btn-default btn-lg"> Tensiomentro 20

                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 

                </button>
        </div>

    </div>
    <br><br>
    <br><br>
    
</body>
<footer >

    <p align="right">Posted by: Jeferson Martins</p>


</footer>
</html>
