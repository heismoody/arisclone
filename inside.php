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
            <img src="home.PNG" alt="home"></br>
            <button class="accomodationbtn">
              <a href="accomodation.php" class="unique">
                My Accomodation
              </a>
            </button></br>
            <img src="belowhome.PNG" alt=""></br>
            <button class="logoutbtn">
                logout
            </button>
        </div>

        <div>
            <p class="titlename">
                Welcome <?php echo $_SESSION['sesslastname']?>, <?php echo $_SESSION['sessfirstname']?>
            </p>
            <img src="insidearis.png" alt="OHH!!_NO">
        </div>

    </main>

    <script src="accomo.js"></script>
</body>

</html>