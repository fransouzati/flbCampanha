<?php
/**
 * Template part for displaying posts.
 *
 * @package myfirstheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php myfirstheme_posted_on(); ?>
		</div><!-- .entry-meta -->
	<?php endif; ?>
</header><!-- .entry-header -->

<div class="entry-content">
	<?php
	the_content( sprintf(
		/* translators: %s: Name of current post. */
		wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'myfirstheme' ), array( 'span' => array( 'class' => array() ) ) ),
		the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) );
		?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'myfirstheme' ),
			'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php myfirstheme_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->

	<ul class="timeline">
		<li>
			<div class="timeline-badge">
				<a><i class="fa fa-circle" id=""></i></a>
			</div>
			<div class="timeline-panel">
				<img src="<?php echo get_template_directory_uri() ?>/img/capa.jpg" class="timeline-capa">
				<div class="timeline-heading">
					<h4>Timeline Event</h4>
				</div>
				<div class="timeline-body">
					<p>Invitamus me testatur sed quod non dum animae tuae lacrimis ut libertatem deum rogus aegritudinis causet. Dicens hoc contra serpentibus isto.</p>
					<p class="text-right stats">
						<span style="float:left"><i class="fa fa-heart"></i> 258 cutidas</span>
						<i class="fa fa-calendar"></i> 25 de Dezembro de 2016
					</p>
				</div>
				<div class="timeline-footer">
					<p class="text-center">
						<a href="#" ><span style="float:left"><i class="fa fa-heart"></i> Curtir</span></a>
						<a href="#"><i class="fa fa-comments-o"></i> Comentar</a>
						<a href="#" ><span style="float:right"><i class="fa fa-share"></i> Compartilhar</span></a>
					</p>
				</div>
			</div>
		</li>
		<li class="clearfix no-float"></li>
	</ul>
