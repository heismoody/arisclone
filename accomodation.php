<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ariss.css">
    <title>ARIS-My Accomodation</title>
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
            <img src="home.PNG" alt="home"></br>
            <button class="accomodationbtn">
                My Accomodation
            </button></br>
            <img src="belowhome.PNG" alt=""></br>
            <button class="logoutbtn">
                logout
            </button>
        </div>

        <div>
            <img src="accom.PNG" alt="OHH!!_NO"></br>
            <table class="table">
                <tbody>
                    <tr>
                        <td scope="row" id="sameeff">Halls / Hostel:</td>
                        <td id="entities"><?php echo $_SESSION['sesshostel']?></td>
                    </tr>
                    <tr>
                        <td scope="row" id="sameeff">Block:</td>
                        <td id="entities"><?php echo $_SESSION['sessblock']?></td>
                    </tr>
                    <tr>
                        <td scope="row" id="sameeff">Floor:</td>
                        <td id="entities"><?php echo $_SESSION['sessfloor']?></td>
                    </tr>
                    <tr>
                        <td scope="row" id="sameeff">Room:</td>
                        <td id="entities"><?php echo $_SESSION['sessroom']?></td>
                    </tr>
                    <tr>
                        <td scope="row" id="sameeff">Room Type:</td>
                        <td id="entities"><?php echo $_SESSION['sessroomtype']?></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>

</body>

</html>