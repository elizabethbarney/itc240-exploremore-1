<?php
//customer_list.php - shows a list of customer data
?>
<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<h1>Most Epic PNW Adventures</h1>
<?php
$sql = "select * from Adventures";
//we connect to the db here

$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
if (mysqli_num_rows($result) > 0)//at least one record!
{//show results

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<p>';
        echo 'Name: <b>' . $row['Name'] . '</b> ';
        echo 'Location: <b>' . $row['Location'] . '</b> ';
         echo 'Elevation (ft.): <b>' . $row['Elevation (ft.)'] . '</b> ';
        echo 'Mileage: <b>' . $row['Mileage'] . '</b> ';
        echo 'Description: <b>' . $row['Description'] . '</b> ';
        
        echo '<a href="adventure_view.php?id=' . $row['AdventureID'] . '">' . $row['Name'] . '</a>';
        
        echo '</p>';
    }    

}else{//inform there are no records
    echo '<p>There are currently no adventures</p>';
}

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php include 'includes/footer.php';?>