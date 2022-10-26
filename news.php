<?php
/*
Template Name: Все новости
*/
?>

<?php get_header(); ?>

<main>
    <?php echo breadcrumb(' / '); ?>
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-12 page__title">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
            <div class="row">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $query = new WP_Query(array(
                    'category_name' => 'news',
                    'posts_per_page' => 8,
                    'paged' => $paged
                ));

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post(); ?>
                        <div class="col-lg-6 col-12 news__item wow fadeIn" data-wow-delay="0.2s">
                            <div class="news__body">
                                <div class="news__item-date">
                                    <i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date(); ?> <?php the_time(); ?>
									<span class="separator">/</span>
									<i class="fa fa-eye" aria-hidden="true"></i><span class="view__number"> <?php echo get_post_views(get_the_ID()); ?></span>
                                </div>
                                <div class="news__item-title">
                                    <?php the_title(); ?>
                                </div>
                                <div class="news__item-desc">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="news__item-button">
                                    <a href="<?php echo get_permalink(); ?>" class="btn main__btn">Читать полностью</a>
                                </div>
                            </div>
                        </div>
                    <?php } 
                    ?>
                    <?php
                    $max_page = $query->max_num_pages;
                    echo paginate_links(array(
                        'base'    => str_replace($max_page, '%#%', esc_url(get_pagenum_link($max_page))),
                        'format'  => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total'   => $max_page,
                        'type'    => 'list',
                        'prev_text'    => __('« Назад'),
                        'next_text'    => __('Далее »'),
                    ));

                    ?>
                    <?php wp_reset_postdata(); ?>

                <?php } else {
                    echo "Постов нет";
                } ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>