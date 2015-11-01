<?php get_header(); ?>    

        <div class="row gallery-row"><!-- Film gallery row --> 
           <div class="span12">
                <h5 class="title-bg">Films
                    <a class="btn btn-mini btn-inverse hidden-phone"  href="gallery-4col.htm">Tous les films</a>
                </h5>

                <div class="row clearfix no-margin">
                    <?php 
                        $args = array('post_type' => 'film', 'posts_per_page' => 4);
                        $the_query = new WP_Query($args);
                    ?>
                    <?php if (have_posts()) : ?>
                        <ul class="gallery-post-grid holder">
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <!-- Gallery Item 1 -->
                                <li  class="span3 gallery-item" data-id="id-1" data-type="illustration">
                                    <?php if (has_post_thumbnail()): ?>
                                        <span class="gallery-hover-4col hidden-phone hidden-tablet">
                                            <?php 
                                                $film_full_img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                                            ?>
                                            <span class="gallery-icons">
                                                <a href="<?php echo $film_full_img_url ?>" class="item-zoom-link lightbox" title="<?php the_title(); ?>" data-rel="prettyPhoto"></a>
                                                <a href="<?php the_permalink(); ?>" class="item-details-link"></a>
                                            </span>
                                        </span>
                                        <a href="gallery-single.htm">
                                            <?php the_post_thumbnail('film_liste'); ?>
                                        </a>
                                    <?php endif ?>
                                    <span class="project-details">
                                        <a href="gallery-single.htm"><?php the_title(); ?></a>
                                        <?php 
                                            $field = get_field_object('type_de_film')['choices'][get_field('type_de_film')]; 
                                            echo $field;
                                        ?>
                                    </span>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; wp_reset_postdata(); ?>
                </div>
            </div>
        </div><!-- End Gallery Row -->
    
        <div class="row"><!-- Begin Bottom Section -->
            <!-- Blog Preview -->
            <div class="span6">

                <h5 class="title-bg">Blog</h5>

                <div id="blogCarousel">
                    <?php 
                        query_posts('posts_per_page=1');
                        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home', array('class' => "align-left blog-thumb-preview")); ?></a>
                        <div class="post-info clearfix">
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <ul class="blog-details-preview">
                                <li>
                                    <i class="icon-calendar"></i>
                                    <strong>Posté le:</strong> <?php echo get_the_date(); ?>
                                </li>
                                <li>
                                    <i class="icon-user"></i>
                                    <strong>Ecrit par :</strong> <a href="<?php the_author_link(); ?>" title="Link"><?php the_author(); ?></a>
                                </li>
                                <li>
                                    <i class="icon-comment"></i>
                                    <strong>Commentaires :</strong> <a href="<?php echo get_comment_link(); ?>" title="Link"><?php echo get_comments_number(); ?></a>
                                </li>
                                <li>
                                    <i class="icon-tags"></i> <?php the_category(', '); ?>
                                </li>
                            </ul>
                        </div>
                        <p class="blog-summary"><?php the_content(); ?><p>
                        <a href="<?php the_permalink(); ?>">Lire</a>
                    <?php endwhile; endif; ?>
                </div>  
            </div>
        
            <!-- Projects Area -->
            <div class="span6">
                
                <?php 
                    $args = array('post_type' => 'projet', 'posts_per_page' => 1);
                    $the_query = new WP_Query($args);
                ?>
                <?php if (have_posts()) : ?>
                    <h5 class="title-bg">Projets</h5>

                    <!-- Client Testimonial Slider-->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div id="blogCarousel">
                            <a href="project-single.htm">
                                <?php the_post_thumbnail('home', array('class'=>'align-left blog-thumb-preview')) ?>
                            </a>
                            <div class="post-info clearfix">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <ul class="blog-details-preview">
                                    <li>
                                        <i class="icon-calendar"></i> 
                                        <?php 
                                            $dateformat = "d F Y";
                                            $unixtimestamp = strtotime(get_field('date_de_publication'));
                                        ?>
                                        <strong>Date de publication :</strong> 
                                        <?php echo date_i18n($dateformat, $unixtimestamp); ?>
                                    </li>
                                    <li>
                                        <i class="icon-tags"></i> 
                                        <?php the_taxonomies(); ?>
                                    </li>
                                </ul>
                            </div>
                            <p class="blog-summary"><?php the_excerpt(); ?><p>
                            <a href="<?php the_permalink(); ?>">Voir</a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; wp_reset_postdata(); ?>
            </div>
        </div><!-- End Bottom Section -->
    </div> <!-- End Container -->

<?php get_footer(); ?>
