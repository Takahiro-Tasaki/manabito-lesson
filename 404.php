<?php get_header(); ?>

<?php if ( shortcode_exists( 'wp-structuring-markup-breadcrumb' ) ) : ?>
<nav class="breadcrumb">
	<?php echo do_shortcode( '[wp-structuring-markup-breadcrumb]' ); ?>
</nav>
<?php endif; ?>

<div class="l-contents-wrapper">
	<main>
		<h1>お探しのページが見つかりませんでした。</h1>
		<nav class="link-404"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホームへ戻る</a></nav>
	</main>
	<?php get_sidebar(); ?>
	<nav id="pageTop" class="page-top">ページの先頭へ戻る</nav>
</div>

<?php get_footer(); ?>
