<?php
    session_start();
    
    //ESTABLISHNG CONNECTION TO THE DATABASE
    $connectionvar = mysqli_connect('localhost','Administrator','lifestory4moody','arisusers');
    
    if(!$connectionvar){
        echo 'Database error' . mysqli_connect_error();
    }

    if(isset($_POST['submit'])){
        $first = mysqli_real_escape_string($connectionvar, $_POST['firstName']);
        $second = mysqli_real_escape_string($connectionvar, $_POST['secondName']);
        $last = mysqli_real_escape_string($connectionvar, $_POST['lastName']);
        $regno = mysqli_real_escape_string($connectionvar, $_POST['regnumber']);
        $passwrd = mysqli_real_escape_string($connectionvar, $_POST['pass1']);
        $hostel = mysqli_real_escape_string($connectionvar, $_POST['hostelName']);
        $block = mysqli_real_escape_string($connectionvar, $_POST['block']);
        $floornumb = mysqli_real_escape_string($connectionvar, $_POST['floorNo']);
        $roomnumb = mysqli_real_escape_string($connectionvar, $_POST['roomNo']);
        $roomtyp = mysqli_real_escape_string($connectionvar, $_POST['roomType']);

        //SQL CODE FOR INSERTION
        $sqlinsert = "INSERT INTO studentstb(FirstName, SecondName, LastName, RegNo, Passwords, HostelName, Blocks, FloorNo, RoomNo, RoomType) VALUES ('$first','$second','$last','$regno','$passwrd','$hostel','$block','$floornumb','$roomnumb','$roomtyp')";
        
        if(!mysqli_query($connectionvar, $sqlinsert)){
            echo 'query error: ' . mysqli_error($connectionvar);
        }
    }

    if(isset($_POST['Login'])){
        $username = mysqli_real_escape_string($connectionvar, $_POST['userlogin']);
        $passwd = mysqli_real_escape_string($connectionvar, $_POST['passlogin']);

        $loginquery = "SELECT * FROM studentstb WHERE RegNo = '$username' AND Passwords = '$passwd'";
        $result = mysqli_query($connectionvar, $loginquery);

        if(!$result){
            echo 'query error: ' . mysqli_error($connectionvar);
        }else{
            if(mysqli_num_rows($result) == 1){
                $student_details = mysqli_fetch_all($result, MYSQLI_ASSOC);
                mysqli_free_result($result);
                mysqli_close($connectionvar);
               $_SESSION['sesslastname'] = $student_details[0]['LastName'];
               $_SESSION['sessfirstname'] = $student_details[0]['FirstName'];
               $_SESSION['sesshostel'] = $student_details[0]['HostelName'];
               $_SESSION['sessblock'] = $student_details[0]['Blocks'];
               $_SESSION['sessfloor'] = $student_details[0]['FloorNo'];
               $_SESSION['sessroom'] = $student_details[0]['RoomNo'];
               $_SESSION['sessroomtype'] = $student_details[0]['RoomType'];
                header("location: inside.php");
            }else{
                echo ('Username or password is incorrect');
            }
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="ariss.css">
    <title>ARIS-Home</title>
</head>

<body>
    <header>
        <div class="headcontainer">
            <div class="headimg">
                <img src="uds.png" alt="udsm" class="headerimg">
            </div>
            <div class="headdescription">
                ACADEMIC REGISTRATION INFORMATION SYSTEM (ARIS)
            </div>
        </div>
        <div class="lowribbon">
            Academic Year: 2020/2021
        </div>
    </header>
    <main>
        <div class="inputcontainer">
            <input type="Home" value="Home" class="homebtn"></br>
            <button type="submit" class="loginbtn" id="signup_btn"> 
                Sign Up
            </button>
        </div>
        <div>
            <img src="innerpic.png" alt="OHH!!_NO">
        </div>
        <div class="logindiv">
            <div class="loginhead">
                ARIS Login
            </div>
            <div class="logform">
                <form action="aris.php" method="POST">
                    <i>Username:</i> <input type="text" name="userlogin" required></br>
                    <i>Password:</i>&nbsp; <input type="password" name="passlogin" required></br>
                    <input type="submit" name="Login" value="Login" class="loginbtn">
                    <a href="#" class="studentlink">STUDENT HELP</a>
                </form>
            </div>
        </div>

    </main>
    <div class="bg_popup">
        <div class="contentpop">
            <div class="close">
                +
            </div>
            <div class="contentpopup">
                <form action="aris.php" method="POST">
                    <input type="text" name="firstName" placeholder="First Name" id="inputfields" required>
                    <input type="text" name="secondName" placeholder="Second Name" id="inputfields" required>
                    <input type="text" name="lastName" placeholder="Last Name" id="inputfields" required>
                    <input type="text" name="regnumber" placeholder="Registration No:" id="inputfields" required>
                    <input type="password" name="pass1" placeholder="Password" id="inputfields" required>
                    <input type="password" name="pass2" placeholder="Confirm Password" id="inputfields" required>
                    <input type="text" name="hostelName" placeholder="Name of  Hostel/Halls" id="inputfields" required>
                    <input type="text" name="block" placeholder="Block" id="inputfields" required>
                    <input type="number" name="floorNo" placeholder="Floor No" id="inputfields" required>
                    <input type="number" name="roomNo" placeholder="Room No" id="inputfields" required>
                    <input type="text" name="roomType" placeholder="Room Type" id="inputfields" required>
                    <input type="submit" name="submit" value="SUBMIT" id="submitid">
                </form>
            </div>
        </div>
    </div>
    <script src="ariss.js"></script>
</body>

</html>