 <!-- Header-->
 <header class="bg-dark py-5" id="main-header">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder"><?php echo $_settings->info('home_quote') ?></h1>
            <p class="lead fw-normal text-white-50 mb-0"></p>
        </div>
    </div>
</header>
<!-- Section-->
<style>
    .book-cover{
        object-fit:contain !important;
        height:auto !important;
    }
    
    .video-container {
  position: relative;
  width: 100%;
  padding-bottom: 56.25%; /* This creates a 16:9 aspect ratio */
  height: 0;
}

.video-container iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

/* line 231, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_bradcam.scss */
.book_apointment_area .popup_box {
  width: 100% !important;
}

/* line 2, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_reason.scss */
.reson_area .single_reson {
  position: relative;
}

@media (max-width: 767px) {
  /* line 2, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_reason.scss */
  .reson_area .single_reson {
    margin-bottom: 30px;
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  /* line 2, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_reason.scss */
  .reson_area .single_reson {
    margin-bottom: 40px;
  }
}

/* line 10, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_reason.scss */
.reson_area .single_reson .thum {
  margin-right: 84px;
  padding-bottom: 84px;
}

/* line 13, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_reason.scss */
.reson_area .single_reson .thum .thum_1 {
  -webkit-border-radius: 9px;
  -moz-border-radius: 9px;
  border-radius: 9px;
  overflow: hidden;
}

/* line 16, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_reason.scss */
.reson_area .single_reson .thum .thum_1 img {
  width: 100%;
  -webkit-border-radius: 9px;
  -moz-border-radius: 9px;
  border-radius: 9px;
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}

/* line 25, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_reason.scss */
.reson_area .single_reson .help_content {
  background: #fff;
  position: absolute;
  bottom: 0;
  right: 0;
  -webkit-border-radius: 7px;
  -moz-border-radius: 7px;
  border-radius: 7px;
  -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
  padding: 47px 40px 33px 40px;
  left: 46px;
}

/* line 34, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_reason.scss */
.reson_area .single_reson .help_content h4 {
  font-size: 20px;
  font-weight: 400;
}

/* line 38, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_reason.scss */
.reson_area .single_reson .help_content p {
  margin-top: 21px;
  margin-bottom: 30px;
}

/* line 42, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_reason.scss */
.reson_area .single_reson .help_content .read_more {
  font-size: 16px;
  color: rgb(255,193,7);
  text-transform: capitalize;
  position: relative;
  display: inline-block;
  padding-left: 68px;
}

/* line 49, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_reason.scss */
.reson_area .single_reson .help_content .read_more::before {
  position: absolute;
  left: 0;
  top: 50%;
  width: 36px;
  height: 2px;
  background: rgb(0,123,255);
  content: '';
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}

/* line 60, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_reason.scss */
.reson_area .single_reson .help_content .read_more:hover {
  color: rgb(0,123,255);
}

/* line 62, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_reason.scss */
.reson_area .single_reson .help_content .read_more:hover::before {
  background: rgb(0,123,255);
}

/* line 70, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_reason.scss */
.reson_area .single_reson:hover .thum img {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}
.offers_area .single_offers:hover .about_thumb img {
  width: 100%;
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}

</style>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <?php require_once('welcome_content.html') ?>
    </div>
</section>
<section class="py-5">
<div class="container px-4 px-lg-5 mt-5">
  <div class="video-container">
    <iframe src="https://www.youtube.com/embed/LtA_NHFyBOA"></iframe>
  </div>
</div>
</section>
<section class="py-5"> 
<div class="reson_area section_padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section_title text-center mb-55">
            <h2><span>Reason for Helping</span></h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
          <div class="single_reson">
            <div class="thum">
              <div class="thum_1">
                <img src="uploads/events/118778966_3233153886760874_94384963882547882_n.jpg" alt="">
              </div>
            </div>
            <div class="help_content">
              <h4>Relieving the Hunger</h4>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print.</p>
              <a href="#" class="read_more">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_reson">
            <div class="thum">
              <div class="thum_1">
                <img src="uploads/events/121876339_3359515714124690_3836574183703052677_n.jpg" alt="">
              </div>
            </div>
            <div class="help_content">
              <h4>Diabetes</h4>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print.</p>
              <a href="#" class="read_more">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_reson">
            <div class="thum">
              <div class="thum_1">
                <img src="uploads/events/144758028_3643188682424057_5060674537146502743_n.jpg" alt="">
              </div>
            </div>
            <div class="help_content">
              <h4>Environment</h4>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print.</p>
              <a href="pages/celebrating__earthday.php" class="read_more">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_reson">
            <div class="thum">
              <div class="thum_1">
                <img src="uploads/events/198058116_3998719396870982_20101839155678546_n.jpg" alt="">
              </div>
            </div>
            <div class="help_content">
              <h4>Vision</h4>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print.</p>
              <a href="#" class="read_more">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_reson">
            <div class="thum">
              <div class="thum_1">
                <img src="uploads/events/198568953_3998720423537546_5265251001725059098_n.jpg" alt="">
              </div>
            </div>
            <div class="help_content">
              <h4>Child Hood Cancer</h4>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print.</p>
              <a href="#" class="read_more">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
