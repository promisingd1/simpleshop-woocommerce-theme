<?php
	get_header();
	get_template_part('template-parts/shop/banner');
	?>
<main class="site-main">
	<!--product section start-->
	<section class="space-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-4 mb-lg-0">
                    <?php while ( have_posts() ) {
                        the_post();
                        the_content();
                    }
                    ?>
				</div>

				<div class="col-lg-4 widget-area " role="complementary">
                    <?php
                        if (is_active_sidebar('sidebar-1')) {
                            dynamic_sidebar('sidebar-1');
                        }
                    ?>
				</div>

			</div>
		</div>
	</section>
	<!-- product section end-->


</main>
<?php
	get_footer();
	?>
