<div class="modal fade" id="contactform" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal">
         <span aria-hidden="true">&times;</span>
         <span class="sr-only">Close</span>
       </button>
       <h3 class="modal-title text-center" id="myModalLabel">Get in touch with us</h3>
     </div>
     <div class="modal-body">
        <div class="form-horizontal">
          <div class="form-group">
            <label  class="col-sm-2 control-label" for="username">Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="username" placeholder="Enter your name"/>
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-2 control-label" for="useremail">Email</label>
            <div class="col-sm-9">
              <input type="text" class="form-control useremail" placeholder="Enter email address"/>
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-2 control-label" for="userphone">Phone</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="userphone" placeholder="Enter phone number"/>
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-2 control-label" for="usercompany">Company</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="usercompany" placeholder="Enter your company name"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-4 text-left">
              <button class="btn btn-primary" type="button" id="contactform-btn">Submit</button>
            </div>
          </div>
          <div id="contactform-msg"></div>
        </div>
      </div>
    </div>
  </div>
</div>


<footer>
 <div class="social-wrapper">
   <div class="row">
     <div class="col-md-6 footer-info">
       <p><i class="fa fa-map-marker"></i> 10 P Katelari Ave, 2nd floor, Limassol, Cyprus</p>
     </div>
     <div class="col-md-3 footer-info">
       <p><i class="fa fa-phone"></i> +357 25 103933</p>
     </div>
     <div class="col-md-3 footer-info">
       <p><a href="#" style="color: #fff;" data-toggle="modal" data-target="#contactform">Contact</a></p>
     </div>
   </div>
   <div class="row footer-box">
     <div class="col-md-1"></div>
     <div class="col-md-3">
       <p class="footer-title">Enter your contact info below if you want to hear from us.</p>
       <input type="text" class="form-control" id="footerEmail" placeholder="Enter email" style="margin-bottom: 10px;">
       <input type="text" class="form-control" id="footerPhone" placeholder="Enter phone number" style="margin-bottom: 10px;">
       <button class="btn btn-info footer-btn-submit" id="footer-btn-submit">Submit</button>
       <div id="footer-msg"></div>
     </div>
     <div class="col-md-1"></div>
     <div class="col-md-4">
       <p class="footer-title">Who we are?</p>
       <p class="footer-info">
         CommRadar is the leading source of advertising expenditure data in the Greek Speaking
         Market. We monitor advertising expenditure across all major media, and we have been in
         business for more than a decade.
       </p>
     </div>
     <div class="col-md-3">
       <p class="footer-title">Our Tools</p>
       <ul class="footer-sitemap">
          <li><a href="http://www.commradar.com/system/user/">C Client Login</a></li>
          <li><a href="http://www.commradar.com/system/user/">AE Client Login</a></li>
          <li><a href="http://outdoor.mymapcy.com/login/?next=/">Outdoor Planner</a></li>
          <li><a href="#">Team</a></li>
       </ul>
     </div>
   </div>
   <ul class="list-unstyled">
     <li>
       <a href="https://www.facebook.com/CommRadar-548344958694304">
         <i class="fa fa-2x fa-facebook"></i>
       </a>
     </li>
     <li>
       <a href="https://www.youtube.com/channel/UCh3Tbs1o0GFbKUP_bGfNbsA">
         <i class="fa fa-2x fa-youtube"></i>
       </a>
     </li>
   </ul>
 </div>
</footer>

<script src="js/vendors/min/jquery.min.js"></script>
<script src="js/vendors/min/bootstrap.min.js"></script>
<script src="js/vendors/min/jquery.easing.min.js"></script>
<script src="js/vendors/min/jquery.waypoints.min.js"></script>
<script src="js/vendors/min/modernizr.min.js"></script>
<script src="js/vendors/min/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script src="js/youtube-popup.js"></script>
<script src="js/featherlight.min.js"></script>
<script src="http://serkanyersen.github.io/ifvisible.js/ifvisible.js"></script>

<script type="text/javascript">
  $(function(){
    $(".slide-active").css("display", "block");
    setInterval(function(){
      var firstelem = $(".slide-active");
      var secondelem = $(".slides-container div").not('.slide-active');

      firstelem.fadeOut(300).removeClass("slide-active");
      secondelem.delay(300).fadeIn(300).addClass("slide-active");
    }, 5000);

    $(".seemore-btn").YouTubePopUp();
    $(".takelook-btn").YouTubePopUp();
    $(".navlink1").YouTubePopUp();

    /*
    $(".slide-active").css("display", "block");
    setInterval(function(){
      var firstelem = $(".slide-active");
      var secondelem = $(".slides-container div").not('.slide-active');
      firstelem.fadeOut(300).removeClass("slide-active");
      secondelem.delay(300).fadeIn(300).addClass("slide-active");
    }, 5000);
    */

    function isEmail(email) {
      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      return regex.test(email);
    }

    $("#newsletter-submit").on("click", function(){
      $("#newsletter-msg").html("");
      var usertype = $("#usertype").val();
      var useremail = $("#useremail").val();
      var formtype = "newsletter";

      if(isEmail(useremail) && usertype != "0") {
        $.ajax({
          type: "POST",
          url: "sendemail.php",
          data: {
            formtype: formtype,
            usertype: usertype,
            useremail: useremail
          },
          success: function() {
            $("#newsletter-msg").html("Thanks for contacting us. We will get back to you shortly.");
            $("#useremail").val("");
          },
          error: function() {
          }
        });
      }
      else {
        $("#newsletter-msg").html("Please fill the form correctly.");
      }
    });



    $("#footer-btn-submit").on("click", function(){
      $("#footer-msg").html("");
      var footerEmail = $("#footerEmail").val();
      var footerPhone = $("#footerPhone").val();
      footerPhone = $.trim(footerPhone);
      var formtype = "footerform";

      if(isEmail(footerEmail) && footerPhone != "") {
        $.ajax({
          type: "POST",
          url: "sendemail.php",
          data: {
            formtype: formtype,
            footerEmail: footerEmail,
            footerPhone: footerPhone
          },
          success: function() {
            $("#footer-msg").html("Thanks for contacting us. We will get back to you shortly.");
            $("#footerEmail").val("");
            $("#footerPhone").val("");
          },
          error: function() {
          }
        });
      }
      else {
        $("#footer-msg").html("Please fill the form correctly.");
      }
    });



    $("#contactform-btn").on("click", function(){
      $("#contactform-msg").html("");
      var username = $("#username").val();
      var useremail = $(".useremail").val();
      var userphone = $("#userphone").val();
      var usercompany = $("#usercompany").val();

      var formtype = "contactform";

      if(isEmail(useremail) ) {
        $.ajax({
          type: "POST",
          url: "sendemail.php",
          data: {
            formtype: formtype,
            username: username,
            useremail: useremail,
            userphone: userphone,
            usercompany: usercompany
          },
          success: function() {
            $("#contactform-msg").html("Thanks for contacting us. We will get back to you shortly.");
            $("#username").val("");
            $("#useremail").val("");
            $("#userphone").val("");
            $("#usercompany").val("");
          },
          error: function() {
          }
        });
      }
      else {
        $("#contactform-msg").html("Please fill the form correctly.");
      }

    });




  });
</script>
