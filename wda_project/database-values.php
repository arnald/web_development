<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Project</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="https://github.com/necolas/normalize.css/blob/master/normalize.css"> 
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="project_css2.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery/"></script>
  

</head>

<body>

<h1>Contacts</h1>
 <?php
// going to use above code
$servername = "localhost";
$username = "root";
$password = "Dwyane Wade 2006";
$database = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// printing column name above the data
echo 'Name'.' '.'Email'.' '.'Message'.' '.'Time'.'<br>';
 
// sql query to fetch all the data
$query = "SELECT * FROM `wda`";
// mysql_query will execute the query to fetch data
if ($is_query_run = mysqli_query($conn, $query))
{
    // echo "Query Executed";
    // loop will iterate until all data is fetched
    while ($query_executed = mysqli_fetch_assoc ($is_query_run))
    {
        // these four line is for four column
        echo $query_executed['name'].' ';
        echo $query_executed['email'].' ';
        echo $query_executed['message'].' ';
        echo $query_executed['time'].'<br>';
    }
}
else
{
    echo "Error in execution";
}
?>

</body>
</html>