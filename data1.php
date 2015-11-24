<? include 'includes/config.php';?>
<? include 'includes/header.php';?>
<h1><?=$pageID?></h1>
<?php

$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

$sql = "select * from test_Customers";

$result = mysqli_query($iConn,$sql);


if(mysql_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
    echo '<p>';
    echo 'FirstName: <b>' . $row['FirstName'] . '</b>';
    echo 'LastName: <b>' . $row['LastName'] . '</b>';
    echo 'Email: <b>' . $row['Email'] . '</b>';

    echo '</p>';
}
   
    
}else{//inform on records
    echo '<div>Currently no customer records</div>';
    
}

?>    
<? include 'includes/footer.php';?>
