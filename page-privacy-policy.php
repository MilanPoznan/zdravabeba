<?php /* Template Name: Cookie Policy */ 

get_header();
?>
<div class="policy">  
    <?php 
    if(have_posts()):
      while(have_posts()): the_post();?>
      <div class="policy__wrapper">
        <div class="policy__content">  
          <?php the_content();?>
        </div>       
      </div>
    <?php  
      endwhile;
    endif;        
    ?>
</div> 
<?php 
get_footer();