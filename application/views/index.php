<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Trinchera en CABA</title>

    <!-- Google analytics -->
     <?php if (ENVIRONMENT === 'production'): ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-NE0BYY9ZRD"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){ dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-NE0BYY9ZRD');
  </script>
<?php endif; ?>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Trinchera en CABA es un espacio de encuentro para músicos, productores y amantes del folklore. Conoce las peñas, recitales y festivales destacados en Buenos Aires y alrededores.">
    <meta name="keywords" content="folklore, peñas, música, eventos en CABA, recitales, festivales, Buenos Aires, música tradicional, artistas autogestivos">
    <meta name="author" content="Trinchera en CABA">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Trinchera en CABA - Tu espacio folklórico en la ciudad">
    <meta property="og:description" content="Descubre los mejores eventos folklóricos en Buenos Aires y el conurbano. Un espacio dedicado a la música tradicional y artistas autogestivos.">
    <meta property="og:image" content="<?= IMG_URL ?>Logo.png">
    <meta property="og:url" content="https://www.trincheraencaba.com">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Trinchera en CABA">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="<?= IMG_URL ?>Logo.png">
    <meta name="twitter:title" content="Trinchera en CABA - Tu espacio folklórico en la ciudad">
    <meta name="twitter:description" content="Conoce los mejores eventos folklóricos, recitales y festivales en Buenos Aires y alrededores. ¡No te pierdas nada!">
    <meta name="twitter:image" content="<?= IMG_URL ?>Logo.png">

    <!-- Favicons -->
    <link href="<?= IMG_URL ?>logo.ico" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= VENDOR_URL ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= VENDOR_URL ?>bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= VENDOR_URL ?>aos/aos.css" rel="stylesheet">
    <link href="<?= VENDOR_URL ?>glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= VENDOR_URL ?>swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?= CSS_URL ?>main.css" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="#hero" class="logo d-flex align-items-center me-auto">
                <img src="<?= IMG_URL ?>Logo.png" alt="" class="img-fluid"
                    style="max-width: 180px; border-radius: 50%;">

                <h4 class="sitename d-flex">TRINCHERA<br>EN CABA</h4>
                <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&display=swap" rel="stylesheet">
                <style>
                    .sitename {
                        font-family: 'Lora', serif;
                        font-weight: bold;
                        border-radius: 40%;
                        font-size: 1em;
                        color: white;
                        text-align: center;
                        line-height: 1.2;
                        margin: 0;
                    }
                </style>
            </a>

            <nav id="navmenu" class="navmenu"
                style="letter-spacing: 0.1em; font-size:large; font-weight:700; margin-right: 5px">
                <ul>
                    <li><a href="#hero" class="active">INICIO</a></li>
                    <li><a href="#speakers">EVENTOS</a></li>
                    <li><a href="#schedule">AGENDA</a></li>
                    <li><a href="#faq">PREGUNTAS</a></li>
                    <li><a href="#contact">CONTACTO</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="cta-btn d-flex" href="https://cafecito.app/trincheraencaba" target="_blank"
                style="font-size:unset; font-weight:550;">
                <i class="bi bi-cup-fill me-1"></i>CAFECITO
            </a>
        </div>
    </header>

	<main class="main">
    <a href="https://wa.me/5491155170992" class="whatsapp-button" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <img src="<?= IMG_URL ?>trinche.jpg" alt="" data-aos="fade-in" class="">

        <div class="container d-flex flex-column align-items-center text-center mt-auto">
            <h3 data-aos="zoom-in" data-aos-delay="100" class="mt-5">
                Un rincón de campo en el corazón de la Ciudad<br><span></span>
            </h3>
            <h5 data-aos="zoom-in" data-aos-delay="200" class="mt-2">
                Desde el fondo de los llanos vino un canto y me curó. (A.Y)
            </h5>
            <div data-aos="fade-up" data-aos-delay="300" class="">
                <a class="spo-btn d-flex"
                   href="https://open.spotify.com/user/317wi5cneaisnzf27wevj6fxqq6i?si=b68c132c94774e03a"
                   target="_blank" style="font-size:unset; font-weight:550;">
                    <i class="bi bi-spotify"></i>SPOTIFY
                </a>
            </div>
        </div>

        <div class="about-info mt-auto position-relative"
             style="background-color: #f8f8f83c; padding: 20px 0; border-radius: 10px;">
            <div class="container position-relative" data-aos="fade-up">
                <div class="row align-items-start">

                    <!-- Columna principal -->
                    <div class="col-lg-6 mb-1">
                        <h2 class="text">
                            <i class="bi bi-info-circle-fill me-2"></i>¿Qué es Trinchera en CABA?
                        </h2>
                        <p style="font-size: 13px; line-height: 1.6;">
                            Es un espacio dedicado a la difusión de eventos folklóricos como peñas, recitales,
                            guitarreadas y festivales. También apoyamos a artistas autogestivos a través de una
                            playlist en Spotify. Nuestro objetivo es <strong>centralizar</strong> toda esta información
                            en un solo lugar, donde productores de eventos y músicos puedan conectarse directamente con
                            su público.
                        </p>
                    </div>

                    <!-- Columna Dónde -->
                    <div class="col-lg-3 mb-4">
                        <h3 class="text-secondary">
                            <i class="bi bi-geo-alt-fill me-2"></i>Dónde
                        </h3>
                        <p style="font-size: 15px; line-height: 1.6;">
                            <strong>En Buenos Aires y el conurbano</strong>.
                        </p>
                    </div>

                    <!-- Columna Cuando -->
                    <div class="col-lg-3 mb-4">
                        <h3 class="text-secondary">
                            <i class="bi bi-calendar3-fill me-2"></i>Cuando
                        </h3>
                        <p style="font-size: 15px; line-height: 1.6;">
                            Todo el tiempo. <br><strong>¡Revisá las fechas y no te pierdas nada!</strong>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- Speakers Section -->
    <section id="speakers" class="speakers section">
        <div class="container section-title" data-aos="fade-up">
            <h2 style="font-size: 55px; font-weight: 700;">EVENTOS DESTACADOS<br></h2>
        </div>

        <div class="container">
            <div class="row gy-4">
                <?php foreach ($featuredEvents as $event): ?>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <a href="<?= esc($event['image_url']) ?>" class="glightbox" data-gallery='destacados' data-type='image'>
                            <img
                                src="<?= esc($event['image_url']) ?>"
                                alt="Afiche de <?= esc($event['name']) ?>"
                                class="flyer-thumb"
                            >
                            </a>
                            <!-- <a 
                                href="{{ $event->image_url }}" 
                                class="glightbox" 
                                data-gallery="destacados"
                                data-type="image"       
                                >
                                    <img src="{{ $event->image_url }}" alt="{{ $event->name }}" class="flyer-thumb">
                                </a> -->
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><a><?= $event['name']; ?></a></h4>
                                    <span><?= $event['description']; ?></span>
                                </div>
                                <div class="social">
                                    <?php if (!empty($event['facebook_url'])): ?>
                                        <a href="<?= $event['facebook_url']; ?>" target="_blank">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($event['instagram_url'])): ?>
                                        <a href="<?= $event['instagram_url']; ?>" target="_blank">
                                            <i class="bi bi-instagram"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section><!-- /Speakers Section -->

<!-- Schedule Section -->
<section id="schedule" class="schedule section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
	<h2 style="font-size: 70px; font-weight: 700;">AGENDA<br></h2>
</div><!-- End Section Title -->

<div class="container">

	<!-- Tabs para cada mes -->
	<ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="200">
		<?php for ($month = 1; $month <= 12; $month++): ?>
			<?php 
				$dateObj = DateTime::createFromFormat('!m', $month);
				$monthName = strftime('%B', $dateObj->getTimestamp());
			?>
			<li class="nav-item">
				<a class="nav-link <?= ($month === 1) ? 'active' : ''; ?>"
				   href="#month-<?= $month; ?>" role="tab" data-bs-toggle="tab">
					<?= ucfirst($monthName); ?>
				</a>
			</li>
		<?php endfor; ?>
	</ul>

	<div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="300">
		<h3 class="sub-heading">Eventos por mes y ubicación</h3>
		<!-- Botones para filtrar por ubicación -->
		<div class="d-flex justify-content-center mb-4" data-aos="fade-up" data-aos-delay="100">
			<button class="btn-filter mx-2" onclick="filterByLocation('CABA')">CABA</button>
			<button class="btn-filter mx-2" onclick="filterByLocation('Conurbano')">Conurbano</button>
			<button class="btn-filter mx-2" onclick="filterByLocation('Todos')">Todos</button>
		</div>

		<!-- Eventos por mes -->
		<?php for ($month = 1; $month <= 12; $month++): ?>
			<div role="tabpanel" class="col-lg-9 tab-pane fade <?= ($month === 1) ? 'show active' : ''; ?>"
				 id="month-<?= $month; ?>">

				<!-- Mostrar todos los eventos por defecto -->
				<div class="location-events all-events" id="Todos-events-<?= $month; ?>">
					<h4>Todos los eventos</h4>
					<?php 
						$allEvents = array_filter($events, function($event) use ($month) {
							return (int) date('m', strtotime($event['event_date'])) === $month;
						});
					?>

					<?php if (empty($allEvents)): ?>
						<p>No hay eventos programados para este mes.</p>
					<?php else: ?>
						<?php foreach ($allEvents as $event): ?>
							<div class="row schedule-item">
								<div class="col-md-2">
									<time><?= date('H:i', strtotime($event['time_formatted'])); ?></time>
									<date><?= date('d/m/Y', strtotime($event['event_date'])); ?></date>
								</div>
								<div class="col-md-10">
									<h4><?= $event['name']; ?>
										<?php if (!empty($event['instagram_url'])): ?>
											<a href="<?= $event['instagram_url']; ?>" target="_blank">
												<i class="bi bi-instagram"></i>
											</a>
										<?php endif; ?>
                                         <!-- Miniatura del afiche -->
                                        <?php if (!empty($event['image_url'])): ?>
                                            <a
                                                href="<?= esc($event['image_url']) ?>"
                                                class="glightbox"
                                                data-gallery="common-events"
                                                data-type="image"
                                            >
                                                <img
                                                src="<?= esc($event['image_url']) ?>"
                                                alt=""
                                                style="width:32px; height:auto; border-radius:4px;"
                                                >
                                            </a>
                                            <?php endif; ?>
									</h4>
									<p><?= $event['info_event']; ?></p>
								</div>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>

				<!-- Filtrar por CABA y Conurbano -->
				<?php foreach (['CABA', 'Conurbano'] as $location): ?>
					<div class="location-events" id="<?= $location; ?>-events-<?= $month; ?>" style="display: none;">
						<h4><?= $location; ?></h4>
						<?php 
							$filteredEvents = array_filter($events, function($event) use ($month, $location) {
								return (int) date('m', strtotime($event['event_date'])) === $month &&
									   $event['location'] === $location;
							});
						?>

						<?php if (empty($filteredEvents)): ?>
							<p>No hay eventos programados para esta ubicación en este mes.</p>
						<?php else: ?>
							<?php foreach ($filteredEvents as $event): ?>
								<div class="row schedule-item">
									<div class="col-md-2">
										<time><?= date('H:i', strtotime($event['time_formatted'])); ?></time>
										<date><?= date('d/m/Y', strtotime($event['event_date'])); ?></date>
									</div>
									<div class="col-md-10">
										<h4><?= $event['name']; ?>
											<?php if (!empty($event['instagram_url'])): ?>
												<a href="<?= $event['instagram_url']; ?>" target="_blank">
													<i class="bi bi-instagram"></i>
												</a>
											<?php endif; ?>
                                             <!-- Miniatura del afiche -->
                                            <?php if (!empty($event['image_url'])): ?>
                                                <!-- <a 
                                                href="{{ $event->image_url }}" 
                                                class="glightbox ms-2" 
                                                data-gallery="common-events" 
                                                data-type="image"
                                                >
                                                <img 
                                                    src="{{ $event->image_url }}" 
                                                    alt="Flyer {{ $event->name }}" 
                                                    class="flyer-thumb-sm"
                                                >
                                                </a> -->
  <a
    href="<?= esc($event['image_url']) ?>"
    class="glightbox"
    data-gallery="common-events"
    data-type="image"
  >
    <img
      src="<?= esc($event['image_url']) ?>"
      alt=""
      style="width:32px; height:auto; border-radius:4px;"
    >
  </a>
<?php endif; ?>

										</h4>
										<p><?= $event['info_event']; ?></p>
									</div>
								</div>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endfor; ?>
	</div>
</div>
</section>
<!-- /Schedule Section -->

<script>
    function filterByLocation(location) {
        // Ocultar todos los eventos
        document.querySelectorAll('.location-events').forEach(el => el.style.display = 'none');

        // Mostrar eventos según la selección
        const elementsToShow = location === 'Todos'
            ? document.querySelectorAll('.all-events')
            : document.querySelectorAll(`[id^="${location}-events"]`);

        elementsToShow.forEach(el => el.style.display = 'block');
    }
</script>


<section id="faq" class="faq section">
    <div class="container section-title">
        <h2 style="font-size: 55px; font-weight: 700;">PREGUNTAS<br></h2>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="faq-container">
                    <?php foreach ($faqs as $faq): ?>
                        <div class="faq-item <?php echo $faq['is_active'] ? 'faq-active' : ''; ?>">
                            <h3><?php echo $faq['question']; ?></h3>
                            <div class="faq-content">
                                <p><?php echo $faq['answer']; ?></p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="contact section">
    <div class="container section-title">
        <h2 data-aos="zoom-in" style="font-size: 60px; font-weight: 700;">CONTACTO<br></h2>
    </div>

    <div class="container">
        <div class="row gy-4 back">
            <?php foreach ($contacts as $contact): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <a href="<?php echo $contact['url']; ?>" target="_blank">
                            <i class="<?php echo $contact['icon']; ?>"></i>
                        </a>
                        <h3><?php echo strtoupper($contact['type']); ?></h3>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<div class="row gy-4 mt-1">
        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <div class="spotify-section d-flex flex-column justify-content-center align-items-center">
                <h3 class="spotify-title">Escuchá nuestra playlist en Spotify</h3>
                <a href="https://open.spotify.com/user/317wi5cneaisnzf27wevj6fxqq6i?si=b68c132c94774e03"
                    target="_blank" class="spotify-btn">
                    <i class="bi bi-spotify"></i> Abrir en Spotify
                </a>
            </div>
        </div>
    </div>

</main>

<footer id="footer" class="footer dark-background">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-12 col-md-12 footer-about">
                        <a href="#hero" class="site-footer">
                            <h2>TRINCHERA EN CABA</h2>
                        </a>
                        <div class="footer-contact pt-3 pb-5 mt-5 mb-5">
                            <h5 style="font-weight: 300;">Buscamos ser un punto de referencia para quienes deseen
                                disfrutar de la música tradicional.</h5>

                            <div class="social-links order-first order-lg-last mb-3 mb-lg-0 pt-3">
                            <?php foreach ($contacts as $contact): ?>
                                <a href="<?php echo $contact['url']; ?>" target="_blank">
                                    <i class="<?php echo $contact['icon']; ?>"></i>
                                </a>
                            <?php endforeach; ?>

                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="copyright text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <div>
                        <strong><span></span></strong>Todos los derechos reservados-
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div>
                        <strong><span></span></strong>Copyright <script>document.write(new Date().getFullYear())</script> ©<br>
                    </div>
                </div>


            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?= VENDOR_URL ?>bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= VENDOR_URL ?>php-email-form/validate.js"></script>
    <script src="<?= VENDOR_URL ?>aos/aos.js"></script>
    <script src="<?= VENDOR_URL ?>glightbox/js/glightbox.min.js"></script>
    <script src="<?= VENDOR_URL ?>swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="<?= JS_URL ?>main.js"></script>

    <!-- glithbox --> 
     <script src="<?= base_url('assets/vendor/glightbox/glightbox.min.js') ?>"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    GLightbox({ selector: '.glightbox', openEffect:'zoom', closeEffect:'fade' });
  });
</script>

</body>

</html>
