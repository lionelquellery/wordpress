<?php get_header(); ?>

        <!-- projects Content --> 
        <div class="row">

            <div class="span12 blog">

                <div class="row clearfix">
                    <ul class="blog-post-grid">

                        <!-- Blog Post Item -->
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <li class="span3 blog-post-item">
                                <div class="blog-post-hover hidden-phone hidden-tablet">
                                    <p>
                                        <a href="<?php the_permalink(); ?>" class="clearfix"><?php the_title(); ?></a>
                                        <?php 
                                            $terms = get_the_terms( $post->ID, 'type' );

                                            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                                                foreach ( $terms as $term ) {
                                                    $subject_links[] = $term->name;
                                                }
                                                $tags_list = join(', ', $subject_links);

                                                echo $tags_list;
                                            }
                                        ?>
                                    </p>
                                    <?php 
                                        $dateformat = "d F Y";
                                        $unixtimestamp = strtotime(get_field('date_de_publication'));
                                    ?>
                                    <p>Date de publication : <?php echo date_i18n($dateformat, $unixtimestamp); ?></p>
                                </div>
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('film_liste'); ?></a>
                            </li>
                        <?php endwhile; endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    
    </div> <!-- End Container -->

<?php get_footer(); ?>
