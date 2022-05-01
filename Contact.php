<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
    <title>seamusmalone</title>
</head>

<body id="image">
    <div class="content">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
    <a href="index.html">
    <img src="assets/images/logo.jpg" alt="Seamus Malone logo" style="width:85px;height:50px;padding-left: 20px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
<!-- nav bar-->

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Skills.html">Skills <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Portfolio.html">Portfolio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="Contact.html">Contact <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="assets/CV/Seamus Malone CV April 2022.pdf" target="_blank"> CV Download</a>
          </li>
        
        </ul>

        
      </div>
    </nav>
    <br>
    

    <br>
   


<!-- form section-->

     
       <div class="form-section flex-container">
       <form action="" class="contact-form">
         <h2 class="uppercase-text">Contact me </h2> 
         <label class="form-label" for="fname">First Name</label>
        <input class="text-input" id="fname" type="text" name="first_name" required>
         <label for="lname">Last Name</label>
        <input class="text-input" id="lname" type="text" name="last_name" required>
         <label for="email">Email Address</label>
        <input class="text-input" id="email" type="email" name="email_address" required>
         <label for="Message">Message</label>
        <textarea class="text-area" rows="3" id="Message"  name="message" required></textarea>
         <input class="submit-button" type="submit" value="Submit">
             
       </form>
       </div>
  
      <br>
    
      
      <br>
      </div>
 
 <!-- footer with social links-->   

<footer class="footer">
        <div class="social-networks">
            <a href="https://www.facebook.com/seamus.malone.5/" target="_blank"><i class="fa fa-facebook"> </i></a>
            <a href="https://www.linkedin.com/in/seamusmalone/" target="_blank"><i class="fa fa-linkedin"> </i></a> 
               <p>Copyright 2021</p>
        </div>

     
</footer> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <?php 
if(isset($_POST['submit'])){
    $to = "mattshallow@yahoo.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    header('Location: Contact.html');
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?> 
    
</body>

</html>

