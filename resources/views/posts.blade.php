
<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Revolve - {{ $title }}</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--Favicon-->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

	<!-- THEME CSS
	================================================== -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
	<!-- Themify -->
	<link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
	<link rel="stylesheet" href="plugins/slick-carousel/slick-theme.css">
	<link rel="stylesheet" href="plugins/slick-carousel/slick.css">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="plugins/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
	<!-- manin stylesheet -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>


    @include('partials.navbar')



	<div class="header-logo py-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<a class="navbar-brand" href="#"><img src="images/logo.png" alt="" class="img-fluid"></a>
				</div>
			</div>
		</div>
	</div>


	<!--search overlay start-->
	<div class="search-wrap">
		<div class="overlay">
			<form action="#" class="search-form">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-9">
							<input type="text" class="form-control" placeholder="Search..." />
						</div>
						<div class="col-md-2 col-3 text-right">
							<div class="search_toggle toggle-wrap d-inline-block">
								<i class="ti-close"></i>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!--search overlay end-->

    {{-- primary article --}}
	<section class="banner">
		<div class="container">
			<div class="banner-img">
				<a href="blog-single.html"><img src="images/fashion/bg-banner-2.jpg" alt="" class="img-fluid w-100"></a>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="banner-content text-center">
						<div class="meta-cat">
							<span class="text-capitalize letter-spacing-1 cat-name font-extra text-color">{{ Str::upper($posts[0]->category->name) }}</span>
						</div>
						<div class="post-title">
							<h2><a href="blog-single.html">{{ $posts[0]->title }}</a></h2>
						</div>

						<div class="post-meta footer-meta">
							<ul class="list-inline">
								<li class="post-like list-inline-item">
									<span class="count">197</span> Likes
								</li>
								<li class="post-read list-inline-item">2 mins read</li>
								<li class="post-view list-inline-item">189 Views</li>
							</ul>
						</div>
						<div class="post-content">
							<p>{{$posts[0]->excerpt}}</p>
							<a href="blog-single.html" class="btn btn-grey mt-3"> read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




    
	<section class="section-padding pt-4">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    {{-- secondary article --}}
					<article class="post-list mb-5 pb-4 border-bottom">
						<a class="post-thumb mb-3 d-block" href="blog-single.html">
							<img src="images/fashion/bg-fashion.jpg" alt="" class="img-fluid w-100">
						</a>
						<div class="meta-cat">
							<span class="letter-spacing cat-name font-extra text-uppercase font-sm">{{ Str::upper($posts[1]->category->name) }}</span>
						</div>
						<h3 class="post-title mt-2"><a href="blog-single.html">{{ $posts[1]->title }}</a></h3>

						<div class="post-meta footer-meta">
							<ul class="list-inline">
								<li class="post-like list-inline-item">
									<span class="font-sm letter-spacing-1 text-uppercase"><i class="ti-time mr-2"></i>2 min read</span>
								</li>
								<li class="post-view list-inline-item letter-spacing-1">189 Views</li>
							</ul>
						</div>
						<div class="post-content">
							<p>{{ $posts[1]->excerpt }}</p>

						</div>
					</article>


                    {{-- articles list --}}
                    @php($counter = 1)
                    @foreach ($posts as $post)
                        @if($counter < 7) 
                            <div class="mb-4 post-list border-bottom pb-4">
                                <div class="row no-gutters">
                                    <div class="col-md-5">
                                        <a class="post-thumb " href="blog-single.html">
                                            <img src="images/fashion/img-<?php echo $counter ?>.jpg" alt="" class="img-fluid w-100">
                                        </a>
                                    </div>

                                    <div class="col-md-7">
                                        <div class="post-article mt-sm-3">
                                            <div class="meta-cat">
                                                <span class="letter-spacing cat-name font-extra text-uppercase font-sm">{{ Str::upper($post->category->name) }}</span>
                                            </div>
                                            <h3 class="post-title mt-2"><a href="posts/{{ $post->slug }}">{{ $post->title }}</a></h3>

                                            <div class="post-meta">
                                                <ul class="list-inline">
                                                    <li class="post-like list-inline-item">
                                                        <span class="font-sm letter-spacing-1 text-uppercase"><i class="ti-time mr-2"></i>3 min
                                                            read</span>
                                                    </li>
                                                    <li class="post-view list-inline-item letter-spacing-1">259 Views</li>
                                                </ul>
                                            </div>
                                            <div class="post-content">
                                                <p>{{ $post->excerpt }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @php($counter++)
                    @endforeach




					<div class="pagination mt-5 pt-4">
						<ul class="list-inline">
							<li class="list-inline-item"><a href="#" class="active">1</a></li>
							<li class="list-inline-item"><a href="#">2</a></li>
							<li class="list-inline-item"><a href="#">3</a></li>
							<li class="list-inline-item"><a href="#" class="prev-posts"><i class="ti-arrow-right"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
					<div class="sidebar sidebar-right">
						<div class="sidebar-wrap mt-5 mt-lg-0">
							<div class="sidebar-widget about mb-5 text-center p-3">
								<div class="about-author">
									<img src="images/author.jpg" alt="" class="img-fluid">
								</div>
								<h4 class="mb-0 mt-4">Liam Mason</h4>
								<p>Travel Blogger</p>
								<p>I'm Liam, last year I decided to quit my job and travel the world. You can follow my journey on this
									blog!</p>
								<img src="images/liammason.png" alt="" class="img-fluid">
							</div>

							<div class="sidebar-widget follow mb-5 text-center">
								<h4 class="text-center widget-title">Follow Me</h4>
								<div class="follow-socials">
									<a href="#"><i class="ti-facebook"></i></a>
									<a href="#"><i class="ti-twitter"></i></a>
									<a href="#"><i class="ti-instagram"></i></a>
									<a href="#"><i class="ti-youtube"></i></a>
									<a href="#"><i class="ti-pinterest"></i></a>
								</div>
							</div>

							<div class="sidebar-widget mb-5 ">
								<h4 class="text-center widget-title">Trending Posts</h4>

								<div class="sidebar-post-item-big">
									<a href="blog-single.html"><img src="images/news/img-1.jpg" alt="" class="img-fluid"></a>
									<div class="mt-3 media-body">
										<span class="text-muted letter-spacing text-uppercase font-sm">September 10, 2019</span>
										<h4><a href="blog-single.html">Meeting With Clarissa, Founder Of Purple Conversation App</a></h4>
									</div>
								</div>

								<div class="media border-bottom py-3 sidebar-post-item">
									<a href="#"><img class="mr-4" src="images/news/thumb-1.jpg" alt=""></a>
									<div class="media-body">
										<span class="text-muted letter-spacing text-uppercase font-sm">September 10, 2019</span>
										<h4><a href="blog-single.html">Thoughtful living in los Angeles</a></h4>
									</div>
								</div>

								<div class="media py-3 sidebar-post-item">
									<a href="#"><img class="mr-4" src="images/news/thumb-2.jpg" alt=""></a>
									<div class="media-body">
										<span class="text-muted letter-spacing text-uppercase font-sm">September 10, 2019</span>
										<h4><a href="blog-single.html">Vivamus molestie gravida turpis.</a></h4>
									</div>
								</div>
							</div>


							<div class="sidebar-widget category mb-5">
								<h4 class="text-center widget-title">Catgeories</h4>
								<ul class="list-unstyled">
									<li class="align-items-center d-flex justify-content-between">
										<a href="#">Innovation</a>
										<span>14</span>
									</li>
									<li class="align-items-center d-flex justify-content-between">
										<a href="#">Software</a>
										<span>2</span>
									</li>
									<li class="align-items-center d-flex justify-content-between">
										<a href="#">Social</a>
										<span>10</span>
									</li>
									<li class="align-items-center d-flex justify-content-between">
										<a href="#">Trends</a>
										<span>5</span>
									</li>
								</ul>
							</div>

							<div class="sidebar-widget subscribe mb-5">
								<h4 class="text-center widget-title">Newsletter</h4>
								<input type="text" class="form-control" placeholder="Email Address">
								<a href="#" class="btn btn-primary d-block mt-3">Sign Up</a>
							</div>

							<div class="sidebar-widget sidebar-adv mb-5">
								<a href="#"><img src="images/sidebar-banner3.png" alt="" class="img-fluid w-100"></a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="footer-2 section-padding gray-bg pb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="widget footer-widget mb-5 mb-lg-0">
						<h5 class="widget-title text-uppercase letter-spacing-2 mb-4">About me</h5>
						<img src="images/about.jpg" alt="" class="img-fluid">
						<p class="mt-4">It is the best selling Blog & Magazine html Theme of this year on Themefisher.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="widget footer-widget mb-5 mb-lg-0">
						<h5 class="widget-title text-uppercase letter-spacing-2 mb-4">Trending</h5>

						<div class="media pb-3 sidebar-post-item">
							<a href="#"><img class="mr-4" src="images/news/thumb-1.jpg" alt=""></a>
							<div class="media-body">
								<span class="text-uppercase font-sm font-extra letter-spacing"> Travel</span>
								<h4 class="mt-1"><a href="blog-single.html">Thoughtful living in los Angeles</a></h4>
							</div>
						</div>

						<div class="media py-3 sidebar-post-item">
							<a href="#"><img class="mr-4" src="images/news/thumb-2.jpg" alt=""></a>
							<div class="media-body">
								<span class="text-uppercase font-sm font-extra letter-spacing"> Travel</span>
								<h4 class="mt-1"><a href="blog-single.html">Vivamus molestie gravida turpis.</a></h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="widget footer-widget">
						<h5 class="widget-title text-uppercase letter-spacing-2 mb-4">Gallery</h5>

						<div class="row no-gutters">
							<div class="col-lg-4 col-md-6 col-sm-6 col-6">
								<a href="#"><img class="img-fluid" src="images/f1.jpg" alt="" /></a>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6  col-6">
								<a href="#"><img class="img-fluid" src="images/f2.jpg" alt="" /></a>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6  col-6">
								<a href="#"><img class="img-fluid" src="images/f3.jpg" alt="" /></a>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6  col-6">
								<a href="#"><img class="img-fluid" src="images/f4.jpg" alt="" /></a>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6  col-6">
								<a href="#"><img class="img-fluid" src="images/f2.jpg" alt="" /></a>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6  col-6">
								<a href="#"><img class="img-fluid" src="images/f3.jpg" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="footer-btm mt-5 pt-4 border-top">
				<div class="row">
					<div class="col-lg-12">
						<ul class="list-inline footer-socials-2 text-center">
							<li class="list-inline-item"><a href="#">Privacy policy</a></li>
							<li class="list-inline-item"><a href="#">Support</a></li>
							<li class="list-inline-item"><a href="#">About</a></li>
							<li class="list-inline-item"><a href="#">Contact</a></li>
							<li class="list-inline-item"><a href="#">Terms</a></li>
							<li class="list-inline-item"><a href="#">Category</a></li>
						</ul>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="copyright text-center ">
							@ copyright all reserved to <a href="https://themefisher.com/">themefisher.com</a>-2019 Distribution
							<a " href=" https://themewagon.com">ThemeWagon.</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- THEME JAVASCRIPT FILES
================================================== -->
	<!-- initialize jQuery Library -->
	<script src="plugins/jquery/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="plugins/bootstrap/js/popper.min.js"></script>
	<!-- Owl caeousel -->
	<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
	<script src="plugins/slick-carousel/slick.min.js"></script>
	<script src="plugins/magnific-popup/magnific-popup.js"></script>
	<!-- Instagram Feed Js -->
	<script src="plugins/instafeed-js/instafeed.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
	<script src="plugins/google-map/gmap.js"></script>
	<!-- main js -->
	<script src="js/custom.js"></script>


</body>

</html>