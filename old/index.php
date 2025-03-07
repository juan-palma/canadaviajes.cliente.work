<!doctype html>
<html lang="en">

  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="toronto/fonts/stylesheet.css" rel="stylesheet">
      <link rel="stylesheet" href="toronto/fonts/condenced.css">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/14986d8b5b.js"></script>
      <meta name="format-detection" content="telephone=no">
      <title>CANADA</title>
  </head>

  <body class="book">
    <div class="bg"></div>
    <div class="hoja"></div>
    <div class="leftColumn">
        <div class="honaNegra"></div>
        <div class="estampa"></div>
        <div class="hojaReal"></div>
    </div>
    <div class="container-fluid contDesk pt-5">
      <div class="row">
        <div class="col"></div>
        <div class="col-12 col-md-8">
            <h1 class="headsB white">¡No esperes más<br> para explorar Canadá!</h1>
            <h1 class="headsB black">es muy fácil obtener una ETA</h1>
            <h4 class="white">(Autorización electrónica de viaje).</h4>
        </div>
        <div class="col"></div>
      </div>
      <div class="row land">
        <div class="col "></div>
        <div class="col-12 col-md-8">
          <div class="row">
            <div class="col-12">
              <img src="img/Desktop/_toronto_white.png" style="width:100%;">
            </div>
          </div>
          <div class="row">
            <div class="col-12">
                <button class="btn btn-black" onclick="window.open('toronto','_blank')">CONOCE TORONTO</button>
              </div>
            </div>
        </div>
        <div class="col"></div>
      </div>
      <div class="row mt-5 land">
        <div class="col"></div>
        <div class="col-8">
          <div class="row">
            <div class="col-12">
                <img src="img/Desktop/Quebec_logo_horizontal_BLANCO.png" style="width:100%;">
              </div>
            </Div>
            <div class="row">
              <div class="col-12">
                <button class="btn btn-black mt-4" onclick="window.open('quebec','_blank')">CONOCE QUEBEC</button>
              </Div>
            </div>
        </div>
        <div class="col"></div>
      </div>
      <div class="row mt-5 logos">
        <div class="col"></div>
        <div class="col-8">
          <img src="img/Desktop/TI-blanco.png">
          <img src="img/Canada_logoW.png">
        </div>
        <div class="col"></div>
      </div>
    </div>
  </body
</html>

<style>
.white{
  color:#fff;
}

.black{
  color:#000;
}

.headsB{
  font-family: twceb;
}

.book{
  font-family: fb;
}
.bg {
    background-image: url(img/skyline.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    z-index: 1;
}
.hoja {
    background-image: url(img/Desktop/HojaRoja.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: fixed;
    top: 0;
    left: 0;
    width: 80%;
    height: 100%;
    z-index: 2;
}
.contDesk{
    position:absolute;
    left:0;
    top:0;
    height: 100%;
    width:100%;
    z-index: 20;
}

.btn-black{
  background-color: #000;
  color:#fff;
  cursor:pointer;
  transition: .2s;
  border-radius:30px;
}
.btn-black:hover{
  background-color:#fff;
  color:#000;
}
.leftColumn {
    position: fixed;
    z-index: 3;
    border-right: 1px solid #ffffff6b;
    width: 35%;
    height: 100%;
    max-width: 200px;
}

.honaNegra {
    background-image: url(img/Desktop/HojaNegra.png);
    position: absolute;
    left: 0;
    top: 10%;
    width: 100%;
    height: 300px;
    z-index: 1;
    background-repeat: no-repeat;
    background-position: left center;
    background-size: 100% auto;
}

.estampa {
    position: absolute;
    top: 40%;
    left: 0;
    background-image: url(img/Desktop/SELLO_CANADA.png);
    width: 100%;
    height: 260px;
    background-repeat: no-repeat;
    background-position: left center;
    background-size: auto 100%;
}

.hojaReal {
    position: absolute;
    top: 60%;
    left: 0;
    background-image: url(img/Desktop/hoja_maple_recortada.png);
    width: 100%;
    height: 260px;
    background-repeat: no-repeat;
    background-position: left center;
    background-size: auto 100%;
}

.contDesk img{
  max-width:600px;
}
@media(max-width:800px){
  .leftColumn{
    display: none;
  }
  .headsB{
    font-size:1.6em;
  }
  h4 {
    font-size: 0.9em;
  }
  .hoja {
    width: 100%;
    background-image: url(img/Mobile/HojaRoja.png);
    background-position: left top;
  }
  .contDesk {
    padding: 0 30px;
  }
  .contDesk {
    padding: 20px 30px !important;
  }
  .contDesk > .row {
    float: left;
    width: 100%;
    border-bottom: 1px solid #ffffff47;
    padding: 20px 0 20px;
  }
  .land img {
    width: 50%;
    float: left;
  }
}

</style>
