<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Tela Inicial</title>

        <!-- import responsavel pelo codigo da linguagem do teclado e sistema -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- import responsavel pelo bootstrap usado no layout -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- import responsavel pelo classe que chama a função jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



        <!-- import responsavel pelo CSS -->
        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- import responsavel Json -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <!-- import responsavel Chart dos dados plotados -->  
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
                width:    200px;
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

            /* css responsável pelo tamanho da div que é referente a imagem */
            div.gallery img {
                
                width: 100%;
                height: auto;
                margin: 2px 2px;
                padding: 2px 2px;

            }


            /*largura das divs que usam o css da classe row */
            .row.content {height: 553px;
             }

            /* Setando a cor cinza e largura e autura dos side */
            .sidenav {
                border-style: double;
                background-color: #545454;
                height: 100%;
                width : 20%;


            }

            /* redimenciona a tela para telas menores */
            @media screen and (max-width: 850px) {
                .row.content {height: auto;} 
            }


            /* css que seta o tamnho da fonte para 30 pixels e a cor */
            h4 {
                font-size: 30px;
                color: #000000;
                text-align: center;
            }

            footer {
                border-style: double;
                background-color: #545454;
                color: #000000;
                padding: 5px;
            }

            div{
                 
                
            }

        </style>

    </head>


    <!-- usando css para colocar a cor de fundo do corpo da página em cinza (#CDCDCD) -->
    <body style="background-color:#CDCDCD">



        <?
        //codigo responsavel pela conexao com o banco de dados
        //E coloca os dados em um array para a alimentação do grafico

        //Desabilita a exibição de erros
        error_reporting(0);
        ini_set(“display_errors”, 0 );

        //faz o include do script de conexao com o bando de dados
        include 'conecta.php';


        //query sql responsavel por setar todos valores de todos os aparelhos ligados
        $query = "select time , sensor , sensor2 , sensor3 , sensor4 from testeview3 where data like '2017-07-23' and time between '12:00' and '17:00' ";

        //variavel resultado recebe os dados definidos na query acima 
        $resultado = mysqli_query($conecta,$query);

        //Cria o array primário
        $dados = array();

        // Cria um laço com o array dos dados
        while ($linha = mysqli_fetch_assoc($resultado)) {

        //Cria o array secundário, onde estarão os dados.
        $tens_hora = array();

        //variavel responsavel por receber a hora da leitura
        $tens_hora[] = ((string) $linha['time']);

        //variavel responsavel por receber o valor lido no tensiomentro
        $tens_hora[] = ((float) $linha['sensor']);
        $tens_hora[] = ((float) $linha['sensor2']);
        $tens_hora[] = ((float) $linha['sensor3']);
        $tens_hora[] = ((float) $linha['sensor4']);

        //Recebe no array principal declarado a cima , os dados lidos dentro do for.
        $dados[] = ($tens_hora);

        }

        //Pega o array com os dados e trasforma os dados em Json
        $jsonTable = json_encode($dados);
        ?>



        <div class="container-fluid">

            <div class="row content">
                <br> <br>
                <div class="col-sm-3 sidenav hidden-xs" > 

                    <div class="gallery">
                        <a target="_blank" href="imagens/pic.jpg">
                            <img src="imagens/pic.jpg" alt="Projeto" width="300" height="200">
                        </a>

                    </div>

                    <ul class="nav nav-pills nav-stacked">

                        <li style="background-color:#CDCDCD">
                            <a href="individualGrafico.php">

                                <button class="button button1"  >Tensiomentro 01
                                    <i class="fa fa-area-chart"></i></button>

                            </a></li>

                        <li style="background-color:#CDCDCD">
                            <a href="blocoGraficos.php"><button type="button" class="button button2">Blocos De Leitura
                                    <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                                </button></a></li>

                        <li style="background-color:#CDCDCD">
                            <a href="individualTable.php"><button type="button" class="button button3">Tabelas
                                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                                </button></a></li>


                        <li style="background-color:#CDCDCD">
                            <a href="individualTestemunha.php"><button type="button" class="button button4">Testemunha
                                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                                </button></a></li>



                        <li style="background-color:#CDCDCD">
                            <a href="cadastroTestemunha.php"><button type="button" class="button button5">Testemunha
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
                                </button></a></li>




                    </ul><br>


                </div>




                <div class="col-sm-9" style="background-color:#545454" >
                    
                    <h4>Sistema de Irrigação Inteligente</h4>

                    
                </div>
                
                <br><br><br>

                <div class="col-sm-9" style="background-color:#38B0DE" align="middle"  >
                    <br>
                    
                    


                        <!-- Widget Previs&atilde;o de Tempo CPTEC/INPE -->
                        <iframe  allowtransparency="true" marginwidth="1" marginheight="1" hspace="1" vspace="1" frameborder="0" scrolling="no" src="http://www.cptec.inpe.br/widget/widget.php?p=3350&w=n&c=909090&f=ffffff" height="46px" width="312px">   
                        </iframe><noscript>Previs&atilde;o de 
                        <a href="http://www.cptec.inpe.br/cidades/tempo/3350">Monte Santo de Minas/MG</a> oferecido por 
                        <a href="http://www.cptec.inpe.br">CPTEC/INPE</a></noscript><!-- Widget Previs&atilde;o de Tempo CPTEC/INPE -->
                        
                    
                </div>
                
                <br><br><br><br>
                <br><br><br><br>





                <!-- Div do Gráfico -->
                <div class="container"  id="chart_div" align="right">



                </div>




                <script>

                    //Script do Google que define o TIPO do gráfico
                    google.charts.load('current', {packages: ['corechart', 'line']});
                    google.charts.setOnLoadCallback(drawBackgroundColor);

                    //Define o tipo de coluna e o nome
                    function drawBackgroundColor() {

                        var data = new google.visualization.DataTable();
                        data.addColumn('string', 'Hora do Dia');
                        data.addColumn('number', 'Tensiometro ');
                        data.addColumn('number', 'Tensiometro2 ');
                        data.addColumn('number', 'Tensiometro3 ');
                        data.addColumn('number', 'Tensiometro4 ');


                        //Pega os dados em JSON e monta o gráfico, de acordo com os dados.

                        data.addRows(<?php echo $jsonTable ?>);



                        //Opções do gráfico:		
                        var options = {
                            title: 'Gráfico de Leitura Geral',
                            colors: ['red', 'blue', 'green', 'purple'],
                            legend: 'top',
                            'width': 950,
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

                </body>
                <br>
                </html>
                <br>
                <footer >

                    <p align="right" style="color:#000000">Posted by: Jeferson Martins</p>

                </footer>
