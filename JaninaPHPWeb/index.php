<!DOCTYPE html>
<html>
    <head>
        <meta charset="CP1250">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="/icons/favicon.png">

        <title>Vizážistka | Jana Budková</title>

        <!-- Bootstrap core CSS -->
        <link href="/js/libs/twitter-bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/css/lightbox.css" rel="stylesheet"/>
        <link href="/css/main.css" rel="stylesheet">
    </head>
    <!-- NAVBAR
    ================================================== -->
    <body>
        <?php
        include "header.php";
        ?>

        <div id="content" class="main_content container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Hledáte vhodný dárek?</h1>
                                <p>Darujte Vašim blízkým poukázku na vizážistické služby, kurz líčení, kosmetické přípravky a jiné.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Více informací</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>AKCE: Plesové líčení</h1>
                                <p>Dejte se se kamarádkami dohromady a nechte se společně nalíčit nebo učesat za výhodnější cenu!!</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Rezervovat termín</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Svatební líčení</h1>
                                <p>Volné zimní termíny svatebního líčení a dále také volné termíny na rok 2014!!
                                </p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Rezervovat termín</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div><!-- /.carousel -->

            <div class="container highlights">

                <!-- Three columns of text below the carousel -->
                <div class="row">
                    <div class="col-lg-4">
                        <img class="img-circle param-header" src="/images/gallery/poradenstvi2.jpg" alt="Generic placeholder image">
                        <h2>Kosmetické poradenství</h2>
                        <p>Máte problémy s pletí? Chcete něco změnit a nevíte jak na to? Nechte si ode mě poradit a objednejte se na kosmetické poradenství zcela ZDARMA!</p>
                        <p><a class="btn btn-default" href="#" role="button">Více informací &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img class="img-circle param-header" src="/images/gallery/liceni.jpg" alt="Generic placeholder image">
                        <h2>Vizážistické služby</h2>
                        <p>Buďte krásná při každé příležitosti! Svatební a slavnostní líčení, foto make up a další</p>
                        <p><a class="btn btn-default" href="#" role="button">Více informací &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img class="img-circle param-header" src="/images/gallery/kurz5-nahled.jpg" alt="Generic placeholder image">
                        <h2>Kurzy líčení</h2>
                        <p>Kurzy pro začátečníky i pokročilé. Zjistíte, jak správně připravit pleť pro líčení, jak vybrat vhodný typ make-upu, jaké barvy Vás sluší, jaká používat líčidla, jak pracovat se štětci, atd.</p>
                        <p><a class="btn btn-default" href="#" role="button">Více informací &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>

        <script src="/js/libs/jquery/jquery.js"></script>
        <script src="/js/libs/twitter-bootstrap/js/bootstrap.js"></script>
        <script src="/js/libs/holder.js"></script>
        <script src="/js/libs/lightbox-2.6.min.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>
