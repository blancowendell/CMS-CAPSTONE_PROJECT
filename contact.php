<?php include 'sendemail.php'; ?>
<body>

<?php echo $alert; ?>
<div class="container">
  <center>
  <h2>Contact us</h2>
  <p>Please send us your struggles and we happy to serve you in our bottom of our heart</p>
  </center>
</div>
<div class="container">
  <div class="form-container">
  <div class="contact-section">
  <div class="contact-info">
      <div><i class="fas fa-map-marker-alt"><a href="https://goo.gl/maps/m8VuYNb3QYhxR2xm7"></i>Visit Our Club House</div></a>
      <div><i class="fas fa-envelope"></i>lionsclubsanpedrod301a2@gmail.com</div>
      <div><i class="fas fa-phone"></i>089487374092</div>
      <div><i class="fas fa-clock"></i>Friday 6:00 PM - 10:00 PM</div>
  </div>
  <div class="contact-form">
      <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
      </form>
  </div>
</div>
  </div>
</div>
<div class="container">
 <center>
  <h2>Our Club House</h2>
  <p>Our Members are here every friday evening for our meeting</p> 
 </center>
</div> 

<div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=612&amp;height=559&amp;hl=en&amp;q=Sanpedro lions club&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections Game</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:559px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:559px;}.gmap_iframe {height:559px!important;}</style></div>
</body>

<style>
  .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .section_title {
      text-align: center;
      margin-bottom: 55px;
    }

    .section_title h2 span {
      font-weight: bold;
    }

    .form-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    .form-container h2 {
      margin-bottom: 10px;
    }

    .form-container label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    .form-container input[type="name"],
    .form-container input[type="email"],
    .form-container input[type="message"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .form-container input[type="submit"] {
      background-color: rgb(255, 193, 7);
      color: black;
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    .form-container textarea{
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .form-container input[type="submit"]:hover {
      background-color: rgb(0, 123, 255);
    }
  .body{
    background: url(7.jpg) no-repeat;
    background-size: cover;
    background-position: center center;
}
  .contact-section{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.contact-info{
    color: black;
    max-width: 500px;
    line-height: 65px;
    padding-left: 50px;
    font-size: 18px;
    font-weight: bolder;
}

.contact-info i{
    margin-right: 20px;
    font-size: 25px;
}

.contact-form{
    max-width: 700px;
    margin-right: 50px;
}

.contact-info, .contact-form{
    flex: 1;
}

.contact-form h2{
    color: black;
    text-align: center;
    font-size: 35px;
    text-transform: uppercase;
    margin-bottom: 30px;
}

.contact-form .text-box{
    background: #000;
    color: rgb(238, 204, 14);
    border: none;
    width: calc(50% - 10px);
    height: 50px;
    padding: 12px;
    font-size: 15px;
    border-radius: 5px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    opacity: 0.9;
}

.contact-form .text-box:first-child{
    margin-right: 15px;
}

.contact-form textarea{
    background-color: #000;
    color: #fff;
    border: none;
    width: 100%;
    padding: 12px;
    font-size: 15px;
    min-height: 200px;
    max-height: 400px;
    resize: vertical;
    border-radius: 5px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    opacity: 0.9;
}

.contact-form .send-btn{
    float: right;
    background: #007aed;
    color: #fff;
    border: none;
    width: 120px;
    height: 40px;
    font-size: 15px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
    cursor: pointer;
    transition: 0.3s;
    transition-property: background;
}

.contact-form .send-btn:hover{
    background: rgb(238, 204, 14);
}


.contact-form .home-btn{
    float: left;
    background: #007aed;
    color: #fff;
    border: none;
    width: 120px;
    height: 40px;
    font-size: 15px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
    cursor: pointer;
    transition: 0.3s;
    transition-property: background;
}

.contact-form .home-btn:hover{
    background: rgb(238, 204, 14);
}
@media (max-width: 100%) {
    body {
      background-size: contain;
    }
  }
  

@media screen and (max-width: 950px){
    .contact-section{
        flex-direction: column;
    }

    .contact-info, .contact-form{
        margin: 30px 50px;
    }

    .contact-form h2{
        font-size: 30px 50px;
    }

    .contact-form .text-box{
        width: 100%
    }
}

.alert-success{
    z-index: 1;
    background: #d4edda;
    font-size: 18px;
    padding: 20px 40px;
    min-width: 420px;
    position: fixed;
    right: 0;
    top: 10px;
    border-left: 8px solid #3ad66e;
    border-radius: 4px;
}

.alert-error{
    z-index: 1;
    background: #fff3cd;
    font-size: 18px;
    padding: 20px 40px;
    min-width: 420px;
    position: fixed;
    right: 0;
    top: 10px;
    border-left: 8px solid #ffa502;
    border-radius: 4px;
}
</style>