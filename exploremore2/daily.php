<?php include 'includes/config.php'?>
<?php
//daily logic goes here
 
if(isset($_GET['myDay']))
{//data in querystring, use it!
    $myDay = $_GET['myDay']; 
}else{//use current date
   $myDay = date('l');  
}
 //  code and cases for daily grind goes here
switch ($myDay)
{
    case 'Monday': 
        $myCoffee = "Machiatto";  
        $myImage = "machiatto.jfif";
        $myAlt = "Machiatto, Monday's Special";
        $myColor = "Gray";
        $myParagraph = "a cornerstone of Italian coffee culture. It’s basically an espresso (served in a demitasse cup) with a small amount of our housemade foamed almond milk on top — the name macchiato means “marked.”";
    break;  
        
  case  'Tuesday': 
        $myCoffee = "Drip Coffee"; 
        $myImage = "drip.jfif";
        $myAlt = "Drip Coffee, Tuesday's Special";
        $myColor = "#CDC8B1";
        $myParagraph = "made with a gentle brewing process. Our roasters are able to infuse a wide variety of flavors and aroma into the coffee and have them translate in the cup. The result is a fine drip coffee with exotic notes.";
    break;    

    case 'Wednesday': 
        $myCoffee = "Flat White";  
        $myImage = "flatwhite.jfif";
        $myAlt = "Flat White, Wednesday's Special";
        $myColor = "#EEE9E9";
        $myParagraph = "an espresso-based coffee drink. It is prepared by pouring microfoam (steamed soy milk with small, fine bubbles with a glossy or velvety consistency) into a single or double shot of espresso. Just what you need to get you through humpday!";
        break;     
        
    case 'Thursday': 
        $myCoffee = "Mocha";  
        $myImage = "mocha.jpeg";
        $myAlt = "Mocha, Thursday's Speial";
        $myColor = "#FAF0E6";
        $myParagraph = "one third espresso and two thirds steamed almond milk mixed with 100% dark cocoa powder for a decadently rich flavor. Sure to win over the hearts of chocolate lovers everywhere!";
        break;    
        
    case 'Friday': 
        $myCoffee = "Cappuccino"; 
        $myImage = "cappucino.jpeg";
        $myAlt = "Cappucino, Friday's Special";
        $myColor = "#C9AF94";
        $myParagraph = "a single espresso shot topped with equal parts steamed and frothed soy milk. Our cappuccinos are rich in flavor and texture with a bold coffee taste that will make you say TGIF!"; 
    break; 
        
    case  'Saturday': 
        $myCoffee = "Latte";
        $myImage = "latte.jpg";
        $myAlt = "Latte, Saturday's Special";
        $myColor = "#EBC79E";
        $myParagraph = "lots of steamed hemp milk with espresso shots to liven it up, then topped with a little foam. The perfect way to start your weekend.";
    break;
        
     case 'Sunday': 
        $myCoffee = "Cold Brew";
        $myImage = "coldbrew.jfif";
        $myAlt = "Cold Brew, Sunday's Special";
        $myColor = "#FDF5E6";
        $myParagraph = "brewed with room temperature or cold water for 24 hours. Because it’s made with colder water, it’s generally a bit mellower and tastes more rounded out. Try it with a splash of hemp milk with your Sunday brunch.";
    break;    
}
?>    
<?php include 'includes/header.php'?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Vegan Coffee</title>
    <meta name="robots" content="noindex,nofollow" />
	<!-- below is a google font, go to https://www.google.com/fonts to get yours! -->
	<link href='https://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
	<link id="mainStylesheet" rel="stylesheet" href="css/default.css" />
    <style type="text/css">
	
        html {background-color:<?php echo $myColor ?>;}
        
        .feature {color:black; }
        
		.masthead{
			font-family: 'Holtwood One SC', serif; /* required for google font */
			font-size:3em;
		}
	
		#logo{
			float:right;
			display:inline-block;
			padding:2px;
			max-width:100px; /* actual size of image */
			width:20%; /* approximate size taken on screen in maximum view */
		}
	
		#coffee {
			float:left;
			display:inline-block;
			padding:20px;
			max-width:300px; /* best if actual size of image */
			width:33%; /* approximate size taken on screen in maximum view */
		}

        h3.slogan{
           font-style:italic; /* make the slogan italics */ 
        }
    </style>
   
    <!--[if ltIE9]>
       <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
</head>
<body>
	<header>
	    <img src="images/greenlogo.png" alt="Vegan Coffee" class="flexible" id="logo" />
        <h2> Daily Page </h2>
		<h1 class="masthead">Vegan Coffee</h1>
        <header><h3 class="slogan">A yawn is a silent scream for COFFEE.</h3></header>
	</header>
    <main>
        

        <p>
    		 <img src="images/<?php echo $myImage ?>" alt="<?php echo $myAlt ?>" id="coffee" />
            <strong class="feature"><?php echo $myDay?>'s Coffee Special:</strong> is a <strong class="feature"><?php echo $myCoffee?></strong>, which makes us wish it was always <?php echo $myDay?> so we could enjoy this classic all the time!</p>
        <p><span class="feature">Our <?php echo $myCoffee?> is </span> <?php echo $myParagraph?></p>
                    
<p><a href="daily.php?myDay=Monday">Monday</a></p>
<p><a href="daily.php?myDay=Tuesday">Tuesday</a></p>
<p><a href="daily.php?myDay=Wednesday">Wednesday</a></p>
<p><a href="daily.php?myDay=Thursday">Thursday</a></p>
<p><a href="daily.php?myDay=Friday">Friday</a></p>
<p><a href="daily.php?myDay=Saturday">Saturday</a></p>
<p><a href="daily.php?myDay=Sunday">Sunday</a></p>
		 
       
     </main>
    <footer>
      <small>&copy; 2014-2015, All Rights Reserved ~
      <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
      <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
      </small>
    </footer>
<?php include 'includes/footer.php'?>
                
                
                
                
                
                
                
                