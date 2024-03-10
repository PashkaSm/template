<?php
if ( have_rows( 'social_icons', 'options' ) ):
   while ( have_rows( 'social_icons', 'options' ) ) : the_row();
      if ( get_row_layout() == 'facebook' ): ?>
            <a href="<?php the_sub_field( 'url' ); ?>" class="fa-brands fa-facebook" title="Official Facebook page"
               target="_blank"></a>
      <?php elseif ( get_row_layout() == 'twitter' ): ?>
            <a href="<?php the_sub_field( 'url' ); ?>" class="fa-brands fa-twitter" title="Official Twitter accounts"
               target="_blank"></a>
      <?php elseif ( get_row_layout() == 'instagram' ): ?>
            <a href="<?php the_sub_field( 'url' ); ?>" class="fa-brands fa-instagram" title="Official Instagram accounts" 
               target="_blank"></a>
      <?php elseif ( get_row_layout() == 'linkedin' ): ?>
            <a href="<?php the_sub_field( 'url' ); ?>" class="fa-brands fa-linkedin" title="Official Linkedin profile"
               target="_blank"></a>
      <?php elseif ( get_row_layout() == 'youtube' ): ?>
            <a href="<?php the_sub_field( 'url' ); ?>" class="fa-brands fa-youtube" title="Official Youtube channel"
               target="_blank"></a>
      <?php elseif ( get_row_layout() == 'pinterest' ): ?>
            <a href="<?php the_sub_field( 'url' ); ?>" class="fa-brands fa-pinterest" title="Official Pinterest channel"
               target="_blank"></a>
      <?php elseif ( get_row_layout() == 'vimeo' ): ?>
            <a href="<?php the_sub_field( 'url' ); ?>" class="fa-brands fa-vimeo" title="Official Vimeo channel"
               target="_blank"></a>
      <?php elseif ( get_row_layout() == 'yelp' ): ?>
            <a href="<?php the_sub_field( 'url' ); ?>" class="fa-brands fa-yelp" title="Official Yelp channel"
               target="_blank"></a>
      <?php elseif ( get_row_layout() == 'tiktok' ): ?>
            <a href="<?php the_sub_field( 'url' ); ?>" class="fa-brands fa-tiktok" title="Official tik tok channel"
               target="_blank"></a>
      <?php elseif ( get_row_layout() == 'google_plus' ): ?>
            <a href="<?php the_sub_field( 'google_plus' ); ?>" class="fa-brands fa-google-plus" title="Official Yelp channel"
               target="_blank"></a>
      <?php endif;
   endwhile;
else :
   // no layouts found
endif;
?>