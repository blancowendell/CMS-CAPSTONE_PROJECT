<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
  <style>
    /* Apply basic styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }

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

    .form-container input[type="text"],
    .form-container input[type="email"],
    .form-container input[type="password"] {
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

    .image-container {
      text-align: center;
    }

    .image-container img {
      max-width: 100%;
      height: auto;
      border-radius: 5px;
      object-fit: cover;
      object-position: center;
    }

    .single_reson {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      margin-bottom: 20px;
      text-align: center;
    }

    .single_reson .thum_1 img {
      max-width: 100%;
      height: auto;
      border-radius: 5px;
      object-fit: cover;
      object-position: center;
    }

    .single_reson h4 {
      margin-top: 20px;
      margin-bottom: 10px;
      font-size: 20px;
      font-weight: bold;
    }

    .single_reson p {
      margin-bottom: 20px;
    }

    .single_reson .read_more {
      text-decoration: none;
      color: rgb(255, 193, 7);
      font-weight: bold;
    }

    .single_reson .read_more:hover {
      color: rgb(0, 123, 255);
    }

    .latest_activites_area {
      background-color: #f9f9f9;
      padding: 50px 0;
    }

    .latest_activites_area .video_bg_1 {
      height: 500px;
      position: relative;
    }

    .latest_activites_area .video_bg_1 .popup-video {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 100px;
      color: #fff;
      text-decoration: none;
    }

    .latest_activites_area .activites_info {
      text-align: center;
    }

    .latest_activites_area h3 {
      margin-bottom: 20px;
      font-size: 28px;
      font-weight: bold;
    }

    .latest_activites_area .para_1 {
      margin-bottom: 20px;
    }

    .latest_activites_area .para_2 {
      margin-bottom: 40px;
    }

    .latest_activites_area .boxed-btn4 {
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      background-color: rgb(255, 193, 7);
      color: black;
      text-decoration: none;
    }

    .latest_activites_area .boxed-btn4:hover {
      background-color: rgb(0, 123, 255);
    }

    .popular_causes_area {
      background-color: #fff;
      padding: 50px 0;
    }

    .popular_causes_area h3 {
      margin-bottom: 55px;
      text-align: center;
      font-size: 28px;
      font-weight: bold;
    }

    .popular_causes_area .causes_active .single_cause {
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      margin-right: 20px;
      margin-bottom: 20px;
      text-align: center;
    }

    .popular_causes_area .causes_active .single_cause:last-child {
      margin-right: 0;
    }

    .popular_causes_area .causes_active .thumb img {
      max-width: 100%;
      height: auto;
      border-radius: 5px;
      object-fit: cover;
      object-position: center;
    }

    .popular_causes_area .causes_active .balance {
      margin-top: 15px;
      margin-bottom: 20px;
      font-weight: bold;
    }

    .popular_causes_area .causes_active h4 {
      margin-top: 15px;
      margin-bottom: 10px;
      font-size: 20px;
      font-weight: bold;
    }

    .popular_causes_area .causes_active p {
      margin-bottom: 20px;
    }

    .popular_causes_area .causes_active .read_more {
      text-decoration: none;
      color: rgb(255, 193, 7);
      font-weight: bold;
    }

    .popular_causes_area .causes_active .read_more:hover {
      color: rgb(0, 123, 255);
    }
    .slider_bg_1 {
  background-image: url(uploads/output-onlinepngtools\ \(1\).png);
}

/* line 4, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_slider.scss */
.slider_bg_2 {
  background-image: url(../img/banner/banner2.png);
}

/* line 8, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_slider.scss */
.slider_area .single_slider {
  height: 742px;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}

@media (max-width: 767px) {
  /* line 8, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_slider.scss */
  .slider_area .single_slider {
    height: 500px;
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  /* line 8, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_slider.scss */
  .slider_area .single_slider {
    height: 700px;
  }
}

/* line 20, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_slider.scss */
.slider_area .single_slider .slider_text > span {
  text-transform: capitalize;
  font-size: 26px;
  color: black;
  font-weight: 600;
  font-family: "Open Sans", sans-serif;
  display: block;
}

/* line 28, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_slider.scss */
.slider_area .single_slider .slider_text h3 {
  color: black;
  font-family: "Yeseva One", cursive;
  font-size: 84px;
  margin-top: 6px;
  margin-bottom: 9px;
  line-height: 1.14;
}

@media (max-width: 767px) {
  /* line 28, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_slider.scss */
  .slider_area .single_slider .slider_text h3 {
    font-size: 33px;
    margin-bottom: 20px;
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  /* line 28, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_slider.scss */
  .slider_area .single_slider .slider_text h3 {
    font-size: 55px;
  }
}

/* line 43, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_slider.scss */
.slider_area .single_slider .slider_text p {
  font-size: 16px;
  font-weight: 400;
  color: #FFFFFF;
  margin-bottom: 40px;
  margin-top: 10px;
}

@media (min-width: 992px) and (max-width: 1200px) {
  /* line 43, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_slider.scss */
  .slider_area .single_slider .slider_text p {
    font-size: 16px;
  }
}

@media (max-width: 767px) {
  /* line 43, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_slider.scss */
  .slider_area .single_slider .slider_text p {
    font-size: 16px;
  }
}

    @media (max-width: 768px) {
      .section_title h2 span {
        display: block;
      }

      .image-container img {
        max-width: 90%;
      }
    }

    @media (max-width: 576px) {
      .form-container {
        padding: 10px;
      }

      .single_reson h4 {
        font-size: 18px;
      }

      .single_reson p {
        margin-bottom: 10px;
      }

      .latest_activites_area .video_bg_1 .popup-video {
        font-size: 60px;
      }

      .latest_activites_area h3 {
        font-size: 24px;
      }

      .latest_activites_area .para_1,
      .latest_activites_area .para_2 {
        margin-bottom: 20px;
        font-size: 14px;
      }

      .latest_activites_area .boxed-btn4 {
        padding: 8px 16px;
        font-size: 14px;
      }

      .popular_causes_area h3 {
        margin-bottom: 40px;
        font-size: 24px;
      }

      .popular_causes_area .causes_active .single_cause {
        margin-right: 0;
      }

      .popular_causes_area .causes_active h4 {
        font-size: 18px;
      }

      .popular_causes_area .causes_active p {
        margin-bottom: 10px;
      }

      .popular_causes_area .causes_active .read_more {
        font-size: 14px;
      }
    }
    .boxed-btn3 {
  color: black;
  display: inline-block;
  padding: 13px 44px;
  font-size: 16px;
  font-weight: 600;
  border: 0;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  text-align: center;
  text-transform: capitalize;
  -webkit-transition: 0.5s;
  -moz-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
  background: rgb(0,123,255);
  font-family: "Open Sans", sans-serif;
  cursor: pointer;
}

/* line 41, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_btn.scss */
.boxed-btn3:hover {
  background: rgb(255,193,7);
  color: black;
}

/* line 45, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_btn.scss */
.boxed-btn3:focus {
  outline: none;
}

/* line 48, ../../Arafath/CL/january 2020/242. charity/HTML/scss/_btn.scss */
.boxed-btn3.large-width {
  width: 220px;
}
  </style>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $address = $_POST['address'] ?? '';
    $occupation = $_POST['occupation'] ?? '';
    $salary = $_POST['salary'] ?? '';
    $message = $_POST['message'] ?? '';

    // Sanitize form data (prevent SQL injection)
    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $address = htmlspecialchars($address);
    $occupation = htmlspecialchars($occupation);
    $salary = htmlspecialchars($salary);
    $message = htmlspecialchars($message);

    // Validate form data (perform necessary checks)

    // Check if required fields are not empty
    if (empty($name) || empty($email) || empty($message)) {
        echo '<script>alert("Error: All fields are required");</script>';
    } else {
        // Send message to the admin dashboard or store it in the database

        // Here, you can implement the logic to send the message to the admin dashboard
        // For simplicity, we'll assume the message is stored in a database table named "messages"

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "charity_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert data into the "messages" table
        $sql = "INSERT INTO messages (name, email, address, occupation, salary, message) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $name, $email, $address, $occupation, $salary, $message);

        if ($stmt->execute()) {
            echo '<script>alert("Message sent successfully");</script>';
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
}
?>

<!-- HTML form code -->

  
<head>
<div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider_text ">
                            <span>Get Started Today.</span>
                            <h3> Help the children
                                When They Need</h3>
                            <p>With so much to consume and such little time, coming up <br>
                                with relevant title ideas is essential</p>
                            <a href="<?php echo base_url ?>?p=about" class="boxed-btn3">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</head>
<div class="container">
  <div class="form-container">
    <center>
    <h3>Be One of Us</h3>
    <p>Fill up the Application Form to get started</p>
    </center>
  </div>
</div>
<div class="container">
    <div class="form-container">
        <form action="" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required><br>
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" required><br>
            <label for="occupation">Occupation:</label>
            <input type="text" name="occupation" id="occupation" required><br>
            <label for="salary">Salary:</label>
            <div class="input-group">
                <select name="currency" id="currency" required>
                    <option value="USD">USD</option>
                    <option value="PHP">PHP</option>
                    <!-- Add more currency options if needed -->
                </select>
                <input type="text" name="salary" id="salary" required>
            </div><br>
            <label for="message">Message:</label>
            <textarea name="message" id="message" rows="8" required></textarea><br>
            <input type="submit" value="Send">
        </form>
    </div>

    <!-- Rest of the code -->
</div>



    <div class="image-container">
      <img src="uploads/1676612340_LIONS.jpg" alt="Image">
    </div>
  </div>

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
                <img src="uploads/1676612340_LIONS.jpg" alt="">
              </div>
            </div>
            <div class="help_content">
              <h4>Collecting Funds</h4>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print.</p>
              <a href="#" class="read_more">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_reson">
            <div class="thum">
              <div class="thum_1">
                <img src="uploads/1687175520_logo-final.png" alt="">
              </div>
            </div>
            <div class="help_content">
              <h4>Blood Camp</h4>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print.</p>
              <a href="#" class="read_more">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_reson">
            <div class="thum">
              <div class="thum_1">
                <img src="uploads/1683525600_1676562600_307741460_8569443706406519_7433495379455164231_n.jpg" alt="">
              </div>
            </div>
            <div class="help_content">
              <h4>Friendly Volunteers</h4>
              <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print.</p>
              <a href="#" class="read_more">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="latest_activites_area">
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-lg-7">
          <div class="activites_info">
            <div class="section_title">
              <h3><span>Watch Our Latest Activities</span></h3>
            </div>
            <p class="para_1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. enim minim veniam, quis nostrud exercitation.</p>
            <p class="para_2">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. enim minim veniam, quis nostrud exercitation. tempor incididunt ut labore dolore magna aliqua. enim minim veniam, quis nostrud exercitation.</p>
            <a href="#" data-scroll-nav='1' class="boxed-btn4">Donate Now</a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="video_bg_1 video_activite d-flex align-items-center justify-content-center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/o7Ke1pbAe2Q?rel=0" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="popular_causes_area section_padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section_title text-center mb-55">
            <h3><span>Popular Causes</span></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="causes_active owl-carousel">
            <div class="single_cause">
              <div class="thumb">
                <img src="uploads/1686139020_1479164_428567273937190_973751131_n.jpg" alt="">
              </div>
              <div class="causes_content">
                <div class="custom_progress_bar">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                      <span class="progres_count">30%</span>
                    </div>
                  </div>
                </div>
                <div class="balance d-flex justify-content-between align-items-center">
                  <span>Raised: $5000.00</span>
                  <span>Goal: $9000.00</span>
                </div>
                <h4>Help us Send Food</h4>
                <p>The passage is attributed to an unknown typesetter in the century who is thought</p>
                <a class="read_more" href="cause_details.html">Read More</a>
              </div>
            </div>
            <div class="single_cause">
              <div class="thumb">
                <img src="uploads/1686185880_1479164_428567273937190_973751131_n.jpg" alt="">
              </div>
              <div class="causes_content">
                <div class="custom_progress_bar">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                      <span class="progres_count">30%</span>
                    </div>
                  </div>
                </div>
                <div class="balance d-flex justify-content-between align-items-center">
                  <span>Raised: $5000.00</span>
                  <span>Goal: $9000.00</span>
                </div>
                <h4>Clothes For Everyone</h4>
                <p>The passage is attributed to an unknown typesetter in the century who is thought</p>
                <a class="read_more" href="cause_details.html">Read More</a>
              </div>
            </div>
            <div class="single_cause">
              <div class="thumb">
                <img src="uploads/Earth-day-20230422.jpg" alt="">
              </div>
              <div class="causes_content">
                <div class="custom_progress_bar">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                      <span class="progres_count">30%</span>
                    </div>
                  </div>
                </div>
                <div class="balance d-flex justify-content-between align-items-center">
                  <span>Raised: $5000.00</span>
                  <span>Goal: $9000.00</span>
                </div>
                <h4>Water For All Children</h4>
                <p>The passage is attributed to an unknown typesetter in the century who is thought</p>
                <a class="read_more" href="cause_details.html">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
