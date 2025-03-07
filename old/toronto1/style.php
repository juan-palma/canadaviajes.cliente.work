<style>
html{

}
body{
	background-color:#000;

}
.black{
	color:#000;
}
.black-bg{
	background-color:#000;
}

.red{
	color:#e12826;
}

.red-bg{
	background-color:#e12826;

}
.red2{
	color:#ba1a1a;
}
.red2-bg{
	background-color:#ba1a1a;
}

.white{
	color:#fff;
}
.white-bg{
	background-color:#fff;
}

.red-hover:hover{
	color:#e62623;
	transition:.2s;
	cursor:pointer;
}

nav.nav {
    position: fixed;
    width: 100%;
    z-index: 100;
    left:0;
    top:0;
    height:85px;

}

nav {
    line-height: 85px;
}

nav span{
	padding:0 10px ;
	font-size: 1.2rem;
	position:relative;
	transition:.3s;
	font-family: Twb;
}

nav span .lines {
    position: absolute;
    top: 20px;
    width: 3px;
    height: 30px;
    background-color: #e12826;
    content: "";
    left: 50%;
    margin-left: -1.4px;
    opacity: 0.5;
    transition:.3s;
}

.border-bottom {
    border-bottom: 1px solid #dee2e6!important;
    margin-top: 10px;
    margin-bottom: 10px;
}

.bold{
	font-family:"fbo";
}
.book{
	font-family:"fb";
}
.heavy{
	font-family:"fh";
}
.light{
	font-family:"fl";
}
.heads{
	font-family:"twr";
}
.headsB{
	font-family:"twceb";
}

nav.nav:after {
    content: "";
    background-image: url(img/imagenes/mancha_negra_header.png);
    background-position: center top;
    background-repeat: no-repeat;
    position: absolute;
    left: 0;
    top: 0;
    z-index: -1;
    width: 620px;
    height: 170px;
    background-size: 100% 100%;
}

nav img {
    float: left;
    padding: 0 10px;
}


article#video {
    position: relative;
    background-position: center 300px;
    background-repeat: no-repeat;
    background-size: 100% auto;
    background-color:#000;
    z-index: 6;
}

article#video:before {
    content: "";
    background-image: url(img/imagenes/bgVideo.jpeg);
    background-position: center top;
    background-repeat: no-repeat;
    position: absolute;
    left: 0;
    top: 0;
    z-index: -1;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-attachment: fixed;
}

.play {
    background-image: url(img/iconos/play.png);
    position: absolute;
    top: 200px;
    left: 50%;
    width: 200px;
    height: 200px;
    background-size: 100%;
    margin-left: -50px;
    cursor:pointer;
    opacity:.8;
    z-index: 16;
}


.play:hover{
	transition:.2s;
	opacity:1;
}

#toronto1{
	position: relative;
	z-index: 6;
}

#toronto2{
	position: relative;
	z-index: 5;
}

#toronto3{
	position: relative;
	z-index: 4;
}

#toronto4{
	position: relative;
	z-index: 4;
}

article.toronto {
		min-height:1024px;
    z-index: 8;
    position: relative;
    transition:0.2s;
    padding:800px 0 800px;
}

.contToronto {
    width: 100%;
    left: 0;
}

.iconPack {
    max-width: 80px;
    width:20%;
    height: 100%;
    float: left;
}

.contPack {
    width: 80%;
    float: left;
    font-size: 16pt;
    padding: 20px 25px 0;
    border-bottom: 1px solid #ccc;
}
.contPack:last-child{
	border:none;
}

h1.headsB {
    font-size: 45pt;
    letter-spacing: 0.3em;
}
h3 {
    font-size: 24pt;
}
.contPack small {
    font-size: 14pt;
}

.leftColumn{
	position:relative;
	z-index: 3;
	overflow:hidden;
}

.centralColumn h1.headsB {
    font-size: 55pt;
    letter-spacing: 0em;
}
.centralColumn small{
    font-size: 12pt;
}
.centralColumn p {
    font-size: 24pt;
}
.centralColumn b.red {
    font-size: 25pt;
}
.centralColumn img {
    left: -10px;
    position: relative;
}
.col-12.p-4.reservaW {
    position: absolute;
    left: 0;
    top: -130px;
}

.reservaW h3.red {
    font-size: 45pt;
}
.reservaW h1.headsB {
    letter-spacing: 0.1em;
}
.form-group.reserv {
    font-size: 1.3em;
    padding: 30px 20px;
}

.reserva input {
    border: 2px solid #c20a08;
    border-radius: 30px;
    background-color: #0000;
    color: #fff;
    padding:20px;
    transition:.3s;
}
.reserva input::placeholder{
	color:#ba0c0b;
}
.reserva button:hover{
	color:#000;
	background-color:#fff;
	transition:.3s;
	font-weight: bold;
}
.reserva input:focus {
    background-color: #0000;
    border: 2px solid #c20a08;
    box-shadow: 0px 0px 21px -9px #000;
		color:#fff;
}

button.btn.btn-default.black-bg.white {
    width: 100%;
    border-radius: 30px;
    padding: 10px;
}

.fixedImage{
	transition:.3s;
    position: fixed;
    top: -1230px;
    left: 0;
    z-index: -3;
    width: 100%;

}
.formFixed{
	transition:.3s;
    position: fixed;
    top: -1230px;
    left: 0;
    z-index: -3;
    width: 100%;

}

.showDesk{
		display:inline-flex;
}

.showMobil{
		display:none;
}
#video{
	overflow:hidden;
}
#video .image img {
    margin-top: 300px;
    position: relative;
    width: 110%;
    float: left;
    left: -5%;
}
.capa3.capa {
    z-index: -1;
}

.formReserva h5 {
    font-size: 1em !important;
}

.video-js .vjs-tech {
    position: absolute;
    top: 0;
    left: -5% !important;
    width: 110% !important;
    height: auto !important;
}

.imageBG {
    background-image: url(img/imagenes/tomnronto_recorte_v2.png);
    background-position: center -710px;
    height: 100%;
    position: fixed;
    top: 80px;
    width: 100%;
    z-index: 4;
    background-repeat: no-repeat;
    background-color: #000;
    background-size:cover;
}

.btnSoundInactive, .btnSoundActive {
    position: fixed;
    right: 20px;
    top: 100px;
    width: 50px;
    height: 50px;
    text-align: center;
    line-height: 40px;
    border: 2px solid #000;
    border-radius: 50%;
		z-index: 20;
		cursor: pointer;
}

#video .video {
    position: absolute;
    top: 0;
    width: 100%;
    min-height: 780px;
    overflow: hidden;
}

#video div#my-video {
    position: fixed;
    left: 0;
    top: -30px;
    width: 100%;
    height: 100%;
    z-index: -1;
}

.bg-container {
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: #000;
    z-index: 6;
    left: 0;

}

img.logo2 {
    float: left;
    width: 159px;
    margin-top:0px;
}

img.logo1 {
    float: left;
    width: 80px;
}
.centralColumn .row {
    border-top: 1px solid #cccccc5c;
    padding: 20px 0;
}
.centralColumn .row:last-child,.centralColumn .row:first-child {
    border-top: 0;
}
.reservaW h3.red:after {
    content: "";
    background-image: url(img/imagenes/mancha_negra.png);
    width: 220px;
    height: 120px;
    position: absolute;
    left: 0;
    top: 0;
    background-position: top;
    background-size: 100% 100%;
    background-repeat: no-repeat;
    z-index: -1;
}

.control .left, .control .right {
    text-align: center;
    float: left;
    width: 50px;
    height: 50px;
    line-height: 50px;
    border-right: 1px solid #ffffff57;
		cursor:pointer;
		transition: .2s;
}

.control .left:hover, .control .right:hover {
	opacity: 1;
	background-color:#ba1a1a;
}

.control .dot {
    width: 13px;
    height: 13px;
    float: left;
    border-radius: 50%;
    border: 3px solid #fff;
    margin: 0 5px;
    transition: .3s;
    position: relative;
    top: 50%;
    margin-top: -7px;
		cursor:pointer;
}

.control .dot:hover{
	background-color: #fff;
}

.control .dot.current{
		background-color:#fff;
}

.control .right{
	border-left:1px solid #ffffff57;
	border-right: none;
}

.control .pages {
    float: left;
    height: 50px;
    position: relative;
    padding: 0 20px;
}

.control .download {
    float: left;
    padding: 0 30px;
    height: 50px;
    line-height: 50px;
}
.galeria .control {
    top: 40px;
    position: relative;
    z-index: 2;
    left: -4px;
}

.iconPackBar {
    max-width: 80px;
    width: 20%;
    height: 800px;
    position: absolute;
    background-color: #000;
}

#noesp h1.headsB {
    font-size: 4em;
    letter-spacing: normal;
}

#noesp small {
    font-size: 24px;
    letter-spacing: normal;
}

article#noesp {
    background-color:#000;
    z-index: 8;
    position: relative;
    margin: 120px 0 0px;
    padding-bottom: 150px;
}

article#noesp:after {
    content: "";
    position: absolute;
    left: 0;
    top: -120px;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(#0000 , #000 20%);
    z-index: -1;
}

article#logos,#logos2 {
    padding: 50px 0 50px;
    position: relative;
    z-index: 20;
	   min-height:250px;
}
#logos img,#logos2 img {
    margin: 0 20px;
}

article#logos2:after {
    content: "";
    position: absolute;
    left: -10%;
    top: 5%;
    width: 120%;
    height: 200px;
    z-index: -1;
    background-color: #fff;
    transform: skew(-10deg, -4deg);
}

#logos .barra{

	float:left;
	width: 100%;
}

#logos .barra:before {
    content: "";
    position: absolute;
    left: 0%;
    top: 20px;
    height: 200px;
    z-index: -1;
    background-color: #fff;
    transform: skew(0deg, -4deg);
}

article#logos2:after{
	top:-110px;
}

.telefono {
    content: "";
    position: absolute;
    right: 0;
    top: 0;
    width: 460px;
    height: 590px;
    background-image: url(img/imagenes/sellotoronto.png);
    background-repeat: no-repeat;
    background-position: center;
    z-index: -1;
    opacity: 0.4;
}

.contianerS {
    z-index: 13;
    position: relative;
    background-color: #000;
    overflow-x:hidden;
}

.container:first 	{
    margin-top: -510px;
}

#noesp .centerCol:after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -140px;
    background-image: url(img/imagenes/toronto_doodle.png);
    width: 100%;
    height: 530px;
    background-position: left bottom;
    background-size: auto 100%;
    background-repeat: no-repeat;
}

.centerCol {
    height: 420px;
}

.galeria {
    position: relative;
    overflow: hidden;
    height: 650px;
    padding: 0 !important;
    margin: 0 !impota;
}

.sliders .row:last-child {
    height: 100%;
}

div#sliderToronto1 {
    z-index: -1;
}

.sliders .carousel-inner{
	height:100%;
}

.sliders .carousel-item {
    height: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    background-attachment: scroll;
}

div#scene {
    height: 1400px;
    width:100%:
    left: 0;
    top: 0;
}
#scene .capa{
	height:100%;
	width:100%;
}

div.carousel:before {
    position: absolute;
    content: "";
    width: 100%;
    height: 50%;
    z-index: 1;
    bottom: -3px;
    left: 0;
    transform: rotatex(180deg);
}

div#imageRe:after {
    background-image: linear-gradient(#0000 80%,#000 100%);
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    z-index: 1;
}

div#imageRe {
    float: left;
    width: 100%;
    height: 1250px;
}


div.carousel:after {
    position: absolute;
    content: "";
    width: 100%;
    height: 40%;
    z-index: 1;
    background-image: linear-gradient(#000 30%,#0000);
    top: 0;
    left: 0;
}

#sliderToronto1,
#sliderToronto2,
#sliderToronto3,
#sliderToronto4 {
    position: fixed;
    top: 0px;
    height: 100%;
    left: 0;
    width: 100%;
    transition:.2s;
    opacity:0;
}

.centralColumn {
    z-index: 1;
		background-color: #00000084;
}

.sliders {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: 4;
}

.manchaHead:after {
    content: "";
    position: absolute;
    left: -110px;
    top: -50px;
    width: 400px;
    height: 200px;
    background-image: url(img/imagenes/mancha_negra.png);
    background-size: 100% 100%;
    background-position: center;
    z-index: -1;
}

@media(min-width:1500px){
	.imageBG {
	    background-image: url(img/imagenes/tomnronto_recorte_v2.png);
	    background-position: center 800px;
	    height: 790px;
	    position: fixed;
	    top: 80px;
	    width: 100%;
	    z-index: 4;
	    background-size: 100% auto;
	    background-repeat:repeat;
	}

}
@media(min-width:1010px){
	h1.headsB {
	    font-size: 2em;
	    letter-spacing: 0.3em;
	}
	nav span {
	    font-size: 0.8em;
	}
	.contToronto h3 {
	    font-size: 1.5em;
	}
	.contPack {
	    font-size: 1em;
	}
	.contPack small {
	    font-size: 0.8em;
	}
	.centralColumn h1.headsB {
	    font-size: 2.5em;
	}

	.centralColumn p {
	    font-size: 1.1em;
	}

	.fixedImage {
		top:-930px;
	}
	.reservaW h3.red {
	    font-size: 2.8em;
	    margin:0;
	    padding:0;
	}
	.reservaW h3.red img {
	    width: 40px;
	    float: right;
	}
	.reservaW h1.headsB {
	    font-size: 3.2em;
	    text-align: center;
	    margin: 0;
	    margin: -20px 0 0;
	}
	.col-12.p-4.reservaW {
	    top: -90px;
	}
	.form-group.reserv {
	    font-size: 1em;
	    padding: 20px 20px 0;
	}
	.contToronto{
		top:40px;
	}
	nav.nav:after{
		width: 420px;
    	height: 140px;
	}
}


@media(max-width:1010px){
	#video .video{
		min-height:auto;
		display: none;
	}
	.showDesk{
		display:none;
	}

	.showMobil{
		display:inline-flex;
	}

	nav.nav {
		height: 55px;
		line-height: 60px;
	}

	nav img {

    	padding: 10px 0 10px;
	}

	nav.nav:after{
		display: none;
	}

	.play{
		display: none;
	}

	article.toronto {
	    padding: 0 !important;
	    opacity: 1 !important;
	    height: auto !important;

	}

	article#video:before {
	    background-position: center 90px;
	    background-size: 100%;
	    background-attachment: scroll;
	    top: 0;
	    height: 330px;
	}

	.contToronto {
	    position: relative;
			padding:0 10px;
			height:auto;
	}

	#video .image img{
			margin-top: 160px;
	}
	article#video {
	    height: 341px;
	}
	h1.headsB {
	    font-size: 28px;
	}

	.contToronto h3 {
	    font-size: 24px;
	}
	body {

	}
	.galeria {
	    display: none;
	}
	.telefono{
		display:none;
	}

	.leftColumn{
		overflow:hidden;
	}

	#noesp h1.headsB{
		font-size:2em;
	}

	#noesp h1.headsB small{
		font-size:15px;
	}

	#noesp .centerCol:after {
	    bottom: -100px;
	    height: 330px;
	    background-position: center bottom;
	    background-size: 100% auto;
	}
	 #logos img,#logos2 img{
	 	margin-top:20px;
	 }
	 .form-group.reserv {
    	line-height: 20px;
	    text-align: left;
	    float: left;
	    font-size: 1em;
	}
	form#headerRes {
	    top: 110px;
	    position: absolute;
	    left: 0;
	    border-top: 1px solid #00000030;
	    padding:0 40px;
	}
	.form-group.reserv {
	    margin: 0 0 20px;
	    padding: 0;
	}
	.bg-container{
		display:none;
	}
	.contToronto > .row h1:after {
	    content: "";
	    background-image: url(img/imagenes/mancha_negra.png);
	    width: 250px;
	    height: 140px;
	    position: absolute;
	    left: -30px;
	    top: -50px;
	    background-position: top;
	    background-size: 100% 100%;
	    background-repeat: no-repeat;
	    z-index: -1;
	}
	.centralColumn {
	    padding: 10px 50px !important;
	}

	.centralColumn  h1.headsB{
		font-size:3em;
	}
	.centralColumn  p{
		font-size:1em;
	}
	.centralColumn img {
	    max-width: 50px;
	}
	.centralColumn .row{
		border-top: 1px solid #cccccc5c;
	}

	.container{
		margin:0;
		padding:0;
	}
	.sliders{
		display: none;
	}
	.manchaHead:after{
		display: none;
	}
	article#logos,article#logos2 {
	    padding: 110px 0 0;
	    position: relative;
	    z-index: 20;
		   min-height:250px;
	}
	.contianerS{
		float:left;
		width:100%;
		position:relative;
		overflow-x:hidden;
	}
	#logos2{
		display:none;
	}
}

.loader {
    position: fixed;
    height: 100%;
    left: 0;
    top: 0;
    width: 100%;
    background-color: #000000b3;
    z-index: 14;
    text-align: center;
    color: #e12826;
}

.loader svg {
    top: 50%;
    position: absolute;
    font-size: 3em;
    margin-top: -25px;
}

.download{
	cursor:pointer;
	transition:.2s;
}

.download:hover{
	background-color:#000;
	color:#fff;
}
.vigenciaC {
    font-size: 0.8em;
}









/* ID.A libre */
.formReserva .row.p-0.m-0{
	position: relative;
    z-index: 300;
    cursor: pointer;
}
.contianerS {
	padding: 6%;
}
article#logos, article#logos2 {
    padding: 110px 0 0;
    position: relative;
    z-index: 20;
    min-height: 250px;
    overflow: hidden;
}



@media(min-width:1010px){
	.contianerS {
	    z-index: 13;
	    position: relative;
	    background-color: transparent;
	    overflow-x: hidden;
	    margin-top: -51%;
	    padding: 0%;
	}
}





</style>
