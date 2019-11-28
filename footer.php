<?php
/**
 * Fires after the main content, before the footer is output.
 *
 * @since 3.10
 */
do_action( 'et_after_main_content' );

if ( 'on' === et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix fCont">
						<div id="columnA" class="fColumn">
							<div class="fLogo"></div>
							<br>
							<div class="fContact"><img class="fIcon" src="/wp-content/uploads/icons/mailnaranja.png" alt=""> <p class="fItem">info@asuntosdelsur.org</p></div>
							<div class="fContact"><img class="fIcon" src="/wp-content/uploads/icons/twitternaranja.png" alt=""><a class="fItem" href="https://twitter.com/asuntosdelsur">@AsuntosdelSur</a></div>
							<div class="fContact"><img class="fIcon" src="/wp-content/uploads/icons/linknaranja.png" alt=""><a class="fItem" href="https://www.linkedin.com/company/asuntos-del-sur">Asuntos del Sur</a></div>

						</div>

						<div id="columnB" class="fColumn">
							<br><p class="fTitle">NUESTRA RUTA</p>
							<p style="color:#ed6b06; font-weight: bold; font-size: 20px;">-</p>							
							<a href="/ruta/#ads"><p class="fItem">¿Qué es ADS?</p></a>
							<a href="/ruta/#sur"><p class="fItem">Desde el Sur</p></a>
							<a href="/ruta/#como"><p class="fItem">¿Cómo trabajamos?</p></a>
							<a href="/ruta/#somos"><p class="fItem">¿Quiénes somos?</p></a>
						</div>
						<div id="columnC" class="fColumn">
							<br><p class="fTitle">PROYECTOS</p>
							<p style="color:#ed6b06; font-weight: bold; font-size: 20px;">-</p>
							<a href="/proyectos/#SISA"><p class="fItem">SISA</p></a>
							<a href="/proyectos/#ACADEMIA"><p class="fItem">Academia de Innovación</p></a>
							<a href="/proyectos/#INNOVA"><p class="fItem">Innova Política Latam</p></a>
							<a href="/proyectos/#GENWAYNA"><p class="fItem">Gen Wayna</p></a>	
							<a href="/proyectos/#MCP"><p class="fItem">Mucho Con Poco</p></a>
							<a href="/proyectos/#CIVICSTACK"><p class="fItem">Civic Stack</p></a>
						</div>
						<div id="columnD" class="fColumn">
							<br><p class="fTitle">PUBLICACIONES</p>
							<p style="color:#ed6b06; font-weight: bold; font-size: 20px;">-</p>							
							<a href="/publicaciones/#libros"><p class="fItem">Libros</p></a>
							<a href="/publicaciones/#investigaciones"><p class="fItem">Investigaciones</p></a>
						</div>
						<div id="columnE" class="fColumn">
							<br><p class="fTitle">BLOG</p>
							<p style="color:#ed6b06; font-weight: bold; font-size: 20px;">-</p>							
							<a href="/blog/#novedades"><p class="fItem">Novedades</p></a>
							<a href="/blog/#notas"><p class="fItem">Notas</p></a>
							<a href="/blog/#opiniones"><p class="fItem">Opinión</p></a>	
						</div>
						<div id="columnF" class="fColumn">
							<br><a href="https://www.facebook.com/AsuntosDelSur.Latinoamerica"><img class="fIcon" src="/wp-content/uploads/icons/facenaranja.png" alt=""></a>
							<a href="https://www.instagram.com/asuntosdelsur/"><img class="fIcon" src="/wp-content/uploads/icons/ijnaranja.png" alt=""></a>
							<a href="https://twitter.com/asuntosdelsur"><img class="fIcon" src="/wp-content/uploads/icons/twitternaranja.png" alt=""></a>
							<a href="https://www.linkedin.com/company/asuntos-del-sur"><img class="fIcon" src="/wp-content/uploads/icons/linknaranja.png" alt=""></a>	
						</div>
					</div>	<!-- .container -->

					<div class="container clearfix fMob">
						<div id="rowA" class="fRow">
							<div class="fLogo"></div>
							<br>
						</div>

						<div id="rowB" class="fColumn">
							<br><a href="/ruta"><p class="fTitle">NUESTRA RUTA</p></a><br>
							<br><a href="/proyectos"><p class="fTitle">PROYECTOS</p><br></a>
							<br><a href="/publicaciones"><p class="fTitle">PUBLICACIONES</p><br></a>
							<br><a href="/blog"><p class="fTitle">BLOG</p><br></a>
						</div>
						<div id="rowC" class="fRow">
							<br><a href="https://www.facebook.com/AsuntosDelSur.Latinoamerica"><img class="fIcon" src="/wp-content/uploads/icons/facenaranja.png" alt=""></a>
							<a href="https://www.instagram.com/asuntosdelsur/"><img class="fIcon" src="/wp-content/uploads/icons/ijnaranja.png" alt=""></a>
							<a href="https://twitter.com/asuntosdelsur"><img class="fIcon" src="/wp-content/uploads/icons/twitternaranja.png" alt=""></a>
							<a href="https://www.linkedin.com/company/asuntos-del-sur"><img class="fIcon" src="/wp-content/uploads/icons/linknaranja.png" alt=""></a>	
						</div>
						<div id="rowD" class="fRow">
							<img class="fIcon" src="/wp-content/uploads/icons/mailnaranja.png" alt=""> <p class="fItem">info@asuntosdelsur.org</p>
						</div>
					</div>	<!-- .container -->

				</div>
				<style>

					.fMob{
						display: none;
					}

					.fCont{
						display: flex;
						flex-direction: row;
						align-items: flex-start;
						justify-content: space-between;
						width: 100%;
						margin-bottom: 20px;
						max-width: 3000px !important;
					}
					
					.fIcon{
						width: 30px;
						height: 30px;
					}

					.fColumn{
						display: flex;
						width: 16%;
						margin-left: 30px;
						flex-direction: column;
						align-items: center;
						justify-content: space-around;
					}

					.fTitle{
						font-size: 15px;
						font-weight: bold;
						color: #243d71;
					}
					
					.fItem{
						font-size: 13px;
						font-weight: normal;
						color: #243d71;
						text-decoration: none;
					}

					.fContact{
						display: flex;
						flex-direction: row;
						align-items: center;
						justify-content: center;
						font-size: 10px;
					}

					.fLogo{
						width: 100%;
						height: 8vh;
						background-position: center top;
						background-repeat: no-repeat;
						background-size: contain;
						background-image: url('/wp-content/uploads/2019/02/ADS_Marca_Final-04.png');
					}
					
					a{
						text-decoration: none;
					}
					
					#footer-bottom{
						background-color: white;
					}

					@media screen and (max-width: 800px) {
  
					  .fCont{
					  	display: none;
					  }

					  .fColumn{
						width: 100%;
						margin: 0;
						align-items: center;
					  }

					  .fMob {
						display: flex;
						flex-direction: column;
						align-items: center;
						justify-content: center;
						width: 100%;
						margin-bottom: 20px;
						max-width: 3000px !important;					  
						}
					  .fRow{
						display: flex;
						width: 100%;
						margin-bottom: 20px;
						flex-direction: row;
						align-items: center;
						justify-content: center;
					  }

					}

				</style>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->
	<?php wp_footer(); ?>
</body>
</html>



