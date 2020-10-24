<?php get_header();  ?>

<?php

// Check value exists.
if (have_rows('inicio')) :

	// Loop through rows.
	while (have_rows('inicio')) : the_row();

		// Case: Download layout.
		if (get_row_layout() == 'acerca_de_mi') :

?>
			<section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
				<div class="container">
					<div class="row d-flex no-gutters">
						<div class="col-md-6 col-lg-6 d-flex">
							<div class="img-about img d-flex align-items-stretch">
								<div class="overlay"></div>
								<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(<?php echo the_sub_field('imagen_de_perfil'); ?>">
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-6 pl-md-5 py-5">
							<div class="row justify-content-start pb-3">
								<div class="col-md-12 heading-section ftco-animate">
									<h1 class="big">About</h1>
									<h2 class="mb-4">About Me</h2>


									<p><?php echo get_sub_field('biografia'); ?></p>



									<ul class="about-info mt-4 px-md-0 px-2">
										<?php if (get_sub_field('nombre')) : ?>
											<li class="d-flex"><span>Nombre:</span> <span><?php echo get_sub_field('nombre'); ?></span></li>
										<?php endif; ?>

										<?php if (get_sub_field('fecha_de_nacimiento')) : ?>
											<li class="d-flex"><span>Fecha de nacimiento:</span> <span>
													<?php the_field('fecha_de_nacimiento'); ?></span></li>
										<?php endif; ?>

										<?php if (get_sub_field('direccion')) : ?>

											<li class="d-flex"><span>Address:</span> <span><?php echo get_sub_field('direccion'); ?></span></li>
										<?php endif; ?>

										<?php if (get_sub_field('email')) : ?>

											<li class="d-flex"><span>Email:</span> <span><?php echo get_sub_field('email'); ?></span></li>
										<?php endif; ?>

										<?php if (get_sub_field('telefono')) : ?>

											<li class="d-flex"><span>Phone: </span> <span><?php echo get_sub_field('telefono'); ?></span></li>
										<?php endif; ?>
									</ul>
								</div>
							</div>
							<?php if (get_sub_field('proyectos_completados')) : ?>
								<div class="counter-wrap ftco-animate d-flex mt-md-3">
									<div class="text">
										<p class="mb-4">
											<span class="number" data-number="<?php echo get_sub_field('proyectos_completados'); ?>">0</span>
											<span>Project complete</span>
										</p>
										<p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section><!-- Acerca de mi -->
		<?php
		// Do something...

		// Case: Download layout.
		elseif (get_row_layout() == 'companias') :

		?>
			<section class="ftco-section ftco-partner">
				<div class="container">
					<div class="row">
						<?php if (have_rows('companias')) : ?>

							<?php while (have_rows('companias')) : the_row(); ?>

								<div class="col-sm ftco-animate">
									<?php
									$link = get_sub_field('link_compania');
									if ($link) :
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
									?>
										<a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" class="partner">
											<img src="<?php the_sub_field('imagen_compania'); ?>" class="img-fluid" alt="<?php echo $link_title; ?>">
										</a>
									<?php endif; ?>

								</div>

							<?php endwhile; ?>

						<?php endif; ?>



					</div>
				</div>
			</section>


		<?php
		// Do something...

		// Case: Download layout.
		elseif (get_row_layout() == 'educacion') :

		?>

			<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<nav id="navi">
								<ul>
									<?php if (have_rows('estudios_educacion')) : ?>
										<?php $flag = 1; ?>
										<?php while (have_rows('estudios_educacion')) : the_row(); ?>
											<li>
												<a href="#page-<?php echo $flag; ?>">
													<?php the_sub_field('titulo_de_seccion'); ?>
												</a>
											</li>
											<?php $flag++; ?>
										<?php endwhile; ?>
									<?php endif; ?>
								</ul>
							</nav>
						</div>
						<div class="col-md-9">
							<?php if (have_rows('estudios_educacion')) : ?>
								<?php $box = 1; ?>
								<?php while (have_rows('estudios_educacion')) : the_row(); ?>
									<div id="page-<?php echo $box; ?>" class="page one">
										<h2 class="heading"><?php echo get_sub_field('titulo_de_seccion'); ?></h2>

										<?php if (have_rows('tipo_de_estudio')) : ?>

											<?php while (have_rows('tipo_de_estudio')) : the_row(); ?>

												<div class="resume-wrap d-flex ftco-animate">
													<div class="icon d-flex align-items-center justify-content-center">
														<span class="flaticon-ideas"></span>
													</div>
													<div class="text pl-3">
														<?php if (get_sub_field('fecha')) : ?>
															<span class="date"><?php echo get_sub_field('fecha'); ?></span>
														<?php endif; ?>

														<?php if (get_sub_field('instituto')) : ?>
															<h2><?php echo get_sub_field('instituto'); ?></h2>
														<?php endif; ?>

														<?php if (get_sub_field('titulo')) : ?>

															<span class="position"><?php echo get_sub_field('titulo'); ?></span>
														<?php endif; ?>

														<?php if (get_sub_field('descripcion')) : ?>
															<?php echo get_sub_field('descripcion'); ?>
														<?php endif; ?>
													</div>
												</div>

											<?php endwhile; ?>

										<?php endif; ?>
									</div>
									<?php $box++; ?>
								<?php endwhile; ?>

							<?php endif; ?>


						</div>
					</div>
				</div>
			</section>
		<?php
		// Do something...
		// Case: Download layout.
		elseif (get_row_layout() == 'servicios') :

		?>


			<section class="ftco-section" id="services-section">
				<div class="container-fluid px-md-5">
					<?php if (get_sub_field('titulo_servicios') || get_sub_field('descripcion_servicios')) : ?>
						<div class="row justify-content-center py-5 mt-5">
							<div class="col-md-12 heading-section text-center ftco-animate">
								<?php if (get_sub_field('titulo_servicios')) : ?>
									<h1 class="big big-2"><?php echo get_sub_field('titulo_servicios'); ?></h1>
									<h2 class="mb-4"><?php echo get_sub_field('titulo_servicios'); ?></h2>
								<?php endif; ?>
								<?php if (get_sub_field('descripcion_servicios')) : ?>
									<p><?php echo get_sub_field('descripcion_servicios'); ?></p>
								<?php endif; ?>
							</div>
						</div>
					<?php endif; ?>
					<div class="row">
						<?php $posts = get_sub_field('nuestros_servicios'); ?>
						<?php if ($posts) : ?>
							<?php foreach ($posts as $post) : setup_postdata($post); ?>
								<div class="col-md-4 text-center d-flex ftco-animate">
									<a href="<?php the_permalink(); ?>" class="services-1 shadow">
										<span class="icon">
											<?php if (get_sub_field('icono')) : ?>
												<?php echo get_sub_field('icono'); ?>
											<?php endif; ?>
										</span>
										<div class="desc">
											<h3 class="mb-5"><?php the_title(); ?></h3>
											<?php if (get_sub_field('resumen')) : ?>
												<p><?php echo get_sub_field('resumen'); ?></p>
											<?php endif; ?>

										</div>
									</a>
								</div>
							<?php endforeach;
							wp_reset_postdata(); ?>

						<?php endif; ?>
					</div>
				</div>
			</section><!-- Servicios -->


		<?php

		// Do something...
		// Case: Download layout.
		elseif (get_row_layout() == 'nuestros_proyectos') :


		?>

			<section class="ftco-section ftco-project" id="projects-section">
				<div class="container-fluid px-md-0">
					<?php if (get_sub_field('titulo_proyectos') || get_sub_field('descripcion_proyectos')) : ?>
						<div class="row no-gutters justify-content-center pb-5">
							<div class="col-md-12 heading-section text-center ftco-animate">
								<?php if (get_sub_field('titulo_proyectos')) : ?>
									<h1 class="big big-2"><?php echo get_sub_field('titulo_proyectos'); ?></h1>
									<h2 class="mb-4"><?php echo get_sub_field('titulo_proyectos'); ?></h2>
								<?php endif; ?>

								<?php if (get_sub_field('descripcion_proyectos')) : ?>
									<p><?php echo get_sub_field('descripcion_proyectos'); ?></p>
								<?php endif; ?>
							</div>
						</div>
					<?php endif; ?>
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
			</section><!-- Proyectos -->

<?php
		// Do something...

		endif;

	// End loop.
	endwhile;

// No value.
else :
// Do something...
endif;


get_footer();  ?>