<?php include 'header.php'?>
<h2>Contact Me</h2>
<?php
//email1.php

if(isset($_POST['submit']))
{//send email?
    /*
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    */
    $to = "elizabeth.m.barney@gmail.com";
    $subject = "My Website Feedback" . date("m/d/y, G:i:s");
   
    //collect and clean post data
    $FirstName = coffee_clean_post('FirstName');
    $LastName = coffee_clean_post('LastName');
    $Email = coffee_clean_post('Email');
    $Comments = coffee_clean_post('Comments');
    
    //build body of email
    $text = '';//initialize variable
    
    $text .= 'FirstName: ' . $FirstName . PHP_EOL . PHP_EOL;
    $text .= 'LastName: ' . $LastName . PHP_EOL . PHP_EOL;
     $text .= 'Email: ' . $Email . PHP_EOL . PHP_EOL;
     $text .= 'Comments: ' . $Comments . PHP_EOL . PHP_EOL;
    
    $headers = 'From: noreply@elizabethmbarney.com' . PHP_EOL .
    'Reply-To: ' . $Email . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
        
    mail($to,$subject,$text,$headers);
    
    echo '<div class="row">
        <div class="col-lg-12">
            <h3>Message Sent</h3>
            <p>We will contact you within 24 hours!</p>
        </div>
    </div>
    ';
    
}else{//show form!
  echo '
  <form action="" method="post">
  
  <div class="row">
    <div class="form-group col-lg-4">
        <label class="text-heading" for="FirstName">First Name</label>
        <input class="form-control" type="text" name="FirstName" id="FirstName" autofocus required />
    </div>
    
    <div class="form-group col-lg-4">
        <label class="text-heading" for="LastName">Last Name</label>
        <input class="form-control" type="text" name="LastName" id="LastName" required />
    </div>
    
    <div class="form-group col-lg-4">
        <label class="text-heading" for="Email">Email</label>
        <input class="form-control" type="email" name="Email" id="Email" required />
    </div>
    
    <div class="clearfix"></div>
    
      <div class="form-group col-lg-12">
        <label class="text-heading" for="Comments">Comments</label>
        <textarea class="form-control" name="Comments" id="Comments"></textarea>
    </div>
     <div class="form-group col-lg-12">
        <button type="submit" class="btn btn-secondary" name="Submit">Submit</button>
     </div>
    
  
  </div>
  
  </form>
  ';  
    
}

?>
<?php include 'footer.php';
    
    function coffee_clean_post($key)
{
   if(isset($_POST[$key])){
       return strip_tags(trim($_POST[$key]));
       
   }else{
       return '';
   } 
    
    
}

?>