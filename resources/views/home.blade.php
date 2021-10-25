<!DOCTYPE HTML>
<html>
	<head>
		<title>Hielo by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="#">Hielo <span>by TEMPLATED</span></a></div>
                <a href="#menu">Menu</a>
            </header>
		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="/">Home</a></li>
					<li><a href="#">Generic</a></li>
					<li><a href="#">Elements</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="images/slide01.jpg" alt="" />
					<div class="inner">
						<header>
							<p>LARAVEL <a href="https://templated.co">NEWS</a></p>
							<h2>GENERAL</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide02.jpg" alt="" />
					<div class="inner">
						<header>
							<h2>SPORT</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide03.jpg"  alt="" />
					<div class="inner">
						<header>
							<h2>TEKNOLOGY</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide04.jpg"  alt="" />
					<div class="inner">
						<header>
							<h2>SECIENCE</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide05.jpg"  alt="" />
					<div class="inner">
						<header>
							<h2>INTERTAINMENT</h2>
						</header>
					</div>
				</article>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style2">
            <form class="size 20" action="/search">
            @csrf
            <input type="text" class="form-control" name="keyword">
            <button type="submit" class="btn btn-primary">Search</button>
            </form>
				<div class="box">
					<div class="grid-style">
                    @foreach($artikel as $a)
						<div>
							<div class="box">
								<div class="image fit">
									<img src="{{ $a->urlToImage}}">
								</div>
								<div class="content">
									<header class="align-center">
                                    <h3>{{ $a->title}}<h3>
									</header>
									<p>{{ $a->description}}<p>
                                    <p>{{ $a->url}}<p>
									<footer class="align-center">
										<a href="#" class="button alt">Learn More</a>
									</footer>
								</div>
							</div>
						</div>
                        @endforeach

		<!-- Footer -->
        <footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Untitled. All rights reserved.
				</div>
            </footer>

		<!-- Scripts -->
            <script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrollex.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

	</body>
</html>