
<?php get_header(); ?>
<div class="container">
    <div class="row mt-5">
    <!--  -->
    <?php 
    if (have_posts(  )){
        while (have_posts(  )){
            the_post(  );
            ?>
            <div class="col-sm-6">
            <div class="main-post p-3 mb-3">
            <h3 class="post-title my-2">
            <a href="<?php the_permalink() ?>">
            <?php the_title(); ?>
            </a>
            </h3>
            <span class="post-author"><i class="far fa-edit mr-1"></i>
            <?php the_author_posts_link() ?></span>
            <span class="post-date"><i class="far fa-calendar-alt mr-1"></i><?php the_time( 'j / F / Y' ) ?></span>
            <span class="post-comments"><i class="far fa-comment mr-1"></i><?php comments_popup_link( '0 comments', '1 comment', '% comments', '', 'comments disabled' ) ?></span>
            <!-- <div class="post-img my-2"> -->
            <?php the_post_thumbnail('',['class'=>'img-responsive img-thumbnail my-2']) ?>
            <!-- </div> -->
            <p class="post-content text-justify"><?php the_excerpt(  ) ?></p>
            <hr>
            <p class="categories"><i class="far fa-folder-open mr-1"></i><?php the_category(',') ?></p>
            </div>
        </div>
            <?php   
        }
    }
    ?>
        
           
            
            
            
         
    <!--  -->
    
    <!--  -->
        
    </div>
</div>
<?php get_footer(); ?>
