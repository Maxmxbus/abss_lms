<?php
    // Start the session to store user data
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Page</title>
    <link rel="stylesheet" href="user-style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/a.png">
</head>
<body>
        <section class="header">
            <nav >
                <!-- Logo 🔽 -->
                <img src="images/logo-removebg-preview.png" width="200px" height="190px">
            </nav>
            
            <div class="inputBox1">

                <h2 style="color:white;font-size: 5vh;">Enter Pupils Exam Number</h2>

                <form action="rlogin.php" method="post">

                    <div>
                    <label style="color: white">Exam Number</label>
                    <input type="Password" name="password" placeholder="Exam Number" required><br><br>
                    </div>

                    <!-- <input class="btn-btn-primary" type="submit" name="submit" value="Login"> -->

                    <button type="submit" name="submit" value="Login">Login</button>
                </form>

                <!-- <h1>Exam Number</h1><br>
                <input type="password" name="password"><br>
                <br><button type="submit">Login</button> -->

            </div>
        </section>

</body>
</html>





