<?php
 $db = mysqli_connect("localhost", "root", "", "sedna"); 
 $result = mysqli_query($db, "SELECT * FROM post");
?>


<!DOCTYPE html>
<html>
    <head>
        <a name="top"></a>
        <title>Contribution</title>

        <link rel="stylesheet"
        type="text/css"
        href="contribution.css">


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

            <div class="boxone">
                <h4>
                    <a href="">Help Center</a>
                </h4>
                <div class="row">
                    <div class="coloumn">
                        <img src="contri\img1.PNG" height="150px" width="150px">
                        <img src="contri\img2.PNG" height="150px" width="150px"> 
                        <img src="contri\img3.PNG" height="150px" width="150px"> 
                        <img src="contri\img4.PNG" height="150px" width="150px"> 
                    </div>
                    <div class="coloumn">
                        <img src="contri\img11.PNG" height="150px" width="150px">
                        <img src="contri\img12.PNG" height="150px" width="150px">
                        <img src="contri\img13.PNG" height="150px" width="150px">
                        <img src="contri\img14.PNG"height="150px" width="150px">
                    </div>
                    <div class="coloumn">
                        <img src="contri\img21.PNG" height="150px" width="150px">
                        <img src="contri\img22.jpg" height="150px" width="150px">
                        <img src="contri\img23.PNG" height="150px" width="150px" id="let">
                        <img src="contri\img24.PNG"height="150px" width="150px">
                    </div>


                </div>

<div class="con"><hr id="left">contribution<hr id="right"></div>
<div class="consub">POST HERE WHAT YOU FULFILLED</div>
<div class="addbutton">
               <a  href="http://localhost/phpprog/conpost.php"><img src="plus.png" height="35px" width="37px"></a></a>
            </div>
            </div>
<?php
        while($row = mysqli_fetch_array($result)) {
            echo" <div class='box1'>"; 
                echo"<div class='p1'>";
                echo "<img src='conimage/".$row['image']."' height='450px' width='1000px'>"; 
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
                echo"</div>";
			echo"<div class='feedno'>";
            echo"<h3>Feed Number:</h3>";
            echo "<p>#".$row['feed_no']."</p>";
            echo"</div>";

			echo"<div class='loc'>";
				echo"<iframe src='".$row['location']."' width='250' height='250' style='border:0;' allowfullscreen='' loading='lazy'></iframe>";
			echo"</div>";
            echo"</div>";}
            ?>


    </body>
</html>