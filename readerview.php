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
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button id="title" data-bs-toggle="dropdown" aria-expanded="false">
            <h4 style="color: white;"> LITEWRITEUR </h4>
          </button>
          <ul class="dropdown-menu dropdown-menu-dark" style="background-color: darkgray">
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
              <a class="nav-link" href="readerview.php">Home <span class="sr-only">(current)</span></a>
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
                <li><a class="dropdown-item" href="#">Engagements</a></li>
                <li><a class="dropdown-item" href="#">Log out</a></li>
            </ul>
            </li>
        </ul>
    </nav>
    </div>
  </div>

  <h3 id="poststitle">Stories</h3>
  <div class="d-flex flex-column mb-3" style="padding-bottom: 10%;">
    <div class="divpost">
      <div class="d-flex p-2">
        <img src="avatar.jpg" height="25" style="margin-right: 1%">
        <h6>Stephen Sales</h6>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <button class="more" data-bs-toggle="dropdown" aria-expanded="false">
              <img height="25rem" src="more.png">
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="#">Edit</a></li>
                <li><a class="dropdown-item" href="#">Delete</a></li>
                <!-- Naa rani sa posts sa opened account -->
            </ul>
            </li>
        </ul>
      </div>
      <div class="card" style="width: 35rem;">
        <img src="pic2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Sample caption</p>
        </div>
        <hr>
        <div class="reactbox">
          <div class="react"><a href="..."><img src="heart.png" height="15rem">0</a></div>
          <div class="react"><a href="..."><img src="comment.png" height="15rem">0</a></div>
          <div class="react"><a href="..."><img src="bookmark.png" height="15rem">0</a></div>
        </div>
      </div>
    </div>
    <div class="divpost">
      <div class="d-flex p-2">
        <img src="avatar.jpg" height="25" style="margin-right: 1%">
        <h6>Stephen Sales</h6>
      </div>
      <div class="card" style="width: 35rem;">
        <img src="pic2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Sample caption</p>
        </div>
        <hr>
        <div class="reactbox">
          <div class="react"><a href="..."><img src="heart.png" height="15rem">0</a></div>
          <div class="react"><a href="..."><img src="comment.png" height="15rem">0</a></div>
          <div class="react"><a href="..."><img src="bookmark.png" height="15rem">0</a></div>
        </div>
      </div>
    </div>
    <div class="divpost">
      <div class="d-flex p-2">
        <img src="avatar.jpg" height="25" style="margin-right: 1%">
        <h6>Stephen Sales</h6>
      </div>
      <div class="card" style="width: 35rem;">
        <img src="pic2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Caaaptionnn.</p>
        </div>
        <hr>
        <div class="reactbox">
          <div class="react"><a href="..."><img src="heart.png" height="15rem">0</a></div>
          <div class="react"><a href="..."><img src="comment.png" height="15rem">0</a></div>
          <div class="react"><a href="..."><img src="bookmark.png" height="15rem">0</a></div>
        </div>
      </div>
    </div>
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