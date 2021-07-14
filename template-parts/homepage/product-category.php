<!--shop category start-->
<?php if( get_theme_mod('simpleshop_customizer_display_categories', true ) ) : ?>
<section class="space-3">
    <div class="container sm-center">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h2 class="title"> <?php echo get_theme_mod('simpleshop_customizer_display_categories_title', __('Shop
                        By Category', 'simpleshop') ) ?>
                    </h2>
                </div>
            </div>

            <div class="col-md-12">
                <?php
                $simpleshop_product_column = get_theme_mod('simpleshop_customizer_categories_columns', true);
                echo do_shortcode("[product_categories columns={$simpleshop_product_column}]") ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!--shop category end-->
