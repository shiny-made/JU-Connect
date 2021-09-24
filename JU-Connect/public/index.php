<?php
include 'config.php';
   if($_SERVER["REQUEST_METHOD"]=="GET"){
    $search=$_GET["search"];
    $result = $con->query("SELECT * FROM `users` WHERE Name = '$search';");
    $row=$result->fetch_assoc();
    echo($row["Email"]);
    // $name=$row["Name"];
    // $phone1=$row["Phone1"];
    // $phone2=$row["Phone2"];
    // $phone3=$row["Phone3"];
    // $whatsapp=$row["whatsapp"];
    // $email=$row["Email"];
    // $img_name=$row["photo"];
    // $address=$row["Adress"];
    //    $nickname=$row["nickname"];
            }
?>
<html>
        <body>
        <form action="" method="GET">
                  <div class="input-group mb-3">
                    <input type="text" name="search" required
                      value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control"
                      placeholder="Search data">
                    <button type="submit" class="btn btn-primary">Search</button>
                  </div>
                </form>
        </body>
</html>