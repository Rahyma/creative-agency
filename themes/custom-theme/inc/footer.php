<footer class="footer-main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="part1">
        
            <a href="<?php echo $path;?>">
              <img alt="" src="assets/images/logo1-white.webp">
            </a>
                 <p>GhostWriting Xpert is the brainchild of an English literature graduate struggling to find a good job. 
                   Our journey started as a single person helping out another friend and now, our team includes over 500 members.
                    We have been blessed with amazing clients and it is due to their help and our team's dedication that we've finished over four thousand projects.</p>
                       
          
        </div>

      </div>
      <div class="col-md-2">
        <div class="part2">
          <h3>Services</h3>
          <ul>
                <li><a href="<?php echo $path;?>ghost-writing">Ghostwriting Services</a></li>
                <li><a href="<?php echo $path;?>editing">Editing</a></li>
                <li><a href="<?php echo $path;?>publishing">Publishing</a></li>
                <li><a href="<?php echo $path;?>proofreading">Proof Reading</a></li>
                <li><a href="<?php echo $path;?>audio-book">Audio Book</a></li>
                <li><a href="<?php echo $path;?>book-cover-design">Book Cover Design</a></li>
                <li><a href="<?php echo $path;?>digital-marketing">Digital marketing</a></li>
                <li><a href="<?php echo $path;?>video-trailer">Video Trailer</a></li>
                
              </ul>
        </div>
      </div>
      <div class="col-md-2">
        <div class="part3">
          <h3>Genre</h3>
          <ul>
              <li><a href="<?php echo $path;?>fiction">Fiction</a></li>
              <li><a href="<?php echo $path;?>non-fiction">Non Fiction</a></li>
              <li><a href="<?php echo $path;?>biography">Biography</a></li>
              <li><a href="<?php echo $path;?>children-book">Children Book</a></li>
              <li><a href="<?php echo $path;?>informative">Informative</a></li>
              <li><a href="<?php echo $path;?>autobiography">Autobiography</a></li>
              <li><a href="<?php echo $path;?>memoir">Memoir</a></li>
              <li><a href="<?php echo $path;?>business-book">Business Book</a></li>
          </ul>

        </div>
      </div>
      <div class="col-md-2">
       
          <h3>Company</h3>
          <ul>
                <li><a href="<?php echo $path;?>about">About Us</a></li>
                <li><a href="<?php echo $path;?>testimonials">Testimonials</a></li>
                <li><a href="<?php echo $path;?>authors">Authors</a></li>
                <li><a href="<?php echo $path;?>careers">Careers</a></li>
                <li><a href="<?php echo $path;?>contact">Contact Us</a></li>
                <li><a href="<?php echo $path;?>faqs">FAQs</a></li>
          </ul>
         
        
      </div>
      <div class="col-md-3">
        <div class="part4">
          <h3>About</h3>
          <ul>
            
            
            <li><a href="mailto:info@ghostwritingxpert.com">info@ghostwritingxpert.com</a></li>
            <li><a href="tel:+1 (650) 410‑8004">US +1 (650) 410‑8004</a></li>
            <li><a href="tel:+44 20 3807 0063">UK +44 20 3807 0063</a></li>
            <li><a href="https://goo.gl/maps/ij16h4mzAKzHykVCA">CA, San Francisco - Mid-Market
              1390 Market Street Suite 200
              San Francisco, 94102</a></li>
            
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
  
    <div class="row">
      <div class="col-md-12 text-center p-0">
        

         
          <img src="<?php echo $basesurl;?>images/card-brands.webp" alt="">


        </div>
        <div class="col-md-6">
            <h6> © GhoostWritingXpert 2021. All Rights Reserved.</h6>
        </div>
        <div class="col-md-6">
            <ul>
              <li><a href="<?php echo $path;?>terms-conditions">Terms of Services</a></li>
            
              <li><a href="<?php echo $path;?>privacy-policy">Privacy Policy</a></li>
            </ul>
        </div>
      </div>
    

  </div>
  </div>
</footer>


<div class="floatbutton">
  <div class="btns_wrap">
    <a href="javascript:;" class="chat_wrap" onclick="setButtonURL();">
      <span class="icoo"><i class="fa fa-comment"></i></span>
      <span>Chat With Us</span>
    </a>
    <a href="tel:+1 (650) 410‑8004" class="call_wrap">
      <span class="icoo"><i class="fa fa-phone"></i></span>
      <span> +1 (650) 410‑8004 </span>
    </a>
  </div>
  <div class="clickbutton"><div class="crossplus"> LET'S GET STARTED</div></div>
  <div class="banner-form">
    <h3>Sign Up Now &  <br><Strong>Let’s Get Started</Strong></h3>
    <div class="banform">
      <div class="container">
        <div class="row">
          <div class="ban-form">
            <form class="cmxform" id="bannerform"  method="POST" action="webpages/bottomFormController.php">
              <div class="row">
                <div class="col-lg-12">
                  <div class="fldset">
                    <input onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" id="username" name="Name" minlength="2" type="text" placeholder="Enter your name *" required />
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="fldset">
                    <input id="cemail" type="email" name="Email" placeholder="Enter email here *" required>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="fldset">
                      <input name="Number" id="phone-country" required="" type="text" minlength="10" maxlength="10" autocomplete="off" onkeypress="return ((event.charCode >= 48 &amp;&amp; event.charCode <= 57) )" placeholder="Number">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="fldset">
                    <textarea name="Message" id="" rows="7" placeholder="Talk About Your Project"></textarea>
                  </div>
                </div>
                
                <div class="col-lg-12">
                  <div class="fldset">
                    <input name="submit" type="submit" placeholder="Connect With Us" required />
                     <script type="text/javascript">
                  document.getElementById('location').value = window.location.href;
                  </script>
                  <input type="hidden" name="hiddencapcha" value="">
                  <input type="hidden" name="ctry" value="">
                  <input type="hidden" name="pc" value="">
                  <input type="hidden" name="cip" >
                  <input type="hidden" id="location" name="locationURL" value="Floating Form Location" />
                  <input type="hidden" id="location" name="Form_name" value="Floating Form" />
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="<?php echo $basesurl;?>js/mlib.js"></script>
<script src="<?php echo $basesurl;?>js/functions.js"></script>