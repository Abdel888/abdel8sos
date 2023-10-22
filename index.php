<?php
/*

 */
wp_header();  ?>




<center>

<div id="colonne1">
	<?php the_post_thumbnail(array(150,150));?> 
	
</div>
	</center>


<div id="centre">
		<h2><?php the_title () ; ?></h2>	
		<h4><?php the_excerpt(); ?></h4>	
		<font color=#048b9a>	<h4><?php the_tags( 'Fiche technique : ', ' • ', '<br />' ); ?></h4> </font>
		<?php the_content(); ?>
		<h5>Couleur : <?php echo strip_tags(get_the_term_list( $post->ID, 'coloris', ' ',', ')); ?></h5>

	
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post () ;?>

					<h3>Categorie : <?php the_category($separator = ", "); ?></h3>


					<?php endwhile ;
				endif ; ?>		



		<?php echo single_cat_title(); ?>
	
	
	
<font color=#048b9a>			</font>
	
	
	
</div>






<div id="colonne2"> 
	
									•••••••

										<font color=#048b9a>
											
											
											

<body>
  <section class="grid">
    <h1  class="item text-content">Titre</h1>
    <p   class="item text-content">Texte</p>
    <div class="item illustration">Illus.</div>
  </section>
</body>




											
											
											
											</font>



									•••••••
	
</div>









<?php wp_footer() ; ?>
