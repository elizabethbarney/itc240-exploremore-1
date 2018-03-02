<?php
//customer_view.php - shows details of a single customer
?>
<?php include 'includes/config.php';?>
<?php

//process querystring here
if(isset($_GET['id']))
{//process data
    //cast the data to an integer, for security purposes
    $id = (int)$_GET['id'];
}else{//redirect to safe page
    header('Location:adventure_list.php');
}


$sql = "select * from Adventures where AdventureID = $id";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
       
        $Name = stripslashes($row['Name']);
        $Location = stripslashes($row['Location']);
        $Elevation (ft.) = stripslashes($row['Elevation (ft.)']);
        $Mileage = stripslashes($row['Mileage']);
        $Description = stripslashes($row['Description']);
        $title = "Title Page for " . $Name;
        $pageID = $Name;
        $Feedback = '';//no feedback necessary
    }    

}else{//inform there are no records
    $Feedback = '<p>This adventure does not exist</p>';
}

?>
<?php include 'includes/header.php';?>
<h1><?=$pageID?></h1>
<?php
    
    
if($Feedback == '')
{//data exists, show it

    echo '<p>';
    echo 'Name: <b>' . $Name . '</b> ';
    echo 'Location: <b>' . $Location . '</b> ';
    echo 'Elevation (ft.): <b>' . $Elevation (ft.) . '</b> ';
    echo 'Mileage: <b>' . $Mileage . '</b> ';
    echo 'Description: <b>' . $Description . '</b> ';
    
    echo '<img src="images/adventure' . $id . '.jpg" />';
    
    echo '</p>'; 
}else{//warn user no data
    echo $Feedback;
}    

echo '<p><a href="adventure_list.php">Go Back</a></p>';

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php include 'includes/footer.php';?>