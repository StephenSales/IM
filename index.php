<?php
  session_start();
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
      <a class="navbar-brand" href="#">WEBSITE</a>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="Home.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="AboutUs.html">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ContactUs.html">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="report.php">Report</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="stats.php">Statistics</a>
            </li>
          </ul>
        </div>
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#regModal">
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
                </div>
                <div class="row form-group">
                        <label for="date" class="col-sm-1 col-form-label">Birthdate</label>
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
  // session_start();
  $con= mysqli_connect("127.0.0.1","root","","dbsalesf1") 
      or die("Error in connection");
  if(isset($_POST['loginSubmit'])){
    $uname=$_POST['uname'];
      $pwd=$_POST['pwd'];
      $sql ="select * from tbluseraccount where username='".$uname."'";
      $result = mysqli_query($con,$sql);
      $count = mysqli_num_rows($result);
      
      $row = mysqli_fetch_array($result);
      
      if($count== 0){
          echo "<div class='alert alert-danger text-center' role='alert'>
          User does not exist.
        </div>";
              
      }else if($row[3] != $pwd) {
          echo "<div class='alert alert-danger text-center' role='alert'>
          Incorrect password.
        </div>";
      }else{
          $_SESSION['username']=$row[0];
          echo "<h2 class='text-center'>WELCOME TO THE WEBSITE $uname</h2>";
      }
  }
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
			$sql ="Insert into tbluseraccount(emailadd,username,password) values('".$email."','".$uname."','".$pword."')";
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
  if(isset($_POST['premiumSubmit'])){
      $uname=$_POST['unamePrem'];
      $duration=$_POST['flexRadioDefault'];
      $sql ="select * from tbluseraccount where username='".$uname."'";
      $result = mysqli_query($con,$sql);
      $count = mysqli_num_rows($result);
      
      $row = mysqli_fetch_array($result);
      
      if($count== 0){
          echo "<div class='alert alert-danger text-center' role='alert'>
          User does not exist.
        </div>";
      }else{
        $sql1 ="Insert into tblpremium(userid) values('".$row[0]."')";
      }
  }
?>
    <div class="text-center">
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#premiumModal" id="premiumBtn">
          BECOME A PREMIUM USER NOW
        </button>

        <!-- Premium Modal -->
        <div class="modal fade" id="premiumModal" tabindex="-1" aria-labelledby="regModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
            <form method="post">  
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upgrade to Premium</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="addon-wrapping">Username</span>
                  <input name="unamePrem" type="text" aria-label="First name" class="form-control">
                </div>
                <h6>Subscription Type</h6>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    3 Months
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    6 Months
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                  <label class="form-check-label" for="flexRadioDefault3">
                    1 Year
                  </label>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="premiumSubmit">
              </div>
            </form>
            </div>
          </div>
        </div>
    </div>
  <?php
    //creating connection to database
    $con = mysqli_connect("127.0.0.1","root","","dbsalesf1");
    $sql = "SELECT userid, firstname, lastname, gender, birthdate, accType, country, favGenre FROM tblUserProfile";
    //fire query
    $result = mysqli_query($con, $sql);
    $temp = "0";
    if(mysqli_num_rows($result) > 0)
    {
       echo '<table class="table"> <tr> <th></th> <th> Id </th> <th> Name </th> <th> Gender </th> <th> Birthdate </th> <th> Account Type </th> <th> Country </th> <th> Favorite Genre </th> </tr>';
       while($row = mysqli_fetch_assoc($result)){
         // to output mysql data in HTML table format
           echo '<form method="post"> <tr ><td></td> <td name="uid">' . $row["userid"] . '</td>
           <td>' . $row["firstname"] ." ". $row["lastname"] . '</td>
           <td> ' . $row["gender"] . '</td>
           <td>' . $row["birthdate"] . '</td>
           <td>' . $row["accType"] . '</td>
           <td>' . $row["country"] . '</td>
           <td>' . $row["favGenre"] . '</td>
           <td> <button type="button" name="btnUpdate" data-bs-toggle="modal" data-bs-target="#updateModal" id="updatebtn">Update</button>
            <input type="submit" name="btnDelete" value="Delete"> </td> </tr> </form>
            
            <!-- Update Modal -->
        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="regModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
            <form method="post">  
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="addon-wrapping">First Name</span>
                  <!-- <input name="old_fname" style="pointer-events: none" class="input-group-text" id="addon-wrapping" value="'. $row["firstname"] .'"> -->
                  <input name="new_fname" type="text" aria-label="First name" class="form-control">
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="addon-wrapping">Last Name</span>
                  <!-- <input name="old_lname" style="pointer-events: none" class="input-group-text" id="addon-wrapping" value="'. $row["lastname"] .'"> -->
                  <input name="new_lname" type="text" aria-label="First name" class="form-control">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="updateSubmit">
              </div>
            </form>
            </div>
          </div>
        </div>';
        if(isset($_POST['btnDelete'])){
          $sql1 ="Delete from tbluserprofile where userid = '".$row["userid"]."'";
          mysqli_query($con,$sql1);
        }
        if (!defined('FOO_EXECUTED')) {
          if(isset($_POST['updateSubmit'])){
            $new_fname=$_POST['new_fname'];
            $new_lname=$_POST['new_lname'];
            // $old_fname=$_POST['old_fname'];
            // $old_lname=$_POST['old_lname'];
            // $sql1 ="Update tbluserprofile set firstname='".$new_fname."', lastname='".$new_lname."' where firstname='".$old_fname."' AND lastname='".$old_lname."'";
            $sql1 ="Update tbluserprofile set firstname='".$new_fname."', lastname='".$new_lname."' where userid = '".$row["userid"]."'";
            mysqli_query($con,$sql1);
          }
          define('FOO_EXECUTED', true);
        }
       }
       echo '</table>';
    }
    else
    {
        echo "0 results";
    }
    // closing connection
    mysqli_close($con);

?>
    <footer class="bg-body-tertiary text-center text-lg-start fixed-bottom" id="footer">
      <div class="text-center p-3" id="footertext">
        Roddneil B. Gemina and Stephen Clint D. Sales
        <br/>
        BSCS - 2
      </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>