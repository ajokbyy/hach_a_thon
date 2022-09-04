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
    $mail = $_POST['mail'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `cont`.`cont` (`name`, `mail`, `desc`, `date`) VALUES ('$name', '$mail', '$desc', current_timestamp());";

    
if($con->query($sql) == true){
    // echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

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
    <title>register form for LPU</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
}
.top{
    width: 15rem;
    height: 15rem;
    padding: 1em;
}
.haad{
    border: 5px ;
display: flex;
justify-content: center;
}
header{
    border: 5px ;
display: flex;
justify-content: center;
}
.bg{
    width: 100%;
    position: absolute;
    z-index: -1;
    opacity: 0.6;
}
form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
input, textarea{
    
    border: 2px solid black;
    border-radius: 6px;
    outline: none;
    font-size: 16px;
    width: 80%;
    margin: 11px 0px;
    padding: 7px;
}
.btn{
    color: white;
    background: rgb(238, 121, 26);
    padding: 8px 12px;
    font-size: 20px;
    border: 2px solid white;
    border-radius: 14px;
    cursor: pointer;
}

.submitMsg{ 
    border: 1rem solid transparent;
    color: rgb(252, 79, 11);
    text-align: center;
}
</style>
<body>
<img class="bg" src="#" alt="lpu">
<div class="haad">
    <img src="form_img\unnamed.jpg" alt="logo" class="top">
    <br>
    
</div>
<header>

<h1>LPU Register Form</h1>


</header>
<?php
        if($insert == true){
        echo "<br><p class='submitMsg'>Thanks for submitting your form.</p>";
        }
    ?>
<!-- reg_number, name, degree, AND  passout year -->
<form action="cont.php" method="post">
    <input type="text" name="name" id="name" placeholder="Enter your Name">
    <input type="text" name="mail" id="mail" placeholder="Enter your Email">
    <!-- <input type="email" name="email" id="email" placeholder="Enter your email"> -->
    <!-- <input type="phone" name="year" id="year" placeholder="Enter your Passout Year"> -->
    <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
    <button class="btn">Submit</button> 
</form>

<!-- INSERT INTO `reg` (`reg_number`, `name`, `degree`, `year`, `date`) VALUES ('12016462', 'abhiraj', 'b-tech', '20026', '2022-08-15 09:54:19.000000'); -->

</body>
</html>