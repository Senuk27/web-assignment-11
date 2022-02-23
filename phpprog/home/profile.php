<?php

session_start();

$fname = $_SESSION['fname'];

if($fname==""){
    header("Location: login.html");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

</head>

<body>

    <!-- navigation section -->
    <div class="navbar">
        <!-- links div -->
        <div class="nav1">
            <div class="div1">
                <ul>
                    <li><a href="http://localhost/phpprog/home/index.php">Home</a></li>
                    <li><a href="http://localhost/phpprog/finalfeed.php">Feed</a></li>
                    <li><a href="http://localhost/phpprog/contribution.php">Contribution</a></li>
                    <li><a href="http://localhost/phpprog/home/profile.php">Profile</a></li>
                    <li><a href="http://localhost/phpprog/home/sign up.html">Login</a></li>
                </ul>
            </div>

            <div class="div2">
                <h1>Profile & Other</h1>
            </div>
        </div>

        <!-- image div -->
        <div class="nav2">
            <div class="img_div">
                <img src="OIP (4).jpg" />
            </div>
            <div class="img_txt">
                <h3>Hello Carla</h3>
                
                    <a href="logout.php" class="btn btn-primary">Logout</a>
                
            </div>
        </div>

    </div>

    <!-- content section -->
    <div class="main_content">
        <!-- div 1 -->
        <div class="main-div1">

            <div class="profile-div">
                <h2 class="profile-title">My Profile</h2>
                <div class="profile-img">
                    <img src="OIP (4).jpg" id="changeImg" />
                    <label for="imageUploader">  <img src="Web 1920 – 1 (3).png" onclick="changeImg();" />
                    </label>
                    <input type="file" id="imageUploader" />
                </div>
                <div class="profile-info">
                    <p>Name</p> <i class="bi bi-pencil-square"></i>
                    <p id="a"><?php echo $fname; ?></p>
                    <p>Bio</p> <i class="bi bi-pencil-square"></i>
                    <p id="a">Social Activist</p>
                    <p id="a">No Blue No Life</p>
                </div>
                <div class="details">
		
                    <p>Joined : 2022 jan 21</p>
                    <p>Feed Post : 40</p>
                    <p>Contribution Post : 49</p>
                </div>
                
                <div class="shape"></div>
            </div>
            
        </div>

        <!-- div 1 -->
        <div class="main-div2">

            <div class="div-1">
                <div class="profile-div">
                    <h2 class="profile-title">Top Rankers</h2>
                    <div class="details">
                        <img src="OIP (7).jpg" />
                        <p id="b">1 Harry Potter</p>
                        <img src="OIP (7).jpg" />
                        <p>2 Deepika Padukone</p>
                        <img src="OIP (7).jpg" />
                        <p>3 Donald Trump</p>
                    </div>
                    <div class="shape"></div>
                </div>
            </div>
<div class="div-2">
                <div class="profile-div">
                    <h2 class="profile-title">Donation & Fund</h2>
                    <div class="phara">
                        <p>You can support the people who need some financial support to contribute by donationg money. If you wish.</p>
                    </div>
                    <div class="details">
                        <p>Enter donation LKR</p>
                        <input type="text" />
                        <div class="img-box">
                            <img src="patment_methods.png" />
                        </div>
                        <p>Enter your email or phone no.</p>
                        <input type="text" />
                    </div>
                    <div class="phara">
                        <p>You can get the support if you wish to have some financial support to carry on your cleaning projects and campaigns if you wish.</p>
                    </div>
                    <div class="details">
                        <p>Enter aid amount LKR</p>
                        <input type="text" />
                        <div class="img-box">
                            <img src="patment_methods.png" />
                        </div>
                        <p>Enter your email or phone no.</p>
                        <input type="text" />
                    </div>
                    <div class="shape"></div>
                </div>
            </div>
        </div>

    </div>

    <script src="profile.js"></script>
</body>

</html>