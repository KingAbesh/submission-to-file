<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./Abasifreke.css">
    <title>Abasifreke's CV</title>
  </head>
  <body>
    <div>
      <div>
        <div class="img">
          <img
            src="https://res.cloudinary.com/kingabesh/image/upload/c_scale,h_200,w_200/v1566594040/My%20images/66082281_2391008887657463_8242964215883628544_n.jpg_ewg8sc.jpg"
            alt="My CV image"
          />
        </div>
        <h1>Abasifreke Iniabasi Ekwere</h1>
      </div>
        <p id="details">
            Plot 2166, E Extension, Apo Resettlement Estate, Apo - Abuja.<br />
            07067484464<br />
            abeshekwere@gmail.com<br/>
            <br/>
            Looking forward to working with you, you can reach me directly <button class="contact-button">here</button>
        </p>
      </div>
    </div>
    <!-- <div class="form-background">
        <button class="form-background__button_close">Close</button>
    <div class="form-contact">
      <form action="index.php" method="post" class="form-contact__form">
        <label>Title</label><br/>
        <span class="show-title">Please enter your title.</span><br/>
        <input type="text" class="title" name="title" placeholder="Enter your title"><br/>
        <label>Name</label><br/>
        <span class="show-name">Please enter your name.</span><br/>
        <input type="text" class="name" name="name" placeholder="Enter your name"><br/>
        <label>Email</label><br/>
        <span class="show-email">Please enter your email.</span><br/>
        <input type="text" class="email" name="email" placeholder="Enter your email"><br/>
        <label>Message</label><br/>
        <span class="show-message">Please enter your message.</span><br/>
        <textarea name="message" id="" cols="30" rows="10" class="message" placeholder="Enter your message"></textarea><br/>
        <input type="submit" name="submit" class="form-contact__button">
      </form>
    </div>
    </div> -->

    <hr />
    <br />
    <div>
    <h2>Experience</h2>
    <br />
    <br />
    <strong
      >Infostrategy Technology, Abuja
      <em>— Customer Service Executive</em></strong
    >
    <br />
    <br />
    <span
      ><small><strong>NOVEMBER 2018 - PRESENT</strong></small></span
    >
    <br />
    <br />
    <ul>
      <li>
        Receive and resolve customer complaints Sell new products and services
        to customers.
      </li>
      <li>
        Submit weekly reports on customer feedback, complaints and inquires
      </li>
    </ul>
    <br />
    <br />
    <strong
      >Optima Medical Laboratory, Abuja <em>— Laboratory Attendant</em></strong
    >
    <br />
    <br />
    <span
      ><small><strong>MAY 2016 - OCTOBER 2016</strong></small></span
    >
    <br />
    <br />
    <ul>
      <li>
        Take blood and urine samples from patients for laboratory analysis
      </li>
      <li>Carry out analysis form time to time.</li>
    </ul>
    </div>
    <br />
    <br />
    <hr />
    <div>
      <h3>Tools:</h3>
      <p>
        <em
          >HTML, CSS, Javascript</em
        >
      </p>
      <br />
      <h3>Skills:</h3>
      <p>
        <em
          >Analytical Thinking, Team Work, Microsoft Office, Time Management,
          Ability to Work Under Pressure, Research, Problem Solving,
          Communication</em
        >
      </p>
      <br />
      <h3>Awards:</h3>
      <p>
        <em
          >Best Graduating Student, Faculty of Basic Medical Sciences,
          2017/2018. Overall Best Student, Faculty of Basic Medical Sciences,
          2017/2018.</em
        >
      </p>
      <br />
      <h3>Languages:</h3>
      <p><em>English, Ibibio, Pidgin.</em></p>
      <br />
    </div>
    <hr />
    <br />
    <br />
    <div>
    <h2>Education</h2>
    <br />
    <br />
    <strong
      >University of Uyo, Uyo
      <em>— Bsc. Biochemistry(First Class Honours)</em></strong
    >
    <br />
    <br />
    <span><small>APRIL 2014 - JUNE 2018</small></span>
    <br />
    <br />
    <br />
    <br />
    <strong>Federal Government Boys’ College, Abuja <em>— WASSCE</em></strong>
    <br />
    <br />
    <span><small>NOVEMBER 2009 - JULY 2012</small></span>
    </div>
    <br />
    <br />
    <hr />
    <div class="form-background">
        <button class="form-background__button_close">Close</button>
    <div class="form-contact">
      <form action="index.php" method="post" class="form-contact__form" id="form-contact">
        <label>Title</label><br/>
        <span class="show-title">Please enter your title.</span><br/>
        <input type="text" class="title" name="title" placeholder="Enter your title"><br/>
        <label>Name</label><br/>
        <span class="show-name">Please enter your name.</span><br/>
        <input type="text" class="name" name="name" placeholder="Enter your name"><br/>
        <label>Email</label><br/>
        <span class="show-email">Please enter your email.</span><br/>
        <input type="text" class="email" name="email" placeholder="Enter your email"><br/>
        <label>Message</label><br/>
        <span class="show-message">Please enter your message.</span><br/>
        <textarea name="message" id="" cols="30" rows="10" class="message" placeholder="Enter your message"></textarea><br/>
        <input type="submit" name="submitform" class="form-contact__button">
      </form>
    </div>
    </div>
    <script src="./abasifreke.js"></script>
  </body>
</html>


<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title    = $_POST['title'];
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $message  = $_POST['message'];

    $fp = fopen("data.txt", "a");
    fwrite($fp, "Title: " . $title . "\n");
    fwrite($fp, "Name: " . $name . "\n");
    fwrite($fp, "Email: " . $email . "\n");
    fwrite($fp, "Message:\n" . $message);
    fwrite($fp, "\n");
    fclose($fp);
    echo "Data saved.";
    exit;
  }
?>