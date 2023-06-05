<?php 


if ($_SERVER['HTTP_HOST'] == "localhost") {
    $folder_name = ""; $path = 'https://localhost/custom-theme-wp/'.$folder_name;
} else {
  $folder_name = ""; $path = 'https://'.$_SERVER['HTTP_HOST'].''.$folder_name.'/';
}
$srcurl = "inc/";
$basesurl = "wp-content/themes/custom-theme/assets/";

?>

<footer class="footer-main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="part1">
          <img src="<?php echo $basesurl;?>images/logo.png" alt="">

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam velit sequi labore.Lorem ipsum dolor sit
          amet,
          consectetur adipisicing elit. Aperiam velit sequi labore.Lorem ipsum dolor sit amet, consectetur adipisicing
          elit. Aperiam velit sequi labore.
        </p>

      </div>

      </div>
      <div class="col-md-3">
        <div class="part2">
          <h5>PAGES</h5>
          <p> How to work</p>

          <p>About us</p>

          <p>Contact us</p>

          <p>Media</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="part3">
          <h5>SERVICES</h5>
          <p> How to work</p>

          <p>About us</p>

          <p>Contact us</p>

          <p>Media</p>

        </div>
      </div>
      <div class="col-md-3">
        <div class="part4">
        <h5>FOLLOW US ON</h5>
        <ul>

          <li><i class="fa fa-google-plus"></i></li>
          <li><i class="fa fa-pinterest-p"></i></li>
          <li><i class="fa fa-vimeo"></i> </li>
          <li><i class="fa fa-facebook-square"></i>
          </li>
          <li><i class="fa fa-twitter"></i>
          </li>
         
          
          <li><i class="fa fa-wifi"></i>

          </li>
        </ul>
      </div></div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center p-0">
        <div class="footer-bottom">
          Copyright © PSDFreebies.com All Right Reserved.
        </div>
      </div>
    </div>

  </div>


</footer>



<?php
wp_footer();  // wp_footer() like footer.php js links
?>
</body>

</html>
