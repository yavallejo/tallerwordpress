<?php get_header();  ?>

<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
	<div class="container">
		<div class="row d-flex no-gutters">
			<div class="col-md-6 col-lg-6 d-flex">
				<div class="img-about img d-flex align-items-stretch">
					<div class="overlay"></div>
					<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(<?php echo the_field('imagen_de_perfil', 9); ?>">
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 pl-md-5 py-5">
				<div class="row justify-content-start pb-3">
					<div class="col-md-12 heading-section ftco-animate">
						<h1 class="big">About</h1>
						<h2 class="mb-4">About Me</h2>

						<?php if (get_field('biografia', 9)) : ?>
							<p><?php echo get_field('biografia', 9); ?></p>
						<?php endif; ?>


						<ul class="about-info mt-4 px-md-0 px-2">
							<?php if (get_field('nombre', 9)) : ?>
								<li class="d-flex"><span>Nombre:</span> <span><?php echo get_field('nombre', 9); ?></span></li>
							<?php endif; ?>

							<?php if (get_field('fecha_de_nacimiento', 9)) : ?>
								<li class="d-flex"><span>Fecha de nacimiento:</span> <span>
										<?php the_field('fecha_de_nacimiento', 9); ?></span></li>
							<?php endif; ?>

							<?php if (get_field('direccion', 9)) : ?>

								<li class="d-flex"><span>Address:</span> <span><?php echo get_field('direccion', 9); ?></span></li>
							<?php endif; ?>

							<?php if (get_field('email', 9)) : ?>

								<li class="d-flex"><span>Email:</span> <span><?php echo get_field('email', 9); ?></span></li>
							<?php endif; ?>

							<?php if (get_field('telefono', 9)) : ?>

								<li class="d-flex"><span>Phone: </span> <span><?php echo get_field('telefono', 9); ?></span></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
				<?php if (get_field('proyectos_completados', 9)) : ?>
					<div class="counter-wrap ftco-animate d-flex mt-md-3">
						<div class="text">
							<p class="mb-4">
								<span class="number" data-number="<?php echo get_field('proyectos_completados', 9); ?>">0</span>
								<span>Project complete</span>
							</p>
							<p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-partner">
	<div class="container">
		<div class="row">
			<?php if (have_rows('companias', 9)) : ?>

				<?php while (have_rows('companias', 9)) : the_row(); ?>

					<div class="col-sm ftco-animate">
						<?php
						$link = get_sub_field('link_compania', 9);
						if ($link) :
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
						?>
							<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="partner">
								<img src="<?php the_sub_field('imagen_compania', 9); ?>" class="img-fluid" alt="<?php echo $link_title; ?>">
							</a>
						<?php endif; ?>

					</div>

				<?php endwhile; ?>

			<?php endif; ?>



		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<nav id="navi">
					<ul>
						<?php if (get_field('titulo_educacion', 9)) : ?>
							<li><a href="#page-1"><?php echo get_field('titulo_educacion', 9); ?></a></li>
						<?php endif; ?>

						<li><a href="#page-2">Experience</a></li>
						<li><a href="#page-3">Skills</a></li>
						<li><a href="#page-4">Awards</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-md-9">
				<div id="page-1" class="page one">
					<h2 class="heading"><?php echo get_field('titulo_educacion', 9); ?></h2>

					<?php if (have_rows('estudios_educacion', 9)) : ?>

						<?php while (have_rows('estudios_educacion', 9)) : the_row(); ?>

							<div class="resume-wrap d-flex ftco-animate">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="flaticon-ideas"></span>
								</div>
								<div class="text pl-3">
									<?php if (get_sub_field('fecha', 9)) : ?>
										<span class="date"><?php echo get_sub_field('fecha', 9); ?></span>
									<?php endif; ?>

									<?php if (get_sub_field('instituto', 9)) : ?>
										<h2><?php echo get_sub_field('instituto', 9); ?></h2>
									<?php endif; ?>

									<?php if (get_sub_field('titulo', 9)) : ?>

										<span class="position"><?php echo get_sub_field('titulo', 9); ?></span>
									<?php endif; ?>

									<?php if (get_sub_field('descripcion')) : ?>
										<?php echo get_sub_field('descripcion'); ?>
									<?php endif; ?>
								</div>
							</div>

						<?php endwhile; ?>

					<?php endif; ?>





				</div>

				<div id="page-2" class="page two">
					<h2 class="heading">Experience</h2>
					<div class="resume-wrap d-flex ftco-animate">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-ideas"></span>
						</div>
						<div class="text pl-3">
							<span class="date">2014-2015</span>
							<h2>Software Developer</h2>
							<span class="position">Cambridge University</span>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						</div>
					</div>
					<div class="resume-wrap d-flex ftco-animate">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-ideas"></span>
						</div>
						<div class="text pl-3">
							<span class="date">2014-2015</span>
							<h2>Web Designer</h2>
							<span class="position">Cambridge University</span>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						</div>
					</div>
					<div class="resume-wrap d-flex ftco-animate">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-ideas"></span>
						</div>
						<div class="text pl-3">
							<span class="date">2014-2015</span>
							<h2>Web Marketing</h2>
							<span class="position">Cambridge University</span>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						</div>
					</div>
					<div class="resume-wrap d-flex ftco-animate">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-ideas"></span>
						</div>
						<div class="text pl-3">
							<span class="date">2014-2015</span>
							<h2>Art &amp; Creative Director</h2>
							<span class="position">Side Tech</span>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						</div>
					</div>
					<div class="resume-wrap d-flex ftco-animate">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-ideas"></span>
						</div>
						<div class="text pl-3">
							<span class="date">2014-2015</span>
							<h2>Wordpress Developer</h2>
							<span class="position">Cambridge University</span>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						</div>
					</div>
					<div class="resume-wrap d-flex ftco-animate">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-ideas"></span>
						</div>
						<div class="text pl-3">
							<span class="date">2017-2018</span>
							<h2>UI/UX Designer</h2>
							<span class="position">Cambridge University</span>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						</div>
					</div>
				</div>
				<div id="page-3" class="page three">
					<h2 class="heading">Skills</h2>
					<div class="row progress-circle mb-5">
						<div class="col-lg-4 mb-4">
							<div class="bg-white rounded-lg shadow p-4">
								<h2 class="h5 font-weight-bold text-center mb-4">CSS</h2>

								<!-- Progress bar 1 -->
								<div class="progress mx-auto" data-value='90'>
									<span class="progress-left">
										<span class="progress-bar border-primary"></span>
									</span>
									<span class="progress-right">
										<span class="progress-bar border-primary"></span>
									</span>
									<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
										<div class="h2 font-weight-bold">90<sup class="small">%</sup></div>
									</div>
								</div>
								<!-- END -->

								<!-- Demo info -->
								<div class="row text-center mt-4">
									<div class="col-6 border-right">
										<div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
									</div>
									<div class="col-6">
										<div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
									</div>
								</div>
								<!-- END -->
							</div>
						</div>

						<div class="col-lg-4 mb-4">
							<div class="bg-white rounded-lg shadow p-4">
								<h2 class="h5 font-weight-bold text-center mb-4">HTML</h2>

								<!-- Progress bar 1 -->
								<div class="progress mx-auto" data-value='80'>
									<span class="progress-left">
										<span class="progress-bar border-primary"></span>
									</span>
									<span class="progress-right">
										<span class="progress-bar border-primary"></span>
									</span>
									<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
										<div class="h2 font-weight-bold">80<sup class="small">%</sup></div>
									</div>
								</div>
								<!-- END -->

								<!-- Demo info -->
								<div class="row text-center mt-4">
									<div class="col-6 border-right">
										<div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
									</div>
									<div class="col-6">
										<div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
									</div>
								</div>
								<!-- END -->
							</div>
						</div>

						<div class="col-lg-4 mb-4">
							<div class="bg-white rounded-lg shadow p-4">
								<h2 class="h5 font-weight-bold text-center mb-4">jQuery</h2>

								<!-- Progress bar 1 -->
								<div class="progress mx-auto" data-value='75'>
									<span class="progress-left">
										<span class="progress-bar border-primary"></span>
									</span>
									<span class="progress-right">
										<span class="progress-bar border-primary"></span>
									</span>
									<div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
										<div class="h2 font-weight-bold">75<sup class="small">%</sup></div>
									</div>
								</div>
								<!-- END -->

								<!-- Demo info -->
								<div class="row text-center mt-4">
									<div class="col-6 border-right">
										<div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
									</div>
									<div class="col-6">
										<div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
									</div>
								</div>
								<!-- END -->
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 animate-box">
							<div class="progress-wrap ftco-animate">
								<h3>Photoshop</h3>
								<div class="progress">
									<div class="progress-bar color-1" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
										<span>90%</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box">
							<div class="progress-wrap ftco-animate">
								<h3>jQuery</h3>
								<div class="progress">
									<div class="progress-bar color-2" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
										<span>85%</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box">
							<div class="progress-wrap ftco-animate">
								<h3>HTML5</h3>
								<div class="progress">
									<div class="progress-bar color-3" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
										<span>95%</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box">
							<div class="progress-wrap ftco-animate">
								<h3>CSS3</h3>
								<div class="progress">
									<div class="progress-bar color-4" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
										<span>90%</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box">
							<div class="progress-wrap ftco-animate">
								<h3>WordPress</h3>
								<div class="progress">
									<div class="progress-bar color-5" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
										<span>70%</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box">
							<div class="progress-wrap ftco-animate">
								<h3>SEO</h3>
								<div class="progress">
									<div class="progress-bar color-6" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
										<span>80%</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="page-4" class="page four">
					<h2 class="heading">Awards</h2>
					<div class="resume-wrap d-flex ftco-animate">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-ideas"></span>
						</div>
						<div class="text pl-3">
							<span class="date">2014-2015</span>
							<h2>Top 10 Web Developer</h2>
							<span class="position">Cambridge University</span>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						</div>
					</div>
					<div class="resume-wrap d-flex ftco-animate">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-ideas"></span>
						</div>
						<div class="text pl-3">
							<span class="date">2014-2015</span>
							<h2>Top 5 LeaderShip Exellence Winner</h2>
							<span class="position">Cambridge University</span>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						</div>
					</div>
					<div class="resume-wrap d-flex ftco-animate">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-ideas"></span>
						</div>
						<div class="text pl-3">
							<span class="date">2014-2015</span>
							<h2>Top 4 Web Tester</h2>
							<span class="position">Cambridge University</span>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						</div>
					</div>
					<div class="resume-wrap d-flex ftco-animate">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="flaticon-ideas"></span>
						</div>
						<div class="text pl-3">
							<span class="date">2014-2015</span>
							<h2>Art &amp; Creative Director</h2>
							<span class="position">Cambridge University</span>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section" id="services-section">
	<div class="container-fluid px-md-5">
		<div class="row justify-content-center py-5 mt-5">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h1 class="big big-2">Services</h1>
				<h2 class="mb-4">Services</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1 shadow">
					<span class="icon">
						<i class="flaticon-analysis"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">Web Design</h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
				</a>
			</div>
			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1 shadow">
					<span class="icon">
						<i class="flaticon-flasks"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">Phtography</h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
				</a>
			</div>
			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1 shadow">
					<span class="icon">
						<i class="flaticon-ideas"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">Web Developer</h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
				</a>
			</div>

			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1 shadow">
					<span class="icon">
						<i class="flaticon-innovation"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">App Developing</h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
				</a>
			</div>
			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1 shadow">
					<span class="icon">
						<i class="flaticon-ux-design"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">Branding</h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
				</a>
			</div>
			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1 shadow">
					<span class="icon">
						<i class="flaticon-idea"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">Product Strategy</h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section ftco-project" id="projects-section">
	<div class="container-fluid px-md-0">
		<div class="row no-gutters justify-content-center pb-5">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h1 class="big big-2">Projects</h1>
				<h2 class="mb-4">Our Projects</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>
		<div class="row no-gutters">
			<div class="col-md-4">
				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/work-1.jpg);">
					<div class="overlay"></div>
					<div class="text text-center p-4">
						<h3><a href="#">Branding &amp; Illustration Design</a></h3>
						<span>Web Design</span>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/work-2.jpg);">
					<div class="overlay"></div>
					<div class="text text-center p-4">
						<h3><a href="#">Branding &amp; Illustration Design</a></h3>
						<span>Web Design</span>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/work-3.jpg);">
					<div class="overlay"></div>
					<div class="text text-center p-4">
						<h3><a href="#">Branding &amp; Illustration Design</a></h3>
						<span>Web Design</span>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/work-4.jpg);">
					<div class="overlay"></div>
					<div class="text text-center p-4">
						<h3><a href="#">Branding &amp; Illustration Design</a></h3>
						<span>Web Design</span>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/work-5.jpg);">
					<div class="overlay"></div>
					<div class="text text-center p-4">
						<h3><a href="#">Branding &amp; Illustration Design</a></h3>
						<span>Web Design</span>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/work-6.jpg);">
					<div class="overlay"></div>
					<div class="text text-center p-4">
						<h3><a href="#">Branding &amp; Illustration Design</a></h3>
						<span>Web Design</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
	<div class="container-fluid px-md-5">
		<div class="row d-md-flex align-items-center">
			<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 shadow">
					<div class="text">
						<strong class="number" data-number="100">0</strong>
						<span>Awards</span>
					</div>
				</div>
			</div>
			<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 shadow">
					<div class="text">
						<strong class="number" data-number="1200">0</strong>
						<span>Complete Projects</span>
					</div>
				</div>
			</div>
			<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 shadow">
					<div class="text">
						<strong class="number" data-number="1200">0</strong>
						<span>Happy Customers</span>
					</div>
				</div>
			</div>
			<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18 shadow">
					<div class="text">
						<strong class="number" data-number="500">0</strong>
						<span>Cups of coffee</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section" id="blog-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-5">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h1 class="big big-2">Blog</h1>
				<h2 class="mb-4">Our Blog</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>
		<div class="row d-flex">
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry justify-content-end">
					<a href="single.html" class="block-20" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/image_1.jpg');">
					</a>
					<div class="text mt-3 float-right d-block">
						<h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
						<div class="d-flex align-items-center mb-3 meta">
							<p class="mb-0">
								<span class="mr-2">Sept. 12, 2019</span>
								<a href="#" class="mr-2">Admin</a>
								<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
							</p>
						</div>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry justify-content-end">
					<a href="single.html" class="block-20" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/image_2.jpg');">
					</a>
					<div class="text mt-3 float-right d-block">
						<h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
						<div class="d-flex align-items-center mb-3 meta">
							<p class="mb-0">
								<span class="mr-2">Sept. 12, 2019</span>
								<a href="#" class="mr-2">Admin</a>
								<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
							</p>
						</div>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry">
					<a href="single.html" class="block-20" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/image_3.jpg');">
					</a>
					<div class="text mt-3 float-right d-block">
						<h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
						<div class="d-flex align-items-center mb-3 meta">
							<p class="mb-0">
								<span class="mr-2">Sept. 12, 2019</span>
								<a href="#" class="mr-2">Admin</a>
								<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
							</p>
						</div>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-hireme img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg_1.jpg)">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7 ftco-animate text-center">
				<h2>I'm <span>Available</span> for freelancing</h2>
				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
				<p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Hire me</a></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h1 class="big big-2">Contact</h1>
				<h2 class="mb-4">Contact Me</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>

		<div class="row d-flex contact-info mb-5">
			<div class="col-md-6 col-lg-3 d-flex ftco-animate">
				<div class="align-self-stretch box text-center p-4 shadow">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-map-signs"></span>
					</div>
					<div>
						<h3 class="mb-4">Address</h3>
						<p>198 West 21th Street, Suite 721 New York NY 10016</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 d-flex ftco-animate">
				<div class="align-self-stretch box text-center p-4 shadow">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-phone2"></span>
					</div>
					<div>
						<h3 class="mb-4">Contact Number</h3>
						<p><a href="tel://1234567920">+ 1235 2355 98</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 d-flex ftco-animate">
				<div class="align-self-stretch box text-center p-4 shadow">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-paper-plane"></span>
					</div>
					<div>
						<h3 class="mb-4">Email Address</h3>
						<p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 d-flex ftco-animate">
				<div class="align-self-stretch box text-center p-4 shadow">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-globe"></span>
					</div>
					<div>
						<h3 class="mb-4">Website</h3>
						<p><a href="#">yoursite.com</a></p>
					</div>
				</div>
			</div>
		</div>

		<div class="row no-gutters block-9">
			<div class="col-md-6 order-md-last d-flex">
				<form action="#" class="bg-light p-4 p-md-5 contact-form">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Your Name">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Your Email">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Subject">
					</div>
					<div class="form-group">
						<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
					</div>
				</form>

			</div>

			<div class="col-md-6 d-flex">
				<div class="img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/about.jpg);"></div>
			</div>
		</div>
	</div>
</section>

<?php get_footer();  ?>