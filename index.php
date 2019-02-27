<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head class="">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="">
        <meta name="description" content="">

        <title>Rucon 3D</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/component.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/vegas.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/chosen.css">
        <link rel="stylesheet" href="css/ImageSelect.css">

        <!-- Google web font  -->
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Teko:400,500,600" rel="stylesheet">

    </head>
    <style>
        /* HIDE RADIO */
        [type=radio] { 
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* IMAGE STYLES */
        [type=radio] + img {
            cursor: pointer;
        }

        /* CHECKED STYLES */
        [type=radio]:checked + img {
            outline: 2px solid #f00;
            padding: 6px 6px 6px 6px;
        }

        .h1-datos{
            font-size: 35px; 
            color: #fff; 
            font-weight: 300;
            margin-bottom: -25px;
            margin-top: 35px;
        }
    </style>
    <body id="top" data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


        <!-- Preloader section -->

        <div class="preloader">
            <div class="sk-spinner sk-spinner-pulse"></div>
        </div>


        <!-- Navigation section  -->

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>
                    <a href="#top" class="navbar-brand smoothScroll" style="color: #fff; font-family: 'Teko', sans-serif; font-weight: 700; font-size: 35px; margin-top: 5px;
                       text-shadow: 3px 0 0 #000, -3px 0 0 #000, 0 3px 0 #000, 0 -3px 0 #000, 2px 2px #000, -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000;">
                        RUCON 3D
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about" class="smoothScroll"><span>Quienes somos</span></a></li>
                        <li><a href="#gallery" class="smoothScroll"><span>Gallery</span></a></li>
                        <li><a href="#contact" class="smoothScroll"><span>Servicios</span></a></li>
                        <li><a href="#contact" class="smoothScroll"><span>Calidad</span></a></li>
                        <li><a href="#contact" class="smoothScroll"><span>Contact</span></a></li>
                        <a href="#contact" class="smoothScroll btn btn-success btn-lg" style="padding: 5px 10px 5px 10px; margin: 10px 10px 0px 10px; color: #fff; font-size: 17px;"><span>SUBIR ARCHIVO</span></a>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Home section -->

        <section id="home">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                        <img src="images/fondo_portada.png" style="margin-bottom: -70px">
                        <h1 class="wow fadeInUp" data-wow-delay="0.6s" style="color: #fff; font-family: 'Teko', sans-serif; font-weight: 700; font-size: 55px;
                            text-shadow: 3px 0 0 #000, -3px 0 0 #000, 0 3px 0 #000, 0 -3px 0 #000, 2px 2px #000, -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000;">RUCON 3D</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.9s">Servicios de impresión de piezas en 3D. <br>Especializados en personalización de objetos<a rel="nofollow" href="http://www.templatemo.com"></a>. </p>
                        <a href="#about" class="smoothScroll btn btn-success btn-lg wow fadeInUp" data-wow-delay="1.2s">Learn more</a>
                    </div>
                </div>
            </div>
        </section>

        <div id="about">
            <div class="container-fluid">
                <div class="section-title text-center center" style="margin-top: -80px">
                    <h1>Quienes somos</h1>
                </div>
                <div class="row ">
                    <div class="container col-xs-12 col-md-6"><img src="images/team-img2.jpg" class="img-responsive" alt=""> </div>
                    <div class="container col-xs-12 col-md-6">
                        <div class="about-text" >
                            <h1 style="color: #fff; font-family: 'Teko', sans-serif; font-weight: 700; font-size: 35px;
                                text-shadow: 3px 0 0 #000, -3px 0 0 #000, 0 3px 0 #000, 0 -3px 0 #000, 2px 2px #000, -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000;">RUCON 3D</h1>
                            <p style="color: #262626">Lorem ipsum dolor sit amet consectetur adipiscing elit facilisis bibendum, volutpat potenti id arcu mollis mi nisi sociis, aliquam ultricies nibh imperdiet magna orci litora curabitur. Sollicitudin feugiat maecenas eget tempor scelerisque ornare sed per consequat molestie parturient, nam himenaeos fermentum senectus primis in phasellus nisl etiam rutrum, auctor vehicula vel diam hac suscipit tellus ultrices netus ullamcorper. Penatibus accumsan sagittis nullam magnis quis pretium et risus venenatis curae, nostra fringilla viverra sociosqu elementum aptent quam egestas pellentesque conubia, pharetra vestibulum habitasse odio hendrerit pulvinar cursus felis sodales. Porttitor vulputate laoreet facilisi posuere gravida augue tincidunt nulla cubilia, praesent tristique mauris erat convallis nunc integer suspendisse inceptos, natoque ante aenean taciti interdum vivamus metus platea.</p>
                            <p style="color: #262626">Condimentum torquent nascetur euismod morbi congue montes dignissim ad, ligula varius eros habitant faucibus tempus est donec rhoncus, libero mus blandit lectus iaculis non dictum. Sapien dui vitae turpis mattis purus, lacinia dapibus ut enim.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About section -->
        <section id="file" style="background: #222">
            <div class="container-fluid">
                <div class="col-md-5">
                    <div class="text-center" style="margin-top: -75px">
                        <div class="form-group">
                            <h1 style="font-size: 35px; margin-bottom: -5px; color: #fff">Color</h1>
                            <select style="padding: 6px 140px 6px 5px; border-radius: 5px" class="my-select"> 
                                <option data-img-src="images/team-img2.jpg" value="0">Elegir color</option>  

                                <?php
                                $provincias = array("2018", "2017", "2016", "2015", "2014", "2013", "2012", "2011", "2010", "2009", "2008", "2007", "2006", "2005", "2004", "2003", "2002", "2001", "2000", "1999", "1998", "1997", "1996", "1995", "1994", "1993", "1992", "1991", "1990", "1989", "1988", "1987", "1986", "1985", "1984", "1983", "1982", "1981", "1980", "1979", "1978", "1977", "1976", "1975", "1974", "1973", "1972", "1971", "1970");

                                foreach ($provincias as $c => $v) {

                                    echo "<option data-img-src='$v' value='$v'>$v</option>";
                                }
                                ?> 
                            </select> 
                        </div>
                    </div>

                    <br>
                    <div class="text-center" style="padding: 2px 2px 2px 2px; margin-top: -45px">
                        <h1 class="h1-datos" style="margin-bottom: 0">material</h1>
                        <div class="col-lg-4">
                            <a style="font: caption; font-size: 15px; color: #777" data-toggle="collapse" href="#pla" role="button" aria-expanded="false" aria-controls="pla">PLASTICO&dtrif;</a>
                            <p style="font: caption; font-size: 15px" class="collapse" id="pla">Lorem ipsum dolor sit amet consectetur, adipiscing elit platea ultricies curae, at maecenas iaculis vehicula.</p>
                            <label>
                                <input type="radio" name="mat" value="one">
                                <img class="img-responsive" src="images/team-img1.jpg">
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <a style="font: caption; font-size: 15px; color: #777" data-toggle="collapse" href="#flex" role="button" aria-expanded="false" aria-controls="flex">FLEXIBLE&dtrif;</a>
                            <p style="font: caption; font-size: 15px" class="collapse" id="flex">Lorem ipsum dolor sit amet consectetur, adipiscing elit platea ultricies curae, at maecenas iaculis vehicula.</p>
                            <label>
                                <input type="radio" name="mat" value="one">
                                <img class="img-responsive" src="images/team-img2.jpg">
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <a style="font: caption; font-size: 15px; color: #777" data-toggle="collapse" href="#flor" role="button" aria-expanded="false" aria-controls="flor">FLORESCENTE&dtrif;</a>
                            <p style="font: caption; font-size: 15px" class="collapse" id="flor">Lorem ipsum dolor sit amet consectetur, adipiscing elit platea ultricies curae, at maecenas iaculis vehicula.</p>
                            <label>
                                <input type="radio" name="mat" value="one">
                                <img class="img-responsive" src="images/team-img3.jpg">
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="text-center" style="padding: 2px 2px 2px 2px;">
                        <h1 class="h1-datos">relleno</h1>
                        <div class="col-md-4">
                            <h2 style="font: caption; font-size: 15px; color: #777">0% - 30%</h2>
                            <label>
                                <input type="radio" name="relleno" value="one">
                                <img class="img-responsive" src="images/team-img1.jpg">
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <h2 style="font: caption; font-size: 15px; color: #777">30% - 60%</h2>                        
                            <label>
                                <input type="radio" name="relleno" value="one">
                                <img class="img-responsive" src="images/team-img1.jpg">
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <h2 style="font: caption; font-size: 15px; color: #777">60% - 100%</h2>                        
                            <label>
                                <input type="radio" name="relleno" value="one">
                                <img class="img-responsive" src="images/team-img1.jpg">
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="text-center" style="padding: 2px 2px 2px 2px;">
                        <h1 class="h1-datos">calidad</h1>
                        <div class="col-lg-4">
                            <h2 style="font: caption; font-size: 15px; color: #777">Baja</h2>                        
                            <label>
                                <input type="radio" name="calidad" value="one">
                                <img class="img-responsive" src="images/team-img1.jpg">
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <h2 style="font: caption; font-size: 15px; color: #777">Media</h2>                       
                            <label>
                                <input type="radio" name="calidad" value="one">
                                <img class="img-responsive" src="images/team-img1.jpg">
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <h2 style="font: caption; font-size: 15px; color: #777">Alta</h2>                        
                            <label>
                                <input type="radio" name="calidad" value="one">
                                <img class="img-responsive" src="images/team-img1.jpg">
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <h1 class="h1-datos" style="margin-bottom: 0">escala</h1>
                        <div class="form-row center-block">
                            <div class="col-xs-4">
                                <p style="color: #e0e0e0; font: status-bar; font-size: 15px; letter-spacing: 2px; text-align: left; margin-top: 10px">Largo</p>
                                <input type="number" class="form-control" placeholder="Eje X" pattern="[2-21]+" title="Tamaño minimo: 2cm Tamaño máximo: 21cm"
                                       minlength="2" maxlength="21" xstyle="background-color: #f2f2f2">
                            </div>
                            <div class="col-xs-4">
                                <p style="color: #e0e0e0; font: status-bar; font-size: 15px; letter-spacing: 2px; text-align: left; margin-top: 10px">Ancho</p>

                                <input type="text" class="form-control" placeholder="Eje Y" pattern="[2-21]+" title="Tamaño minimo: 2cm Tamaño máximo: 21cm"
                                       minlength="2" maxlength="21" style="background-color: #f2f2f2">
                            </div>
                            <div class="col-xs-4">                               
                                <p style="color: #e0e0e0; font: status-bar; font-size: 15px; letter-spacing: 2px; text-align: left; margin-top: 10px">Alto</p>
                                <input type="text" class="form-control" placeholder="Eje Z" pattern="[0-9]+" title="Tamaño minimo: 2cm Tamaño máximo: 21cm"
                                       minlength="2" maxlength="21" style="background-color: #f2f2f2">
                            </div>
                        </div>
                        <p class="col-xs-12" style="font-size: 15px">  Escala no más mayor de 21 x 21 x 21cm y tampoco menor de 2 x 2 x 2cm</p>
                    </div>
                    
                </div>

                <div class="col-md-7 container" style="margin-top: 5px;">
                    <div>
                        <h1 class="text-center h1-datos" style="margin-bottom: 0">Subir archivo</h1>
                    <div class="custom-file" style="">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                    </div>
                        <p>Envianos el archivo de la pieza para la impresion.</p>
                    </div>
                    <div>
                        <h1 class="text-center" style="font-size: 35px; color: #fff; font-weight: 300">Visualizador</h1>
                    </div>
                    <hr>
                    <iframe class="wow fadeInDownBig" data-wow-delay="0.6s" id="vs_iframe" src="https://www.viewstl.com/?embedded" style="padding-top: 3px; border-radius: 5px; width:100%; height:650px; background-color: #f2f2f2"></iframe>
                </div>
            </div>
        </section>

        <section id="gallery">
            <div class="container-fluid">
                <div class="row">
                    <ul class="grid cs-style-4">
                        <div class="container col-xs-12 col-md-6">
                            <div class="about-text">
                                <h1 class="text-center">SERVICIOS</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit montes eros sociis, scelerisque consequat netus egestas cras molestie eu nostra platea diam vitae, curae iaculis porttitor elementum non torquent fringilla ultricies facilisi. Dictumst ante hendrerit placerat tellus blandit pulvinar sollicitudin commodo, mus accumsan ridiculus parturient luctus felis pretium, habitant mauris lacinia gravida sem fames odio. Magna nisl id velit rhoncus duis magnis quis, conubia varius euismod aptent neque habitasse cursus, in quam mi dignissim tincidunt est.</p></div>
                        </div>
                        <div class="col-md-1 col-sm-1"></div>
                        <li class=" container col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.7s">
                            <figure>
                                <div><img src="images/gallery-img1.jpg" alt="image 1"></div>
                                <figcaption>
                                    <h1>Boquillas</h1>
                                    <small>Se realizan modelos personalizados de boquillas para cachimba y vaper</small>
                                    <a href="view/Frontend/viewBoquillas/viewCatalogue.php">Ver Todo</a>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>

                </div>
            </div>
        </section>

        <!-- Gallery section -->
        <section id="gallery">
            <div class="container-fluid">
                <div class="row">
                    <ul class="grid cs-style-4">
                        <li class=" container col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.7s">
                            <figure>
                                <div><img src="images/gallery-img1.jpg" alt="image 1"></div>
                                <figcaption>
                                    <h1>Boquillas</h1>
                                    <small>Se realizan modelos personalizados de boquillas para cachimba y vaper</small>
                                    <a href="view/Frontend/viewBoquillas/viewCatalogue.php">Ver Todo</a>
                                </figcaption>
                            </figure>
                        </li>
                        <div class="col-md-1 col-sm-1"></div>

                        <div class="container col-xs-12 col-md-6">
                            <div class="about-text">
                                <h1 class="text-center">SERVICIOS</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit montes eros sociis, scelerisque consequat netus egestas cras molestie eu nostra platea diam vitae, curae iaculis porttitor elementum non torquent fringilla ultricies facilisi. Dictumst ante hendrerit placerat tellus blandit pulvinar sollicitudin commodo, mus accumsan ridiculus parturient luctus felis pretium, habitant mauris lacinia gravida sem fames odio. Magna nisl id velit rhoncus duis magnis quis, conubia varius euismod aptent neque habitasse cursus, in quam mi dignissim tincidunt est.</p></div>
                        </div>
                    </ul>

                </div>
            </div>
        </section>


        <!-- Contact section -->

        <section id="contact">
            <div class="container">
                <div class="row">

                    <div class="col-md-offset-1 col-md-10 col-sm-12">

                        <div class="col-lg-offset-1 col-lg-10 section-title wow fadeInUp" data-wow-delay="0.4s">
                            <h1>Send a message</h1>
                            <p>Nunc suscipit ante in lectus laoreet, nec pharetra diam dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>

                        <form action="#" method="post" class="wow fadeInUp" data-wow-delay="0.8s">
                            <div class="col-md-6 col-sm-6">
                                <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
                            </div>
                            <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                                <input type="submit" class="form-control" value="SEND MESSAGE">
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </section>


        <!-- Footer section -->

        <footer>
            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <ul class="social-icon">
                            <li><a href="https://www.facebook.com/Rucon3D-142455369768057/" class="fa fa-facebook wow fadeInUp" data-wow-delay="0.2s"></a></li>
                            <li><a href="#" class="fa fa-linkedin wow fadeInUp" data-wow-delay="0.6s"></a></li>
                            <li><a href="https://www.instagram.com/rucon3d/" class="fa fa-instagram wow fadeInUp" data-wow-delay="0.8s"></a></li>
                            <li><a href="https://www.google.com/maps/place/Rucon3D/@38.9127421,-6.6219739,15z/data=!4m5!3m4!1s0x0:0xb63a805d775c3f0b!8m2!3d38.9127421!4d-6.6219739" class="fa fa-google wow fadeInUp" data-wow-delay="1.0s"></a></li>
                        </ul>

                        <p class="wow fadeInUp"  data-wow-delay="1s" >Copyright &copy; 2016 Snapshot Studio |
                            Design: <a title="free css templates" target="_blank">EmulanDeveloper</a></p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Back top -->
        <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

        <!-- Javascript  -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/vegas.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/toucheffects.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/toucheffects.js"></script>
        <script src="js/vegas.min.js"></script>
        <script src="js/chosen.jquery.js"></script>
        <script src="js/ImageSelect.jquery.js"></script>
        <script>
            $(".my-select").chosen();
        </script>

    </body>
</html>
