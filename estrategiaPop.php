<?php 
/* Template Name:estPop */
?>
<div class="estBox">
	<div id="e1" class="estTag">
		<div class="estImg">
		</div>
		<div class="estInfo">
			<div class="nombre">
				BETILDE MUÑOZ
			</div>
		</div>
		<div id="eFormal" class="estTxt">
Venezuela. Directora del Departamento de Inclusión Social de la Secretaría de Acceso a Derechos y Equidad de la Organización de los Estados Americanos (OEA) y anterior Directora del Departamento de Cooperación y Observación Electoral de esa misma institución (2011-2014). Tiene un Ph.D. en Ciencias Políticas de la Florida International University de Miami. Sus más recientes publicaciones incluyen Equidad e Inclusión Social: Superando Desigualdades hacia Sociedades más Inclusivas (2016), y Women, Politics and Democracy in Latin America (2017) de la serie “Crossing Boundaries of Gender and Politics in the Global South” de Palgrave McMillan. En 2008 y 2016 recibió el Outstanding Performance Award otorgado por el Secretario General de la OEA por su desempeño sobresaliente. Durante casi 20 años, la Dra. Muñoz-Pogossian se ha dedicado a la investigación sobre política en América Latina, y ha participado en múltiples misiones políticas y electorales de la Organización de los Estados Americanos. Es autora de diversas publicaciones y columnas de opinión en temas de democracia, derechos humanos, equidad e inclusión social en las Américas.		
		</div>
	</div>
	<div id="e2" class="estTag">
		<div class="estImg">
		</div>
		<div class="estInfo">
			<div class="nombre">
				MARTÍN LANDI
			</div>
		</div>
		<div id="eFormal" class="estTxt">
Martin Landi trabaja en temas de cooperación internacional, medios, conflicto y transiciones políticas por más de dos décadas. Ha trabajado para el Departamento de Asuntos Políticos de las Naciones Unidas, el Programa de Desarrollo de las Naciones Unidas (PNUD) y en organizaciones no gubernamentales en más de veinte países en cinco continentes. Actualmente es Senior Technical Advisor de la práctica de Medios e Información en IREX (www.irex.org) basado en Washington DC. Master en Relaciones Internacionales en la Universidad de Columbia en los Estados Unidos, Master en Negocios de la Copenhagen Business School (CBS) en Dinamarca y Licenciado en Comunicación Social de la Universidad de Buenos Aires. Posee además estudios de periodismo de postgrado (beca Clarín-Universidad Católica).
		</div>
	</div>
	<div id="e3" class="estTag">
		<div class="estImg">
		</div>
		<div class="estInfo">
			<div class="nombre">
				CARU SCHWINGEL
			</div>
		</div>
		<div id="eFormal" class="estTxt">
Caru Schwingel es periodista (FABICO / UFRGS), Magíster en Cibercultura (Centro Internacional de Estudios e Investigación en Cibercultura – Ciberpesquisa) y Doctora en Ciberperiodismo (Grupo de Investigación en Periodismo en Línea – GJOL) en el Programa de Comunicación y Cultura Contemporánea (Facom / UFBA). Post-doctorada en Fotónica y Nuevos Medios en el Programa de Postgrado en Ingeniería Eléctrica de la Universidad de Mackenzie (SP). Investigadora, autora, profesora, emprendedora, consultora y activista. Co-fundadora de la Casa de la Cultura Digital-SP, integrante del colectivo Periodistas LIvres.
		</div>
	</div>
	<div id="e4" class="estTag">
		<div class="estImg">
		</div>
		<div class="estInfo">
			<div class="nombre">
				LUCÍA DAMMERT
			</div>
		</div>
		<div id="eFormal" class="estTxt">
Socióloga, Doctora en Ciencia Política en la Universidad de Leiden, Holanda. Ha trabajado en instituciones académicas en Estados Unidos, Argentina, y Chile. Entre el 2005 y el 2010 se desempeñó como Directora del Programa Seguridad y Ciudadanía de FLACSO Chile. En la actualidad es Profesor Asociado de la Facultad de Humanidades de la Universidad de Santiago de Chile. Ha publicado artículos y libros sobre participación comunitaria, seguridad ciudadana, conflictividad social y temas urbanos en revistas nacionales e internacionales. En el plano de la gestión pública ha participado de programas de seguridad ciudadana en diversos países de la Región, trabajando como Jefa de la División Estudios del Ministerio del Interior de Chile y Jefa de Asesores del Subsecretario del Interior y Seguridad Pública de Chile. Ha realizado asesoría a diversos gobiernos entre los que destacan Argentina, Perú y México. Se desempeñó además como asesor experto en el Departamento de Seguridad Públlica de la Organización de los Estados Americanos y como Consultor Banco Interamericano del Desarrollo, Banco Mundial, Programa de Naciones Unidas para el Desarrollo, CAF, entre otros organismos regionales y multilaterales. Miembro de la Junta Directiva de UNIDIR (United Nations Institute for Disarmament Research), del Directorio del Centro de Pensamiento Espacio Público y de la Fundación Junto al Barrio. En el año 2017 fue invitada a ser parte del Consejo Asesor en Temas de Desarme del Secretario General de Naciones Unidas para el periodo 2017-2020 siendo la única representante de América Latina.
		</div>
	</div>
</div>

<style>
.estBox{
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	justify-content: space-around;
	width: 100%;
	min-height: 20vh;
}

.estTag{
	display: flex;
	flex-direction: column;
	flex-wrap: wrap;
	justify-content: flex-start;
	width: 23vw;
	margin-top: 20px;
	margin-bottom: 20px;
	margin-right: 20px;
	margin-left: 20px;
	overflow: hidden;
	min-height: 20vw;
    cursor: pointer;
}

.estInfo{
	margin-top: 15px;
	overflow: hidden;
	text-align: center;
	font-weight: bold;
	font-size: 16px;
	font-family: 'Roboto', sans-serif;	
}

.nombre{
	font-weight: bold;
	font-size: 16px;
	text-align: center;
	font-family: 'Roboto', sans-serif;
}

.estImg{
	border-radius: 50%;
	height: 23vw;
	width: 100%;
}

.estTxt{
	text-align: center;
	font-family: 'Roboto', sans-serif;
}

#e1.estTag .estImg{
	background-image: url("/wp-content/uploads/2019/02/Betilde.png");
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center center;
	transition: background-image 0.5s ease-in-out
}

#e2.estTag .estImg{
	background-image: url("/wp-content/uploads/2019/02/Martin-Landi.png");
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center center;
	transition: background-image 0.5s ease-in-out
}

#e3.estTag .estImg{
	background-image: url("/wp-content/uploads/2019/02/Caru.png");
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center center;
	transition: background-image 0.5s ease-in-out
}

#e4.estTag .estImg{
	background-image: url("/wp-content/uploads/2019/03/lucia3.png");	
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center center;
	transition: background-image 0.5s ease-in-out
}

#eFormal{
	display: none;
	max-height: 0;
	transition: max-height 0.2s ease-out;
}


@media screen and (max-width: 800px) {
  .estTag{
	width: 60vw;
  }

  .estImg{
	height: 60vw;
  }

  #eFormal{
	display: block;
	max-height: 500px;
  }

}
</style>

<script>
	var pops = document.getElementsByClassName("estTag");

	for(let pop of pops){

		pop.addEventListener("mouseover", function() {
			pop.children[2].style.display = "block";
			pop.children[2].style.maxHeight = pop.children[2].scrollHeight + "px";	
		});


		pop.addEventListener("mouseout", function() {
			pop.children[2].style.display = "none";
			pop.children[2].style.maxHeight = null;
		});
	}

</script>