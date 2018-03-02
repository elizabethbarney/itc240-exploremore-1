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
    $text = '';//initialize variable
    $text .= 'FirstName: ' . $_POST['FirstName'] . PHP_EOL . PHP_EOL;
    $text .= 'LastName: ' . $_POST['LastName'] . PHP_EOL . PHP_EOL;
     $text .= 'Email: ' . $_POST['Email'] . PHP_EOL . PHP_EOL;
     $text .= 'Comments: ' . $_POST['Comments'] . PHP_EOL . PHP_EOL;
    
        
    mail($to,$subject,$text);
    
    echo "email sent?";
    
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