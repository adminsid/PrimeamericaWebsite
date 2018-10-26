<?php
  include("includes/header.php");
?>

<section class="subheader">
  <div class="container">
    <h1>Agent Listing Grid Sidebar</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Agents</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module">
  <div class="container">
	<div class="row">

		<div class="col-lg-8 col-md-8">

			<div class="property-listing-header">
				<span class="property-count left">8 agents found</span>
				<form action="#" method="get" class="right">
					<select name="sort_by" onchange="this.form.submit();">
						<option value="date_desc">New to Old</option>
						<option value="date_asc">Old to New</option>
						<option value="price_desc">Properties (High to Low)</option>
						<option value="price_asc">Properties (Low to High)</option>
					</select>
				</form>
				<div class="property-layout-toggle right">
					<a href="agent-listing-grid-sidebar.html" class="property-layout-toggle-item active"><i class="fa fa-th-large"></i></a>
					<a href="agent-listing-row-sidebar.html" class="property-layout-toggle-item"><i class="fa fa-bars"></i></a>
				</div>
				<div class="clear"></div>
			</div><!-- end agent listing header -->

			<div class="row">
				<div class="col-lg-4 col-md-4">
				  <div class="agent shadow-hover">
					<a href="#" class="agent-img">
					  <div class="img-fade"></div>
					  <div class="button alt agent-tag">24 Properties</div>
					  <img src="images/1197x1350.png" alt="" />
					</a>
					<div class="agent-content">
					  <div class="agent-details">
						<h4><a href="#">Sarah Parker</a></h4>
						<p><i class="fa fa-tag icon"></i>Selling Agent</p>
						<p><i class="fa fa-envelope icon"></i>sparker@homely.com</p>
						<p><i class="fa fa-phone icon"></i>(123) 456-6789</p>
					  </div>
					  <div class="center">
						  <ul class="social-icons circle">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						  </ul>
					  </div>
					</div>
				  </div>
				</div>
				<div class="col-lg-4 col-md-4">
				  <div class="agent shadow-hover">
					<a href="#" class="agent-img">
					  <div class="img-fade"></div>
					  <div class="button alt agent-tag">68 Properties</div>
					  <img src="images/1197x1350.png" alt="" />
					</a>
					<div class="agent-content">
					  <div class="agent-details">
						<h4><a href="#">John Doe</a></h4>
						<p><i class="fa fa-tag icon"></i>Buying Agent</p>
						<p><i class="fa fa-envelope icon"></i>jdoe@homely.com</p>
						<p><i class="fa fa-phone icon"></i>(123) 456-6789</p>
					  </div>
					  <div class="center">
						  <ul class="social-icons circle">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						  </ul>
					  </div>
					</div>
				  </div>
				</div>
				<div class="col-lg-4 col-md-4">
				  <div class="agent shadow-hover">
					<a href="#" class="agent-img">
					  <div class="img-fade"></div>
					  <div class="button alt agent-tag">32 Properties</div>
					  <img src="images/1197x1350.png" alt="" />
					</a>
					<div class="agent-content">
					  <div class="agent-details">
						<h4><a href="#">Cassandra Smith</a></h4>
						<p><i class="fa fa-tag icon"></i>Senior Agent</p>
						<p><i class="fa fa-envelope icon"></i>jdoe@homely.com</p>
						<p><i class="fa fa-phone icon"></i>(123) 456-6789</p>
					  </div>
					  <div class="center">
						  <ul class="social-icons circle">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						  </ul>
					  </div>
					</div>
				  </div>
				</div>
			</div><!-- end row -->

			<div class="row">
				<div class="col-lg-4 col-md-4">
				  <div class="agent shadow-hover">
					<a href="#" class="agent-img">
					  <div class="img-fade"></div>
					  <div class="button alt agent-tag">24 Properties</div>
					  <img src="images/1197x1350.png" alt="" />
					</a>
					<div class="agent-content">
					  <div class="agent-details">
						<h4><a href="#">Jim Sparks</a></h4>
						<p><i class="fa fa-tag icon"></i>Buying Agent</p>
						<p><i class="fa fa-envelope icon"></i>jdoe@homely.com</p>
						<p><i class="fa fa-phone icon"></i>(123) 456-6789</p>
					  </div>
					  <div class="center">
						  <ul class="social-icons circle">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						  </ul>
					  </div>
					</div>
				  </div>
				</div>

				<div class="col-lg-4 col-md-4">
				  <div class="agent shadow-hover">
					<a href="#" class="agent-img">
					  <div class="img-fade"></div>
					  <div class="button alt agent-tag">24 Properties</div>
					  <img src="images/1197x1350.png" alt="" />
					</a>
					<div class="agent-content">
					  <div class="agent-details">
						<h4><a href="#">Sarah Parker</a></h4>
						<p><i class="fa fa-tag icon"></i>Selling Agent</p>
						<p><i class="fa fa-envelope icon"></i>sparker@homely.com</p>
						<p><i class="fa fa-phone icon"></i>(123) 456-6789</p>
					  </div>
					  <div class="center">
						  <ul class="social-icons circle">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						  </ul>
					   </div>
					</div>
				  </div>
				</div>

				<div class="col-lg-4 col-md-4">
				  <div class="agent shadow-hover">
					<a href="#" class="agent-img">
					  <div class="img-fade"></div>
					  <div class="button alt agent-tag">68 Properties</div>
					  <img src="images/1197x1350.png" alt="" />
					</a>
					<div class="agent-content">
					  <div class="agent-details">
						<h4><a href="#">John Doe</a></h4>
						<p><i class="fa fa-tag icon"></i>Buying Agent</p>
						<p><i class="fa fa-envelope icon"></i>jdoe@homely.com</p>
						<p><i class="fa fa-phone icon"></i>(123) 456-6789</p>
					  </div>
					  <div class="center">
						  <ul class="social-icons circle">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						  </ul>
					  </div>
					</div>
				  </div>
				</div>
			</div><!-- end row -->

			<div class="row">
				<div class="col-lg-4 col-md-4">
				  <div class="agent shadow-hover">
					<a href="#" class="agent-img">
					  <div class="img-fade"></div>
					  <div class="button alt agent-tag">32 Properties</div>
					  <img src="images/1197x1350.png" alt="" />
					</a>
					<div class="agent-content">
					  <div class="agent-details">
						<h4><a href="#">Cassandra Smith</a></h4>
						<p><i class="fa fa-tag icon"></i>Senior Agent</p>
						<p><i class="fa fa-envelope icon"></i>jdoe@homely.com</p>
						<p><i class="fa fa-phone icon"></i>(123) 456-6789</p>
					  </div>
					  <div class="center">
						  <ul class="social-icons circle">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						  </ul>
					  </div>
					</div>
				  </div>
				</div>

				<div class="col-lg-4 col-md-4">
				  <div class="agent shadow-hover">
					<a href="#" class="agent-img">
					  <div class="img-fade"></div>
					  <div class="button alt agent-tag">24 Properties</div>
					  <img src="images/1197x1350.png" alt="" />
					</a>
					<div class="agent-content">
					  <div class="agent-details">
						<h4><a href="#">Jim Sparks</a></h4>
						<p><i class="fa fa-tag icon"></i>Buying Agent</p>
						<p><i class="fa fa-envelope icon"></i>jdoe@homely.com</p>
						<p><i class="fa fa-phone icon"></i>(123) 456-6789</p>
					  </div>
					  <div class="center">
						  <ul class="social-icons circle">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						  </ul>
					  </div>
					</div>
				  </div>
				</div>

				<div class="col-lg-4 col-md-4">
				  <div class="agent shadow-hover">
					<a href="#" class="agent-img">
					  <div class="img-fade"></div>
					  <div class="button alt agent-tag">24 Properties</div>
					  <img src="images/1197x1350.png" alt="" />
					</a>
					<div class="agent-content">
					  <div class="agent-details">
						<h4><a href="#">Jim Sparks</a></h4>
						<p><i class="fa fa-tag icon"></i>Buying Agent</p>
						<p><i class="fa fa-envelope icon"></i>jdoe@homely.com</p>
						<p><i class="fa fa-phone icon"></i>(123) 456-6789</p>
					  </div>
					  <div class="center">
						  <ul class="social-icons circle">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						  </ul>
					  </div>
					</div>
				  </div>
				</div>
			</div><!-- end row -->

			<div class="pagination">
				<div class="center">
					<ul>
					  <li><a href="#" class="button small grey"><i class="fa fa-angle-left"></i></a></li>
					  <li class="current"><a href="#" class="button small grey">1</a></li>
					  <li><a href="#" class="button small grey">2</a></li>
					  <li><a href="#" class="button small grey">3</a></li>
					  <li><a href="#" class="button small grey"><i class="fa fa-angle-right"></i></a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>

		</div><!-- end col -->

		<div class="col-lg-4 col-md-4 sidebar">

			<div class="widget widget-sidebar recent-properties">
			  <h4><span>Recent Properties</span> <img src="images/divider-half.png" alt="" /></h4>
			  <div class="widget-content">

				<div class="recent-property">
				  <div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4"><a href="#"><img src="images/1837x1206.png" alt="" /></a></div>
					<div class="col-lg-8 col-md-8 col-sm-8">
					  <h5><a href="#">Beautiful Waterfront Condo</a></h5>
					  <p><strong>$1,800</strong> Per Month</p>
					</div>
				  </div>
				</div>

				<div class="recent-property">
				  <div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4"><a href="#"><img src="images/1837x1206.png" alt="" /></a></div>
					<div class="col-lg-8 col-md-8 col-sm-8">
					  <h5><a href="#">Family Home</a></h5>
					  <p><strong>$500,000</strong></p>
					</div>
				  </div>
				</div>

				<div class="recent-property">
				  <div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4"><a href="#"><img src="images/1837x1206.png" alt="" /></a></div>
					<div class="col-lg-8 col-md-8 col-sm-8">
					  <h5><a href="#">Ubran Apartment</a></h5>
					  <p><strong>$1,800</strong> Per Month</p>
					</div>
				  </div>
				</div>

			  </div><!-- end widget content -->
			</div><!-- end widget -->

			<div class="widget widget-sidebar recent-properties">
			  <h4><span>Quick Links</span> <img src="images/divider-half.png" alt="" /></h4>
			  <div class="widget-content box">
				<ul class="bullet-list">
				  <li><a href="#">Featured Properties</a></li>
				  <li><a href="#">Featured Agents</a></li>
				  <li><a href="#">Terms & Conditions</a></li>
				  <li><a href="#">Privacy Policy</a></li>
				  <li><a href="#">Frequently Asked Questions</a></li>
				  <li><a href="#">Login</a></li>
				  <li><a href="#">Submit a Property</a></li>
				</ul>
			  </div><!-- end widget content -->
			</div><!-- end widget -->

		</div><!-- end col -->

	</div><!-- end row -->
  </div><!-- end container -->
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

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 widget footer-widget">
                <a class="footer-logo" href="index.html"><img src="images/logo1.png" alt="Homely" /></a>
                <p>Clearing Obstacles From Your PAth To Your Home</p>
                <div class="divider"></div>
                <ul class="social-icons circle">
                  <li><a href="https://www.facebook.com/PrimeAmericaNYC/"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://www.instagram.com/primeamericanyc/"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="https://twitter.com/primeamericanyc"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.linkedin.com/company/prime-america-real-estate/"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="https://www.youtube.com/channel/UCyPZg0vu-tF49jflQyI8OTQ"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-4 widget footer-widget">
                <h4><span>Get In Touch</span> <img src="images/divider-half.png" alt="" /></h4>
                <p>131 Irving Ave<br/>
                Brooklyn, NY 11237<br/>
                United States
                </p>
                <p>
                <b class="open-hours">Open Hours</b><br/>
                Mondy - Friday: 10 am - 8 pm<br/>
                Saturday: 10 am - 10pm<br/>
                Sunday: 10am - 10pm
                </p>
                <p class="footer-phone"><i class="fa fa-phone icon"></i> (718) 975-1107</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 widget footer-widget newsletter">
                <h4><span>Newsletter</span> <img src="images/divider-half.png" alt="" /></h4>
                <p><b>Subscribe to our newsletter!</b> We send our exclusive listings to our email subscribers before anyone else </p>
                <form class="subscribe-form" method="post" action="#">
                    <input type="text" name="email" value="Your email" />
                    <input type="submit" name="submit" value="SEND" class="button small alt" />
                </form>
            </div>
        </div><!-- end row -->
    </div><!-- end footer container -->
</footer>

<div class="bottom-bar">
    <div class="container">
    © 2017  |  Prime America Real Estate  |  All Rights Reserved
    </div>
</div>

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
