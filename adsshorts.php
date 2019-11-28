<?php

function innovaPolitica() {
    ob_start();
    get_template_part('innovaPop');
    return ob_get_clean();   
} 
add_shortcode( 'ads_innova', 'innovaPolitica' );

function qSomos() {
    ob_start();
    get_template_part('somosPop');
    return ob_get_clean();   
} 
add_shortcode( 'ads_somos', 'qSomos' );

function cEstrategico() {
    ob_start();
    get_template_part('estrategiaPop');
    return ob_get_clean();   
} 
add_shortcode( 'ads_estrategico', 'cEstrategico' );

function mostRead() {
    ob_start();
    get_template_part('readBox');
    return ob_get_clean();   
} 
add_shortcode( 'ads_read', 'mostRead' );

function proysRot() {
    ob_start();
    get_template_part('proyectosAds');
    return ob_get_clean();   
} 
add_shortcode( 'ads_proys', 'proysRot' );

function bookBlog() {
    ob_start();
    get_template_part('bookBlog');
    return ob_get_clean();   
} 
add_shortcode( 'ads_bookblog', 'bookBlog' );

function resBlog() {
    ob_start();
    get_template_part('resBlog');
    return ob_get_clean();   
} 
add_shortcode( 'ads_resblog', 'resBlog' );
