<?php
require 'config.php';


session_start();
$email = $_SESSION["email"] ;

$sql = "select First_Name , Last_Name from client where Email = '$email'";
$result = $connection -> query($sql);

if ($result -> num_rows > 0)
{
    while ($row = $result -> fetch_assoc())
    {
        $fName = $row["First_Name"];
        $lName = $row["Last_Name"];
    }
}

echo "<h1><center>Welcome $fName $lName!!</center></h1>"

?>

<html>
<head>
    <title>My Profile</title>
    <link rel="stylesheet" type="text/css" href="CSS/Profile_css.css">
</head>
<div class="div1">
    <center>
    <form action="" method="post" enctype="multipart/form-data">
    <table border="1px" class="table">
        <tr>
            <th> Info </th>
            <th> Data </th>
        </tr>
        <tr>
            <td> Profile Picture </td>
            <?php
                $sql = "select * from client where Email = '$email' ";
                $sql_run = mysqli_query($connection,$sql);

                while ($row = mysqli_fetch_array($sql_run))
                {
                    ?>
                    <td><?php echo '<img src="data:image;base64,'.base64_encode($row['IProfile']).'"alt="Profile_Pic" style="width:128px ; height: 128px ;" >';?></td>
                    <tr>
                        <td> First Name </td>
                        <td> <?php echo $row["First_Name"]; ?> </td>

                    </tr>
                     <tr>
                         <td> Last Name </td>
                         <td> <?php echo $row["Last_Name"]; ?> </td>

                     </tr>
                    <tr>
                            <td> Date Of Birth </td>
                            <td> <?php echo $row["DOB"]; ?> </td>

                    </tr>
                    <tr>
                        <td> Email </td>
                        <td> <?php echo $row["Email"]; ?> </td>

                    </tr>
                    <tr>
                        <td> Gender </td>
                        <td> <?php echo $row["Gender"]; ?> </td>

                    </tr>
                    <tr>
                        <td> User Type </td>
                        <td> <?php echo $row["User_Type"]; ?> </td>

                    </tr>
                    <tr>
                        <td> Password </td>
                        <td> <?php echo $row["PASSWORD"]; ?> </td>

                    </tr>
                    <tr>
                        <td> Question </td>
                        <td> <?php echo $row["Question"]; ?> </td>

                    </tr>
                    <tr>
                         <td> Answer </td>
                        <td> <?php echo $row["Answer"]; ?> </td>

                    </tr>

                        <?php
                }

            ?>
        </tr>


    </table>
    </center>
    </form>
</div>
<p><center><span class="alert">Note :  You can't change your Profile Picture , Security Question & Email !!!</span></center></p>



<button class="btn1" name = "logout"><a class="link1" href="logout.php">LOGOUT </a> </button>

<button class="btn2" name = "Edit"><a class="link1" href="editProfile.php">EDIT </a> </button>

<button class="btn3" name = "Delete" onclick="conDel()"><a class="link1" href="allDelete.php">DELETE</a> </button>




<br><br><br>

<button class="btn4" name = "Home"><a class="link2" href="#">Go back to Home</a> </button>



</html>