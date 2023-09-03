<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Reset some default styles */
        body,
        h1,
        h2,
        h3,
        p,
        ul,
        li {
            margin: 0;
            padding: 0;
            font-family: 'Viga', sans-serif;
        }

        /* Style for the navigation bar */
        .navbar {
            background-color: white;
            color: black;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .navbar-logo {
            color: black;
            text-decoration: none;
            font-size: 24px;
        }

        .navbar-links {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        .navbar-links li {
            margin-right: 20px;
            
        }
        .navbar-links a:hover {
            color: #777;            
        }

        .navbar-links a {
            
            font-weight:normal;
            color: black;
            text-decoration: none;
        }

        /* Style for the right corner buttons */
        .navbar-right {
            display: flex;
            align-items: center;
        }

        .navbar-button {
            margin-left: 20px;
            padding: 10px 20px;
            background-color: #d4cfd0;
            color: black;
            border-color: white;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition-delay: 0.2s;
            
            /* Add cursor style for better interaction */
        }

        .navbar-button:hover{
            
            background-color: white;
            border-color: #222;
        } 
        /* Responsive adjustments */
        @media screen and (max-width: 768px) {
            .navbar-links {
                display: none;
            }

            .navbar-right {
                margin-left: auto;
            }
        }
        /* Other CSS styles ... */
        /* Responsive adjustments ... */
    </style>
</head>
<body>
<nav class="navbar">
        <div class="navbar-brand">
            <img src="browser.jpg" alt="" style=" width: 100px;height: auto;">
        </div>
        <ul class="navbar-links">
            <li ><a href="home.php" id="home"   >Home</a></li>
            <li><a href="about.php" id="about">About</a></li>
            <li><a href="services.php" id="services">Services</a></li>
            <li><a href="contactus.php" id="contact">Contact</a></li>
        </ul>
        <div class="navbar-right">
            <!-- <form method="post" action="">
                <input type="submit" class="navbar-button" name="logout" value="Logout">
                <a type="" href="profile.php" name="updtpr" style="color:#666; padding:20px ; cursor:pointer" value="">
                <?php echo $_SESSION["uname"];?>
            </a>
            </form> -->
        </div>
    </nav>
</body>
</html>