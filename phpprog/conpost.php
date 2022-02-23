<?php
 $db = mysqli_connect("localhost", "root", "", "sedna"); 
 $msg = "";
 if (isset($_POST['sub'])) { 
    $image = $_FILES['image']['name'];
    $name= mysqli_real_escape_string($db, $_POST['name']);
    $location= mysqli_real_escape_string($db, $_POST['location']);
    $description= mysqli_real_escape_string($db, $_POST['description']);
    $feedno=mysqli_real_escape_string($db, $_POST['feedno']);
    $target = "conimage/".basename($image);
     $sql = "INSERT INTO post (name, description, location, feed_no, image) VALUES ('$name', '$description', '$location', '$feedno', '$image' )"; 
     mysqli_query($db, $sql);
     if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
    { $msg = "Image uploaded successfully";
    }
    else{ $msg = "Failed to upload image"; } } 
    $result = mysqli_query($db, "SELECT * FROM post");
?>
<html>
    <head>
<link rel="stylesheet" href="conpost.css" type="text/css">
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
        <form action="conpost.php" method="POST" enctype="multipart/form-data" name="frm" onSubmit="check();">
            <table>
                <!--<tr>
                    <td><img src="images/ip.png" alt="user image" width="60px" height="60px"></td>
                </tr>-->
                <tr>
                    <td>Name</td>
                    <td ><input type="text" name="name" value="" placeholder="Enter your name here" id="rt"></td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td><input type="url" name="location" value="" placeholder="Link of the location" id="rt"></td>
                </tr>
                <tr>
                    <td>Feed Number</td>
                    <td ><input type="text" name="feedno" value="" placeholder="number of the contributed post" id="rt"></td>
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
            <div class="imgright"><img src="images/photo add.png" alt="" height="40px" width="40px"><input type="file" name="image" id="i" accept=".png,.gif,.jpg,.webp" required/></div>
        </div>
        <div class="sub">
        <input type="submit" value="Post It!" name="sub" id="subm"></div>
        </form>
</div>
</body>
</html>