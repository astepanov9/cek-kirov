<?php get_header(); ?>

<main>
    <?php echo breadcrumb(' / '); ?>
    <section class="single-post">
        <div class="container">
            <div class="row">
                <div class="col-12 single-post__body">
                    <?php the_post(); ?>
                    <article class="single-post__article wow fadeIn" data-wow-delay="0.2s">
                        <h2 class="single-post__title"><?php the_title();  ?></h1>
                            <div class="single-post__meta">
                                <div class="single-post__date">
									<?php the_date('Y-m-d', '<i class="fa fa-calendar" aria-hidden="true"></i> Дата публикации: '); ?>
								</div>
                                <div class="single-post__cat">
                                    <span class="separator">/</span>
                                    Категория: <?php the_category(', '); ?>
                                </div>
								<div class="single-post__view">
									<span class="separator">/</span>
									<i class="fa fa-eye" aria-hidden="true"></i><span class="view__number"> <?php echo get_post_views(get_the_ID()); ?></span>
								</div>
                            </div>

                            <div class="single-post__content">
                                <?php the_content();  ?>
                            </div>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="single-post__feedback wow fadeIn" data-wow-delay="0.2s">
                        <button class="btn main__btn modal-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-buttonid="<?php the_field( 'tariff' ); ?>"><?php the_field('button'); ?></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="single-post__table wow fadeIn" data-wow-delay="0.2s" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/img/news-f.jpg')">
                        <p class="single-post__table-item"><?php the_field('text'); ?></p>
                        <p class="single-post__table-item"><a href="tel:<?php the_field('phone'); ?>"><i class="fa fa-phone" aria-hidden="true"></i><?php the_field('phone'); ?></a></p>
                        <p class="single-post__table-item"><a href="mailto:<?php the_field('email'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i><?php the_field('email'); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>