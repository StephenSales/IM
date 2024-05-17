<!-- <?php
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
      
      if($count== 0){
          echo "<script language='javascript'>
                      alert('username not existing.'); 
              </script>";
      }else if($row[3] != $pwd) {
          echo "<script language='javascript'>
                      alert('Incorrect password');
              </script>";
      }else{
          $_SESSION['username']=$row[0];
          echo "<script language='javascript'>
                      alert('Welcome User: $uname'); 
              </script>";
      }
  }
  if(isset($_POST['registerSubmit'])){		
		//retrieve data from form and save the value to a variable
		//for tbluserprofile
		$fname=$_POST['fname'];		
		$lname=$_POST['lname'];
		
		
		//for tbluseraccount
		$email=$_POST['email'];		
		$uname=$_POST['unameReg'];
		$pword=$_POST['pwdReg'];
		
		//save data to tbluserprofile			
		$sql1 ="Insert into tbluserprofile(firstname,lastname) values('".$fname."','".$lname."')";
		$result = mysqli_query($con,$sql1);
		
		//Check tbluseraccount if username is already existing. Save info if false. Prompt msg if true.
		$sql2 ="Select * from tbluseraccount where username='".$uname."'";
		$result = mysqli_query($con,$sql2);
		$row = mysqli_num_rows($result);
		if($row == 0){
			$sql ="Insert into tbluseraccount(emailadd,username,password) values('".$email."','".$uname."','".$pword."')";
			$result = mysqli_query($con,$sql);
			echo "<script language='javascript'>
						alert('New record saved.');
				  </script>";
		}else{
			echo "<script language='javascript'>
						alert('Username already existing');
				  </script>";
		}
			
		
	}
?> -->
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script></head>
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

          <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Username
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                <li><a class="dropdown-item" href="engagements.php">Engagements</a></li>
                <li><a class="dropdown-item" href="index.php">Log out</a></li>
            </ul>
            </li>
        </ul>
    </nav>
    </div>
</div>

    <h3 id="poststitle">Publisher Requests</h3>
    <div id="tblRequests">
    <table class="table table-dark">
        <thead>
            <th>
                <p>uid</p>
            </th>
            <th>
                <p>Username</p>
            </th>
            <th>
                <p>Country</p>
            </th>
            <th>
                <p>Birthdate</p>
            </th>
            <th>
                <p>Action</p>
            </th>
        </thead>
        <tbody>
            <th>3</th>
            <td>Larry the Bird</td>
            <td>Malaysia</td>
            <td>01/02/2003</td> 
            <td>
                <input type="submit" name="btnAccept" value="Accept" style="margin-right: 0.3%">
                <input type="submit" name="btnDecline" value="Decline">
            </td>
            </tr>
        </tbody>
        </table>
    </div>
  
    <footer class="bg-body-tertiary text-center text-lg-start fixed-bottom" id="footer" style="background-color: lightgray; ">
      <div class="text-center p-3" id="footertext">
        Roddneil B. Gemina and Stephen Clint D. Sales
        <br/>
        BSCS - 2
      </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>