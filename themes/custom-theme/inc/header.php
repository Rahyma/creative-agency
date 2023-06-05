<?php 


  if ($_SERVER['HTTP_HOST'] == "localhost") {
      $folder_name = ""; $path = 'https://localhost/gwxpert/'.$folder_name;
  } else {
    $folder_name = ""; $path = 'https://'.$_SERVER['HTTP_HOST'].''.$folder_name.'/';
  }

  ?>

  <header class="header-section">
    <nav class="navbar-expand-lg sticky">
      <div class="container">
        <div class="row">
          <div class="col-lg-2">
            <a href="<?php echo $path;?>">
              <img src="<?php echo $basesurl;?>images/logo1-white.gif" alt="">
            </a>

            </button>
          </div>

          <div class="col-lg-7 text-center m-auto">



            <ul class="top">
              <li class="active"><a href="<?php echo $path;?>">Home </a></li>
              <li class="liservices"><a href="javascript:;">Services </a><i class="fa fa-angle-down"></i>
                <ul class="services">
                    <li>
                      <a href="<?php echo $path;?>ghost-writing">
                        <img src="<?php echo $basesurl;?>images/GWX-ghostwriting.webp" alt="">
                        <h5>Ghoost Writing</h5>
                        <p>We offer a wide range of GhostWriting services.</p>
                      </a>
                    </li>

                    <li>
                      <a href="<?php echo $path;?>editing">
                        <img src="<?php echo $basesurl;?>images/GWX-editing.webp" alt="">
                        <h5>Editing</h5>
                        <p>Try our effective Editing services for your book.</p>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo $path;?>publishing">
                        <img src="<?php echo $basesurl;?>images/GWX-publishing.webp" alt="">
                        <h5>Publishing</h5>
                        <p>Let your book Published On Amazon & B&N with our experts.</p>
                      </a>
                    </li>
                    <li class="sidepage">
                      <a href="<?php echo $path;?>proofreading">Proof Reading</a>
                      <a href="<?php echo $path;?>audio-book">Audio Book</a>
                      <a href="<?php echo $path;?>book-cover-design">Book Cover Design</a>
                      <a href="<?php echo $path;?>digital-marketing">Digital Marketing</a>
                      <a href="<?php echo $path;?>video-trailer">Video Trailer</a>
                      <a href="<?php echo $path;?>film">Film Making</a>
                    </li>
                </ul>
              </li>
              <li><a href="<?php echo $path;?>about">About</a></li>
              <li><a href="<?php echo $path;?>testimonials">Testimonials</a></li>
              <li><a href="<?php echo $path;?>authors">Authors</a></li>
              <li><a href="<?php echo $path;?>careers">Careers</a></li>
              <li><a href="<?php echo $path;?>faqs">FAQs</a></li>

            </ul>

          </div>
          <div class="col-md-3 m-auto">
            <a class="orange-btn" href="javascript:;" onclick="setButtonURL();">CHAT WITH US
              <span></span>
              <span></span>
              <span></span>
              <span></span>

            </a>
          </div>
        </div>

      </div>
     
      
        <div class="row">
          <div class="col-lg-12 text-center m-auto">
            <div class="bottom">
              <ul>
                <li><a href="<?php echo $path;?>blog-writing">Blog Writing</a> </li>
                <li><a href="<?php echo $path;?>press-release">Press Release </a></li>
                <li><a href="<?php echo $path;?>speech-writing">Speech Writing</a></li>
                <li><a href="<?php echo $path;?>article-writing">Article Writing</a></li>
                <li><a href="<?php echo $path;?>seo-marketing-service">Seo Marketing Service</a></li>
                <li><a href="<?php echo $path;?>web-content">Web Content</a></li>
                <li class="genre"><a href="javascript:;">Genre</a><i class="fa fa-plus"></i>
                  <ul class="sec-dropdown">
                    <li><a href="<?php echo $path;?>fiction">Fiction</a></li>
                    <li><a href="<?php echo $path;?>non-fiction">Non Fiction</a></li>
                    <li><a href="<?php echo $path;?>biography">Biography</a></li>
                    <li><a href="<?php echo $path;?>children-book">Children Book</a></li>
                    <li><a href="<?php echo $path;?>informative">Informative</a></li>
                    <li><a href="<?php echo $path;?>autobiography">Autobiography</a></li>
                    <li><a href="<?php echo $path;?>memoir">Memoir</a></li>
                    <li><a href="<?php echo $path;?>business-book">Business Book</a></li>
                  </ul>

                </li>
              </ul>

            </div>

          </div>
        </div>
      
    </nav>
  </header>

<div class="mob-header">
  <nav class="navbar-expand-lg sticky">
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
          <a class="navbar-brand" href="<?php echo $path;?>">
            <img src="assets/images/logo1.webp" alt=""> </a>
          <button class="mob-btn">  <i class="fa fa-bars"></i>  </button>
      


<div class="right-navbar">
          <ul class="mob-navbar">
            <li><a href="<?php echo $path;?>">Home </a></li>
            <li><a href="javascript:;">Services <i class="fa fa-angle-down"></i></a>
              
                <ul class="dropdown">
                  <li>  <a href="<?php echo $path;?>ghost-writing">       Ghoost Writing  </a></li>
                  <li>  <a href="<?php echo $path;?>editing">    Editing  </a></li>
                  <li>  <a href="<?php echo $path;?>publishing">    Publishing  </a></li>
                  <li><a href="<?php echo $path;?>proofreading">Proof Reading</a></li>
                  <li><a href="<?php echo $path;?>audio-book">Audio Book</a></li>
                  <li><a href="<?php echo $path;?>book-cover-design">Book Cover Design</a></li>
                  <li><a href="<?php echo $path;?>digital-marketing">Digital Marketing</a></li>
                  <li><a href="<?php echo $path;?>video-trailer">Video Trailer</a></li>
                  <li><a href="<?php echo $path;?>film">Film Making</a></li>
                  
                </ul>
              

            </li>
            
            <li><a href="<?php echo $path;?>testimonials">Testimonials</a></li>
            <li><a href="<?php echo $path;?>about">About</a></li>
            <li><a href="<?php echo $path;?>authors">Authors</a></li>
            <li><a href="<?php echo $path;?>careers">Careers</a></li>
            <li><a href="<?php echo $path;?>faqs">FAQs</a></li>
            <li><a href="javascript:;">Genre<i class="fa fa-angle-down"></i></a>
              <ul class="dropdown">
                <li><a href="<?php echo $path;?>fiction">Fiction</a></li>
                    <li><a href="<?php echo $path;?>non-fiction">Non Fiction</a></li>
                    <li><a href="<?php echo $path;?>biography">Biography</a></li>
                    <li><a href="<?php echo $path;?>children-book">Children Book</a></li>
                    <li><a href="<?php echo $path;?>informative">Informative</a></li>
                    <li><a href="<?php echo $path;?>autobiography">Autobiography</a></li>
                    <li><a href="<?php echo $path;?>memoir">Memoir</a></li>
                    <li><a href="<?php echo $path;?>business-book">Business Book</a></li>
              </ul>
              <li><a href="javascript:;">More<i class="fa fa-angle-down"></i></a>
                <ul class="dropdown">
                  <li><a href="<?php echo $path;?>blog-writing">Blog Writing</a> </li>
                  <li><a href="<?php echo $path;?>press-release">Press Release </a></li>
                  <li><a href="<?php echo $path;?>speech-writing">Speech Writing</a></li>
                  <li><a href="<?php echo $path;?>article-writing">Article Writing</a></li>
                  <li><a href="<?php echo $path;?>seo-marketing-service">Seo Marketing Service</a></li>
                  <li><a href="<?php echo $path;?>web-content">Web Content</a></li>
                </ul>

          </ul>

        </div>
      </div>
    </div>
    </div>
   
  </nav>
</div>