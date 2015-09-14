<div class="jewelry-item">
	<div class="jewelry-image">
		<a href="#<?php get_the_ID(); ?>">
			<div class="jewelry-thumb">
				<?php if( have_rows('image') ): // check if the repeater field has rows of data ?>
					
					<?php
					$rows = get_field('image'); // get all the rows
					$first_row = $rows[0]; // get the first row
					$first_row_image = $first_row['image']['id']; // get the sub field value 
					
					// Note
					// $first_row_image = 123 (image ID)
					
					$image = wp_get_attachment_image_src( $first_row_image, 'full' );
					// url = $image[0];
					// width = $image[1];
					// height = $image[2];
					
					?>
					<img src="<?php echo $image[0]; ?>" />
				<?php endif; ?>
			</div>
		</a>
	</div>
	<div class="jewelry-panel" id="<?php get_the_ID(); ?>">
		<div class="jewelry-panel-image">
				<?php if( have_rows('image') ): // check if the repeater field has rows of data
					while ( have_rows('image') ) : the_row(); // loop through the rows of data ?>
						<img src='<?php echo get_sub_field('image')['url']; ?>'>
				<?php endwhile; endif; ?>
		</div>
		<div class="jewelry-info">
			<h2 class="alpha">
				<?php the_title(); ?>
			</h2>
			<p><?php the_field('description'); ?></p>
			<ul>
				<li class="type">
					Type: <?php the_field('type'); ?>
				</li>
				<li class="material">
					Material: <?php the_field('material'); ?>
				</li>
				<li class="retail">
					Price: $<?php the_field('retail_price'); ?>
				</li>
				<li class="bom">
					BOM Price: $<?php the_field('bom_price'); ?>
				</li>
				<li class="inventory">
					Inventory: <?php the_field('inventory'); ?>
				</li>
				<li class="sold">
					# Sold: <?php the_field('number_sold'); ?>
				</li>
			</ul>
			<a href="<?php the_field('jewelry_url'); ?>" class="btn">Buy On Etsy</a>
		</div>
	</div>
</div>

