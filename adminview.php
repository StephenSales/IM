<!-- <?php
  session_start();
  $_SESSION['filter']="Newest";
  $con= mysqli_connect("127.0.0.1","root","","dbsalesf1") 
    or die("Error in connection");
  if(isset($_POST['deleteSubmit'])){
    $accID = $_SESSION['accID'];

    $sql = "UPDATE tbluserprofile SET isDeleted='Yes' WHERE userid='".$accID."'";
    $result = mysqli_query($con,$sql);
    $sql = "UPDATE tbluseraccount SET isDeleted='Yes' WHERE acctid='".$accID."'";
    $result = mysqli_query($con,$sql);
    header("Location: guestview.php");
  }
  if(isset($_POST['btnNew'])) {
    $_SESSION['filter']="Newest";
  }
  if(isset($_POST['btnAction'])) {
    $_SESSION['filter']="Action";
  }
  if(isset($_POST['btnComedy'])) {
    $_SESSION['filter']="Comedy";
  }
  if(isset($_POST['btnDrama'])) {
    $_SESSION['filter']="Drama";
  }
  if(isset($_POST['btnFantasy'])) {
    $_SESSION['filter']="Fantasy";
  }
  if(isset($_POST['btnHorror'])) {
    $_SESSION['filter']="Horror";
  }
  if(isset($_POST['btnRomance'])) {
    $_SESSION['filter']="Romance";
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
  <script type="text/javascript">
    function editPostFunction(postID) {
        var myVar = postID;
        document.getElementById("hidden_inputE").value = myVar;
        document.getElementById("editPostModal").submit();
    }
    function deletePostFunction(postID) {
        var myVar = postID;
        document.getElementById("hidden_inputD").value = myVar;
        document.getElementById("deletePostModal").submit();
    }
</script>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <ul class="navbar-nav">
      <form method="post">
        <li class="nav-item dropdown">
          <button id="title" data-bs-toggle="dropdown" aria-expanded="false">
            <h4 style="color: white;"> LITEWRITEUR </h4>
          </button>
          <ul class="dropdown-menu dropdown-menu-dark" style="color: black;">
            <li><input type="submit" class="dropdown-item" href="#" value="Newest" name="btnNew"></li>
            <li><input type="submit" class="dropdown-item" href="#" value="Action" name="btnAction"></li>
            <li><input type="submit" class="dropdown-item" href="#" value="Comedy" name="btnComedy"></li>
            <li><input type="submit" class="dropdown-item" href="#" value="Drama" name="btnDrama"></li>
            <li><input type="submit" class="dropdown-item" href="#" value="Fantasy" name="btnFantasy"></li>
            <li><input type="submit" class="dropdown-item" href="#" value="Horror" name="btnHorror"></li>
            <li><input type="submit" class="dropdown-item" href="#" value="Romance" name="btnRomance"></li>
          </ul>
        </li>
      </form>
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
                <?php
                  $word = $_SESSION['username'];
                  echo "$word";
                ?>
            </button>
            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editModal" href="#">Update Profile</a></li>
                <li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteModal" href="#" style="color: red">Delete Account</a></li>
                <li><a class="dropdown-item" href="guestview.php">Log out</a></li>
            </ul>
            </li>
        </ul>
    </nav>
    </div>
  </div>
  <?php
    $con= mysqli_connect("127.0.0.1","root","","dbsalesf1") 
    or die("Error in connection");
    if(isset($_POST['publishSubmit'])){
      $accID = $_SESSION['accID'];
      $title = $_POST['title'];
      $content = $_POST['content'];
      $genre = $_POST['postGenre'];

      $sql = "Insert into tblposts(accID,title,content,genre) values('".$accID."','".$title."','".$content."','".$genre."')";
      $result = mysqli_query($con,$sql);
      echo "<div class='alert alert-success text-center' role='alert'>
        Story posted successfully!
      </div>";
    }
    if(isset($_POST['editSubmit'])){		
      //retrieve data from form and save the value to a variable
      //for tbluserprofile
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
      $accID = $_SESSION['accID'];

      $sql = "UPDATE tbluserprofile SET gender='".$gender."', birthdate='".$bdate."', accType='".$accType."', country='".$country."', favGenre='".$genre."', age='".$age."' WHERE userid='".$accID."'";
      $result = mysqli_query($con,$sql);
      echo "<div class='alert alert-success text-center' role='alert'>
        Profile Updated Successfully!
      </div>";
    }
    if(isset($_POST['editPostSubmit'])){
      $postID = $_POST['myVar'];
      $title = $_POST['title'];
      $content = $_POST['content'];
      $genre = $_POST['postGenre'];

      $sql = "UPDATE tblposts SET title='".$title."', content='".$content."', genre='".$genre."' WHERE postID='".$postID."'";
      $result = mysqli_query($con,$sql);
      echo "<div class='alert alert-success text-center' role='alert'>
        Story edited successfully!
      </div>";
    }
    if(isset($_POST['deletePostSubmit'])){
      $postID = $_POST['myVar'];

      $sql = "UPDATE tblposts SET isDeleted='Yes' WHERE postID='".$postID."'";
      $result = mysqli_query($con,$sql);
      echo "<div class='alert alert-success text-center' role='alert'>
        Story deleted successfully!
      </div>";
    }
  ?>

  <h3 id="poststitle">Stories</h3>
  <?php
    if ($_SESSION['accType'] == "Admin") {
      echo '<button type="button" class="btn btn-primary" style="margin-left: 30%;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Write Story</button>';
    }
  ?>
  
  <!-- Create Post Modal / ONLY SHOW WHEN PUBLISHER ANG ACCOUNT -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <form method="post">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Chapter Contents</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Title</label>
              <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Content</label>
              <textarea class="form-control" name="content"></textarea>
            </div>
            <select class="form-select" aria-label="Default select example" name="postGenre">
              <option selected>Genre</option>
              <option value="Action">Action</option>
              <option value="Comedy">Comedy</option>
              <option value="Drama">Drama</option>
              <option value="Fantasy">Fantasy</option>
              <option value="Horror">Horror</option>
              <option value="Romance">Romance</option>
            </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Publish" name="publishSubmit">
        </div>
      </form>
      </div>
    </div>
  </div>

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="regModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
            <form method="post">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
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
                <input type="submit" class="btn btn-primary" name="editSubmit">
              </div>
            </form>
            </div>
          </div>
        </div>

        <!-- Delete Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <form method="post">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Alert</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Are you sure you want to delete this account?</label>
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
          <input type="submit" class="btn btn-primary" value="Yes" name="deleteSubmit" style="background-color: red;">
        </div>
      </form>
      </div>
    </div>
  </div>

  <!-- Edit Post Modal -->
  <div class="modal fade" id="editPostModal" tabindex="-1" aria-labelledby="regModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <form method="post">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Chapter Contents</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Title</label>
              <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Content</label>
              <textarea class="form-control" name="content"></textarea>
            </div>
            <select class="form-select" aria-label="Default select example" name="postGenre">
              <option selected>Genre</option>
              <option value="Action">Action</option>
              <option value="Comedy">Comedy</option>
              <option value="Drama">Drama</option>
              <option value="Fantasy">Fantasy</option>
              <option value="Horror">Horror</option>
              <option value="Romance">Romance</option>
            </select>
            <input type="hidden" name="myVar" id="hidden_inputE">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Edit Post" name="editPostSubmit">
        </div>
      </form>
      </div>
    </div>
  </div>

        <!-- Delete Post Modal -->
  <div class="modal fade" id="deletePostModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <form method="post">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Alert</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Are you sure you want to delete this story?</label>
            </div>
            <input type="hidden" name="myVar" id="hidden_inputD">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
          <input type="submit" class="btn btn-primary" value="Yes" name="deletePostSubmit" style="background-color: red;">
        </div>
      </form>
      </div>
    </div>
  </div>
  
  <div class="d-flex flex-column mb-3" style="padding-bottom: 10%;">
    <?php
      $genre = $_SESSION['filter'];
      if($genre == "Newest") {
        $sql = "SELECT * FROM tblposts WHERE isDeleted='No' ORDER BY postID DESC";
      } else {
        $sql = "SELECT * FROM tblposts WHERE isDeleted='No' AND genre = '".$genre."' ORDER BY postID DESC";
      }
      $result = mysqli_query($con, $sql);
      $currOwner = $_SESSION['username'];

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
            echo '<ul class="navbar-nav">
            <li class="nav-item dropdown">
            <button class="more" data-bs-toggle="dropdown" aria-expanded="false">
              <img height="25rem" src="more.png">
            </button>
            <ul class="dropdown-menu dropdown-menu-light">
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editPostModal" href="#" onclick=editPostFunction("'.$row["postID"].'")>Edit</a></li>
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deletePostModal" href="#" onclick=deletePostFunction("'.$row["postID"].'")>Delete</a></li>
                <!-- Naa rani sa posts sa opened account -->
            </ul>
            </li>
        </ul>';
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
        <br/>
        BSCS - 2
      </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>