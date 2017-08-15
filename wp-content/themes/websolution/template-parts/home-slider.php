<?php global $redux_data; ?>
<section id="front-page-slider">
	
		
	
	<?php if (isset($redux_data['fx-slider-opt']) && !empty($redux_data['fx-slider-opt'])) { ?>
	<ul id="slides" class="lightSlider">
    <?php foreach ($redux_data['fx-slider-opt'] as $fx_slider): ?>
      <?php $redux_img = $fx_slider['image']; ?> 
      <li>

      <div class="container">
	    <div class="row">
	      	<div class="col-md-12">
		      <div class="content-wrap text-center">
		            <h1 class="banner-title">Great Expertise based on Experience</h1>
		            <p class="banner-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		            consequat. </p>
		            <a href="#"><button class="banner-btn">Join Our Team</button></a>
		      </div>
		    </div>
	    </div>
      </div>
      <img src="<?php echo $redux_img;?>" title="<?php echo $title_txt; ?>" alt="<?php echo $alt_text; ?>"/>
    </li>
    <?php endforeach ?>
    <?php } ?>
    </ul>
</section>