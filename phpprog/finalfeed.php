<?php
 $db = mysqli_connect("localhost", "root", "", "sedna"); 
 $result = mysqli_query($db, "SELECT * FROM feedpost");
?>

<html>
    <head>
       
        <title>Feed</title>
        <style>
@font-face{
font-family:"Mont ExtraLight DEMO";
font-family:roboto;
font-family:raleway;

}
        </style>
        <link rel="stylesheet"
        type="text/css"
        href="feedsedna.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">

<!- font roboto -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

<!- font Raleway -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">

<!--font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>
    <body>
        <div class="menu">
            <a href="http://localhost/phpprog/home/index.php">HOME</a>
<a href="http://localhost/phpprog/finalfeed.php">FEED</a>
<a href="http://localhost/phpprog/contribution.php">CONTRIBUTION</a>
<a href="http://localhost/phpprog/home/profile.php">PROFILE</a>
<a href="http://localhost/phpprog/home/sign up.html">LOGIN</a>
            <span class="logo">
            <a id="tw" href="https://twitter.com/Sedna2022"><img src="tw.gif" height="30px" width="30px"></a>
            <a id="fb" href="https://www.facebook.com/profile.php?id=100077396950173"><img src="fb1.png" height="30px" width="30px"></a>
            <a id="ig" href="https://instagram.com/sedn_a_?utm_medium=copy_link"><img src="insta.png" height="35px" width="35px"></a>
            </span>
            </div>

            <div class="bgimg">
                
            </div>

            <div class="container">
                <span class="text1"> Post<br>Share<br>Act<br></span>
                <span class="text2"> Here's the space to <br>create a post about anywhere<br>you see that the ocean is polluted.<br>Post images with a brief<br>description and don't forget to<br>mention the location.<br></span>
               <span class="text3">Feed</span>
            </div>
            
           <div class="search">
                <input style="font-family:'Font Awesome 5 Free'; font-weight:800" type="text" name="search" placeholder=" &#xf002; Search">
            </div>


            <div class="container3">
               
                <span class="text5"> ACTIVITY</span>
            </div>

            <div class="container4">
                <span class="text6">  POSTS</span>
            </div>
            <div class="container5">
                <span class="text7"> SAVED</span>
            </div>

            <div class="container6">
                <span class="text8"> HELP</span>
            </div>

            <div class="addbutton">
               <a  href="http://localhost/phpprog/finalpost.php"><img src="plus.png" height="35px" width="37px"></a></a>
            </div>
            <?php
             while($row = mysqli_fetch_array($result)) {
                
           echo" <div class='box1'>"; 
		echo"<p class='no'>#".$row['id']."</p>";
                echo"<div class='p1'>";
                echo "<img src='image/".$row['image']."' height='450px' width='1000px'>"; 
                    echo"<div class='wbar'>";
                        echo"<span class='features'>";
                        echo"<a id='fav' href=''><img src='fav.PNG' height='35px' width='37px'></a>";
                        echo"<a id='com' href=''><img src='com.PNG' height='35px' width='37px'></a>";
                        echo"<a id='tag' href=''><img src='tag.PNG' height='35px' width='37px'></a>";
                        echo"<a id='share' href=''><img src='share.PNG' height='35px' width='37px'></a>";
                    echo"</span>";
                    echo"</div>";

                echo"</div>";
               echo" <div class='dp'>";
               echo"<img src='user image.png' width='50px' height='50px'>";
                echo "<h3 style='color:white'>".$row['name']."</h3>";
                echo"</div>";
                echo"<div class='desc' >";
                    echo"<p style='color:white;'>".$row['description']."</p>";
                echo"</div>
			<div class='table'>";
            echo"<p>Nearest City :" .$row['nearest_city']."</p>";
			echo"<p>District : ".$row['district']."</p>";
				echo"<p>Province : ".$row['province']."</p>";
				echo"<p>Distance from the nearest city : ".$row['distance']."</p>";

			echo"</div>";

			echo"<div class='loc'>";
				echo"<iframe src='".$row['location']."' width='250' height='250' style='border:0;' allowfullscreen='' loading='lazy'></iframe>";
			echo"</div>";
            echo"</div>";}
            ?>

    </body>
</html>