//--- Carga de archivos. _____________________________________________________________________________________
/*
if(!['mac', 'linux', 'win'].some(function(item){ return item == Browser.Platform.name;})){	
	if(Modernizr.idatouch ? ida_sino = 'js/owner/touch.js' : ''){
		delete Element.NativeEvents['click'];
		Asset.javascript(ida_sino, {
			onLoad: function(){
				ida_ini_touch();
			}
		});
	}
}
*/








var idagl = {};

//Seccion de VARIABLES: _____________________________________________________________________________________
idagl.elementos = {};







//Seccion de ATAJOS: _____________________________________________________________________________________
var id = idagl;
var el = id.elementos;















//--- Seccion de FUNCIONES: _____________________________________________________________________________________
function db_conectE(url, datos, f, e){
	new Request.JSON({
		method:'post',
		url:url,
		secure:false,
		onError:function(er){
			if(typeOf(e) === 'function'){ e(er); }
			console.warn(er);
			alert("Ocurrio un problema al guardar su informacion, intentelo mas tarde");
			
		},
		onFailure:function(xhr){
			if(typeOf(e) === 'function'){ f(xhr); }
			console.warn(xhr);
			alert("Ocurrio un problema al guardar su informacion, intentelo mas tarde");
			
		},
		onSuccess:function(j){
			if(j){
				if(j.status == 'ok'){
					if(typeOf(f) === 'function'){ f(j); }
				} else{
					if(typeOf(e) === 'function'){ e(j); }
					console.warn(j);
					alert("Ocurrio un problema al guardar su informacion, intentelo mas tarde");
				}
			} else{
				if(typeOf(e) === 'function'){ e(j); }
				console.warn(j);
				alert("Ocurrio un problema con su consulta, intentelo mas tarde");
			}
		}
	}).post('datos='+ JSON.encode(datos));
}








//Cobtrol para boton video home
function videoControl(){
	var vid = document.getElementById("bgvid");
	var playBtn = document.querySelector("#videoBtnPlay");
	var pauseBtn = document.querySelector("#videoBtnPausa");
	var control = document.querySelector("#videoControls");
	muteBtn = document.querySelector("#videoBtnMute");
	
	
	if (window.matchMedia('(prefers-reduced-motion)').matches) {
		vid.removeAttribute("autoplay");
		vid.pause();
		playBtn.removeClass('dnone').removeClass('op0');
		pauseBtn.addClass('dnone').addClass('op0');
		//pauseBtn.innerHTML = "Paused";
	}
	
	function vidFade() {
		vid.classList.add("stopfade");
	}
	
	vid.addEventListener('ended', function(){
		// only functional if "loop" is removed 
		vid.pause();
		// to capture IE10
		vidFade();
	});
	
	
	function vidAction(){
		vid.classList.toggle("stopfade");
		if (vid.paused) {
			vid.play();
			playBtn.addClass('op0');
			(function(){
				playBtn.addClass('dnone');
			}).delay(100);
			control.removeClass('dnone').removeClass('op0');
		} else {
			vid.pause();
			control.addClass('op0');
			(function(){
				control.addClass('dnone');
			}).delay(100);
			playBtn.removeClass('dnone').removeClass('op0');
		}
	}
	
	
	playBtn.addEventListener("click", vidAction);
	pauseBtn.addEventListener("click", vidAction);
	
	
	
	
	// Mute action
	var muteStatus = true;
	function muteToggle(){
		if(muteStatus === true){
			muteStatus = false;
		} else{
			muteStatus = true;
		}
		
		vid.muted = muteStatus;
	}
	
	muteBtn.addEventListener("click", muteToggle);
}





el.slider = {};
el.slider.primer = 0;
el.slider.activo = "";
el.slider.item = 0;
el.slider.run = false;
idagl.aumento = 0;
idagl.posicionInicial = 4; // escala del 0 al 100%;

function incrementoInicial(){
	if(window.getSize().x > 985){
		idagl.aumento = 83;
	} else{
		idagl.aumento = 95;
	}
}

function activarScroll(){
	var secciones = $$('.mainSec');
	var sliders = $$('#boxBack .slider');
	var ciudad = document.id('ciudad');
	var formBox = document.id('formBox');
	var corte = document.id('corteSlider');
	menus = $$('#menuBox li');
	menus.reverse();
	idagl.posicionInicialInvertido = 100 - idagl.posicionInicial;
	
	var w = window.getSize().y;
	formBox.setStyles({
		position:'fixed',
		top: (w * idagl.posicionInicialInvertido) / 100
	});
	
	el.slider.primer = secciones[0].getPosition().y;
		
	document.addEventListener('scroll', function(event) {
		incrementoInicial();
		
		secciones.each(function(it, i){
			var h = it.getSize().y;
			var p = it.getPosition().y;
			var s = window.getScroll().y + idagl.aumento;
			w = window.getSize().y;

			if(s > (p - (h * 0.1)) && s < ( (h * 0.9) + p ) ){
				if(i !== el.slider.activo){
					if(el.slider.activo !== ""){
						sliders[el.slider.activo].addClass('op0');
						menus[el.slider.activo].removeClass('activo');
						var bullets = secciones[el.slider.activo].getElements('.bullet');
						bullets[el.slider.item].removeClass('activo');
					}
					sliders[i].addClass('active');
					sliders[i].removeClass('op0');
					el.slider.activo = i;
					menus[i].addClass('activo');
					ciudad.addClass('op0');
					
					var bullets = secciones[i].getElements('.bullet');
					bullets[0].addClass('activo');
					
					clearInterval(tempo);
					el.slider.item = 0;
					var items = sliders[el.slider.activo].getElements('.item');
					items.each(function(it){
						it.addClass('op0');
					});
					items[0].removeClass('op0');
					el.slider.run = true;
					
					corte.removeClass('op0');
					(function(){
						corte.addClass('op0');
					}).delay(500);
					
					sliderActive();
					
				}
				
			} else if(s < el.slider.primer){
				if(el.slider.activo !== ""){
					sliders[el.slider.activo].addClass('op0');
					ciudad.removeClass('op0');
					
					if(el.slider.activo !== ""){
						menus[el.slider.activo].removeClass('activo');
						
						var items = sliders[el.slider.activo].getElements('.item');
						items[el.slider.item].addClass('op0');
						items[0].removeClass('op0');
						
						var bullets = secciones[el.slider.activo].getElements('.bullet');
						bullets[el.slider.item].removeClass('activo');
						
						el.slider.item = 0;
						el.slider.run = false;
						clearInterval(tempo);
					}
					
					el.slider.activo = "";
				}
			}
			
			
			//form float.
			var con1 = secciones[0].getElement('.boxCols > .col3');
			var con2 = secciones[(secciones.length - 1)].getElement('.boxCols > .col3');
			
			var c = con1.getPosition().y;
			var c2 = con2.getPosition().y;
			var af = (w * idagl.posicionInicialInvertido) / 100;
			var af2 = (w * idagl.posicionInicial) / 100;
			var afp = ((c-w) + af2) + idagl.aumento;
			var extra = 120;			
			
			if(s < afp){
				formBox.setStyles({
					position:'fixed',
					top: af
				});
			}else if((s + extra) > c){
				if((s + extra) > c2){
					formBox.setStyles({
						position:'absolute',
						top: c2 - con1.getPosition().y
					});
				} else{
					formBox.setStyles({
						position:'fixed',
						top: (extra + idagl.aumento)
					});
				}
			} else{
				formBox.setStyles({
					position:'relative',
					top: 'inherit'
				});
			}
			
		});
	});
	
	sliderActive();
}



function cambio(dir){
	
	if(el.slider.run === false){ return false; }
	
	var sliders = $$('#boxBack .slider');
	var items = sliders[el.slider.activo].getElements('.item');
	items[el.slider.item].addClass('op0');
	
	var secciones = $$('.mainSec');
	var bullets = secciones[el.slider.activo].getElements('.bullet');
	bullets[el.slider.item].removeClass('activo');
	
	if(typeof dir === 'number'){
		el.slider.item = dir;
	} else if(dir == 'back'){
		if((el.slider.item - 1) < 0){
			el.slider.item = items.length - 1;
		} else{
			el.slider.item --;
		}
	} else{
		if((el.slider.item + 1) >= items.length){
			el.slider.item = 0;
		} else{
			el.slider.item ++;
		}
	}
	
	items[el.slider.item].removeClass('op0');
	bullets[el.slider.item].addClass('activo');
}


var tempo = '';
function sliderActive(){
	tempo = setInterval(function(){
		cambio();
	}, 3000);
}



function btnSlider(val){
	clearInterval(tempo);
	cambio(val);
	sliderActive();
}


function activarBtnSlider(){
	var btnNext = $$('.btnNext');
	var btnback = $$('.btnBack');
	
	btnNext.each(function(n){
		n.addEvent('click', function(){
			btnSlider('next');
		});
	});
	
	btnback.each(function(n){
		n.addEvent('click', function(){
			btnSlider('back');
		});
	});
	
	
	var secciones = $$('.mainSec');
	secciones.each(function(s){
		var bullets = s.getElements('.btnBullet .bullet');
		bullets.each(function(b, i){
			b.lugar = i;
			b.addEvent('click', function(){
				btnSlider(this.lugar);
			});
		});
	});
}






function activarMenu(){
	items = $$('#menuBox li');
	items.reverse();
	var secciones = $$('.mainSec');
	
	var scrollFX = new Fx.Scroll(window);
	incrementoInicial();
	
	items.each(function(it, i){
		it.addEvent('click', function(){
			var p = secciones[i].getPosition().y - idagl.aumento;
			//scrollFX.toElement(secciones[i], 'y');
			scrollFX.start(0, p);
		});
	});
	
	var btnReservaMovile = document.id('btnReservaMovile');
	var btnReservaMovileClose = document.id('btnReservaMovileClose');
	var formMovile = document.id('formMovile');
	var menuBoxMovile = document.id('menuBoxMovile');
	
	function btnAccionToggle(){
		formMovile.classList.toggle("formMovileHide");
		menuBoxMovile.classList.toggle("activo");
	}
	
	btnReservaMovile.addEvent('click', btnAccionToggle);
	btnReservaMovileClose.addEvent('click', btnAccionToggle);
}












idagl.ocupado = false;
var exp = /^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,6})$/;
var condicion = true;

function formEnviar(f){
	if(idagl.ocupado == true){ return false; }
	
	var nombre = f.getElement('input[type="text"]');
	var mail = f.getElement('input[type="email"]');
	var tel = f.getElement('input[type="tel"]');
	
	var valido = true;
	var mensaje = "";
	
	if(nombre.value == ""){ resultado = false; mensaje += "El campo de Nombre no puede estar vacio \n"; }
	if(mail.value == ""){ resultado = false; mensaje += "El campo de Email no puede estar vacio \n"; }
	if(tel.value == ""){ resultado = false; mensaje += "El campo de Teléfono no puede estar vacio \n"; }
	
	var resultado = exp.test(mail.value);
	if(resultado !== condicion){
		resultado = false;
		mensaje += "El correo electronico no es valido \n";
	}
	
	
	if(resultado === true){
		idagl.ocupado = true;
							
		function limpiar(j){
			if(j.status == "ok"){
				document.id('formContainMobile').setStyle('display',  'none');
				document.id('graciasMobile').setStyles({'display':'flex', 'opacity':'1'});
				document.id('formContain').setStyle('display',  'none');
				document.id('gracias').setStyles({'display':'flex', 'opacity':'1'});
				idagl.ocupado = false;
				f.reset();
			} else{
				alert(j.errores);
				idagl.ocupado = false;
			}
		}
		
		function error(j){
			alert(j.errores);
			console.info(j.errores);
			idagl.ocupado = false;
		}
		
		
		var datos = new FormData(f);
		//datos.append('name', nombre.value);
		//datos.append('mail', mail.value);
		//datos.append('tel', tel.value);
		
		var xhr = new XMLHttpRequest();
		xhr.open('POST', "../php/reserva.php", true);
		xhr.onload = function () {
			console.info(xhr);
			idagl.ocupado = false;
			var j = JSON.parse(xhr.response);
			if (xhr.status === 200) {
				if(j.status === "ok"){
					limpiar(j);
				} else{
					error(j);
				}
			} else {
				alert('Ocurrio un error al enviar su mensaje.');
				idagl.ocupado = false;
			}
		};
		xhr.send(datos);
		
	} else{
		alert(mensaje);
	}
	
}


function activarForms(){
	var formMobile = document.id('formMobile');
	var form = document.id('form');
	
	form.addEvent('submit', function(e){
		e.stop();
		formEnviar(this);
	});
	
	formMobile.addEvent('submit', function(e){
		e.stop();
		formEnviar(this);
	});
}












//--- Eventos a ejecutar cuando el DOM este listo _____________________________________________________________________________________
window.addEvent('domready', function(){
	videoControl();
	activarBtnSlider();
	activarForms();
});


//--- Eventos a ejecutar cuando la pagina este cargada _____________________________________________________________________________________
window.addEvent('load', function(){
	activarScroll();
	activarMenu();
});








