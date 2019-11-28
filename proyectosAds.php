<?php 
/* Template Name:proyectosADS */
 ?>

 <div class="pSelector">
 	<div id="sisa" class="pLogo ">
 		<a href="/proyectos/#SISA"><img class="pImg" src="/wp-content/uploads/proyectos/LCSISA.png" alt=""></a>
 	</div>
 	<div id="acad" class="pLogo">
 		<a href="/proyectos/#ACADEMIA"><img class="pImg" src="/wp-content/uploads/proyectos/LCAcademia.png" alt=""></a> 		
 	</div>
 	<div id="inno" class="pLogo">
 		<a href="/proyectos/#INNOVA"><img class="pImg" src="/wp-content/uploads/proyectos/LCInnova.png" alt=""></a>
 	</div>
 	<div id="gen" class="pLogo">
 		<a href="/proyectos/#GENWAYNA"><img class="pImg" src="/wp-content/uploads/proyectos/LCGenWayna.png" alt=""></a>
 	</div>
 	<div id="mcp" class="pLogo">
 		<a href="/proyectos/#MCP"><img class="pImg" src="/wp-content/uploads/proyectos/LCMCP.png" alt=""></a>
 	</div>
 	<div id="civ" class="pLogo">
 		<a href="/proyectos/#CIVICSTACK"><img class="pImg" src="/wp-content/uploads/proyectos/LCCivic.png" alt=""></a>
 	</div>
 </div>

 <style>
 	.pSelector{
 		height: 23vw;
 		width: 98%;
 		right: 0;
		overflow-x: scroll;
		overflow-y: hidden;
  		white-space: nowrap;
 		margin-left: 1%;
 	}


 	.pLogo{
 		display: inline-block;
 		width: 23vw;
 		height: 100%;
 		padding-right: 10px;
 		background-size: contain;
 		background-repeat: no-repeat;
 		background-position: center center;
 	}

	.pImg{
		display: block;
		width: 100%;
		height: 100%;
	}

 	#sisa{
		background-image: url('/wp-content/uploads/proyectos/LCSISA.png')
 	}
 	#acad{
		background-image: url('/wp-content/uploads/proyectos/LCAcademia.png') 		
 	}
 	#inno{
		background-image: url('/wp-content/uploads/proyectos/LCInnova.png')
 	}
 	#gen{
		background-image: url('/wp-content/uploads/proyectos/LCGenWayna.png')
 	}
 	#mcp{
		background-image: url('/wp-content/uploads/proyectos/LCMCP.png')
 	}
 	#civ{
		background-image: url('/wp-content/uploads/proyectos/LCCivic.png')
 	}

.pSelector::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
}

.pSelector::-webkit-scrollbar
{
	width: 4px !important;
	background-color: #F5F5F5;
}

.pSelector::-webkit-scrollbar-thumb
{
	background-color: #243d71;
}

@media screen and (max-width: 800px) {

  .pSelector{
	height: 48vw;
  }

  .pLogo{
  	width: 48vw;
  } 
}

 </style>
