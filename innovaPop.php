<?php 
/* Template Name:innovaPop */

?>
<p class="innovaText">Somos una organización que diseña e implementa <span id="popTag">innovaciones políticas</span> para desarrollar democracias paritarias, inclusivas y participativas.</p>

<div id="blackBox">
	 <div id="popText">
		 <div class="popCont">
		 	
		 <h1 class="popTitle">Por innovaciones políticas nos referimos</h1> <br>

		 <p class="popFont">Al desarrollo de prácticas, intervenciones, dispositivos tecnológicos y/o regulaciones que permitan solucionar problemas públicos. Las innovaciones, entendemos, deben tener dos condiciones necesarias: <br><br>

		 <span style="margin-left: 30px; font-weight: bold; color: #243d71; font-size:26px;">	1 | </span>La primera es que deben buscar transformarse en una práctica social y política generalizada, es decir, deben buscar tener un impacto político. <br> <br>

		 <span style="margin-left: 30px; font-weight: bold; color: #243d71; font-size:26px;">	2 | </span>La segunda es que deben favorecer a la ampliación de derechos y de calidad de vida de las personas. Entendida de este modo, la innovación política apunta a la construcción de sociedades abiertas, gobernadas por comunes, por lo que se requieren acciones que distribuyan el poder. Es por ello que, desde Asuntos del Sur, priorizamos las innovaciones centradas en la construcción de sociedades más paritarias, inclusivas y participativas. </p><br>

		 <span style="float: right; font-weight: bold;">Autor: Matías F. Bianchi</span>
		 </div>

		 <div id="cBox">
		 </div>
	 </div>
</div>

<p class="innovaText popMob"> Por innovaciones políticas nos referimos al desarrollo de prácticas, intervenciones, dispositivos tecnológicos y/o regulaciones que permitan solucionar problemas públicos. Las innovaciones, entendemos, deben tener dos condiciones necesarias: <br><br>

 <span style="margin-left: 30px; font-weight: bold; color: #243d71; font-size:26px;">	1 | </span>La primera es que deben buscar transformarse en una práctica social y política generalizada, es decir, deben buscar tener un impacto político. <br> <br>

 <span style="margin-left: 30px; font-weight: bold; color: #243d71; font-size:26px;">	2 | </span>La segunda es que deben favorecer a la ampliación de derechos y de calidad de vida de las personas. Entendida de este modo, la innovación política apunta a la construcción de sociedades abiertas, gobernadas por comunes, por lo que se requieren acciones que distribuyan el poder. Es por ello que, desde Asuntos del Sur, priorizamos las innovaciones centradas en la construcción de sociedades más paritarias, inclusivas y participativas. <br><br>
 <span style="float: right; font-weight: bold;">Autor: Matías F. Bianchi</span>
 </p>

<style>	 

.popTitle{
	color: #243d71;
	font-weight: bold;
	font-size: 20px;
}

.innovaText{
	z-index: 10;
	font-size: 16px;
	text-align: center;
	font-weight: normal;
}

#popTag{
	cursor: pointer;
	font-weight: bold;
}

#blackBox{
  display: none;
  position: fixed; 
  z-index: 10; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 0; 
  overflow: auto; 
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
}

#popText{
	display: none;
	overflow: hidden;
	z-index: 10000;
	width: 110vh;
	top: 60%;
	left: 50%;
	transform: translate(-50%, -50%);
	position: fixed;
	background-color: white;
	background-image: url('/wp-content/uploads/fondoPop2.png');
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center center;
	color: black;
	height: 0;
	  -webkit-transition: height 0.2s ease-in-out;
  -moz-transition: height 0.2s ease-in-out;
  -ms-transition: height 0.2s ease-in-out;
  -o-transition: height 0.2s ease-in-out;
  transition: height 0.2s ease-in-out;
}

.popCont{
	position: relative;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 70%;
	height: 80%;
	overflow-y:scroll;
	padding-right: 10px;
}

.popFont{
	font-size: 14px;
}

#cBox{
	background-image: url(/wp-content/uploads/xicon.png);
	background-size: contain;
	background-position: center center;
	background-repeat: no-repeat;
	cursor: pointer;
	width: 65px;
	height: 65px;
	position: absolute;
	top: 8px;
	right: 8px;
}

.popMob{
	display: none;
}

.popCont::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #f5f5f5;
}

.popCont::-webkit-scrollbar
{
	width: 4px !important;
	background-color: #f5f5f5;
}

.popCont::-webkit-scrollbar-thumb
{
	background-color: #243d71;
}

@media only screen and (max-width: 800px) {
  .popMob {
    display: block;
  }
}

</style>

<script>
	var pop = document.getElementById("popTag");
	var modal = document.getElementById("popText");
	var box = document.getElementById("blackBox");
	var close = document.getElementById("cBox")
	pop.addEventListener("click", function() {
    	box.style.display = "block";
    	modal.style.display = "block";

    	box.style.height = "100%";
    	modal.style.height = "70vh";
	})
	close.addEventListener("click", function() {
    	box.style.display = "none";
    	modal.style.display = "none";

    	box.style.height = "0%";
    	modal.style.height = "0%";
	})



</script>