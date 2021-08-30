<?php get_header();?>

<div class="wrapper">
	<nav class="navbar navbar-expand-sm fixed-top margin-bottom-0 anav" id ="mainnav">
		<a href="#" class="navbar-brand">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo1.png" height="79" width="79">
		</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id ="mymenu">
			<ul class="navbar-nav ml-auto navone">
				<li class="nav-item"><a href="#about" class="nav-link">About</a></li>
				<li class="nav-item"><a href="#banner" class="nav-link">Banner</a></li>
				<li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
				<li class="nav-item"><a href="#team" class="nav-link">Team</a></li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid" id="about">
		<div id="myslideshow" class="carousel slide carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
				<li class="active" data-target="#myslideshow" data-slide-to="0"></li>
				<li data-target="#myslideshow" data-slide-to="1"></li>
				<li data-target="#myslideshow" data-slide-to="2"></li>
				<li data-target="#myslideshow" data-slide-to="3"></li>
				<li data-target="#myslideshow" data-slide-to="4"></li>
			</ol>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php echo get_template_directory_uri(); ?>/images/project2.png" class="d-block w-100">
					<div class="carousel-caption back d-none d-sm-block acaption">
						<h4>Welcome to my profile!</h4>
						<p>Hy! we are a team that love machine learning and web development.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?php echo get_template_directory_uri(); ?>/images/project3.png" class="d-block w-100">
					<div class="carousel-caption back d-none d-sm-block acaption">
						<h4>Machine learning</h4>
						<p>We have developed several models and projects using clustering, regression and deep learning.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?php echo get_template_directory_uri(); ?>/images/gardem.png" class="d-block w-100">
					<div class="carousel-caption back d-none d-sm-block acaption">
						<h4>Web development!</h4>
						<p>Our interest lies in front end development and we have made various projects including landing pages and social media login.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?php echo get_template_directory_uri(); ?>/images/sea.png" class="d-block w-100">
					<div class="carousel-caption back d-none d-sm-block acaption">
						<h4>Well that's all for here!</h4>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?php echo get_template_directory_uri(); ?>/images/sunset.png" class="d-block w-100">
					<div class="carousel-caption back d-none d-sm-block acaption">
						<h4>Thank you!</h4>
						<p>Don't forget to check out all the sections and have a great day :).</p>
					</div>
				</div>
			</div>
			<a href="#myslideshow" class="carousel-control-prev" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a href="#myslideshow" class="carousel-control-next" role="button" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
    </div>
</div>

<div class="cover flexcolcen" id="banner" class="d-block w-100" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/cover.jpg')">
		<h1>Award Wining Design</h1>
	<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, ad, blanditiis. Fugiat unde, similique beatae mollitia ut recusandae enim blanditiis? Assumenda corporis velit illo aut veritatis veniam magni voluptatem, similique.</h4>
	<a href="#" class="btn btn-default btn-green">CONTACT US</a>
</div>

 <!-- SECTION 2 --> 
 <div class="about-us container" id="services">
	<div class="flexcolcen feature">
		<h2 class="fw7">THE MOST FLEXIBLE &amp; EASY TO USE THEME</h2>
		<h4 class="fw5">A BIT ABOUT US</h4>
		<hr class="diamond-hr">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et soluta esse impedit fuga, voluptas consequuntur voluptates veniam, neque optio itaque dicta sed voluptatum repudiandae commodi error eaque cum a nihil?</p>
	</div>
	<div class="flexrowcen">
		<div class="about-container">
			<div class="img flexcolcen">
				<i class="fa fa-mobile" aria-hidden="true"></i>
			</div>
			<h4>Mobile Apps</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, excepturi asperiores, facere veniam incidunt explicabo optio voluptate error nesciunt alias</p></div>
		<div class="about-container">
			<div class="img flexcolcen">
				<i class="fa fa-flask" aria-hidden="true"></i>
			</div>
			<h4>Web Development</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, error omnis repellat laboriosam dolore ut ullam sint officia, itaque, eaque totam deleniti.</p></div>
		<div class="about-container">
			<div class="img flexcolcen">
				<i class="fa fa-code-fork" aria-hidden="true"></i>
			</div>
			<h4>UI/UX/GUI</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, reiciendis maiores natus iste debitis neque atque, voluptatum temporibus eaque, repellat et.</p></div>
					<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		  <div id="post-<?php the_ID(); ?>" ><?php post_class(); ?>>
		    <div class="post-header">
		       <div class="date"><?php the_time( 'M j y' ); ?></div>
		       <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		       <div class="author"><?php the_author(); ?></div>
		    </div><!--end post header-->
		    <div class="entry clear">
		       <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
		       <?php the_content(); ?>
		       <?php edit_post_link(); ?>
		       <?php wp_link_pages(); ?> </div>
		    <!--end entry-->
		    <div class="post-footer">
		       <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
		    </div><!--end post footer-->
		    </div><!--end post-->
		<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
		    <div class="navigation index">
		       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
		       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
		    </div><!--end navigation-->
		<?php else : ?>
		<?php endif; ?>
	</div>
</div>


<!-- SECTION 2 -->
<div class="team" id="team">
	<div class="flexcolcen">
		<h2 class="fw7">A SMALL, PASSIONATE &amp; POWERFUL TEAM</h2>
		<h4>OUR TEAM MEMBERS</h4>
		<hr class="diamond-hr">
	</div>
</div>
<?php get_footer(); ?>