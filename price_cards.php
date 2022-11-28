<div class="wrapper">
    <h2 style="text-align: center; color: #000;"><?php echo get_field('cc_title');?></h2>

    <div id="price-card" class="container">

    <?php if ( have_rows('cc_price_cards') ) : ?>
        <?php while( have_rows('cc_price_cards') ) : the_row(); 
            $link = get_sub_field('cc_card_button');
            $linkText = $link['title'];
            $linkURL = $link['url']
        
        ?>
            <div class="card">
                <div class="top">
                    <h3 class="card-title"><?php echo get_sub_field('cc_card_title');?></h3>
                    <p class="card-price"><?php echo get_sub_field('cc_card_price');?></p>
                    <a class="card-btn" href="<?php echo $linkURL;?>"><?php echo $linkText;?></a>
                </div>
				<div class="card-info" style="font-weight: bold; padding-top: 35px">
                    <ul>
                    <?php if ( have_rows('cc_card_info') ) : ?>
                        <?php while( have_rows('cc_card_info') ) : the_row(); ?>
                        <li><?php echo get_sub_field('cc_list_info');?></li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </ul>
					<a class="cc_card_terms" href="https://www.cloudquoteafrica.com/terms-conditions/">Terms & Conditions</a>
                </div>
                <div class="card-description">
                    <ul>
                    <?php if ( have_rows('cc_card_description') ) : ?>
                        <?php while( have_rows('cc_card_description') ) : the_row(); ?>
                        <li><?php echo get_sub_field('cc_list_item');?></li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </ul>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
        
    </div>
</div>