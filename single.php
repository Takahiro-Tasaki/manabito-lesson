<?php get_header(); ?>

<?php if ( shortcode_exists( 'wp-structuring-markup-breadcrumb' ) ) : ?>
<nav class="breadcrumb">
	<?php echo do_shortcode( '[wp-structuring-markup-breadcrumb]' ); ?>
</nav>
<?php endif; ?>

<div class="l-contents-wrapper">
	<main>
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
		?>
		<article>
			<?php
				the_title( '<h1>', '</h1>' );
				the_content();
			?>
		</aritcle>
		<?php
			endwhile;
		endif;
		?>
	</main>
	<?php get_sidebar(); ?>
	<nav id="pageTop" class="page-top">ページの先頭へ戻る</nav>
</div>

<?php get_footer(); ?>
