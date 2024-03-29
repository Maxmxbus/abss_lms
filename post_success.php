<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/a.png">
    <style>
        * {
            margin: 0;
            padding: 0;
            /* fonts */
            font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

        }

        .header {
            min-height: 100vh;
            width: 100%;
            /* Main bg pucture */
            background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(images/Bg-image.jpg);
            background-position: center;
            background-size: cover;
            position: relative;

        }
        .text-box{
            width: 50%;
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            border: 1px solid #266e8f44;
            border-radius: 15px;
            background-color: #266e8f44;
            padding: 10px 25px;
        }
        .text-box h1{
            font-size: 40px;
        }
        .text-box p{
            margin: 0px 0 0px;
            font-size: 20px;
            color: white;
        }
        .subbutton{
            border-radius: 1vh;
            background-color: #1d2b3a;
            font-size: 20px;
            color: white;
            padding: 5px 10px;
        }
    </style>
    <title>Post Submitted</title>
</head>
<body class="header">
    <div class="text-box">
        <h1>Your post has been submitted successfully!</h1>
        <!-- Optionally, provide links for users to view other posts or create a new post -->
        <br>
        <a href="announcement-page.php"><input type="button" value="View" class="subbutton"></a>
    </div>
</body>
</html>
