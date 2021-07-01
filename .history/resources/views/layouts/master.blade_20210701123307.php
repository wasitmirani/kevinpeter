<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
	@include('layouts.partials.meta')
		<title>Kevin Peter Jones Music School</title>
	</head>
	<body>
		<!-- Header Begins here -->
@include('layouts.partials.header')
		<!-- Header Begins here -->
		<!-- Banner -->
		<div class="slider-content">
			<div class="slider-wrapper">
				<div class="slider-container">
					<div class="control-nav">
						<ul>
							<li class="active"><span class="line"></span><span class="number">1</span></li>
							<li><span class="line"></span><span class="number">2</span></li>
							<li><span class="line"></span><span class="number">3</span></li>
							<li><span class="line"></span><span class="number">4</span></li>
						</ul>
					</div>
					<!-- <div class="lines-wrapper">
					</div> -->
					<div class="image-mask">
						<img class="" src="{{asset('frontend/assets/images/banner.jpg')}}" alt="" />
					</div>

					<div class="slide active red" data-order="1" data-color="#EE4654" data-img="/assets/images/banner.jpg">

						<div class="fake-bg red"></div>
						<canvas class="canvas" data-image="{{asset('frontend/assets/images/banner.jpg')}}"></canvas>
						<div class="slide-content ">
							<div class="image-caption">
								<span class="line"></span>
								<span>Spring / Summer 2016</span>

							</div>
							<!-- <div class="title-background">
															<span class="mask-wrap">
																							<span class="mask">Karlie</span>
															</span>
															<span class="mask-wrap">
																							<span class="mask">Kloss</span>
															</span>
							</div> -->

							<div class="title-wrapper">
								<h1>
								<span class="mask-wrap">
									<span class="mask"><strong>Best Place for</strong></span>
								</span>
								<span class="mask-wrap">
									<span class="mask">Music Education</span>
								</span>
								</h1>
								<p>We work with only the best, degreed music instructors in the Washington, DC area, many of whom play for symphonies and orchestras, teach in schools or perform with traditional groups that tour internationally. Background checks are conducted on all teachers.</p>
								<a href="#" class="gallery btn btn-business">Get Started</a>
							</div>

						</div>
					</div>

					<div class="slide blue" data-order="2" data-color="#EE4654" data-img="{{asset('frontend/assets/images/banner.jpg')}}">
						<div class="fake-bg blue"></div>
						<canvas class="canvas" data-image="{{asset('frontend/assets/images/banner.jpg')}}"></canvas>
						<div class="slide-content ">

							<div class="image-caption">
								<span class="line"></span>
								<span>Fall / Winter 2016</span>

							</div>

							<!-- <div class="title-background">
															<span class="mask-wrap">
																							<span class="mask">Aline</span>
															</span>
															<span class="mask-wrap">
																							<span class="mask">Weber</span>
															</span>
							</div> -->

							<div class="title-wrapper">
								<h1>
								<span class="mask-wrap">
									<span class="mask"><strong>Best Place for</strong></span>
								</span>
								<span class="mask-wrap">
									<span class="mask">Music Education</span>
								</span>
								</h1>
								<p>We work with only the best, degreed music instructors in the Washington, DC area, many of whom play for symphonies and orchestras, teach in schools or perform with traditional groups that tour internationally. Background checks are conducted on all teachers.</p>
								<a href="#" class="gallery btn btn-business">Get Started</a>
							</div>

						</div>
					</div>

					<div class="slide green" data-order="3" data-color="#7ffe8e" data-img="{{asset('frontend/assets/images/banner.jpg')}}">
						<div class="fake-bg green"></div>
						<canvas class="canvas" data-image="{{aset('frontend/assets/images/banner.jpg')}}"></canvas>
						<div class="slide-content ">

							<div class="image-caption">
								<span class="line"></span>
								<span>Spring / Summer 2015</span>

							</div>

							<!-- <div class="title-background">
															<span class="mask-wrap">
																							<span class="mask">Miranda</span>
															</span>
															<span class="mask-wrap">
																							<span class="mask">Kerr</span>
															</span>
							</div> -->

							<div class="title-wrapper">
								<h1>
								<span class="mask-wrap">
									<span class="mask"><strong>Best Place for</strong></span>
								</span>
								<span class="mask-wrap">
									<span class="mask">Music Education</span>
								</span>
								</h1>
								<p>We work with only the best, degreed music instructors in the Washington, DC area, many of whom play for symphonies and orchestras, teach in schools or perform with traditional groups that tour internationally. Background checks are conducted on all teachers.</p>
								<a href="#" class="gallery btn btn-business">Get Started</a>
							</div>
						</div>
					</div>

					<div class="slide grey" data-order="4" data-color="#bcbcbc" data-img="/assets/images/banner.jpg">
						<div class="fake-bg grey"></div>
						<canvas class="canvas" data-image="{{asset('frontend/assets/images/banner.jpg')}}"></canvas>
						<div class="slide-content ">

							<div class="image-caption">
								<span class="line"></span>
								<span>Fall / Winter 2015</span>

							</div>

							<!-- <div class="title-background">
															<span class="mask-wrap">
																							<span class="mask">Kate</span>
															</span>
															<span class="mask-wrap">
																							<span class="mask">Moss</span>
															</span>
							</div> -->

							<div class="title-wrapper">
								<h1>
								<span class="mask-wrap">
									<span class="mask"><strong>Best Place for</strong></span>
								</span>
								<span class="mask-wrap">
									<span class="mask">Music Education</span>
								</span>
								</h1>
								<p>We work with only the best, degreed music instructors in the Washington, DC area, many of whom play for symphonies and orchestras, teach in schools or perform with traditional groups that tour internationally. Background checks are conducted on all teachers.</p>
								<a href="#" class="gallery btn btn-business">Get Started</a>
							</div>

						</div>
					</div>

				</div>
			</div>
			<div class="footer-wrapper">
				<ul>
					<li class="active box" data-id="1">
						<div class="hover-box"></div>
						<div class="box-content">
							<span>01</span>
						</div>
					</li>
					<li class="box" data-id="2">
						<div class="hover-box"></div>
						<div class="box-content">
							<span>02</span>
						</div>
					</li>
					<li class="box" data-id="3" >
						<div class="hover-box"></div>
						<div class="box-content">
							<span>03</span>
						</div>
					</li>
					<li class="box" data-id="4"  >
						<div class="hover-box"></div>
						<div class="box-content">
							<span>04</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- Banner -->
		<!-- ZIp -->
		<section class="zips headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 m-auto">
						<div class="row bage">
							<div class="col-lg-4">
								<h2 class="heading-three">We'll help you book
								your ideal teacher!</h2>

							</div>
							<div class="col-lg-8">
								<form action="">
									<ul class="list-unstyled">
										<li class="loc"><input type="text" placeholder="Zip Code"></li>
										<li><a href="#" class="btn">GET STARTED</a></li>
									</ul>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ZIp -->
		<!-- About Us -->
		<section class="about-us headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="heading-two mb5">Welcome to <span>Kevin Peter Jones Music School</span></h2>
					</div>
					<div class="col-lg-10 m-auto">
						<div class="row about-in">
							<div class="col-lg-7 one">
								<div class="img-box"><img src="{{asset('frontend/assets/images/about-img.jpg')}}" class="img-fluid" alt=""></div>
							</div>
							<div class="col-lg-5 two dis-flex">
								<h2 class="heading-three">
								About Kevin Peter<br>
								Jones Music School
								</h2>
								<p class="para-two ">
									In Kevin Peter Jones Music School  teachers have successfully taught thousands of music lessons by focusing on one basic philosophy: To provide the best music lessons, period. Over the past decade, the number of educational resources available to the aspiring musician has exploded. On the Internet, one can find sheet music "to thousands of songs, exercises, tutorial videos.
								</p>
								<a href="#" class="btn btn-business">More About Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- About Us -->
		<!-- Study -->
		<section class="study dis-flex headline">
			<div class="container">
				<div class="col-lg-10 m-auto">
					<h2 class="heading-two mb5">Do You Want To Study <span>at Kevin Peter Jones Music School? </span></h2>
					<p class="para-two">A professional instructor will teach your lesson at a preappointed day and time each week. Material from the previous lesson will be briefly reviewed, then new material will be introduced. You'll learn exercises to develop playing technique and music theory knowledge as well as practical skills such as ear training, sight-reading and notation to give you the confidence to explore the style of music you prefer. You'll also learn how to play real songs, and your teacher will be happy to work your favorite music into the curriculum. At the end of the lesson, your instructor will provide you with material to practice before your next lesson.</p>
					<a href="#" class="btn btn-business">Get Started</a>
				</div>
			</div>
		</section>
		<!-- Study -->
		<!-- Teacher -->
		<section class="teacher headline">
			<div class="container">
				<div class="col-lg-12">
					<h2 class="heading-two mb5">Our Teachers <span>choose our most talented teachers</span></h2>
					<div class="teacher-in">
						<div id="teacher">
							<div class="item">
								<div class="box">
									<div class="img-box"><img src="{{asset('frontend/assets/images/1.jpg')}}" class="img-fluid" alt=""></div>
									<h2 class="heading-two">JOHN DOE <span>Guitar Teacher</span></h2>
									<p class="para-two">John Doe was born and raised in Olney, MD, and was surrounded by musicians from an early age.</p>
									<div class="row">
										<div class="col-lg-7">
											<ul class="list-unstyled">
												<li><img src="{{asset('frontend/assets/images/icon1.png')}}" alt="">3 Months Course</li>
												<li><img src="{{asset('frontend/assets/images/icon2.png')}}" alt="">Start From 300$</li>
											</ul>
										</div>
										<div class="col-lg-5 float-right dis-flex-end">
											<a href="#" class="btn btn-business">start now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- 2nd -->
							<div class="item">
								<div class="box">
									<div class="img-box"><img src="{{asset('frontend/assets/images/2.jpg')}}" class="img-fluid" alt=""></div>
									<h2 class="heading-two">JOHN DOE <span>Guitar Teacher</span></h2>
									<p class="para-two">John Doe was born and raised in Olney, MD, and was surrounded by musicians from an early age.</p>
									<div class="row">
										<div class="col-lg-7">
											<ul class="list-unstyled">
												<li><img src="{{asset('frontend/assets/images/icon1.png')}}" alt="">3 Months Course</li>
												<li><img src="{{asset('frontend/assets/images/icon2.png')}}" alt="">Start From 300$</li>
											</ul>
										</div>
										<div class="col-lg-5 float-right dis-flex-end">
											<a href="#" class="btn btn-business">start now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- 2nd -->
							<!-- 3rd -->
							<div class="item">
								<div class="box">
									<div class="img-box"><img src="{{asset('frontend//assets/images/3.jpg')}}" class="img-fluid" alt=""></div>
									<h2 class="heading-two">JOHN DOE <span>Guitar Teacher</span></h2>
									<p class="para-two">John Doe was born and raised in Olney, MD, and was surrounded by musicians from an early age.</p>
									<div class="row">
										<div class="col-lg-7">
											<ul class="list-unstyled">
												<li><img src="{{asset('frontend/assets/images/icon1.png')}}" alt="">3 Months Course</li>
												<li><img src="{{asset('frontend/assets/images/icon2.png')}}" alt="">Start From 300$</li>
											</ul>
										</div>
										<div class="col-lg-5 float-right dis-flex-end">
											<a href="#" class="btn btn-business">start now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- 3rd -->
							<!-- 4th -->
							<div class="item">
								<div class="box">
									<div class="img-box"><img src="{{asset('frontend/assets/images/1.jpg')}}" class="img-fluid" alt=""></div>
									<h2 class="heading-two">JOHN DOE <span>Guitar Teacher</span></h2>
									<p class="para-two">John Doe was born and raised in Olney, MD, and was surrounded by musicians from an early age.</p>
									<div class="row">
										<div class="col-lg-7">
											<ul class="list-unstyled">
												<li><img src="{{asset('frontend/assets/images/icon1.png')}}" alt="">3 Months Course</li>
												<li><img src="{{asset('frontend/assets/images/icon2.png')}}" alt="">Start From 300$</li>
											</ul>
										</div>
										<div class="col-lg-5 float-right dis-flex-end">
											<a href="#" class="btn btn-business">start now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- 4th -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Teacher -->
		<!-- Awards -->
		<section class="awards dis-flex headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="box">
							<div class="shape">231</div>
							<!-- <h3><span>231</span></h3> -->
							<h2>Students</h2>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="shape">20</div>
							<h2>Teachers</h2>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="shape">90</div>
							<h2>Awards</h2>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="box">
							<div class="shape">50</div>
							<h2>Students</h2>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Awards -->
		<!-- Classes -->
		<section class="classes headline">
			<div class="container">
				<div class="col-lg-12">
					<h2 class="heading-two mb5">Our Classes<span>choose our Musical Instruments</span></h2>
					<div class="classes-in">
						<div id="classes">
							<div class="item">
								<div class="box">
									<div class="img-box"><img src="{{asset('frontend/assets/images/icon-1.png')}}" class="img-fluid" alt=""></div>
									<h2 class="heading-two">Piano</h2>
									<p class="para-two">John Doe was born and raised in Olney, MD, and was surrounded by musicians from an early age.</p>
								</div>
							</div>
							<!-- 2nd -->
							<div class="item">
								<div class="box">
									<div class="img-box"><img src="{{asset('frontend/assets/images/icon-2.png')}}" class="img-fluid" alt=""></div>
									<h2 class="heading-two">Guitar</h2>
									<p class="para-two">John Doe was born and raised in Olney, MD, and was surrounded by musicians from an early age.</p>
								</div>
							</div>
							<!-- 2nd -->
							<!-- 3rd -->
							<div class="item">
								<div class="box">
									<div class="img-box"><img src="{{asset('frontend/assets/images/icon-3.png')}}" class="img-fluid" alt=""></div>
									<h2 class="heading-two">Voice</h2>
									<p class="para-two">John Doe was born and raised in Olney, MD, and was surrounded by musicians from an early age.</p>
								</div>
							</div>
							<!-- 3rd -->
							<!-- 4th -->
							<div class="item">
								<div class="box">
									<div class="img-box"><img src="{{asset('frontend/assets/images/icon-4.png')}}" class="img-fluid" alt=""></div>
									<h2 class="heading-two">Saxophone</h2>
									<p class="para-two">John Doe was born and raised in Olney, MD, and was surrounded by musicians from an early age.</p>
								</div>
							</div>
							<!-- 4th -->
							<!-- 5th -->
							<div class="item">
								<div class="box">
									<div class="img-box"><img src="{{asset('frontend/assets/images/icon-2.png')}}" class="img-fluid" alt=""></div>
									<h2 class="heading-two">Guitar</h2>
									<p class="para-two">John Doe was born and raised in Olney, MD, and was surrounded by musicians from an early age.</p>
								</div>
							</div>
							<!-- 5th -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Classes -->
		<!-- Testimonials -->
		<section class="client headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 m-auto">
						<h2 class="heading-two mb5">Testimonial <span>What our Student Say</span></h2>
						<div id="client">
							<div class="item">
								<div class="box">
									<p class="para-two">I just wanted to say I'm glad you are here and doing such a wonderful thing Isaiah is absolutely the most precious person anyone could have as a music teacher and mentor in general. What a fabulous example of a human being and great music teacher he truly is! Thank you so much and please tell Isaiah thank you also.</p>
									<div class="img-box"><img src="{{asset('frontend/assets/images/client.jpg')}}" class="img-fluid" alt=""></div>
									<h3>Angela <span>Piano Student</span></h3>
								</div>
							</div>
							<div class="item">
								<div class="box">
									<p class="para-two">I just wanted to say I'm glad you are here and doing such a wonderful thing Isaiah is absolutely the most precious person anyone could have as a music teacher and mentor in general. What a fabulous example of a human being and great music teacher he truly is! Thank you so much and please tell Isaiah thank you also.</p>
									<div class="img-box"><img src="{{asset('frontend/assets/images/client.jpg')}}" class="img-fluid" alt=""></div>
									<h3>Angela <span>Piano Student</span></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Testimonials -->
		<!-- Contact Section -->
		<section class="contact headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 ">
						<div class="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13004082.928417291!2d-104.65713107818928!3d37.27557827818067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1621967520369!5m2!1sen!2s" width="100%" height="660" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
					<div class="col-lg-6 dis-flex">
						<h2 class="heading-two mb5">Contact Us <span>Contact Information</span></h2>
						<div class="content">
						<h2 class="heading-two mb5">Our Location <span>44 Lorem Ave. West Dummy, IL 80155</span></h2>
						<h2 class="heading-two mb5"> phone number<span> +1 8049 432</span></h2>
						<h2 class="heading-two mb5"> email address<span> loremipsum@dummy.com</span></h2>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Contact Section -->
		<!-- Footer Begins here -->

        @include('layouts.partials.footer')
		<!-- Footer Begins here -->
		<!-- Footer Script Begins here -->

        @include('layouts.partials.footer_script')
		<!-- Footer Script Begins here -->
		<script>
			/*
		You can check out original dribble shot here https://dribbble.com/shots/2375246-Fashion-Butique-slider-animation
		Comments or suggestions are always appreciate it.
		*/
		var mySlider = {
		config: {
		slider: ".slider-content",
		activeSlide: ".slide.active",
		footerButtons: ".footer-wrapper .box",
		bgPicture: ".image-mask img",
		nav: ".control-nav",
		position: {
		x: 350,
		alpha: 1
		},
		nextPosition: {
		x: 150,
		alpha: 1
		}
		},
		init: function (config) {
		this.canvasInit();
		$(mySlider.config.footerButtons).click(function () {
		mySlider.changeButton($(this));
		});
		},
		canvasInit: function () {
		var canvas = $(".canvas")[0];
		var ctx = canvas.getContext("2d");
		var w = $(mySlider.config.activeSlide).width();
		var h = $(mySlider.config.activeSlide).height();
		var img = document.createElement("IMG");
		img.src =
		"https://s3-us-west-2.amazonaws.com/s.cdpn.io/42764/mask-karlie.jpg";
		var position = {
		x: 150,
		alpha: 1
		};
		if (window.matchMedia("(min-width: 860px)").matches) {
		position = {
		x: 200,
		alpha: 1
		};
		}
		if (window.matchMedia("(min-width: 1200px)").matches) {
		position = {
		x: 250,
		alpha: 1
		};
		}
		canvas.width = w;
		canvas.height = h;
		mySlider.drawMask(canvas, ctx, position, img);
		},
		drawMask: function (canvas, ctx, position, img) {
		var w = $(mySlider.config.activeSlide).width();
		var h = $(mySlider.config.activeSlide).height();
		var cy = 50;
		var mStroke = 25;
		var mWidth = 180;
		var mHeight = 300;
		if (window.matchMedia("(min-width: 860px)").matches) {
		mStroke = 35;
		cy = 80;
		mWidth = 260;
		mHeight = 380;
		}
		if (window.matchMedia("(min-width: 1200px)").matches) {
		mStroke = 40;
		cy = 120;
		mWidth = 360;
		mHeight = 460;
		}
		ctx.globalAlpha = position.alpha;
		ctx.clearRect(0, 0, w, h);
		ctx.save();
		ctx.beginPath();
		ctx.rect(position.x, cy, mWidth, mStroke);
		ctx.clip();
		ctx.drawImage(img, 0, 0, w, h);
		ctx.restore();
		ctx.save();
		ctx.rect(position.x, cy, mStroke, mHeight);
		ctx.clip();
		ctx.drawImage(img, 0, 0, w, h);
		ctx.restore();
		ctx.save();
		ctx.rect(position.x + mWidth, cy, mStroke, mHeight);
		ctx.clip();
		ctx.drawImage(img, 0, 0, w, h);
		ctx.restore();
		ctx.save();
		ctx.rect(position.x, cy + (mHeight - mStroke), mWidth, mStroke);
		ctx.clip();
		ctx.drawImage(img, 0, 0, w, h);
		ctx.restore();
		},
		changeSlide: function (id) {
		var activeSlide = $(mySlider.config.activeSlide);
		var newSlide = $(mySlider.config.slider).find('[data-order="' + id + '"]');
		this.animateSlide(activeSlide, newSlide);
		this.createMask(activeSlide, newSlide);
		},
		changeNav: function (id) {
		var activeNav = $(mySlider.config.nav).find("li");
		activeNav.removeClass("active");
		activeNav.eq(id - 1).addClass("active");
		},
		changeButton: function (el) {
		var activeButton = $(mySlider.config.slider).find(".box.active");
		var target = el.data("id");
		if (!el.hasClass("active")) {
		activeButton.removeClass("active");
		el.addClass("active");
		this.changeSlide(target);
		this.changeNav(target);
		}
		},
		createMask: function (active, newSlide) {
		var currentCanvas = active.find(".canvas")[0];
		var nextCanvas = newSlide.find(".canvas")[0];
		var position = mySlider.config.position;
		var positionNext = mySlider.config.nextPosition;
		var currentctx = currentCanvas.getContext("2d");
		var nextctx = nextCanvas.getContext("2d");
		var w = $(mySlider.config.activeSlide).width();
		var h = $(mySlider.config.activeSlide).height();
		var currentImg = document.createElement("IMG");
		var nextImg = document.createElement("IMG");
		var movex = 200;
		var position = {
		x: 350,
		alpha: 1
		};
		var nextPosition = {
		x: 150,
		alpha: 1
		};
		TweenMax.set(positionNext, { x: "150" });
		if (window.matchMedia("(min-width: 860px)").matches) {
		position = {
		x: 400,
		alpha: 1
		};
		nextPosition = {
		x: 200,
		alpha: 1
		};
		movex = 200;
		TweenMax.set(positionNext, { x: "200" });
		}
		if (window.matchMedia("(min-width: 1200px)").matches) {
		position = {
		x: 450,
		alpha: 1
		};
		nextPosition = {
		x: 250,
		alpha: 1
		};
		movex = 200;
		TweenMax.set(positionNext, { x: "250" });
		}
		currentImg.src = active.find("canvas").data("image");
		nextImg.src = newSlide.find("canvas").data("image");
		currentCanvas.width = nextCanvas.width = w;
		currentCanvas.height = nextCanvas.height = h;
		TweenMax.to(newSlide.find(".canvas"), 0.3, { autoAlpha: 1, delay: 1.5 });
		TweenMax.to(positionNext, 0.5, {
		x: "-=" + movex + "",
		onUpdate: function () {
		mySlider.drawMask(currentCanvas, currentctx, positionNext, currentImg);
		},
		onComplete: function () {
		TweenMax.to(active.find(".canvas"), 0.3, { autoAlpha: 0 }, "-=0.2");
		TweenMax.to(newSlide.find(".canvas"), 0.3, { autoAlpha: 0 }, "-=0.2");
		}
		});
		nextImg.onload = function () {
		mySlider.drawMask(nextCanvas, nextctx, positionNext, nextImg);
		TweenMax.to(position, 1, {
		x: "-=" + movex + "",
		delay: 1.3,
		onUpdate: function () {
		mySlider.drawMask(nextCanvas, nextctx, position, nextImg);
		}
		});
		console.log(position);
		};
		},
		animateSlide: function (active, newSlide) {
		var w = $(mySlider.config.slider).width();
		var backgroundImg = $(mySlider.config.bgPicture);
		var activeTitleBg = active.find(".title-background .mask-wrap");
		var activeMainTitle = active.find(".title-wrapper h1 .mask-wrap");
		var activeSlideContent = active.find(".slide-content");
		var activefakeBg = active.find(".fake-bg");
		var activeImageCaption = active.find(".image-caption");
		var newTitleBg = newSlide.find(".title-background .mask-wrap");
		var newTitle = newSlide.find(".title-wrapper h1 .mask-wrap");
		var newBgPicture = newSlide.data("img");
		var newfakeBg = newSlide.find(".fake-bg");
		var nextImageCaption = newSlide.find(".image-caption");
		var img = $("<img />");
		newSlide.addClass("next");
		activeMainTitle.addClass("mask-up");
		activeTitleBg.addClass("mask-down");
		activeImageCaption.addClass("mask-up");
		newTitle.addClass("mask-down");
		newTitleBg.addClass("mask-up");
		nextImageCaption.addClass("mask-down");
		TweenMax.set(activeSlideContent, { width: w });
		TweenMax.set(activefakeBg, { width: w });
		TweenMax.set(newfakeBg, { autoAlpha: 0 });
		TweenMax.to(active, 0.8, { width: "0%", ease: Power4.easeIn });
		TweenMax.to(activefakeBg, 0.3, { autoAlpha: 0, delay: 0.4 });
		TweenMax.to(backgroundImg, 0.3, { autoAlpha: 0, delay: 0.4 });
		setTimeout(function () {
		backgroundImg.remove();
		img.attr("src", newBgPicture).css("opacity", 0);
		$(".image-mask").append(img);
		}, 600);
		TweenMax.to(newfakeBg, 0.5, { autoAlpha: 1, delay: 1 });
		TweenMax.to(img, 0.5, { autoAlpha: 1, delay: 1 });
		setTimeout(function () {
		newTitle.removeClass("mask-down");
		newTitleBg.removeClass("mask-up");
		}, 800);
		setTimeout(function () {
		active.removeClass("active");
		newSlide.addClass("active").removeClass("next");
		TweenMax.set(active, { width: "100%" });
		activeMainTitle.removeClass("mask-up");
		activeTitleBg.removeClass("mask-down");
		activeImageCaption.removeClass("mask-up");
		nextImageCaption.removeClass("mask-down");
		}, 1500);
		}
		};
		function debounce(func, wait, immediate) {
		var timeout;
		return function () {
		var context = this,
		args = arguments;
		var later = function () {
		timeout = null;
		if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
		};
		}
		$(document).ready(function () {
		mySlider.init();
		var fn = debounce(function () {
		mySlider.init();
		}, 250);
		$(window).on("resize", fn);
		});
		</script>
	</body>
</html>

