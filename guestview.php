<?php
  session_start();
  $con= mysqli_connect("127.0.0.1","root","","dbsalesf1") 
    or die("Error in connection");
    if(isset($_POST['loginSubmit'])){
      $uname=$_POST['uname'];
        $pwd=$_POST['pwd'];
        $sql ="select * from tbluseraccount where username='".$uname."'";
        $result = mysqli_query($con,$sql);
        $count = mysqli_num_rows($result);
        
        $row = mysqli_fetch_array($result);
        
        if($count== 0 || $row["isDeleted"] == "Yes"){
            echo "<div class='alert alert-danger text-center' role='alert'>
            User does not exist.
          </div>";
        }else if($row[3] != $pwd) {
            echo "<div class='alert alert-danger text-center' role='alert'>
            Incorrect password.
          </div>";
        }else{
            $_SESSION['accID']=$row[0];
            $_SESSION['username']=$row[2];
            $_SESSION['accType']=$row[4];
            if($row[4] == "Admin") {
              header("Location: adminview.php");
            } else {
              header("Location: homeview.php");
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button id="title" data-bs-toggle="dropdown" aria-expanded="false">
            <h4 style="color: white;"> LITEWRITEUR </h4>
          </button>
          <ul class="dropdown-menu dropdown-menu-dark" style="color: black;">
            <li><a class="dropdown-item" href="#">Hot</a></li>
            <li><a class="dropdown-item" href="#">Newest</a></li>
            <li><a class="dropdown-item" href="#">Romance</a></li>
            <li><a class="dropdown-item" href="#">Horror</a></li>
            <li><a class="dropdown-item" href="#">Comedy</a></li>
            <li><a class="dropdown-item" href="#">Drama</a></li>
          </ul>
        </li>
      </ul>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="homeview.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="AboutUs.html">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ContactUs.html">Contact Us</a>
            </li>
          </ul>

          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#regModal" style="margin-right: 0.3%">
          Register
        </button>

        <!-- Register Modal -->
        <div class="modal fade" id="regModal" tabindex="-1" aria-labelledby="regModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
            <form method="post">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="input-group mb-3">
                  <input name="fname" type="text" aria-label="First name" class="form-control" placeholder="First Name">
                  <input name="lname" type="text" aria-label="Last name" class="form-control" placeholder="Last Name">
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="addon-wrapping">Username</span>
                  <input name="unameReg" type="text" aria-label="First name" class="form-control">
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="addon-wrapping">Email</span>
                  <input name="email" type="email" aria-label="First name" class="form-control">
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="addon-wrapping">Password</span>
                  <input name="pwdReg" type="password" aria-label="First name" class="form-control">
                </div>
                <h6>Gender</h6>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="rGender" id="rMale" value="Male" checked>
                  <label class="form-check-label" for="rMale">
                    Male
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="rGender" id="rFem" value="Female">
                  <label class="form-check-label" for="rFem">
                    Female
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="rGender" id="rOther" value="Other">
                  <label class="form-check-label" for="rOther">
                    Other
                  </label>
                </div><br>
                <h6>Birthdate</h6>
                <div class="row form-group">
                        <div class="col-sm-4">
                            <div class="input-group date" id="datepicker">
                                <input name="bdateReg" type="text" class="form-control">
                                <script type="text/javascript">
                                    $(function() {
                                        $('#datepicker').datepicker();
                                    });
                                </script>
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white d-block">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                <h6>Account Type</h6>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="rAccType" id="rUser" value="User" checked>
                  <label class="form-check-label" for="rUser">
                    User
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="rAccType" id="rPub" value="Publisher">
                  <label class="form-check-label" for="rPub">
                    Publisher
                  </label>
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="addon-wrapping">Country</span>
                  <input name="countryReg" type="text" aria-label="First name" class="form-control">
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="addon-wrapping">Favorite Genre</span>
                  <input name="genreReg" type="text" aria-label="First name" class="form-control">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="registerSubmit">
              </div>
            </form>
            </div>
          </div>
        </div>

        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#loginModal" id="loginbtn">
          Login
        </button>

        <!-- Login Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="regModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
            <form method="post">  
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="addon-wrapping">Username</span>
                  <input name="uname" type="text" aria-label="First name" class="form-control">
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="addon-wrapping">Password</span>
                  <input name="pwd" type="password" aria-label="First name" class="form-control">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="loginSubmit">
              </div>
            </form>
            </div>
          </div>
        </div>
    </nav>
    <div class="row justify-content-evenly">
  <?php
    $con= mysqli_connect("127.0.0.1","root","","dbsalesf1") 
    or die("Error in connection");
    if(isset($_POST['registerSubmit'])){		
      //retrieve data from form and save the value to a variable
      //for tbluserprofile
      $fname=$_POST['fname'];		
      $lname=$_POST['lname'];
      $country=$_POST['countryReg'];
      $genre=$_POST['genreReg'];
      $country=$_POST['countryReg'];
      $bdateReg=$_POST['bdateReg'];
      $gender=$_POST['rGender'];
      $accType=$_POST['rAccType'];
      
      $bdate=date("Y-m-d", strtotime($bdateReg));
      $today = date("Y-m-d");
      $diff = date_diff(date_create($bdate), date_create($today));
      $age = $diff->format('%y');
      //for tbluseraccount
      $email=$_POST['email'];		
      $uname=$_POST['unameReg'];
      $pword=$_POST['pwdReg'];
      
      //save data to tbluserprofile			
      
      
      //Check tbluseraccount if username is already existing. Save info if false. Prompt msg if true.
      $sql2 ="Select * from tbluseraccount where username='".$uname."'";
      $result = mysqli_query($con,$sql2);
      $row = mysqli_num_rows($result);
      if($row == 0){
        $sql ="Insert into tbluseraccount(emailadd,username,password,accType) values('".$email."','".$uname."','".$pword."','".$accType."')";
        $result = mysqli_query($con,$sql);
        $sql1 ="Insert into tbluserprofile(firstname,lastname,gender,birthdate,accType,country,favGenre,age) values('".$fname."','".$lname."','".$gender."','".$bdate."','".$accType."','".$country."','".$genre."','".$age."')";
        $result = mysqli_query($con,$sql1);
        echo "<div class='alert alert-success text-center' role='alert'>
        Registered successfully!
      </div>";
      }else{
        echo "<div class='alert alert-danger text-center' role='alert'>
        Username already exists.
      </div>";
      }
    }
  ?>

  <h3 id="poststitle">Stories</h3>

  <div class="d-flex flex-column mb-3" style="padding-bottom: 10%;">
    <?php
      $sql = "SELECT * FROM tblposts WHERE isDeleted='No' ORDER BY postID DESC";
      $result = mysqli_query($con, $sql);

      if(mysqli_num_rows($result) > 0)
      {
       while($row = mysqli_fetch_assoc($result)){
        $sql2 = "SELECT username FROM tbluseraccount WHERE acctID='".$row["accID"]."'";
        $res = mysqli_query($con, $sql2);
        $row2 = mysqli_fetch_array($res);
        $postOwner = $row2[0];
        echo '<div class="divpost">
        <div class="d-flex p-2">
          <img src="avatar.jpg" height="25" style="margin-right: 1%">
          <h6>'.$postOwner.'</h6>';
      echo '</div>
        <div class="card" style="width: 35rem;">
          <img src="pic2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">'.$row["title"].'</p>
          </div>
          <hr>
          <div class="reactbox">
            <div class="react"><a href="..."><img src="heart.png" height="15rem">'.$row["numLikes"].'</a></div>
            <div class="react"><a href="..."><img src="comment.png" height="15rem">'.$row["numComment"].'</a></div>
            <div class="react"><a href="..."><img src="bookmark.png" height="15rem">'.$row["numBookmark"].'</a></div>
          </div>
        </div>
      </div>';
       }
      }
    ?>
    <footer class="bg-body-tertiary text-center text-lg-start fixed-bottom" id="footer" style="background-color: lightgray;">
      <div class="text-center p-3" id="footertext">
        Roddneil B. Gemina and Stephen Clint D. Sales
        <br>
        BSCS - 2
      </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>