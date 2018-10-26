<?php
  include("includes/header.php");
?>

<section class="subheader">
  <div class="container">
    <h1>404 Error</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">404 Error</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module page-not-found">
  <div class="container">

    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <h2>404</h2>
        <h3>Page not found.</h3>
        <p>The page you are looking for was removed or does not exist. Try using the search form below.</p>
        <form class="search-form">
          <input type="text" placeholder="Search..." />
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <a href="index.html" class="button button-icon"><i class="fa fa-angle-right"></i>Back to Home</a>
      </div>
    </div><!-- end row -->

  </div>
</section>

<section class="module cta newsletter">
  <div class="container">
	<div class="row">
		<div class="col-lg-7 col-md-7">
			<h3>Sign up for our <strong>newsletter.</strong></h3>
			<p>Lorem molestie odio. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
		</div>
		<div class="col-lg-5 col-md-5">
			<form method="post" id="newsletter-form" class="newsletter-form">
				<input type="email" placeholder="Your email..." />
				<button type="submit" form="newsletter-form"><i class="fa fa-send"></i></button>
			</form>
		</div>
	</div><!-- end row -->
  </div><!-- end container -->
</section>

<?php
include('includes/footer.php');
?>

<?php
include('includes/bottom.php')
?>

<!-- JavaScript file links -->
<script src="js/jquery-3.1.1.min.js"></script>      <!-- Jquery -->
<script src="assets/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>  <!-- bootstrap 3.0 -->
<script src="assets/slick-1.6.0/slick.min.js"></script> <!-- slick slider -->
<script src="assets/chosen-1.6.2/chosen.jquery.min.js"></script> <!-- chosen - for select dropdowns -->
<script src="js/isotope.min.js"></script> <!-- isotope-->
<script src="js/wNumb.js"></script> <!-- price formatting -->
<script src="js/nouislider.min.js"></script> <!-- price slider -->
<script src="js/global.js"></script>


</body>
</html>
