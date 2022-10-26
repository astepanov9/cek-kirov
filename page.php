<?php
/*
Template Name: Шаблон страницы
*/
?>

<?php get_header(); ?>

<main>
    <?php echo breadcrumb(' / '); ?>
    <div class="page">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="row">
                        <div class="col-12 page__title">
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 page__content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile;
            else : ?>
                <p>Извините, ничего не найдено.</p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>