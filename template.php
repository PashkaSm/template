<?php get_header(); /* Template Name: */?>
<?php get_template_part('/components/top'); ?>
<div id="content" class="wrap page_id_<?php the_ID() ?>">
    <main>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="wysiwyg">
			<?php if ( have_posts() ): while ( have_posts() ): the_post();
				the_content();
			endwhile;endif;
			?>
        </div>
    </main>
</div>
<?php get_footer(); ?>