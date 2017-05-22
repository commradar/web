<?php $title = "Commradar - Home"; ?>

<?php require_once("header.php"); ?>

   <!-- intro section -->
  <div class="intro blue-section clearfix">
    <div class="container">
      <!-- caption -->
      <div class="row intro-caption narrow-section text-center">

        <div class="slides-container">
          <div class="slide slide-active" id="slide1">
            <h3>If you are a Marketing agency</h3>
            <p>
              You should be interested in checking out the most advanced advertising expenditure tool for Greek Speaking ads.
            </p>
          </div>
          <div class="slide" id="slide2">
            <h3>If you are a Company Director or Brand</h3>
            <p>
              You should be interested in learning more about the competition than you already know.
            </p>
          </div>
        </div>

        <a class="btn btn-default btn-accent" href="tour.php">Take the tour</a>
		    <a class="btn btn-default btn-orange takelook-btn" href="https://youtu.be/LhTS6fKmdR4">See Live Demo</a>
      </div>
      <!-- end caption -->
    </div>
  </div>
  <!-- end intro section -->
  <div class="main">
    <!-- services section -->
    <div id="about" class="services section white-section clearfix text-center">
      <div class="container">
        <div class="row section-head">
          <div class="col-md-8 col-md-offset-2">
            <!--<h3>Whether you are a marketing <br>agency or retailer</h3>-->
            <p>
			         If you are a media house, our tools can help you track advertisers and thousands of potential
               clients in Press, Radio, outdoor and Online Advertising.
			      </p>
          </div>
        </div>

      </div>
    </div>
    <!-- end services section -->
    <!-- image-with-text section -->
    <div class="image-with-text section white-section clearfix">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="img-wrapper">
              <img src="images/preview.gif">
            </div>
          </div>
          <div class="col-md-5">
            <div class="caption">
              <h4>Online platform</h4>
              <p class="subheading">Our online platform for advertising expenditure is the most advanced advertising expenditure tool in the market.</p>
              <p>Users can see their brands' exposure in the market and instantly compare it to the competition. If your brand or product is in a very competitive market and you want to know more about your competitor's Marketing actions, click to learn more. </p>
				      <a href="https://youtu.be/LhTS6fKmdR4" class="btn btn-transparent takelook-btn">Take a Look</a>
			</div>
          </div>
        </div>
      </div>
    </div>
    <!-- end image-with-text section -->


	<!-- newsletter section -->
    <div id="contact" class="newsletter section blue-section clearfix">
      <div class="container">
        <div class="row section-head">
          <div class="col-md-12 text-center">
            <h3><b>Get access to our online expenditure platform</b></h3>
			<br>
		  </div>
		  <div class="row">
  			<div class="col-md-7">
  				<div class="col-md-6">
  					<select class="form-control" id="usertype">
  						<option value="0">--Please select--</option>
  						<option value="Advertiser">Advertiser</option>
  						<option value="Agency">Agency</option>
  						<option value="Media Owner">Media Owner</option>
  					</select>
  				</div>
  				<div class="col-md-6">
  					<input type="text" class="form-control" placeholder="Enter email address" id="useremail" />
  				</div>
          <div class="col-md-12">
            <h4 id="newsletter-msg" class="text-center"></h4>
          </div>
  				<div class="col-md-12">
  					<button class="btn btn-newsletter" id="newsletter-submit">Submit</button>
  				</div>

  			</div>
  			<div class="col-md-5">
  				<p>
            You will have access to thousands of advertisers, you will add value to
            your services. Enter your email and we will contact you.
          </p>
  			</div>
		  </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end newsletter section -->

    <!-- faqs section -->
    <div class="faqs section white-section">
      <div class="container">
        <div class="row section-head">
          <div class="col-md-8 col-md-offset-2 text-center">
            <h3>No other Platform gives you so much data & insights</h3>
            <p>Discover why our technology makes our clients’ work easier.</p>
          </div>
        </div>
        <div class="row">
          <!-- left column -->
          <div class="col-md-7">
            <!-- accordion -->
            <div class="accordion" id="accordion">
              <!-- accordion item -->
              <div class="panel">
                <div class="panel-title">
                  <a href="#collapse1" data-toggle="collapse" data-parent="#accordion">
                    <span></span>Real-Time Market Intelligence</a>
                </div>
                <div class="panel-collapse collapse in" id="collapse1">
                  <div class="text">
                    <p>
					Uncover what your client's competition is doing instantly, look at Media Plans, look at images of their advertising, learn when how and where they are advertising.
					</p>
                  </div>
                </div>
              </div>
              <!-- accordion item -->
              <div class="panel">
                <div class="panel-title">
                  <a class="collapsed" href="#collapse2" data-toggle="collapse" data-parent="#accordion">
                    <span></span>More Client Leads</a>
                </div>
                <div class="panel-collapse collapse" id="collapse2">
                  <div class="text">
                    <p>
					Identify competitors relevant to your industry and reach out to them with a targeted, relevant proposals. By seeing their exact ad creatives, landing pages, and overall strategy, you can develop a pitch that's guaranteed to impress.
					</p>
                  </div>
                </div>
              </div>
              <!-- accordion item -->
              <div class="panel">
                <div class="panel-title">
                  <a class="collapsed" href="#collapse3" data-toggle="collapse" data-parent="#accordion">
                    <span></span>Support Business Proposals</a>
                </div>
                <div class="panel-collapse collapse" id="collapse3">
                  <div class="text">
                    <p>
					Show that you understand your clients competition with real time data about their communication. Researching data using our online tool can help you understand what, when and how much your client's competitors are spending on Marketing.
					</p>
                  </div>
                </div>
              </div>
              <!-- accordion item -->
              <div class="panel">
                <div class="panel-title">
                  <a class="collapsed" href="#collapse4" data-toggle="collapse" data-parent="#accordion">
                    <span></span>Discover Competitors you might have never heard of</a>
                </div>
                <div class="panel-collapse collapse" id="collapse4">
                  <div class="text">
                    <p>
                      Our reports provide a complete and comprehensive overview of the market. You might see competitors you never heard of, or campaigns that you might not be aware of, but are still affecting your position in the market.
					          </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end accordion -->
          <!-- right column -->
          <div class="col-md-5 text-center">
            <div class="img-wrapper">
              <img src="images/feature-circle.png">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end faqs section -->
    <!-- image-banner section -->
    <div class="image-banner section white-section clearfix text-center">
      <div class="container">
        <div class="row section-head">
          <div class="col-md-8 col-md-offset-2">
            <h3>Track any advertising campaign</h3>
            <p>
			See actual ads, evaluate competitor advertising and submit top notch reports right out of our platform into your client's monitors.
			</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="img-wrapper">
              <img src="images/portal.png" >
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end image-banner section -->


    <div class="clients section gray-section">
      <div class="container">
        <div class="row section-head">
          <div class="col-md-10 col-md-offset-1 text-center">
            <br>
            <h3>How we do it?</h3>
            <p>
              We are covering advertising expenditure across traditional and digital media. We also monitor and store ad copy for thousands of brands and advertisers across all media.
			      </p>
          </div>
        </div>
        <div class="row odd">
          <!-- client -->
          <div class="col-md-3">
            <div class="item clearfix">
              <div class="text">
                <div class="feature-icon">
                  <i class="fa fa-newspaper-o"></i>
                </div>
                <h3>Press</h3>
                We cover all print material published, magazines, newspapers and special editions.
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="item clearfix">
              <div class="text">
                <div class="feature-icon">
                  <i class="fa fa-volume-down"></i>
                </div>
                <h3>Radio</h3>
                We monitor all the radio stations covering 100% of the radio advertising market.
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="item clearfix">
              <div class="text">
                <div class="feature-icon">
                  <i class="fa fa-sign-out"></i>
                </div>
                <h3>Outdoor</h3>
                We provide 100% coverage of the outdoor advertising market.
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="item clearfix">
              <div class="text">
                <div class="feature-icon">
                  <i class="fa fa-globe"></i>
                </div>
                <h3>Web</h3>
                We measure online advertising expenditure on local websites.
              </div>
            </div>
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- end container -->
    </div>


    <!-- partners section -->
    <div class="partners section white-section">
      <div class="container">
        <!-- partners slider -->
        <div class="partners-slider owl-carousel">
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/audi.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/carrefour.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/cytamobile_vodafone.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/cytavision.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/euc.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/european_university.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/fage.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/ikea.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/kerrygold.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/kleenex.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/leroy_merlin.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/lidl.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/lvmh.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/marks_and_spencer.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/mcdonalds.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/mercedes_benz.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/philips.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/pizzahut.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/procter_and_gamble.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/roberto_cavalli.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/samsung.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/starbucks.png">
            </a>
          </div>
          <!-- partner -->
          <div class="partner">
            <a href="#">
              <img alt="" class="img-responsive" src="images/clients/uclan.png">
            </a>
          </div>
        </div>
        <!-- partners slider -->
      </div>
    </div>
    <!-- end partners section -->

  </div>
  <!-- end main -->

 <?php require_once("footer.php"); ?>

</body>
</html>

<!-- Localized -->
