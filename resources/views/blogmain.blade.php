<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ease Neurocare</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="css/animate.css">
  
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">


  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="wrap">
   <div class="container">
    <div class="row">
     <div class="col-md-6 d-flex align-items-center">
      <p class="mb-0 phone pl-md-2">
       <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> Nigeria +234 814 410 4196 | UK +44 79491 73248</a> 
       <a href="#"><span class="fa fa-paper-plane mr-1"></span> info@easeneurocare.org</a>
     </p>
   </div>
   <div class="col-md-6 d-flex justify-content-md-end">
    <div class="social-media">
     <p class="mb-0 d-flex">
      <a href="https://www.facebook.com/share/16SNSVBsSS/" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook" target="_blank"><i class="sr-only">Facebook</i></span></a>
      <a href="https://www.linkedin.com/company/ease-cs/" class="d-flex align-items-center justify-content-center" target="_blank"><span class="fa fa-linkedin"><i class="sr-only" target="_blank">LinkedIn</i></span></a>
      <a href="https://www.instagram.com/ease_neurocare?igsh=MXNnanphcjRza3p4dQ==" class="d-flex align-items-center justify-content-center" target="_blank"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
      <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-youtube"><i class="sr-only">youtube</i></span></a>
    </p>
  </div>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
 <div class="container">
   <a class="navbar-brand"><img src="images/ease logo.png"></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
     <ul class="navbar-nav ml-auto">
       <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
       <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
       <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
       <li class="nav-item"><a href="workwithus.html" class="nav-link">Work with Us</a></li>
       <li class="nav-item active"><a href="blog.html" class="nav-link">Blog</a></li>
       <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
       <li class="nav-item cta"><a href="contact.html" class="nav-link">Book Consultation</a></li>
     </ul>
   </div>
 </div>
</nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
       <h1 class="mb-0 bread">Blog</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section">

@foreach ($posts as $post)
  <div class="blog-post">
    <h2>{{ $post->title }}</h2>
    <small>Published on {{ $post->created_at->format('F j, Y') }}</small> {{-- e.g. July 21, 2025 --}}
    <p>{{ Str::limit($post->body, 100) }}</p>
    <a href="{{ route('blog.show', $post->id) }}">Read More</a>
  </div>
@endforeach




  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 col-lg-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" src="{{ asset('storage/' . $post->image) }}" alt="Blog image"> </a>
          </a>
          <div class="text p-4">
           <div class="meta mb-2">
            <div><a href="#">July 10, 2025</a></div>
            <div><a href="#">Admin</a></div>
            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
          </div>
          <h3 class="heading"><a href="#">{{ $post->title }}</a></h3>
          <p>{!! $post->body !!}</p>
          <p><a href="{{url ('/blog/{id}') }}" class="btn btn-secondary">Read more</a></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3 d-flex ftco-animate">
      <div class="blog-entry align-self-stretch">
        <a href="blog-single.html" class="block-20" style="background-image: url('images/causes_2.jpg');">
        </a>
        <div class="text p-4">
         <div class="meta mb-2">
          <div><a href="#">July 10, 2025</a></div>
          <div><a href="#">Admin</a></div>
          <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
        </div>
        <h3 class="heading"><a href="#">Children &amp; Autism</a></h3>
        <p>Autism is a condition related to brain development</p>
        <p><a href="#" class="btn btn-secondary">Read more</a></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3 d-flex ftco-animate">
    <div class="blog-entry align-self-stretch">
      <a href="blog-single.html" class="block-20" style="background-image: url('images/causes_2.jpg');">
      </a>
      <div class="text p-4">
       <div class="meta mb-2">
        <div><a href="#">July 10, 2025</a></div>
        <div><a href="#">Admin</a></div>
        <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
      </div>
      <h3 class="heading"><a href="#">Children &amp; Autism</a></h3>
      <p>Autism is a condition related to brain development</p>
      <p><a href="#" class="btn btn-secondary">Read more</a></p>
    </div>
  </div>
</div>
<div class="col-md-6 col-lg-3 d-flex ftco-animate">
  <div class="blog-entry align-self-stretch">
    <a href="blog-single.html" class="block-20" style="background-image: url('images/causes_2.jpg');">
    </a>
    <div class="text p-4">
     <div class="meta mb-2">
      <div><a href="#">July 10, 2025</a></div>
      <div><a href="#">Admin</a></div>
      <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
    </div>
    <h3 class="heading"><a href="#">Children &amp; Autism</a></h3>
    <p>Autism is a condition related to brain development</p>
    <p><a href="#" class="btn btn-secondary">Read more</a></p>
  </div>
</div>
</div>

<div class="col-md-6 col-lg-3 d-flex ftco-animate">
  <div class="blog-entry align-self-stretch">
    <a href="blog-single.html" class="block-20" style="background-image: url('images/causes_2.jpg');">
    </a>
    <div class="text p-4">
     <div class="meta mb-2">
      <div><a href="#">July 10, 2025</a></div>
      <div><a href="#">Admin</a></div>
      <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
    </div>
    <h3 class="heading"><a href="#">Children &amp; Autism</a></h3>
    <p>Autism is a condition related to brain development</p>
    <p><a href="#" class="btn btn-secondary">Read more</a></p>
  </div>
</div>
</div>
<div class="col-md-6 col-lg-3 d-flex ftco-animate">
  <div class="blog-entry align-self-stretch">
    <a href="blog-single.html" class="block-20" style="background-image: url('images/causes_2.jpg');">
    </a>
    <div class="text p-4">
     <div class="meta mb-2">
      <div><a href="#">July 10, 2025</a></div>
      <div><a href="#">Admin</a></div>
      <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
    </div>
    <h3 class="heading"><a href="#">Children &amp; Autism</a></h3>
    <p>Autism is a condition related to brain development</p>
    <p><a href="#" class="btn btn-secondary">Read more</a></p>
  </div>
</div>
</div>
<div class="col-md-6 col-lg-3 d-flex ftco-animate">
  <div class="blog-entry align-self-stretch">
    <a href="blog-single.html" class="block-20" style="background-image: url('images/causes_2.jpg');">
    </a>
    <div class="text p-4">
     <div class="meta mb-2">
      <div><a href="#">July 10, 2025</a></div>
      <div><a href="#">Admin</a></div>
      <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
    </div>
    <h3 class="heading"><a href="#">Children &amp; Autism</a></h3>
    <p>Autism is a condition related to brain development.</p>
    <p><a href="#" class="btn btn-secondary">Read more</a></p>
  </div>
</div>
</div>
<div class="col-md-6 col-lg-3 d-flex ftco-animate">
  <div class="blog-entry align-self-stretch">
    <a href="blog-single.html" class="block-20" style="background-image: url('images/causes_2.jpg');">
    </a>
    <div class="text p-4">
     <div class="meta mb-2">
      <div><a href="#">July 10, 2025</a></div>
      <div><a href="#">Admin</a></div>
      <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
    </div>
    <h3 class="heading"><a href="#">Children &amp; Autism</a></h3>
    <p>Autism is a condition related to brain development.</p>
    <p><a href="#" class="btn btn-secondary">Read more</a></p>
  </div>
</div>
</div>
</div>
<div class="row mt-5">
  <div class="col text-center">
    <div class="block-27">
      <ul>
        <li><a href="#">&lt;</a></li>
        <li class="active"><span>1</span></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&gt;</a></li>
      </ul>
    </div>
  </div>
</div>
</div>
</section>


<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
					<h2 class="footer-heading">Ease Neurocare</h2>
					<p>Supporting Families, Empowering Carers, Enriching Lives.</p>
					<ul class="ftco-footer-social p-0">
						<li class="ftco-animate"><a href="https://www.facebook.com/share/16SNSVBsSS/" data-toggle="tooltip" data-placement="top" title="Facebook" target="_blank"><span class="fa fa-facebook"></span></a></li>
						<li class="ftco-animate"><a href="https://www.linkedin.com/company/ease-cs/" data-toggle="tooltip" data-placement="top" title="LinkedIn" target="_blank"><span class="fa fa-linkedin" target="_blank"></span></a></li>						
						<li class="ftco-animate"><a href="https://www.instagram.com/ease_neurocare?igsh=MXNnanphcjRza3p4dQ==" data-toggle="tooltip" data-placement="top" title="Instagram" target="_blank"><span class="fa fa-instagram"></span></a></li>
						<li class="ftco-animate"><a href="https://youtube.com/@easeneurocare?si=6Cze29WYOXW8IP_h" data-toggle="tooltip" data-placement="top" title="Youtube" target="_blank"><span class="fa fa-youtube"></span></a></li>
					</ul>
					<p><a href="index.html" class="btn btn-quarternary">Donate Now</a></p>
				</div>
				<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
					<h2 class="footer-heading">Latest News</h2>
					<div class="block-21 mb-4 d-flex">
						<a class="img mr-4 rounded" style="background-image: url(images/causes_1.jpg);"></a>
						<div class="text">
							<h3 class="heading"><a href="#">Autism is a condition related to brain development.</a></h3>
							<div class="meta">
								<div><a href="#">Jul 10, 2025</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#">17</a></div>
							</div>
						</div>
					</div>
					<div class="block-21 mb-4 d-flex">
						<a class="img mr-4 rounded" style="background-image: url(images/causes_1.jpg);"></a>
						<div class="text">
							<h3 class="heading"><a href="#">Autism is a condition related to brain development.</a></h3>
							<div class="meta">
								<div><a href="#">Jul 10, 2025</a></div>
								<div><a href="#">Admin</a></div>
								<div><a href="#">16</a></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
					<h2 class="footer-heading">Quick Links</h2>
					<ul class="list-unstyled">
						<li><a href="#" class="py-2 d-block">Home</a></li>
						<li><a href="#" class="py-2 d-block">About</a></li>
						<li><a href="#" class="py-2 d-block">Services</a></li>
						<li><a href="#" class="py-2 d-block">Work with Us</a></li>
						<li><a href="#" class="py-2 d-block">Blog</a></li>
						<li><a href="#" class="py-2 d-block">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
					<h2 class="footer-heading">Have a Questions?</h2>
					<div class="block-23 mb-3">
						<ul>
							<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+234 814 410 4196 <br>
								 +234 703 632 0728</span></a></li>
							<li><a href="https://wa.me/+447949173248" target="_blank"><span style="color:#075e54; font-size:x-large;" class="icon fa brands fa-whatsapp"></span><span class="text"> +44 79491 73248</span></a></li> 
							<li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@easeneurocare.org</span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-md-12 text-center">

					<p class="copyright">
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> Ease Neurocare. All rights reserved | Developed by: <a href="https://wolegt.vercel.app/" target="_blank">wolegtconsulting.dev</a>
					</div>
				</div>
			</div>
		</footer>




<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>