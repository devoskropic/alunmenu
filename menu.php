<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Alun Café | Menú</title>

        <link href="//fonts.googleapis.com/css2?family=Manrope:wght@200;400;600&display=swap" rel="stylesheet">

        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/style-starter.css">
    </head>
    <body>
        <!--header-->
        <?php 
            require "include/header.php";
        ?>
        <!--/header-->
        <div class="inner-banner">
        </div>
        <section class="d7l-breadcrumb">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="#">Inicio</a></li>
                    <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Menú</li>
                </ul>
            </div>
        </section>
        <div class="d7l-menublock py-5">
            <div id="d7l-menublock" class="text-center py-lg-4 py-md-3">
                <div class="container">
                    <div class="title-content mb-5">
                        <h5 class="title-small text-center mb-2">Productos para ti</h5>
                        <h3 class="title-big text-center mb-5">Con la mejor calidad</h3>
                    </div>

                    <input id="tab1" type="radio" name="tabs" checked>
                    <label class="tabtle" for="tab1">Bebidas</label>

                    <input id="tab2" type="radio" name="tabs">
                    <label class="tabtle" for="tab2">Alimentos</label>

                    <input id="tab3" type="radio" name="tabs">
                    <label class="tabtle" for="tab3">Temporadas</label>

                    <section id="content1" class="tab-content text-left">
                        <div class="row menu-body">
                            <img src="assets/images/metwo.png" alt="">
                        </div>
                    </section>

                    <section id="content2" class="tab-content text-left">
                        <div class="row menu-body">
                            <img src="assets/images/meone.png" alt="">
                        </div>
                    </section>

                    <section id="content3" class="tab-content text-left">
                        <div class="row menu-body">
                            <img src="assets/images/construct.jpg" alt="">
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <?php 
            require "include/footer.php";
            require "include/scripts.php";
        ?>        
    </body>
</html>