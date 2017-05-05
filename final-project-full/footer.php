<?php
if(isset($_POST['submit']))
{
  if(empty($_SESSION['6_letters_code'] ) ||
    strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
  {
      //Note: the captcha code is compared case insensitively.
      //if you want case sensitive match, update the check above to
      // strcmp()
    $errors .= "n The captcha code does not match!";
  }

  if(empty($errors))
  {
    //send the email
    $to = $your_email;
    $subject="New form submission";
    $from = $your_email;
    $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';

    $body = "A user  $name submitted the contact form:n".
    "Name: $namen".
    "Email: $visitor_email n".
    "Message: n ".
    "$user_messagen".
    "IP: $ipn";

    $headers = "From: $from rn";
    $headers .= "Reply-To: $visitor_email rn";

    mail($to, $subject, $body,$headers);

    header('Location: contactthanks.php');
  }
}
?>

<footer id="contact" class="container-fluid text-center">
   <h1 class="contact-h1">Contact Us To Place Your Order Today!</h1>

<br />
<div class="inner contact">
                <!-- Form Area -->
                <div id="form-messages">
                    <!-- Form -->
                    <form id="contact_form" action="contactengine.php" method="POST">
                        <!-- Left Inputs -->
                        <div class="col-xs-6">
                            <!-- Name -->
                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                            <!-- Email -->
                            <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" />
                            <!-- Subject -->
                            <input type="text" name="phone" id="phone" class="form" placeholder="Phone Number" />
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-xs-6">
                            <!-- Message -->
                            <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <img src="captcha_code_file.php?rand=<?php echo rand(); ?>"
id="captchaimg" >
<label for="message">Enter the code here:</label>
<input id="6_letters_code" name="6_letters_code" type="text">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit"
                            class="form-btn semibold">
                            Send Message
                            </button>
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>

                    </form>

                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->


</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="slider/jquery.bxslider.min.js" type="text/javascript"></script>
    <script src="slider/jquery.bxslider.min.js" type="text/javascript"></script>

<script src="main.js"></script>
    </body>
</html>
