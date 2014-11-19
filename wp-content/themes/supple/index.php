<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Sandbox
 */
 
	get_header(); 
?>

<?php
 
if(is_home){

?>

  <section class="hero-container">
    <section class="hero-inner inner-wrapper row">
      
      <aside class="vertical-callout span_4">
        
        <div class="top">        
          <h1>
            Innovations in Body Movement
          </h1>
          <h2>
            Get Limber,
            <br />
            Stay Young.
          </h2>
        </div><!-- / end top -->

        <div class="bottom">
          <ul class="client-type-list">
            <li>Coaching</li>
            <li>Physical Therapy</li>
            <li>Listening</li>
            <li>Work with women over 40</li>
          </ul><!-- / end client type list -->

          <a href="#" class="button" data-role="button">
            About Supple
          </a>
        </div><!-- / end bottom -->

      </aside><!-- / end vertical callout -->

      <aside class="tagline-hero span_6">
        <h1>
          Move, <br />
          Breath, <br />
          Live.
        </h1>
      </aside><!-- / end tagline hero -->

    </section><!-- / end hero inner row -->
  </section><!-- end hero container -->

  <section class="bottom-callouts outer-wrapper">

    <section class="callout the-instructor">
      <section class="inner-wrapper row">
        
        <div class="left-text text span_8">
          <h2>The Instructor</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum consequatur facilis nam fuga saepe laudantium aperiam perferendis impedit tenetur eaque nulla deserunt numquam porro unde magnam consectetur voluptatibus quis ea.
            Reprehenderit earum provident reiciendis consequatur quas itaque odio neque aliquid necessitatibus molestias blanditiis inventore exercitationem rerum fugiat perspiciatis nisi excepturi culpa aliquam. Nobis deleniti natus repudiandae ad totam sint eius!
          </p>
          <a href="#" data-role="button" class="button">The Instructor</a>
        </div><!-- / end left text -->

        <div class="image-container span_4">
          <img src="<?php bloginfo(template_directory); ?>/images/martha.jpg" alt="Martha" />
        </div><!-- / end image container -->

      </section><!-- / end callouter inner -->
    </section><!-- / end callout the instructor -->    

    <section class="callout the-mission background">
      <section class="inner-wrapper row">

        <div class="image-container span_4">
          <img src="<?php bloginfo(template_directory); ?>/images/stock-mission.jpg" alt="Mission" />
        </div><!-- / end image container -->

        <div class="right-text text span_8">
          <h2>The Mission</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum consequatur facilis nam fuga saepe laudantium aperiam perferendis impedit tenetur eaque nulla deserunt numquam porro unde magnam consectetur voluptatibus quis ea.
            Reprehenderit earum provident reiciendis consequatur quas itaque odio neque aliquid necessitatibus molestias blanditiis inventore exercitationem rerum fugiat perspiciatis nisi excepturi culpa aliquam. Nobis deleniti natus repudiandae ad totam sint eius!
          </p>
          <a href="#" data-role="button" class="button">The Mission</a>
        </div><!-- / end right text -->

      </section><!-- / end callouter inner -->
    </section><!-- / end callout the mission -->

    <section class="callout start-today">
      <section class="inner-wrapper row">
        
        <div class="left-text text span_8">
          <h2>Start Today!</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum consequatur facilis nam fuga saepe laudantium aperiam perferendis impedit tenetur eaque nulla deserunt numquam porro unde magnam consectetur voluptatibus quis ea.
            Reprehenderit earum provident reiciendis consequatur quas itaque odio neque aliquid necessitatibus molestias blanditiis inventore exercitationem rerum fugiat perspiciatis nisi excepturi culpa aliquam. Nobis deleniti natus repudiandae ad totam sint eius!
          </p>
          <a href="#" data-role="button" class="button">Start Today</a>
        </div><!-- / end left text -->

        <div class="image-container span_4">
          <img src="<?php bloginfo(template_directory); ?>/images/stock-starttoday.jpg" alt="Start Today" />
        </div><!-- / end image container -->

      </section><!-- / end callouter inner -->
    </section><!-- / end callout start today -->     

  </section><!-- / end bottom callouts -->-	
		
<?php }else{

	include(get_template_directory().'/loops/loop.php');

}

 ?>

	<?php get_footer(); 

?>