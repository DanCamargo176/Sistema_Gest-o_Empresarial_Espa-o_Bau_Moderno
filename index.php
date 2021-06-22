<!DOCTYPE html>
<html lang="PT-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Espaço Baú Moderno</title>

    <!-- Bootstrap CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cores_de_fundo.css" rel="stylesheet">


    <!-- Fontes -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendor/device-mockups/device-mockups.min.css">

    <!-- Temas CSS -->
    <link href="css/new-age.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Espaço Baú Moderno</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                       <a class="page-scroll" href="#features">Novidades do Dia</a>
                    </li>
                    <li>
                       <a class="page-scroll" href="#sobrenos">Sobre Nós</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#redesocial">Nossas Redes Sociais</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="#faleconosco">Fale Conosco</a>

                    </li>
                    <li>
                        <a href="login.html">Área Administrativa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <h1>Espaço Baú Moderno é o lugar da mulher elegante, bonita e muito bem vestida! Venha conhecer nossa loja!</h1>
                            <a href="#sobrenos" class="btn btn-outline btn-xl page-scroll">Encontre-nos!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="device-container">
                        <div class="">
                            <div class="">
                                <div class="screen iphone6_plus portrait white">
                                    <img src="img/white-dress-1894840.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="button">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Novidades todos os dias? Você só encontra aqui!</h2>
                        <p class="text-muted">Confira abaixo a novidade de hoje e fique atualizada sobre a moda!</p>
                        <hr>
                    </div>
                </div>
            </div>
                        <div class="row row_align">
                        <div class="row">
<?php 
include("conexao.php");
include("executaSQL.php");
?>

<?php
						
											
						
						$sql = "SELECT * FROM tb_novidades ORDER BY id DESC";
						$link = conectar();
						$result = executaSQL($sql, $link);
						$linhas = mysqli_num_rows($result);
						$campo = mysqli_fetch_array($result);
						$i = 1;

						echo ' <img class="tamanho_img" src="upload/'.$campo['imagem'].'" disabled> </br><br>
						Look do Dia:<textarea class="form-group form-control"  name="titulo" cols="40" rows="1" maxlength="500" disabled>'.$campo['titulo'].'</textarea>
      Descrição: &nbsp;&nbsp;&nbsp;<textarea class="form-group form-control"  name="descricao" cols="40" rows="5" maxlength="500" disabled>'.$campo['descricao'].'</textarea> Data da Postagem: <input type="text"  size="10" value="'.$campo['data'].'" disabled class="form-group form-control">
    <center><a class="reserva_ja" href="https://www.facebook.com/baumodernomulhercompleta/?fref=ts" target="_new">Reserve já!</a><br></center>
						';
						
					?>
                    

                    </div>      
                </div>
            </div>
            </section>
    <section class="cor_sobrenos" id="sobrenos">
    <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Sobre Nós</h2></br></br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2 text-justify">
                    <p>O Baú Moderno Brechó é um sonho antigo da proprietária Elisangela Fernandes. </p><p>Iniciou-se em maio de 2012, em uma conversa com sua amiga sobre o sonho de ter um brechó diversificado, diferente e moderno, onde atendesse todas as pessoas de diferentes idades, todos os gostos e interesses.</p>
                </div>
                <div class="col-lg-4 text-justify">
                    <p>A amiga para quem contou o antigo sonho, disse que tinha um lugar e que era só colocar o plano em pratica.</p> <p>Em 2017 o Brechó completa 5 anos e é um dos mais renomados da cidade de Pirassununga, São Paulo.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center"></br>
                    <a href="https://www.google.com.br/maps/place/R.+Jos%C3%A9+Bonif%C3%A1cio,+579+-+Centro,+Pirassununga+-+SP,+13630-010/@-21.9974982,-47.4305291,17z/data=!3m1!4b1!4m5!3m4!1s0x94c800c0eac2cf05:0xc036322e0586efbd!8m2!3d-21.9975032!4d-47.4283404" target="new" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i>Encontre-nos!
                    </a>
                </div>
            </div>
        
    </section>

    <section id="redesocial" class="contact bg-primary">
        <div class="container">
            <h2>Nós <i class="fa fa-heart"></i> nossos clientes!</h2>
            <ul class="list-inline list-social">
                <li class="social-facebook">
                    <a href="#" target="new"><i class="fa fa-facebook"></i></a>
                </li>
</ul>
        </div>
    </section>

    <section id="faleconosco">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Fale Conosco</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" id="contactForm" action="enviarEmail.php" method="post" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nome</label>
                                <input type="text" class="form-control" placeholder="Nome" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>E-mail</label>
                                <input type="email" class="form-control" placeholder="E-mail" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Telefone</label>
                                <input type="tel" class="form-control" placeholder="Telefone" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mensagem</label>
                                <textarea rows="5" class="form-control" placeholder="Mensagem" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2017 Espaço Baú Moderno. Todos os Direitos Reservados.</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Tema JavaScript -->
    <script src="js/new-age.min.js"></script>

</body>

</html>
