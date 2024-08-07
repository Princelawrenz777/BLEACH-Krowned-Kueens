<?php
session_start();

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['loggedin']);
    header('location: index.php');
    exit();
}
$username = isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'Guest';
?>



<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="icon" href="https://i.imgur.com/FHnHqMh.jpeg" type="image/x-icon">
        <title>👑BLEACH: KROWNED KUEENS🎶</title>

        <!-- CSS FILES -->                
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap" rel="stylesheet">
            
        <link href="bootstrap.min.css" rel="stylesheet">

        <link href="bootstrap-icons.css" rel="stylesheet">

        <link href="vegas.min.css" rel="stylesheet">

        <link href="tooplate-barista.css" rel="stylesheet">
       
    </head>
    
    <body>
		 <!-- Loader -->
		 <!-- <div id="loader" class="loader">
            <div class="spinner"></div>
        </div>
		<div id="cookies-banner" class="cookies-banner">
            <p>
                We use cookies to ensure you get the best experience on our website. 
                By continuing to use our site, you accept our use of cookies.
            </p>
            <button id="accept-cookies" class="btn">Accept</button>
        </div> -->
        <main>
		<nav class="navbar navbar-expand-lg">                
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <img src="images/logo.gif" class="navbar-brand-image img-fluid" alt="Krowned Kueens Template">
                    BLEACH: KROWNED KUEENS
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
					<li class="nav-item">
                                    <a class="nav-link click-scroll" href="News.html">News/Blog</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link click-scroll" href="about.html">About</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link click-scroll" href="FAQ.html">FAQ</a>
                                </li>
                            
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="media.html">Media Gallery</a>
                            </li>
                                
                                 <li class="nav-item">
                                <a class="nav-link click-scroll" href="communitysubmissions.html">Community Submissions</a>
                            </li>
                        
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="Donations.php">Donate/Invest</a>
                        </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="donations.html">Merch/Apparel</a>
                    </li>
                        <!-- (Your existing navigation links) -->
                        <?php if (isset($_SESSION['username'])): ?>
                            <li class="nav-item"><a class="nav-link click-scroll" href="index.php?logout">Logout</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12 mx-auto">
                        <em class="small-text">WELCOME TO THE ONE AND ONLY: <?php echo $username; ?></em>
                        <h1>KROWNED KUEENS</h1>
                        <p class="text-white mb-4 pb-lg-2">
                            Your <em>favourite</em> Digital Audio WorkStation!
                        </p>
                        <?php if (isset($_SESSION['username'])): ?>
                            <h2 class="text-white">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
                            <a class="btn custom-btn custom-border-btn" href="index.php?logout">
                                LOGOUT
                                <i class="bi-arrow-up-right ms-2"></i>
                            </a>
                        <?php else: ?>
                            <div class="ms-lg-3">
                                <a class="btn custom-btn custom-border-btn" href="login.php" > 
									 <!-- data-bs-target="#loginModal" data-bs-toggle="modal"-->
                                    LOGIN/REGISTER
                                    <i class="bi-arrow-up-right ms-2"></i>
                                </a>
                            </div>
                        <?php endif; ?>
                        <a class="btn custom-btn smoothscroll me-2 mb-2" href="#"><strong>The Team</strong></a>
                    </div>
                </div>
            </div>
            <div class="hero-slides"></div>
        </section>

            <!-- Login Modal -->
            <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="loginModalLabel">Login</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php if (isset($error)): ?>
                                <div class="alert alert-danger"><?php echo $error; ?></div>
                            <?php endif; ?>
                            <form method="POST" action="index.php">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <button type="submit" name="login" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <section class="about-section section-padding" id="section_2">
                <div class="section-overlay"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-12">
                            <div class="ratio ratio-1x1">
                                <video autoplay loop muted class="custom-video" poster="">
                                    <source src="images/FINAL ANIMATION COMPLETED (3).mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="about-video-info d-flex flex-column">
                                    <h4 class="mt-auto">ANIME GIRLS TURNED MUSIC PERSONALITIES:</h4>
                                    <h4>Soon to be part of the greatest DAW the world will ever experience!</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">
                            <em class="text-white">...</em>
                            <h2 class="text-white mb-3">...</h2>
                            <p class="text-white">...</p>
                            <p class="text-white">...</p>
                            <a href="characters.html" class="nav__link active-link">Learn more about the characters here</a>
                        </div>
                    </div>
                </div>
            </section>
	
	
					<section class="barista-section section-padding section-bg" id="barista-team">
						<div class="container">
							<div class="row justify-content-center">
	
								<div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
									<em class="text-white">Creativity Awaits</em>
	
									<h2 class="text-white">Meet the Main Line Up!</h2>
								</div>
	
								<div class="col-lg-3 col-md-6 col-12 mb-4">
									<div class="team-block-wrap">
										<div class="team-block-info d-flex flex-column">
											<div class="d-flex mt-auto mb-3">
												<h4 class="text-white mb-0">Orihime Inoue</h4>
	
												<p class="badge ms-4"><em>Turntablist (#0)</em></p>
											</div>
	
											<a href="Orihime.html">Learn more about the DJ here!</a>
										</div>
	
										<div class="team-block-image-wrap">
											<img src="djorihime.gif" class="team-block-image img-fluid" alt="">
										</div>
									</div>
								</div>
	
								<div class="col-lg-3 col-md-6 col-12 mb-4">
									<div class="team-block-wrap">
										<div class="team-block-info d-flex flex-column">
											<div class="d-flex mt-auto mb-3">
												<h4 class="text-white mb-0">Yoruichi Shihouin</h4>
	
												<p class="badge ms-4"><em>Drummer (#1)</em></p>
											</div>
	
											<p class="text-white mb-0">...</p>
										</div>
	
										<div class="team-block-image-wrap">
											<img src="drummeryoruichi.gif" class="team-block-image img-fluid" alt="">
										</div>
									</div>
								</div>
	
								<div class="col-lg-3 col-md-6 col-12 mb-4">
									<div class="team-block-wrap">
										<div class="team-block-info d-flex flex-column">
											<div class="d-flex mt-auto mb-3">
												<h4 class="text-white mb-0">Mila Rose</h4>
	
												<p class="badge ms-4"><em>Bassist (#2)</em></p>
											</div>
	
											<p class="text-white mb-0">...</p>
										</div>
	
										<div class="team-block-image-wrap">
											<img src="bassmilarose.gif" class="team-block-image img-fluid" alt="">
										</div>
									</div>
								</div>
	
								<div class="col-lg-3 col-md-6 col-12">
									<div class="team-block-wrap">
										<div class="team-block-info d-flex flex-column">
											<div class="d-flex mt-auto mb-3">
												<h4 class="text-white mb-0">Zabimaru</h4>
	
												<p class="badge ms-4"><em>Vocals/Percussion/Dance (#3)</em></p>
											</div>
	
											<p class="text-white mb-0">...</p>
										</div>
	
										<div class="team-block-image-wrap">
											<img src="dancezabimaru.gif" class="team-block-image img-fluid" alt="">
										</div>
									</div>
								</div>
				
								<div class="col-lg-3 col-md-6 col-12">
									<div class="team-block-wrap">
										<div class="team-block-info d-flex flex-column">
											<div class="d-flex mt-auto mb-3">
												<h4 class="text-white mb-0">Emilou Apacci</h4>
	
												<p class="badge ms-4"><em>Lead Guitarist (#4)</em></p>
											</div>
	
											<p class="text-white mb-0">...</p>
										</div>
	
										<div class="team-block-image-wrap">
											<img src="guitarapacci.gif" class="team-block-image img-fluid" alt="">
										</div>
									</div>
								</div>
	
								<div class="col-lg-3 col-md-6 col-12">
									<div class="team-block-wrap">
										<div class="team-block-info d-flex flex-column">
											<div class="d-flex mt-auto mb-3">
												<h4 class="text-white mb-0">Jackie Tristan</h4>
	
												<p class="badge ms-4"><em>Keyboard/Periphreals (#5)</em></p>
											</div>
	
											<p class="text-white mb-0">...</p>
										</div>
	
										<div class="team-block-image-wrap">
											<img src="keyjackie.gif" class="team-block-image img-fluid" alt="">
										</div>
									</div>
								</div>
	
								<div class="col-lg-3 col-md-6 col-12">
									<div class="team-block-wrap">
										<div class="team-block-info d-flex flex-column">
											<div class="d-flex mt-auto mb-3">
												<h4 class="text-white mb-0">Rangiku</h4>
	
												<p class="badge ms-4"><em>Vocals/Percussion/Dance (#6)</em></p>
											</div>
	
											<p class="text-white mb-0">...</p>
										</div>
	
										<div class="team-block-image-wrap">
											<img src="dancerangiku.gif" class="team-block-image img-fluid" alt="">
										</div>
									</div>
								</div>
	
								<div class="col-lg-3 col-md-6 col-12">
									<div class="team-block-wrap">
										<div class="team-block-info d-flex flex-column">
											<div class="d-flex mt-auto mb-3">
												<h4 class="text-white mb-0">Soifon</h4>
	
												<p class="badge ms-4"><em>Rhythym Guitarist (#7)</em></p>
											</div>
	
											<p class="text-white mb-0">...</p>
										</div>
	
										<div class="team-block-image-wrap">
											<img src="guitarsoifon.gif" class="team-block-image img-fluid" alt="">
										</div>
									</div>
								</div>
	
								<div class="col-lg-3 col-md-6 col-12">
									<div class="team-block-wrap">
										<div class="team-block-info d-flex flex-column">
											<div class="d-flex mt-auto mb-3">
												<h4 class="text-white mb-0">Tia Harribel</h4>
	
												<p class="badge ms-4"><em>Lead Vocalist/Dancer (#8)</em></p>
											</div>
	
											<p class="text-white mb-0">...</p>
										</div>
	
										<div class="team-block-image-wrap">
											<img src="micharribel.gif" class="team-block-image img-fluid" alt="">
										</div>
									</div>
								</div>
	
								<div class="col-lg-3 col-md-6 col-12">
									<div class="team-block-wrap">
										<div class="team-block-info d-flex flex-column">
											<div class="d-flex mt-auto mb-3">
												<h4 class="text-white mb-0">Lisa Yadomaru</h4>
	
												<p class="badge ms-4"><em>Producer</em></p>
											</div>
	
											<p class="text-white mb-0">...</p>
										</div>
	
										<div class="team-block-image-wrap">
											<img src="https://comicvine.gamespot.com/a/uploads/scale_medium/4/47703/3176638-8903265650-48658.png" class="team-block-image img-fluid" alt="">
										</div>
									</div>
									</div>
							</div>
						</div>
					</section>
				
			<!-- </section> -->
	
					<section class="reviews-section section-padding section-bg" id="section_3">
						<div class="container">
							<div class="row justify-content-center">
	
								<div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
									<em class="text-white">The people who are bringing this project together</em>
	
									<h2 class="text-white">Meet the Team:</h2>
								</div>
	
								<div class="timeline">
									<div class="timeline-container timeline-container-left">
										<div class="timeline-content">
											<div class="reviews-block">
												<div class="reviews-block-image-wrap d-flex align-items-center">
													<img src="https://i.imgur.com/jIeXMbl.jpeg" class="reviews-block-image img-fluid" alt="">
	
													<div class="">
														<h6 class="text-white mb-0">Ricky Victome</h6>
														<em class="text-white">Graphic Artist/Designer</em>
														<a rel="sponsored" href="https://www.etsy.com/shop/craftlovers820/?etsrc=sdt" target="_blank"> | PERSONAL PORTFOLIO</a></p>
													</div>
												</div>
												<div class="reviews-block-info">
													<p>Has been a member of the Krowned Kueens Project since September 13, 2023.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
	
									<div class="timeline-container timeline-container-right">
										<div class="timeline-content">
											<div class="reviews-block">
												<div class="reviews-block-image-wrap d-flex align-items-center">
													<img src="https://pbs.twimg.com/profile_images/1448759617455108103/NvB11oRN_400x400.jpg" class="reviews-block-image img-fluid" alt="">
	
													<div class="">
														<h6 class="text-white mb-0">John "Illa" Suarez</h6>
														<em class="text-white"> Graphics Artist/Designer</em>
														<a rel="sponsored" href="https://artistree.io/illastratorr" target="_blank"> | PERSONAL PORTFOLIO</a></p>
													</div>
												</div>
	
												<div class="reviews-block-info">
													<p>Has been a member of the Krowned Kueens Project since September 26, 2023.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
	
									<div class="timeline-container timeline-container-left">
										<div class="timeline-content">
											<div class="reviews-block">
												<div class="reviews-block-image-wrap d-flex align-items-center">
													<img src="https://i.imgur.com/Tixtw3I.jpeg" class="reviews-block-image img-fluid" alt="">
	
													<div class="">
														<h6 class="text-white mb-0">Hawk Eye</h6>
														<em class="text-white"> Graphics Artist/Animator/After Effects Specialist</em>
													</div>
												</div>
												<div class="reviews-block-info">
													<p>Has been a member of the Krowned Kueens Project since April 5, 2024.</p>
													 </div>
													</div>
												</div>
											</div>
										</div>
									</div>
	
	
													<div class="timeline-container timeline-container-right">
														<div class="timeline-content">
															<div class="reviews-block">
																<div class="reviews-block-image-wrap d-flex align-items-center">
																	<img src="https://i.imgur.com/b7ShyUv.png" class="reviews-block-image img-fluid" alt="">
					
																	<div class="">
																		<h6 class="text-white mb-0">Icarheus</h6>
																		<em class="text-white">Graphics Artist/Animator</em>
																	</div>
																</div>
					
																<div class="reviews-block-info">
																	<p>Has been a member of the Krowned Kueens Project since February 12, 2024.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
	
	
																	<div class="timeline-container timeline-container-left">
																		<div class="timeline-content">
																			<div class="reviews-block">
																				<div class="reviews-block-image-wrap d-flex align-items-center">
																					<img src="https://i.imgur.com/l9H4FQs.png" class="reviews-block-image img-fluid" alt="">
									
																					<div class="">
																						<h6 class="text-white mb-0">Tomas "Curco" Sosto</h6>
																						<em class="text-white">3D Artist</em>
																						<a rel="sponsored" href="https://curco.artstation.com/" target="_blank"> | PERSONAL PORTFOLIO</a></p>
																					</div>
																				</div>
									
																				<div class="reviews-block-info">
																					<p>Has been a member of the Krowned Kueens Project since April 14, 2024.</p>
															</div>
													</div>
												</div>
											</div>
										</div>
									</div>
	
																					
																	<div class="timeline-container timeline-container-right">
																		<div class="timeline-content">
																			<div class="reviews-block">
																				<div class="reviews-block-image-wrap d-flex align-items-center">
																					<img src="https://i.imgur.com/4F2mqYq.jpeg" class="reviews-block-image img-fluid" alt="">
									
																					<div class="">
																						<h6 class="text-white mb-0">Jovan "JoTheFro" Desir</h6>
																						<em class="text-white">Sprite/Pixel Artist</em>
																					</div>
																				</div>
									
																				<div class="reviews-block-info">
																					<p>Has been a member of the Krowned Kueens Project since April 11, 2024.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
	
																					<div class="timeline-container timeline-container-left">
																						<div class="timeline-content">
																							<div class="reviews-block">
																								<div class="reviews-block-image-wrap d-flex align-items-center">
																									<img src="https://i.imgur.com/pVtpwJE.png" class="reviews-block-image img-fluid" alt="">
													
																									<div class="">
																										<h6 class="text-white mb-0">Kleymir_</h6>
																										<em class="text-white">3D Artist</em>
																										<a rel="sponsored" href="https://x.com/Kleymir_" target="_blank"> | CONTACT</a></p>
																										<a rel="sponsored" href="https://www.artstation.com/kleymirabal" target="_blank">PERSONAL PORTFOLIO</a></p>
																									</div>
																								</div>
													
																								<div class="reviews-block-info">
																									<p>Has been a member of the Krowned Kueens Project since April 11, 2024.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
	
																									<div class="timeline-container timeline-container-right">
																										<div class="timeline-content">
																											<div class="reviews-block">
																												<div class="reviews-block-image-wrap d-flex align-items-center">
																													<img src="https://i.imgur.com/HlYDaZp.png" class="reviews-block-image img-fluid" alt="">
																	
																													<div class="">
																														<h6 class="text-white mb-0">Athena Michael</h6>
																														<em class="text-white">Graphics Artist</em>
																													</div>
																												</div>
																	
																												<div class="reviews-block-info">
																													<p>Has been a member of the Krowned Kueens Project since March 19, 2024.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
	
																													<div class="timeline-container timeline-container-left">
																														<div class="timeline-content">
																															<div class="reviews-block">
																																<div class="reviews-block-image-wrap d-flex align-items-center">
																																	<img src="https://i.imgur.com/FGbGXQP.png" class="reviews-block-image img-fluid" alt="">
																					
																																	<div class="">
																																		<h6 class="text-white mb-0">ImCertiBTW</h6>
																																		<em class="text-white">AI Voice Model Maker</em>
																																	</div>
																																</div>
																					
																																<div class="reviews-block-info">
																																	<p>Has been a member of the Krowned Kueens Project since January 11, 2024.</p>
													 </div>
													</div>
												</div>
											</div>
										</div>
									</div>
							</div>
						</div>
	
										<div class="timeline">
									<div class="timeline-container timeline-container-right">
										<div class="timeline-content">
											<div class="reviews-block">
												<div class="reviews-block-image-wrap d-flex align-items-center">
													<img src="https://i.imgur.com/Eh4uUQ6.png" class="reviews-block-image img-fluid" alt="">
	
													<div class="">
														<h6 class="text-white mb-0">YOD</h6>
														<em class="text-white">Co-Web Designer</em>
													</div>
												</div>
												<div class="reviews-block-info">
													<p>Has been a member of the Krowned Kueens Project since March 25, 2024.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
	
					</section>
	
	
					<section class="contact-section section-padding" id="section_5">
						<div class="container">
							<div class="row">   
	
								<div class="col-lg-12 col-12">
									<em class="text-white">If you're interested in contributing to this project or would like to discuss anything in detail, please don't hesitate to reach out to me:</em>
									<h2 class="text-white mb-4 pb-lg-2">Contact</h2>
								</div>
	
								<div class="col-lg-6 col-12">
									<form action="#" method="post" class="custom-form contact-form" role="form">
	
									<div class="row">
										
										<div class="col-lg-6 col-12">
											<label for="name" class="form-label">Your Name <sup class="text-danger">*</sup></label>
	
											<input type="text" name="name" id="name" class="form-control" placeholder="Jackson" required="">
										</div>
	
										<div class="col-lg-6 col-12">
											<label for="email" class="form-label">Your Email Address</label>
	
											<input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Jack@gmail.com" required="">
										</div>
	
										<div class="col-12">
											<label for="message" class="form-label">What would you like to know?</label>
	
											<textarea name="message" rows="4" class="form-control" id="message" placeholder="Message" required=""></textarea>
											
										</div>
									</div>
	
									<div class="col-lg-5 col-12 mx-auto mt-3">
										<button type="submit" class="form-control">Send Message</button>
									</div>
								</form>
								</div>
	
							</div>
						</div>
					</section>
	
	
					<footer class="site-footer">
						<div class="container">
							<div class="row">
	
								<div class="col-lg-4 col-12 me-auto">
									<em class="text-white d-block mb-4">HEADQUARTERS:</em>
	
									<strong class="text-white">
										<i class="bi-geo-alt me-2"></i>
										Los Angeles, California
									</strong>
	
									<ul class="social-icon mt-4">
										<li class="social-icon-item">
											<a href="#" class="social-icon-link bi-facebook">
											</a>
										</li>
			
										<li class="social-icon-item">
											<a href="https://x.com" target="_new" class="social-icon-link bi-twitter">
											</a>
										</li>
	
										<li class="social-icon-item">
											<a href="#" class="social-icon-link bi-whatsapp">
											</a>
										</li>
									</ul>
								</div>
	
								<div class="col-lg-3 col-12 mt-4 mb-3 mt-lg-0 mb-lg-0">
									<em class="text-white d-block mb-4">Contact</em>
	
									<p class="d-flex">
										<strong class="me-2">Email:</strong>
	
										<a href="mailto:info@yourgmail.com" class="site-footer-link">
											cooperhamlin@aol.com
										</a>
									</p>
								</div>
	
	
								<div class="col-lg-5 col-12">
									<em class="text-white d-block mb-4">Tentative Availability (Also happy to meet through Zoom or Microsoft Teams)</em>
	
									<ul class="opening-hours-list">
										<li class="d-flex">
											Wednesday - Friday
											<span class="underline"></span>
	
											<strong>8:00 AM - 7:00 PM</strong>
										</li>
	
										<li class="d-flex">
											Saturday
											<span class="underline"></span>
	
											<strong>Often throughout the day</strong>
										</li>
	
										<li class="d-flex">
											Sunday
											<span class="underline"></span>
	
											<strong>Often throughout the day</strong>
										</li>
									</ul>
								</div>
	
								<div class="col-lg-8 col-12 mt-4">
									<p class="copyright-text mb-0">Copyright © BLEACH: Krowned Kueens (The Software & The Animation) | A Project by Princelawrenz | Characters made <a rel="nofollow" href="https://x.com/tite_official">Noriaki Kubo</a></p>
								</div>
						</div>
					</footer>
				</main>
				
	
			
			<script src="jquery.min.js"></script>
			<script src="bootstrap.min.js"></script>
			<script src="jquery.sticky.js"></script>
			<script src="click-scroll.js"></script>
			<script src="vegas.min.js"></script>
			<script src="custom.js"></script>
			
			

    </body>
</html>