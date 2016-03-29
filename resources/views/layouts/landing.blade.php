<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pratt - Free Bootstrap 3 Theme">
    <meta name="author" content="Alvarez.is - BlackTie.co">

    <title>AutoCasa</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/js/smoothscroll.js') }}"></script>


</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>AutoCasa</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#home" class="smoothScroll">Home</a></li>
                <li><a href="#desc" class="smoothScroll">Descrição</a></li>
                <li><a href="#showcase" class="smoothScroll">Exemplos</a></li>
                <li><a href="#contact" class="smoothScroll">Contato</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                @else
                    <li><a href="/home">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


<section id="home" name="home"></section>
<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12">
                <h1><b><a href="#">AutoCasa</a></b></h1>
                <h3>Automação residencial com arduino
                    uma forma simples, rápida e de baixo custo.
                    administre sua casa pela web,
                    comôdidade e segurança na palma da mão.
                <h3><a href="#contact" class="smoothScroll btn btn-lg btn-success">Get Started!</a></h3>
            </div>
            <div class="col-lg-2">
                <h5>Segurança</h5>
                <p>Alarme, sensores cameras.</p>
                <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow1.png') }}">
            </div>
            <div class="col-lg-8">
                <img class="img-responsive" src="{{ asset('/img/app_bg1.png') }}" alt="">
            </div>
            <div class="col-lg-2">
                <br>
                <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow2.png') }}">
                <h5>Cômodidade</h5>
                <p>controle a distância os dispositivos de sua casa.</p>
            </div>
        </div>
    </div> <!--/ .container -->
</div><!--/ #headerwrap -->


<section id="desc" name="desc"></section>
<!-- INTRO WRAP -->
<div id="intro">
    <div class="container">
        <div class="row centered">
            <h1>Descrição</h1>
            <br>
            <br>
            <div class="col-lg-12">
                <img src="{{ asset('/img/intro01.png') }}" alt="">
                <h3>Comunidade</h3>
                <p>Veja <a href="https://github.com/ayrtonmsa/autocasa">projeto no Github</a> e contribua <a href="https://github.com/ayrtonmsa/autocasa/pulls">Pull requests</a></p>
            </div>
            <!--<div class="col-lg-4">
                <img src="{{ asset('/img/intro02.png') }}" alt="">
                <h3>TO DO</h3>
                <p>Criar controle de administração para criação de módulos e permissões.</p>
            </div>
             <div class="col-lg-4">
                <img src="{{ asset('/img/intro03.png') }}" alt="">
                <h3>Monitoração</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div> -->
        </div>
        <br>
        <hr>
    </div> <!--/ .container -->
</div><!--/ #introwrap -->

<!-- FEATURES WRAP -->
<div id="features">
    <div class="container">
        <div class="row">
            <h1 class="centered">De que se trata?</h1>
            <br>
            <br>
            <div class="col-lg-6 centered">
                <img class="centered" src="{{ asset('/img/mobile.png') }}" alt="">
            </div>

            <div class="col-lg-6">
                <h3>O produto</h3>
                <br>
                <!-- ACCORDION -->
                <div class="accordion ac" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                Sistema
                            </a>
                        </div><!-- /accordion-heading -->
                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="accordion-inner">
                                <p>O sistema desenvolvido, tem como objetivo o acesso restrito a sua casa por meio de senha cadastrada com seu
                                 Email, para total segurança do usuario. terá sua pagina customizada com sua casa, para que ele possa com poucos passos
                                 controlar totalmente todos os dispositivos instalados.</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                Projeto
                            </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>Cada projeto é desenvolvido com um objetivo, o cliente deverá escolher quais dispositivos quer automatizar, e se
                                 todas as tomadas e luzes devem ou não ser automatizadas, fora os sensores que ele quer que tenha em sua casa.</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>

                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                Suporte
                            </a>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <p>O cliente terá um suporte fixo para sempre que precisar de algo, contar com nossos serviços.</p>
                            </div><!-- /accordion-inner -->
                        </div><!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>

                    <div class="accordion-group">
                       <!-- <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                Responsive Design
                            </a>
                        </div>
                        <div id="collapseFour" class="accordion-body collapse">
                             <div class="accordion-inner">
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div> -->
                            <!-- /accordion-inner -->
                        <!-- </div> -->
                        <!-- /collapse -->
                    </div><!-- /accordion-group -->
                    <br>
                </div><!-- Accordion -->
            </div>
        </div>
    </div><!--/ .container -->
</div><!--/ #features -->


<section id="showcase" name="showcase"></section>
<div id="showcase">
    <div class="container">
        <div class="row">
            <h1 class="centered">Exemplos</h1>
            <br>
            <div class="col-lg-8 col-lg-offset-2">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{ asset('/img/item-01.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/img/item-02.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div><!-- /container -->
</div>


<section id="contact" name="contact"></section>
<div id="footerwrap">
    <div class="container">
        <div class="col-lg-5">
            <h3>Contato</h3>
            <p>
                e-mail: ayrton.maradona@gmail.com<br/>
                facebook: Ayrton Maradona<br/>
                Whatsapp: (81)9 9961-7786<br/>
                Recife-PE
            </p>
        </div>

        <div class="col-lg-7">
            <h3>Envie um E-mail</h3>
            <br>
            <form role="form" action="#" method="post" enctype="plain">
                <div class="form-group">
                    <label for="name1">Nome</label>
                    <input type="name" name="Name" class="form-control" id="name1" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="email1">Email</label>
                    <input type="email" name="Mail" class="form-control" id="email1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label>Texto</label>
                    <textarea class="form-control" name="Message" rows="3"></textarea>
                </div>
                <br>
                <!-- <button type="submit" class="btn btn-large btn-success">SUBMIT</button> -->
            </form>
        </div>
    </div>
</div>
<div id="c">
    <div class="container">
        <p>
            <a href="https://github.com/ayrtonmsa/autocasa"></a><b>AutoCasa</b></a>. Um projeto de conclusão de curso desenvolvido por Ayrton Maradona
        </p>

    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
