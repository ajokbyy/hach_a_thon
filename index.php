<?php
$insert = FALSE;
if (isset ($_POST ['name'])){


    $server = "localhost";
    $username = "root";
    $password = "";

    $con =  mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $Heading = $_POST['Heading'];
    $Subheading = $_POST['Subheading'];
    $com = $_POST['com'];

    // $name = $get['name'];

    $sql = " INSERT INTO `blog`.`blog`(`name`, `Heading`, `Subheading`, `com`, `date`) VALUES ('$name', '$Heading', '$Subheading', '$com', current_timestamp());";
     
   
if($con->query($sql) == true){
    // echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}


// $sql =  mysqli_query(Object(mysqli), 'NULL, "SELECT * FROM blog;"');
// $result = mysqli_query($con, $sql);

// $resultCheck = mysqli_num_rows($result);
// if($resultCheck>0){
//     while($row = mysqli_fetch_array($result)){
//         echo $row["name"]."<br>";
//     }
// }

// Close the database connection
$con->close();

}
// <!-- INSERT INTO `reg` (`reg_number`, `name`, `degree`, `year`, `date`) VALUES ('12016462', 'abhiraj', 'b-tech', '20026', '2022-08-15 09:54:19.000000'); -->
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<style>
.container{
    text-align: center;
    padding: 1em;
}
.container2{
    /* text-align: center; */
    padding: 1em;
}
ol{
    text-decoration: none;
    list-style: none;
    border: 3px solid black;
    width: 50%;

}
</style>
<body>
<!-- <div class="container">
    <div class="row">
         <button class="reg">Register</button>
         <button class="reg">Register</button>

    </div>
</div> -->
<form action="index.php" method="post">

    Name <input type="text" id="name" name="name"><br> 
    <br>
    <br>

    Heading <input type="text" id="Heading" name="Heading"><br> 
    <br>
    <br>

    Sub Heading <input type="text" id="Subheading" name="Subheading"><br> 
    <br>
    <br>


    <textarea name="com" id="com" cols="30" rows="10" placeholder="Write your blog here.."></textarea>

    
    <button class="btn">Add Blog </button>
   

</form>
<?php
?>
<h1>Thank You</h1>
<p>Here is the information you have submitted:</p>
<ol >
    <li><em>Name:</em> <?php echo $_POST["name"]?></li>
    <li><em></em> <?php echo $_POST["Heading"]?></li>
    <li><em></em> <?php echo $_POST["Subheading"]?></li>
    <li><em></em> <?php echo $_POST["com"]?></li>
</ol>

</body>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
</html>