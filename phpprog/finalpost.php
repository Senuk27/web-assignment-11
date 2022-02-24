<?php
 $db = mysqli_connect("localhost", "root", "", "sedna"); 
 $msg = "";
 if (isset($_POST['sub'])) { 
    $image = $_FILES['image']['name'];
    $name= mysqli_real_escape_string($db, $_POST['name']);
    $location= mysqli_real_escape_string($db, $_POST['location']);
    $ncity= mysqli_real_escape_string($db, $_POST['ncity']);
    $dis= mysqli_real_escape_string($db, $_POST['dis']);
    $prov= mysqli_real_escape_string($db, $_POST['prov']);
    $distance= mysqli_real_escape_string($db, $_POST['distance']);
    $description= mysqli_real_escape_string($db, $_POST['description']);

    $target = "image/".basename($image);
     $sql = "INSERT INTO feedpost (name, location, nearest_city, district, province, distance, description, image) VALUES ('$name', '$location', '$ncity', '$dis', '$prov', '$distance', '$description', '$image' )"; 
     mysqli_query($db, $sql);
     if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
    { $msg = "Image uploaded successfully";
    }
    else{ $msg = "Failed to upload image"; } } 
    $result = mysqli_query($db, "SELECT * FROM feedpost");

?>
<html>
    <head>
<link rel="stylesheet" href="poststyle.css" type="text/css">
<script language="javascript" type="text/javascript" src="postscript.js"></script>
     </head>
    <body>
    <div class="help">
           <p> If any problem arises while you are uploading reffal it to us.</p>
            <a href="">HelpCenter</a>
        </div>
        <div class="msg">
            <p>Please be kind</br> to help us to</br> gather & manage</br> your information</br> optimally</p>
        </div>
        <div class="container">
        <form action="finalpost.php" method="POST" enctype="multipart/form-data" name="frm" onSubmit="check();">
            <table>
                <!--<tr>
                    <td><img src="images/ip.png" alt="user image" width="60px" height="60px"></td>
                </tr>-->
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="" placeholder="Enter your name here"></td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td><input type="url" name="location" value="" placeholder="Link of the location"></td>
                </tr>
                <tr>
                  <td>Nearest city</td> 
                  <td><input type="text" name="ncity" value="" placeholder="Enter the nearest city to the location"></td> 
                </tr>
                <tr>
                    <td>District</td>
                    <td><input type="text" name="dis" value="" placeholder="Enter the district of the location"></td>
                </tr>
                <tr>
                    <td>Province</td>
                    <td><input type="text" name="prov" value="" placeholder="Enter the province of the location"></td>
                </tr>
                <tr>
                    <td>Distance from the nearest city</td>
                    <td><input type="text" name="distance" value="" placeholder="Enter the distance from the nearest city"></td>
                </tr>
            </table>
        <div>
           <div class="left">
               Description
           </div>
           <div class="right" >
              <textarea name="description" id="descrip" cols="30" rows="10" onCick="hide();"></textarea> 
              <span class="tooltip">briefly describe the issue regarding to your post</span>
           </div> 
        </div>
        <div>
            <div class="imgleft">Add Images</div>
            <div class="imgright"><img src="images/photo add.png" alt="" height="40px" width="40px"><input type="file" name="image" id="i" accept=".png,.gif,.jpg,.webp,.jfif" required/></div>
        </div>
        <div class="sub">
        <input type="submit" value="Post It!" name="sub" id="subm"></div>
        </form>
</div>
</body>
</html>