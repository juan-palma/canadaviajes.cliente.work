<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="fonts/stylesheet.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/condenced.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/14986d8b5b.js"></script>
    <meta name="format-detection" content="telephone=no">
    <title>QUEBEC</title>
    <?php include("style.php");?>
</head>

<body class="book">
    <nav class="nav row black-bg white m-0 p-0 showDesk">
        <div class="col-6 col-md-3 text-center align-self-center">
            <img src="img/logos/Travel_LOGO1_BLANCO.png" class="logo1">
            <div class="red-bg" style="width: 3px;float: left;height: 32px;"></div>
            <img src="img/logos/QuebecLogo_azul.png" class="logo2 align-self-center">
        </div>
        <div class="col text-uppercase text-right heads headsB">
            <span class="red-hover hover toronto1" onclick="goTo('toronto1')">montreal esencial<div class="lines"></div></span>
            <span class="red-hover hover toronto2" onclick="goTo('toronto2')">montral para todos<div class="lines"></div></span>
            <span class="red-hover hover toronto3" onclick="goTo('toronto3')">ciudades quebequences en oto&ntilde;o<div class="lines"></div></span>
            <span class="red-hover hover toronto4" onclick="goTo('toronto4')">esqu&iacute; en mont tremblant<div class="lines"></div></span>
            <span class="red-hover hover toronto4" onclick="goTo('toronto5')">quebec esencial<div class="lines"></div></span>
            <span class="red-hover hover toronto4" onclick="goTo('toronto6')">quebec de lujo<div class="lines"></div></span>
        </div>
    </nav>
    <nav class="nav row black-bg white m-0 p-0 showMobil">
        <div class="col col-md-3 text-center align-self-center black-bg ">
            <img src="img/logos/Canada_white.png" style="width:57px;margin-top: 3px;">
            <div class="red-bg" style="width: 3px;float: left;height: 32px;margin:15px 10px 0;"></div>
            <img src="img/logos/QuebecLogo_azul.png" class="logo2 align-self-center">
            <span class="headsB" style="float:right;" onclick="$('#headerRes').slideToggle(300)">RESERVAR</span>
            <form class="reserva red-bg" id="headerRes" style="display: none">
                <div class="form-group reserv ">
                    <h2 class="book black">Reservar</h2> Para reservaciones v&iacute;a telef&oacute;nica
                    <br> y a trav&eacute;s de whatsapp o registrate aqu&iacute;
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Teléfono">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-default black-bg white">ENVIAR</button>
                </div>
                <div class="form-group text-uppercase text-center headsB black pl-2 pr-2 ">
                    <h5 style="font-size: 20px;margin-bottom:30px;">hasta 15 meses sin intereses * con american express o 6 meses con otras tarjetas + 9,000 puntos payback(1) por reserva</h5>
                </div>
            </form>
        </div>
        <div class="col-12 red-bg white text-right" style="height: 50px;line-height: 40px;padding: 5px 0;">
            <img width="30" onclick="window.open('https://web.whatsapp.com/send?phone=+5259012020','_blank')" src="img/iconos/whatsapp.png" style="float: right;margin-top:-5px;">
            <span class="headsB white " style="font-size:2rem;float:right;">01800-52072223</span>
        </div>
    </nav>
    <div class="imageBG" style="display: none"></div>
    <div class="play" onclick="playVideo()" style="display:none"></div>
    <div class="content-fluid">
        <div class="btnSoundActive" onclick="deactivateSound()" style="display: none">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M22 0v24l-11-6v-2.278l9 4.909v-17.262l-9 4.91v-2.279l11-6zm-13 6v12h-7v-12h7z"></path>
            </svg>
        </div>
        <div class="btnSoundInactive" onclick="activateSound()" style="display: none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M3 9v6h-1v-6h1zm13-7l-9 5v2.288l7-3.889v13.202l-7-3.889v2.288l9 5v-20zm-11 5h-5v10h5v-10zm13.008 2.093c.742.743 1.2 1.77 1.198 2.903-.002 1.133-.462 2.158-1.205 2.9l1.219 1.223c1.057-1.053 1.712-2.511 1.715-4.121.002-1.611-.648-3.068-1.702-4.125l-1.225 1.22zm2.142-2.135c1.288 1.292 2.082 3.073 2.079 5.041s-.804 3.75-2.096 5.039l1.25 1.254c1.612-1.608 2.613-3.834 2.616-6.291.005-2.457-.986-4.681-2.595-6.293l-1.254 1.25z"></path>
            </svg>
        </div>
        <script>
            var myPlayer;
            function itinerario(file){
                window.open("archivos/"+file+".pdf","_blank");
            }
            function goTo(id) {
                $("html,body").stop().animate({
                    scrollTop: $("#" + id).offset().top + "px"
                }, 500);
            }
            $(function() {
                if ($(window).width() > 1280) {
                    $('#video .video').css({
                        "height": $(window).height() + "px",
                        "opacity": "0"
                    });
                }

                $(window).on("scroll", function() {
                    var posWi = $(window).scrollTop() + 200;

                    if ($(window).width() > 800) {
                        $('.tempStyle').html("<style>#video div#my-video{top:-" + ((posWi / 5) + 30) + "px !important; } article#video:before{ background-position:center -" + (posWi / 10) + "px; }</style>")
                    }
                    if ($(window).width() < 800) {

                        $('.tempStyle2').html("<style>#logos .barra:before{width:" + $(window).width() + "px; } </style>")
                    }
                    if (($(window).width() <= 1300 && $(window).width() > 800) || $(window).width() > 800) {
                        if (posWi > (930 + 200)) {
                            //$('.imageBG').stop().show();
                        } else {
                            //$('.imageBG').stop().hide();
                            $('.formReserva').removeAttr("style");
                        }
                    }

                    var slide1 = $("#toronto1").offset().top;
                    var slide2 = $("#toronto2").offset().top;
                    var slide3 = $("#toronto3").offset().top;
                    var slide4 = $("#toronto4").offset().top;
                    var slide5 = $("#toronto5").offset().top;
                    var slide6 = $("#toronto6").offset().top;

                    if ((posWi - 0) >= slide1 && posWi <= slide6) {
                        fixContact();
                    }
                    if (posWi - 320 >= slide6) {
                        unfixContact(posWi);
                    }

                    if (posWi >= slide1 && posWi <= slide2) {

                        $('.toronto1').addClass("red").find('.lines').css({
                            "opacity": "1",
                            "height": "40px"
                        });
                        $("#sliderToronto1").stop().css({
                            "opacity": "1"
                        });
                    } else {
                        $('.toronto1').removeClass("red").find('.lines').css({
                            "opacity": ".5",
                            "height": "30px"
                        });
                        $("#sliderToronto1").stop().css({
                            "opacity": "0"
                        });
                    }
                    if (posWi >= slide2 && posWi <= slide3) {
                        $('.toronto2').addClass("red").find('.lines').css({
                            "opacity": "1",
                            "height": "40px"
                        });
                        $("#sliderToronto2").stop().css({
                            "opacity": "1"
                        });
                    } else {
                        $('.toronto2').removeClass("red").find('.lines').css({
                            "opacity": ".5",
                            "height": "30px"
                        });
                        $("#sliderToronto2").stop().css({
                            "opacity": "0"
                        });
                    }
                    if (posWi >= slide3 && posWi <= slide4) {
                        $('.toronto3').addClass("red").find('.lines').css({
                            "opacity": "1",
                            "height": "40px"
                        });
                        $("#sliderToronto3").stop().css({
                            "opacity": "1"
                        });
                    } else {
                        $('.toronto3').removeClass("red").find('.lines').css({
                            "opacity": ".5",
                            "height": "30px"
                        });
                        $("#sliderToronto3").stop().css({
                            "opacity": "0"
                        });
                    }
                    if (posWi >= slide4 && posWi <= slide5) {
                        $('.toronto4').addClass("red").find('.lines').css({
                            "opacity": "1",
                            "height": "40px"
                        });
                        $("#sliderToronto4").stop().css({
                            "opacity": "1"
                        });
                    } else {
                        $('.toronto4').removeClass("red").find('.lines').css({
                            "opacity": ".5",
                            "height": "30px"
                        });
                        $("#sliderToronto4").stop().css({
                            "opacity": "0"
                        });
                    }
                    if (posWi >= slide5 && posWi <= slide6) {
                        $('.toronto5').addClass("red").find('.lines').css({
                            "opacity": "1",
                            "height": "40px"
                        });
                        $("#sliderToronto5").stop().css({
                            "opacity": "1"
                        });
                    } else {
                        $('.toronto5').removeClass("red").find('.lines').css({
                            "opacity": ".5",
                            "height": "30px"
                        });
                        $("#sliderToronto5").stop().css({
                            "opacity": "0"
                        });
                    }
                    if (posWi >= slide6) {
                        $('.toronto6').addClass("red").find('.lines').css({
                            "opacity": "1",
                            "height": "40px"
                        });
                        $("#sliderToronto6").stop().css({
                            "opacity": "1"
                        });
                    } else {
                        $('.toronto6').removeClass("red").find('.lines').css({
                            "opacity": ".5",
                            "height": "30px"
                        });
                        $("#sliderToronto6").stop().css({
                            "opacity": "0"
                        });
                    }
                });

                myPlayer = videojs('my-video');

            })

            var bottom = false;

            function fixContact() {
                var res = $('.formReserva');
                res.css({
                    "position": "fixed"
                }).stop().css({
                    "top": "160px",
                    "width": $('.centralColumn').width() + "px",
                    "height": $('.centralColumn').height() + "px",
                    "right": " ",
                    "z-index": 1
                });
                if (bottom == true) {

                }

            }

            function unfixContact(posWi) {
                bottom = true;
                /*var html = $('.formReserva').css({
                	"position":"absolute",
                    "top": "0px",
                    "right":"-"+$('.centralColumn').width()+"px",
                    "width":$('.centralColumn').width()+"px"
                });

                $('#toronto4 .centralColumn').append(html)*/
                var top = $('#toronto1').height() * 3;
                top = (top + $('#toronto4 .row:first-child').height()) - 50;
                $('.formReserva').css({
                    "position": "absolute",
                    "top": top + "px"
                });

            }

            function activateSound() {
                $('video').prop("muted", false);
                $('.btnSoundActive').show();
                $('.btnSoundInactive').hide();
            }

            function deactivateSound() {
                $('video').prop("muted", true);
                $('.btnSoundActive').hide();
                $('.btnSoundInactive').show();
            }

            function playVideo() {
                $('.play').fadeOut(500);
                deactivateSound()
                setTimeout(function() {
                    $('#my-video_html5_api').fadeIn(500)
                }, 1000)
                $('#my-video').fadeIn(1000, function() {
                    myPlayer.play();

                    $('#video .video').stop().animate({
                        "opacity": "1"
                    }, 500);
                })
            }
        </script>
        <!--video js-->
        <link href="https://vjs.zencdn.net/7.6.0/video-js.css" rel="stylesheet">
        <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
        <script src='https://vjs.zencdn.net/7.6.0/video.js'></script>
        <div class="loader" style="display: none">
            <i class="fas fa-circle-notch fa-spin"></i>
        </div>
        <script>
            $(function() {
                myPlayer = videojs('my-video');
                if ($(window).width() > 800) {
                    setTimeout(function() {
                        playVideo()
                    }, 1000);
                }
                /*$("body,html").css({"overflow":"hidden"});
                $(".image img").on("load",function(){
                	$("body,html").removeAttr("style");
                	$('.loader').fadeOut(300);
                })*/
                ;
            });
        </script>
        <div class="tempStyle"></div>
        <div class="tempStyle2"></div>

        <article class="m-0 p-0" id="video">

            <div class="image " id="imageRe">
                <img src="img/imagenes/Imagen_ciudad.png" class="">
            </div>
            <div class="video">

                <video style="display:none" id='my-video' class='video-js' preload='auto' width='640' height='264' data-setup='{}' loop>
                    <source src="video/video.mp4" type="video/mp4"> Your browser does not support HTML5 video.
                </video>
            </div>
        </article>
    </div>

    <div class="bg-container"></div>
    <script>
        $(function() {
            /*$(window).on("scroll",function(){
            	layerBGCalc();
            });*/
            layerBGCalc()
        });

        function layerBGCalc() {
            var calc = $("#toronto1").position().top;
            $('.bg-container').css({
                "top": calc + "px"
            });
        }
    </script>

    <div class="contianerS">
        <div class="sliders">
            <div id="sliderToronto1" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image:url()">
                        <img src="img/galeria/Montreal_Esencial/1.jpg" class="w-100">

                    </div>
                    <div class="carousel-item" style="background-image:url()">
                        <img src="img/galeria/Montreal_Esencial/2.jpg" class="w-100">

                    </div>
                    <div class="carousel-item" style="background-image:url()">
                        <img src="img/galeria/Montreal_Esencial/3.jpg" class="w-100">

                    </div>

                </div>
            </div>
            <div id="sliderToronto2" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image:url()">
                        <img src="img/galeria/Montreal_Todos/1.jpg" class="w-100">

                    </div>
                    <div class="carousel-item" style="background-image:url()">
                        <img src="img/galeria/Montreal_Todos/2.jpg" class="w-100">
                    </div>
                    <div class="carousel-item" style="background-image:url()">
                        <img src="img/galeria/Montreal_Todos/3.jpg" class="w-100">

                    </div>

                </div>
            </div>
            <div id="sliderToronto3" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image:url()">
                        <img src="img/galeria/Ciudades_Quebequences/1.jpg" class="w-100">

                    </div>
                    <div class="carousel-item" style="background-image:url()">
                        <img src="img/galeria/Ciudades_Quebequences/2.jpg" class="w-100">

                    </div>
                    <div class="carousel-item" style="background-image:url()">
                        <img src="img/galeria/Ciudades_Quebequences/3.jpg" class="w-100">

                    </div>

                </div>
            </div>
            <div id="sliderToronto4" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image: url()">
                        <img src="img/galeria/Esqui_MontTremblant/1.jpg" class="w-100">

                    </div>
                    <div class="carousel-item" style="background-image:url()">
                        <img src="img/galeria/Esqui_MontTremblant/2.jpg" class="w-100">

                    </div>
                    <div class="carousel-item" style="background-image:url()">
                        <img src="img/galeria/Esqui_MontTremblant/3.jpg" class="w-100">

                    </div>
                </div>
            </div>
            <div id="sliderToronto5" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image: url()">
                        <img src="img/galeria/Quebec_Esencial/1.jpg" class="w-100">

                    </div>
                    <div class="carousel-item" style="background-image:url()">
                        <img src="img/galeria/Quebec_Esencial/2.jpg" class="w-100">

                    </div>
                    <div class="carousel-item" style="background-image:url()">
                        <img src="img/galeria/Quebec_Esencial/3.jpg" class="w-100">

                    </div>
                </div>
            </div>
            <div id="sliderToronto6" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image: url()">
                        <img src="img/galeria/Quebec_Lujo/1.jpg" class="w-100">

                    </div>
                    <div class="carousel-item" style="background-image:url()">
                        <img src="img/galeria/Quebec_Lujo/2.jpg" class="w-100">

                    </div>
                    <div class="carousel-item" style="background-image:url()">
                        <img src="img/galeria/Quebec_Lujo/3.jpg" class="w-100">

                    </div>
                </div>
            </div>
        </div>

        <article class="m-0 p-0 white toronto row" id="toronto1">
            <div class="container">
                <div class="contToronto col-12">
                    <div class="row ">
                        <div class="col-md-1"></div>
                        <div class="col">
                            <h1 class="headsB manchaHead">
			      					<span class="red">MONTREAL </span><br>
			      					<span>ESENCIAL</span>
			      				</h1>
                            <h3>Incluye <label class="font-weight-bold red">_</label></h3>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row ">
                        <div class="col-md-1"></div>
                        <div class="col">
                            <div class="row">
                                <div class="col-12 col-md-4 white-bg m-0 p-0 leftColumn">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="iconPackBar showDesk"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/iconos/alojamiento_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                3 noches de alojamiento en categor&iacute;a turista
                                                <div class="col-12">
                                                    <div class="border-bottom"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/imagenes/MontrealTuristico_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                Excursi&oacute;n privada de 3 horas a lugares de interés turístico de montreal con guía en español

                                                <div class="col-12">
                                                    <div class="border-bottom"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/imagenes/Rueda_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack pb-2">
                                                Excursión de día completo a sitios de atracción turística de la ciudad de Quebec, para las salidas entre el 27 de octubre al 28 de abril, los pasajeros tendrá tiempo libre en la ciudad de Montreal el día 3
                                                <small>(en servicio compartido en Ingles)<br><br></small>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-12 showMobil">
                                            <div class="black-bg iconPack p-2">

                                            </div>
                                            <div class="black contPack p-0 white text-center pt-2 pb-2 red-bg">
                                                <div class="download " onclick="itinerario('me')">
                                                    Descargar itinerario
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 col-md-4 m-0 p-0 centralColumn">
                                    <div class="row">
                                        <div class="col-2 align-self-center">
                                            <img src="img/iconos/persona_icono.png">
                                        </div>
                                        <div class="col">
                                            <h1 class="headsB">4 D&Iacute;AS</h1>
                                            <small class="red">salidas diarias de 1 noviembre 2019 al 20 de marzo 2020</small>
                                            <p>
                                                Precio por persona desde:
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2 col-md-3 align-self-center">

                                        </div>
                                        <div class="col">
                                            <h1 class="headsB">$660 <b class="red">USD</b></h1>

                                            <small>vuelo no incluido</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-4 pl-4 ml-3 pb-4 vigenciaC">
                                            precios no incluyen vuelos <br>
                                            Vigencia de la promoción:<br>
                                            Hasta el 31 de Octubre de 2019
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 col-md-4 showDesk m-0 p-0">
                                    <div class="formReserva red-bg">
                                        <div class="row p-0 m-0">
                                            <div class="col-12 p-4 reservaW">
                                                <h3 class="red">Reservar <img onclick="window.open('https://web.whatsapp.com/send?phone=+5259012020','_blank')" src="img/iconos/whatsapp.png" class="whatsappIcon"></h3>
                                                <h1 class="headsB white">59012020</h1>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 p-4">
                                                <form class="reserva" id="reservaDef">
                                                    <div class="form-group reserv">
                                                        Para reservaciones v&iacute;a
                                                        <br> telef&oacute;nica y a trav&eacute;s de
                                                        <br> whatsapp o registrate aqu&iacute;
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Nombre">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Teléfono">
                                                    </div>
                                                    <div class="form-group text-center">
                                                        <button class="btn btn-default black-bg white">ENVIAR</button>
                                                    </div>
                                                    <div class="form-group text-uppercase text-center headsB black pl-2 pr-2 ">
                                                        <h5 style="font-size: 25pt;">hasta 15 meses sin intereses * con american express o 6 meses con otras tarjetas + 9,000 puntos payback(1) por reserva</h5>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
            <div class="galeria col-12 galery1">
                <script>
                    var slider1
                    $(function() {
                        slider1 = $('#sliderToronto1').carousel();
                        $('#galery1 .dot').on("click", function() {
                            slider1.carousel(($(this).attr('go') * 1));
                            $('.' + $(this).attr('parent') + " .current").removeClass('current');
                            $(this).addClass('current');
                        });
                        $('#sliderToronto1').on('slide.bs.carousel', function(e) {
                            $('.galery1 .dot[go=' + e.from + ']').removeClass('current');
                            $('.galery1 .dot[go=' + e.to + ']').addClass('current');
                        })
                    });

                    function gotoSlide1(go, obj) {
                        slider1.carousel(go * 1);
                        $('.galery1 .current').removeClass('current');
                        obj.addClass('current');
                    }
                </script>
                <div class="row">
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="control col">
                                    <div class="left red-bg" onclick="slider1.carousel('prev')">
                                        <img src="img/iconos/flechaizq_icono.png">
                                    </div>
                                    <div class="pages red-bg">
                                        <div class="dot current" go="0" onclick="gotoSlide1(0,$(this))"></div>
                                        <div class="dot" go="1" onclick="gotoSlide1(1,$(this))"></div>
                                        <div class="dot" go="2" onclick="gotoSlide1(2,$(this))"></div>
                                        <!--<div class="dot" go="3" onclick="gotoSlide1(3,$(this))"></div>-->
                                    </div>
                                    <div class="right red-bg" onclick="slider1.carousel('next')">
                                        <img src="img/iconos/flechader_icono.png">
                                    </div>
                                    <div class="download red2-bg" onclick="itinerario('me')">
                                        Descargar itinerario
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 m-0 p-0">

                    </div>
                </div>
            </div>
        </article>

        <article class="m-0 p-0 white toronto row" id="toronto2">
            <div class="container">
                <div class="contToronto col-12">
                    <div class="row ">
                        <div class="col-md-1"></div>
                        <div class="col">
                            <h1 class="headsB manchaHead">
			      					<span class="red">MONTREAL</span><br>
			      					<span>PARA TODOS</span>
			      				</h1>
                            <h3>Incluye <label class="font-weight-bold red">_</label></h3>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row ">
                        <div class="col-md-1"></div>
                        <div class="col">
                            <div class="row">
                                <div class="col-12 col-md-4 white-bg m-0 p-0 leftColumn">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="iconPackBar showDesk"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/iconos/alojamiento_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                4 noches de alojamiento en categoría turista
                                                <div class="col-12">
                                                    <div class="border-bottom"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/imagenes/Traslado_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                Traslados del aeropuerto al hotel
                                                <br>
                                                <small>(en privado)</small>
                                                <div class="col-12">
                                                    <div class="border-bottom"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/imagenes/MontrealTuristico_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                Visita de la ciudad por 3 horas con guia de habla inglesa
                                                <small>(en servicio compartido)</small>
                                                <div class="col-12">
                                                    <div class="border-bottom"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/imagenes/Mercado_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                Visita guiada al mercado de jean Talón con guía multilingüe
                                                <small>(en servicio compartido)</small>
                                                <div class="col-12">
                                                    <div class="border-bottom"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-12 showMobil">
                                            <div class="black-bg iconPack p-2">

                                            </div>
                                            <div class="black contPack p-0 white text-center pt-2 pb-2 red-bg">
                                                <div class="download " onclick="itinerario('mpt')">
                                                    Descargar itinerario
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-0 p-0 centralColumn">
                                    <div class="row">
                                        <div class="col-2 align-self-center">
                                            <img src="img/iconos/persona_icono.png">
                                        </div>
                                        <div class="col">
                                            <h1 class="headsB">5 D&Iacute;AS</h1>
                                            <small class="red">salidas diarias de octubre a diciembre 2019</small>
                                            <p>
                                                Precio por persona desde:
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2 col-md-3 align-self-center">
                                            <img src="img/iconos/avion_icono.png">
                                        </div>
                                        <div class="col">
                                            <h1 class="headsB">$1,110 <b class="red">USD</b></h1>

                                            <small>
					      							vuelo incluido <span class="red">+$240 USD</span>
					      						</small>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 col-2">

                                        </div>
                                        <div class="col">
                                            <h1 class="headsB">$800 <b class="red">USD</b></h1>
                                            <small>vuelo no incluido</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-4 pl-4 ml-3 pb-4 vigenciaC">
                                            Vigencia de la promocion:<br> Hasta el 31 de octubre de 2019
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
            <div class="galeria col-12 galery2">
                <script>
                    var slider2
                    $(function() {
                        slider2 = $('#sliderToronto2').carousel();
                        $('#galery2 .dot').on("click", function() {
                            slider2.carousel(($(this).attr('go') * 1));
                            $('.' + $(this).attr('parent') + " .current").removeClass('current');
                            $(this).addClass('current');
                        });
                        $('#sliderToronto2').on('slide.bs.carousel', function(e) {
                            $('.galery2 .dot[go=' + e.from + ']').removeClass('current');
                            $('.galery2 .dot[go=' + e.to + ']').addClass('current');
                        })
                    });

                    function gotoSlide2(go, obj) {
                        slider2.carousel(go * 1);
                        $('.galery2 .current').removeClass('current');
                        obj.addClass('current');
                    }
                </script>
                <div class="row">
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="control col">
                                    <div class="left red-bg" onclick="slider2.carousel('prev')">
                                        <img src="img/iconos/flechaizq_icono.png">
                                    </div>
                                    <div class="pages red-bg">
                                        <div class="dot current" go="0" onclick="gotoSlide2(0,$(this))"></div>
                                        <div class="dot" go="1" onclick="gotoSlide2(1,$(this))"></div>
                                        <div class="dot" go="2" onclick="gotoSlide2(2,$(this))"></div>
                                        <!-- <div class="dot" go="3" onclick="gotoSlide2(3,$(this))"></div>-->
                                    </div>
                                    <div class="right red-bg" onclick="slider2.carousel('next')">
                                        <img src="img/iconos/flechader_icono.png">
                                    </div>
                                    <div class="download red2-bg" onclick="itinerario('mpt')">
                                        Descargar itinerario
                                    </div>
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                </div>
            </div>
        </article>
        <article class="m-0 p-0 white toronto row" id="toronto3">
            <div class="container">
                <div class="contToronto col-12">
                    <div class="row ">
                        <div class="col-md-1"></div>
                        <div class="col">
                            <h1 class="headsB manchaHead">
			      					<span >CIUDADES</span><br>
			      					<span class="red ">QUEBEQUENSES</span><br>
			      					<span>EN OTOÑO</span>
			      				</h1>
                            <h3>Incluye <label class="font-weight-bold red">_</label></h3>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row ">
                        <div class="col-md-1"></div>
                        <div class="col">
                            <div class="row">
                                <div class="col-12 col-md-4 white-bg m-0 p-0 leftColumn">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="iconPackBar showDesk"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/iconos/alojamiento_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                3 noches de alojamiento en Montreal en categoria turista
                                                <div class="col-12">
                                                    <div class="border-bottom"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/iconos/alojamiento_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                2 noches de alojamiento en Quebec en categoria turista
                                                <div class="col-12">
                                                    <div class="border-bottom"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/iconos/traslados_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                Traslado del aeropuerto al hotel en Montreal
                                                <small>(en servicio compartido)</small>
                                                <div class="col-12">
                                                    <div class="border-bottom"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/imagenes/train_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                Boleto de tren ida y vuelta en clase económica Montreal-Quebec-Montral con VIA Rail
                                                <div class="col-12">
                                                    <div class="border-bottom"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   	<div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/iconos/traslados_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                Traslado del hotel al aeropuerto de Montreal
                                                <small>(en servicio compartido)</small>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-12 showMobil">
                                            <div class="black-bg iconPack p-2">

                                            </div>
                                            <div class="black contPack p-0 white text-center pt-2 pb-2 red-bg">
                                                <div class="download " onclick="itinerario('cq')">
                                                    Descargar itinerario
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-0 p-0 centralColumn">
                                    <div class="row">
                                        <div class="col-2 align-self-center">
                                            <img src="img/iconos/persona_icono.png">
                                        </div>
                                        <div class="col">
                                            <h1 class="headsB">6 D&Iacute;AS</h1>
                                            <small class="red">salidas diarias hasta el 31 de octubre 2019</small>
                                            <p>
                                                Precio por persona desde:
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2 col-md-3 align-self-center">

                                        </div>
                                        <div class="col">
                                            <h1 class="headsB">$820 <b class="red">USD</b></h1>

                                            <small>
					      							vuelo no incluido
					      						</small>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-12 mt-4 pl-4 ml-3 pb-4 vigenciaC">
                                            Precios no incluyen vuelos<br>
                                            Vigencia de la promoción:<br>
                                            Hasta el 31 de Octubre de 2019
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
            <div class="galeria col-12 galery3">
                <script>
                    var slider3
                    $(function() {
                        slider3 = $('#sliderToronto3').carousel();
                        $('.galery3 .dot').on("click", function() {
                            slider3.carousel(($(this).attr('go') * 1));
                            $('.' + $(this).attr('parent') + " .current").removeClass('current');
                            $(this).addClass('current');
                        });
                        $('#sliderToronto3').on('slide.bs.carousel', function(e) {
                            $('.galery3 .dot[go=' + e.from + ']').removeClass('current');
                            $('.galery3 .dot[go=' + e.to + ']').addClass('current');
                        })
                    });

                    function gotoSlide3(go, obj) {
                        slider3.carousel(go * 1);
                        $('.galery3 .current').removeClass('current');
                        obj.addClass('current');
                    }
                </script>

                <div class="row">
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="control col">
                                    <div class="left red-bg" onclick="slider3.carousel('prev')">
                                        <img src="img/iconos/flechaizq_icono.png">
                                    </div>
                                    <div class="pages red-bg">
                                        <div class="dot current" go="0" onclick="gotoSlide3(0,$(this))"></div>
                                        <div class="dot" go="1" onclick="gotoSlide3(1,$(this))"></div>
                                        <div class="dot" go="2" onclick="gotoSlide3(2,$(this))"></div>
                                        <!--  <div class="dot" go="3" onclick="gotoSlide3(3,$(this))"></div>
				                        <div class="dot" go="4" onclick="gotoSlide3(4,$(this))"></div>-->
                                    </div>
                                    <div class="right red-bg" onclick="slider3.carousel('next')">
                                        <img src="img/iconos/flechader_icono.png">
                                    </div>
                                    <div class="download red2-bg" onclick="itinerario('cq')">
                                        Descargar itinerario
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                </div>
            </div>
        </article>

        <article class="m-0 p-0 white toronto row" id="toronto4">
            <div class="container">
                <div class="contToronto col-12">
                    <div class="row ">
                        <div class="col-md-1"></div>
                        <div class="col">
                            <h1 class="headsB manchaHead">
			      					<span >ESQUÍ</span><br>
			      					<span >EN MONT</span><br>
			      					<span class="red">TREMBLANT</span><br>
			      				</h1>
                            <h3>Incluye <label class="font-weight-bold red">_</label></h3>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row ">
                        <div class="col-md-1"></div>
                        <div class="col">
                            <div class="row">
                                <div class="col-12 col-md-4 white-bg m-0 p-0 leftColumn">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="iconPackBar showDesk"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/iconos/alojamiento_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                2 noches de alojamiento Montreal en categoría turista
                                                <div class="col-12">
                                                    <div class="border-bottom"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/iconos/alojamiento_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                4 noches de alojamiento en Mont Tremblant en categoría turista
                                                <div class="col-12">
                                                    <div class="border-bottom"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/iconos/traslados_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                Traslado de llegada y salida entre el aeropuerto y el hotel en el centro de Montreal
                                                <div class="col-12">
                                                    <div class="border-bottom"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/iconos/traslados_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                Traslado de llegada y salida entre el Montreal y Mont Tremblant

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-12 showMobil">
                                            <div class="black-bg iconPack p-2">

                                            </div>
                                            <div class="black contPack p-0 white text-center pt-2 pb-2 red-bg">
                                                <div class="download " onclick="itinerario('emt')">
                                                    Descargar itinerario
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-0 p-0 centralColumn">
                                    <div class="row">
                                        <div class="col-2 align-self-center">
                                            <img src="img/iconos/persona_icono.png">
                                        </div>
                                        <div class="col">
                                            <h1 class="headsB">6 D&Iacute;AS</h1>
                                            <small class="red">salidas diarias de noviembre 2019 en marzo 2020</small>
                                            <p>
                                                Precio por persona desde:
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2 col-md-3 align-self-center">
                                            <img src="img/iconos/avion_icono.png">
                                        </div>
                                        <div class="col">
                                            <h1 class="headsB">$1,010 <b class="red">USD</b></h1>

                                            <small>
					      							vuelo incluido <span class="red">+$240 USD</span>
					      							<br>
					      							Impuestos aéreos
					      						</small>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 col-2">

                                        </div>
                                        <div class="col">
                                            <h1 class="headsB">$700 <b class="red">USD</b></h1>
                                            <small>
					      							vuelo no incluido
					      						</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-4 pl-4 ml-3 pb-4 vigenciaC">
                                            Vigencia de la promoción:<br>
                                            Hasta el 31 de Octubre de 2019
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
            <div class="galeria col-12 galery4">
                <script>
                    var slider4
                    $(function() {
                        slider4 = $('#sliderToronto4').carousel();
                        $('.galery4 .dot').on("click", function() {
                            slider4.carousel(($(this).attr('go') * 1));
                            $('.' + $(this).attr('parent') + " .current").removeClass('current');
                            $(this).addClass('current');
                        });
                        $('#sliderToronto4').on('slide.bs.carousel', function(e) {
                            $('.galery4 .dot[go=' + e.from + ']').removeClass('current');
                            $('.galery4 .dot[go=' + e.to + ']').addClass('current');
                        })
                    });

                    function gotoSlide4(go, obj) {
                        slider4.carousel(go * 1);
                        $('.galery4 .current').removeClass('current');
                        obj.addClass('current');
                    }
                </script>
                <div class="row">
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="control col">
                                    <div class="left red-bg" onclick="slider4.carousel('prev')">
                                        <img src="img/iconos/flechaizq_icono.png">
                                    </div>
                                    <div class="pages red-bg">
                                        <div class="dot current" go="0" onclick="gotoSlide4(0,$(this))"></div>
                                        <div class="dot" go="1" onclick="gotoSlide4(1,$(this))"></div>
                                        <div class="dot" go="2" onclick="gotoSlide4(2,$(this))"></div>
                                        <!--<div class="dot" go="3" onclick="gotoSlide4(3,$(this))"></div>
				                        <div class="dot" go="4" onclick="gotoSlide4(4,$(this))"></div>
				                        <div class="dot" go="5" onclick="gotoSlide4(5,$(this))"></div>
				                        <div class="dot" go="6" onclick="gotoSlide4(6,$(this))"></div>
				                        <div class="dot" go="7" onclick="gotoSlide4(7,$(this))"></div>-->
                                    </div>
                                    <div class="right red-bg" onclick="slider4.carousel('next')">
                                        <img src="img/iconos/flechader_icono.png">
                                    </div>
                                    <div class="download red2-bg" onclick="itinerario('emt')">
                                        Descargar itinerario
                                    </div>
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">

                    </div>
                </div>
            </div>
        </article>

        <article class="m-0 p-0 white toronto row" id="toronto5">
            <div class="container">
                <div class="contToronto col-12">
                    <div class="row ">
                        <div class="col-md-1"></div>
                        <div class="col">
                            <h1 class="headsB manchaHead">
			      					          <span class="red">QUEBEC</span><br>
			      					          <span >ESENCIAL</span><br>
                            </h1>
                            <h3>Incluye <label class="font-weight-bold red">_</label></h3>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row ">
                        <div class="col-md-1"></div>
                        <div class="col">
                            <div class="row">
                                <div class="col-12 col-md-4 white-bg m-0 p-0 leftColumn">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="iconPackBar showDesk"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/iconos/alojamiento_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                3 noches de alojamiento en Quebec categor&iacute;a turista superior
                                                <div class="col-12">
                                                    <div class="border-bottom"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/imagenes/Recorrido_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                Recorrido a pie en el barrio viejo de la ciudad de Quebec <small>(3 horas)</small> en español <small>(en servicio compartido)</small>
                                                <div class="col-12">
                                                    <div class="border-bottom"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/imagenes/Ballena_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                Excursión de avistamiento de ballenas <small>(11 horas)</small> en la Bahia Ste-Catherine en inglés<br>
                                                <small>(en servicio compartido)</small>
                                                <div class="col-12">
                                                    <div class="border-bottom"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row ">
                                        <div class="col-12 showMobil">
                                            <div class="black-bg iconPack p-2">

                                            </div>
                                            <div class="black contPack p-0 white text-center pt-2 pb-2 red-bg">
                                                <div class="download " onclick="itinerario('qe')">
                                                    Descargar itinerario
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-0 p-0 centralColumn">
                                    <div class="row">
                                        <div class="col-2 align-self-center">
                                            <img src="img/iconos/persona_icono.png">
                                        </div>
                                        <div class="col">
                                            <h1 class="headsB">4 D&Iacute;AS</h1>
                                            <small class="red">salidas diarias hasta el 12 de octubre 2019</small>
                                            <p>
                                                Precio por persona desde:
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2 col-md-3 align-self-center">

                                        </div>
                                        <div class="col">
                                            <h1 class="headsB">$560 <b class="red">USD</b></h1>

                                            <small>
					      							vuelo no incluido
					      						</small>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-12 mt-4 pl-4 ml-3 pb-4 vigenciaC">
                                            Vigencia de la promoción:<br>
                                            Hasta el 31 de Octurbe de 2019
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
            <div class="galeria col-12 galery4">
                <script>
                    var slider4
                    $(function() {
                        slider4 = $('#sliderToronto4').carousel();
                        $('.galery4 .dot').on("click", function() {
                            slider4.carousel(($(this).attr('go') * 1));
                            $('.' + $(this).attr('parent') + " .current").removeClass('current');
                            $(this).addClass('current');
                        });
                        $('#sliderToronto4').on('slide.bs.carousel', function(e) {
                            $('.galery4 .dot[go=' + e.from + ']').removeClass('current');
                            $('.galery4 .dot[go=' + e.to + ']').addClass('current');
                        })
                    });

                    function gotoSlide4(go, obj) {
                        slider4.carousel(go * 1);
                        $('.galery4 .current').removeClass('current');
                        obj.addClass('current');
                    }
                </script>
                <div class="row">
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="control col">
                                    <div class="left red-bg" onclick="slider4.carousel('prev')">
                                        <img src="img/iconos/flechaizq_icono.png">
                                    </div>
                                    <div class="pages red-bg">
                                        <div class="dot current" go="0" onclick="gotoSlide4(0,$(this))"></div>
                                        <div class="dot" go="1" onclick="gotoSlide4(1,$(this))"></div>
                                        <div class="dot" go="2" onclick="gotoSlide4(2,$(this))"></div>
                                        <!--<div class="dot" go="3" onclick="gotoSlide4(3,$(this))"></div>
				                        <div class="dot" go="4" onclick="gotoSlide4(4,$(this))"></div>
				                        <div class="dot" go="5" onclick="gotoSlide4(5,$(this))"></div>
				                        <div class="dot" go="6" onclick="gotoSlide4(6,$(this))"></div>
				                        <div class="dot" go="7" onclick="gotoSlide4(7,$(this))"></div>-->
                                    </div>
                                    <div class="right red-bg" onclick="slider4.carousel('next')">
                                        <img src="img/iconos/flechader_icono.png">
                                    </div>
                                    <div class="download red2-bg" onclick="itinerario('qe')">
                                        Descargar itinerario
                                    </div>
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">

                    </div>
                </div>
            </div>
        </article>

        <article class="m-0 p-0 white toronto row" id="toronto6">
            <div class="container">
                <div class="contToronto col-12">
                    <div class="row ">
                        <div class="col-md-1"></div>
                        <div class="col">
                            <h1 class="headsB manchaHead">
			      					<span class="red">QUEBEC</span><br>
			      					<span >DE LUJO</span>

			      				</h1>
                            <h3>Incluye <label class="font-weight-bold red">_</label></h3>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row ">
                        <div class="col-md-1"></div>
                        <div class="col">
                            <div class="row">
                                <div class="col-12 col-md-4 white-bg m-0 p-0 leftColumn">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="iconPackBar showDesk"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/iconos/alojamiento_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                3 noches de alojamiento en categor&iacute;a turista superior
                                                <div class="col-12">
                                                    <div class="border-bottom"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/imagenes/Transporte_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                Conductor privado y quía de habla hispana y trasporte de lujo
                                                <div class="col-12">
                                                    <div class="border-bottom"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="black-bg iconPack p-2">
                                                <img src="img/imagenes/Comida_icono.png" class="w-100">
                                            </div>
                                            <div class="black contPack">
                                                Desayuynos , un almuerzo y una cena

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row ">
                                        <div class="col-12 showMobil">
                                            <div class="black-bg iconPack p-2">

                                            </div>
                                            <div class="black contPack p-0 white text-center pt-2 pb-2 red-bg">
                                                <div class="download " onclick="itinerario('ql')">
                                                    Descargar itinerario
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 m-0 p-0 centralColumn">
                                    <div class="row">
                                        <div class="col-2 align-self-center">
                                            <img src="img/iconos/persona_icono.png">
                                        </div>
                                        <div class="col">
                                            <h1 class="headsB">6 D&Iacute;AS</h1>
                                            <small class="red">salidas diarias hasta Octubre 2019</small>
                                            <p>
                                                Precio por persona desde:
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2 col-md-3 align-self-center">

                                        </div>
                                        <div class="col">
                                            <h1 class="headsB">$2,380 <b class="red">USD</b></h1>

                                            <small>
					      							vuelo no incluido
					      						</small>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-12 mt-4 pl-4 ml-3 pb-4 vigenciaC">
                                            Vigencia de la promoción:<br>
                                            Hasta el 31 de Octubre de 2019
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
            <div class="galeria col-12 galery4">
                <script>
                    var slider4
                    $(function() {
                        slider4 = $('#sliderToronto4').carousel();
                        $('.galery4 .dot').on("click", function() {
                            slider4.carousel(($(this).attr('go') * 1));
                            $('.' + $(this).attr('parent') + " .current").removeClass('current');
                            $(this).addClass('current');
                        });
                        $('#sliderToronto4').on('slide.bs.carousel', function(e) {
                            $('.galery4 .dot[go=' + e.from + ']').removeClass('current');
                            $('.galery4 .dot[go=' + e.to + ']').addClass('current');
                        })
                    });

                    function gotoSlide4(go, obj) {
                        slider4.carousel(go * 1);
                        $('.galery4 .current').removeClass('current');
                        obj.addClass('current');
                    }
                </script>
                <div class="row">
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-1"></div>
                                <div class="control col">
                                    <div class="left red-bg" onclick="slider4.carousel('prev')">
                                        <img src="img/iconos/flechaizq_icono.png">
                                    </div>
                                    <div class="pages red-bg">
                                        <div class="dot current" go="0" onclick="gotoSlide4(0,$(this))"></div>
                                        <div class="dot" go="1" onclick="gotoSlide4(1,$(this))"></div>
                                        <div class="dot" go="2" onclick="gotoSlide4(2,$(this))"></div>
                                        <!--<div class="dot" go="3" onclick="gotoSlide4(3,$(this))"></div>
				                        <div class="dot" go="4" onclick="gotoSlide4(4,$(this))"></div>
				                        <div class="dot" go="5" onclick="gotoSlide4(5,$(this))"></div>
				                        <div class="dot" go="6" onclick="gotoSlide4(6,$(this))"></div>
				                        <div class="dot" go="7" onclick="gotoSlide4(7,$(this))"></div>-->
                                    </div>
                                    <div class="right red-bg" onclick="slider4.carousel('next')">
                                        <img src="img/iconos/flechader_icono.png">
                                    </div>
                                    <div class="download red2-bg" onclick="itinerario('ql')">
                                        Descargar itinerario
                                    </div>
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">

                    </div>
                </div>
            </div>
        </article>

        <!-- fin packages -->
        <article class="row" id="noesp">
            <div class="col-1"></div>
            <div class="col text-center text-md-right white centerCol">
                <h1 class="headsB">¡No esperes m&aacute;s<br>para explorar Canad&aacute;!<br>
	            <span class="red">es muy f&aacute;cil obtener una ETA</span><br>
	            <small class="book">(Autorizaci&oacute;n electr&oacute;nica de viaje).</small>
	          </h1>
            </div>
            <div class="col-1"></div>
        </article>

        <article class="black row showMobil pl-0 pr-0 ml-0 mr-0" id="logos">
            <div class="barra"></div>
            <div class="col-12 pl-0 pr-0">
                <div class="white-bg container text-center">
                    <div class="row text-center book pt-4 pb-5 ml-0 pl-4 mr-0 pr-4">
                        <div class="col-12 m-0 pl-0 pr-0 pl-md-0 pr-md-0 headsB">
                            *CAT 0%. Sin IVA. Informativo. En servicios Terrestres hasta 15 Mensualidades Sin Intereses con Las Tarjetas American Express (excepto las emitidas en el extranjero) o 6 meses sin intereses con tarjetas bancarias participantes (Excepto Bancomer y Banamex). En servicios Terrestres con aéreo, tarifa aérea, 6 Mensualidades Sin Intereses con Las Tarjetas American Express (excepto las emitidas en el extranjero), 3 meses sin Intereses con tarjetas bancarias participantes (Excepto Bancomer y Banamex). Las tarjetas bancarias participantes deben estar vigentes y al corriente de sus pagos. El cargo se realizará en Moneda Nacional de acuerdo al tipo de cambio fijado por ALG Viajes México, S. de R.L. de C.V. (Travel Impressions®) al día del pago. Precios e impuestos sujetos a cambio de acuerdo a variaciones en el tipo de cambio. Aplican cargos adicionales por cambios, reembolsos o cancelaciones. Impuestos pagaderos en una sola exhibición y no aplica dentro del Programa de Mensualidades sin Intereses. (1) 9,000 Puntos PAYBACK® por cada reservación. Los puntos se bonificarán en el monedero PAYBACK® en un máximo de 7 días hábiles posteriores a la compra. El monedero deberá estar activo al momento de la bonificación. Aplica suplementos por temporada o fechas especiales. Precios publicados en dólares americanos y sujetos al tipo de cambio. Precios por persona en habitación doble en categoría indicada. Permiso Eta necesario para ingresar a Canadá. Precios sujetos a disponibilidad. Salidas con un mínimo de 2 personas. Tarifa aérea saliendo desde la ciudad de México con Aeroméxico, consulte salidas desde el interior del país. Incluye Servicios regulares compartidos. “Todos los productos y servicios ofrecidos y prestados por Travel Impressions, son proporcionados de forma exclusiva por ALG Viajes México, S. de R.L. de C.V.
                        </div>
                    </div>
                    <div class="row text-center book pt-4 pb-5">
                        <div class="col-12">
                            <img src="img/logos/_toronto_Color.png">
                            <img src="img/logos/Travel_LOGO1.png">
                            <img src="img/logos/Canada_logo.png">
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <article class="white-bg black" id="logos2">
        <div class="container text-center">
            <div class="row text-center book pt-4 pb-5">
                <div class="col-12 pl-4 pr-4 pl-md-0 pr-md-0 headsB">
                    *CAT 0%. Sin IVA. Informativo. En servicios Terrestres hasta 15 Mensualidades Sin Intereses con Las Tarjetas American Express (excepto las emitidas en el extranjero) o 6 meses sin intereses con tarjetas bancarias participantes (Excepto Bancomer y Banamex). En servicios Terrestres con aéreo, tarifa aérea, 6 Mensualidades Sin Intereses con Las Tarjetas American Express (excepto las emitidas en el extranjero), 3 meses sin Intereses con tarjetas bancarias participantes (Excepto Bancomer y Banamex). Las tarjetas bancarias participantes deben estar vigentes y al corriente de sus pagos. El cargo se realizará en Moneda Nacional de acuerdo al tipo de cambio fijado por ALG Viajes México, S. de R.L. de C.V. (Travel Impressions®) al día del pago. Precios e impuestos sujetos a cambio de acuerdo a variaciones en el tipo de cambio. Aplican cargos adicionales por cambios, reembolsos o cancelaciones. Impuestos pagaderos en una sola exhibición y no aplica dentro del Programa de Mensualidades sin Intereses. (1) 9,000 Puntos PAYBACK® por cada reservación. Los puntos se bonificarán en el monedero PAYBACK® en un máximo de 7 días hábiles posteriores a la compra. El monedero deberá estar activo al momento de la bonificación. Aplica suplementos por temporada o fechas especiales. Precios publicados en dólares americanos y sujetos al tipo de cambio. Precios por persona en habitación doble en categoría indicada. Permiso Eta necesario para ingresar a Canadá. Precios sujetos a disponibilidad. Salidas con un mínimo de 2 personas. Tarifa aérea saliendo desde la ciudad de México con Aeroméxico, consulte salidas desde el interior del país. Incluye Servicios regulares compartidos. “Todos los productos y servicios ofrecidos y prestados por Travel Impressions, son proporcionados de forma exclusiva por ALG Viajes México, S. de R.L. de C.V.
                </div>
            </div>
            <div class="row text-center book pt-4 pb-5">
                <div class="col-12">
                    <img src="img/logos/_toronto_Color.png">
                    <img src="img/logos/Travel_LOGO1.png">
                    <img src="img/logos/Canada_logo.png">
                </div>
            </div>
        </div>
    </article>
</body>

</html>
