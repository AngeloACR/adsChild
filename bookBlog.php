<?php 
/* Template Name:bookBlog */
?>

<?php 
/*$pagedB = get_query_var('paged');
$pagedB = max( 1, $pagedB );
$per_page = 6;

$offset_start = 1;
$offset = ( $pagedB - 1 ) * $per_page + $offset_start;
*/
 $args = array(
    'category_name' => 'libros',
//    'posts_per_page' => $per_page,
//    'paged'          => $pagedB,
//    'offset'         => $offset, // Starts with the second most recent post.
    'orderby'        => 'date',  // Makes sure the posts are sorted by date.
    'order'          => 'DESC',  // And that the most recent ones come first.
);

/*Setting up our custom query */
//query_posts($args);
$post_list = new WP_Query($args);

/*$total_rows = max( 0, $post_list->found_posts - $offset_start );
$total_pages = ceil( $total_rows / $per_page );
*/
if($post_list->have_posts()):  
?>
<div id="bookContainer">
<?php 
    while($post_list->have_posts()):  
        $post_list->the_post(); 
?>
    <div class="bookItem">
        <div class="bookImage">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('full'); ?></a>
        </div>
        <div class="bookTitle">
            <p><?php the_title(); ?></p>
        </div>
<?php/*        <!--h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2-->*/?>
    </div>

<?php
    endwhile;
?>
    <div class="pagination clearfix">   
        <!--div class="alignleft"><?php// next_posts_link( '' );?></div>
        <div class="alignright"><?php //previous_posts_link( '' ); ?></div-->
    <?php 

/*            $pag_args1 = array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
//            'total'   => $total_pages,
            'total'   => $post_list->max_num_pages,
            'current' => $pagedB,
            'format'       => '?pagedB=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'prev_next'    => true,
            'prev_text'    => sprintf( '<div class="alignleft"></div>', __( 'Newer Posts', 'text-domain' ) ),
            'next_text'    => sprintf( '<div class="alignright"></div>', __( 'Older Posts', 'text-domain' ) ),
            'add_args'     => false,
            );

            echo paginate_links($pag_args1);
*/    ?>
    </div>
</div>

<?php
endif;
?>

<style>
    #bookContainer{
        width: 100%;
        overflow-y: hidden;
        overflow-x: scroll;
        white-space: nowrap;
        height: 450px;
    }

    .bookItem{
        display: inline-block;
        vertical-align: top;
        padding-right: 13px;
        font-weight: bold;
        width: 25%;
    }

    .bookImage{
        text-align: center;
    }

    .bookImage img{
        width: 180px;
        height: 260px;
    }

    .bookTitle p{
        text-align: center;
        color: #243d71;
        width: 100%;
        font-size: 20px;
        white-space: initial;
    }

    #bookContainer::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #f5f5f5;
    }

    #bookContainer::-webkit-scrollbar
    {
        width: 4px !important;
        background-color: #f5f5f5;
    }

    #bookContainer::-webkit-scrollbar-thumb
    {
        background-color: #243d71;
    }

</style>

