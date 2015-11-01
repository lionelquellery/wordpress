<?php /* Template Name:*/ ?>

<?php  

if(is_front_page())
{
    get_header('single');
}
else
{
	get_header();
   
}
?>
<button class="CreateKit"><a href="/wordpress/kit/">Créez votre propre kit </a></button>

</header>
<body <?php body_class(); ?>>
<!-- Header home -->
	<div class="home">
		<span class="slogan"><?php bloginfo('description'); ?></span>	
	</div>


<!-- Content of the home page -->
	<div class="block-enviro">
		
<?php $loop = new WP_Query( array( 'post_type' => 'situation' ) ); ?>
	<?php if (have_posts()) : ?>
		<ul class="choices">
		<?php while ($loop->have_posts()) : $loop->the_post(); ?>
			<?php
				$post_thumbnail_id = get_post_thumbnail_id(); 
				$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); 

				?>

	<!-- Content of the home page -->
		<li class="enviro">	
			<a href="<?php echo post_permalink( $ID ); ?>">
				<div class="content" style="background-image: url(<?php echo $post_thumbnail_url; ?>)">
					<div class="overlay">
					<p class="situation"><?php the_title(); ?></p>
					<img class="icon" src="<?php the_field('image-icon'); ?>" alt="Picto ile deserte">
				</div>
			</a>
		</li>
	<?php endwhile; ?>
<?php endif; ?>
		</ul>
	</div>
<?php get_footer(); ?>

	